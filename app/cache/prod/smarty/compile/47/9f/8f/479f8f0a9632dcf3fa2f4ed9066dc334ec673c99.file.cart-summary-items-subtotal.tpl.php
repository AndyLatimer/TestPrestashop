<?php /* Smarty version Smarty-3.1.19, created on 2017-09-12 17:49:25
         compiled from "C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2112159b80205efe093-18705130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '479f8f0a9632dcf3fa2f4ed9066dc334ec673c99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1504797930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2112159b80205efe093-18705130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b80206001260_15160164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b80206001260_15160164')) {function content_59b80206001260_15160164($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
