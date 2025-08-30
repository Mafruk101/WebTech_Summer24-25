<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/task_3_style.css">
        <script src="../JS/Task_3_valid.js"></script>
    </head>
    <body>
        <form onsubmit="return filledInfo()">
            <h2>Donor Information</h2>
            <label>First Name</label><br>
            <input type="text" id="fname"><br>
            <label>Last Name</label><br>
            <input type="text" id="lname"><br>
            <label>Address</label><br>
            <input type="text" id="address"><br>
            <label>City</label><br>
            <input type="text" id="city"><br>
            <label>State</label><br>
            <select name ="State" id="state" style="width:511px">
                <option value="">Select a state</option>
                <option value="">Dhaka</option>
                <option value="">Chittagong</option>
            </select><br>
            <label>Phone</label><br>
            <input type="text" id="phone"><br>
            <label>Email</label><br>
            <input type="text" id="email"><br>
            <label>Create Password(min 8 character)</label><br>
            <input type="password" id="createPassword"><br>
            <label>Confirm Password</label><br>
            <input type="password" id="confirmPassword"><br>
            <label>Donation Amount</label><br>
              <input type="radio" name="des" value="None">None
              <input type="radio" name="des"value="500">500 BDT
              <input type="radio" name="des"value="1000">1000 BDT
              <input type="radio" name="des"value="2000">2000 BDT
              <input type="radio" name ="des"value="3000">3000 BDT
              <input type="radio" name="des"value="Other">Other<br>
            <label>Other Amount</label><br>
            <input type="text" id="otherAmount"><br>
            <input type="checkbox">I am interested in giving on a regular basis<br>
            <h2>Additional Information</h2>
            <input type="checkbox">I would like my gift to remain annonymous<br>
            <input type="checkbox">My employer offers a matching gift program<br>
            <input type="checkbox">Please don't send a thank you letter<br>
            <label>Comments</label><br>
            <textarea name="message" id="comments"></textarea><br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>

        </form>


    </body>
</html>
