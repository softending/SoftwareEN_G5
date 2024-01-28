<?php
/* Smarty version 4.3.1, created on 2024-01-28 16:20:12
  from 'C:\xampp\htdocs\prestashop\adminkku\themes\default\template\controllers\attributes_groups\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b61c4c290302_82651464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e62f190618488dca9645aea291fffd4f93875368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminkku\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\list\\list_header.tpl',
      1 => 1706347444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b61c4c290302_82651464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14805013365b61c4c28f372_64992866', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_14805013365b61c4c28f372_64992866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_14805013365b61c4c28f372_64992866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
