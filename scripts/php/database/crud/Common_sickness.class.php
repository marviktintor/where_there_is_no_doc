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

	
class Common_sickness {

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
	* private class variable common_sickness
	*/
	private $_common_sickness;
	
	/**
	* returns the value of common_sickness
	*/
	public function _get_common_sickness() {
		return $this->_common_sickness;
	}
	
	/**
	* sets the value of common_sickness
	*/
	public function set_common_sickness($common_sickness) {
		$this->_common_sickness = $common_sickness;
	}
	
	
	/**
	* private class variable common_sickness_information
	*/
	private $_common_sickness_information;
	
	/**
	* returns the value of common_sickness_information
	*/
	public function _get_common_sickness_information() {
		return $this->_common_sickness_information;
	}
	
	/**
	* sets the value of common_sickness_information
	*/
	public function set_common_sickness_information($common_sickness_information) {
		$this->_common_sickness_information = $common_sickness_information;
	}
	
	
	/**
	* private class variable common_sickness_causes
	*/
	private $_common_sickness_causes;
	
	/**
	* returns the value of common_sickness_causes
	*/
	public function _get_common_sickness_causes() {
		return $this->_common_sickness_causes;
	}
	
	/**
	* sets the value of common_sickness_causes
	*/
	public function set_common_sickness_causes($common_sickness_causes) {
		$this->_common_sickness_causes = $common_sickness_causes;
	}
	
	
	/**
	* private class variable common_sickness_signs
	*/
	private $_common_sickness_signs;
	
	/**
	* returns the value of common_sickness_signs
	*/
	public function _get_common_sickness_signs() {
		return $this->_common_sickness_signs;
	}
	
	/**
	* sets the value of common_sickness_signs
	*/
	public function set_common_sickness_signs($common_sickness_signs) {
		$this->_common_sickness_signs = $common_sickness_signs;
	}
	
	
	/**
	* private class variable common_sickness_variants
	*/
	private $_common_sickness_variants;
	
	/**
	* returns the value of common_sickness_variants
	*/
	public function _get_common_sickness_variants() {
		return $this->_common_sickness_variants;
	}
	
	/**
	* sets the value of common_sickness_variants
	*/
	public function set_common_sickness_variants($common_sickness_variants) {
		$this->_common_sickness_variants = $common_sickness_variants;
	}
	
	
	/**
	* private class variable common_sickness_prevention
	*/
	private $_common_sickness_prevention;
	
	/**
	* returns the value of common_sickness_prevention
	*/
	public function _get_common_sickness_prevention() {
		return $this->_common_sickness_prevention;
	}
	
	/**
	* sets the value of common_sickness_prevention
	*/
	public function set_common_sickness_prevention($common_sickness_prevention) {
		$this->_common_sickness_prevention = $common_sickness_prevention;
	}
	
	
	/**
	* private class variable common_sickness_treatment
	*/
	private $_common_sickness_treatment;
	
	/**
	* returns the value of common_sickness_treatment
	*/
	public function _get_common_sickness_treatment() {
		return $this->_common_sickness_treatment;
	}
	
	/**
	* sets the value of common_sickness_treatment
	*/
	public function set_common_sickness_treatment($common_sickness_treatment) {
		$this->_common_sickness_treatment = $common_sickness_treatment;
	}
	
	
	/**
	* private class variable common_sickness_medicine
	*/
	private $_common_sickness_medicine;
	
	/**
	* returns the value of common_sickness_medicine
	*/
	public function _get_common_sickness_medicine() {
		return $this->_common_sickness_medicine;
	}
	
	/**
	* sets the value of common_sickness_medicine
	*/
	public function set_common_sickness_medicine($common_sickness_medicine) {
		$this->_common_sickness_medicine = $common_sickness_medicine;
	}
	
	
	/**
	* private class variable common_sickness_caution
	*/
	private $_common_sickness_caution;
	
	/**
	* returns the value of common_sickness_caution
	*/
	public function _get_common_sickness_caution() {
		return $this->_common_sickness_caution;
	}
	
