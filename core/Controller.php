<?php

abstract class Controller
{
	

	public function sendEmail($from, $from_name, $to, $to_name, $template, $subject) {
		require 'lib/phpmailer/PHPMailerAutoload.php';
		
		/*
		 * Email Settings
		 * Mail Server Username: info@emotiontherapies.com
		 * Standard (without SSL)
		 * Incoming Mail Server: mail.emotiontherapies.com
		 * Supported Ports: 143 (IMAP), 110 (POP3)
		 * Outgoing Mail Server: mail.emotiontherapies.com
		 * Supported Port: 26 (server requires authentication)
		 *
		 * Private (with SSL)
		 * Incoming Mail Server: box1130.bluehost.com (SSL)
		 * Supported Ports: 993 (IMAP), 995 (POP3)
		 * Outgoing Mail Server: box1130.bluehost.com (SSL)
		 * Supported Port: 465 (server requires authentication)
		 * Supported Incoming Mail Protocols: POP3, IMAP
		 * Supported Outgoing Mail Protocols: SMTP
		 *
		 */
		
		$mail = new PHPMailer ();
		
		$mail->CharSet = "UTF-8";
		
		$mail->isSMTP ();
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '465';
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->Username = "duranno.church15@gmail.com";
		$mail->Password = "duranno2015";
		$mail->setFrom ( $from, $from_name );
		$mail->addReplyTo ( $from, $from_name );
		$mail->addAddress ( $to, $to_name );
		
		$mail->Subject = $subject;
		
		$body = nl2br ( $template );
		
		$body = preg_replace ( '/\\\\/', '', $body );
		$mail->msgHTML ( $body );
		
		if (! $mail->send ()) {
			$result = "Mailer Error: " . $mail->ErrorInfo;
		} else {
			$result = "Message sent!";
		}
		
		return $result;
	}
	
