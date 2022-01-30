<?php
// this file is for validating each field
function isFieldEmpty($input)
{
    return $input == "";
}

function isFirstNameValid($firstName)
{
    if (isFieldEmpty($firstName)) { // it checks if the input field is empty it returns false, shows warning which is defined in the submit.php file.
        return false;
    }

    if (strlen($firstName) < 3) { //strlen measure the length, it checks the length of the input is entered, if it is less than 3, it returns false
        return false;
    }

    return true;
}

function isLastNameValid($lastName)
{
    if (isFieldEmpty($lastName)) {
        return false;
    }

    if (strlen($lastName) < 3) {
        return false;
    }

    return true;
}

function isEmailValid($email)
{
    if (isFieldEmpty($email)) {
        return false;
    }

    if (strlen($email) < 6) {
        return false;
    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) { //filter_var filters a varialble with a specified(valid email address) filter
        return false; //we checked if it is NOT valid, so boolean returns false
    }

    return true;
}

function isCommentValid($comment)
{
    if (isFieldEmpty($comment)) {
        return false;
    }

    if (strlen($comment) < 2) { // they can just say hi
        return false;
    }

    return true;
}