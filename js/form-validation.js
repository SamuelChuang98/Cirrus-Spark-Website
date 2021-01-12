function ValidateForm()
{
var email=document.getElementById("email");

    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
     /*Good email*/
    if(email.value.match(mailformat))
    {
        if(document.getElementById("Service").value=="Service"){
            document.getElementById("invalidService").style.display="inherit";
            return false;
        }
        else{
             return true;
        }
    }
    /*Bad email*/
    else
    {
        document.getElementById("invalidEmail").style.display="inherit";
        return false;
    }
}