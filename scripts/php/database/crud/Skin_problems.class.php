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

	
class Skin_problems {

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
	* private class variable skin_problem
	*/
	private $_skin_problem;
	
	/**
	* returns the value of skin_problem
	*/
	public function _get_skin_problem() {
		return $this->_skin_problem;
	}
	
	/**
	* sets the value of skin_problem
	*/
	public function set_skin_problem($skin_problem) {
		$this->_skin_problem = $skin_problem;
	}
	
	
	/**
	* private class variable skin_problem_information
	*/
	private $_skin_problem_information;
	
	/**
	* returns the value of skin_problem_information
	*/
	public function _get_skin_problem_information() {
		return $this->_skin_problem_information;
	}
	
	/**
	* sets the value of skin_problem_information
	*/
	public function set_skin_problem_information($skin_problem_information) {
		$this->_skin_problem_information = $skin_problem_information;
	}
	
	
	/**
	* private class variable treatment
	*/
	private $_treatment;
	
	/**
	* returns the value of treatment
	*/
	public function _get_treatment() {
		return $this->_treatment;
	}
	
	/**
	* sets the value of treatment
	*/
	public function set_treatment($treatment) {
		$this->_treatment = $treatment;
	}
	
	
	/**
	* private class variable prevention
	*/
	private $_prevention;
	
	/**
	* returns the value of prevention
	*/
	public function _get_prevention() {
		return $this->_prevention;
	}
	
	/**
	* sets the value of prevention
	*/
	public function set_prevention($prevention) {
		$this->_prevention = $prevention;
	}
	
	
	/**
	* private class variable skin_problem_caution
	*/
	private $_skin_problem_caution;
	
	/**
	* returns the value of skin_problem_caution
	*/
	public function _get_skin_problem_caution() {
		return $this->_skin_problem_caution;
	}
	
	/**
	* sets the value of skin_problem_caution
	*/
	public function set_skin_problem_caution($skin_problem_caution) {
		$this->_skin_problem_caution = $skin_problem_caution;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_skin_problem 
	* based on the value of $skin_problem,$skin_problem_information,$treatment,$prevention,$skin_problem_caution passed to the function
	*/
	public function get_id_skin_problem($skin_problem,$skin_problem_information,$treatment,$prevention,$skin_problem_caution) {
		$columns = array ('skin_problem','skin_problem_information','treatment','prevention','skin_problem_caution');
		$records = array ($skin_problem,$skin_problem_information,$treatment,$prevention,$skin_problem_caution);
		$id_skin_problem_ = $this->query_from_skin_problems ( $columns, $records );
		return count($id_skin_problem_)>0 ? $id_skin_problem_ [0] ['id_skin_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of skin_problem 
	* based on the value of $id_skin_problem passed to the function
	*/
	public function get_skin_problem($id_skin_problem) {
		$columns = array ('id_skin_problem');
		$records = array ($id_skin_problem);
		$skin_problem_ = $this->query_from_skin_problems ( $columns, $records );
		return count($skin_problem_)>0 ? $skin_problem_ [0] ['skin_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of skin_problem_information 
	* based on the value of $id_skin_problem passed to the function
	*/
	public function get_skin_problem_information($id_skin_problem) {
		$columns = array ('id_skin_problem');
		$records = array ($id_skin_problem);
		$skin_problem_information_ = $this->query_from_skin_problems ( $columns, $records );
		return count($skin_problem_information_)>0 ? $skin_problem_information_ [0] ['skin_problem_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of treatment 
	* based on the value of $id_skin_problem passed to the function
	*/
	public function get_treatment($id_skin_problem) {
		$columns = array ('id_skin_problem');
		$records = array ($id_skin_problem);
		$treatment_ = $this->query_from_skin_problems ( $columns, $records );
		return count($treatment_)>0 ? $treatment_ [0] ['treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of prevention 
	* based on the value of $id_skin_problem passed to the function
	*/
	public function get_prevention($id_skin_problem) {
		$columns = array ('id_skin_problem');
		$records = array ($id_skin_problem);
		$prevention_ = $this->query_from_skin_problems ( $columns, $records );
		return count($prevention_)>0 ? $prevention_ [0] ['prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of skin_problem_caution 
	* based on the value of $id_skin_problem passed to the function
	*/
	public function get_skin_problem_caution($id_skin_problem) {
		$columns = array ('id_skin_problem');
		$records = array ($id_skin_problem);
		$skin_problem_caution_ = $this->query_from_skin_problems ( $columns, $records );
		return count($skin_problem_caution_)>0 ? $skin_problem_caution_ [0] ['skin_problem_caution'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [skin_problems] 
	*/
	public static function get_table() {
		return 'skin_problems';
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
	* Used  to calculate the number of times a record exists in the table [skin_problems]
	*
	* @return the number of times a record exists exists in the table [skin_problems]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[skin_problems]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_skin_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [skin_problems]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_skin_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [skin_problems]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_skin_problems(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_skin_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_skin_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_skin_problems(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [skin_problems]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[skin_problems]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [skin_problems]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [skin_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
