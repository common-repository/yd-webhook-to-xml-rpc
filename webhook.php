<?php

require_once( '../../../wp-load.php' );

//$query_string = $_SERVER['QUERY_STRING'];
//$key = $_GET['key'];
$method = $_GET['method'];

if( isset( $_POST['manualsubmit'] ) && $_POST['manualsubmit'] == 'ok' ) {
	$xmlString = stripslashes( $_POST['content'] );
} else {
	$xmlData = fopen('php://input' , 'rb'); 
	while (!feof($xmlData)) { $xmlString .= fread($xmlData, 4096); }
	fclose($xmlData);
}

/** debug **
$h = fopen( 'debug.txt', 'w' );
fwrite( $h, $xmlString );
fclose( $h );
/** **/

$xmlString = preg_replace( '/<\?xml [^>]+>/', '', $xmlString );

$xmlrpcurl = get_bloginfo( 'url' ) . '/xmlrpc.php';

$body = '';
$body .= "<?xml version=\"1.0\"?" . ">\n";
$body .= "<methodCall>\n";
$body .= "<methodName>$method</methodName>\n";
$body .= "<params>\n";
/**
$body .= "<param>\n";
$body .= "<value><string>Test</string></value>\n";
$body .= "</param>\n";
**/
$body .= "<param>\n";
$body .= "<value><string>" . urlencode( $xmlString ) . "</string></value>\n";
$body .= "</param>\n";
$body .= "</params>\n";
$body .= "</methodCall>\n";

$args = array(
	'method'	=> 'POST',
	'body'		=> $body
);

$result = wp_remote_post( $xmlrpcurl, $args );

/** **
echo 'XML-RPC URL: ' . $xmlrpcurl . '<br />';
echo 'Result: ' . $result . '<br />';
echo "Result: <pre>\n"; var_dump( $result ); echo "\n</pre>\n";
echo "xmlString: <pre>\n" . $xmlString . "\n</pre>\n";

echo '<form method="post">';
echo '<textarea name="content">';
echo '</textarea>';
echo '<input type="submit" name="manualsubmit" value="ok">';
echo '</form>';
/** **/

echo $result['body'];

?>