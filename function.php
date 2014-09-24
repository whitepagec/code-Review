<?php
/*
# Given a string, this function first strips out all html special characters, then
# encodes the string, safely returning an encoded string without double-encoding.
function htmlspecialchars( $given, $quote_style = ENT_QUOTES ){
	$given = stripslashes ($given);
	return htmlspecialchars( html_entity_decode( $given, $quote_style ), $quote_style );
}
*/
# Decodes encoded strings using the get_htmlspecialchars function above
function htmldecode( $given_html, $quote_style = ENT_QUOTES ) {
	$trans_table = array_flip(get_html_translation_table( HTML_SPECIALCHARS, $quote_style ));
	$trans_table['&#39;'] = "'";
	$trans_table['&#039;'] = "'";
	return ( strtr( $given_html, $trans_table ) );
}

function read_line($fname,$subheader,$crumb,$content)
{
	$myfile = file($fname);//$lines  is now an array. each line in the file, is now a cell in the
	//array

	$html_content = "";

	if (sizeof($myfile) == 0) {
		print "Error Reading File: $fname";
		return (false);
	}

	foreach ($myfile as $line) {
		$line = str_replace("{subheader}", $subheader, $line);
		$line = str_replace("{crumb}", $crumb, $line);
		$line = str_replace("{content}", $content, $line);

		$html_content .= $line;
	}

	return ($html_content);
}

function simple_encrypt_abc($text,$salt)
{
    return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
}
 
function simple_decrypt_def($text,$salt)
{
	return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
}

	
?>
