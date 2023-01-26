<?php  

$server = "localhost";
$username = "root";
$password = "";
$dbname = "final_project";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['message'])){

    $fname = $_POST['fname'] ;
    $lname = $_POST['lname'] ;
    $email = $_POST['email'] ;
    $number = $_POST['number'] ;
    $message = $_POST['message'] ;

    $query = "insert into contact_us(fname, lname, email, number, message) values('$fname', '$lname', '$email', '$number', '$message')";

    $run = mysqli_query($conn, $query);

    if($run){
        echo "Form submitted successfully";
    }
    else {
        echo "Form not submitted";
    }

    }
    else {
        echo "All fields required";
    }
}

?>