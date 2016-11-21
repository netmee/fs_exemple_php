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

<?php

abstract class FournisseurDonnees {

	private $franceConnect;
	
	abstract public function getName();
	abstract protected function getFDURL();
	
	
	//TODO fonction permettant de renvoyer la liste des scopes
	
	public function __construct(FranceConnect $franceConnect){
		$this->franceConnect = $franceConnect;
	}
	
	public function getInfo($access_token){
		return $this->franceConnect->getInfoFromFD($this->getFDURL(), $access_token);
	}
		
	
} 