var validateEmail = function (email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$( "#msform" ).submit(function( event ) {  

    event.preventDefault();
    var err=0;
    var email=event.currentTarget.elements.email.value;
    var pass=event.currentTarget.elements.pass.value;
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
    //Backend
    }

    else
    {
        $('div#err').html(err_str);
    }

});