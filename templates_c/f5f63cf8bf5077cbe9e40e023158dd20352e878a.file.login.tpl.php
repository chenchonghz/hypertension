<?php /* Smarty version Smarty-3.1.14, created on 2013-08-07 13:42:03
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16400882675201de2b2033e3-46160660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1375854034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16400882675201de2b2033e3-46160660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5201de2b2392f4_77117928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5201de2b2392f4_77117928')) {function content_5201de2b2392f4_77117928($_smarty_tpl) {?><style type="text/css">
<!--
#xueya {
	position: absolute;
	top: 200px;
}
#shangchuan {
	float: none;
	position: absolute;
	top: 300px;
}
-->
</style>

<form id="xueya" method="post" action="addxueya.php" >
  <p>
  <label >血压值:</label>
  <input  name="xueya" type="text"  />
  <p/>
  <br />
  <p>
  <input type="submit" name="submit" value="  确 定  "/>
  </p>
  <br />
点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />
  </form>
  </div>
<div id="shangchuan">
<br>
<br>
<br>
<br>
<br>
<br>
<p> 上传个人病历</p>
<br>
<br>
<br>   
<form  enctype="multipart/form-data" action="up.php" method="POST">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>
    <marquee><strong><h2>支持任何格式，可同时支持三个文件共同上传，注意上传文件的的总大小不要超过8M</h2></strong></marquee>
</div>
<?php }} ?>