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

	
class Firstaids {

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
	* private class variable ailment
	*/
	private $_ailment;
	
	/**
	* returns the value of ailment
	*/
	public function _get_ailment() {
		return $this->_ailment;
	}
	
	/**
	* sets the value of ailment
	*/
	public function set_ailment($ailment) {
		$this->_ailment = $ailment;
	}
	
	
	/**
	* private class variable ailment_information
	*/
	private $_ailment_information;
	
	/**
	* returns the value of ailment_information
	*/
	public function _get_ailment_information() {
		return $this->_ailment_information;
	}
	
	/**
	* sets the value of ailment_information
	*/
	public function set_ailment_information($ailment_information) {
		$this->_ailment_information = $ailment_information;
	}
	
	
	/**
	* private class variable ailment_causes
	*/
	private $_ailment_causes;
	
	/**
	* returns the value of ailment_causes
	*/
	public function _get_ailment_causes() {
		return $this->_ailment_causes;
	}
	
	/**
	* sets the value of ailment_causes
	*/
	public function set_ailment_causes($ailment_causes) {
		$this->_ailment_causes = $ailment_causes;
	}
	
	
	/**
	* private class variable ailment_prevention
	*/
	private $_ailment_prevention;
	
	/**
	* returns the value of ailment_prevention
	*/
	public function _get_ailment_prevention() {
		return $this->_ailment_prevention;
	}
	
	/**
	* sets the value of ailment_prevention
	*/
	public function set_ailment_prevention($ailment_prevention) {
		$this->_ailment_prevention = $ailment_prevention;
	}
	
	
	/**
	* private class variable ailment_signs
	*/
	private $_ailment_signs;
	
	/**
	* returns the value of ailment_signs
	*/
	public function _get_ailment_signs() {
		return $this->_ailment_signs;
	}
	
	/**
	* sets the value of ailment_signs
	*/
	public function set_ailment_signs($ailment_signs) {
		$this->_ailment_signs = $ailment_signs;
	}
	
	
	/**
	* private class variable ailment_symptoms
	*/
	private $_ailment_symptoms;
	
	/**
	* returns the value of ailment_symptoms
	*/
	public function _get_ailment_symptoms() {
		return $this->_ailment_symptoms;
	}
	
	/**
	* sets the value of ailment_symptoms
	*/
	public function set_ailment_symptoms($ailment_symptoms) {
		$this->_ailment_symptoms = $ailment_symptoms;
	}
	
	
	/**
	* private class variable ailment_cautions
	*/
	private $_ailment_cautions;
	
	/**
	* returns the value of ailment_cautions
	*/
	public function _get_ailment_cautions() {
		return $this->_ailment_cautions;
	}
	
	/**
	* sets the value of ailment_cautions
	*/
	public function set_ailment_cautions($ailment_cautions) {
		$this->_ailment_cautions = $ailment_cautions;
	}
	
	
	/**
	* private class variable ailment_medication
	*/
	private $_ailment_medication;
	
	/**
	* returns the value of ailment_medication
	*/
	public function _get_ailment_medication() {
		return $this->_ailment_medication;
	}
	
	/**
	* sets the value of ailment_medication
	*/
	public function set_ailment_medication($ailment_medication) {
		$this->_ailment_medication = $ailment_medication;
	}
	
	
	/**
	* private class variable ailment_treatment
	*/
	private $_ailment_treatment;
	
	/**
	* returns the value of ailment_treatment
	*/
	public function _get_ailment_treatment() {
		return $this->_ailment_treatment;
	}
	
	/**
	* sets the value of ailment_treatment
	*/
	public function set_ailment_treatment($ailment_treatment) {
		$this->_ailment_treatment = $ailment_treatment;
	}
	
	
	/**
	* private class variable ailment_treatment_precautions
	*/
	private $_ailment_treatment_precautions;
	
	/**
	* returns the value of ailment_treatment_precautions
	*/
	public function _get_ailment_treatment_precautions() {
		return $this->_ailment_treatment_precautions;
	}
	
	/**
	* sets the value of ailment_treatment_precautions
	*/
	public function set_ailment_treatment_precautions($ailment_treatment_precautions) {
		$this->_ailment_treatment_precautions = $ailment_treatment_precautions;
	}
	
	
	/**
	* private class variable ailment_treatment_position
	*/
	private $_ailment_treatment_position;
	
