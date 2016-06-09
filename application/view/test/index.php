<script>
    $(test);

    function test() {
        $('.draggable').draggable();
        $('.droppable').droppable({
            drop: handleDragEvent(this)
        });
    }

    function handleDragEvent() {
      $(".draggable").mouseup(function() {
        var offset = $(this).offset();
        console.log(this);
            var xPos = offset.left;
            var yPos = offset.top;
            $('.draggable').text('y/x: ' + yPos + xPos);
            var xPosImg = offset.left;
        if (xPos > yPos) {
          var dropSpot = $(".draggable").appendTo("#combiner").attr("id", "Parent1").draggable({cancel:"#Parent1"});
        } else if(xPos < yPos) {
          var dropSpot2 = $(".draggable").appendTo("#combiner").attr("id", "Parent2").draggable({cancel:"#Parent2"});
        }
      })
    }

    function handleDropEvent(ui) {
        var draggable = ui.draggable;

    }
</script>

<body id="testArea">
    <img id="fire" class="draggable" src="<?php echo Config::get('URL'); ?>_img/materials/fire.png">
    <canvas></canvas>
    <div id="combiner">
        <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combine2.png" usemap="#combinerMap">
        <map id="combinerMap" name="combinerMap">
        <area id="area1" shape="rect" coords="56,34,195,337" target="_self" class="droppable">
        <area id="area2" shape="rect" coords="348,34,486,339" target="_self" class="droppable2">
      </map>
    </div>
</body>

<script type="text/javascript" charset="utf-8">
    var canvas = document.getElementsByTagName('canvas')[0];
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    var space = new Image;
    var combiner = new Image;
    window.onload = function() {
        var ctx = canvas.getContext('2d');
        trackTransforms(ctx);

        function redraw() {
            var p1 = ctx.transformedPoint(0, 0);
            var p2 = ctx.transformedPoint(canvas.width, canvas.height);
            ctx.clearRect(p1.x, p1.y, p2.x - p1.x, p2.y - p1.y);

            ctx.drawImage(space, 0, 0, canvas.width, canvas.height);

            ctx.save();
        }
        redraw();
        var maxLeft = window.innerWidth;
        var maxTop = window.innerHeight;
        var lastX = canvas.width / 2,
            lastY = canvas.height / 2;
        var dragStart, dragged;
        canvas.addEventListener('mousedown', function(evt) {
            document.body.style.mozUserSelect = document.body.style.webkitUserSelect = document.body.style.userSelect = 'none';
            lastX = evt.offsetX || (evt.pageX - canvas.offsetLeft);
            lastY = evt.offsetY || (evt.pageY - canvas.offsetTop);
            dragStart = ctx.transformedPoint(lastX, lastY);
            dragged = false;
        }, false);
        canvas.addEventListener('mousemove', function(evt) {
            lastX = evt.offsetX > maxLeft || (evt.pageX - canvas.offsetLeft);
            lastY = evt.offsetY > maxTop || (evt.pageY - canvas.offsetTop);
            dragged = true;
            if (dragStart) {
                var pt = ctx.transformedPoint(lastX, lastY);
                ctx.translate(pt.x - dragStart.x, pt.y - dragStart.y);
                redraw();
            }
        }, false);
        canvas.addEventListener('mouseup', function(evt) {
            dragStart = null;
            if (!dragged) zoom(evt.shiftKey ? -1 : 1);
        }, false);

        var scaleFactor = 1.015,
            ticks = 0,
            zoom = function(clicks) {
                ticks = ticks + clicks;
                if (ticks < 0) {
                    ticks = 0;
                } else {
                    var pt = ctx.transformedPoint(lastX, lastY);
                    ctx.translate(pt.x, pt.y);
                    var factor = Math.pow(scaleFactor, clicks);
                    ctx.scale(factor, factor);
                    ctx.translate(-pt.x, -pt.y);
                    redraw();
                }
            }

        var handleScroll = function(evt) {
            var delta = evt.wheelDelta ? evt.wheelDelta / 40 : evt.detail ? -evt.detail : 0;
            if (delta) zoom(delta);
            return evt.preventDefault() && false;
        };
        canvas.addEventListener('DOMMouseScroll', handleScroll, false);
        canvas.addEventListener('mousewheel', handleScroll, false);
    };
    space.src = "<?php echo Config::get('URL'); ?>_img/space_background-min.png";

    function trackTransforms(ctx) {
        var svg = document.createElementNS("http://www.w3.org/2000/svg", 'svg');
        var xform = svg.createSVGMatrix();
        ctx.getTransform = function() {
            return xform;
        };

        var savedTransforms = [];
        var save = ctx.save;
        ctx.save = function() {
            savedTransforms.push(xform.translate(0, 0));
            return save.call(ctx);
        };
        var restore = ctx.restore;
        ctx.restore = function() {
            xform = savedTransforms.pop();
            return restore.call(ctx);
        };

        var scale = ctx.scale;
        ctx.scale = function(sx, sy) {
            xform = xform.scaleNonUniform(sx, sy);
            return scale.call(ctx, sx, sy);
        };
        var rotate = ctx.rotate;
        ctx.rotate = function(radians) {
            xform = xform.rotate(radians * 180 / Math.PI);
            return rotate.call(ctx, radians);
        };
        var translate = ctx.translate;
        ctx.translate = function(dx, dy) {
            xform = xform.translate(dx, dy);
            return translate.call(ctx, dx, dy);
        };
        var transform = ctx.transform;
        ctx.transform = function(a, b, c, d, e, f) {
            var m2 = svg.createSVGMatrix();
            m2.a = a;
            m2.b = b;
            m2.c = c;
            m2.d = d;
            m2.e = e;
            m2.f = f;
            xform = xform.multiply(m2);
            return transform.call(ctx, a, b, c, d, e, f);
        };
        var setTransform = ctx.setTransform;
        ctx.setTransform = function(a, b, c, d, e, f) {
            xform.a = a;
            xform.b = b;
            xform.c = c;
            xform.d = d;
            xform.e = e;
            xform.f = f;
            return setTransform.call(ctx, a, b, c, d, e, f);
        };
        var pt = svg.createSVGPoint();
        ctx.transformedPoint = function(x, y) {
            pt.x = x;
            pt.y = y;
            return pt.matrixTransform(xform.inverse());
        }
    }
</script>