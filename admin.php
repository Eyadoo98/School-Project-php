<?php 

    @include 'head.php';
    @include 'nav.php';
    @include 'connect.php';
    @include 'js.php';
    $doctor_id = $_GET['id'];
    //echo $doctor_id;
   
?>

	<div style="height: 100px;"></div>
	<input  type="button" value="Add Student To Class" style="position: relative;left: 100px;" class="btn btn-primary" onclick="openForm()">    
	<div style="height: 50px;"></div>
	
	<div class="container" style="display: none">
    <form action="add_classes.php?doctor_id= <?php echo $doctor_id ?>" method="post">
      <div class="mb-3">
        <label class="form-label">Class Name</label>
        <input name="class_name" type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Class Info</label>
        <input name="class_info" type="text" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    

<div style="height: 180px;"></div>

<script type="text/javascript">

	function openForm(){
	$(".container").fadeIn();
		}
</script>


<?php     
    //echo $_GET['id']    
?>

<?php @include 'closer.php'; ?>

