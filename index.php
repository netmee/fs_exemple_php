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

include("init.php");
?>

<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8733929-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-8733929-16');
</script>
<title>Fournisseur de service France-Connect</title>
</head>

<body>
<h1>Exemple de fournisseur de service FranceConnect en PHP</h1>

<?php if (isset($_SESSION['user_info'])) : ?>

Identifié en tant que <b><?php echo $_SESSION['user_info']['given_name']." ".$_SESSION['user_info']['family_name'] ?></b>
&nbsp;-&nbsp;<a href='logout.php'>Déconnexion</a>

<h2>Données issues de la connexion FranceConnect</h2>
<table>
	<?php foreach($_SESSION['user_info'] as $key=>$value): ?>
		<tr>
			<th><?php echo $key ?></th>
			<td><?php echo $value ?></td>
		</tr>
	<?php endforeach;?>
</table>

<h2>Données issues du checktoken depuis le fournisseur de service</h2>
<pre>
<?php print_r(json_encode($_SESSION['checktoken_info']));?>
</pre>

<h2>Données issues du checktoken depuis le fournisseur de données</h2>
<pre>
<?php print_r(json_encode($_SESSION['fd_data']));?>
</pre>
<?php else :?>
<h2>Introduction</h2>
	<p>Ce client de test fournisseur de service illustre le fonctionnement de l'authentification France Connect.</p>
	<p>Il retourne les données issues du "userinfo" utilisé par les fournisseurs de service et du "checktoken" utilisé par les fournisseurs de données.</p>
<h2>Prérequis à la connexion</h2>
	<p>L'authentification doit se faire sur le bouchon du fournisseur d'identité ameli avec les données suivantes :</p>
	<p>NIR : 1510246102043</p>
	<p>Mot de passe : 1234</p>
<h2>Connexion France connect</h2>
<div style='text-align: center'>
<form action='authentication.php' method='post'>
	<input type="submit" value="S'identifier avec France Connect" style="background:url(fc_bouton_alt1_v2.png) no-repeat; width:224px; height:56px; font-size:0; border:0; cursor:pointer;"/>
</form>
</div>
<?php endif;?>
</body>
</html>
