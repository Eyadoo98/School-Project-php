<?php 

    //Connect_To_DB
    @include 'connect.php';
    @include 'js.php';
    $class_name = $_REQUEST['class_name'];
    $class_info = $_REQUEST['class_info'];
    $doctor_id = $_REQUEST['doctor_id'];
   
    
    $query = "select * from login";
    $result = $connect->query($query);
    if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)){
            
        }
    }else{
        echo "Errors";
    }
    
    $insert = "INSERT INTO clases (class_name, class_info, user_id)
    VALUES ('$class_name', '$class_info', '$doctor_id')";
    
    if(mysqli_query($connect, $insert)){
        header('Location: add_student.php?id='.$doctor_id);
        
        
    }else{
        echo "Error While INsert";
    }

?>