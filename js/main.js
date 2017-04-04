
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var validateRoll = function (roll) {
  var re = /[0-9][0-9]+\/[A-Z][A-Z][A-Z]+\/[0-9][0-9]+/;
  return re.test(roll);
}

var validateEmail = function (email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}


$(".next1").click(function(){


  if(animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  var err=0;
  var fname=$('#fname').val();
  var lname=$('#lname').val();
  var gen=$('#gender').val();
  var dob=$('#dob').val();
  var phone=$('#phone').val();
  var addr=$('#address').val();
  var err_str='';

  if(fname.length == 0)
  {
    err=err+1;
    if(fname.length == 0)
      err_str = 'First Name field empty<br>';

    else
      err_str = 'Incorrect name format<br>';

    $('div#err1').html(err_str);
  }

  if(lname == 0)
  {
    err=err+1;
    if(lname.length == 0)
      err_str = 'Last Name field empty<br>';

    else
      err_str = 'Incorrect name format<br>';
    $('div#err2').html(err_str);
  }

  if(gen == 'none')
  {
    err=err+1;

    err_str = 'Select a valid gender<br>';

    $('div#err3').html(err_str);
  }

  if(!dob)
  {
    err=err+1;
    err_str = 'Select a valid DOB<br>';
    $('div#err4').html(err_str);
  }

  if(phone.length < 10)
  {
    err=err+1;
    if(phone.length == 0 )
      err_str = 'Phone no. field empty<br>';
    else
      err_str = 'Phone no. should be a 10-digit number<br>';
    $('div#err5').html(err_str);
  }

  if(addr.length == 0)
  {
    err=err+1;
    err_str = 'Address field empty<br>';
    $('div#err6').html(err_str);
  }


  if(err == 0)
  {
//$('div#err').html('');
//activate next step on progressbar using the index of next_fs
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show(); 
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale current_fs down to 80%
scale = 1 - (1 - now) * 0.2;
//2. bring next_fs from the right(50%)
left = (now * 50)+"%";
//3. increase opacity of next_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
  'transform': 'scale('+scale+')',
  'position': 'absolute'
});
next_fs.css({'left': left, 'opacity': opacity});
}, 
duration: 800, 
complete: function(){
  current_fs.hide();
  animating = false;
}, 
//this comes from the custom easing plugin
easing: 'easeInOutBack'
});


}

});



$(".next2").click(function(){


  if(animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  var err=0;
  var regno=$('#regno').val();
  var program=$('#program').val();
  var dept=$('#dept').val();
  var sem=$('#sem').val();
  var roll=$('#roll').val();
  var err_str='';

  if(regno.length == 0)
  {
    err=err+1;
    if(regno.length == 0)
      err_str = 'Registration number field empty<br>';

    else
      err_str = 'Incorrect registration number format<br>';
    $('div#err7').html(err_str);


  }

  if(program == 'none')
  {
    err=err+1;
    err_str = 'Select a valid program<br>';
    $('div#err8').html(err_str);
  }

  if(dept == 'none')
  {
    err=err+1;
    err_str = 'Select a valid department<br>';
    $('div#err9').html(err_str);
  }

  if(sem == 'none')
  {
    err=err+1;
    err_str = 'Select a valid semester<br>';
    $('div#err10').html(err_str);
  }

  if(roll.length == 0)
  {
    err=err+1;
    if(roll.length == 0)
      err_str = 'Roll number field empty<br>';

    else
      err_str = 'Incorrect roll number format<br>';
    $('div#err11').html(err_str);


  }

  if(err == 0)
  {
// $('div#err').html('');
//activate next step on progressbar using the index of next_fs
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show(); 
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale current_fs down to 80%
scale = 1 - (1 - now) * 0.2;
//2. bring next_fs from the right(50%)
left = (now * 50)+"%";
//3. increase opacity of next_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
  'transform': 'scale('+scale+')',
  'position': 'absolute'
});
next_fs.css({'left': left, 'opacity': opacity});
}, 
duration: 800, 
complete: function(){
  current_fs.hide();
  animating = false;
}, 
//this comes from the custom easing plugin
easing: 'easeInOutBack'
});


}

});


