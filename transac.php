<?php include ('db.php')?>
<?php
						$cat = $_POST['Cat'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO categories
								(category_id,category)
								VALUES ('Null','".$cat."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
                                header('location: index.php');
								echo "done";
								
                                
						break;
                       
		
						}
            ?>