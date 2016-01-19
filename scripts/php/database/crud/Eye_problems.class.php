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

	
class Eye_problems {

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
	* private class variable eye_problem
	*/
	private $_eye_problem;
	
	/**
	* returns the value of eye_problem
	*/
	public function _get_eye_problem() {
		return $this->_eye_problem;
	}
	
	/**
	* sets the value of eye_problem
	*/
	public function set_eye_problem($eye_problem) {
		$this->_eye_problem = $eye_problem;
	}
	
	
	/**
	* private class variable eye_problem_info
	*/
	private $_eye_problem_info;
	
	/**
	* returns the value of eye_problem_info
	*/
	public function _get_eye_problem_info() {
		return $this->_eye_problem_info;
	}
	
	/**
	* sets the value of eye_problem_info
	*/
	public function set_eye_problem_info($eye_problem_info) {
		$this->_eye_problem_info = $eye_problem_info;
	}
	
	
	/**
	* private class variable eye_problem_signs
	*/
	private $_eye_problem_signs;
	
	/**
	* returns the value of eye_problem_signs
	*/
	public function _get_eye_problem_signs() {
		return $this->_eye_problem_signs;
	}
	
	/**
	* sets the value of eye_problem_signs
	*/
	public function set_eye_problem_signs($eye_problem_signs) {
		$this->_eye_problem_signs = $eye_problem_signs;
	}
	
	
	/**
	* private class variable eye_problem_treatment
	*/
	private $_eye_problem_treatment;
	
	/**
	* returns the value of eye_problem_treatment
	*/
	public function _get_eye_problem_treatment() {
		return $this->_eye_problem_treatment;
	}
	
	/**
	* sets the value of eye_problem_treatment
	*/
	public function set_eye_problem_treatment($eye_problem_treatment) {
		$this->_eye_problem_treatment = $eye_problem_treatment;
	}
	
	
	/**
	* private class variable eye_problem_prevention
	*/
	private $_eye_problem_prevention;
	
	/**
	* returns the value of eye_problem_prevention
	*/
	public function _get_eye_problem_prevention() {
		return $this->_eye_problem_prevention;
	}
	
	/**
	* sets the value of eye_problem_prevention
	*/
	public function set_eye_problem_prevention($eye_problem_prevention) {
		$this->_eye_problem_prevention = $eye_problem_prevention;
	}
	
	
	/**
	* private class variable eye_problem_warning
	*/
	private $_eye_problem_warning;
	
	/**
	* returns the value of eye_problem_warning
	*/
	public function _get_eye_problem_warning() {
		return $this->_eye_problem_warning;
	}
	
	/**
	* sets the value of eye_problem_warning
	*/
	public function set_eye_problem_warning($eye_problem_warning) {
		$this->_eye_problem_warning = $eye_problem_warning;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_eye_problem 
	* based on the value of $eye_problem,$eye_problem_info,$eye_problem_signs,$eye_problem_treatment,$eye_problem_prevention,$eye_problem_warning passed to the function
	*/
	public function get_id_eye_problem($eye_problem,$eye_problem_info,$eye_problem_signs,$eye_problem_treatment,$eye_problem_prevention,$eye_problem_warning) {
		$columns = array ('eye_problem','eye_problem_info','eye_problem_signs','eye_problem_treatment','eye_problem_prevention','eye_problem_warning');
		$records = array ($eye_problem,$eye_problem_info,$eye_problem_signs,$eye_problem_treatment,$eye_problem_prevention,$eye_problem_warning);
		$id_eye_problem_ = $this->query_from_eye_problems ( $columns, $records );
		return count($id_eye_problem_)>0 ? $id_eye_problem_ [0] ['id_eye_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_)>0 ? $eye_problem_ [0] ['eye_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem_info 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem_info($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_info_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_info_)>0 ? $eye_problem_info_ [0] ['eye_problem_info'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem_signs 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem_signs($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_signs_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_signs_)>0 ? $eye_problem_signs_ [0] ['eye_problem_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem_treatment 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem_treatment($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_treatment_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_treatment_)>0 ? $eye_problem_treatment_ [0] ['eye_problem_treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem_prevention 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem_prevention($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_prevention_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_prevention_)>0 ? $eye_problem_prevention_ [0] ['eye_problem_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of eye_problem_warning 
	* based on the value of $id_eye_problem passed to the function
	*/
	public function get_eye_problem_warning($id_eye_problem) {
		$columns = array ('id_eye_problem');
		$records = array ($id_eye_problem);
		$eye_problem_warning_ = $this->query_from_eye_problems ( $columns, $records );
		return count($eye_problem_warning_)>0 ? $eye_problem_warning_ [0] ['eye_problem_warning'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [eye_problems] 
	*/
	public static function get_table() {
		return 'eye_problems';
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
	* Used  to calculate the number of times a record exists in the table [eye_problems]
	*
	* @return the number of times a record exists exists in the table [eye_problems]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[eye_problems]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_eye_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [eye_problems]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_eye_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [eye_problems]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_eye_problems(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_eye_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_eye_problems(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_eye_problems(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [eye_problems]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[eye_problems]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [eye_problems]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [eye_problems] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
