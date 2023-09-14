<!DOCTYPE HTML>
<html>
    <head>
        <title>Asynchronous Activity 2</title>
    </head>
    <body>
    <?php if (isset($_POST['form_submitted'])): ?>
        <h2>Thank You <?php echo $_POST['fname'] . ' ' . $_POST['lname'] ?> </h2>
        <p>You have been registered as
        <?php echo $_POST['email']; ?>
        </p>
        <p>First Name: <?php echo $_POST['fname']; ?></p>
        <p>Middle Name: <?php echo $_POST['mname']; ?></p>
        <p>Last Name: <?php echo $_POST['lname']; ?></p>
        <p>Email Address: <?php echo $_POST['email']; ?></p>
        <p>Mobile Number: <?php echo $_POST['number']; ?></p>
        <p>Gender: <?php echo $_POST['gender']; ?></p>
        <p>Date of Birth: <?php echo $_POST['date']; ?></p>
        <p>Go <a href="Activity.php">back</a> to the form</p>
        <?php else: ?>
        <h2>Registration Form</h2>
        <form action ="activity.php" method="POST">
            First Name:
            <input type = "text" name = "fname"><br>
            Middle Name:
            <input type = "text" name = "mname"><br>
            Last Name:
            <input type = "text" name = "lname"><br>
            Email Adress:
            <input type = "email" name = "email"><br>
            Password:
            <input type = "password" name = "pass"><br>
            Mobile Number:
            <input type = "text" name = "number"><br>
            Gender:
            <input type = "radio" id = "male" name = "gender" value = "Male">
            <label for ="male">Male</label>
            <input type = "radio" id = "female" name = "gender" value = "Female">
            <label for ="female">Female</label><br>
            Date of Birth:
            <input type ="date" name ="date"><br>
            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" value="Submit">
        </form>
        <?php endif; ?>
    </body>
</html>
</HTML>