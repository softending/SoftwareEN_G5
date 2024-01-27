<?php
/* Smarty version 4.3.1, created on 2024-01-27 17:57:41
  from 'C:\xampp\htdocs\prestashop\adminkku\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b4e1a5665b23_05767533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '001c657891ab3b5171a1c47c19a2e8125c7b79ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminkku\\themes\\new-theme\\template\\content.tpl',
      1 => 1706347472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b4e1a5665b23_05767533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
