dragElement(document.getElementById("odalarhtml"));
dragElement(document.getElementById("arkadaslarhtml"));
dragElement(document.getElementById("top3_bg"));
dragElement(document.getElementById("habbopanelHareket"));
dragElement(document.getElementById("magazahtml"));
dragElement(document.getElementById("fan_bg"));
dragElement(document.getElementById("bilgilendirmeHareket"));
dragElement(document.getElementById("haberlerhtml"));
dragElement(document.getElementById("profil-detay-html"));
dragElement(document.getElementById("oda-bilgileri-html"));
dragElement(document.getElementById("habbosohbethtml"));
dragElement(document.getElementById("envanterhtml"));
dragElement(document.getElementById("odaOlustur"));
dragElement(document.getElementById("kapizili"));
dragElement(document.getElementById("basaripuan"));
dragElement(document.getElementById("oda-bilgileri"));
dragElement(document.getElementById("oda-ayarlari"));
dragElement(document.getElementById("floorplan"));
dragElement(document.getElementById("grup-olustur-box"));
dragElement(document.getElementById("avatarEditor"));

function dragElement(elmnt) {
var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
if (document.getElementById(elmnt.id + "hareket")) {
    document.getElementById(elmnt.id + "hareket").onmousedown = dragMouseDown;
} else {
    elmnt.onmousedown = dragMouseDown;
}

function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    document.onmousemove = elementDrag;
}

function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
}

function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
}
}