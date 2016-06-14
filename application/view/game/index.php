<img class="circle" src="<?php echo Config::get('URL'); ?>_img/alpha.gif">
<img class="circle" src="<?php echo Config::get('URL'); ?>_img/beta.gif">
<img class="circle" src="<?php echo Config::get('URL'); ?>_img/gamma.gif">
<img class="circle" src="<?php echo Config::get('URL'); ?>_img/delta.gif">
<img class="circle" src="<?php echo Config::get('URL'); ?>_img/omega.gif">

<div id="combiner">
    <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combiner2.png" usemap="#combinerMap">
    <map id="combinerMap" name="combinerMap">
	    <area shape="rect" coords="56,34,195,337" target="_self" class="droppable">
	    <area shape="rect" coords="348,34,487,337" target="_self" class="droppable">
	</map>
	<button id="return" onclick="returnMaterials()">Return</button>
</div>