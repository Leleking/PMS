<?php 
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');
//require_once('upload.class.php');
//moving all posted data into an array for easy manipulation
session_start();
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
	'p_committal'=>$_POST['p_committal'],
	'user_id' => $_SESSION['id']


];
 $check = Validation::empty_field($data) ?? false;
 if($check){
 	$name = Validation::name_validate($data['name']);
 	if($name){
 		
 		$stmt = $conn->prepare("INSERT into inmate (name,age,complexion,tribe,country,height,weight,occupation,religion,education,features)  values (?,?,?,?,?,?,?,?,?,?,?);");
 		$stmt->bind_param('sdsssddssss',$data['name'],$data['age'],$data['complexion'],$data['tribe'],$data['country'],$data['height'],$data['weight'],$data['occupation'],$data['religion'],$data['education'],$data['features']);
 		 if ( !$stmt->execute() ) 
        throw new \Exception( 'Execute failed: ' . PHP_EOL . $stmt->error );

 		$inmate_id = $stmt->insert_id;
 		
 		$stmt->close();
 		
 		$stmt = $conn->prepare("INSERT INTO inmate_sentence_info (inmate_id,serial_no,offence,
		 p_arrest,
		 p_conviction,
		 d_conviction,
		 d_sentence,
		 d_expire,
		 p_committal) 
		 VALUES(?,?,?,?,?,?,?,?,?)");
		 $stmt->bind_param('sssssssss',$inmate_id, 
		 $data['serial_no'],$data['offence'],$data['p_arrest'],
		 $data['p_conviction'],$data['d_conviction'],$data['d_sentence'],$data['d_expire'],$data['p_committal']);
		if ( !$stmt->execute() ) 
        throw new \Exception( 'Execute failed: ' . PHP_EOL . $stmt->error );
		$stmt->close();
		printf ("New Record Added");
		echo "<script>window.location='../../views/inmates/profile.php?id=".$inmate_id."';</script>";
 	}
 	else 
 	{
 		echo "Name invalid";
 	}
 }else
 echo "One or more fields are empty";