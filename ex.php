<?php 
include 'queries.php';
$class="";
if (isset($_GET['r']))
{
	$class = $_GET['r'];
}
test($class);
?>