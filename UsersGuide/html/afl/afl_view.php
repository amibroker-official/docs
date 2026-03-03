<?php
$mName = $_GET["name"];
if( !isset( $mName ) )
{
	$mName = $_SERVER['QUERY_STRING'];
}
$mName = strtolower( $mName );
header("Location: http://www.amibroker.com/guide/afl/$mName.html" ); /* Redirect browser */
exit();
?>
