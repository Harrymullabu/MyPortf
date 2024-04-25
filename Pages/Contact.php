<?php
    $name = $email = $message = "";
    $name_err = $email_err = $message_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty(trim($_POST["name"]))) {
            $name_err = "Please enter your name.";
        } else {
            $name = trim($_POST["name"]);
        }

        if (empty(trim($_POST["email"]))) {
            $email_err = "Please enter your email address.";
        } else {
            $email = trim($_POST["email"]);
        }

        if (empty(trim($_POST["message"]))) {
            $message_err = "Please enter your message.";
        } else {
            $message = trim($_POST["message"]);
        }

        if (empty($name_err) && empty($email_err) && empty($message_err)) {

            $to = "hmullabu@gmail.com";
            $subject = "Contact Form Submission";
            $body = "Name: $name\nEmail: $email\nMessage: $message";

            mail($to, $subject, $body);

            header("location: contact_success.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>

    <?php include '../nav.php'; ?>

    <div class="container">
        <h2>Contact Me</h2>
        <p>Please fill in this form to contact me.</p><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>">
                <label for="message">Message</label>
                <textarea name="message" id="message"><?php echo $message; ?></textarea>
                <span class="help-block"><?php echo $message_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
