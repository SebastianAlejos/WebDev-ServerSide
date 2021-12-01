<?php
/* Smarty version 3.1.33, created on 2021-11-22 08:03:03
  from 'C:\@Cloud\OneDrive - Messiah University\@Messiah\@Courses\CIS 291\291WebExamples\unit6_ClassRoster\public_html\templates\mainLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619b9507cbbcc3_77523860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579b2b74c76bc65ef3dd5435fa484c6890f0aadc' => 
    array (
      0 => 'C:\\@Cloud\\OneDrive - Messiah University\\@Messiah\\@Courses\\CIS 291\\291WebExamples\\unit6_ClassRoster\\public_html\\templates\\mainLayout.tpl',
      1 => 1604418710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619b9507cbbcc3_77523860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1647445906619b9507cb6981_88067331', 'tabTitle');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_562181957619b9507cb97b0_20899891', 'extraCSS');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371915589619b9507cbaab9_22600666', 'extraJavaScript');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_973540298619b9507cbb405_92346838', 'body');
?>


<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'tabTitle'} */
class Block_1647445906619b9507cb6981_88067331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_1647445906619b9507cb6981_88067331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Weaver Web<?php
}
}
/* {/block 'tabTitle'} */
/* {block 'extraCSS'} */
class Block_562181957619b9507cb97b0_20899891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraCSS' => 
  array (
    0 => 'Block_562181957619b9507cb97b0_20899891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraCSS'} */
/* {block 'extraJavaScript'} */
class Block_371915589619b9507cbaab9_22600666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'extraJavaScript' => 
  array (
    0 => 'Block_371915589619b9507cbaab9_22600666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'extraJavaScript'} */
/* {block 'body'} */
class Block_973540298619b9507cbb405_92346838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_973540298619b9507cbb405_92346838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
