<

<script>
    $(test);

    function test() {
        $('.draggable').draggable();
        $('.droppable').droppable({
            drop: handleDropEvent
        });
    }

    function handleDropEvent(event, ui) {
        var draggable = ui.draggable;
        $('p').text("Hello World!");
    }
</script>
