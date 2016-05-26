<head>
  <script>
    window.onload(
    var obj = document.getElementById('GamePage');
    if(obj)
    {
        obj.addEventListener('DOMMouseScroll',mouseWheel,false);
        obj.addEventListener("mousewheel",mouseWheel,false);
    }
    else obj.onmousewheel;

    function mouseWheel(e)
    {
        // disabling
        e=e?e:window.event;
        if(e.ctrlKey)
        {
            if(e.preventDefault) e.preventDefault();
            else e.returnValue=false;
            return false;
        }
    }
  )
  </script>
</head>

        <div class="footer"></div>
    </div>

    <a class="support-button" href="https://affiliates.a2hosting.com/idevaffiliate.php?id=4471&url=579" target="_blank"></a>
</body>
</html>
