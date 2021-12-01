{extends "mainLayout.tpl"}
{block name="body"}
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
                <li class="active"><a href="{$WEB_URL}index.php">Course Listings</a></li>
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
            {if isset($message)}
                <div class="alert alert-danger">
                    {$message}
                </div>
            {else}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>{$student.First_Name} {$student.Last_Name}</h2>
                    </div>
                    <div class="panel-body">
                        <p>Email: {$student.Email}</p>
                        <p>Grade Level: {$student.Grade_Level}</p>
                    </div>
                </div>
            {/if}
            <a href="{$WEB_URL}">Return to Course List</a>
        </div>
    </div>
</div>
{/block}