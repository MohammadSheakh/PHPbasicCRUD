<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    // get method er maddhome amra variable / parameter access korte pari .. 
    $id = $_GET['deleteid']; // storing deleteid in a variable which i get from query parameter

    // ekhon delete query likhbo 
    $sql = "delete from `php_basic_crud`.`crud` where id=$id"; // table id is equal to this id 

    $result = mysqli_query($con, $sql); 
    
    if($result){
        // if query has execute successfully 
        //echo "Data deleted successfully" ; // show me this 
        
        header('location:displayInformation.php');
    }else{
        // error 
        die(mysqli_error($con));
    }
}

?>