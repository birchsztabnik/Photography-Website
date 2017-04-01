<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$reason = null;
$radio_button = $_POST['cf_radio_button'];
if($radio_button=="j"){
	$reason = "Regular";
}else{
	$reason = "Error";
}


$drop_down_item = $_POST['cf_drop_down'];
$subject = 'From: ' . $field_name . '| Reason: ' .$reason .'| Urgency: '.$drop_down_item;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail("birchyboy.s@gmail.com", $subject, $body_message, $headers);

if ($mail_status) {
	if($radio_button === "m"){ ?>
		<script language="javascript" type="text/javascript">
                    if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
			alert('I\'ll try to respond soon. Thank you for writing.');
                    }
			window.location = 'http://www.slidesandnegatives.com/contact.html';
		</script>
	<?php }if($radio_button === "p"){?>
		<script language="javascript" type = "text/javascript">
                    if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
			alert('Thank you for alerting us about the problem. I will try to fix this soon.');
                    }
                    window.location = 'http://www.slidesandnegatives.com/contact.html';
		</script>
	<?php }
}
else { ?>
	<script language="javascript" type="text/javascript">
		if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
			alert('Message failed to send. Please email birchyboy.s@gmail.com with the problem.');
		}
		window.location = 'http://www.slidesandnegatives.com/contact.html';
	</script>
<?php
}
?>