<?php /* Smarty version Smarty-3.1.19, created on 2017-09-11 18:24:51
         compiled from "C:\xampp\htdocs\prestashop\admin542kuccvj\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964959b6b8d3f05cb6-40900900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dfd66322917fe658a3bae6b48b0305e0525162d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin542kuccvj\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1504797880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964959b6b8d3f05cb6-40900900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b6b8d4003816_18957978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b6b8d4003816_18957978')) {function content_59b6b8d4003816_18957978($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
