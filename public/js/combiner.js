$(initial);

function initial() {
    $('.draggable').draggable();
    $('.droppable').droppable({drop: handleDragEvent(this)});
}

function handleDragEvent() {
    $(".draggable").mouseup(function() {
        var windowWidth = parseInt(window.innerWidth, 10),
            windowHeight = parseInt(window.innerHeight, 10),
            combinerPosition = $("#combiner").position(),
            combinerLeft = parseInt(combinerPosition.left, 10),
            combinerTop = parseInt(combinerPosition.top, 10),
            combinerBottom = windowHeight - combinerTop - 360,
            combinerRight = windowWidth - combinerLeft - 540,
            combinerWidth = parseInt($("#combiner").width(), 10),
            combinerHeight = parseInt($("#combiner").height(), 10),
            xPos1Min = windowWidth - combinerRight - combinerWidth + 60,
            xPos1Max = windowWidth - combinerRight - combinerWidth + 273,
            yPos1Min = windowHeight - combinerBottom - combinerHeight + 59,
            yPos1Max = windowHeight - combinerBottom - combinerHeight + 531,
            xPos2Min = windowWidth - combinerRight - combinerWidth + 520,
            xPos2Max = windowWidth - combinerRight - combinerWidth + 732,
            yPos2Min = windowHeight - combinerBottom - combinerHeight + 59,
            yPos2Max = windowHeight - combinerBottom - combinerHeight + 531,
            imagePos = $(this).position(),
            imageX = parseInt(imagePos.left, 10),
            imageY = parseInt(imagePos.top, 10);
        if (imageX > xPos1Min && imageX < xPos1Max && imageY > yPos1Min && imageY < yPos1Max) {
            var dropSpot = $(this).appendTo("#combiner").attr("id", "Parent1").draggable({cancel: "#Parent1"});
        } else if (imageX > xPos2Min && imageX < xPos2Max && imageY > yPos2Min && imageY < yPos2Max) {
            var dropSpot2 = $(this).appendTo("#combiner").attr("id", "Parent2").draggable({cancel: "#Parent2"});
        } else {
            /*go back to homespot*/;
        }
    })
}