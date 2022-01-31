<?php
session_start();
include_once("db.php");

function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'The client\'s IP address is : '.getIp();
?>
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
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container d-flex justify-content-center">
            <nav class="navbar navbar-expand-md transparent sticky-top">
              <!-- Brand -->
              <a class="navbar-brand" href="#"><img src="images/otugoh.svg" alt="" class="img-fluid"></a>
            
              <!-- Toggler/collapsibe Button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <!-- Navbar links -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto tog">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">
                      <span class="material-icons-outlined cat">
                        category
                        </span>
                        Categories
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nominate.php">
                      <span class="material-icons-outlined nom">
                        how_to_reg
                        </span>
                        Nominations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">
                      <span class="material-icons-outlined contact res">
                        emoji_events
                        </span>
                        Results</a>
                  </li>
                </ul>
              </div>
            </nav>
            </div>
            <nav class="navbar navbar-expand transparent fixed-bottom">
              <div>
                <ul class=" d-flex nav navbar-nav ml-auto justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                          <span class="material-icons-outlined cat1">
                            category
                            </span>
                            Categories
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="nominate.php">
                          <span class="material-icons-outlined nom1">
                            how_to_reg
                            </span>
                            Nominations</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">
                          <span class="material-icons-outlined res1">
                            emoji_events
                            </span>
                            Results</a>
                      </li>
                </ul>
              </div>
            </nav>
    
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Welcome to EEE class of 2020 Awards for year 2021
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                            
              
                                
                        <div class="table-responsive">
                          
                            <table class="table table-bordered table-hover table-striped">
                            <form role="form" method="post" action="addvote.php?action=add">
                            <thead>
                              <?php
                                  $id = $_GET['id'];
                                  $_SESSION['id'] = $id;
                                  $query = 'SELECT * FROM categories WHERE category_id="'.$id.'"';
                                  $result = mysqli_query($db, $query) or die (mysqli_error($db));

                              ?>
                              <?php
                              while($row = mysqli_fetch_assoc($result)){ ?>
                               <tr>
                                      <th><?php echo $row['category'];?></th>
                                  </tr>
                                  <?php }

                                  ?>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nominee</td>
                                        <td>Results</td>
                                    </tr>
                                <?php
                                        $nominees = "SELECT nominee, count
                                        FROM vote
                                        WHERE vote.category_id = '".$id."'";
                                        $res = mysqli_query($db, $nominees) or die (mysqli_error($db));
                                        ?>
                                        <?php
                                        while($row = mysqli_fetch_assoc($res)){ ?>
                                <tr>
                                  <td>
                                
                                  <?php  echo $row['nominee']; ?>
                                        
                                    </td>
                                    <td>
                                    <?php  echo $row['count']; ?>
                                    </td>
                                </tr>
                                <?php }

                                ?>
                                <tr>
                               
                                </tr>
                                <tr></tr>
                                </tbody> 
                                </form>  
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>

    <!--/main body-->
<!--modal-->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="col-lg-12">
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addvote.php?action=add">
                            
                        <div class="alert alert-warning">
                              <h6>Sure to proceed?</h6>
                            </div>
                            <button type="submit" class="btn btn-default" name="vote">YES</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">NO</button> 


                      </form>  
                    </div>
                </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </script>
    <script>
        
    </script>
    <script type="text/javascript">
      $(function() {
        $("#myList").JPaging({
          pageSize: 1
        });
      });
    </script>
</body>

</html>