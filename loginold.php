<html>
<head>
<style>
#slide {position:absolute; left:150px;top:201px;}
#lo {position:absolute; left:150px;top:120px;}
#log { position:absolute; left:550px; top: 280px; width: 800px; height: 270px; }
</style>
<script language="JavaScript">
����function ImgArray(len)
{
	��this.length=len;
	 }
	ImgName=new ImgArray(3);
	ImgName[0]="1.jpg";
	ImgName[1]="2.jpg";
	ImgName[2]="3.jpg";
	var t=0;
	function playImg()
	{
	if (t==2)
	��{t=0;}
	 else
	��{t++;}
	img.style.filter="blendTrans(Duration=1)";
	img.filters[0].apply();
	 img.src=ImgName[t];
	img.filters[0].play();
	mytimeout=setTimeout("playImg()",1500);
	��}
</script>
<link href="css/reg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<body bgcolor="#FFFFFF" text="#000000" onload="playImg()">
<div id="slide"><img src="pics/1.jpg" width="670" height="220" name="img" ></div>
<div id="lo"><img src="pics/lo_logo.gif" width="340" height="45"></div>

<form name="loginFrom" action="userController.php?flag=login"
			method="post">
			<div class="mainbox formbox" id="log">
				<table align="right" cellpadding="0" cellspacing="0">
					<tr>
						<td width="27%" height="47" align="center">
							<span class="STYLE1">�û���</span>
						</td>
						<td width="24%">
							<input name="user_name" type="text"
								id="user_name"></td>
					</tr>
					<tr>
						<td width="27%" height="47" align="center">
							<span class="STYLE1">����</span>
						</td>
						<td width="25%">
							<input name="user_password" type="password"
								id="user_password"></td>
					</tr>
					<tr>
						<td width="19%" colspan="2">
							<button name="submit" type="submit"
								class="submit STYLE1">
								��¼</button>
							<span class="STYLE1">
								<a href="register.php">
									ע�� </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
							<span class="STYLE1">
								<a href="home.php"> ���ο�������</a>
							</span>
						</td>
					</tr>
				</table>
			</div>
		</form>
</body>
</html>