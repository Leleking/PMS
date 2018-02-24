<?php
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');
if(isset($_POST['page'])){
   $result = $conn->query("SELECT * from visits");
  $count = $result->num_rows;
  $pageno = ceil($count/2);
  for($i=1;$i<$pageno;$i++){
    echo "<a pageid='$i' href='' id='page'>$i</a>";
  }
 
   }
   
   
/*
if(isset($_POST['ALL'])){
 $start=0;
 $end=9;
   if(isset($_POST['setPage'])){
    $end = 9;
    $pageno = $_POST['pageid'];
    $start = ($pageno *$end) - $end;
  }else{
    $start = 0;
  }

    $result = $db->query("SELECT * from visits limit $start,$end");
    if($result->num_rows > 0)
  {?>
    $i=0;
  
        <?php
        
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
                      <input type="hidden" name="id" value="<?php echo $id?>"/>
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
   <?php }
    else 
        echo "there is no data in the all table";
      
  }?>
  */
