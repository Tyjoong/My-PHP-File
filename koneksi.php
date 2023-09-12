<?php
    $Username= "root";
    $Password="";
    $Database= "perpus";
    $conn=mysqli_connect('localhost',$Username,$Password,$Database);
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    } 
?>