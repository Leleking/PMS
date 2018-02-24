<?php 
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');
//require_once('upload.class.php');
//moving all posted data into an array for easy manipulation
if($_POST['items']==null){
	$_POST['features'] = 'null';
}
$data = [
    //personal information
    'inmate_id'=>$_POST['inmate_id'],
	'name' => $_POST['name'],
	'contact' =>  $_POST['contact'],
    'address'=> $_POST['address'],
    'occupation'=>$_POST['occupation'],
	'items' => $_POST['items'],
	'card_no'=>$_POST['card_no']
];
 $check = Validation::empty_field($data) ?? false;
 if($check){
 	$name = Validation::name_validate($data['name']);
 	if($name){
 		
 		$stmt = $conn->prepare("INSERT INTO  visits (inmate_id,name,contact,occupation,address,items,card_no)  values (?,?,?,?,?,?,?)");
 		$stmt->bind_param('dssssss',$data['inmate_id'],$data['name'],$data['contact'],$data['occupation'],$data['address'],$data['items'],$data['card_no']);
 		 if ( !$stmt->execute() ) 
        throw new \Exception( 'Execute failed: ' . PHP_EOL . $stmt->error );

 		$inmate_id = $stmt->insert_id;
 		
 		$stmt->close();
		printf ("New Record Added");
 	}
 	else 
 	{
 		echo "Name invalid";
 	}
 }else
 echo "One or more fields are empty";