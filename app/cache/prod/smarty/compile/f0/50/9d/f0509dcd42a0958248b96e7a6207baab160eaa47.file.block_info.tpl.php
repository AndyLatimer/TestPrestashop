<?php /* Smarty version Smarty-3.1.19, created on 2017-09-07 18:49:07
         compiled from "C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\block_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373659b17883ca40a7-97994461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0509dcd42a0958248b96e7a6207baab160eaa47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\block_info.tpl',
      1 => 1504802931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373659b17883ca40a7-97994461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b17883cd9620_67644506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b17883cd9620_67644506')) {function content_59b17883cd9620_67644506($_smarty_tpl) {?>
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="paypal_block_info panel">
            <p><?php echo smartyTranslate(array('s'=>'If you have just created your PayPal account, check the email sent by PayPal to confirm your email address.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <p><?php echo smartyTranslate(array('s'=>'If you encounter rounding issues with your orders, please change PrestaShop round mode in:','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['preference']->value,'javascript','UTF-8');?>
}"><?php echo smartyTranslate(array('s'=>'Preferences > General','mod'=>'paypal'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'then change for:','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <p><b><?php echo smartyTranslate(array('s'=>'Round mode: "Round up away from zero, when it is half way there (recommended) "','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
            <p><b><?php echo smartyTranslate(array('s'=>'Round type: "Round on each item"','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
        </div>
    </div>
</div><?php }} ?>
