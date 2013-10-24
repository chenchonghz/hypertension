<?php require_once('libs/localhost.php'); ?>
<?php
mysql_select_db("hypertension", $con);

$sql="INSERT INTO news (news_title, news_content) VALUES ('$_POST[title]','$_POST[content]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
sleep(2);
header("Location:index.php");

mysql_close($con)
?>
