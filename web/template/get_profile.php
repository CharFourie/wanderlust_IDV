<?php

//connect to database
mysql_connect("localhost","root","mysql")or die(mysql_error());
mysql_select_db("social_network")or die(mysql_error());

$id = addslashes($_REQUEST['id']);

$image = mysql_query("SELECT * FROM users WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['user_image'];

echo $image;

?>
