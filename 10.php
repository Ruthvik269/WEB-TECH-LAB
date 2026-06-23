<?php 
  $result = ""; 
   
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $num = intval($_POST['number']); 
     
    if ($num <= 1) { 
      $result = "Please enter a number greater than 1."; 
    } else { 
      $isPrime = true; 
      for ($i = 2; $i <= sqrt($num); $i++) { 
        if ($num % $i == 0) { 
          $isPrime = false; 
          break; 
        } 
      } 
      $result = $isPrime ? "$num is a prime number." : "$num is not a prime 
number."; 
    } 
  } 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>Prime Number Check</title> 
  <style> 
    body { 
      font-family: Arial,sans-serif;
      background:white; 
      text-align: center; 
      padding: 50px;
        } 

    h2 { 
      color:green;
       }

    form {
       background:white; 
       padding: 20px; 
       border-radius: 8px;
       width: 300px; 
       margin: 0 auto; 
       }

    input[type="text"] { 
      padding: 10px; 
      width: 60%; 
      border-radius: 5px; 
      border: 1px solid black;
      } 

    input[type="submit"] { 
      background:green; 
      color: white; 
      border: none; 
      padding: 10px 20px; 
      border-radius: 5px; 
      cursor: pointer; 
      margin-top: 15px; 
     } 
     
    p { 
      color: #d32f2f;
       font-size: 18px; 
       } 
  </style> 
</head> 
<body> 
 
  <h2>Prime Number Checker</h2> 
   
  <form method="POST" action=""> 
    <label for="number">Enter a number:</label><br><br> 
    <input type="text" id="number" name="number" required><br><br> 
    <input type="submit" value="Check Prime"> 
  </form> 

    <?php 
    // Display the result if available 
    if ($result) { 
      echo "<p>$result</p>"; 
    } 
  ?> 
   
</body> 
</html> 
