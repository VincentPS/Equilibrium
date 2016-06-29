<ul class="circle">
  <li class="alpha"><button onclick="openAlpha()"><img src="<?php echo Config::get('URL'); ?>_img/alpha.gif"></button></li>
  <li class="beta"><button onclick="openBeta()"><img src="<?php echo Config::get('URL'); ?>_img/beta.gif"></button></li>
  <li class="gamma"><button onclick="openGamma()"><img src="<?php echo Config::get('URL'); ?>_img/gamma.gif"></button></li>
  <li class="delta"><button onclick="openDelta()"><img src="<?php echo Config::get('URL'); ?>_img/delta.gif"></button></li>
  <li class="omega"><button onclick="openOmega()"><img src="<?php echo Config::get('URL'); ?>_img/omega.gif"></button></li>
</ul>

<div class="materials"></div>

<div id="combiner">
    <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combiner3.png">
	<button id="return" onclick="returnMaterials(parent1)">Return</button>
</div>
