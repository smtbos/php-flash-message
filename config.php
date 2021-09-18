<?php
session_start();

function add_message($msg)
{
    $_SESSION['msg'][] = $msg;
}

function is_have_messages()
{
    if (isset($_SESSION['msg'])) {
        return boolval(count($_SESSION['msg']));
    } else {
        return false;
    }
}

function get_all_message()
{
    $messages = implode('<br>', $_SESSION['msg']);
    unset($_SESSION['msg']);
    return $messages;
}
