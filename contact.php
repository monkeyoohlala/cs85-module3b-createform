<!-- Harold Hong -->
<!-- https://github.com/monkeyoohlala/cs85-module3b-createform -->

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Contact Me</title>
        <style>
            textarea:focus {outline: 1px solid blue;}
            input:focus {outline: 1px solid blue;}
            input[type=text],input[type=email],input[type=reset],textarea, select, button{padding: 10px; border-radius: 10px; margin: 5px; border:1px solid black;}
            button:hover {background-color: rgb(209,189,164); cursor:pointer;}
            input[type=reset]:hover {background-color: rgb(209,189,164); cursor:pointer;}
            .done {text-align: center;}
            .myForm {display: grid; justify-content: center;}
        </style>
    </head>

    <body>
        <div class="myForm">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="fullname">Full Name: </label>
                <br>
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="">
                <br><br>

                <label for="email">Email: </label>
                <br>
                <input type="email" id="email" name="email" placeholder="name@example.com" value="">
                <br><br>

                <label for="topic">To Whom You Love The Most: </label>
                <br>
                <input type="text" id="topic" name="topic" placeholder="Mom" value="">
                <br><br>

                <label for="message">Write something in here:</label>
                <br>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="I love you... so much"></textarea>
                <br><br>
                <input type="reset" value="Clear Form" />&nbsp; &nbsp;
                <button type="submit" name="submit" value="submit">Send Data</button>
            </form>
        </div>

        <?php 


            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $fullname = $email = $topic = $message ='';
                $fullname_error = $email_error = $topic_error = $message_error = '';
            
                $originalName = trim($_POST["fullname"]);
                $originalEmail = trim($_POST["email"]);
                $originalTopic = trim($_POST["topic"]);
                $originalMessage = trim($_POST["message"]);

                $validation_passed = TRUE;

                //Validate name
                if (empty($originalName)) {
                    $name_error = "Please enter your full name. <br>";
                    echo $name_error;
                    $validation_passed = FALSE;
                } else if (strlen($originalName) < 2) {
                    $name_error = "Name must be at least 2 characters long. <br>";
                    echo $name_error;
                    $validation_passed = FALSE;
                }

                //validate email
                if (empty($originalEmail)) {
                    $email_error = "Please enter your email address. <br>";
                    echo $email_error;
                    $validation_passed = FALSE;
                } else if (!filter_var($originalEmail, FILTER_VALIDATE_EMAIL)) {
                    $email_error = "Please enter a valid email address. <br>";
                    echo $email_error;
                    $validation_passed = FALSE;
                }

                if (empty($originalTopic)) {
                    $topic_error = "Please enter a topic. <br>";
                    echo $topic_error;
                    $validation_passed = FALSE;
                }

                if (empty($originalMessage)) {
                    $message_error = "Please enter your message. <br>";
                    echo $message_error;
                    $validation_passed = FALSE;
                } 
                // else if (strlen($originalMessage) < 50) {
                //     $message_error = "Message length is too short";
                //     echo $message_error;
                //     $validation_passed = FALSE;
                // } else if (strlen($originalMessage) > 150) {
                //     $message_error = "Message length is too long";
                //     echo $message_error;
                //     $validation_passed = FALSE;
                // }

                if ($validation_passed == TRUE) {
                    
                    $fullname = htmlspecialchars($originalName, ENT_QUOTES, 'UTF-8');
                    $email = htmlspecialchars($originalEmail, ENT_QUOTES, 'UTF-8');
                    $topic = htmlspecialchars($originalTopic, ENT_QUOTES, 'UTF-8');
                    $message = htmlspecialchars($originalMessage, ENT_QUOTES, 'UTF-8');
                
                    echo "<div class='done'>
                    <br>Thank you, $fullname!<br>" . "From: $email<br>" . "To $topic, Whom I love the most,<br>" . $message . 
                    "</div>";
                }

            }


        ?>

    </body>

</html>