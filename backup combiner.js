var obj1 = $(".droppablearea1"),
    area1_width = obj1.width(),
    area1_height = obj1.height(),
    area1_top = obj1.offset().top,
    area1_bottom = area1_top + area1_height,
    area1_left = obj1.offset().left,
    area1_right = area1_left + area1_width,
    imagePos = $(this).position();
if((imagePos.left + 250) >= area1_left && (imagePos.left + 250) <= area1_right && (imagePos.top + 160) >= area1_top && (imagePos.top + 160) <= area1_bottom ){
    var dropSpot = $(this).appendTo("#combiner").attr("id", "Parent1").draggable({cancel: "#Parent1"});
    console.log(dropSpot);
}
