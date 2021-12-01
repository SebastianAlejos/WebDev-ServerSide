<?php
/* Smarty version 3.1.33, created on 2020-11-03 11:27:02
  from 'C:\@Cloud\OneDrive - Messiah University\@Messiah\@Courses\CIS 291\WebExamples\ClassRoster\public_html\templates\courseList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa184d61fed65_68840266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7fbd2b347f2029cff6c177c01e0b00903020fb' => 
    array (
      0 => 'C:\\@Cloud\\OneDrive - Messiah University\\@Messiah\\@Courses\\CIS 291\\WebExamples\\ClassRoster\\public_html\\templates\\courseList.tpl',
      1 => 1604420820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa184d61fed65_68840266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18736576125fa184d61df289_22486657', 'tabTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17536776865fa184d61e0125_83688255', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainLayout.tpl");
}
/* {block 'tabTitle'} */
class Block_18736576125fa184d61df289_22486657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabTitle' => 
  array (
    0 => 'Block_18736576125fa184d61df289_22486657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Course List<?php
}
}
/* {/block 'tabTitle'} */
/* {block 'body'} */
class Block_17536776865fa184d61e0125_83688255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17536776865fa184d61e0125_83688255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <?php if (count($_smarty_tpl->tpl_vars['courses']->value) == 0) {?>
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
                        <h2>Course: <?php echo $_smarty_tpl->tpl_vars['course']->value['Course_Name'];?>
</h2>
                        <p>Teacher: <?php echo $_smarty_tpl->tpl_vars['course']->value['Teacher_FName'];?>
 <?php echo $_smarty_tpl->tpl_vars['course']->value['Teacher_LName'];?>
</p>
                    </div>
                    <div class="panel-body">
                        <?php if (count($_smarty_tpl->tpl_vars['course']->value['Students']) == 0) {?>
                            <div class="alert alert-warning">There are no students in this course</div>
                        <?php } else { ?>
                            <table>
                                <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course']->value['Students'], 'student', false, 'studentID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['studentID']->value => $_smarty_tpl->tpl_vars['student']->value) {
?>
                                    <tr><td>
                                            <a href="viewStudent.php?id=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['Student_FName'];?>

                                            </a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['Student_LName'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['Email'];?>

                                            <a class="btn btn-danger pull-right"
                                               href="index.php?courseid=<?php echo $_smarty_tpl->tpl_vars['courseID']->value;?>
&studentid=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
">
                                                Remove From Class
                                            </a>
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
<?php
}
}
/* {/block 'body'} */
}
