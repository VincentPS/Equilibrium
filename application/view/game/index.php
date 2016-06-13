<img id="fire" class="draggable" src="<?php echo Config::get('URL'); ?>_img/materials/fire.png">
<img id="air" class="draggable" src="<?php echo Config::get('URL'); ?>_img/materials/air.png">

<div id="combiner">
    <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combine2.png" usemap="#combinerMap">
    <map id="combinerMap" name="combinerMap">
	    <area shape="rect" coords="56,34,195,337" target="_self" class="droppable">
	    <area shape="rect" coords="348,34,487,337" target="_self" class="droppable">
	</map>
</div>