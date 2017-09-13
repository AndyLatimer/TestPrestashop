<?php /* Smarty version Smarty-3.1.19, created on 2017-09-12 15:55:10
         compiled from "C:\xampp\htdocs\prestashop\admin542kuccvj\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1112259b7e73e28e7d5-65917424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec778aaee05e9d99f9a94d49c82683745a4e862c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin542kuccvj\\themes\\default\\template\\content.tpl',
      1 => 1504797878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1112259b7e73e28e7d5-65917424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b7e73e2cdb78_24352085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b7e73e2cdb78_24352085')) {function content_59b7e73e2cdb78_24352085($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
