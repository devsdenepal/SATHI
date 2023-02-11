
<html>
<head>
<title>GautamCommunity</title>
<style>
h1,h2,span {
  color: green;
  animation-name: example;
  animation-duration: 10s;
}

@keyframes example {
  from {color: green;}
  to {color: white;}
}
table {
  border-collapse: collapse;
  width: 100%;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
profile-card {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

profile-card profile-cardtext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the profile-card */
  position: absolute;
  z-index: 1;
}

profile-card:hover profile-cardtext {
  visibility: visible;
}
body{
background-color: #38444d;
}
</style>
</head>

<script src="https://kit.fontawesome.com/1364c3c233.js" crossorigin="anonymous"></script>
<?php
include('config.php');
$query = "SELECT username, created_at FROM users";
$result = mysqli_query($link, $query);
?>
<?php
// Initialize the session
session_start();
error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   
    echo  '<button class="w3-button  w3-silver w3-right"><image src="https://www.w3schools.com/images/mypagelogo32x32.png" class="w3-round-xxlarge" onclick="showProfile()"></image>' . $usr . '</button>' ;
}
else{
    echo '<a href="login.php"><button class="login">Join now! </button></a>';
}

?>
<script>
function showProfile(){
 window.location.href="profile.php";
}
</script>
<h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif; color: green;">Gautam Community</h1><hr/>
<div style="overflow-x: auto;" id="customers">
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Community</th>
    <th> Joined on:</th></tr>
 
<?php
if (mysqli_num_rows($result) > 0) {
  $id=1;
  while($data = mysqli_fetch_assoc($result)) {
  
 ?>
 <tr>

   <td><?php echo $data['username']; ?> </td>
<td><?php echo $data['created_at']; ?></td>
 <tr>
 <?php
  $id++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
</div>
 <?php } ?>
 </table>
