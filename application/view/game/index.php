<ul class="circle">
  <li class="alpha"><img src="<?php echo Config::get('URL'); ?>_img/alpha.gif">
    <ul class="innerAlpha">
	    <?php foreach ($this->materials as $material) {
			if ($material->circle == "A") {
				$mat_name = strtolower($material->mat_name);
				echo "<li><img class='draggable " . $mat_name . "' src=" . Config::get('URL') . "public/_img/materials/" . $mat_name . ".png></li>";
			}
		} ?>
    </ul>
  </li>
  <li class="beta"><img src="<?php echo Config::get('URL'); ?>_img/beta.gif">
    <ul class="innerBeta">
      	<?php foreach ($this->materials as $material) {
			if ($material->circle == "B") {
				$mat_name = strtolower($material->mat_name);
				echo "<li><img class='draggable " . $mat_name . "' src=" . Config::get('URL') . "public/_img/materials/" . $mat_name . ".png></li>";
			}
		} ?>
    </ul>
  </li>
  <li class="gamma"><img src="<?php echo Config::get('URL'); ?>_img/gamma.gif">
    <ul class="innerGamma">
     	<?php foreach ($this->materials as $material) {
			if ($material->circle == "G") {
				$mat_name = strtolower($material->mat_name);
				echo "<li><img class='draggable " . $mat_name . "' src=" . Config::get('URL') . "public/_img/materials/" . $mat_name . ".png></li>";
			}
		} ?>
    </ul>
  </li>
  <li class="delta"><img src="<?php echo Config::get('URL'); ?>_img/delta.gif">
    <ul class="innerDelta">
      	<?php foreach ($this->materials as $material) {
			if ($material->circle == "D") {
				$mat_name = strtolower($material->mat_name);
				echo "<li><img class='draggable " . $mat_name . "' src=" . Config::get('URL') . "public/_img/materials/" . $mat_name . ".png></li>";
			}
		} ?>
    </ul>
  </li>
  <li class="omega"><img src="<?php echo Config::get('URL'); ?>_img/omega.gif">
    <ul class="innerOmega">
      	<?php foreach ($this->materials as $material) {
			if ($material->circle == "O") {
				$mat_name = strtolower($material->mat_name);
				echo "<li><img class='draggable " . $mat_name . "' src=" . Config::get('URL') . "public/_img/materials/" . $mat_name . ".png></li>";
			}
		} ?>
    </ul>
  </li>
</ul>

<div id="combiner">
    <img id="combinerContainer" src="<?php echo Config::get('URL'); ?>_img/Combiner2.png" usemap="#combinerMap">
    <map id="combinerMap" name="combinerMap">
	    <area shape="rect" coords="60,59,273,531" class="droppablearea1">
	    <area shape="rect" coords="520,59,732,531" class="droppablearea2">
	</map>
	<button id="return" onclick="returnMaterials()">Return</button>
</div>
