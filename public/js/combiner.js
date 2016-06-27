$(initial);

function initial() {
    $('.draggable').draggable();
    $('.droppable').droppable({drop: handleDragEvent(this)});
}

function handleDragEvent() {
    $(".draggable").mouseup(function() {
      var thisPos = $(this).offset();
      if (thisPos => $(".droppablearea1").offset()) {
        $(this).appendTo("#combiner").attr("id", "Parent1").draggable({cancel: "#Parent1"});
      }
      console.log(this);
      console.log(thisPos);
      console.log($(".droppablearea1").offset());
    })
}
