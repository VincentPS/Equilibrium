window.addEventListener( 'load', function() {
  var box = document.getElementById('gameBody');
      docHeight = document.documentElement.offsetHeight;

  window.addEventListener( 'scroll', function() {
    var scrolled = window.scrollY / ( docHeight - window.innerHeight ),
        transformValue = 'scale('+scrolled+')';

    box.style.transform= transformValue;

  }, false);

}, false);
