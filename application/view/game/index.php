<section class="pageLeft">
  <div class="materials"></div>
  <ul class="circle">
    <li class="alpha"><button onclick="openAlpha()"><img src="<?php echo Config::get('URL'); ?>_img/alpha.gif"></button></li>
    <li class="beta"><button onclick="openBeta()"><img src="<?php echo Config::get('URL'); ?>_img/beta.gif"></button></li>
    <li class="gamma"><button onclick="openGamma()"><img src="<?php echo Config::get('URL'); ?>_img/gamma.gif"></button></li>
    <li class="delta"><button onclick="openDelta()"><img src="<?php echo Config::get('URL'); ?>_img/delta.gif"></button></li>
    <li class="omega"><button onclick="openOmega()"><img src="<?php echo Config::get('URL'); ?>_img/omega.gif"></button></li>
  </ul>
</section>

<div id="combiner">
    <div id="combinerContainer">
    	<div id="combinerArea1"></div>
    	<div id="combinerArea2"></div>
    </div>
	<button id="return" onclick="returnMaterials()">Return</button>
</div>
