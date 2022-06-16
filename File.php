<?php
	interface iFile
	{
		public function __construct($filePath);
		
		public function getPath(); // путь к файлу
		public function getDir();  // папка файла
		public function getName(); // имя файла
		public function getExt();  // расширение файла
		public function getSize(); // размер файла
		
		public function getText();          // получает текст файла
		public function setText($text);     // устанавливает текст файла
		public function appendText($text);  // добавляет текст в конец файла
		
		public function copy($copyPath);    // копирует файл
		public function delete();           // удаляет файл
		public function rename($newName);   // переименовывает файл
		public function replace($newPath);  // перемещает файл
	}

    class File implements iFile
    {
     private $filePath;
 
		public function __construct($filePath){
            $this->filePath = $filePath;
        }
        public function getPath() {
            if(file_exists($this->filePath)) {
            echo $this->filePath  . '<br>';
            }
        }
		public function getDir() {
            if(file_exists($this->filePath)) {
            $arr = pathinfo($this->filePath);
            echo $arr['dirname'];
            }
        }
		public function getName() {
            if(file_exists($this->filePath)) {
            echo pathinfo($this->filePath, PATHINFO_FILENAME) . '<br>';
            }
        }
		public function getExt() {
            if(file_exists($this->filePath)) {
           echo pathinfo($this->filePath, PATHINFO_EXTENSION) . '<br>';
            }
        }
		public function getSize() {
            if(file_exists($this->filePath)) {
                echo filesize($this->filePath) . '<br>';
            }
            
        }
		
		public function getText() {
            if(file_exists($this->filePath)) {
           echo file_get_contents($this->filePath) . '<br>';
        }
        }
		public function setText($text) {
            if(file_exists($this->filePath)) {
            file_put_contents($this->filePath, $text);
            }
        }
		public function appendText($text) {
            if(file_exists($this->filePath)) {
            file_put_contents($this->filePath, $text, FILE_APPEND);
            }
        }
		
		public function copy($copyPath) {
            if(file_exists($this->filePath)) {
            copy($this->filePath, $copyPath);
            }
        }
		public function delete() {
            if(file_exists($this->filePath)) {
            unlink($this->filePath); 
            }
        }
		public function rename($newName) {
            
            if(file_exists($this->filePath)) {
                $arr = pathinfo($this->filePath);
                $str = $arr['dirname'] . '/' . $newName;
            rename($this->filePath, $str);
            $this->filePath = $str;
            }
        }
		public function replace($newPath) {
            if(file_exists($this->filePath)) {
            rename($this->filePath, $newPath);
        }
        }
    }

    $file = new File('1/now/222.txt');
    $file->getPath();
    // $file->getDir();
    // $file->getName();
    // $file->getSize();
    // $file->getExt();
    // $file->getText();
    // $file->setText('привет');
    // $file->getText();
    // $file->appendText('Maks');
    // $file->getText();
    // $file->copy('1/now/testCopy.txt');
    // $file->delete();
    // $file->rename('444.txt');
    $file->getPath();
    // $file->replace('1/222.txt');

    $file1 = new File('1/now/333.txt');
    $file1->getPath();
    // $file1->rename('444.txt');
?>