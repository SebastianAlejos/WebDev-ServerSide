<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Your information: </h2>
        <?php
        
        if(empty($_POST['f_name'])){
            echo "First Name: was empty";
        } else {
            echo "First Name: " . $_POST['f_name'];
        }
        echo "<br>";
        echo "<br>";
        
        if(empty($_POST['lname'])){
            echo "Last Name: was empty";
        } else {
            echo "Last Name: " . $_POST['lname'];
        }
        echo "<br>";
        echo "<br>";
        
        if (empty($_POST['city'])){
            echo "City: was empty";
        } else {
            echo "City: " . $_POST['city'];
        }
        echo "<br>";
        echo "<br>";
        
        if (empty($_POST['state'])){
            echo "State: was empty";
        } else {
            echo "State: " . $_POST['state'];
        }
        echo "<br>";
        echo "<br>";
        
        if (empty($_POST['zip_code'])){
            echo "Zip Code: was empty";
        } else {
            echo "Zip Code: " . $_POST['zip_code'];
        }
        echo "<br>";
        echo "<br>";
        
        if (empty($_POST['user_id'])){
            echo "User ID: was empty";
        } else {
            echo "User ID: " . $_POST['user_id'];
        }
        
        echo "<br>";
        echo "<br>";
        if (empty($_POST['password'])){
            echo "Password: was empty";
        } else {
            echo "Password: " . $_POST['password'];
        }

        echo "<br>";
        echo "<br>";
        if (empty($_POST['gender'])){
            echo "Gender: was not checked";
        } else{
            echo "Gender: " . $_POST['gender'];
        }

        echo "<br>";
        echo "<br>";
        if (empty($_POST['married'])){
            echo "You are not married";
        } else{
            echo "You are married";
        }

        ?>
    </body>
</html>