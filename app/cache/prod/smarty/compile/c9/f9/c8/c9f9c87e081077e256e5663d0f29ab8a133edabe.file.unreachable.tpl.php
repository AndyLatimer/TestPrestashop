<?php /* Smarty version Smarty-3.1.19, created on 2017-09-12 17:44:11
         compiled from "C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1329259b800cbcecc35-17558054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f9c87e081077e256e5663d0f29ab8a133edabe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1504797930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329259b800cbcecc35-17558054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b800cbd07676_68963619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b800cbd07676_68963619')) {function content_59b800cbd07676_68963619($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
