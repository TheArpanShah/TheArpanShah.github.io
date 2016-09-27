// var w = $(window).width();
// $('#size_tracker').text(w);

function toggle_1() {
	

	if($('#FAQ-answer-1').css('display') == 'none'){


		$('#FAQ-answer-1').fadeIn("slow").css('display', 'block');
		
	}
	else{
		$('#FAQ-answer-1').css('display','none');
	}
}

function toggle_2() {
	if($('#FAQ-answer-2').css('display') == 'none'){


		$('#FAQ-answer-2').fadeIn("slow").css('display', 'block');
	}
	else{
		$('#FAQ-answer-2').css('display','none');
	}
}

function toggle_3() {
	if($('#FAQ-answer-3').css('display') == 'none'){


		$('#FAQ-answer-3').fadeIn("slow").css('display', 'block');
		
	}
	else{
		$('#FAQ-answer-3').css('display','none');
	}
}

function toggle_4() {
	if($('#FAQ-answer-4').css('display') == 'none'){

		$('#FAQ-answer-4').fadeIn("slow").css('display', 'block');
	}
	else{
		$('#FAQ-answer-4').css('display','none');
	}
}


$('#FAQ-question-1').click(toggle_1);
$('#FAQ-question-2').click(toggle_2);
$('#FAQ-question-3').click(toggle_3);
$('#FAQ-question-4').click(toggle_4);	