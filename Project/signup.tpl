<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/standard.csss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
    <body>
        <div class="signup-form">
            <form action="" method="post">
                <h2>Sign Up</h2>
                <hr>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                            <i class="fa fa-check"></i>
                        </span>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox"> Sign up for our awesome newsletter. We'll never stop bugging you!</label>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox" required="required">Agree to our <a href="terms-conditions.html">Terms & Conditions. </a> We doubt you'll read it all!</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </form>
            <div class="text-center login-text">Already have an account? <a href="login.html">Login here</a></div>
        </div>
    </body>
</html>