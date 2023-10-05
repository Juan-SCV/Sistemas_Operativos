<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "universidad"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $description = $_POST["description"];
    $email = $_POST["email"];

    $sql = "INSERT INTO students (name, gender, age, email, description)
            VALUES ('$name', '$gender', '$age', '$email', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
