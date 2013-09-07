<html>
<head>
	<title>Levey's KH PasteBin GUI</title>
</head>
<body>

<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>

</body>
</html>

<?php //Notes
//
//[*******************]
//|				      |
//|					  |
//|					  |
//|					  |
//|					  |
//[*******************]
//		       Submit X
//
//			   Data > Temp File ($tempf)
//			   On Click of Submit shell_exec('curl -F file=@' + $tempf + ' http://paste.domain.tld')
//			   After shell_exec, wait for return of "Your paste is here: https://paste.domain.tld" aka $output
//			   Then echo $output below Submit X
//
// Your paste has been successfully binned here:
// --
// https://paste.domain.tld/03c022cxkfl2344
// --
?>
