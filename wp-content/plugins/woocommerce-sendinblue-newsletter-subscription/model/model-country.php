<?php
/**
 * Model class <i>SIB_Model_Country</i> represents country code
 *
 * @package SIB_Model
 */

class SIB_Model_Country {

	/**
	 * Tab table name
	 */
	const TABLE_NAME = 'sib_model_country';

	/** Create Table */
	public static function create_table() {
		global $wpdb;
		
		// Create list table.
		$creation_query =
			'CREATE TABLE IF NOT EXISTS ' . $wpdb->prefix . self::TABLE_NAME . ' (
			`id` int(20) NOT NULL AUTO_INCREMENT,
			`iso_code` varchar(255),
            `call_prefix` int(10),
            PRIMARY KEY (`id`)
			)';
		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
		$result         = $wpdb->query( $creation_query );

		return $result;
	}

	/**
	 * Remove table.
	 */
	public static function remove_table() {
		global $wpdb;
		$query = 'DROP TABLE IF EXISTS ' . $wpdb->prefix . self::TABLE_NAME;

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
		$wpdb->query( $query );
	}

	/**
	 * Get data by id
	 *
	 * @param $id
	 */
	public static function get_prefix( $code ) {
		global $wpdb;
		$tableName = $wpdb->prefix . self::TABLE_NAME;

		// phpcs:ignore
		$results = $wpdb->get_var( $wpdb->prepare( 'select call_prefix from ' . $tableName . ' where iso_code= %s ', array( esc_sql( $code ) ) ) );

		if ( null !== $results ) {
			return $results;
		} else {
			return false;
		}
	}

	/** Add record */
	public static function add_record( $iso_code, $call_prefix ) {
		global $wpdb;
		$tableName = $wpdb->prefix . self::TABLE_NAME;

		// phpcs:ignore
		$wpdb->query( $wpdb->prepare( 'INSERT INTO ' . $tableName . '(iso_code,call_prefix)  VALUES (%s,%d)', array( esc_sql( $iso_code ), esc_sql( $call_prefix ) ) ) );

		return true;

	}

	public static function Initialize( $data ) {
		foreach ( $data as $code => $prefix ) {
			self::add_record( $code, $prefix );
		}
	}

	/** Add prefix to the table */
	public static function add_prefix() {
		global $wpdb;

		// phpcs:ignore
		if ( self::TABLE_NAME === $wpdb->get_var( $wpdb->prepare( "SHOW TABLES LIKE %s", array( self::TABLE_NAME ) ) ) ) {
				$query = 'ALTER TABLE ' . self::TABLE_NAME . ' RENAME TO ' . $wpdb->prefix . self::TABLE_NAME;
				// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
				$wpdb->query( $query ); // db call ok; no-cache ok.
		}
	}

}
