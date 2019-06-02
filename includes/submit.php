<?php
    include_once 'dbConfig.php';

    $sql = "INSERT INTO users (user_first, user_last, user_gender, user_newsletter) VALUES ('Diana', 'Bossaura', 'Female', 0);"; 
    mysqli_query($conn, $sql); 

    // After running the code above, it will load the following file
    header("Location: ../index.php?signup=success"); 