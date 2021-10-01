<?php
/* Smarty version 3.1.39, created on 2021-09-28 22:38:15
  from 'C:\Users\basti\Documents\Fall 2021\Webdev2\WebDev-ServerSide\Smarty_exercise\public_html\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153d1973573b5_74473853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8481c1dec3636c02e9b3356746bfb341f3b74187' => 
    array (
      0 => 'C:\\Users\\basti\\Documents\\Fall 2021\\Webdev2\\WebDev-ServerSide\\Smarty_exercise\\public_html\\templates\\form.tpl',
      1 => 1632883093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153d1973573b5_74473853 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"
  </head>
  <body>
    <h1>Form Developing & Processing</h1>
    <form action="process.php" method="POST">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="f_name" class="lab">First Name</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-book"></i>
                </div>
              </div> 
              <input id="f_name" name="f_name" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-6">
          <label for="lname" class="lab">Last Name</label> 
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book-o"></i>
              </div>
            </div> 
            <input id="lname" name="lname" type="text" class="form-control">
          </div>  
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label for="street" class="lab">Street</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-home"></i>
                </div>
              </div> 
              <input id="street" name="street" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label for="city" class="lab">City</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-building"></i>
                </div>
              </div> 
              <input id="city" name="city" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label for="state" class="lab">State</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-map"></i>
                </div>
              </div> 
              <input id="state" name="state" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <label for="zip_code" class="lab">Zip Code</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-map-marker"></i>
                </div>
              </div> 
              <input id="zip_code" name="zip_code" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="user_id" class="lab">Chosen User ID</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-at"></i>
                </div>
              </div> 
              <input id="user_id" name="user_id" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="password" class="lab">Password</label> 
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-lock"></i>
                </div>
              </div> 
              <input id="password" name="password" type="password" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label class="lab">Gender</label> 
            <div>
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="male"> 
                  <label for="gender_0" class="custom-control-label">Male</label>
                </div>
              </div>
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="female"> 
                  <label for="gender_1" class="custom-control-label">Female</label>
                </div>
              </div>
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="gender" id="gender_2" type="radio" class="custom-control-input" value="other"> 
                  <label for="gender_2" class="custom-control-label">Other</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label class="lab">Are you married?</label> 
            <div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="married" id="married_0" type="checkbox" class="custom-control-input" value="married"> 
                <label for="married_0" class="custom-control-label">Yes</label>
              </div>
            </div>
          </div> 
        </div>
      </div>

      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </body>
</html>
<?php }
}
