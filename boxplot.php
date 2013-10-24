<html>
        <head>
<title>boxplot</title>
</head>
<body>
<h1>Boxplot</h1>
<form>
<?php
exec("cat boxplot.r | /usr/local/bin/R --vanilla",$output);
exec("convert ../download/boxplot.pdf ../download/boxplot.png");
exec("chown root ../download/boxplot.png");
exec("cp ../download/boxplot.png ./");
echo "<img src='boxplot.png'>";
?>
</form>
</body>
</html>