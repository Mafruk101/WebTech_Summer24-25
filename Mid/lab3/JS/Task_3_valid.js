
function filledInfo(){
    var fname =document.getElementById("fname").value;
    var lname =document.getElementById("lname").value;
    var address =document.getElementById("address").value;
    var city =document.getElementById("city").value;
    var state= document.getElementById("state").value;
    var phone =document.getElementById("phone").value;
    var email =document.getElementById("email").value;
    var createPassword =document.getElementById("createPassword").value;
    var confirmPassword =document.getElementById("confirmPassword").value;
    var donationAmount =document.querySelector('input[name="des"]:checked');
    var otherAmount= document.getElementById("otherAmount").value;

    if(fname==""|| lname==""||address==""||city==""||phone==""||email==""||createPassword==""||confirmPassword==""){
        alert("please fill all the information");
        return false;
    }
    if(state=="Select a state"){
        alert("please selet the state");
        return false;
    }

    if(!donationAmount){
        alert("please select an option from the donation amount");
        return false;
    }
    if(donationAmount.value==="Other"){
        if(otherAmount==""|| parseInt(otherAmount)<=0 ||isNaN(otherAmount)){
            alert("please enter a valid amount");
            return false;
        }
    }
    if(createPassword!=confirmPassword){
        alert("create and confirm password not matched");
        return false;
    }
    return true;
}
 