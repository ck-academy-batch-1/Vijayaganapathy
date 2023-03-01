<!DOCTYPE HTML>
<html>

<head>

    <style>
        .error {
            color: cadetblue;
        }
        .container {
  background-color: white;
  
  margin-right: 400px;
  margin-bottom: 30px;
  margin-left: 300px;
}

    </style>
</head>

<body style="background-image:url(http://www.justinmaller.com/img/projects/wallpaper/WP_RichSoil-1440x900_00088.jpg); background-size: cover; background-repeat:no-repeat;">
 
<div class=container >

<main style="text-align: center;">

        <?php
        // Define variables and set to empty values
        $nameErr = $usernameErr = $passwordErr = $dobErr = $genderErr = $courseErr = $groupErr = $emailErr = $mobileErr = $branchErr = "";
        $name = $username = $password = $dob = $gender = $course = $group = $email = $mobile = $branch = "";

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

            // Validate username
            if (empty($_POST["username"])) {
                $usernameErr = "Username is required";
            } else {
                $username = test_input($_POST["username"]);
                // Check if username only contains alphanumeric characters and underscore
                if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
                    $usernameErr = "Only letters, numbers and underscore allowed";
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

            // Validate date of birth
            if (empty($_POST["dob"])) {
                $dobErr = "Date of birth is required";
            } else {
                $dob = test_input($_POST["dob"]);
                // Check if date is in yyyy-mm-dd format and is a valid date
                if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob) || !checkdate(substr($dob, 5, 2), substr($dob, 8, 2), substr($dob, 0, 4))) {
                    $dobErr = "Date of birth must be in yyyy-mm-dd format and be a valid date";
                }
            }

            // Validate course
            if (empty($_POST["course"])) {
                $courseErr = "Course is required";
            } else {
                $course = test_input($_POST["course"]);
            }

            // Validate branch
            if (empty($_POST["branch"])) {
                $branchErr = "select branch is required";
            } else {
                $branch = test_input($_POST["branch"]);
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
   
            // Validate mobile number
            if (empty($_POST["mobile"])) {
                $mobileErr = "Mobile number is required";
            } else {
                $mobile = test_input($_POST["mobile"]);
                // Check if mobile number is a valid 10-digit Indian mobile number
                if (!preg_match("/^[6-9]\d{9}$/", $mobile)) {
                    $mobileErr = "Invalid mobile number format";
                }
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
        <section>
            <h1> NEW STUDENT REG FORM</h1>
       <pre>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="name">* Name               </label> <input  type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>">
   <span class="error"><?php echo $nameErr; ?></span><br>
      <label for="username">Create Username      </label> <input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>">
     <span class="error"><?php echo $usernameErr; ?></span><br>
      <label for="password">Create Password      </label> <input type="password" id="password" name="password" class="form-control">
      <span class="error"><?php echo $passwordErr; ?></span><br>
    Gender:<input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="male">  Male <input type="radio" name="gender" value="other"> Other
  <span class="error"> <?php echo $genderErr; ?></span> <br>
      <label for="dob">Date of birth          </label><input type="date" id="dob" name="dob" class="form-control" value="<?php echo $dob; ?>">
      <span class="error"><?php echo $dobErr; ?></span><br>
      <label for="course">Course            </label> <select id="course" name="course" class="form-control">
        <option value=""></option>
        <option value="ME/M Tect">ME/M Tect</option>
        <option value="ME/M Tect">BE/B Tect</option>
        <option value="ME/M Tect">MBA</option>
        <option value="ME/M Tect">BBA</option>
        <option value="ME/M Tect">PHD</option> </select>
      <span class="error"><?php echo $courseErr; ?></span><br>
     <label for="branch">Branch             </label><select id="branch" name="branch" class="form-control">
        <option value=""></option>
        <option value="ME/M Tect">Coumputer science</option>
        <option value="ME/M Tect">civil</option>
        <option value="ME/M Tect">IT</option>
        <option value="ME/M Tect">Mech</option>
        <option value="ME/M Tect">Civil</option>  
      </select>
      <span class="error"><?php echo $branchErr; ?></span><br>

      <label for="group">12th Group            </label><select id="group" name="branch" class="form-control">
        <option value=""></option>
        <option value="csc">Coumputer science</option>
        <option value="arts">Arts</option>
        <option value="commerce">Commerce</option> 
      </select>
      <span class="error"><?php echo $groupErr; ?></span><br>

      <label for="email">Email                </label> <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
      <span class="error"><?php echo $emailErr; ?></span><br>
      <label for="mobile">Mobile number      </label> <input type="tel" id="mobile" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
      <span class="error"><?php echo $mobileErr; ?></span><br>
        </section>
        <input type="submit" value="Register">
    </main></pre>
    <br>
    </div>
<div style="background-color:white; margin:auto">
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $course;
echo "<br>";
echo $group;
echo "<br>";
echo $email;
echo "<br>";
echo  $mobile;
echo "<br>";
echo  $branch;
?>
</div>
</body>

</html>
