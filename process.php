<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
    $firstName = trim($_POST["first_name"]);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST[ "email"]);
    $name = $firstName . " " . $lastName;
    if ($firstName == "" OR $lastName == "" OR $email == "") {
        $message = "You must specify a value for name and email address.";
    } else {
        $message = "You name is $name. You email is $email";
    }
     echo $message ;
}  elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
    $firstName = trim($_GET["first_name"]);
    $lastName = trim($_GET["last_name"]);
    $email = trim($_GET["email"]);
    $name = $firstName . " " . $lastName;
    if ($firstName == "" || $lastName == "" || $email == "") {
        $message = "You must provide a name and email address.";
    } else {
        $message = "You name is $name. You email is $email";
    }

    echo $message;
} else {
    echo "Error: Invalid request method or form submit button was not clicked.";
}
?>