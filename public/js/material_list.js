function openAlpha() {
	$.ajax({
		method: "GET",
		url: "getAllMaterials/A"
	})
	.done(function(response){
		var alphaMaterials = response;
		$('.materials').html("");
		$.each(alphaMaterials, function(key, value){
			var mat_name = value.mat_name.toLowerCase();
			$('.materials').append("<img class='draggable " + mat_name + "' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
		});
		var parent1 = $('.draggable').position();
		$('.alpha').addClass('active');
		$('.beta').removeClass('active');
		$('.gamma').removeClass('active');
		$('.delta').removeClass('active');
		$('.omega').removeClass('active');
	});
}

function openBeta() {
	$.ajax({
		method: "GET",
		url: "getAllMaterials/B"
	})
	.done(function(response){
		var betaMaterials = response;
		$('.materials').html("");
		$.each(betaMaterials, function(key, value){
			var mat_name = value.mat_name.toLowerCase();
			$('.materials').append("<img class='draggable " + mat_name + "' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
		});
		var parent1 = $('.draggable').position();

		$('.beta').addClass('active');
		$('.alpha').removeClass('active');
		$('.gamma').removeClass('active');
		$('.delta').removeClass('active');
		$('.omega').removeClass('active');
	});
}

function openGamma() {
	$.ajax({
		method: "GET",
		url: "getAllMaterials/G"
	})
	.done(function(response){
		var gammaMaterials = response;
		$('.materials').html("");
		$.each(gammaMaterials, function(key, value){
			var mat_name = value.mat_name.toLowerCase();
			$('.materials').append("<img class='draggable " + mat_name + "' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
		});
		var parent1 = $('.draggable').position();

		$('.gamma').addClass('active');
		$('.beta').removeClass('active');
		$('.alpha').removeClass('active');
		$('.delta').removeClass('active');
		$('.omega').removeClass('active');
	});
}

function openDelta() {
	$.ajax({
		method: "GET",
		url: "getAllMaterials/D"
	})
	.done(function(response){
		var deltaMaterials = response;
		$('.materials').html("");
		$.each(deltaMaterials, function(key, value){
			var mat_name = value.mat_name.toLowerCase();
			$('.materials').append("<img class='draggable " + mat_name + "' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
		});
		var parent1 = $('.draggable').position();

		$('.delta').addClass('active');
		$('.beta').removeClass('active');
		$('.gamma').removeClass('active');
		$('.alpha').removeClass('active');
		$('.omega').removeClass('active');
	});
}

function openOmega() {
	$.ajax({
		method: "GET",
		url: "getAllMaterials/O"
	})
	.done(function(response){
		var omegaMaterials = response;
		$('.materials').html("");
		$.each(omegaMaterials, function(key, value){
			var mat_name = value.mat_name.toLowerCase();
			$('.materials').append("<img class='draggable " + mat_name + "' src='" + URL + "/_img/materials/" + mat_name + ".png'>");
		});
		var parent1 = $('.draggable').position();

		$('.omega').addClass('active');
		$('.beta').removeClass('active');
		$('.gamma').removeClass('active');
		$('.delta').removeClass('active');
		$('.alpha').removeClass('active');
	});
}
