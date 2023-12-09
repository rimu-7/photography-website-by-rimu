<?php

    $servername = "Localhost";
    $username = "root";
    $password = "1234";
    $dbname = "fp";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $conn = mysqli_connect($servername, $username, $password,$name,$email,$message, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO fp(name, email ,message)
            values(?,?,?)";
        if (mysqli_query($conn, $sql)){
            echo "Message sent successfully. We will contact you soon.";
        }
        else {
            echo "Error:". $sql."\n". mysqli_error($conn);
        }
    mysqli_close($conn);

    ?>