<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
$id = $_GET['id'];
$stmt = $conn->query("Select * from visits where inmate_id = $id");

?>
<style>
    .td{
        max-width: 200px;
    word-wrap: break-word;
    }
</style>
  <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href><span class="label label-important"></span>Visits</a> </li>
       
        <li onclick="goBack()" class="bg_lo" style="float:right"> <a> <i class="icon-arrow-left"></i>Go Back</a> </li>
      </ul>
</div>
<table class="table table-dark" id="visits" style="width: 100%;
  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Items</th>
      <th scope="col">Occupation</th>
      <th scope="col">Arrival</th>
      <th scope="col">Depatcher</th>
      <th scope="col">ID Card No#</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=0;
        while($row= $stmt->fetch_assoc()){
            $arrival = strtotime($row['arrival']);
            $arrival = date("D - dS M Y g:i A", $arrival);
            $depatcher = strtotime($row['depatcher']);
            $depatcher = date("D - dS M Y g:i A", $depatcher);

                  ?>
                    <tr> 
                    <th scope="row"><?php echo $i;?></th>
                    <td><?php echo $row['name']  ?></td>
                    <td style=" max-width: 150px;
    word-wrap: break-word;"><?php echo $row['address']  ?></td>
                    <td style=" max-width: 200px;
    word-wrap: break-word;"><?php echo $row['items']  ?></td>
                    <td><?php echo $row['occupation']  ?></td>
                    <td><?php echo $arrival  ?></td>
                    <td><?php  if($row['depatcher']){
                      echo  $depatcher;
                    } else {?>
                    <form method="POST" action="../../../config/add/depatch.php">
                    <input type="datetime-local" name="depatch"/>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                    <input style="position: absolute; left: -9999px; width: 1px; height: 1px;"
       tabindex="-1"  type="submit" name="submit"/>
                </form><?php }  ?>
                        
                </td>
                    <td><?php echo $row['card_no']  ?></td>
                    <td><?php echo $row['contact']  ?></td>
                    
              
                    </td>
                  </tr>

                <?php 
            $i++;
            }?>
         
                
  </tbody>
</table>
<div class="quick-actions_homepage">
<ul class="quick-actions">
<li  class="bg_ly" style="float:right"> <a href=<?php echo "print.php?id=".$id;?>></i>PRINT</a> </li>
        </ul>
        </div>
       
<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  