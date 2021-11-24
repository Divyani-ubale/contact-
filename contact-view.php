<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />


		
</head>

<body style="background-color: #c9c6c1; " >
<?php 
		if(isset($_POST['send'])) {
			require 'PHPMailerAutoload.php';
			

			$mail = new PHPMailer;

			 $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'lejhro.hashcode@gmail.com';                 // SMTP username
			$mail->Password = 'Lejhro@2021';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('lejhro.hashcode@gmail.com', 'Dsmart Tutorials');
			$mail->addAddress($_POST['userEmail']);     // Add a recipient

			$mail->addReplyTo('lejhro.hashcode@gmail.com');
			// print_r($_FILES['file']); exit;
			//for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				//$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		}
	 ?>

<h1 style="background-color:white;margin-right:-900px;padding-bottom:20px;padding-left:15px;">LEJHRO</h1>

 <div class="container" style="margin-top:50px; margin-left:370px;margin-right:-535px;" >
<div class ="row-justify-content-center">
    <div class="col-md-6 col-md-offset-3">
    <div class="form-container" >
    
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data" 
            onsubmit="return validateContactForm()">
            <div class="container">
                <h3>Contact an lejhro representive</h3>
            </div>
            <hr/>
            
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            
             <div class="input-row">

            
            
                <label style="padding-top: 20px;">First name</label> <br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            

                <label style="padding-top: 20px;">Last name</label> <br /> <input
                    type="text" class="input-field" name="lastName"
                    id="lastName" />
            </div>
            <div class="input-row">
                <label>Mobileno</label> <span id="mobileno-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="mobileno" id="mobieno" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="message" id="message"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
                    
        </form>
                    </div>
    </div>
                    </div>
                    </div
                    
                    
                    

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
    
</html>