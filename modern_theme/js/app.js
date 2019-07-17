


/**********************TOP SECTION SLIDES****************************/



	





	var tl_slide_face_three = new TimelineMax({paused:false, delay:0.5});
	var swipe_three = $('.page_swipe_three');
	var decor_three = $('.decor_backing_one');
	var text_three_title = $('.sliderthree_title');
	var text_three_desc = $('.sliderthree_desc');

	var buttonthree = $('.three_button');


	tl_slide_face_three.to(swipe_three, 3, {width:"100%", opacity:1})

	tl_slide_face_three.to(decor_three, 1, {opacity:1, delay:0.1})

	tl_slide_face_three.to(text_three_title, 1,{opacity:1, delay:0.2})
	tl_slide_face_three.to(text_three_desc, 1,{opacity:1, delay:0.25})


	tl_slide_face_three.to(buttonthree, 1, {opactiy:1, delay:0.5})


/**********************TOP SECTION SLIDES****************************/



/** this -  targets itself ***/ 

/*************************HOVER IMAGES MENU*******************/
var tl_one = new TimelineMax({paused:true, delay:0.});
var outbox_one = $('.outerbox_one');
var line_one = $('.the_line_one');
var inner_one = $('.innerbox_one');
var icons_one = $('#icon_one');
var peeps_one = $('.people_one');
var another_one = $('.extra_one');

