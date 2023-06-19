<?php 
$insert = false;
if(isset($_POST['Name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // else{
    //  echo "Success connecting to the db";}

    // Collect post variables
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $subject = $_POST['subject'];
    $descr = $_POST['descr'];
    // $Message = $_POST['Message'];
    

   $sql="INSERT INTO `contact us`.`form` (`Name`,`Email`,`subject`,`descr`) VALUES ('$Name', '$Email','$subject','$descr');";
   echo $sql;

    if($con->query($sql) == true){     
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    header("location:thankyou.html");

    // Close the database connection
    $con->close();
}
        ?>