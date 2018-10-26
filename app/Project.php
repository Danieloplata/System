<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Set fillable form fields
	protected $fillable = [
        'user_id',
		'projectName',
        'amountQuoted',
        'companyEmail',
        'clientEmail',
        'methodology',
        'totalInterviews',
        'questionnaireBy',
        'scriptedBy',
        'fieldStart',
        'fieldEnd',
        'dataSpecBy',
        'finalDataBy',
        'openQuestions',
        'codeframeRequired',
        'rawDataFormat',
        'crossTabsRequired',
        'tabFormat',
        'verbFormat',
        'notes'
	];

    public function path()
    {
        return '/projects/' .  $this->id;
    }

    public function panels()
    {
        return $this->hasMany(Panel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
