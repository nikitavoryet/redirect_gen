<?php
$data = file('data.txt');
for ($i=0; $i<count($data); $i++) {
	$line = split("	",trim($data[$i]));
	if ($line[0]==$_REQUEST["goto"]) {
		header("Location: ".$line[1]);
		break;
	};
};
?>