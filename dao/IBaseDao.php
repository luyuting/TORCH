<?php 
	interface IBaseDao {
		
		public function save($model);
		
		public function update($model);
		
		public function delete($model);
		
		//public function find($model);
	}
?>