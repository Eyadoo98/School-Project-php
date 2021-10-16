$(function(){
	
	saveScoreBtn();
});


function saveScoreBtn(){
	var target = $('.save-score-btn');
	if( target.length <= 0) return false;
	target.off('click');
	target.on('click' ,function(){
		var btnId = $(this).attr('data-i');
		
		var score = $('#scoretxt_'+btnId).val();
		var scoreId = $('#score_id_'+btnId).val();
		var studentId = $('#student_id_'+btnId).val();
		var classId = $('#classId').val();
		
		
		
			
		var dt = 'score_ID='+scoreId+'&studentId='+studentId+'&score='+score+'&classId='+classId;
		
		$.ajax({
			  url:"savescore.php",
			  method:'POST',
			  data:dt ,
			  success:function(res){
				  alert(res); return false;
				  $('#test').html(res);
			  }
		  });
	
	});
}