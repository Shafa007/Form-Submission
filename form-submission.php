<!DOCTYPE html>
<html>
<head>
	<title>Registration From</title>
</head>
<body>
	<h1>Registration From</h1>
	<?php
     $fname = "";
     $lname= "";
     $gender = "";
     $dob = "" ;
     $religion = "";
     $present = "";
     $permanet = "";
     $phone = "";
     $email = "";
     $link = "";
     $username = "";
      $password = "";

     if($_SERVER['REQUEST_METHOD']==="POST")
	{
   $fname = test_input($_POST['fname']);
  
   $lname = test_input($_POST['lname']);
   
   $gender = test_input($_POST['gender']);
  
   $dob = test_input($_POST['dob']);
  
   $religion = test_input($_POST['religion']);
  
   $present = test_input($_POST['present']);
  

   $permanet = test_input($_POST['permanet']);


   $phone = test_input($_POST['phone']);
   

   $email = test_input($_POST['email']);
  

   $link = test_input($_POST['link']);
   

  $username = test_input($_POST['username']);
  

    $password = test_input( $_POST['password']);
   
   }
   echo"<br>";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
	?>

     <fieldset>
        <legend>Basic Information: </legend>
     <form action="form-submission.php" method="POST" autocomplete="on">

 	<label for="fname">First name:</label>
 	 <input type="text" id="fname"name="fname"placeholder="Enter your First name" value="<?php echo $fname; ?>" required>
 	
    <br><br>
    <label for="lname">Last name:</label>
   <input type="text" id="lname"name="lname"placeholder="Enter your Last name" value="<?php echo $lname; ?>" required>
     <br> <br>
     <h4>Gender: </h4>
		<input type="radio" id="male" name="gender" value="male" value="<?php echo $gender; ?>" required>
		<label for ="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender" value="female" value="<?php echo $gender; ?>">
		<label for ="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender" value="other" value="<?php echo $gender; ?>">
		<label for ="other">Other</label>
		<br><br>

     <label for="dob">Date of birth:</label>
 	 <input type="date" id="dob"name="dob"value="<?php echo $dob; ?>" required>	

    <br><br>
     <label for="religion">Religion:</label>
       <select type="dropdown" id="religion" name="religion"required value="<?php echo $religion; ?>">
       	<option value="islam" >Islam</option>
       	<option value="buddhist" >Buddhist</option>
       	<option value="Christian" >Christian</option>
       	<option value="hindu" >Hindu</option>
   		<option value="other" >Other</option>
       </select>
    <br><br>
 </fieldset>
    <fieldset>
        <legend>Contact Information:</legend>  

    <label for="present">Present Address   :</label>
 	 <input type="textarea" id="present"name="present"placeholder="Enter your Address"value="<?php echo $present; ?>" >
 	
    <br><br>
     <label for="permanet">Permanent Address:</label>
 	 <input type="textarea" id="permanet"name="permanet"placeholder="Enter your Address"value="<?php echo $permanet; ?>" >

       <br><br>
        <label for="phone">Phone:</label>
 	 <input type="tel" id="phone"name="phone"placeholder="Enter your PhoneNumber"value="<?php echo $phone; ?>">
 	 
       <br><br>
        <label for="email">Email:</label>
 	 <input type="email" id="email"name="email"placeholder="Enter your Email" value="<?php echo $email; ?>" required>
 	 
       <br><br>
         <label for="link">Personal Website Link:</label>
 	 <input type="url" id="link"name="link" value="<?php echo $link; ?>">
       <br><br>
     </fieldset>
        <fieldset>
        <legend>Account Information: </legend>

       <label for="username">Username:</label>
 	 <input type="text" id="username"name="username"placeholder="Enter your Username" value="<?php echo $username; ?>" required>

        <br><br>
      <label for="password">Password:</label>
 	 <input type="password" id="password"name="password"placeholder="Enter your Password" value="<?php echo $password; ?>" required>
 	 
    <br><br>
 </fieldset>
    <br>
    <input type="submit" value="submit">	

</body>
</html>