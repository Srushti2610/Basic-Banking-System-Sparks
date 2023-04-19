<?php

	$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sparks_vank";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if($conn){
                //Connection successfully established
              }
              else
                  die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
                  
              ?>