<?php
$header="";
foreach (getallheaders() as $name => $value) {
    $header.=$name.": ".$value."\r\n";
}
$header.="x-test-header: 12345\r\n";

$options = array(
    'http'=>array(
        'method'=>'GET',
        'header'=>$header
    )
);

$context = stream_context_create( $options );
$contents = file_get_contents( $_SERVER["REQUEST_URI"], FALSE, $context );

foreach($http_response_header as $key=>$data)
{
	header($data);
}
header("x-response: phpproxy(^v^)");

echo $contents;









