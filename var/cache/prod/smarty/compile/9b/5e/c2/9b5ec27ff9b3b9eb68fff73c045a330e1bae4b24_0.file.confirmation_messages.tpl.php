<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 16:21:15
  from 'C:\wamp64\www\anais\admin796eu6cwz\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6040faeb992ea4_29814610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5ec27ff9b3b9eb68fff73c045a330e1bae4b24' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\admin796eu6cwz\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1614328932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6040faeb992ea4_29814610 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
