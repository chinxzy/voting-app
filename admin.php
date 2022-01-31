

<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<title>chinedu | portfolio</title>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EEE AWARDS 2021</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="assets/aos-master/dist/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

</head>

<body>
    <div class="container">
    <form name="f1" action="login.php" onsubmit="return validation()" method="POST">
      <div class="login_wrapper ">
        <div class="login col-lg-12 col-md-12 col-sm-12">
          
          <div class="loginForm col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group user">
                <label for="form_name">Username *</label>
                <input id="user" name="user" type="text" class="form-control " placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group pass">
                  <label for="form_password">password*</label>
                  <input type="password" id="pass" name="pass" class="form-control " placeholder="Please enter your password *" required="required" data-error="password is required.">
                  <div class="invalid-feedback"><?php echo $password_err; ?></div>
                </div>
              </div>
              <div class="button">
                <button class="btn" name="Login" type="submit" id="btn" value="Login">Login</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        if (isset($_SESSION["error"])) {
          $error = $_SESSION["error"];
          echo "<span>$error</span>";
        }
        ?>
    </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </script>
    <script src="index.js"></script>
    <script type="text/javascript">
      $(function() {
        $("#myList").JPaging({
          pageSize: 1
        });
      });
    </script>
</body>

</html>