var obj = window;
if (obj) {
    obj.addEventListener('DOMMouseScroll', mouseWheel, false);
    obj.addEventListener("mousewheel", mouseWheel, false);
    obj.addEventListener("keypress", checkKeyPressed, false);
} else obj.onmousewheel = true;

function mouseWheel(a) {
    // disabling
    if (a.ctrlKey) {
        if (a.preventDefault) a.preventDefault();
        else a.returnValue = false;
        return false;
    }
}

function uniCharCode(event) {
    var char = event.which || event.keyCode;
    document.getElementById("keycode").innerHTML = "Unicode CHARACTER code: " + char;
}


function onkeyPress(b) {
    if (b.charCode == 61) {
        return disablekeys();
        } else if (b.charCode == 45) {
            return disablekeys();
            }
        }
