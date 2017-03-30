<?php

class File {
	private $filename;
	// private $filehandle;

	public function setFilename($fn){
		$this->filename = $fn;
	}

	// public function setFilehandle($fh){
	// 	$this->filehandle = $fh;
	// }

	public function __construct($fn){
		$this->setFilename($fn);
	}

	public function __destruct(){
		echo 'Calling the D.E.S.T.R.U.C.T.O.R. !!!';
	}

	public function write($string){
		$filehandle = fopen($this->filename, 'a+');
		echo fwrite($filehandle, $this->$string);
		echo rewind($filehandle);
		echo fread($filehandle, filesize($this->filename));
		echo fclose($filehandle);
	}
}

$f = new File('file.txt');
$f->write('Some text. Blah blah blah...');

echo '</br>';
unset($f);
  

?>
