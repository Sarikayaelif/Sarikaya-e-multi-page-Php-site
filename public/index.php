<?php

session_start();

include '../includes/functions.php'; //we need to import the file to avoid calling undefined function error

$firstNameSubmission = getSubmissionFromSession('first_name'); // defined variable represent the fuction which are defined in the functions.php file
$lastNameSubmission = getSubmissionFromSession('last_name');
$emailSubmission = getSubmissionFromSession('email');
$commentSubmission = getSubmissionFromSession('comment');

$showSubmissionData = shouldShowSubmissionData();

$firstNameError = getErrorMessageFromSession('first_name'); // defined variable represent the fuction which are defined in the functions.php file
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');
$commentError = getErrorMessageFromSession('comment');

$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="https://use.typekit.net/ghs3lib.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Elif Sarikaya | Developer</title>
    </head> 

    <body>
        <?php include '../includes/partials/navigation.php'; ?>
        <form method="POST" action="../includes/submit.php"> <!-- relative path to access submit.php file-->
            <input type="text" name="first_name" required placeholder="first name" value="<?php echo $firstNameSubmission; ?>"> 
            <!--with this value the input is given stay beyond the input box, 
            it is not valid but at he same time it not empty it still stay beyond in the box unless reload the 
            page( it is solved by putting submission array after the line we send the email, so it clear the page after the submission)-->
            <span style="color: purple">
                <?php echo $firstNameError; ?>
            </span> 
            <br> 

            <input type="text" name="last_name" placeholder="last name" value="<?php echo $lastNameSubmission; ?>">
            <span style="color: purple">
                <?php echo $lastNameError; ?>
            </span> 
            <br> 

            <input type="text" name="email" type="email" placeholder="email" value="<?php echo $emailSubmission; ?>"> 
            <span style="color: purple">
                <?php echo $emailError; ?>
            </span> 
            <br>

            <textarea name="comment" id="comment" placeholder="Message"cols="30" rows="10" value="<?php echo $commentSubmission; ?>"></textarea>
            <span style="color: purple">
                <?php echo $commentError; ?>
            </span>
            <br>
            <button type="submit">SEND</button> 
        </form> 
        <?php include '../includes/partials/footer.php'; ?>
    </body>
</html>