<link rel="stylesheet" href="./style.css">
<body>
   <div class="loginPage">
   <h1>WELCOME TO CUSTOMER SERVICE</h1> 
   <h2>LOGIN TO YOUR ACCOUNT </h2>
   </div>
   <!-- creates login form  -->
   <div class="loginForm">
      <!-- form sends the data entered by user to validate.php -->
   <form action="validate.php" method="post">
   <label for="name">Name:</label>
   <!-- required states that field must be filled with data -->
   <!-- <br> adds line break -->
   <input type="text" id="name" name="name" required><br><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" required><br><br>
   <!-- button to submit for -->
   <button type="submit" class="btn2">LOG IN</button> <br><br>
   <a href="logout.php">Logout</a>       
</form>
</div>

</body>