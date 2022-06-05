<!DOCTYPE html>

<html>

    <head>
        <style>
        .error {color: #FF0001;}
        </style>
    </head>

    <body>

        <?php
            $emailErr="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                }
                else {
                    $email = input_data($_POST["email"]);
                    // check that the e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                    }
                }
            }
            function input_data($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <h2>Email Validation</h2>
        <span class = "error">* required field </span>
        <br><br>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            E-mail:
                <input type="text" name="email">
                <span class="error">* <?php echo $emailErr; ?> </span>
            <br><br>
                <input type="submit" name="submit" value="Submit">
            <br><br>
        </form>

        <?php
            if(isset($_POST['submit'])) {
                if($emailErr == "") {
                    echo "<h3 color = #FF0001> <b>Valid Email ID</b> </h3>";
                    echo "<h2>Your Input:</h2>";
                    echo "Email: " .$email;
                    echo "<br>";
                }
                else {
                    echo "<h3> <b>Invalid Email ID</b> </h3>";
                }
            }
        ?>

    </body>

</html>