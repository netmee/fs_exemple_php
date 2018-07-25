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

require_once("init.php");

$_SESSION['user_info'] = $franceConnect->callback();

/* Appel du fournisseur de données */
/* initialistation du fournisseur de données */
$fdTest = new FDTest($fd_api_key, $fd_base_url);
$access_token = $_SESSION['user_info']['access_token'];

error_log(print_r("api_key : " . $fd_api_key, TRUE), 3, __DIR__."/../debug.log");
error_log(print_r("fd_base_url : " . $fd_base_url, TRUE), 3, __DIR__."/../debug.log");
error_log(print_r("access_token : " . $access_token, TRUE), 3, __DIR__."/../debug.log");

$_SESSION['fd_data'] = $fdTest->getData($access_token);

/* Vérification de l'access token depuis le fournisseur de données */
$_SESSION['checktoken_info'] = $franceConnect->checktoken($access_token);

//$fdTest = new FDTest($franceConnect);
//SESSION['fd_user_info'][$fdTest->getName()] = $fdTest->getInfo($access_token);

//dGuichet = new FDGuichetBreton($franceConnect);
//SESSION['fd_user_info'][$fdGuichet->getName()] = $fdGuichet->getInfo($access_token);

header("Location: index.php");
