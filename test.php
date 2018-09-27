<?php


/**
*создаем класс, заполняя его свойствами(переменными), и методом(функцией)	
*/
class Item {
	private $id;
	private $name = 'oleg';
	private $status;
	private $changed;
	

/**
*создаем конструктор в классе
*/
	function __construct($id) {
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->changed = $changed;
	}


/**
*создаем функцию init
*/
	private function init(objects.) {
		$this->name;
		$this->status;
	}


/**
*создаем функцию save
*/	
	public function save __set($name, $status) {
		$this->name = $name;
		$this->status = $status;
	}
}


/**
*создаем объект - копия класса
*/
$obj = new Item();


/**
*получаем доступ к свойству объекта
*/
$obj->id;


/**
*Делаем ID недоступным для записи
*/
public function __get($id) {
	if (isset($this->$id))
      return $this->$id;
    else 
      user_error("Атрибут ".$id." не найден!");
}


?>
