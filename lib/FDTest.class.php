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

require_once("FournisseurDonnees.class.php");

class FDTest extends FournisseurDonnees {
	
	public function getName(){
		return "FD de Test quotient familiale";
	}
	
	protected function getFDURL(){
		return "http://fdp.integ01.dev-franceconnect.fr/quotientFamilial";
	}
	
	public function getInfo($access_token){
		$info = parent::getInfo($access_token);
		return array('quotient' => $info['quotient']) ;
	}
	
}