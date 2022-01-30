<?php

function shouldShowSubmissionData()
{
    return count($_POST) > 0;
}

function getPostDataWithDefault($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }

    return "";
}

function getErrorMessageFromSession($key) // it is chscking the error in a session
{
    if (! isset($_SESSION)) {
        return "";
    }

    if (! array_key_exists('errors', $_SESSION)) { // if there is no errors in the session it return empty string
        return "";
    }

    if (! array_key_exists($key, $_SESSION['errors'])) { //if key doesn't exists in the error session, it returns empty string. in reverse checking, it will run.
        return "";
    }

    return $_SESSION['errors'][$key]; // other than last 2 'if' staement, it will return error 
}

function getSubmissionFromSession($key)
{
    if (! isset($_SESSION)) {
        return "";
    }

    if (! array_key_exists('submission', $_SESSION)) {
        return "";
    }

    if (! array_key_exists($key, $_SESSION['submission'])) {
        return "";
    }

    return $_SESSION['submission'][$key];
}