<?php 

    $conn = mysqli_connect("localhost", "root", "", "projectdb");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?> 