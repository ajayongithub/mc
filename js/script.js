$(document).ready(function() {
 $('.front-logo').click(function() {
	 clearAll();
    $(this).fadeOut();
	setTimeout(function() {
       $('.form-div').fadeIn();
	   $('.form-div').addClass('active');
	}, 500);
	});
	
	 $('.sub-btn').click(function() {
		 console.log("Function is being called");
		// if(validate()==false)return ;
		 //console.log("Validation passed ");
		 var allow = $('#allow').is(':checked') ;
		 var numAllow = 0 ;
		 if(allow) numAllow =1 ;
		 
		var fname, lname, email, title ;
		title = $('#title').val();
		fname = $('#firstName').val();
		lname = $('#lastName').val();
		email = $('#email').val();
	console.log(title);	
	console.log(fname);	
	console.log(lname);	
	console.log(email);	
	console.log(numAllow);	
		if(title=='' && fname=='' && lname=='' && email =='' ){
			console.log('All null');
			if(numAllow==0){
				//	alert("Login as anonymous");
					registerUser('','Guest','','',numAllow);
					return ;
				}else{
					alert("Cannot Login as anonymous with selected terms.");
					return ;
				}
		}else 	if((title!='' || fname!='' || lname!='' || email !=='') && numAllow==0){
			alert('Please click on the check box accepting the terms.');
			return ;
		}
		 
		 registerUser($('#title').val(),$('#firstName').val(),$('#lastName').val(),$('#email').val(),numAllow);
		 
	});

	 $('.cancel-btn').click(function() {
		 
	     $('.form-div').fadeOut();
		setTimeout(function() {
	       $('.front-logo').fadeIn();
		}, 500);
		});

 $('.thank-you-page').click(function() {
	 	console.log("Thank you page clicked");
	     $('.thank-you-page').fadeOut();
		setTimeout(function() {
	       $('.front-logo').fadeIn();
		}, 500);
		});	
 
 $('.reset-ac').click(function(){
	 clearAll();
 });
 
});
function validate(){
	if($('#title').val()=='') return false ;
	if($('#firstName').val()=='') return false ;
//	$('lastName').val('');
//	$('email').val('');
	return true ;
}
function clearAll(){
// TODO:	
	$('#title').val('');
	$('#firstName').val('');
	$('#lastName').val('');
	$('#email').val('');
}

function registerUser(title,fname,lname,email,allow){
	  $.ajax({type:"POST",
		  	url:"register/register/",
		  	data:{title:title,fname:fname,lname:lname,email:email,allow:allow },
		  	success:function(result){
	  			console.log("Result recd is ");
	  			console.log(result);
			  	if(result=='200'){
			  		$('.form-div').fadeOut();
					 setTimeout(function() {
		       		 $('.thank-you-page').fadeIn();
					 }, 500);
			  	}else{
  			alert('Could not register you, please try again');
			  	}
	  }});
	  }