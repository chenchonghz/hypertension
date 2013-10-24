<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:../login.html");
    exit();
}
 //$_SESSION['username']="guixiaoke";

$username = $_SESSION['username'];

require_once 'SVGGraph.php';
$graph = new SVGGraph(500, 400);
include('../conn.php');
$result = mysql_query("select * from $username");
while($fields = mysql_fetch_array($result)){
//echo $fields['xueya']."<br/>";
$array[]=$fields['sbp'];
}
//print_r($names);
//$array=array(1, 4, 8, 9, 160, 25, 27);
//print_r($array);
$graph->Values($array);
$graph->Render('LineGraph');
?>
