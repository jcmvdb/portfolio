<?php
// Include config file

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /account");
    exit;
}

// Define variables and initialize with empty values
$username = $password = $confirm_password = $firstname = $lastname = "";
$username_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }


    // Validates firstname
    if (empty(trim($_POST["firstname"]))) {
        $firstname_err = "Please enter a firstname";
    } // checks if the given username is only letters with preg_match
    elseif (!preg_match('/^[a-zA-Z]+$/', trim($_POST["firstname"]))) {
        $firstname_err = "Firstname can only contain letters";
    } // if the form is filled in correctly then this part is going to work and inplent it into the database
    else {
        $firstname = trim($_POST["firstname"]);
    }

    // Validates lastname
    if (empty(trim($_POST["lastname"]))) {
        $lastname_err = "Please enter a lastname";
    } // checks if the given username is only letters with preg_match
    elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($_POST["lastname"]))) {
        $lastname_err = "The lastname can only contain letters";
    } // if the form is filled in correctly then this part is going to work and inplent it into the database
    else {
        $lastname = trim($_POST["lastname"]);
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($firstname_err) && empty($lastname_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES (:firstname, :lastname, :username, :password)";
//        $sql = "INSERT INTO users (username, password, firstname, lastname) VALUES (:username, :password, :firstname, :lastname)";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":firstname", $param_firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $param_lastname, PDO::PARAM_STR);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_firstname = $firstname;
            $param_lastname = $lastname;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: /login");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Close connection
    unset($pdo);
}
?>


<style>
    body {
        font: 14px sans-serif;
    }

    .wrapper {
        width: 360px;
        padding: 20px;
    }
</style>
<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                   value="<?= $username; ?>">
            <span class="invalid-feedback"><?= $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>firstname</label>
            <input type="text" name="firstname"
                   class="form-control <?= (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?= $firstname; ?>">
            <span class="invalid-feedback"><?= $firstname_err; ?></span>
        </div>
        <div class="form-group">
            <label>lastname</label>
            <input type="text" name="lastname" class="form-control <?= (!empty($lastname_err)) ? 'is-invalid' : ''; ?>"
                   value="<?= $lastname; ?>">
            <span class="invalid-feedback"><?= $lastname_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password"
                   class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?= $password; ?>">
            <span class="invalid-feedback"><?= $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password"
                   class="form-control <?= (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                   value="<?= $confirm_password; ?>">
            <span class="invalid-feedback"><?= $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</div>