<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/task_3_style.css">
        <script src="../JS/Task_3_valid.js"></script>
    </head>
    <body>
        <h1>Donor Information</h1>
        <form>
            <label>First Name</label><br>
            <input type="text" id="fname"><br>
            <label>Last Name</label><br>
            <input type="text" id="lname"><br>
            <label>Address</label><br>
            <input type="text" id="address"><br>
            <label>City</label><br>
            <input type="text" id="city"><br>
            <label>State</label><br>
            <select name ="State" id="state">
                <option value="">Select a state</option>
                <option value="">Dhaka</option>
                <option value="">Chittagong</option>
            </select><br>
            <label>Phone</label><br>
            <input type="text" id="phone"><br>
            <label>Email</label><br>
            <input type="text" id="email"><br>
            <label>Creat Password(min 8 character)</label><br>
            <input type="password" id="createPassword"><br>
            <label>Confirm Password</label><br>
            <input type="password" id="confirmPassword"><br>
            <label>Donation Amount</label><br>
              <input type="radio" name="des">None
              <input type="radio" name="des">500 BDT
              <input type="radio" name="des">1000 BDT
              <input type="radio" name="des">2000 BDT
              <input type="radio" name ="des">3000 BDT
              <input type="radio" name="des">Other<br>
            <label>Other Amount</label><br>
            <input type="text" id="otherAmount"><br>
            <input type="checkbox">I am interested in giving on a regular basis<br>
            <h1>Additional Information</h1>
            <input type="checkbox">I would like my gift to remain annonymous<br>
            <input type="checkbox">My employer offers a matching gift program<br>
            <input type="checkbox">Please don't send a thank you letter<br>
            <label>Comments</label>
            <input type="text"><br>
             <button onsubmit="return filledInfo()">Submit</button>
             <button onclick="reset()">Reset</button>

        </form>




    </body>
</html>
