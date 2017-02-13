// $('#login_btn').click(function() {
//        var email = $("input#email").val();
//        console.log(email);
//     });


var validateEmail = function (email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$( "#msform" ).submit(function( event ) {  
    event.preventDefault();
    var err=0;
     var email=event.currentTarget.elements.email.value;
     var pass=event.currentTarget.elements.pass.value;

    if(!validateEmail(email) || !email)
    {
        err=err+1;
    }

    if(pass.length < 8 )
    {
        err=err+2;
    }

    if(err == 0)
    {
        $('div#err').html('');
//Backend

}

else
{
    if(err==2)
    $('div#err').html('Incorrect password!');

    else if(err==1)
    $('div#err').html('Incorrect email!');

else
    $('div#err').html('Incorrect credentials!');
}

});