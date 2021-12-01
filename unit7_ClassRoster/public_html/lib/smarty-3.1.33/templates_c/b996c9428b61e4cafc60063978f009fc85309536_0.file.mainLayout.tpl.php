<?php
/* Smarty version 3.1.33, created on 2019-10-31 14:00:44
  from 'C:\@Cloud\Dropbox\@Messiah\@courses\cis291\WebExamples\public_html\templates\mainLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb214c328194_78824714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b996c9428b61e4cafc60063978f009fc85309536' => 
    array (
      0 => 'C:\\@Cloud\\Dropbox\\@Messiah\\@courses\\cis291\\WebExamples\\public_html\\templates\\mainLayout.tpl',
      1 => 1572544842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbb214c328194_78824714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2203674995dbb214c326cd3_37772066', 'tabTitle');
?>
</title>

    <!-- this is a test -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20088950805dbb214c3275d1_06052938', 'extraJavaScript');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17654968425dbb214c327c89_05468422', 'body');
?>

</body>
</html><?php }
/* {block 'tabTitle'} */
class Block_2203674995dbb214c326cd3_37772066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_2203674995dbb214c326cd3_37772066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'tabTitle'} */
/* {block 'extraJavaScript'} */
class Block_20088950805dbb214c3275d1_06052938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraJavaScript' => 
  array (
    0 => 'Block_20088950805dbb214c3275d1_06052938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraJavaScript'} */
/* {block 'body'} */
class Block_17654968425dbb214c327c89_05468422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17654968425dbb214c327c89_05468422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
