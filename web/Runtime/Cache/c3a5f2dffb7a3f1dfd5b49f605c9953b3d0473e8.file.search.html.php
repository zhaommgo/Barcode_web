<?php /* Smarty version Smarty-3.1.6, created on 2016-09-04 22:30:52
         compiled from "D:/phpstudy/WWW/web/Home/View\Search\search.html" */ ?>
<?php /*%%SmartyHeaderCode:2666957c6b250f12651-87567378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a5f2dffb7a3f1dfd5b49f605c9953b3d0473e8' => 
    array (
      0 => 'D:/phpstudy/WWW/web/Home/View\\Search\\search.html',
      1 => 1472999366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666957c6b250f12651-87567378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57c6b25106311',
  'variables' => 
  array (
    'info_text' => 0,
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6b25106311')) {function content_57c6b25106311($_smarty_tpl) {?><html>
	<head>
		<title> Barcode </title>
		<meta name="generator" content="editplus" />
		<meta name="author" content="zmm" />
		<meta name="keywords" content="Barcode" />
		<meta charset="utf-8">
	</head>

	<body style='padding:0;margin:0;'>
		<p >
			<table cellspacing="" border="0" bgcolor="#E0E0E0" height="70" width="100%">
				<tr>
					<td width="10%" align="center" >
						<img src="<?php echo @IMG_URL;?>
search.jpg">
					</td>
					<td valign="middle">
						<br/>
						<form action="/web/index.php/Home/Search/search" method="post" align="left">
							<input name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
" style="width:60%; height:40;font-size:18px;" valign="middle"/> 
							<input name="search" type="submit"  bgcolor="blue" value="搜索" style="width:12%;height:40px;font-size:18px;"/>
						</form>			
					</td>
				</tr>
			</table >
		</p>
		<br/>
			<hr width="85%" size="3" noshade="noshade"/>
		</br>
		<p>
			<table border="0" width=80% align="center" cellspacing="0"> 
				<caption align="left">
					<font color="black"  size="5"><b>基因Barcode：</b></font>
				</caption >
				<tr>
					<td>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<img src="<?php echo @IMG_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['bc_img'];?>
"/>
						<?php } ?>				
					</td>
				</tr>
			</table>
		</p>
		<br/>
	</body>
</html><?php }} ?>