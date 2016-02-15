<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ServiceController extends BaseController
{
    //
    public function getSiteData() {
    	header('Content-Type: application/json');
    	$profile = new ProfileController();
    	return json_encode(array(
    		"getSiteData" => array(
    			"status" => 0,
    			"meta",
    			"results" => array(
    				"skills" => $profile->getBasicInfo()
    			)
    		)
    	));
    }

    public function getGithubData() {

    }
}
