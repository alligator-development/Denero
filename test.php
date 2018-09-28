<?php


/**
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property boolean $changed
 */
final class Item {
	private const $id;
	private $name;
	private $status;
	private $changed;
	

/**
 * @param integer $id
 *
 */
	function __construct($id) {
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->changed = $changed;
}

/**
 * @param table $objects
 */
	private function init($objects) {
		$objects->name = $this->name;
		$objects->status = $this->status;
	}


/**
 * @param integer $name
 * @param integer $status
 */	
	public function save __set($name, $status) {
		if ($changed = true) {
			$obj->name = $this->name;
			$obj->status = $this->status;
		}
	}
}


/**
 *
 */
$obj = new Item();

/**
 *
 */
$obj->id;


/**
 * @param integer $id
 */
public function __get($id) {
	if (isset($this->$id))
      return $this->$id;
    else 
      user_error("Атрибут ".$id." не найден!");
}


?>
