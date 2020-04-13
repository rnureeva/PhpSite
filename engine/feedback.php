<?php

function  doFeedbackAction(&$params, $action, $id) {
    //$errorsArr = include "../config/errors.php";
    //$params['error'] = $errorsArr[$_GET['status']];
    $params['error'] = ERR_CODE[$_GET['status']];

    $params['action'] = "add";
    $params['buttonText'] = "Add review";
    $params['name'] = "";
    $params['feedtext'] = "";

    if ($action == "add") {
        if (addFeedback())
            header("Location: /feedback/?status=OK");
        else
            header("Location: /feedback/?status=ERROR_ADD");
    }

    if ($action == "delete") {
        $error = deleteFeedback($id);
        if ($error)
            header("Location: /feedback/?status=DELETED");
        else
            header("Location: /feedback/?status=ERROR_DEL");
    }

    if ($action == "save") {
        $error = updateFeedback($id);
        if ($error)
            header("Location: /feedback/?status=UPDATED");
        else
            header("Location: /feedback/?status=ERROR_UPDATE");

    }


    if ($action == "edit") {
        $feedback = getFeedback($id);
        $params['action'] = "save/{$id}";
        $params['buttonText'] = "Править";
        $params['name'] = $feedback['name'];
        $params['feedtext'] = $feedback['feedback'];
    }
}
function updateFeedback($id) {
    $db = getDb();
    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $message = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['message'])));
    $sql = "UPDATE `feedback` SET `name`='{$name}',`feedback`='{$message}' WHERE id = {$id}";
    $result = executeQuery($sql);
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function getFeedback($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM feedback WHERE id={$id}";
    $result = getAssocResult($sql)[0];
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function getAllFeedback()
{
    $feedback = getAssocResult("SELECT * FROM feedback");
    return $feedback;
}

function addFeedback(){
    $db = getDb();
    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $message = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['message'])));
    $sql = "INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES (NULL, '{$name}', '{$message}')";
    $result = executeQuery($sql);
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}

function deleteFeedback($id) {
    $id = (int)$id;
    $sql = "DELETE FROM `feedback` WHERE id={$id}";
    $result = executeQuery($sql);
    if (mysqli_affected_rows(getDb()) != 1) return false;
    return $result;
}