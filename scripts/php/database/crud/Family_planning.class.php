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

	
class Family_planning {

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
	* private class variable family_planning_method
	*/
	private $_family_planning_method;
	
	/**
	* returns the value of family_planning_method
	*/
	public function _get_family_planning_method() {
		return $this->_family_planning_method;
	}
	
	/**
	* sets the value of family_planning_method
	*/
	public function set_family_planning_method($family_planning_method) {
		$this->_family_planning_method = $family_planning_method;
	}
	
	
	/**
	* private class variable family_planning_method_information
	*/
	private $_family_planning_method_information;
	
	/**
	* returns the value of family_planning_method_information
	*/
	public function _get_family_planning_method_information() {
		return $this->_family_planning_method_information;
	}
	
	/**
	* sets the value of family_planning_method_information
	*/
	public function set_family_planning_method_information($family_planning_method_information) {
		$this->_family_planning_method_information = $family_planning_method_information;
	}
	
	
	/**
	* private class variable method_precautions
	*/
	private $_method_precautions;
	
	/**
	* returns the value of method_precautions
	*/
	public function _get_method_precautions() {
		return $this->_method_precautions;
	}
	
	/**
	* sets the value of method_precautions
	*/
	public function set_method_precautions($method_precautions) {
		$this->_method_precautions = $method_precautions;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_family_planning_method 
	* based on the value of $family_planning_method,$family_planning_method_information,$method_precautions passed to the function
	*/
	public function get_id_family_planning_method($family_planning_method,$family_planning_method_information,$method_precautions) {
		$columns = array ('family_planning_method','family_planning_method_information','method_precautions');
		$records = array ($family_planning_method,$family_planning_method_information,$method_precautions);
		$id_family_planning_method_ = $this->query_from_family_planning ( $columns, $records );
		return count($id_family_planning_method_)>0 ? $id_family_planning_method_ [0] ['id_family_planning_method'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of family_planning_method 
	* based on the value of $id_family_planning_method passed to the function
	*/
	public function get_family_planning_method($id_family_planning_method) {
		$columns = array ('id_family_planning_method');
		$records = array ($id_family_planning_method);
		$family_planning_method_ = $this->query_from_family_planning ( $columns, $records );
		return count($family_planning_method_)>0 ? $family_planning_method_ [0] ['family_planning_method'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of family_planning_method_information 
	* based on the value of $id_family_planning_method passed to the function
	*/
	public function get_family_planning_method_information($id_family_planning_method) {
		$columns = array ('id_family_planning_method');
		$records = array ($id_family_planning_method);
		$family_planning_method_information_ = $this->query_from_family_planning ( $columns, $records );
		return count($family_planning_method_information_)>0 ? $family_planning_method_information_ [0] ['family_planning_method_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of method_precautions 
	* based on the value of $id_family_planning_method passed to the function
	*/
	public function get_method_precautions($id_family_planning_method) {
		$columns = array ('id_family_planning_method');
		$records = array ($id_family_planning_method);
		$method_precautions_ = $this->query_from_family_planning ( $columns, $records );
		return count($method_precautions_)>0 ? $method_precautions_ [0] ['method_precautions'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [family_planning] 
	*/
	public static function get_table() {
		return 'family_planning';
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
	* Used  to calculate the number of times a record exists in the table [family_planning]
	*
	* @return the number of times a record exists exists in the table [family_planning]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[family_planning]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_family_planning(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [family_planning]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_family_planning(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [family_planning]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_family_planning(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_family_planning(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_family_planning(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_family_planning(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [family_planning]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[family_planning]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [family_planning]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [family_planning] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
