<?php
// Database connection
$conn = new mysqli("sql302.byethost24.com", "b24_37397899", "q236@0!*00prt", "b24_37397899_serenityresort");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $message = $conn->real_escape_string($_POST["message"]);
    $room_type = $conn->real_escape_string($_POST["room_type"]);

    // Insert the comment into the database
    $sql = "INSERT INTO comments (name, email, message, room_type) VALUES ('$name', '$email', '$message', '$room_type')";
    $result = $conn->query($sql);

    if ($result) {
        // Redirect back to the referring page
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer#confirmationMessage");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