	/**
	* returns the value of ailment_treatment_position
	*/
	public function _get_ailment_treatment_position() {
		return $this->_ailment_treatment_position;
	}
	
	/**
	* sets the value of ailment_treatment_position
	*/
	public function set_ailment_treatment_position($ailment_treatment_position) {
		$this->_ailment_treatment_position = $ailment_treatment_position;
	}
	
	
	/**
	* private class variable ailment_short_notes
	*/
	private $_ailment_short_notes;
	
	/**
	* returns the value of ailment_short_notes
	*/
	public function _get_ailment_short_notes() {
		return $this->_ailment_short_notes;
	}
	
	/**
	* sets the value of ailment_short_notes
	*/
	public function set_ailment_short_notes($ailment_short_notes) {
		$this->_ailment_short_notes = $ailment_short_notes;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_firstaid 
	* based on the value of $ailment,$ailment_information,$ailment_causes,$ailment_prevention,$ailment_signs,$ailment_symptoms,$ailment_cautions,$ailment_medication,$ailment_treatment,$ailment_treatment_precautions,$ailment_treatment_position,$ailment_short_notes passed to the function
	*/
	public function get_id_firstaid($ailment,$ailment_information,$ailment_causes,$ailment_prevention,$ailment_signs,$ailment_symptoms,$ailment_cautions,$ailment_medication,$ailment_treatment,$ailment_treatment_precautions,$ailment_treatment_position,$ailment_short_notes) {
		$columns = array ('ailment','ailment_information','ailment_causes','ailment_prevention','ailment_signs','ailment_symptoms','ailment_cautions','ailment_medication','ailment_treatment','ailment_treatment_precautions','ailment_treatment_position','ailment_short_notes');
		$records = array ($ailment,$ailment_information,$ailment_causes,$ailment_prevention,$ailment_signs,$ailment_symptoms,$ailment_cautions,$ailment_medication,$ailment_treatment,$ailment_treatment_precautions,$ailment_treatment_position,$ailment_short_notes);
		$id_firstaid_ = $this->query_from_firstaids ( $columns, $records );
		return count($id_firstaid_)>0 ? $id_firstaid_ [0] ['id_firstaid'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_)>0 ? $ailment_ [0] ['ailment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_information 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_information($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_information_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_information_)>0 ? $ailment_information_ [0] ['ailment_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_causes 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_causes($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_causes_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_causes_)>0 ? $ailment_causes_ [0] ['ailment_causes'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_prevention 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_prevention($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_prevention_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_prevention_)>0 ? $ailment_prevention_ [0] ['ailment_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_signs 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_signs($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_signs_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_signs_)>0 ? $ailment_signs_ [0] ['ailment_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_symptoms 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_symptoms($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_symptoms_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_symptoms_)>0 ? $ailment_symptoms_ [0] ['ailment_symptoms'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_cautions 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_cautions($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_cautions_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_cautions_)>0 ? $ailment_cautions_ [0] ['ailment_cautions'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_medication 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_medication($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_medication_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_medication_)>0 ? $ailment_medication_ [0] ['ailment_medication'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_treatment 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_treatment($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_treatment_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_treatment_)>0 ? $ailment_treatment_ [0] ['ailment_treatment'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_treatment_precautions 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_treatment_precautions($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_treatment_precautions_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_treatment_precautions_)>0 ? $ailment_treatment_precautions_ [0] ['ailment_treatment_precautions'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_treatment_position 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_treatment_position($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_treatment_position_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_treatment_position_)>0 ? $ailment_treatment_position_ [0] ['ailment_treatment_position'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of ailment_short_notes 
	* based on the value of $id_firstaid passed to the function
	*/
	public function get_ailment_short_notes($id_firstaid) {
		$columns = array ('id_firstaid');
		$records = array ($id_firstaid);
		$ailment_short_notes_ = $this->query_from_firstaids ( $columns, $records );
		return count($ailment_short_notes_)>0 ? $ailment_short_notes_ [0] ['ailment_short_notes'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [firstaids] 
	*/
	public static function get_table() {
		return 'firstaids';
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
	* Used  to calculate the number of times a record exists in the table [firstaids]
	*
	* @return the number of times a record exists exists in the table [firstaids]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[firstaids]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_firstaids(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [firstaids]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_firstaids(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [firstaids]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_firstaids(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_firstaids(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_firstaids(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_firstaids(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [firstaids]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[firstaids]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [firstaids]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [firstaids] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
