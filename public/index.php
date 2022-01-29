<?php

session_start();

include '../includes/functions.php'; //we need to import the file to avoid calling undefined function error

$firstNameSubmission = getSubmissionFromSession('first_name'); // defined variable represent the fuction which are defined in the functions.php file
$lastNameSubmission = getSubmissionFromSession('last_name');
$emailSubmission = getSubmissionFromSession('email');

$showSubmissionData = shouldShowSubmissionData();

$firstNameError = getErrorMessageFromSession('first_name'); // defined variable represent the fuction which are defined in the functions.php file
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');

$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

?>

<html>
    <head>
    </head> 

    <body>
        <?php include '../includes/partials/navigation.php'; ?>
        <form method="POST" action="../includes/submit.php"> <!-- relative path to access submit.php file-->
            <input type="text" name="first_name" required placeholder="first name" value="<?php echo $firstNameSubmission; ?>"> 
            <!--with this value the input is given stay beyond the input box, 
            it is not valid but at he same time it not empty it still stay beyond in the box unless reload the 
            page( it is solved by putting submission array after the line we send the email, so it clear the page after the submission)-->
            <span style="color: red">
                <?php echo $firstNameError; ?>
            </span> 
            <br> 
            <input type="text" name="last_name" placeholder="last name" value="<?php echo $lastNameSubmission; ?>">
            <span style="color: red">
                <?php echo $lastNameError; ?>
            </span> 
            <br> 
            <input type="text" name="email" type="email" placeholder="email" value="<?php echo $emailSubmission; ?>"> 
            <span style="color: red">
                <?php echo $emailError; ?>
            </span> 
            <br> 
            <button type="submit">
                SEND
            </button> 
        </form> 
    </body>
</html>