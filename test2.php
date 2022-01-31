<?php
include("db.php");
if(!isset($_SESSION['user']))
{
    header('location: index.php');
    exit;
}

$id = $_GET['id'];
$query = 'SELECT * FROM categories WHERE category_id="'.$id.'"';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
while($row = mysqli_fetch_assoc($result))
{
$name = $row['category'];

//you can display more row data by id 

}
?>