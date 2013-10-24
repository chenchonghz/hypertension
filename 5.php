<html>
        <head>
<title>5</title>
</head>
<body>
<h1>5</h1>

<?php
exec("cat 5.r | /usr/local/bin/R --vanilla",$output);
exec("convert ./r_tmp/9.pdf ./r_tmp/9.png");
exec("chown root ./r_tmp/9.png");
exec("cp ./r_tmp/9.png ./");
echo "<img src='9.png'>";
?>
</body>
</html>