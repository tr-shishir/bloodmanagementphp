 <?php
session_start();
if(isset($_SESSION['login_user'])){
header("location: main.php");
}
?>     
	  
	  
	  <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
		 $connection=mysqli_connect('localhost', 'root', '', 'rajpoth');
if(!$connection){
	die("connection error".mysqli_error($connection));
	
}
            $msg = '';
            
            if (isset($_POST['login']) && isset($_POST) && !empty($_POST) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				   $name=$_POST['username'];
				   $pass=$_POST['password'];
				$sql = "SELECT * FROM `admin` WHERE name='$name' AND password='$pass'";
              $result=mysqli_query($connection,$sql);
			  $count=mysqli_num_rows($result);
if($count==1){

					  
					  
					  
					  
$_SESSION['login_user']=true;
header("location: main.php");   


             

               }else {
                  $msg = 'Wrong username or password';
				  echo $msg;
               }
            }
         ?>
      </div> <!-- /container -->


<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required >

    <button type="submit" name="login">Login</button>
	<br/><br/>
	<label><b><td><a href="register.php"?id="register">resittration</a></td></b></label><br/>
    <label>
      <input type="checkbox" checked="checked"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>