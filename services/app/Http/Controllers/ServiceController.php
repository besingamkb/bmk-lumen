<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ServiceController extends BaseController
{
	public function __construct() {
		header('Content-Type: application/json');
	}
    //
    public function getSiteData() {
    	
    	$profile = new ProfileController();
    	return json_encode(array(
    		"getSiteData" => array(
    			"status" => "ok",
    			"meta" => array(
    				"title" => "./bmk-scripts",
    				"keywords" => "web developer, php developer, wordpress, cms, website, developer, angularjs developer, html, css, js, javascript developer",
    				"description" =>  "As a web developer my main role is to develop a web application. But for me. Its not just to develop. But to create a masterpiece that transform idea's into reality. That produce more traffics comes in by ensuring a highspeed web performance. That secures my user's identity by using the right way and tools, that able to extends by building a scalable and maintanable code structure."
    			),
    			"results" => $profile->getBasicInfo()
    		)
    	));
    }

    public function getSkillsData() {
    	$profile = new ProfileController();
    	return json_encode(array(
    		"results" => $profile->getSkills()
    	));
    }

    public function getGithubData() {

    }
}
