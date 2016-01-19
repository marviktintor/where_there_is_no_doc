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

	
class Antibiotics_and_how_to_use_them {

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
	* private class variable item_title
	*/
	private $_item_title;
	
	/**
	* returns the value of item_title
	*/
	public function _get_item_title() {
		return $this->_item_title;
	}
	
	/**
	* sets the value of item_title
	*/
	public function set_item_title($item_title) {
		$this->_item_title = $item_title;
	}
	
	
	/**
	* private class variable item_description
	*/
	private $_item_description;
	
	/**
	* returns the value of item_description
	*/
	public function _get_item_description() {
		return $this->_item_description;
	}
	
	/**
	* sets the value of item_description
	*/
	public function set_item_description($item_description) {
		$this->_item_description = $item_description;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_item 
	* based on the value of $item_title,$item_description passed to the function
	*/
	public function get_id_item($item_title,$item_description) {
		$columns = array ('item_title','item_description');
		$records = array ($item_title,$item_description);
		$id_item_ = $this->query_from_antibiotics_and_how_to_use_them ( $columns, $records );
		return count($id_item_)>0 ? $id_item_ [0] ['id_item'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of item_title 
	* based on the value of $id_item passed to the function
	*/
	public function get_item_title($id_item) {
		$columns = array ('id_item');
		$records = array ($id_item);
		$item_title_ = $this->query_from_antibiotics_and_how_to_use_them ( $columns, $records );
		return count($item_title_)>0 ? $item_title_ [0] ['item_title'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of item_description 
	* based on the value of $id_item passed to the function
	*/
	public function get_item_description($id_item) {
		$columns = array ('id_item');
		$records = array ($id_item);
		$item_description_ = $this->query_from_antibiotics_and_how_to_use_them ( $columns, $records );
		return count($item_description_)>0 ? $item_description_ [0] ['item_description'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [antibiotics_and_how_to_use_them] 
	*/
	public static function get_table() {
		return 'antibiotics_and_how_to_use_them';
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
	* Used  to calculate the number of times a record exists in the table [antibiotics_and_how_to_use_them]
	*
	* @return the number of times a record exists exists in the table [antibiotics_and_how_to_use_them]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[antibiotics_and_how_to_use_them]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_antibiotics_and_how_to_use_them(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [antibiotics_and_how_to_use_them]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_antibiotics_and_how_to_use_them(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [antibiotics_and_how_to_use_them]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_antibiotics_and_how_to_use_them(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_antibiotics_and_how_to_use_them(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_antibiotics_and_how_to_use_them(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_antibiotics_and_how_to_use_them(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [antibiotics_and_how_to_use_them]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[antibiotics_and_how_to_use_them]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [antibiotics_and_how_to_use_them]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [antibiotics_and_how_to_use_them] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
