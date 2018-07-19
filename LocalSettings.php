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

/* URL de base de l'API France Connect */
$france_connect_base_url = "https://fcp.integ01.dev-franceconnect.fr/api/v1/";

/* Client ID */
$client_id = getenv('FC_CLIENT_ID'));

/* Secret ID */
$client_secret = getenv('FC_CLIENT_SECRET'));

/* URL vers laquel est redirigé l'utilisateur après le login France Connect */
//$url_callback = "http://localhost:2020/callback.php";
$url_callback = getenv('FC_URL_CALLBACK'));
