<?php /* Smarty version Smarty-3.1.19, created on 2014-10-11 13:49:30
         compiled from "C:\wamp\www\prestashop\admin3832\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295425439194a5e62c5-32384512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3cc7fb82141f3d37ac0837e8f71f39454ddf6f5' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin3832\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295425439194a5e62c5-32384512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5439194a6d1be3_67453971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439194a6d1be3_67453971')) {function content_5439194a6d1be3_67453971($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
