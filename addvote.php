<?php include ('db.php');
session_start();
?>
<?php
					
                       $id= $_SESSION['id'];
                        $nom = $_POST['radio'];
						$ip = $_SERVER['REMOTE_ADDR'];

						 function addVotes(){
							 global $id;
							 global $nom;
							 global $db;
							$sql =  "UPDATE vote SET count=count+1 WHERE nominee='$nom'AND category_id='$id'";
							  mysqli_query($db,$sql)or die ('Error in updating Database');
						 }
						
                        function addIP(){
							global $id;
							 global $nom;
							 global $db;
							global $ip;
							if (empty($nom)) {
								header( "location: error.php?id=$id" );
							} else{
							$sql1 = "INSERT INTO voters
							(ip,category_id)
							VALUES ('".$ip."','".$id."')";
							mysqli_query($db,$sql1)or die ('Error in updating Database');
							}
						}
                        
						function addVoters(){
							global $id;
							 global $nom;
							 global $db;
							$sql2 = "INSERT INTO vote
							(nominee,category_id,count)
							VALUES ('".$nom."','".$id."','1')";
							mysqli_query($db,$sql2)or die ('Error in updating Database');
						}

					switch($_GET['action']){
						case 'add':
							$res = mysqli_query($db,"SELECT * FROM voters WHERE ip='$ip' AND category_id='$id'");		
							$result = mysqli_query($db,"SELECT * FROM vote WHERE nominee='$nom'AND category_id='$id'");
                            $num_rows = mysqli_num_rows($result);
							$num_rows1 = mysqli_num_rows($res);
                            
                            if ($num_rows1 > 0 ) {
								echo "Werey why you wan vote again";
							
								
							  } elseif($num_rows > 0){
								addVotes();
								addIP();

								
							  }
							  else{
								  addIP();
								  addVoters();
								  header('location: result.php?id='.$id);
							  }
							  
							  
                                
						break;
                       
		
						}
            ?>