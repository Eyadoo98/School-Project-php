<?php

    //Header Section

@include 'head.php';
@include 'nav.php';


    @include 'js.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
</head>
<body>

<!-- Start Form For Registeration -->
<div style="height: 70px;"></div>
    <div class="container">
      <div class="row">
    	<form action="insert.php" method="POST">
    	<div class="mb-4">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control">           
          </div>
          <div class="mb-4">
            <label class="form-label">Email Address</label>
            <input name="email" type="email" class="form-control">           
          </div>          
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="pass" type="password" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control">
          </div>
            <input name="human" value="2" type="radio" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">User</label>
            <input name="human" value="1" type="radio" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Admin</label>
          <div style="height: 20px"></div>         
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
</div>

<!-- End Form For Registeration -->

	<div style="height: 33px;"></div>

<?php 
    @include 'footer.php';
?>
</body>
</html> 

<?php @include 'closer.php'; ?>