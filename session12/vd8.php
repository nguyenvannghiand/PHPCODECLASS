<?php
	$sv = array("hoten" => "NguyenVan A", "email" => "nva@mgail.com", "namsinh" => 1990);
?>
<h1>Hoten: <?php echo $sv["hoten"];?></h1>
<h1>Email: <?php echo $sv["email"];?></h1>
<h1>Namsinh: <?php echo $sv["namsinh"];?></h1>
<pre><?php print_r($sv);?></pre>
<?php foreach ($sv as $key=>$value):?>
<?php endforeach;  ?>