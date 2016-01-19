<?php

	/**
	* THIS SOURCE CODE WAS AUTOMATICALLY GENERATED ON Tue 10:33:28  19/01/2016
	* 
	*
	* DATABASE CRUD GENERATOR IS AN OPEN SOURCE PROJECT. TO IMPROVE ON THIS PROJECT BY
	* ADDING MODULES, FIXING BUGS e.t.c GET THE SOURCE CODE FROM GIT (https://github.com/marviktintor/dbcrudgen/)
	* 
	* DATABASE CRUD GENERATOR INFO:
	* 
	* DEVELOPER : VICTOR MWENDA
	* VERSION : DEVELOPER PREVIEW 0.1
	* SUPPORTED LANGUAGES : PHP
	* DEVELOPER EMAIL : vmwenda.vm@gmail.com
	* 
	*/

	
class Dangerous_medicine_misuse {

	private $databaseUtils;
	private $action;
	private $client;
	
	public function __construct($action, $client) {
	
		//Data Actions script file - It contains all the various data actions that can be performed on data.
		require_once 'C:\xampp\htdocs\where_there_is_no_doc\scripts\php\database\core-apis\DatabaseActions.class.inc.php';
		
		//Database Utils Script - It contains all the MYSQL API's for performing CRUD transactions
		require_once 'C:\xampp\htdocs\where_there_is_no_doc\scripts\php\database\core-apis\DatabaseUtils.class.inc.php';
		
		$this->init(true);
		
	}
	
	//Initializes
	public function init($execute = false) {
		
		//Init
		$this->databaseUtils = new DatabaseUtils ();
		
		//Ensure that the POST_CLIENT was posted before trying to get it
		if(!empty($_POST [POST_CLIENT])){
			$this->client = $_POST [POST_CLIENT];
		}
		
		//Ensure that the POST_ACTION was posted before trying to get it
		if(!empty($_POST [POST_ACTION])){
			$this->action = $_POST [POST_ACTION];
		}
		
		
		
		if ($execute) {
			
			if ($this->get_action() == ACTION_INSERT) {
			
			}
			
			if ($this->get_action() == ACTION_UPDATE) {
			
			}
			
			if ($this->get_action() == ACTION_QUERY) {
			
			}
			
			if ($this->get_action() == ACTION_DELETE) {
			
			}
		}
	}
	
		
	/**
	* private class variable medicine
	*/
	private $_medicine;
	
	/**
	* returns the value of medicine
	*/
	public function _get_medicine() {
		return $this->_medicine;
	}
	
	/**
	* sets the value of medicine
	*/
	public function set_medicine($medicine) {
		$this->_medicine = $medicine;
	}
	
	
	/**
	* private class variable misuse
	*/
	private $_misuse;
	
	/**
	* returns the value of misuse
	*/
	public function _get_misuse() {
		return $this->_misuse;
	}
	
	/**
	* sets the value of misuse
	*/
	public function set_misuse($misuse) {
		$this->_misuse = $misuse;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_medicine 
	* based on the value of $medicine,$misuse passed to the function
	*/
	public function get_id_medicine($medicine,$misuse) {
		$columns = array ('medicine','misuse');
		$records = array ($medicine,$misuse);
		$id_medicine_ = $this->query_from_dangerous_medicine_misuse ( $columns, $records );
		return count($id_medicine_)>0 ? $id_medicine_ [0] ['id_medicine'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of medicine 
	* based on the value of $id_medicine passed to the function
	*/
	public function get_medicine($id_medicine) {
		$columns = array ('id_medicine');
		$records = array ($id_medicine);
		$medicine_ = $this->query_from_dangerous_medicine_misuse ( $columns, $records );
		return count($medicine_)>0 ? $medicine_ [0] ['medicine'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of misuse 
	* based on the value of $id_medicine passed to the function
	*/
	public function get_misuse($id_medicine) {
		$columns = array ('id_medicine');
		$records = array ($id_medicine);
		$misuse_ = $this->query_from_dangerous_medicine_misuse ( $columns, $records );
		return count($misuse_)>0 ? $misuse_ [0] ['misuse'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [dangerous_medicine_misuse] 
	*/
	public static function get_table() {
		return 'dangerous_medicine_misuse';
	}
	
	/**
	* This action represents the intended database transaction
	*
	* @return the set action.
	*/
	private function get_action() {
		return $this->action;
	}
	
	/**
	* Returns the client doing transactions
	*
	* @return the client
	*/
	private function get_client() {
		return $this->client;
	}
	
	/**
	* Used  to calculate the number of times a record exists in the table [dangerous_medicine_misuse]
	*
	* @return the number of times a record exists exists in the table [dangerous_medicine_misuse]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[dangerous_medicine_misuse]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_dangerous_medicine_misuse(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [dangerous_medicine_misuse]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_dangerous_medicine_misuse(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [dangerous_medicine_misuse]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_dangerous_medicine_misuse(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_dangerous_medicine_misuse(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_dangerous_medicine_misuse(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_dangerous_medicine_misuse(Array $columns, Array $records, $printSQL = false) {
		return $this->search ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Get Database Utils
	*  
	* @return an object of database utils
	*/
	public function get_database_utils() {
		return $this->databaseUtils;
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [dangerous_medicine_misuse]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[dangerous_medicine_misuse]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [dangerous_medicine_misuse]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [dangerous_medicine_misuse] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