	/**
	* sets the value of common_sickness_caution
	*/
	public function set_common_sickness_caution($common_sickness_caution) {
		$this->_common_sickness_caution = $common_sickness_caution;
	}
	
	
	/**
	* private class variable common_sickness_note
	*/
	private $_common_sickness_note;
	
	/**
	* returns the value of common_sickness_note
	*/
	public function _get_common_sickness_note() {
		return $this->_common_sickness_note;
	}
	
	/**
	* sets the value of common_sickness_note
	*/
	public function set_common_sickness_note($common_sickness_note) {
		$this->_common_sickness_note = $common_sickness_note;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_common_sickness 
	* based on the value of $common_sickness,$common_sickness_information,$common_sickness_causes,$common_sickness_signs,$common_sickness_variants,$common_sickness_prevention,$common_sickness_treatment,$common_sickness_medicine,$common_sickness_caution,$common_sickness_note passed to the function
	*/
	public function get_id_common_sickness($common_sickness,$common_sickness_information,$common_sickness_causes,$common_sickness_signs,$common_sickness_variants,$common_sickness_prevention,$common_sickness_treatment,$common_sickness_medicine,$common_sickness_caution,$common_sickness_note) {
		$columns = array ('common_sickness','common_sickness_information','common_sickness_causes','common_sickness_signs','common_sickness_variants','common_sickness_prevention','common_sickness_treatment','common_sickness_medicine','common_sickness_caution','common_sickness_note');
		$records = array ($common_sickness,$common_sickness_information,$common_sickness_causes,$common_sickness_signs,$common_sickness_variants,$common_sickness_prevention,$common_sickness_treatment,$common_sickness_medicine,$common_sickness_caution,$common_sickness_note);
		$id_common_sickness_ = $this->query_from_common_sickness ( $columns, $records );
		return count($id_common_sickness_)>0 ? $id_common_sickness_ [0] ['id_common_sickness'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_)>0 ? $common_sickness_ [0] ['common_sickness'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_information 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_information($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_information_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_information_)>0 ? $common_sickness_information_ [0] ['common_sickness_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_causes 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_causes($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_causes_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_causes_)>0 ? $common_sickness_causes_ [0] ['common_sickness_causes'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_signs 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_signs($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_signs_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_signs_)>0 ? $common_sickness_signs_ [0] ['common_sickness_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_variants 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_variants($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_variants_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_variants_)>0 ? $common_sickness_variants_ [0] ['common_sickness_variants'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_prevention 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_prevention($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_prevention_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_prevention_)>0 ? $common_sickness_prevention_ [0] ['common_sickness_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_treatment 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_treatment($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_treatment_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_treatment_)>0 ? $common_sickness_treatment_ [0] ['common_sickness_treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_medicine 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_medicine($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_medicine_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_medicine_)>0 ? $common_sickness_medicine_ [0] ['common_sickness_medicine'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_caution 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_caution($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_caution_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_caution_)>0 ? $common_sickness_caution_ [0] ['common_sickness_caution'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of common_sickness_note 
	* based on the value of $id_common_sickness passed to the function
	*/
	public function get_common_sickness_note($id_common_sickness) {
		$columns = array ('id_common_sickness');
		$records = array ($id_common_sickness);
		$common_sickness_note_ = $this->query_from_common_sickness ( $columns, $records );
		return count($common_sickness_note_)>0 ? $common_sickness_note_ [0] ['common_sickness_note'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [common_sickness] 
	*/
	public static function get_table() {
		return 'common_sickness';
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
	* Used  to calculate the number of times a record exists in the table [common_sickness]
	*
	* @return the number of times a record exists exists in the table [common_sickness]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[common_sickness]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_common_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [common_sickness]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_common_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [common_sickness]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_common_sickness(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_common_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_common_sickness(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_common_sickness(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [common_sickness]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[common_sickness]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [common_sickness]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [common_sickness] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
