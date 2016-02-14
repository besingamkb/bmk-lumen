<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function getBasicInfo() {
    	return array(
    		'name' => "Mark Kevin Cardente Besinga",
    		'birthday' => "October 23, 1992",
    		'age' => date_diff(date_create('1992-10-23'), date_create('today'))->y,
    		'birthplace' => "Tagum City, Davao",
    		'slogan' => 'A self taught full stack developer'
    	);
    }

    /**
	* @return array
    */
    public function getSkills() {
    	return array(
    		"php", "mysql", "js", "git", "python", "ruby"
    	);
    }

    

    /**
	* @param string
	* @return array
    */
    public function getSkillsProp($skills) {
    	// todo
    }
}
