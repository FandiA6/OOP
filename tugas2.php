<?php

class pistol{
	var $ammo;
	var $name;
	var $owner;

	function shoot()
	{
	return "pistol menembak";
	}
	function reload()
	{
	return "pistol mereload";
	}
}
$pistol_maman = new pistol();
$pistol_maman->owner ="Maman";
$pistol_maman->name ="D-Eagle";
$pistol_maman->ammo = "20 amunisi";


echo $pistol_maman->owner;
echo "<br />";
echo $pistol_maman->ammo;
echo "<br />";
echo $pistol_maman->name;
echo "<br />";

echo "<br />";
echo $pistol_maman->shoot();
echo "<br />";
echo $pistol_maman->reload();
?>