<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $usn = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    
    // Response
    echo "
        <h2>Form Submitted Successfully</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>USN:<.strong> $usn</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
    ";
} else {
    echo "Invalid Request";
}
?>

