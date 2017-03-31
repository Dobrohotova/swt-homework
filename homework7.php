<?php

class File {
	private $filename;
	private $filehandle;

	public function __construct($filename){
		$this->filename = $filename;
		$this->filehandle = fopen($filename, 'a+');
	}

	public function write($string){
		fwrite($this->filehandle, $string);
	}

	public function read(){
		rewind($this->filehandle);
		return fread($this->filehandle, filesize($this->filename));
	}

	public function __destruct(){
		fclose($this->filehandle);
	}
}

$f = new File('file.txt');
$f->write('Some text. Blah blah blah... ');
$f->write('PHP RULZ! ');
echo $f->read();

unset($f);
  

?>
