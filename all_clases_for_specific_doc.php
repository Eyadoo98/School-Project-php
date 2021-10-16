<?php 
    session_start();
//echo "Welcome Doctor " . $_SESSION['name'];

@include 'head.php';
@include 'nav.php';
@include 'connect.php';

@include 'js.php';
//$id = $_GET['id'];
$id = isset($_GET['id']) ? intval($_GET['id']):0;

//echo $id. " ";
//print_r($_SESSION);


$query = "SELECT  * FROM clases  WHERE user_id = '$id' ";
$result = mysqli_query($connect, $query);


   
   
?>
<div style="height: 50px;"></div>

<?php if(mysqli_num_rows($result) > 0): ?>
	
	 <table class="table">      
        <tr>
          <th scope="col">Subject Name</th>              
          <th scope="col">Class Details</th>  
          <th scope="col">All Students</th>            
        </tr>
    
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        	 <tr>
        	 	<td><?php echo $row['class_name']?></td>               	              	              
              	<td><a href="ShowDetails.php?id=<?php echo $row['id']?>&orginalID=<?php echo $id?>" class="btn btn-danger">Show Details</a>
              	<td><a href="show_all_student_for_this_class.php?id=<?php echo $id?>&name_subject=<?php echo $row['class_name']?>" class="btn btn-success">Show Students</a>
        	 </tr>
     
        <?php endwhile;?>
    
    
<?php endif;?>
</table>    



<?php @include 'closer.php'; ?>
