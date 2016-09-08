<?php /* Smarty version Smarty-3.1.6, created on 2016-09-04 22:30:48
         compiled from "D:/phpstudy/WWW/web/Home/View\Search\index1.html" */ ?>
<?php /*%%SmartyHeaderCode:1865857c6b244db4087-71891316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1180641b346ae1e8e8a5e1507eb05561ce88b7d2' => 
    array (
      0 => 'D:/phpstudy/WWW/web/Home/View\\Search\\index1.html',
      1 => 1472999340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865857c6b244db4087-71891316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c6b244ec7db',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6b244ec7db')) {function content_57c6b244ec7db($_smarty_tpl) {?><html>
	
	<head>
		<title> Barcode </title>
		<meta name="generator" content="editplus" />
		<meta name="author" content="zmm" />
		<meta name="keywords" content="Barcode" />
		<meta charset="utf-8">
	</head>
	
	<body>
		<table  align="center" border="0" width="900" cellspacing="1">
			<tr>
				<td height="150px">
				</td>
			</tr>
			<tr>
				<td align="center">
					<img src="<?php echo @IMG_URL;?>
index.jpg"/>
					<br/>
					<br/>
				</td>
			</tr>
		</table >
		<table border="0" align="center" width="900" cellspacing="1">
			<tr>
				<td width="100">				
				</td>
				<td >
					<form action="/web/index.php/Home/Search/search" method="post" align="left">
						<input name="name" type="text" style="width:680px; height:40px;font-size:18px;"  /> 
						<input type="submit"  value="搜索" name="search"  style="width:80px;height:40px;font-size:18px;"/ >
					</form>
				</td>
				<td>
				</td>
			</tr>
		</table>
	<p>
	</p>
	</body>
</html>
<?php }} ?>