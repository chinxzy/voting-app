
<?php 
function redirectToLogin($error){
    $_SESSION["error"] = $error;
    header('location:index.php');
}
include ('db.php');
session_start();


						$cat = $_POST['nom'];
                        $id = $_SESSION['id'];
					switch($_GET['action']){
						case 'add':	
                            
                            $result = mysqli_query($db,"SELECT * FROM nominations WHERE nominee='$cat'AND category_id='$id'");
                            $num_rows = mysqli_num_rows($result);
                            
                            if ($num_rows > 0) {
                                redirectToLogin("incorrect credentials");
                            }	else{
								$query = "INSERT INTO nominations
								(id,nominee,category_id)
								VALUES ('Null','".$cat."','".$id."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
                                echo "done";
                                header('location: nominate.php?id='.$id);
                            }
						break;
                       
		
						}
            ?>