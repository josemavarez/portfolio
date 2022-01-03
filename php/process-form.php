<?php
    
    
    //DATABASE CONFIG
    $servername = "localhost";
    $username = "u406650721_mavarez";
    $password = "Mnbv21.*";
    $dbname = "u406650721_jdmm";
    

    $name = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    
            
    if ( ! empty( $_POST ) ) {

    
        if (isset($_REQUEST['name'],$_REQUEST['email'])) {
            
            
            // DOING CONNNECTION AND INSERTING TO DATABASE.
    
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
    
    
    
    
            $sql_insert = "INSERT INTO users(email, name, subject, message, from_pg, ) 
        VALUES 
        ('$email','$name','$subject','$message')";
    
            if ($conn->query($sql_insert) === TRUE) {
            //   echo "Saved succefully";
            } else {
            //   echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
    
            $conn->close();



        } 

if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    // Set your email address where you want to receive emails.
    $to = 'joseemava@gmail.com';

    $headers = "From: ".$name." <".$mail."> \r\n";

    $send_email = mail($to,$subject,$message,$headers);

    echo ($send_email) ? 'success' : 'error';

}    

 

} 

?>
