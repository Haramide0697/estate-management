<?php
require 'core/connection.php';

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'){

	if (isset($_POST['iden'])) {
		$iden = $_POST['iden'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$datee = date('l M d, Y H:i');

		if (empty($name) || empty($phone) || empty($email) || empty($message)) {
			echo "Please fill all empty fields";
		}else{
		$in = array('property_id' => $iden,
					'name' => $name, 
					'phone' => $phone, 
					'email' => $email, 
					'message' => $message, 
					'date' => $datee 

					);
		create('property_message',$in);
		echo "Thank you for sending us a message";
		}
	}


	
		if(isset($_POST['check'])){
		$name = $_POST['text'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$date = date('l M d, Y H:i');
		if (empty($message) || empty($number) || empty($email) || empty($date)) {
			echo "Please fill all empty fields";
		}else{

			$in = array('name' => $name,
						'phone' => $number,
						'email' => $email,
						'message' => $message,
						'date' => $date

			);

			create('message',$in);
			echo "Message sent";
		}
		
		
		
	}

	if (isset($_POST['sname'])) {
		$sname = $_POST['sname'];
		$oname = $_POST['oname'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$file = $_FILES['pass']['tmp_name'];
		$hash2 = sha1(md5($password));

		if (empty($file)) {
			echo "Insert an image";
		}elseif (empty($sname) || empty($oname) || empty($gender) || empty($country) || empty($email) || empty($number) || empty($password) || empty($cpassword)) {
			echo "Please fill all empty fields";
		}elseif ($password != $cpassword) {
			echo "password is not the same";
		}else{
		$validextensions = array("jpeg" , "jpg" , "png" );
		$temporary = explode("." , $_FILES [ "pass" ][ "name" ]);
		$file_extension = end ($temporary );
		$pic = $_FILES['pass']['name'];
		$picp = $_FILES['pass']['tmp_name'];
		$pics = $_FILES['pass']['size'];
		list($width, $height, $types, $attr) = getimagesize($picp);


		$hash = sha1($pic);
		$random = rand(000,999);
		$comb = $hash.$random;

		$ext1 = pathinfo($pic, PATHINFO_EXTENSION);
		$ext1 = strtolower($ext1);

		$upload_folder1 = "img/userimg/".$comb.".".$ext1;
		$uploadpic = $comb.".".$ext1;
		$datee = date('l M d, Y H:i');

		$in = array('passport' => $uploadpic,
					'surname' => $sname,
					'othernames' => $oname,
					'gender' => $gender,
					'country' => $country,
					'email' => $email,
					'number' => $number,
					'password' => $hash2,
					'dates' => $datee,
		);
				move_uploaded_file($picp, $upload_folder1);
				create('staff',$in);
				echo "You have successfully registered";

		}

			}

	}
?>