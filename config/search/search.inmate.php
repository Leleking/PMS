<?php
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');

if(isset($_POST['search'])){
	$searchkey = $_POST['search'];
  $stmt = $conn->query("SELECT * from inmate Where name like '%$searchkey%'  ");
  if($stmt->num_rows > 0){
   while($row = $stmt->fetch_assoc() ){
                  $name =$row['name'];
                  $id = $row['id'];
                  echo "
                   <tr>
                    <td>$id</td>
                 <td>$name</td>
                    <td>
              <a href='profile.php?id=$id' class='btn btn-primary btn-mini'>OPEN</a>
             
                    </td>
                  </tr>";
              }
		}else {
			echo "No matched name found";
		}
}




