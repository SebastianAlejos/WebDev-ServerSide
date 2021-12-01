<?php
/* Smarty version 3.1.33, created on 2019-10-31 14:23:32
  from 'C:\@Cloud\Dropbox\@Messiah\@courses\cis291\WebExamples\public_html\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb26a474e183_79223680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c41e57f3608aac29582b92d5a17bace30a4b523' => 
    array (
      0 => 'C:\\@Cloud\\Dropbox\\@Messiah\\@courses\\cis291\\WebExamples\\public_html\\templates\\home.tpl',
      1 => 1572546211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb26a474e183_79223680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3289118885dbb26a473f790_21150982', 'tabTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10774627745dbb26a4740560_19518958', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainLayout.tpl");
}
/* {block 'tabTitle'} */
class Block_3289118885dbb26a473f790_21150982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_3289118885dbb26a473f790_21150982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Students in Web I<?php
}
}
/* {/block 'tabTitle'} */
/* {block 'body'} */
class Block_10774627745dbb26a4740560_19518958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10774627745dbb26a4740560_19518958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Students in Web I</h1>
    <table style="border: solid thin black; collapse: collapse;">
        <tr><th>First Name</th><th>Last Name</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['student']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['First_Name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value['Last_Name'];?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php
}
}
/* {/block 'body'} */
}
