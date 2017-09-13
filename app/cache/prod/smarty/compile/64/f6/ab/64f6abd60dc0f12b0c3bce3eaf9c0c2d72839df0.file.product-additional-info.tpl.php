<?php /* Smarty version Smarty-3.1.19, created on 2017-09-12 17:43:59
         compiled from "C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2349559b800bf1fdbb3-05920990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f6abd60dc0f12b0c3bce3eaf9c0c2d72839df0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1504797930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2349559b800bf1fdbb3-05920990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b800bf20fc20_67747563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b800bf20fc20_67747563')) {function content_59b800bf20fc20_67747563($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
