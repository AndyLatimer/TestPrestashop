<?php /*%%SmartyHeaderCode:1877559b168ecb12882-23182771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1504797929,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1877559b168ecb12882-23182771',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b6c5c4153c30_79380841',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b6c5c4153c30_79380841')) {function content_59b6c5c4153c30_79380841($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://127.0.0.1/prestashop/ca/my-account" rel="nofollow">
      El vostre compte
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">El vostre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://127.0.0.1/prestashop/ca/addresses" title="Adreces" rel="nofollow">
            Adreces
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/ca/order-history" title="Comandes" rel="nofollow">
            Comandes
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/ca/credit-slip" title="Notes de crèdit de devolució" rel="nofollow">
            Notes de crèdit de devolució
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/ca/identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
