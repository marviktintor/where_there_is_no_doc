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

	
class Worms_and_intestinal_parasites {

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
	* private class variable worm_and_intestinal_parasite
	*/
	private $_worm_and_intestinal_parasite;
	
	/**
	* returns the value of worm_and_intestinal_parasite
	*/
	public function _get_worm_and_intestinal_parasite() {
		return $this->_worm_and_intestinal_parasite;
	}
	
	/**
	* sets the value of worm_and_intestinal_parasite
	*/
	public function set_worm_and_intestinal_parasite($worm_and_intestinal_parasite) {
		$this->_worm_and_intestinal_parasite = $worm_and_intestinal_parasite;
	}
	
	
	/**
	* private class variable worm_and_intestinal_parasite_information
	*/
	private $_worm_and_intestinal_parasite_information;
	
	/**
	* returns the value of worm_and_intestinal_parasite_information
	*/
	public function _get_worm_and_intestinal_parasite_information() {
		return $this->_worm_and_intestinal_parasite_information;
	}
	
	/**
	* sets the value of worm_and_intestinal_parasite_information
	*/
	public function set_worm_and_intestinal_parasite_information($worm_and_intestinal_parasite_information) {
		$this->_worm_and_intestinal_parasite_information = $worm_and_intestinal_parasite_information;
	}
	
	
	/**
	* private class variable infection_signs
	*/
	private $_infection_signs;
	
	/**
	* returns the value of infection_signs
	*/
	public function _get_infection_signs() {
		return $this->_infection_signs;
	}
	
	/**
	* sets the value of infection_signs
	*/
	public function set_infection_signs($infection_signs) {
		$this->_infection_signs = $infection_signs;
	}
	
	
	/**
	* private class variable transmission
	*/
	private $_transmission;
	
	/**
	* returns the value of transmission
	*/
	public function _get_transmission() {
		return $this->_transmission;
	}
	
	/**
	* sets the value of transmission
	*/
	public function set_transmission($transmission) {
		$this->_transmission = $transmission;
	}
	
	
	/**
	* private class variable health_effect
	*/
	private $_health_effect;
	
	/**
	* returns the value of health_effect
	*/
	public function _get_health_effect() {
		return $this->_health_effect;
	}
	
	/**
	* sets the value of health_effect
	*/
	public function set_health_effect($health_effect) {
		$this->_health_effect = $health_effect;
	}
	
	
	/**
	* private class variable treatment_and_prevention
	*/
	private $_treatment_and_prevention;
	
	/**
	* returns the value of treatment_and_prevention
	*/
	public function _get_treatment_and_prevention() {
		return $this->_treatment_and_prevention;
	}
	
	/**
	* sets the value of treatment_and_prevention
	*/
	public function set_treatment_and_prevention($treatment_and_prevention) {
		$this->_treatment_and_prevention = $treatment_and_prevention;
	}
	
	
	/**
	* private class variable worm_and_intestinal_parasite_caution
	*/
	private $_worm_and_intestinal_parasite_caution;
	
	/**
	* returns the value of worm_and_intestinal_parasite_caution
	*/
	public function _get_worm_and_intestinal_parasite_caution() {
		return $this->_worm_and_intestinal_parasite_caution;
	}
	
	/**
	* sets the value of worm_and_intestinal_parasite_caution
	*/
	public function set_worm_and_intestinal_parasite_caution($worm_and_intestinal_parasite_caution) {
		$this->_worm_and_intestinal_parasite_caution = $worm_and_intestinal_parasite_caution;
	}
	

		
		
