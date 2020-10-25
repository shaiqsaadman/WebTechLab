<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
    


$firstname = $lastname = $email = $gender = $comment = $website = "";

$firstnameError="";
$lastnameError="";
$emailError="";
$websiteError="";
$commentError="";
$genderError="";

    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
    
    if(empty($firstname) || $firstname =="" || !preg_match("/[a-zA-Z-]*$/",$firstname))
    {
        $firstnameError = "Please enter first name!";
    }
    
    if(empty($lastname) || $lastname =="" || !preg_match("/[a-zA-Z-]*$/",$lastname))
    {
        $lastnameError = "Please enter last name!";
    }
    
    
    
     if(empty($email) || $email =="")
    {
        $emailError = "Please enter email!";
    }
    
     if(empty($website) || $website =="")
    {
        $websiteError = "Please enter website!";
    }
    
     if(empty($comment) || $comment =="")
    {
        $commentError = "Please enter comment!";
    }
    
     if(empty($gender) || $gender =="")
    {
        $genderError = "Please enter gender!";
    }
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<fieldset>
<fieldset>
 <legend align="center"><h1>Registration</h1></legend>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
First Name: 
    <tr>
        <td><input type="text" id="firstname" placeholder = "First Name" required></td>
    </tr>

    <?php
    echo $firstnameError;
    ?>
    <br><br>
    
Last Name: 
     <tr>
        <td><input type="text" id="lastname" placeholder = "Last Name" required></td>
    </tr>
    
    <?php
    echo $lastnameError;
    ?>
    <br><br>
    
E-mail: <input type="text" name="email">
    
    <?php
    echo $emailError;
    ?>
    <br><br>

Website: <input type="text" name="website">
    
    <?php
    echo $websiteError;
    ?>
    <br><br>
 
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    
    <?php
    echo $commentError;
    ?>
    <br><br>
    
    
  Gender:
  <input type="radio" name="gender" value="female" checked>Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">
    
    <?php
    echo $genderError;
    ?>
    <br><br>
    
         
        
</form>
</fieldset>
</fieldset>
    
    
<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>