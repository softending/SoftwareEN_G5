<?php
/* Smarty version 4.3.1, created on 2024-01-28 16:20:16
  from 'C:\xampp\htdocs\prestashop\adminkku\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b61c50250d63_12524128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e8be814da50805c862c3f505a8fc07049a1212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminkku\\themes\\default\\template\\content.tpl',
      1 => 1706347443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b61c50250d63_12524128 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
