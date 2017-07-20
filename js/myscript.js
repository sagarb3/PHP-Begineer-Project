  $(function(){



  	

  	//activate schedule tabs
  	var hash=window.location.hash;
    	hash && $('ul.nav a[href="'+ hash +'"]').tab('show');


$("[data-toggle='tooltip']").tooltip({animation:true});

$('.modalphotos img').on('click',function(){
	$('#modal').modal({
		show:true,
	})
	var mysrc=this.src.substr(0,this.src.length-7)+'.jpg';
	$('#modalimage').attr('src',mysrc);
	$('#modalimage').on('click',function(){
		$('#modal').modal('hide');
	});
});


$("#home a:contains('Home')").parent().addClass('active');
$("#AboutUs a:contains('AboutUs')").parent().addClass('active');
$("#Quiz a:contains('Quiz')").parent().addClass('active');
$("#Details a:contains('Details')").parent().addClass('active');
$("#Students a:contains('Students')").parent().addClass('active');



$('ul.nav li.dropdown').hover(function(){
$('.dropdown-menu',this).fadeIn();
},function()
{$('.dropdown-menu',this).fadeOut('fast');
});
    });

