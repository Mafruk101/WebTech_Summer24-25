<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="../CSS/registration.css">
    </head>
    <body>
        <div class="container">

        <h1>Customer Registration</h1>
        
        <form>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your name"><br><br><br>
            <input type="text" id="username"name="username" placeholder= "Enter an username"><br> <br><br>
            <input type="text" id="email" name ="email" placeholder="Email"><br><br><br>
            <input type="text" id="phone" name="phone" placeholder="Phone Number"><br><br><br>
            <input type="password" id="password" name="password" placeholder="Enter a password"><br><br><br>
            <input type="password" id="reEnterPassword" name="reEnterPassword" placeholder="Re-enter the password"><br><br>
            <label class="font">
            <input type="checkbox" id="showPassword" name="showPassword">Show password
            </label>
            <br><br>
            <button type="submit">Register</button><br><br>
            <a href="loginPage.php">Back</a>
        </form>
        
</div>
    </body>
</html>