<?php 
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');
session_start();
//require_once('upload.class.php');
//moving all posted data into an array for easy manipulation
if($_POST['features']==null){
	$_POST['features'] = 'null';
}
$data = [
	//personal information
	'name' => $_POST['inmate'],
	'age' =>  $_POST['age'],
	'complexion'=> $_POST['complexion'],
	'tribe' => $_POST['tribe'],
	'country'=> $_POST['country'],
	'height' => $_POST['height'],
	'weight' => $_POST['weight'],
	'occupation' => $_POST['occupation'],
	'religion' => $_POST['religion'],
	'education' => $_POST['education'],
	'features' => $_POST['features'],
	
	/*sentencing information
		p => place
		d => date
	*/	
	'offence' => $_POST['offence'],
	'serial_no' => $_POST['serial_no'],
	'p_arrest' => $_POST['p_arrest'],
	'p_conviction' => $_POST['p_conviction'],
	'd_conviction' => $_POST['d_conviction'],
	'd_sentence' => $_POST['d_sentence'],
    'd_expire' => $_POST['d_expire'],
    'p_committal'=>$_POST['p_committal']
	


];
 $check = Validation::empty_field($data) ?? false;
 if($check){
 	$name = Validation::name_validate($data['name']);
 	if($name){
 		
 		$stmt = $conn->prepare("UPDATE inmate 
          SET 
          name= ?,
          age   =   ?,
          complexion    =   ?,
          tribe     =       ?,
          country   =   ?,
          height    =   ?,
          weight    =   ?,
          occupation=   ?,
          religion  =   ?,
          education =   ?,
          features  =   ?  
                 WHERE id = ?;");
                 $id = $_SESSION['inmate_id'];
         $stmt->bind_param('sdsssddssssd',$data['name'],$data['age'],$data['complexion'],$data['tribe'],
         $data['country'],$data['height'],$data['weight'],$data['occupation'],$data['religion'],$data['education'],$data['features'],$id);
          if ( $stmt->execute() ) {
          printf ("New Record Added");
}
          else{
        throw new \Exception( 'Execute failed: ' . PHP_EOL . $stmt->error );
          }

 		$inmate_id = $stmt->insert_id;
 		
         $stmt->close();
 		
     $stmt =$conn->prepare("UPDATE inmate_sentence_info 
     set 
     serial_no = ?,
     offence = ?,
	serial_no = ?,
	p_arrest = ?,
	p_conviction = ?,
	d_conviction = ?,
	d_sentence = ?,
    d_expire = ?,
    p_committal =?

     
      where inmate_id=?;");
     $stmt->bind_param("sssssssssd",$data['serial_no'],$data['offence'],$data['serial_no'],$data['p_arrest'],
     $data['p_conviction'],$data['d_conviction'],$data['d_sentence'],$data['d_expire'],$data['p_committal'],$id);
		 if ( $stmt->execute() ) {
            printf ("New Record Added");
            echo header('location:../../resources/views/inmates/profile.php?id='.$id);}
            else{
          throw new \Exception( 'Execute failed: ' . PHP_EOL . $stmt->error );
            }
 	}
 	else 
 	{
        
 		echo "Name invalid <a href='../../resources/views/inmates/edit.php?id=$id'> Click to Go Back</a>";
 	}
 }else
 echo "One or more fields are empty <a href='../../resources/views/inmates/edit.php?id=$id'> Click to Go Back</a>";