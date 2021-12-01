<?php
/* Smarty version 3.1.33, created on 2019-11-21 14:35:28
  from 'C:\@Cloud\Dropbox\@Messiah\@courses\cis291\WebExamples\public_html\templates\courseList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6e70018b555_43521545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9957a6346c6ea2a96fa6409af784b956ee14197' => 
    array (
      0 => 'C:\\@Cloud\\Dropbox\\@Messiah\\@courses\\cis291\\WebExamples\\public_html\\templates\\courseList.tpl',
      1 => 1574364925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6e70018b555_43521545 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
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
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Course Example</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Course Listings</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Course Listings</h1>
            <?php if (0 == 1) {?>
                <div class="alert alert-danger">
                    There are no course listings available at this time.
                </div>
            <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courses']->value, 'course', false, 'courseID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['courseID']->value => $_smarty_tpl->tpl_vars['course']->value) {
?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Course: <?php echo $_smarty_tpl->tpl_vars['course']->value->Course_Name;?>
</h2>
                        <p>Teacher: <?php echo $_smarty_tpl->tpl_vars['course']->value->Teacher->First_Name;?>
 <?php echo $_smarty_tpl->tpl_vars['course']->value->Teacher->Last_Name;?>
</p>
                    </div>
                    <div class="panel-body">
                        <?php if ($_smarty_tpl->tpl_vars['course']->value->roster === false) {?>
                            <div class="alert alert-warning">There are no students in this course</div>
                        <?php } else { ?>
                            <table>
                                <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course']->value->roster, 'student', false, 'studentID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['studentID']->value => $_smarty_tpl->tpl_vars['student']->value) {
?>
                                    <tr><td>
                                            <a href="viewStudent.php?id=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value->First_Name;?>

                                            </a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->Last_Name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->Email;?>
</td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>
                        <?php }?>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
