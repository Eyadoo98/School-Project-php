<?php 

@include 'head.php';
@include 'nav.php';
@include 'connect.php';
    @include 'js.php';
    
    $id =  isset($_GET['id']) ? intval($_GET['id']) : 0;
    if( $id == 0 ) die('no class id provided');
    
?>

<div style="height: 80px;"></div>
<h1 style="text-align: center;">Add Student</h1>
<div style="height: 50px;"></div>
<div class="container">
    <form action="insert_student.php?id= <?php echo $id ?>"  method="post">
        <select class="form-select" aria-label="Default select example" name="name">
        	<option selected>Choose A Student</option>
        	<?php 
        	   $query = "select * from login where human = 2";
        	   $result = mysqli_query($connect, $query);
            	while ($row = mysqli_fetch_assoc($result))
            	{        	            	       
        	?>                 
        	  <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
          <?php 
        	}
          ?>
        
        </select>
        <div style="height: 20px;"></div>        
        <input type="submit" value="Save" class="btn btn-success">
    </form>    
</div>    
<?php @include 'closer.php'; ?>