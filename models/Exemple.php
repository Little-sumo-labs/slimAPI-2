<?php
/**
 * This is an example of Posts Class using PDO
 *
 */
namespace models;
use lib\Core;

class Exemple {
	protected $core;
	function __construct() {
		$this->core = Core::getInstance();
	}
	
	//__ Get all posts
	public function getAllData() {
		global $pdo;
		$data = array();

		$selectStatement = $pdo->select()
				           ->from('atome');

		if ($stmt = $selectStatement->execute()) {
			$data = $stmt->fetchAll();
		} else {
			$data = 0;
		}
		return $data;
	}
	
	//__ Get all posts
	public function getData($slug) {
		global $pdo;
		$data = array();

		$selectStatement = $pdo->select()
					->from('atome')
					->where('slug', '=', $slug);

		if ($stmt = $selectStatement->execute()) {
			$data = $stmt->fetchAll();
		} else {
			$data = 0;
		}
		return $data;
	}
}