tl_one.to(outbox_one, 0.1, {opacity: 1});
tl_one.to(inner_one, 0.1, {opacity:1});
tl_one.staggerTo(line_one, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_one.staggerTo(icons_one, 0.1, {y: -5, opacity:1, ease:Power1.easeOut});
tl_one.staggerTo(peeps_one, 0.1, {y:10, opacity:1, ease:Power1.easeOut});
tl_one.staggerTo(another_one, 0.1, {y:-10, opacity:1, ease:Power1.easeOut});


function over_one(){
  tl_one.play();}
function out_one(){
  tl_one.reverse();}

outbox_one.hover(over_one, out_one);

/****/

var tl_two = new TimelineMax({paused:true, delay:0.5});
var outbox_two = $('.outerbox_two');
var line_two = $('.the_line_two');
var inner_two = $('.innerbox_two');
var icons_two = $('#icon_two');
var peeps_two = $('.people_two');
var another_two = $('.extra_two');

tl_two.to(outbox_two, 0.1, {opacity: 1});
tl_two.to(inner_two, 0.1, {opacity:1});
tl_two.staggerTo(line_two, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_two.staggerTo(icons_two, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_two.staggerTo(peeps_two, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_two.staggerTo(another_two, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_two(){
  tl_two.play();}
function out_two(){
  tl_two.reverse();}

outbox_two.hover(over_two, out_two);

/****/

var tl_three = new TimelineMax({paused:true, delay:0.5});
var outbox_three = $('.outerbox_three');
var line_three = $('.the_line_three');
var inner_three = $('.innerbox_three');
var icons_three = $('#icon_three');
var peeps_three = $('.people_three');
var another_three = $('.extra_three');

tl_three.to(outbox_three, 0.1, {opacity: 1});
tl_three.to(inner_three, 0.1, {opacity:1});
tl_three.staggerTo(line_three, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_three.staggerTo(icons_three, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_three.staggerTo(peeps_three, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_three.staggerTo(another_three, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_three(){
  tl_three.play();}
function out_three(){
  tl_three.reverse();}

outbox_three.hover(over_three, out_three);


/****/

var tl_four = new TimelineMax({paused:true, delay:0.5});
var outbox_four = $('.outerbox_four');
var line_four = $('.the_line_four');
var inner_four = $('.innerbox_four');
var icons_four = $('#icon_four');
var peeps_four = $('.people_four');
var another_four = $('.extra_four');

tl_four.to(outbox_four, 0.1, {opacity: 1});
tl_four.to(inner_four, 0.1, {opacity:1});
tl_four.staggerTo(line_four, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_four.staggerTo(icons_four, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_four.staggerTo(peeps_four, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_four.staggerTo(another_four, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_four(){
  tl_four.play();}
function out_four(){
  tl_four.reverse();}

outbox_four.hover(over_four, out_four);


/****/

var tl_five = new TimelineMax({paused:true, delay:0.5});
var outbox_five = $('.outerbox_five');
var line_five = $('.the_line_five');
var inner_five = $('.innerbox_five');
var icons_five = $('#icon_five');
var peeps_five = $('.people_five');
var another_five = $('.extra_five');

tl_five.to(outbox_five, 0.1, {opacity: 1});
tl_five.to(inner_five, 0.1, {opacity:1});
tl_five.staggerTo(line_five, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_five.staggerTo(icons_five, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_five.staggerTo(peeps_five, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_five.staggerTo(another_five, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_five(){
  tl_five.play();}
function out_five(){
  tl_five.reverse();}

outbox_five.hover(over_five, out_five);


/****/

var tl_six = new TimelineMax({paused:true, delay:0.5});
var outbox_six = $('.outerbox_six');
var line_six = $('.the_line_six');
var inner_six = $('.innerbox_six');
var icons_six = $('#icon_six');
var peeps_six = $('.people_six');
var another_six = $('.extra_six');

tl_six.to(outbox_six, 0.1, {opacity: 1});
tl_six.to(inner_six, 0.1, {opacity:1});
tl_six.staggerTo(line_six, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_six.staggerTo(icons_six, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_six.staggerTo(peeps_six, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_six.staggerTo(another_six, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_six(){
  tl_six.play();}
function out_six(){
  tl_six.reverse();}

outbox_six.hover(over_six, out_six);


/****/

var tl_seven = new TimelineMax({paused:true, delay:0.5});
var outbox_seven = $('.outerbox_seven');
var line_seven = $('.the_line_seven');
var inner_seven = $('.innerbox_seven');
var icons_seven = $('#icon_seven');
var peeps_seven = $('.people_seven');
var another_seven = $('.extra_seven');

tl_seven.to(outbox_seven, 0.1, {opacity: 1});
tl_seven.to(inner_seven, 0.1, {opacity:1});
tl_seven.staggerTo(line_seven, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_seven.staggerTo(icons_seven, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_seven.staggerTo(peeps_seven, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_seven.staggerTo(another_seven, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_seven(){
  tl_seven.play();}
function out_seven(){
  tl_seven.reverse();}

outbox_seven.hover(over_seven, out_seven);

/****/

var tl_eight = new TimelineMax({paused:true, delay:0.5});
var outbox_eight = $('.outerbox_eight');
var line_eight = $('.the_line_eight');
var inner_eight = $('.innerbox_eight');
var icons_eight = $('#icon_eight');
var peeps_eight = $('.people_eight');
var another_eight = $('.extra_eight');

tl_eight.to(outbox_eight, 0.1, {opacity: 1});
tl_eight.to(inner_eight, 0.1, {opacity:1});
tl_eight.staggerTo(line_eight, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_eight.staggerTo(icons_eight, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_eight.staggerTo(peeps_eight, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_eight.staggerTo(another_eight, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_eight(){
  tl_eight.play();}
function out_eight(){
  tl_eight.reverse();}

outbox_eight.hover(over_eight, out_eight);


/****/

var tl_nine = new TimelineMax({paused:true, delay:0.5});
var outbox_nine = $('.outerbox_nine');
var line_nine = $('.the_line_nine');
var inner_nine = $('.innerbox_nine');
var icons_nine = $('#icon_nine');
var peeps_nine = $('.people_nine');
var another_nine = $('.extra_nine');

tl_nine.to(outbox_nine, 0.1, {opacity: 1});
tl_nine.to(inner_nine, 0.1, {opacity:1});
tl_nine.staggerTo(line_nine, 0.1, {width:"100px", opacity:1, ease:Power1.easeOut});
tl_nine.staggerTo(icons_nine, 0.1, {y: -25, opacity:1, ease:Power1.easeOut});
tl_nine.staggerTo(peeps_nine, 0.1, {y:-20, opacity:1, ease:Power1.easeOut});
tl_nine.staggerTo(another_nine, 0.1, {y:10, opacity:1, ease:Power1.easeOut});


function over_nine(){
  tl_nine.play();}
function out_nine(){
  tl_nine.reverse();}

outbox_nine.hover(over_nine, out_nine);
/*************************HOVER IMAGES MENU*******************/







/*************************CLICK OPTIONS*******************/
/**/

$('.option_one').click(function(){
hidealltext();
$('.change_three').eq(1).fadeIn();
});

$('.option_one').click(function(){
hideallimages(); 
$('.change_two').eq(1).fadeIn(); 
});

/**/
$('.option_two').click(function(){
hideallimages(); 
$('.change_two').eq(2).fadeIn(); 
});

$('.option_two').click(function(){
hidealltext();
$('.change_three').eq(2).fadeIn();	
});

/**/
$('.option_three').click(function(){
hideallimages(); 
$('.change_two').eq(3).fadeIn(); 
});

$('.option_three').click(function(){
hidealltext();
$('.change_three').eq(3).fadeIn();
});



/**/
$('.option_four').click(function(){
hideallimages(); 
$('.change_two').eq(4).fadeIn(); 
});

$('.option_four').click(function(){
hidealltext();
$('.change_three').eq(4).fadeIn();
});


/**/
$('.option_five').click(function(){
hideallimages(); 
$('.change_two').eq(5).fadeIn(); 
});

$('.option_five').click(function(){
hidealltext();
$('.change_three').eq(5).fadeIn();
});


/**/
$('.option_six').click(function(){
hideallimages(); 
$('.change_two').eq(6).fadeIn(); 
});

$('.option_six').click(function(){
hidealltext();	
$('.change_three').eq(6).fadeIn();
});

/**/
$('.option_seven').click(function(){
hideallimages(); 
$('.change_two').eq(7).fadeIn(); 
});

$('.option_seven').click(function(){
hidealltext();
$('.change_three').eq(7).fadeIn();
});

/**/
$('.option_eight').click(function(){
hideallimages(); 
$('.change_two').eq(8).fadeIn(); 
});

$('.option_eight').click(function(){
hidealltext();
$('.change_three').eq(8).fadeIn();
});

function hidealltext(){
var countelements = $('.change_three').length
	for (var i = 0; i < countelements; i++) {
		$('.change_three').eq(i).fadeOut();
	};
};

function hideallimages(){
var countelements = $('.change_two').length
	for (var i = 0; i < countelements; i++) {
		$('.change_two').eq(i).fadeOut();
	};
};
/*************************CLICK OPTIONS*******************/





















/***************************CIRCULAR MENU OPTIONS CLICKER*******************/
$(document).ready(function() {
	$( ".option_one" ).click( function(){
		$(".services_options").css({'transform': 'rotate(-45deg)'});
	});
});


/**/

$(document).ready(function() {
	$( ".option_two" ).click( function(){
		$(".services_options").css({'transform': 'rotate(-90deg)'});
	});
});

/**/

$(document).ready(function() {
	$( ".option_three" ).click( function(){
		$(".services_options").css({'transform': 'rotate(-135deg)'});
	});
});

/**/

$(document).ready(function() {
	$( ".option_four" ).click( function(){
		$(".services_options").css({'transform': 'rotate(-180deg)'});
	})
})

/**/

$(document).ready(function() {
	$( ".option_five" ).click( function(){
		$(".services_options").css({'transform': 'rotate(-225deg)'});
	});
});

/**/

$(document).ready(function(){
	$(".option_six").click(function(){
		$(".services_options").css({'transform': 'rotate(-270deg)'});
	});	
});

/**/

$(document).ready(function(){
	$(".option_seven").click(function(){
		$(".services_options").css({'transform': 'rotate(-315deg)'});
	});
});

/**/

$(document).ready(function(){
	$(".option_eight").click(function(){
		$(".services_options").css({'transform': 'rotate(-360deg)'});
	});
});
/***************************CIRCULAR MENU OPTIONS CLICKER*******************/