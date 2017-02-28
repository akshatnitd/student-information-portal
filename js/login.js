var validateEmail = function (email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
 
var loginsubmit=function() {  
    console.log();
    var err=0;
    var email=event.currentTarget.elements.email.value;
    email=email.trim();
    var pass=event.currentTarget.elements.pass.value;
    pass=pass.trim();
    var err_str='';

    if(!validateEmail(email) || email.length == 0)
    {
        err=err+1;
        if(email.length == 0)
            err_str = 'Email field empty<br>';

        else
            err_str = 'Incorrect email format<br>';
    }

    if(pass.length < 8 )
    {
        err=err+1;
        if(pass.length == 0 )
            err_str += 'Password field empty<br>';
        else
            err_str += 'Password too small<br>';
    }

    if(err == 0)
    {
        $('div#err').html('');
        return true;
    }

    else
    {
        $('div#err').html(err_str);
        return false;
    }

};