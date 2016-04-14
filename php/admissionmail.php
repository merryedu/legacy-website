<?php
if(!$_POST) exit;

    $to 	  = 'wxy@mingsiwei.com'; #Replace your email id...
	$name	  = $_POST['txtname'];
	$grade      = $_POST['txtgrade'];
	$teacher   = $_POST['txtteacher'];
    $comment  = $_POST['txtmessage'];

	if(get_magic_quotes_gpc()) { $comment = stripslashes($comment); }

	 $e_subject = 'Regarding Admission';

	 $msg  = "You have been contacted by $name for admission.\r\n\n";
	 $msg .= "Grade : $grade \r\n\n";
	 $msg .= "Teacher : $teacher \r\n\n";
	 $msg .= "$comment\r\n\n";

	 if(@mail($to, $e_subject, $msg, "From: $name\r\n"))
	 {
		 echo "<span class='success-msg'>我们已经收到您的反馈，非常感谢！</span>";
	 }
	 else
	 {
		 echo "<span class='error-msg'>很抱歉你的消息没有被发送，请稍后再试。</span>";
	 }
?>
