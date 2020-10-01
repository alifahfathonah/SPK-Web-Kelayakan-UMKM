<?php include"koneksi.php"; ?><script language="JavaScript"><!--
var txt="_____SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KELAYAKAN USAHA MIKRO KECIL MENENGAH DENGAN MENGGUNAKAN METODE PROFILE MATCHING PADA UPTD PLUT KOPERASI DAN UMKM PROVINSI LAMPUNG_____";
var espera=190;
var refresco=null;

function rotulo_title() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresco=setTimeout("rotulo_title()",espera);}
rotulo_title();
// --></script>

<SCRIPT language="" javascript>
if (window.Event)
document.captureEvents(Event.MOUSEUP);
function nocontextmenu()
{ 
event.cancelBubble = true
event.returnValue = false;
return false;
}
function norightclick(e)
{
if (window.Event)
{
if (e.which == 2 || e.which == 3)
return false;
}
else
if (event.button == 2 || event.button == 3)
{
event.cancelBubble = true
event.returnValue = false;
return false;
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
}
document.oncontextmenu = nocontextmenu;
document.onmousedown = norightclick;
document.onmouseup = norightclick;
</SCRIPT>
