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

	
class Health_problems_special_diets {

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
	* private class variable health_problem
	*/
	private $_health_problem;
	
	/**
	* returns the value of health_problem
	*/
	public function _get_health_problem() {
		return $this->_health_problem;
	}
	
	/**
	* sets the value of health_problem
	*/
	public function set_health_problem($health_problem) {
		$this->_health_problem = $health_problem;
	}
	
	
	/**
	* private class variable health_problem_information
	*/
	private $_health_problem_information;
	
	/**
	* returns the value of health_problem_information
	*/
	public function _get_health_problem_information() {
		return $this->_health_problem_information;
	}
	
	/**
	* sets the value of health_problem_information
	*/
	public function set_health_problem_information($health_problem_information) {
		$this->_health_problem_information = $health_problem_information;
	}
	
	
	/**
	* private class variable health_problem_signs
	*/
	private $_health_problem_signs;
	
	/**
	* returns the value of health_problem_signs
	*/
	public function _get_health_problem_signs() {
		return $this->_health_problem_signs;
	}
	
	/**
	* sets the value of health_problem_signs
	*/
	public function set_health_problem_signs($health_problem_signs) {
		$this->_health_problem_signs = $health_problem_signs;
	}
	
	
	/**
	* private class variable health_problem_signs_advanced
	*/
	private $_health_problem_signs_advanced;
	
	/**
	* returns the value of health_problem_signs_advanced
	*/
	public function _get_health_problem_signs_advanced() {
		return $this->_health_problem_signs_advanced;
	}
	
	/**
	* sets the value of health_problem_signs_advanced
	*/
	public function set_health_problem_signs_advanced($health_problem_signs_advanced) {
		$this->_health_problem_signs_advanced = $health_problem_signs_advanced;
	}
	
	
	/**
	* private class variable health_problem_treatment
	*/
	private $_health_problem_treatment;
	
	/**
	* returns the value of health_problem_treatment
	*/
	public function _get_health_problem_treatment() {
		return $this->_health_problem_treatment;
	}
	
	/**
	* sets the value of health_problem_treatment
	*/
	public function set_health_problem_treatment($health_problem_treatment) {
		$this->_health_problem_treatment = $health_problem_treatment;
	}
	
	
	/**
	* private class variable health_problem_prevention
	*/
	private $_health_problem_prevention;
	
	/**
	* returns the value of health_problem_prevention
	*/
	public function _get_health_problem_prevention() {
		return $this->_health_problem_prevention;
	}
	
	/**
	* sets the value of health_problem_prevention
	*/
	public function set_health_problem_prevention($health_problem_prevention) {
		$this->_health_problem_prevention = $health_problem_prevention;
	}
	
	
	/**
	* private class variable health_problem_caution
	*/
	private $_health_problem_caution;
	
	/**
	* returns the value of health_problem_caution
	*/
	public function _get_health_problem_caution() {
		return $this->_health_problem_caution;
	}
	
	/**
	* sets the value of health_problem_caution
	*/
	public function set_health_problem_caution($health_problem_caution) {
		$this->_health_problem_caution = $health_problem_caution;
	}
	
	
	/**
	* private class variable health_problem_note
	*/
	private $_health_problem_note;
	
	/**
	* returns the value of health_problem_note
	*/
	public function _get_health_problem_note() {
		return $this->_health_problem_note;
	}
	
	/**
	* sets the value of health_problem_note
	*/
	public function set_health_problem_note($health_problem_note) {
		$this->_health_problem_note = $health_problem_note;
	}
	
	
	/**
	* private class variable special_diet
	*/
	private $_special_diet;
	
	/**
	* returns the value of special_diet
	*/
	public function _get_special_diet() {
		return $this->_special_diet;
	}
	
	/**
	* sets the value of special_diet
	*/
	public function set_special_diet($special_diet) {
		$this->_special_diet = $special_diet;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_health_problem 
	* based on the value of $health_problem,$health_problem_information,$health_problem_signs,$health_problem_signs_advanced,$health_problem_treatment,$health_problem_prevention,$health_problem_caution,$health_problem_note,$special_diet passed to the function
	*/
	public function get_id_health_problem($health_problem,$health_problem_information,$health_problem_signs,$health_problem_signs_advanced,$health_problem_treatment,$health_problem_prevention,$health_problem_caution,$health_problem_note,$special_diet) {
		$columns = array ('health_problem','health_problem_information','health_problem_signs','health_problem_signs_advanced','health_problem_treatment','health_problem_prevention','health_problem_caution','health_problem_note','special_diet');
		$records = array ($health_problem,$health_problem_information,$health_problem_signs,$health_problem_signs_advanced,$health_problem_treatment,$health_problem_prevention,$health_problem_caution,$health_problem_note,$special_diet);
		$id_health_problem_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($id_health_problem_)>0 ? $id_health_problem_ [0] ['id_health_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_)>0 ? $health_problem_ [0] ['health_problem'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_information 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_information($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_information_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_information_)>0 ? $health_problem_information_ [0] ['health_problem_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_signs 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_signs($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_signs_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_signs_)>0 ? $health_problem_signs_ [0] ['health_problem_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_signs_advanced 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_signs_advanced($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_signs_advanced_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_signs_advanced_)>0 ? $health_problem_signs_advanced_ [0] ['health_problem_signs_advanced'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_treatment 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_treatment($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_treatment_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_treatment_)>0 ? $health_problem_treatment_ [0] ['health_problem_treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_prevention 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_prevention($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_prevention_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_prevention_)>0 ? $health_problem_prevention_ [0] ['health_problem_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_caution 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_caution($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_caution_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_caution_)>0 ? $health_problem_caution_ [0] ['health_problem_caution'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_problem_note 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_health_problem_note($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$health_problem_note_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($health_problem_note_)>0 ? $health_problem_note_ [0] ['health_problem_note'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of special_diet 
	* based on the value of $id_health_problem passed to the function
	*/
	public function get_special_diet($id_health_problem) {
		$columns = array ('id_health_problem');
		$records = array ($id_health_problem);
		$special_diet_ = $this->query_from_health_problems_special_diets ( $columns, $records );
		return count($special_diet_)>0 ? $special_diet_ [0] ['special_diet'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [health_problems_special_diets] 
	*/
	public static function get_table() {
		return 'health_problems_special_diets';
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
	* Used  to calculate the number of times a record exists in the table [health_problems_special_diets]
	*
	* @return the number of times a record exists exists in the table [health_problems_special_diets]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[health_problems_special_diets]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_health_problems_special_diets(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [health_problems_special_diets]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_health_problems_special_diets(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [health_problems_special_diets]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_health_problems_special_diets(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_health_problems_special_diets(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_health_problems_special_diets(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_health_problems_special_diets(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [health_problems_special_diets]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[health_problems_special_diets]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [health_problems_special_diets]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [health_problems_special_diets] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
