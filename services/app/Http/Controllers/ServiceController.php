<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ServiceController extends BaseController
{
    //
    public function getSiteData() {
    	$profile = new ProfileController();
    	print_r($profile->getBasicInfo());
    }

    public function getGithubData() {

    }
}
