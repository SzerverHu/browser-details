<?php
$Browser	= $_SERVER["HTTP_USER_AGENT"];
$remote_addr = $_SERVER["REMOTE_ADDR"];
$remote_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$http_connection = $_SERVER["HTTP_CONNECTION"];
$http_accept = $_SERVER["HTTP_ACCEPT"];
$http_charset = $_SERVER["HTTP_ACCEPT_CHARSET"];
$http_encoding = $_SERVER["HTTP_ACCEPT_ENCODING"];
$http_language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$brow = get_browser(null, true);
?>
<html>
<head>
<style type="text/css">
font, td, p, a { font-family: Verdana, Arial; font-size:8pt; }
</style>
</head>
<body>
<table border="0" cellpadding="3" style="border-collapse: collapse" width="100%">
	<tr>
		<td bgcolor="#315A9D" height="19" colspan="2"><font color="#FFFFFF"><b>Your IP 
		Address / Hostname</b></font></td>
	</tr>
	<tr>
		<td height="19">Your IP Address:</td>
		<td align="right" height="19"><?php echo $remote_addr; ?></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF" height="19">Your Hostname:</td>
		<td align="right" height="19" bgcolor="#EFEFEF"><?php echo $remote_host; ?></td>
	</tr>
	<tr>
		<td height="19">&nbsp;</td>
		<td align="right" height="19">&nbsp;</td>
	</tr>
	<tr>
		<td bgcolor="#315A9D" height="19" colspan="2"><font color="#FFFFFF"><b>Browser/Computer Properties</b></font></td>
	</tr>

	<tr>
		<td>Platform: </td>
		<td align="right"><?php echo $brow[platform]; ?></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Browser: </td>
		<td align="right" bgcolor="#EFEFEF"><b><?php echo $brow[parent]; ?></b></td>
	</tr>
	<tr>
		<td>Browser (User-Agent): </td>
		<td align="right"><?php echo $Browser; ?></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Time and Date: </td>
		<td align="right" bgcolor="#EFEFEF"><script language="JavaScript">var now = new Date();
var digital = new Date();
var hours = digital.getHours();
var minutes = digital.getMinutes();
var seconds = digital.getSeconds();
var amOrPm = "AM";
if (hours > 11) amOrPm = "PM";
if (hours > 12) hours = hours - 12;
if (hours == 0) hours = 12;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;
dispTime = hours + ":" + minutes + ":" + seconds + " " + amOrPm + " - ";
var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
function fourdigits(number)	{
	return (number < 1000) ? number + 1900 : number;
								}

// Join it all together
today =  days[now.getDay()] + ", " +
         months[now.getMonth()] + " " +
         date + ", " +
         (fourdigits(now.getYear())) ;

// Print out the data.
document.write(dispTime+today);
</script></td>
	</tr>
	<tr>
		<td>Javascript:</td>
		<td align="right"><script LANGUAGE="JavaScript">
document.write("Enabled");
</script><noscript>Not Available/Enabled</noscript></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Cookies Enabled:</td>
		<td align="right" bgcolor="#EFEFEF"><script Language="JavaScript">
if (navigator.cookieEnabled) document.write("Enabled")
else document.write("Not Available/Enabled");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td>Java Enabled:</td>
		<td align="right"><script Language="JavaScript">
if (navigator.javaEnabled()) document.write("Enabled")
else document.write("Not Available/Enabled");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">CPU class/type:</td>
		<td align="right" bgcolor="#EFEFEF"><script Language="JavaScript">
if (navigator.cpuClass != null) document.write("CPU Class " + navigator.cpuClass)
else if (navigator.oscpu != null) document.write("OS/CPU " + navigator.oscpu)
else document.write("?");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td>Screen Width x Height:</td>
		<td align="right"><script Language="JavaScript">
if (window.screen) document.write(screen.width)
else document.write("?");
</script> x 
		<script Language="JavaScript">
if (window.screen) document.write(screen.height)
else document.write("?");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Screen Color Depth:</td>
		<td align="right" bgcolor="#EFEFEF"><script Language="JavaScript">
if (window.screen) document.write(screen.colorDepth)
else document.write("?");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td>Window Width:</td>
		<td align="right"><script Language="JavaScript">
if (document.all) {
  var ow = document.body.offsetWidth;
  var owp = ((100 * ow)/screen.width);  
  document.write(ow + " (" + owp.toFixed(1) + "% of " + screen.width + ")");
}
else if (document.layers) {
  var ow = document.body.width;
  var owp = ((100 * ow)/screen.width);  
  document.write(ow + " (" + owp.toFixed(1) + "% of " + screen.width + ")");
}
else if (document.body.clientWidth != null) {
  var ow = document.body.clientWidth;
  var owp = ((100 * ow)/screen.width);  
  document.write(ow + " (" + owp.toFixed(1) + "% of " + screen.width + ")");
}
else document.write("?");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Window Height:</td>
		<td align="right" bgcolor="#EFEFEF"><script Language="JavaScript">
if (document.all) {
  var oh = document.body.offsetHeight;
  var ohp = ((100 * oh)/screen.height);
  document.write(oh + " (" + ohp.toFixed(1) + "% of " + screen.height + ")");
}
else if (document.layers) {
  var oh = document.body.height;
  var ohp = ((100 * oh)/screen.height);
  document.write(oh + " (" + ohp.toFixed(1) + "% of " + screen.height + ")");
}
else if (document.body.clientHeight != null) {
  var oh = document.body.clientHeight;
  var ohp = ((100 * oh)/screen.height);
  document.write(oh + " (" + ohp.toFixed(1) + "% of " + screen.height + ")");
}
else document.write("?");
</script>
<noscript>
Not Available/Enabled
</noscript></TD>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="right">&nbsp;</td>
	</tr>
	<tr>
		<td bgcolor="#315A9D" height="19" colspan="2"><font color="#FFFFFF"><b>Browser Headers</b></font></td>
	</tr>
	<tr>
		<td>Accept:</td>
		<td align="right"><?php echo $http_accept; ?></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Accept-Encoding:</td>
		<td align="right" bgcolor="#EFEFEF"><?php echo $http_encoding; ?></td>
	</tr>
	<tr>
		<td>Language:</td>
		<td align="right"><?php echo $http_language; ?></td>
	</tr>
	<tr>
		<td bgcolor="#EFEFEF">Charset:</td>
		<td align="right" bgcolor="#EFEFEF"><?php echo $http_charset; ?></td>
	</tr>
	<tr>
		<td>Connection:</td>
		<td align="right"><?php echo $http_connection; ?></td>
	</tr>
	</table>
</body>
</html>
