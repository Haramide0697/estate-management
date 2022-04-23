<?php
require '../core/connection.php';

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){

if (isset($_FILES [ "file" ][ "type" ]))
{
$file = $_FILES['file']['tmp_name'];
$price = $_POST['price'];
$by = $_POST['by'];
$ros = $_POST['ros'];
$toh = $_POST['toh'];
$locationc = $_POST['locationc'];
$locations = $_POST['locations'];
$locationd = $_POST['locationd'];
$soh = $_POST['soh'];
$nor = $_POST['nor'];
$size = $_POST['size'];
$cate = $_POST['cate'];
if (empty($file)) {
	echo "Insert an image";
}elseif (empty($ros) || empty($toh) || empty($locationc) || empty($locations) || empty($locationd) || empty($soh) || empty($nor) || empty($size) || empty($size)) {
	echo "Please fill all empty fields";
}else{
$validextensions = array("jpeg" , "jpg" , "png" );
$temporary = explode("." , $_FILES [ "file" ][ "name" ]);
$file_extension = end ($temporary );
$pic = $_FILES['file']['name'];
$picp = $_FILES['file']['tmp_name'];
$pics = $_FILES['file']['size'];
list($width, $height, $types, $attr) = getimagesize($picp);


$hash = sha1($pic);
$random = rand(000,999);
$comb = $hash.$random;

$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
$ext1 = strtolower($ext1);

$upload_folder1 = "../img/pro-img/".$comb.".".$ext1;
$uploadpic = $comb.".".$ext1;
$datee = date('l M d, Y H:i');

$in = array('by' => $by,
			'pic' => $uploadpic,
			'rent_sell' => $ros,
			'price' => $price,
			'type_of_house' => $toh,
			'category' => $cate,
			'location_state' => $locations,
			'location_country' => $locationc,
			'location_details' => $locationd,
			'summary_of_house' => $soh,
			'number_room' => $nor,
			'size' => $size,
			'date' => $datee 
);
		move_uploaded_file($picp, $upload_folder1);
		create('properties',$in);
		echo "Property uploaded";

}
}



	if(isset($_POST['action']) && $_POST['action'] == 'acquire'){
		$id = $_POST['id'];
		$userid = $_POST['userid'];		
		$name = $_POST['name'];		
		$date = date('l M d, Y H:i');


		$in = array('property_id' => $id,
					'user_id' => $userid,
					'name' => $name, 
					'message' => "I want to acquire this property", 
					'date' => $date, 

						);
		create('property_userdemand',$in);	
		echo "You have successfully send a message to acquire this property";
	}


	if(isset($_POST['identity'])){
		$messageid = $_POST['identity'];
		$message = $_POST['reply'];
		$date = date('l M d, Y H:i');
		if (empty($message)) {
			echo "Please type a  message";
		}else{

		$fetch = $conn->query("SELECT * FROM property_message WHERE id = $messageid");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$email = $key->email;
		}

			$in = array('message_id' => $messageid,
						'email' => $email,
						'message' => $message,
						'dates' => $date

			);

			create('reply_pmessages',$in);
			echo "Reply sent";
		}
		
		
		
	}
	}

	if(isset($_POST['action']) && $_POST['action'] == 'deletermes'){
		$id = $_POST['id'];

		 	$conn->query("DELETE FROM reply_pmessages WHERE id = $id");
		echo "Message Deleted";		
	}

	if(isset($_POST['action']) && $_POST['action'] == 'deletemes'){
		$id = $_POST['id'];

		 	$conn->query("DELETE FROM reply_messages WHERE id = $id");
		echo "Message Deleted";		
	}


		if(isset($_POST['identity2'])){
		$messageid = $_POST['identity2'];
		$message = $_POST['reply'];
		$date = date('l M d, Y H:i');
		if (empty($message)) {
			echo "Please type a  message";
		}else{

		$fetch = $conn->query("SELECT * FROM message WHERE id = $messageid");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$email = $key->email;
		}

			$in = array('message_id' => $messageid,
						'email' => $email,
						'message' => $message,
						'dates' => $date

			);

			create('reply_messages',$in);
			echo "Reply sent";
		}
		
		
		
	}
	}
}
?>