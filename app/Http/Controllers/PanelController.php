<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;
use App\Country;
use App\Provider;
use App\CountryPanel;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$panels = Panel::latest()
            ->paginate(10);

	  	return view('panel.index', compact('panels'));
    }

    public function show(Panel $panel)
    {
        $responseStatistics = $panel->getResponseStatistics($panel);

		return view('panel.show', compact('panel', 'responseStatistics'));
    }

    public function create($projectID)
    {
        $countries = Country::all();

		return view('panel.create', compact('projectID', 'countries'));
    }

    public function store(Request $request)
    {
        $panelData = $request->validate([
            'project_id' => 'required',
            'panelName' => 'required|max:150',
            'redirectLink' => 'required|url'
        ]);

		$panel = Panel::create($panelData);

        $providerData = $request->validate([
            'providerName' => 'required',
            'completeLink' => 'required',
            'quotaFullLink' => 'required',
            'screenoutLink' => 'required' 
        ]);

        $providerData["panel_id"] = $panel->id;
        Provider::create($providerData);

        $countries = $request->panelCountries;

        foreach ($countries as $country) 
        {
            CountryPanel::create([
                'panel_id' => $panel->id,
                'country_id' => $country
            ]);
        }

		return redirect()
            ->route('showPanel', $panel->id)
            ->with('message', 'Panel created');
    }

    public function edit(Panel $panel)
    {
        $countries = Country::all();

        return view('panel.edit', compact('panel', 'countries'));
    }

    /**
     * @param Request $request
     * @param Panel $panel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Panel $panel)
    {
        $data = $request->validate([
            'panelName' => 'required|max:150',
            'redirectLink' => 'required|url'
        ]);

        $panel->update($data);

        return redirect()
            ->route('showPanel', $panel->id)
            ->with('message', 'Panel updated');
    }

    public function destroy(Panel $panel) 
    {
        $projectID = $panel->project->id;

        $panel->delete();
        $panel->respondents()->delete(); 

        return redirect()
            ->route('showProject', $projectID)
            ->with('message', 'Panel deleted');
    }
}