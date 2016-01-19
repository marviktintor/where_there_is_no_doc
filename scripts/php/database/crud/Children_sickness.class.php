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

	
class Children_sickness {

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
	* private class variable sickness
	*/
	private $_sickness;
	
	/**
	* returns the value of sickness
	*/
	public function _get_sickness() {
		return $this->_sickness;
	}
	
	/**
	* sets the value of sickness
	*/
	public function set_sickness($sickness) {
		$this->_sickness = $sickness;
	}
	
	
	/**
	* private class variable sickness_info
	*/
	private $_sickness_info;
	
	/**
	* returns the value of sickness_info
	*/
	public function _get_sickness_info() {
		return $this->_sickness_info;
	}
	
	/**
	* sets the value of sickness_info
	*/
	public function set_sickness_info($sickness_info) {
		$this->_sickness_info = $sickness_info;
	}
	
	
	/**
	* private class variable sickness_causes
	*/
	private $_sickness_causes;
	
	/**
	* returns the value of sickness_causes
	*/
	public function _get_sickness_causes() {
		return $this->_sickness_causes;
	}
	
	/**
	* sets the value of sickness_causes
	*/
	public function set_sickness_causes($sickness_causes) {
		$this->_sickness_causes = $sickness_causes;
	}
	
	
	/**
	* private class variable sickness_signs
	*/
	private $_sickness_signs;
	
	/**
	* returns the value of sickness_signs
	*/
	public function _get_sickness_signs() {
		return $this->_sickness_signs;
	}
	
	/**
	* sets the value of sickness_signs
	*/
	public function set_sickness_signs($sickness_signs) {
		$this->_sickness_signs = $sickness_signs;
	}
	
	
	/**
	* private class variable sickness_treatment
	*/
	private $_sickness_treatment;
	
	/**
	* returns the value of sickness_treatment
	*/
	public function _get_sickness_treatment() {
		return $this->_sickness_treatment;
	}
	
	/**
	* sets the value of sickness_treatment
	*/
	public function set_sickness_treatment($sickness_treatment) {
		$this->_sickness_treatment = $sickness_treatment;
	}
	
	
	/**
	* private class variable sickness_treatment_precautions
	*/
	private $_sickness_treatment_precautions;
	
	/**
	* returns the value of sickness_treatment_precautions
	*/
	public function _get_sickness_treatment_precautions() {
		return $this->_sickness_treatment_precautions;
	}
	
	/**
	* sets the value of sickness_treatment_precautions
	*/
	public function set_sickness_treatment_precautions($sickness_treatment_precautions) {
		$this->_sickness_treatment_precautions = $sickness_treatment_precautions;
	}
	
	
	/**
	* private class variable sickness_prevention
	*/
	private $_sickness_prevention;
	
	/**
	* returns the value of sickness_prevention
	*/
	public function _get_sickness_prevention() {
		return $this->_sickness_prevention;
	}
	
	/**
	* sets the value of sickness_prevention
	*/
	public function set_sickness_prevention($sickness_prevention) {
		$this->_sickness_prevention = $sickness_prevention;
	}
	
	
	/**
	* private class variable sickness_caution
	*/
	private $_sickness_caution;
	
	/**
	* returns the value of sickness_caution
	*/
	public function _get_sickness_caution() {
		return $this->_sickness_caution;
	}
	
	/**
	* sets the value of sickness_caution
	*/
	public function set_sickness_caution($sickness_caution) {
		$this->_sickness_caution = $sickness_caution;
	}
	
	
	/**
	* private class variable sickness_note
	*/
	private $_sickness_note;
	
	/**
	* returns the value of sickness_note
	*/
	public function _get_sickness_note() {
		return $this->_sickness_note;
	}
	
	/**
	* sets the value of sickness_note
	*/
	public function set_sickness_note($sickness_note) {
		$this->_sickness_note = $sickness_note;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_sickness 
	* based on the value of $sickness,$sickness_info,$sickness_causes,$sickness_signs,$sickness_treatment,$sickness_treatment_precautions,$sickness_prevention,$sickness_caution,$sickness_note passed to the function
	*/
	public function get_id_sickness($sickness,$sickness_info,$sickness_causes,$sickness_signs,$sickness_treatment,$sickness_treatment_precautions,$sickness_prevention,$sickness_caution,$sickness_note) {
		$columns = array ('sickness','sickness_info','sickness_causes','sickness_signs','sickness_treatment','sickness_treatment_precautions','sickness_prevention','sickness_caution','sickness_note');
		$records = array ($sickness,$sickness_info,$sickness_causes,$sickness_signs,$sickness_treatment,$sickness_treatment_precautions,$sickness_prevention,$sickness_caution,$sickness_note);
		$id_sickness_ = $this->query_from_children_sickness ( $columns, $records );
		return count($id_sickness_)>0 ? $id_sickness_ [0] ['id_sickness'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_)>0 ? $sickness_ [0] ['sickness'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_info 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_info($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_info_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_info_)>0 ? $sickness_info_ [0] ['sickness_info'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_causes 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_causes($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_causes_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_causes_)>0 ? $sickness_causes_ [0] ['sickness_causes'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_signs 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_signs($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_signs_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_signs_)>0 ? $sickness_signs_ [0] ['sickness_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_treatment 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_treatment($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_treatment_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_treatment_)>0 ? $sickness_treatment_ [0] ['sickness_treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_treatment_precautions 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_treatment_precautions($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_treatment_precautions_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_treatment_precautions_)>0 ? $sickness_treatment_precautions_ [0] ['sickness_treatment_precautions'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_prevention 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_prevention($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_prevention_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_prevention_)>0 ? $sickness_prevention_ [0] ['sickness_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_caution 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_caution($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_caution_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_caution_)>0 ? $sickness_caution_ [0] ['sickness_caution'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of sickness_note 
	* based on the value of $id_sickness passed to the function
	*/
	public function get_sickness_note($id_sickness) {
		$columns = array ('id_sickness');
		$records = array ($id_sickness);
		$sickness_note_ = $this->query_from_children_sickness ( $columns, $records );
		return count($sickness_note_)>0 ? $sickness_note_ [0] ['sickness_note'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [children_sickness] 
	*/
	public static function get_table() {
		return 'children_sickness';
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
	* Used  to calculate the number of times a record exists in the table [children_sickness]
	*
	* @return the number of times a record exists exists in the table [children_sickness]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[children_sickness]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_children_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [children_sickness]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_children_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [children_sickness]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_children_sickness(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_children_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_children_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_children_sickness(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [children_sickness]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[children_sickness]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [children_sickness]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [children_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
