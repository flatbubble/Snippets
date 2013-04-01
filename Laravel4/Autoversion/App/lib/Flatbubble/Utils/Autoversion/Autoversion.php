<?php namespace Flatbubble\Utils\Autoversion;

class Autoversion implements AutoversionInterface{

	public static function version($file){
		if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file)){
			return $file;
		}

		$mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
		return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
	}
}

