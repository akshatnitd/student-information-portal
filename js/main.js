
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
     var fname=current_fs[0].elements.fname.value;
     var lname=current_fs[0].elements.lname.value;
     var gen=current_fs[0].elements.gender.value;
     var dob=current_fs[0].elements.dob.value;
     var phone=current_fs[0].elements.phone.value;
     var addr=current_fs[0].elements.address.value;

    if(!fname)
    {
        err=err+1;
        console.log("Fname");
    }

    if(!lname)
    {
        err=err+1;
        console.log("Lname");
    }

     if(gen == 'none')
    {
        err=err+1;
        console.log("gen");
    }
    
    if(!dob)
    {
        err=err+1;
        console.log("dob");
    }

     if(phone.length < 10)
    {
        err=err+1;
        console.log("phone");
    }

     if(!addr)
    {
        err=err+1;
        console.log("addr");
    }


    if(err == 0)
    {
        $('div#err').html('');
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

else
{
//     if(err==2)
//     $('div#err').html('Incorrect password!');

//     else if(err==1)
//     $('div#err').html('Incorrect email!');

// else
    $('div#err').html('Incorrect credentials!');
}


	
	
});



$(".next2").click(function(){

	
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	 var err=0;
     var roll=current_fs[0].elements.roll.value;
     var program=current_fs[0].elements.program.value;
     var dept=current_fs[0].elements.dept.value;
     var sem=current_fs[0].elements.sem.value;

    if(!roll)
    {
        err=err+1;
        console.log("Roll");
    }

    if(program == 'none')
    {
        err=err+1;
        console.log("Program");
    }

     if(dept == 'none')
    {
        err=err+1;
        console.log("dept");
    }
    
    if(sem == 'none')
    {
        err=err+1;
        console.log("dob");
    }

    if(err == 0)
    {
        $('div#err').html('');
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

else
{

    $('div#err').html('Incorrect credentials!');
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

$(".submit").click(function(){	

	current_fs = $(this).parent();

	 var err=0;
     var email=current_fs[0].elements.email.value;
     var pass=current_fs[0].elements.pass.value;
     var cpass=current_fs[0].elements.cpass.value;

    if(!validateEmail(email) || !email)
    {
        err=err+1;
        console.log('email');

    }

    if(pass.length < 8 )
    {
        err=err+1;
        console.log('pass');
    }


    if(pass != cpass )
    {
        err=err+1;
        console.log('cpass');
    }

    if(err == 0)
    {
        $('div#err').html('');
//Backend

}

else
{
    $('div#err').html('Incorrect credentials!');
}

});