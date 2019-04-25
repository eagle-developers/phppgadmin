<?php

/**
 * PostgreSQL 10 support
 *
 */

include_once('./classes/database/Postgres11.php');

class Postgres10 extends Postgres11 {

	var $major_version = 10;

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc10.php');
		return $this->help_page;
	}

}
?>
