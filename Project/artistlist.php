<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search for Albums</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="standard.css">
</head>
<nav>
    <?php
    $results = array("The Beatles", "The Beatles", "The Beatles", "The Beatles","The Beatles","The Beatles","The Beatles",);
    $searchTerm = "The Beatles";
    ?>

    <div class="navigation" style="max-height: 70px">
        <div class="row">
            <div class="col-1 offset-1 p-2">
                <a href="#"><img src="./images/goodvibeslogo.png" style="max-height: 55px" alt="Logo"></a>
            </div>
            <div class="col-4 pt-3 offset-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <input type="text" name="search" class="form-control"
                           placeholder="search for songs, albums, playlists, artists, and users">
                </div>
            </div>
            <div class="col-1 offset-1 border-right text-center mt-4" style="max-height:30px">
                <p>
                    <a href="#">Log In</a>
                </p>
            </div>
            <div class="col-1 text-center mt-4" style="max-height:30px">
                <p>
                    <a href="#">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
</nav>
<div>
    <h3 class="mt-5 pl-5 pb-5 m-1">
        <?php echo count($results); ?> results for "<?php echo $searchTerm; ?>".
    </h3>
    <div class="main-content ml-5 p-5 w-25">
        <?php
        foreach ($results as $result) {
            echo '<div class="ml-5 selection w-50">';
            echo '<p class="pl-3">';
            echo '<a href="#"><strong>' . $result . "</a>";
            echo "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>