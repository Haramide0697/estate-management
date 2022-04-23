<?php
require '../core/connection.php';

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){

if (isset($_FILES [ "file" ][ "type" ]))
{
$file = $_FILES['file']['tmp_name'];
$price = $_POST['price'];
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

$in = array('by' => "Admin",
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
			'status' => "not acquired",
			'date' => $datee 
);
		move_uploaded_file($picp, $upload_folder1);
		create('properties',$in);
		echo "Property uploaded";

}
}


	if(isset($_POST['action']) && $_POST['action'] == 'deleteprop'){
		$id = $_POST['id'];

		$fetch = $conn->query("SELECT * FROM properties WHERE id = $id");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$pic = $key->pic;
		}
			unlink("../img/pro-img/$pic");
		 	$conn->query("DELETE FROM properties WHERE id = $id");
		 }
		echo "Property Deleted";		
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
			
			
			  /*$mail = new PHPMailer;
        
                $mail->SMTPDebug = 4;                               // Enable verbose debug output
                
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = EMAIL;                 // SMTP username
                $mail->Password = PASS;                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                
                $mail->setFrom(EMAIL, 'Vibadia Properties');
                $mail->addAddress($email);     // Add a recipient
                
                $mail->addReplyTo(EMAIL);
                
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML
                
                $mail->Subject = 'Admin Message';
                $mail->Body    = '<h1 style="color:#C40207"> Vibadia Properties Admin </h1><br> <p> The admin of hortechnet just sent you a no reply message, please login <a href="http://www.hortechnet.com/clientmain.php?mod=messages&link=view">here</a> with your username and password and click on messages to view the message </p> ';
                $mail->AltBody = "$message";
                
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                
            mail('oladejioreoluwa94@gmail.com','test', $message);*/
        
        $in = array(    'idfor' => $idfor, 
                        'message' => $message, 
                        'date' => $date 
        
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



		if(isset($_POST['identity1'])){
		$messageid = $_POST['identity1'];
		$property_id = $_POST['property_id'];
		$userid = $_POST['userid'];
		$file = $_FILES['reply']['tmp_name'];
		$date = date('l M d, Y H:i');
		if (empty($file)) {
			echo "Please input a file";
		}else{

		$temporary = explode("." , $_FILES [ "reply" ][ "name" ]);
		$file_extension = end ($temporary );
		$pic = $_FILES['reply']['name'];
		$picp = $_FILES['reply']['tmp_name'];
		$pics = $_FILES['reply']['size'];


		$hash = sha1($pic);
		$random = rand(000,999);
		$comb = $hash.$random;

		$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
		$ext1 = strtolower($ext1);

		$upload_folder1 = "../user/files/".$comb.".".$ext1;
		$uploadpic = $comb.".".$ext1;

		$fetch = $conn->query("SELECT * FROM property_userdemand WHERE id = $messageid");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		foreach ($result as $key) {
		$name = $key->name;
		}

			$in = array('message_id' => $messageid,
						'userid' => $userid,
						'propertyid' => $property_id,
						'email' => $name,
						'message' => $uploadpic,
						'dates' => $date

			);
			$in2 = array('status' => "acquired", );
        	move_uploaded_file($picp, $upload_folder1);
			create('reply_userpmessages',$in);
			update('properties',$in2,'id',$property_id);
			echo "Reply/File sent";
		}
		
		
		
	}
	}

}
?>