$(".previous").click(function(){
  if(animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

//de-activate current step on progressbar
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show(); 
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale previous_fs from 80% to 100%
scale = 0.8 + (1 - now) * 0.2;
//2. take current_fs to the right(50%) - from 0%
left = ((1-now) * 50)+"%";
//3. increase opacity of previous_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({'left': left});
previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
}, 
duration: 800, 
complete: function(){
  current_fs.hide();
  animating = false;
}, 
//this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});


var fnamefunc =function() {
  var err_str='';
  var fname=$('#fname').val();


  if(fname.length == 0)
  {
    if(fname.length == 0)
      err_str = err_str + 'First Name field empty<br>';

    else
      err_str = err_str + 'Incorrect name format<br>';
  }
  $('div#err1').html(err_str);
};

var lnamefunc=function() {


  var lname=$('#lname').val();
  var err_str='';

  if(lname.length == 0)
  {
    if(lname.length == 0)
      err_str = err_str + 'Last Name field empty<br>';

    else
      err_str = err_str + 'Incorrect name format<br>';
  }
  $('div#err2').html(err_str);
};

var genderfunc=function() {

  var err_str='';
  var gen=$('#gender').val();

  if(gen == 'none')
  {
    err_str += 'Select a valid gender<br>';
  }

  $('div#err3').html(err_str);
};

var dobfunc=function() {


  var dob=$('#dob').val();
  var err_str='';

  if(!dob)
  {
    err_str += 'Select a valid DOB<br>';
  }

  $('div#err4').html(err_str);
};

var phonefunc=function() {


  var phone=$('#phone').val();
  var err_str='';


  if(phone.length < 10)
  {
    if(phone.length == 0 )
      err_str = 'Phone no. field empty<br>';
    else
      err_str = 'Phone no. should be a 10-digit number<br>';
  }
  $('div#err5').html(err_str);
};

var addrfunc=function() {


  var addr=$('#address').val();
  var err_str='';

  if(addr.length == 0)
  {
    err_str = 'Address field empty<br>';
  }

  $('div#err6').html(err_str);
};

var regnofunc=function() {


  var regno=$('#regno').val();
  var err_str='';

  if(regno.length == 0)
  {
    if(regno.length == 0)
      err_str = 'Registration number field empty<br>';

    else
      err_str = 'Incorrect registration number format<br>';

  }

  $('div#err7').html(err_str);
};

var programfunc=function() {


  var program=$('#program').val();
  var err_str='';

  if(program == 'none')
  {
    err_str += 'Select a valid program<br>';
  }


  $('div#err8').html(err_str);
};

var deptfunc=function() {


  var dept=$('#dept').val();
  var err_str='';


  if(dept == 'none')
  {
    err_str = 'Select a valid department<br>';
  }



  $('div#err9').html(err_str);
};

var semfunc=function() {


  var sem=$('#sem').val();
  var err_str='';

  if(sem == 'none')
  {
    err_str = 'Select a valid semester<br>';
  }

  $('div#err10').html(err_str);
};

var rollfunc=function() {


  var roll=$('#roll').val();
  var err_str='';

  if(roll.length == 0)
  {
    if(roll.length == 0)
      err_str = 'Roll number field empty<br>';

    else
      err_str = 'Incorrect roll number format<br>';

  }

  $('div#err11').html(err_str);
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

  $('div#err12').html(err_str);
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

  $('div#err13').html(err_str);
};

var cpassfunc=function() {

  var pass=$('#pass').val();
  var cpass=$('#cpass').val();
  var err_str='';
  if(pass != cpass && pass.length > 0  )
  {
    err_str = "Both the passwords doesn't match<br>";
  }

  if(pass === cpass  && pass.length > 0)
  {
    err_str = "<div style='color: #0f0;' >Both the passwords match !<br></div>";
  }

  $('div#err14').html(err_str);
};

var roll_init = function() {

  var regno=$('#regno').val();
  var dept=$('#dept').val();
  var ans = regno[2]+ regno[3]+ '/'+dept+'/';    
  document.getElementById('roll').value=ans ; 

}

var signupsubmit=function(){    

  current_fs = $(this).parent();

  var err=0;
  var email=current_fs[0].elements.email.value;
  var pass=current_fs[0].elements.pass.value;
  var cpass=current_fs[0].elements.cpass.value;
  var err_str='';

  if(!validateEmail(email) || email.length == 0)
  {
    err=err+1;
    if(email.length == 0)
      err_str = 'Email field empty<br>';

    else
      err_str = 'Incorrect email format<br>';

    $('div#err12').html(err_str);
  }

  if(pass.length < 8 )
  {
    err=err+1;
    if(pass.length == 0 )
      err_str += 'Password field empty<br>';
    else
      err_str += 'Password too small<br>';

    $('div#err13').html(err_str);
  }

  if(pass != cpass )
  {
    err=err+1;
    err_str = "Both the passwords doesn't match<br>";
    $('div#err14').html(err_str);
  }

  if(err == 0)
  {
    return true;

  }
  else
    return false;
};
