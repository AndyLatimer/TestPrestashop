<?php /* Smarty version Smarty-3.1.19, created on 2017-09-07 18:20:28
         compiled from "C:\xampp\htdocs\prestashop\admin542kuccvj\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1058559b171cc74ae44-84057605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e601372d1f9f17aa9a8bd8a29cf535b41650613f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin542kuccvj\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1504797881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058559b171cc74ae44-84057605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b171cc76c7c2_12755696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b171cc76c7c2_12755696')) {function content_59b171cc76c7c2_12755696($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
