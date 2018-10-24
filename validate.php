<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$first_nameErr = $last_nameErr = $email_addressErr = $birth_dateErr = $genderErr = $passwordErr = "";
$first_name = $last_name = $email_address = $birth_date = $gender = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $nameErr = "First Name is Required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }
  if (empty($_POST["last_name"])) {
    $nameErr = "Last Name is Required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }
  if (empty($_POST["email_address"])) {
    $emailErr = "Email Address is Required";
  } else {
    $email_address = test_input($_POST["email_address"]);
  }
  if (empty($_POST["birth_date"])) {
    $birth_dateErr = "Birth Date is Required";
  } else {
    $birth_date = test_input($_POST["birth_date"]);
  }
  if (empty($_POST["gender"])) {
    $GenderErr = "Gender is Required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "A Password is Required";
  } else {
    $password = test_input($_POST["password"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Uh Oh... You Missed Required Fields</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" first_name="first_name">
  <span class="error">* <?php echo $first_nameErr;?></span>
  <br><br>
  Last Name: <input type="text" last_name="last_name">
  <span class="error">* <?php echo $last_nameErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Birth Date: <input type="text" name="webirth_date">
  <span class="error"><?php echo $birth_dateErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  "
  Password: <input type="text" name="password
  <span class_"error">* <?php echo $passwordErr;?></span>
  <br><br>
</form>

<?php
echo "<h2>Your Info:</h2>";
echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $email_address;
echo "<br>";
echo $birth_date;
echo "<br>";
echo $gender;
echo "<br>";
echo $password;
?>

</body>
</html>