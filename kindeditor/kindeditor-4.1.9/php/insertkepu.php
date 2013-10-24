<?php require_once('localhost.php'); ?>
<?php
mysql_select_db("hypertension", $con);
$sql="INSERT INTO kepu (kepu_title, kepu_content) VALUES ('$_POST[title]','$_POST[content1]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
sleep(2);
header("Location:kepu.php");

mysql_close($con)
?>
