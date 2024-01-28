<?php
/* Smarty version 4.3.1, created on 2024-01-28 16:20:25
  from 'C:\xampp\htdocs\prestashop\adminkku\themes\default\template\controllers\attributes_groups\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b61c597179d5_13700509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c20c657ad5b2fa856ab1bd29f3913aa1c0d03b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminkku\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\form\\form.tpl',
      1 => 1706347443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b61c597179d5_13700509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7297792765b61c596168d5_54053833', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_7297792765b61c596168d5_54053833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_7297792765b61c596168d5_54053833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
