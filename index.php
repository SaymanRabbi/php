<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayman Rabbi</title>
    <!-- ----font awsome----- -->
    <script src="https://kit.fontawesome.com/86c7c54439.js" crossorigin="anonymous"></script>
       <!-- ------goole fonts------- -->
     <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- -----bootstrap css-------- -->
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <!-- ----main css file-------- -->
    <link rel="stylesheet" href="assest/css/style.css">
    <!-- ----fevicon------ -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
   
   <!-- -----navbar end---- -->

   <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sayman");

  // If upload button is clicked ...
  if (isset($_POST['btn'])) {
  
    $first=$_POST['first'];
    $last=$_POST['last'];
    $mobile=$_POST['mobile'];
    $pass=$_POST['pass'];
    $pss2=$_POST['pass2'];
  	$image = $_FILES['file']['name'];
  	

  	$sql = "INSERT INTO data (first,last,mobile,pass,pass2,file) VALUES ('$first', '$last','$mobile','$pass','$pss2','$image')";
  	// execute query
  	mysqli_query($db, $sql);
  }
?>
   <main>
<div class="container contact" id="contact">
  <form action="" method='post' enctype='multipart/form-data'>
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <div class="row">
        <div class="col-6 width-50">
         <input type="text" placeholder="First name" name='first'>
        </div>
        <div class="col-6 width-50">
          <input type="text" placeholder="Surname" name='last'>
        </div>
      
      </div>
      <div class="row">
        <div class="col-12 width-100">
          <input type="text" placeholder="Mobile number or email address" name='mobile'>
        </div>
      </div>
      <div class="row">
        <div class="col-6 width-50">
          <input type="password" placeholder="Password" name='pass'>
        </div>
        <div class="col-6 width-50">
          <input type="password" placeholder="Conform Password" name='pass2'>
        </div>
      </div>
      <div class="row file">
      <input type="file" name='file'>

        
      </div>
      
      
     
      
    </div>
  </div>
  <button name='btn'>Submit</button>
</form>
</div>

  </main>

   <script src="assest/css/bootstrap.min.js"></script>
   <script src="assest/css/script.js"></script>
</body>
</html>