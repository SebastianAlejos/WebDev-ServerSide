<?php
/* Smarty version 3.1.33, created on 2020-11-03 10:51:52
  from 'C:\@Cloud\OneDrive - Messiah University\@Messiah\@Courses\CIS 291\WebExamples\ClassRoster\public_html\templates\mainLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa17c987565a8_55290095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7219d1b45a47c4dfa677a16f96bb1811d42305a4' => 
    array (
      0 => 'C:\\@Cloud\\OneDrive - Messiah University\\@Messiah\\@Courses\\CIS 291\\WebExamples\\ClassRoster\\public_html\\templates\\mainLayout.tpl',
      1 => 1604418710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa17c987565a8_55290095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5152485525fa17c9874b005_77035709', 'tabTitle');
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/style.css" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11052963115fa17c98754532_53155282', 'extraCSS');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9806653155fa17c987554e5_52256894', 'extraJavaScript');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6392720445fa17c98755d71_59792078', 'body');
?>


<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'tabTitle'} */
class Block_5152485525fa17c9874b005_77035709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_5152485525fa17c9874b005_77035709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Weaver Web<?php
}
}
/* {/block 'tabTitle'} */
/* {block 'extraCSS'} */
class Block_11052963115fa17c98754532_53155282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraCSS' => 
  array (
    0 => 'Block_11052963115fa17c98754532_53155282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraCSS'} */
/* {block 'extraJavaScript'} */
class Block_9806653155fa17c987554e5_52256894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraJavaScript' => 
  array (
    0 => 'Block_9806653155fa17c987554e5_52256894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraJavaScript'} */
/* {block 'body'} */
class Block_6392720445fa17c98755d71_59792078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6392720445fa17c98755d71_59792078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
