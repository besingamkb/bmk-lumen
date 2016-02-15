<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    public function getBasicInfo() {
    	return array(
    		'name' => "Mark Kevin Besinga",
    		'birthday' => "October 23, 1992",
    		'age' => date_diff(date_create('1992-10-23'), date_create('today'))->y,
    		'birthplace' => "Tagum City, Davao",
    		'address' => '116b mem2 g enriquez brgy vergara mandaluyong city',
    		'slogan' => 'A self taught full stack developer',
    		'aboutme' => "I'm Mark Kevin, I developed my self as full stack web developer. Born in Tagum City Davao, grown up in a small island in Caluya, Antique. I'm working now in Metro Manila, a father of my 2 adorable daugthers. I studied 2 years at INFOTECH IAS. My interest in programming started when I took up my course computer science, I developed my skills with self study.",
    		"aboutme2" => "As a web developer my main role is to develop a web applications. But for me, it's not just to develop but to create a masterpiece that transform idea's into reality that produce more traffic comes in by ensuring a highspeed web performance that secures my user's identity by using the right way and tools that able to extends by building a scalable and maintanable code structure."
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
