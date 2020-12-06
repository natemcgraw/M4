<?php
//--------------------------------------------------Get connected to Database
require_once "pdo.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>M4 Applications</title>
  <link href="M4_contact_style.css" rel="stylesheet" type="text/css">

<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'mcgraw.nathan@gmail.com';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your contact request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>

</head>

<!-- - - - - - - - - - - - VIEW - - - - - - - - - - - - - - - -->

<body>

<div class="header">
<h2> <span class="emphasis">M4</span><span style="color:gray">Applications</span> </h2>
</div>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="contact.html" class="active">Contact</a></li>
  <li style="float:right"><a href="login.html">Login</a></li>
</ul>

<div class="contactFrm">
    <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <form action="" method="post">
        <h4>Name</h4>
        <input type="text" name="name" placeholder="Your Name" required="">
        <h4>Email </h4>
        <input type="email" name="email" placeholder="email@example.com" required="">
        <h4>Subject</h4>
        <input type="text" name="subject" placeholder="Write subject" required="">
        <h4>Message</h4>
        <textarea name="message" placeholder="How can we help?" required=""> </textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit" class="submit">
        <div class="clear"> </div>
    </form>
</div>
<br>
<h4> Contact us by phone </h4>
  <p> (276) XXX-XXXX </p>

</body>

</html>
