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

session_start();

require_once(__DIR__."/lib/CurlWrapper.class.php");
require_once(__DIR__."/lib/FranceConnect.class.php");
require_once(__DIR__."/lib/FDTest.class.php");

require_once("LocalSettings.php");

/* initialistation france connect */
$franceConnect = new FranceConnect($france_connect_base_url, $client_id, $client_secret, $url_callback);

/* initialistation du fournisseur de données */
$fdTest = new FDTest($fd_api_key, $fd_base_url);

header("Content-type: text/html; charset=utf-8");
