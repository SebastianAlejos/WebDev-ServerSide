{extends "mainLayout.tpl"}
{block name=tabTitle}Course List{/block}
{block name=body}
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
            {if count($courses) == 0}
                <div class="alert alert-danger">
                    There are no course listings available at this time.
                </div>
            {else}
            {foreach $courses as $courseID => $course}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Course: {$course['Course_Name']}</h2>
                        <p>Teacher: {$course['Teacher_FName']} {$course['Teacher_LName']}</p>
                    </div>
                    <div class="panel-body">
                        {if count($course['Students']) == 0}
                            <div class="alert alert-warning">There are no students in this course</div>
                        {else}
                            <table>
                                <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
                                {foreach $course['Students'] as $studentID => $student}
                                    <tr><td>
                                            <a href="viewStudent.php?id={$studentID}">
                                                {$student['Student_FName']}
                                            </a>
                                        </td>
                                        <td>{$student['Student_LName']}</td>
                                        <td>{$student['Email']}
                                            <a class="btn btn-danger pull-right"
                                               href="index.php?courseid={$courseID}&studentid={$studentID}">
                                                Remove From Class
                                            </a>
                                        </td>
                                    </tr>
                                {/foreach}
                            </table>
                        {/if}
                    </div>
                </div>
            {/foreach}
            {/if}
        </div>
    </div>
</div>
{/block}