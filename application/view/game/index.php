<ul class="circle">
  <li class="alpha"><img src="<?php echo Config::get('URL'); ?>_img/alpha.gif">
    <ul class="innerAlpha">
      <li>test</li>
    </ul>
  </li>
  <li class="beta"><img src="<?php echo Config::get('URL'); ?>_img/beta.gif">
    <ul class="innerBeta">
      <li>test</li>
    </ul>
  </li>
  <li class="gamma"><img src="<?php echo Config::get('URL'); ?>_img/gamma.gif">
    <ul class="innerGamma">
      <li>test</li>
    </ul>
  </li>
  <li class="delta"><img src="<?php echo Config::get('URL'); ?>_img/delta.gif">
    <ul class="innerDelta">
      <li>test</li>
    </ul>
  </li>
  <li class="omega"><img src="<?php echo Config::get('URL'); ?>_img/omega.gif">
    <ul class="innerOmega">
      <li>test</li>
    </ul>
  </li>
</ul>

<div id="combiner">
    <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combiner2.png" usemap="#combinerMap">
    <map id="combinerMap" name="combinerMap">
	    <area shape="rect" coords="56,34,195,337" target="_self" class="droppable">
	    <area shape="rect" coords="348,34,487,337" target="_self" class="droppable">
	</map>
	<button id="return" onclick="returnMaterials()">Return</button>
</div>
