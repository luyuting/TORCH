<?php 
	require_once('BaseDao.php');
	class BaseModelDao extends BaseDao {
		
		protected $table_name;
		
		public function save($model) {
			$sql = "insert into {$this -> table_name}(" . implode(",", array_keys($model)) . ") values('" . implode("','",
				array_values($model)) . "')";
			return $this -> execute($sql);
		}
		
		public function find($model) {
			$keys = array_keys($model);
			$values = array_values($model);
			$sql = "select * from {$this -> table_name} where " . $keys[0] . " = '" . $values[0] . "'";
			return $this -> queryRow($sql);
		}
	}
?>