<!DOCTYPE html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Freeboard</title>
<meta http-equiv="cache-control" content="max-age=0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="pragma" content="no-cache">
<link rel="stylesheet" href="styl.css" type="text/css">
<link rel="shortcut icon" href="favicon.ico">
<script src="script.js"></script>
</head><body onload="dolu()">
<script>
function dolu() {
parent.location.hash = "dolek";
}
function citujpost(postID) {
xyz = $("#textpole").val();
$("#textpole").val(xyz + '>>' + postID + "\n").focus();
return false;
}
function citace() {
xyz = $("#textpole").val();
$("#textpole").val(xyz + '>\" ').focus();
return false;
}
function spoil() {
xyz = $("#textpole").val();
$("#textpole").val(xyz + '>* ').focus();
return false;
}
</script>
<span id="horek"></span><br><br><br><br>
<table border="0" width="100%" class="cent">
<tr valign="top"><td class="left" width="25%"></td>
<td class="main" height="800" align="left">
&nbsp;<a href="#dolek">[Bottom]</a><br><br>
