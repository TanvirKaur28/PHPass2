<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <!-- links to the style.css for styling -->
    <link rel="stylesheet" href="./style.css"> 
</head>
<body>
   <header><div class="header">
<h1>WELCOME TO CUSTOMER SERVICE</h1> </div></header>
   <div class="mainPart">
   <div class="form1">
      <!-- creating form with different labels and different input types -->
      <!-- form sends the data entered by user to addCustomer.php -->
<form  action="addCustomer.php" method="post">
   <div class="form1contents">
   <div class="formLabel">
      <!-- label provides description of field -->
   <label for="name">Name:</label>
   <!-- input allows users to enter text -->
   <!-- required states that field must be filled with data -->
   <!-- <br> adds line break -->
   <input type="text" class="name" name="name" required><br><br>
   </div>
   <div class="formLabel">
      <!-- label provides description of field -->
   <label for="email">Email:</label>
   <!-- input allows users to enter email -->
   <!-- required states that field must be filled with data -->
   <input type="email" class="email" name="email" required><br><br>
   </div>
   <div class="formLabel">
      <!-- label provides description of field -->
      <!-- input allows users to enter password -->
   <!-- required states that field must be filled with data -->
   <label for="password">Password:</label>
   <input type="password" class="password" name="password" required><br><br>
   </div>
   <div class="formLabel">
   <label  for="gender" class="gender" >Gender:</label><br><br>
   <label for="male" class="box">Male</label>
   <!-- checkboxes makes user to select their gender -->
   <input type="checkbox" class="male" name="gender" value="male">
   <label for="female" class="box">Female</label>
   <input type="checkbox" class="female" name="gender" value="female"><br><br>
   </div>
   <div class="formLabel">
   <label for="terms" class="terms" >Do you agree to terms and conditions?</label><br><br>
   <label for="yes" class="yes">I agree</label>
   <!-- this checkbox makes user to say yes to terms and conditions -->
    <input type="checkbox" class="yes" name="terms" value="yes"><br><br>
    </div>
    <!-- button to submit form -->
    <button class="btn" type="submit">Submit</button>         
    </div>     
 </form>
  </div>
  <!-- if a person is already registered then this link takes him directly to login page -->
  <div class="member">
  <p>Already a member?<a href="login.php">Go to Login page</a></p></div>
  </div>
  <footer>
   <p>@2023 Clothing Customer Service</p>
</footer>
</body>
</html>
