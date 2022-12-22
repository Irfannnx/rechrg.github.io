<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
</head>
<style>
	<?php include 'home.css';
	?>
</style>
<body>
<div class="bar">
            <nav>
                <div class="br">
                    <div class="menu">
                        <h2>Menu</h2>
                        <h2>Order</h2>
                        <div class="logo">
                              <h1>RECHRG</h1>
                         </div>
                        <h2>Deliver</h2>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </nav> 
        </div> 
        <nav role="navigation">
  <div id="hamToggle">

    <input type="checkbox" />
 
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="ham">
      <a href="#"><li>Profile </li></a>
      <a href="#"><li>Orders</li></a>
      <a href="#"><li>About</li></a>
      <a href="#"><li>Settings</li></a>
    </ul>
  </div>
</nav> 
     <div class="head"> 
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     </div>


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>