function ValidateEmail()
{
var email=document.getElementById("email");

    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
     /*Good email*/
    if(email.value.match(mailformat))
    {
        return true;
    }
    /*Bad email*/
    else
    {
        document.getElementById("invalidEmail").style.display="inherit";
        return false;
    }
}