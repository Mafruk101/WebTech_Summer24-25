
    var fname =document.getElementById("fname").value;
    var lname =document.getElementById("lname").value;
    var address =document.getElementById("address").value;
    var city =document.getElementById("city").value;
    var phone =document.getElementById("phone").value;
    var email =document.getElementById("email").value;
    var createPassword =document.getElementById("createPassword").value;
    var confirmPassword =document.getElementById("confirmPassword").value;
function filledInfo(){
    if(fname==""|| lname==""||address==""||city==""||phone==""||email==""||createPassword==""||confirmPassword==""){
        alert("please fill all the information");
        return false;
    }

    if(createPassword!=confirmPassword){
        alert("create and confirm password not matched");
        return false;
    }

}
function reset(){
    fname="";
    lname="";
    address="";
    city="";
    phone="";
    email="";
    createPassword="";
    confirmPassword="";

}
    