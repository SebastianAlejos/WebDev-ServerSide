<?php
/* Smarty version 3.1.33, created on 2021-11-23 10:46:46
  from 'C:\Users\basti\Documents\Fall 2021\Webdev2\WebDev-ServerSide\unit7_ClassRoster\public_html\templates\mainLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619d0ce6d483a9_36805897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098951cb7215f53588909cad7ba228bbfe244f94' => 
    array (
      0 => 'C:\\Users\\basti\\Documents\\Fall 2021\\Webdev2\\WebDev-ServerSide\\unit7_ClassRoster\\public_html\\templates\\mainLayout.tpl',
      1 => 1637682405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d0ce6d483a9_36805897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_259234026619d0ce6d44773_78298120', 'tabTitle');
?>
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223445738619d0ce6d475a9_64861943', 'extraCSS');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048563645619d0ce6d47af6_30476386', 'extraJavaScript');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636448456619d0ce6d47f83_12932347', 'body');
?>


<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'tabTitle'} */
class Block_259234026619d0ce6d44773_78298120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_259234026619d0ce6d44773_78298120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Weaver Web<?php
}
}
/* {/block 'tabTitle'} */
/* {block 'extraCSS'} */
class Block_223445738619d0ce6d475a9_64861943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraCSS' => 
  array (
    0 => 'Block_223445738619d0ce6d475a9_64861943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraCSS'} */
/* {block 'extraJavaScript'} */
class Block_2048563645619d0ce6d47af6_30476386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraJavaScript' => 
  array (
    0 => 'Block_2048563645619d0ce6d47af6_30476386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraJavaScript'} */
/* {block 'body'} */
class Block_1636448456619d0ce6d47f83_12932347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1636448456619d0ce6d47f83_12932347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
