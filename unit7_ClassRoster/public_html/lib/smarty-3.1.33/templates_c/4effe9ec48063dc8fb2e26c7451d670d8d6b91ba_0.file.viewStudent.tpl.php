<?php
/* Smarty version 3.1.33, created on 2020-11-03 10:06:13
  from 'C:\@Cloud\OneDrive - Messiah University\@Messiah\@Courses\CIS 291\WebExamples\ClassRoster\public_html\templates\viewStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa171e5c22463_48168854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4effe9ec48063dc8fb2e26c7451d670d8d6b91ba' => 
    array (
      0 => 'C:\\@Cloud\\OneDrive - Messiah University\\@Messiah\\@Courses\\CIS 291\\WebExamples\\ClassRoster\\public_html\\templates\\viewStudent.tpl',
      1 => 1604415968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa171e5c22463_48168854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14991600165fa171e5c1a4a0_59300876', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainLayout.tpl");
}
/* {block "body"} */
class Block_14991600165fa171e5c1a4a0_59300876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14991600165fa171e5c1a4a0_59300876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Course Example</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
index.php">Course Listings</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Student Details</h1>
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php } else { ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2><?php echo $_smarty_tpl->tpl_vars['student']->value['First_Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['Last_Name'];?>
</h2>
                    </div>
                    <div class="panel-body">
                        <p>Email: <?php echo $_smarty_tpl->tpl_vars['student']->value['Email'];?>
</p>
                        <p>Grade Level: <?php echo $_smarty_tpl->tpl_vars['student']->value['Grade_Level'];?>
</p>
                    </div>
                </div>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
">Return to Course List</a>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "body"} */
}