	public function fileUpload($data_file, $target_dir, $target_type) {
		$target_file = $target_dir . basename ( $data_file ["name"] );
	
		$FileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		if($target_type != "pdf"){
			$info = getimagesize ( $data_file ['tmp_name'] );
			$_width = $info [0];
			$_height = $info [1];
			$_type = $info [2];
			$_org_ratio = $_width / $_height;
		}
		//Helper::getArrayData ( $info );
	
		$uploadOk = 1;
		$uploadSuccess = false;
		if (file_exists ( $target_file )) {
			echo "Sorry, file1 already exists.";
			$uploadOk = 0;
		}
	
		if ($target_type == "pdf") {
				
			if ($FileType != "pdf") {
				echo "Sorry, only PDF files are allowed.";
				$uploadOk = 0;
			}
		} else if ($target_type == "image") {
			if ($FileType != "jpg" && $FileType != "gif" && $FileType != "png" && $FileType != "jpeg") {
				echo "Sorry, only image files are allowed.";
				$uploadOk = 0;
			}
		}
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file ( $data_file ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $data_file ["name"] ) . " has been uploaded.";
				$uploadSuccess = true;
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	
		return $uploadSuccess;
	}
	
/*public function fileUpload($data_file, $target_dir, $target_type) {
		$target_file = $target_dir . basename ( $data_file ["name"] );
		
		$FileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		
		echo "SITE_ROOT.".__DIR__;
		if($target_type != "pdf"){
			$info = getimagesize ( $data_file ['tmp_name'] );
			$_width = $info [0];
			$_height = $info [1];
			$_type = $info [2];
			$_org_ratio = $_width / $_height;
		}
		echo "<br/>file info:".$info;
		Helper::getArrayData ( $info );
		echo "<br/>";
		$uploadOk = 1;
		$uploadSuccess = false;
		if (file_exists ( $target_file )) {
			echo "Sorry, file1 already exists.";
			$uploadOk = 0;
		}
		
		echo "<br/>file type:".$FileType;
		Helper::getArrayData($FileType);
		echo "<br/>";
		if ($target_type == "pdf") {
			
			if ($FileType != "pdf") {
				echo "Sorry, only PDF files are allowed.";
				$uploadOk = 0;
			}
		} else if ($target_type == "image") {
			if ($FileType != "jpg" && $FileType != "gif" && $FileType != "png" && $FileType != "jpeg") {
				echo "Sorry, only image files are allowed.";
				$uploadOk = 0;
			}
		}
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			
			
			echo "<br/>DIR:". __DIR__."<br/>";
			echo "<br/>target_file:".$target_file."<br/>";
			if (move_uploaded_file ( $data_file ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $data_file ["name"] ) . " has been uploaded.";
				$uploadSuccess = true;
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		
		return $uploadSuccess;
	}*/
	public function fileUpload2($data_file_name, $data_file_tmp_name, $target_dir) {
		$target_file = $target_dir . basename ( $data_file_name );
		
		$FileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		
		echo "<br/>------------->" . $FileType;
		
		$uploadOk = 1;
		$uploadSuccess = false;
		if (file_exists ( $target_file )) {
			echo "Sorry, file1 already exists.";
			$uploadOk = 0;
		}
		
		if ($FileType != "jpg" && $FileType != "gif" && $FileType != "png" && $FileType != "jpeg") {
			echo "Sorry, only image files are allowed.";
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file ( $data_file_tmp_name, $target_file )) {
				echo "The file " . basename ( $data_file_name ) . " has been uploaded.";
				$uploadSuccess = true;
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		
		return $uploadSuccess;
	}
	public function imageUploadwithSmallImg($target_size, $data_file, $target_dir_big, $target_dir_small) {
		$uploadOk = 0;
		
	
		$target_file_big = $target_dir_big . basename ( $data_file ["name"] );
		$target_file_small = $target_dir_small . basename ( $data_file ["name"] );
		
		$FileType = pathinfo ( $target_file_big, PATHINFO_EXTENSION );
		
		if ($FileType == "jpg" || $FileType == "jpeg") {
			$uploadedfile = $data_file ['tmp_name'];
			$src = imagecreatefromjpeg ( $uploadedfile );
			$uploadOk = 1;
		} else if ($FileType == "png") {
			$uploadedfile = $data_file ['tmp_name'];
			$src = imagecreatefrompng ( $uploadedfile );
			$uploadOk = 1;
		} else {
			$uploadedfile = $data_file ['tmp_name'];
			$src = imagecreatefromgif ( $uploadedfile );
			$uploadOk = 1;
		}
		
		if ($uploadOk) {
			
			$info = getimagesize ( $data_file ['tmp_name'] );
			$_width = $info [0];
			$_height = $info [1];
			$_type = $info [2];
			$_org_ratio = $_width / $_height;
			
			// $resize = false;
			
			if ($_org_ratio > 1) {
				if ($_width > $target_size) {
					$new_width = $target_size;
					$new_height = ceil ( $target_size / $_org_ratio );
					// $resize = true;
				} else {
					$new_width = $_width;
					$new_height = $_height;
					// $resize = false;
				}
			} else {
				if ($_height > $target_size) {
					$new_height = $target_size;
					$new_width = ceil ( $target_size * $_org_ratio );
					// $resize = true;
				} else {
					$new_width = $_width;
					$new_height = $_height;
					// $resize = false;
				}
			}
			
			$thumb = imagecreatetruecolor ( $new_width, $new_height );
			imagecopyresampled ( $thumb, $src, 0, 0, 0, 0, $new_width, $new_height, imagesx ( $src ), imagesy ( $src ) );
			ImageJPEG ( $thumb, $target_file_small, 100 );
			ImageDestroy ( $thumb );
			
			$thumb_big = imagecreatetruecolor ( $_width, $_height );
			imagecopyresampled ( $thumb_big, $src, 0, 0, 0, 0, $_width, $_height, imagesx ( $src ), imagesy ( $src ) );
			ImageJPEG ( $thumb_big, $target_file_big, 100 );
			ImageDestroy ( $src );
			ImageDestroy ( $thumb_big );
		}
	}

}
?>
