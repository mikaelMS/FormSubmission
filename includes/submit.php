<?php
    include_once 'dbConfig.php';    

    $first_name = $_POST['first'];
    $last_name = $_POST['last'];
    $gender = $_POST['gender'];
    $newsletter = $_POST['newsletter'];

    // Cause newsletter can be undefined => 0 or 1 BIT in DB
    if ($newsletter != 1) {
        $newsletter = 0; 
    }

    $sql = "INSERT INTO users (user_first, user_last, user_gender, user_newsletter) 
            VALUES ('$first_name', '$last_name', '$gender', $newsletter);"; 
    mysqli_query($conn, $sql); 

    // After running the code above, it will load the following file
    header("Location: ../index.php?signup=success"); 

    