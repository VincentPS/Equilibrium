function initial() {
    $('.draggable').draggable();
    $('.droppable').droppable({drop: handleDragEvent(this)});
}

function handleDragEvent() {
    $(".draggable").mouseup(function() {
      var thisPos = $(this).offset(),
          combinerContainerPos = $("#combinerContainer").offset();
      if (thisPos.left >= combinerContainerPos.left && thisPos.top >= combinerContainerPos.top && $('#Parent1').length == 0) {
        $(this).appendTo("#combinerArea1").attr("id", "Parent1").draggable({cancel: "#Parent1"}).css({"position": "relative", "top": 0, "left": 0});
      } else if (thisPos.left >= combinerContainerPos.left && thisPos.top >= combinerContainerPos.top && $('#Parent1').length && $('#Parent2').length == 0) {
        $(this).appendTo("#combinerArea2").attr("id", "Parent2").draggable({cancel: "#Parent2"}).css({"position": "relative", "top": 0, "left": 0});
      }

      if ($('#Parent2').length == 1) {
        var p1 = parseInt($('#Parent1').attr("class").replace(/[^0-9]/g, ''), 10),
            p2 = parseInt($('#Parent2').attr("class").replace(/[^0-9]/g, ''), 10);
        $.ajax({
            method: "GET",
            url: "combineMaterials/" + p1 + "/" + p2
        })
        .done(function(response){
            if (response) {
                var mat_name = response.mat_name.toLowerCase();
                if (mat_name == 'equilibrium') {
                	
                	$('#creation').append("<img class='creation' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
                	setTimeout(function(){
						endGame();
                	}, 500);
                } else {
	                $('#creation').append("<img class='creation' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
	                setTimeout(function(){
	                    returnMaterials();
	                }, 3500);
                }   
            } else {
                setTimeout(function(){
                    returnMaterials();
                }, 2000); 
            }
        });
      }
    })
}
