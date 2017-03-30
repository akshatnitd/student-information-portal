var validateRoll = function (roll) {
    var re = /[0-9][0-9]+\/[A-Z][A-Z]+\/[0-9][0-9]+/;
    return re.test(roll);
}
var validateEmail = function (email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
var rollfunc=function() {


     var roll=$('#roll').val();
     var err_str='';

   if(!validateRoll(roll) || roll.length == 0)
    {
        if(roll.length == 0)
            err_str = 'Roll number field empty<br>';

        else
            err_str = 'Incorrect roll number format<br>';
    }

    $('div#err1').html(err_str);
}; 
var emailfunc=function() {


     var email=$('#email').val();
     var err_str='';

   if(!validateEmail(email) || email.length == 0)
    {
        if(email.length == 0)
            err_str = 'Email field empty<br>';

        else
            err_str = 'Incorrect email format<br>';
    }

    $('div#err2').html(err_str);
};

var passfunc=function() {


     var pass=$('#pass').val();
     var err_str='';

   if(pass.length < 8 )
    {
        if(pass.length == 0 )
            err_str = 'Password field empty<br>';
        else
            err_str = 'Password too small<br>';
    }

    $('div#err3').html(err_str);
};

var loginsubmit=function() {  
    var err=0;
    var roll=event.currentTarget.elements.roll.value;
    roll=roll.trim();
    var email=event.currentTarget.elements.email.value;
    email=email.trim();
    var pass=event.currentTarget.elements.pass.value;
    pass=pass.trim();
    var err_str='';

    if(!validateRoll(roll) || roll.length == 0)
    {
        if(roll.length == 0)
            err_str = 'Roll number field empty<br>';

        else
            err_str = 'Incorrect roll number format<br>';
    }

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
        //$('div#err').html('');
        return true;
    }

    else
    {
        //$('div#err').html(err_str);
        return false;
    }

};