	/**
	* Performs a database query and returns the value of id_worm_and_intestinal_parasite 
	* based on the value of $worm_and_intestinal_parasite,$worm_and_intestinal_parasite_information,$infection_signs,$transmission,$health_effect,$treatment_and_prevention,$worm_and_intestinal_parasite_caution passed to the function
	*/
	public function get_id_worm_and_intestinal_parasite($worm_and_intestinal_parasite,$worm_and_intestinal_parasite_information,$infection_signs,$transmission,$health_effect,$treatment_and_prevention,$worm_and_intestinal_parasite_caution) {
		$columns = array ('worm_and_intestinal_parasite','worm_and_intestinal_parasite_information','infection_signs','transmission','health_effect','treatment_and_prevention','worm_and_intestinal_parasite_caution');
		$records = array ($worm_and_intestinal_parasite,$worm_and_intestinal_parasite_information,$infection_signs,$transmission,$health_effect,$treatment_and_prevention,$worm_and_intestinal_parasite_caution);
		$id_worm_and_intestinal_parasite_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($id_worm_and_intestinal_parasite_)>0 ? $id_worm_and_intestinal_parasite_ [0] ['id_worm_and_intestinal_parasite'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of worm_and_intestinal_parasite 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_worm_and_intestinal_parasite($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$worm_and_intestinal_parasite_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($worm_and_intestinal_parasite_)>0 ? $worm_and_intestinal_parasite_ [0] ['worm_and_intestinal_parasite'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of worm_and_intestinal_parasite_information 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_worm_and_intestinal_parasite_information($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$worm_and_intestinal_parasite_information_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($worm_and_intestinal_parasite_information_)>0 ? $worm_and_intestinal_parasite_information_ [0] ['worm_and_intestinal_parasite_information'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of infection_signs 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_infection_signs($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$infection_signs_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($infection_signs_)>0 ? $infection_signs_ [0] ['infection_signs'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of transmission 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_transmission($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$transmission_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($transmission_)>0 ? $transmission_ [0] ['transmission'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of health_effect 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_health_effect($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$health_effect_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($health_effect_)>0 ? $health_effect_ [0] ['health_effect'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of treatment_and_prevention 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_treatment_and_prevention($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$treatment_and_prevention_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($treatment_and_prevention_)>0 ? $treatment_and_prevention_ [0] ['treatment_and_prevention'] : null;
	}
	
	
	/**
	* Performs a database query and returns the value of worm_and_intestinal_parasite_caution 
	* based on the value of $id_worm_and_intestinal_parasite passed to the function
	*/
	public function get_worm_and_intestinal_parasite_caution($id_worm_and_intestinal_parasite) {
		$columns = array ('id_worm_and_intestinal_parasite');
		$records = array ($id_worm_and_intestinal_parasite);
		$worm_and_intestinal_parasite_caution_ = $this->query_from_worms_and_intestinal_parasites ( $columns, $records );
		return count($worm_and_intestinal_parasite_caution_)>0 ? $worm_and_intestinal_parasite_caution_ [0] ['worm_and_intestinal_parasite_caution'] : null;
	}
	

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return Table Name [worms_and_intestinal_parasites] 
	*/
	public static function get_table() {
		return 'worms_and_intestinal_parasites';
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
	* Used  to calculate the number of times a record exists in the table [worms_and_intestinal_parasites]
	*
	* @return the number of times a record exists exists in the table [worms_and_intestinal_parasites]
	*/
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Inserts data into the table[worms_and_intestinal_parasites]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	public function insert_records_to_worms_and_intestinal_parasites(Array $columns, Array $records, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Deletes all the records that meets the passed criteria from the table [worms_and_intestinal_parasites]
	*  
	* @return number of deleted rows
	*/
	public function delete_record_from_worms_and_intestinal_parasites(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [worms_and_intestinal_parasites]
	*  
	* @return number of updated rows
	*/
	public function update_record_in_worms_and_intestinal_parasites(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function fetch_assoc_in_worms_and_intestinal_parasites(Array $columns, Array $records, $printSQL = false) {
		return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query_from_worms_and_intestinal_parasites(Array $columns, Array $records, $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function search_in_worms_and_intestinal_parasites(Array $columns, Array $records, $printSQL = false) {
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
	* Deletes all the records that meets the passed criteria from the table [worms_and_intestinal_parasites]
	*  
	* @return number of deleted rows
	*/
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
	* Inserts data into the table[worms_and_intestinal_parasites]
	*
	* @return 1 if data was inserted,0 otherwise
	*/
	private function insert_records($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* updates all the records that meets the passed criteria from the table [worms_and_intestinal_parasites]
	*  
	* @return number of updated rows
	*/
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function fetch_assoc($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	public function query($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records, $printSQL );
	}
	
	/**
	* Gets an Associative array of the records in the table [worms_and_intestinal_parasites] that meets the passed criteria
	*  
	* @return associative array of the records that are found after performing the query
	*/
	private function search($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $printSQL );
	}
}
?>
