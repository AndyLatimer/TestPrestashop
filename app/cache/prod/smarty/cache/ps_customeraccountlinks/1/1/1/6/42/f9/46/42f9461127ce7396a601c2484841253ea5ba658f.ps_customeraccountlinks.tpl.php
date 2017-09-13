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
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b168ecb97b34_79849612',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b168ecb97b34_79849612')) {function content_59b168ecb97b34_79849612($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://127.0.0.1/prestashop/es/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://127.0.0.1/prestashop/es/direcciones" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/es/facturas-abono" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/es/datos-personales" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="http://127.0.0.1/prestashop/es/historial-compra" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
