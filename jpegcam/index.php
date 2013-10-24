<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>图片上传</title>

<script type="text/javascript" src="webcam.js"></script>
<style type="text/css">
#cam{float:left; width:320px; height:300px; margin:50px}
.btn{height:28px; line-height:28px; border:1px solid #d3d3d3; margin-top:10px; background:url(btn_bg.gif) repeat-x; cursor:pointer}
#results{margin-top:50px}
</style>
</head>

<body>
<div id="header">
</div>
<div id="main">
   <div id="cam">
   <script language="JavaScript">
		webcam.set_api_url( 'action.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		
		document.write( webcam.get_html(320, 320, 154,154) );
	</script>
   
		<p style="text-align:center">
		<input type=button value="点击这里拍照" class="btn" onClick="take_snapshot()">
        </p>
	
    <script language="JavaScript">
		//webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function take_snapshot() {
			// take snapshot and upload to server
			document.getElementById('results').innerHTML = '<h4>Uploading...</h4>';
			webcam.snap();
		}
		
		//function my_completion_handler(msg) {
			// extract URL out of PHP output
			//if (msg.match(/(http\:\/\/\S+)/)) {
				//var image_url = RegExp.$1;
				// show JPEG image in page
				//document.getElementById('results').innerHTML = 
					//'<h4>Upload Successful!</h4>' + 
					//'<img src="' + image_url + '">';
				
				// reset camera for another shot
				//webcam.reset();
			//}
			//else alert("上传成功");
			//<?php //header('Location:../login.php');?>
		//}
	</script>
   </div>
   <div id="results">
   </div>
   
</div>
<div id="footer">
    
</div>
<p id="stat"><script type="text/javascript" src="http://js.tongji.linezing.com/1870888/tongji.js"></script></p>
</body>
</html>
