<?php /* Smarty version Smarty-3.1.19, created on 2017-09-07 18:19:45
         compiled from "C:\xampp\htdocs\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2908959b171a12ff474-80498720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b2bf12592b7ebec0eab81de0470a4b1fe783d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1504797920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2908959b171a12ff474-80498720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b171a131a603_28838639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b171a131a603_28838639')) {function content_59b171a131a603_28838639($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
