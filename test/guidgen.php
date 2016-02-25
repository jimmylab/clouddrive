<?php
//Buid a uuid without brackets, using native when avaliable
function build_guid() {
	if (function_exists('com_create_guid') === true) {
		return
			substr(    //Comment this for '{}'
				com_create_guid()
			, 1, -1)    //Comment this for '{}'
			;
	}
	$bits = md5(mt_rand(), true);
	$bits[6] = chr(ord($bits[6]) & 0x0f | 0x40); // set version to 0100
	$bits[8] = chr(ord($bits[8]) & 0x3f | 0x80); // set bits 6-7 to 10
	return vsprintf(
		//'{%s%s-%s-%s-%s-%s%s%s}',    //Comment this for '{}'
		'%s%s-%s-%s-%s-%s%s%s',
		str_split(bin2hex($bits), 4)
	);
}
return;
?>

<pre>
<?php
//Unit test
for ($i=0; $i<1000; $i++) {
	echo build_guid(), "\n";
}
?>
</pre>