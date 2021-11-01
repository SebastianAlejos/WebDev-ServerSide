<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Playlist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/standard.css">
</head>
<body style="background-color: #4E3066">
<div class="row mt-5">
    <div class="col-4 offset-4 custom-form">
        <form action="" method="post">
            <div class="row">
                <a href="#" class="text-decoration-none">
                    <div class="row m-3 text-center" style="height:50px">
                        <i class="fa fa-angle-left fa-3x dark pr-3"></i>
                        <p class="dark my-auto">Back</p>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="form-group text-center col-6 offset-3">
                    <button type="button" class="btn btn-primary btn-lg w-100" style="background: #b36eeb">Add Image
                    </button>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-10 offset-1">
                    <input id="album-name" name="playlist-name" type="text" class="form-control"
                           aria-describedby="text1HelpBlock" required="required">
                    <span id="text1HelpBlock" class="form-text text-muted">Playlist Name</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-10 offset-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <input type="text" id="album-song-list" class="form-control" name="album-song-list"
                               placeholder="search my library for songs" required="required"
                               aria-describedby="text3HelpBlock">
                    </div>
                    <label for="text3HelpBlock" class="form-text text-muted">Add Songs</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-4 offset-2">
                    <div class="custom-controls-stacked">
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input"
                                   value="community">
                            <label for="checkbox_0" class="custom-control-label">Public Playlist</label>
                        </div>
                    </div>
                    <div class="custom-controls-stacked">
                        <div class="custom-control custom-checkbox">
                            <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input"
                                   value="publish">
                            <label for="checkbox_1" class="custom-control-label">Publish Playlist</label>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg w-100">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>