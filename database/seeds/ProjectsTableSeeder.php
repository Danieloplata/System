<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('projects')->insert([
	        'projectName' => 'Test Project '.str_random(5),
			'amountQuoted' => '£20,000',
			'companyEmail' => 'company.email@email.com',
			'clientEmail' => 'client.email@email.com',
			'methodology' => 'Online Survey',
			'totalInterviews' => '1000',
			'questionnaireBy' => '01/01/1990',
			'scriptedBy' => '01/01/1990',
			'fieldStart' => '01/01/1990',
			'fieldEnd' => '01/01/1990',
			'dataSpecBy' => '01/01/1990',
			'finalDataBy' => '01/01/1990',
			'openQuestions' => '3',
			'codeframeRequired' => '',
			'rawDataFormat' => 'SPSS',
			'crossTabsRequired' => 'on',
			'tabFormat' => 'Excel',
			'verbFormat' => 'Excel',
			'notes' => 'Additional notes go here'
		]);
    }
}