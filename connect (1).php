<?php
session_start();
if($_POST['name'] && $_POST['mob'] && $_POST['email']   && $_POST['message'] ){
$name=$_POST['name'];
$phone=$_POST['mob'];
$email=$_POST['email'];
$text=$_POST['message'];
$to='abhijeet@gmail.com';
$email_from = $email;
    $email_to = 'jhaabhijeet524@gmail.com';//replace with your email
    $subject = 'User Enquiry Details';
    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mobile: ' . $phone . "\n\n" . 'Message: ' . $text;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
   if($success)
				{
				    $_SESSION['msg'] = 'Thank you for your inquiry! We will be hitting you up soon to chat about how we can help you make your dreams a reality ';
					 	echo "<script>alert('Thank you for connect, We will be in touch soon to answer any questions');location.href='index.html'</script>";
				}
}else{
    echo "<script>alert('! sorry try once again again.');location.href='index.html'</script>";
}
    
?>