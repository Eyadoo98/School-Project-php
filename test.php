<?php 

@include 'connect.php';

$quert = "select a.class_name , b .student_id 
            from clases as a inner join 
            student_classes as b 
                on (a.user_id = b.class_id)";
die($quert);
?>