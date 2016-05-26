var obj = document.getElementById('GamePage');
if(obj)
{
    obj.addEventListener('DOMMouseScroll',mouseWheel,false);
    obj.addEventListener("mousewheel",mouseWheel,false);
}
else obj.onmousewheel=true;

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
