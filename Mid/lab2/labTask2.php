<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: lightblue;
        }
        .para1{
            text-align: center;
            color : navy;
        }
        #para2{
            text-align:left;
            color: Black
        }
        div{
            background-color: white;
            padding: 10px;
            width: 45%;
            border: 1px solid;
        }
        .para3{
            background-color: white;
            width: 200px;
            height:65px;
            border: 1px solid;
            overflow: scroll;

        }
        .button{
            background-color:#008CBA;
        }

    </style>
    <title>Bank management system </title>
</head>
<body>
    <h1 class="para1">Bank Management System</h1>
    <h2 class="para1">Your trusted financial partner</h2>
    <p id="para2">Customer registration form</p>
    <div>
        <table>
        <tr>
            <td>Full name:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td> Date of birth:</td>
            <td><input type="date"></td>
        </tr>
        <tr>
            <td>Gerder</td>
            <td><input type="radio" name= "des">Male
            <input type ="radio" name = "des">Female
            <input type = "radio" name = "des">Other</td>
        </tr>
        <tr>
            <td>Marital Status:</td>
            <td><select name="Marital Status:">
                <option value="">Single</option>
                <option value="">Married</option></td>
            </select>
        </tr>
        <tr>
            <td>Account Type:</td>
            <td><select name =""Account Type">
                <option value="">Savings</option>
                <option value="">Current</option></td>
            </select>

        </tr> 
        <tr>
            <td>Initial Deposit Account:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Occupation:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>National ID(NID):</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Set Password:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Upload ID Proof:</td>
            <td><input type="file"></td>
        </tr>
        <tr>
            <td><input type ="checkbox"> I agree to the terms and conditions</td>
        </tr>
       </table>
        <tr>
            <button class = "button">Register</button>
            <button class = "button">Clear</button>
        </tr>
    </div>
    <p class ="para3"> This is a demo text to show how overflow works 
        in a small container with a scroll bar</p>

</body>
</html>