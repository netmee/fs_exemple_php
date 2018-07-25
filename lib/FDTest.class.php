<?php
#    This file is part of the PHP example for FranceConnect
#
#    Copyright (C) 2015-2016 Eric Pommateau, Maxime Reyrolle, Arnaud Bétrémieux
#
#    This example is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    This example is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this example.  If not, see <http://www.gnu.org/licenses/>.

class FDTest {

	private $api_key;
	private $base_url;
	
	public function __construct($api_key, $base_url){
		$this->api_key = $api_key;
		$this->base_url = $base_url;
	}

	public function getName(){
		return "FD de Test";
	}
	
	public function getData($access_token){
		$curlWrapper = new CurlWrapper();
		$curlWrapper->addHeader("x-gravitee-api-key", $this->api_key);
		//$curlWrapper->addHeader("Authorization", "Bearer $access_token");		
		$result = $curlWrapper->get($this->getRessourceURL("me"));
		return json_decode($result, true);
	}

	private function getRessourceURL($ressource){
		return trim($this->base_url,"/")."/$ressource";
	}	
}