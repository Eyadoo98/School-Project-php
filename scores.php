<?php 


    @include 'head.php';
    @include 'nav.php';
    @include 'connect.php';//Include Header
    @include 'js.php';
    $id = $_GET['id'];//For Remove
    //echo $id. "<br>";
    
    
    $query = "SELECT clases.class_name , student_classes.student_id 
            from clases     
                INNER JOIN student_classes
                ON clases.user_id = student_classes.class_id
                WHERE clases.user_id = $id
    ";                   
        
    $SQL = "select a.*,b.name,c.score 
                    from student_classes as a
            left join login as b on (a.student_id = b.id) 
            left join scores as c on (a.student_id = c.student_id) 
";
    die($SQL);
    $result = mysqli_query($connect, $query);
?>


<?php if(mysqli_num_rows($result) > 0) : ?>  
        <table class="table">
      
        <tr>
          <th scope="col">Subject Name</th>
          <th scope="col">Student Name</th>      
          <th scope="col">Mark</th>
          <th scope="col">Modify Mark</th>       
          <th scope="col">Change Mark</th>      
        </tr>
    
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        	 <tr>
        	 	<td><?= $row['class_name']?></td>
               	<td><?= $row['student_id'] ?></td>
              	<td>10</td>
              	<td><input type=text /></td>
              	<td> 
              		<button id='myText' type='submit' class = 'btn btn-success' onclick='change_mark()'>
                 		Change Mark   
                 	</button>
                 </td>
        	 </tr>
        <?php endwhile;?>
    
    
<?php endif;?>    
     



</table>
<div style="height: 70px;"></div>
<h1 style="text-align: center;">All Students For A specific Doctor<mark> Score Page </mark></h1>


<script>
function change_mark(){
   
	var val = document.getElementById("myText").value; 
	alert(val);
    
}
</script>
<?php @include 'closer.php'; ?>