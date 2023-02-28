
<head></head>

<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name;?>">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
<label for="username">Username:</label>
<input type="text" id="username" name="username" value="<?php echo $username;?>">
<span class="error"><?php echo $usernameErr;?></span>
<br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password">
<span class="error"><?php echo $passwordErr;?></span>
<br><br>

<label for="dob">Date of birth:</label>
<input type="date" id="dob" name="dob" value="<?php echo $dob;?>">
<span class="error"><?php echo $dobErr;?></span>
<br><br>

<label for="course">Course:</label>
<select id="course" name="course">
<option value=""></option>
<option value="ME/M Tect">ME/M Tect</option>
<!-- Add more course options here -->
</select>
<span class="error"><?php echo $courseErr;?></span>
<br><br>

<label for="group">12th group:</label>
<input type="radio" id="science" name="group" value="science"<?php if (isset($group) && $group=="science") echo " checked";?>>
<label for="science">Science</label>
<input type="radio" id="commerce" name="group" value="commerce"<?php if (isset($group) && $group=="commerce") echo " checked";?>>
<label for="commerce">Commerce</label>
<input type="radio" id="arts" name="group" value="arts"<?php if (isset($group) && $group=="arts") echo " checked";?>>
<label for="arts">Arts</label>
<span class="error"><?php echo $groupErr;?></span>
<br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo $email;?>">
<span class="error"><?php echo $emailErr;?></span>
<br><br>

<label for="mobile">Mobile number:</label>
<input type="tel" id="mobile" name="mobile" value="<?php echo $mobile;?>">
<span class="error"><?php echo $mobileErr;?></span>
<br><br>

<input type="submit" value="Submit">

</form>
</body>
</html>
<?php
// If all input fields are valid, process form data
if ($nameErr == "" && $usernameErr == "" && $passwordErr == "" && $dobErr == "" && $courseErr == "" && $groupErr == "" && $emailErr == "" && $mobileErr == "") {
  // Process form data here, e.g. store in database
  echo "Form submitted successfully!";
}
?>
<?php
// Define variables and set to empty values
$nameErr = $usernameErr = $passwordErr = $dobErr = $courseErr = $groupErr = $emailErr = $mobileErr = "";
$name = $username = $password = $dob = $course = $group = $email = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Validate username
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // Check if username only contains alphanumeric characters and underscore
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      $usernameErr = "Only letters, numbers and underscore allowed";
    }
  }

  // Validate password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // Check if password is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password)) {
      $passwordErr = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
    }
  }

  // Validate date of birth
  if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
    // Check if date is in yyyy-mm-dd format and is a valid date
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/",$dob) || !checkdate(substr($dob, 5, 2), substr($dob, 8, 2), substr($dob, 0, 4))) {
      $dobErr = "Date of birth must be in yyyy-mm-dd format and be a valid date";
    }
  }

  // Validate course
  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }

  // Validate 12th group
  if (empty($_POST["group"])) {
    $groupErr = "12th group is required";
  } else {
    $group = test_input($_POST["group"]);
    // Check if 12th group is either science, commerce, or arts
    if ($group != "science" && $group != "commerce" && $group != "arts") {
      $groupErr = "12th group must be science, commerce, or arts";
    }
  }

  // Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email is a valid email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
        }
        
        // Validate mobile number
        if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
        } else {
        $mobile = test_input($_POST["mobile"]);
        // Check if mobile number is a valid 10-digit Indian mobile number
        if (!preg_match("/^[6-9]\d{9}$/",$mobile)) {
        $mobileErr = "Invalid mobile number format";
        }
        }
        }
        
        // Function to sanitize input data
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>
</body>



<?php
        // Define variables and set to empty values
        $nameErr = $passwordErr = $genderErr = $emailErr = "";
        $name =  $password =  $gender =  $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // Check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

           
            // Validate password
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
                // Check if password is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number
                if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
                    $passwordErr = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
                }
            }



            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "*Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // Check if email is a valid email address
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "*Invalid email format";
                }
            }

            if (empty($_POST["gender"]))
            {
               $genderErr = "*select option";
           } else {
               $gender = test_input($_POST["gender"]);
           }
   
        }

     

        // Function to sanitize input data
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>