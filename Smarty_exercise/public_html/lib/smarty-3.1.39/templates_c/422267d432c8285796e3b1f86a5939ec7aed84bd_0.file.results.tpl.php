<?php
/* Smarty version 3.1.39, created on 2021-10-07 11:41:56
  from 'C:\Users\basti\Documents\Fall 2021\Webdev2\WebDev-ServerSide\Smarty_exercise\public_html\templates\results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f15443b4e63_63052416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422267d432c8285796e3b1f86a5939ec7aed84bd' => 
    array (
      0 => 'C:\\Users\\basti\\Documents\\Fall 2021\\Webdev2\\WebDev-ServerSide\\Smarty_exercise\\public_html\\templates\\results.tpl',
      1 => 1633621292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f15443b4e63_63052416 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
    <h1>Your results will be here</h1>
    <p>Your name: <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</p>
    <p>Your last name: <?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
</p>
    <p>Your city  <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</p>
    <p>Your state  <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</p>
    <p>Your zip code <?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
</p>
    <p>Your user ID <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
</p>
    <p>Your password <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</p>
    <p>Your gender <?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</p>
    <p>You are <?php echo $_smarty_tpl->tpl_vars['married']->value;?>
</p>
</body>
</html><?php }
}
