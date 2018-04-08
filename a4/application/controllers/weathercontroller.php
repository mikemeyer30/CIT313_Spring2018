<?php

class WeatherController extends Controller{


	public function index(){

		$this->set('result', false);


	}

	public function getresults(){

		$xml = simplexml_load_file("http://api.wunderground.com/api/a777bfe86d0bb4e3/conditions/q/".$_POST['zip'].".xml");
		$this->set('result', true);
		$this->set('weather', $xml);

	}

}

?>
