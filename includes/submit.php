<?php //we don't need to close this tag becuse it is single php file there is no html code in it.

session_start(); // start new session or resume existing session. and if we don't write it, $session variable doesn't work.

include 'functions.php'; //orders matter unless you didn't use some function in validation.php file which is defined in the functions.php file 
include 'validation.php';//becareful the path, validation.php and functions.php files are in the same folder with the submit.php file

$_SESSION['errors'] = []; // this array will show the unvalid input is entered

// ensure there's a place for the user to be redirected back to
if (! array_key_exists('HTTP_REFERER', $_SERVER)) { //if key DOESN'T exist it sets the current page and if it exists it will die
    die;
}
// ensure the user has actually submitted data
if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']); //header redirected to the location which is given and $_SERVER...referred to the current page.
 // '.' adds one string to another, space after the colon matters
    die;
}
$_SESSION['submission'] = $_POST; // this arraay shows the valid inputs are entered

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');
$comment = getPostDataWithDefault('comment');

$firstNameValid = isFirstNameValid($firstName); // these functions defined in the validatin.php file
$lastNameValid = isLastNameValid($lastName);
$emailValid = isEmailValid($email);
$commentValid = isCommentValid($comment);

if (! $firstNameValid) {
    $_SESSION['errors']['first_name'] = 'Please enter your first name.';
}

if (! $lastNameValid) {
    $_SESSION['errors']['last_name'] = 'Please enter your last name.';
}

if (! $emailValid) {
    $_SESSION['errors']['email'] = 'Please enter a valid email address.';
}
if (! $commentValid) {
    $_SESSION['errors']['comment'] = 'Please enter your message.';
}

if (count($errors) > 0) { // at least of Firstname, lastname, email, comment are not valid it will return current page
   $_SESSION['errors'] = $errors;
    // set errors to show to user here
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

$to = "sarikayaelif1412@gmail.com";
$subject = "New message from multi page php site!";
//$message = "<html><body>";
$message = "";
$message .= "First name: " . $firstName . "\r\n";
$message .= "Last name: " . $lastName . "\r\n";
$message .= "Email: " . $email . "\r\n";
$message .= "Comment: " . $comment . "\r\n";
//$message .= "</body></html>";

mail($to, $subject, $message);
//var_dump('here');
//die;
$_SESSION['submission'] = []; // after sending email, it redirected the previous page

header('Location: ' . $_SERVER['HTTP_REFERER']);