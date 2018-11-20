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
$access_token = $_SESSION['user_info']['access_token'];

/* Test des limites d'appel */
for ($i = 1; $i <= 10; $i++) {
    $result = $fdTest->getInfo($access_token);
}
$_SESSION['fd_data'] = $result;

/* Vérification de l'access token depuis le fournisseur de données */
$_SESSION['checktoken_info'] = $franceConnect->checktoken($access_token);

//$fdTest = new FDTest($franceConnect);
//SESSION['fd_user_info'][$fdTest->getName()] = $fdTest->getInfo($access_token);

//dGuichet = new FDGuichetBreton($franceConnect);
//SESSION['fd_user_info'][$fdGuichet->getName()] = $fdGuichet->getInfo($access_token);

header("Location: index.php");
