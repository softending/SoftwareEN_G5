<?php
/* Smarty version 4.3.1, created on 2024-01-28 16:20:14
  from 'C:\xampp\htdocs\prestashop\adminkku\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b61c4e22e667_71812187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a74f2225ba41fb302574715028b8ebadd3c8c92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminkku\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1706347450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b61c4e22e667_71812187 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
