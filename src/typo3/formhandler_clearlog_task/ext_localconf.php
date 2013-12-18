<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$version = class_exists('t3lib_utility_VersionNumber')
	? t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version)
	: t3lib_div::int_from_ver(TYPO3_version);
if ($version >= 6000000) {
	// Register formhandler log table in table garbage collection task
	if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask']['options']['tables']['tx_formhandler_log'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Scheduler\\Task\\TableGarbageCollectionTask']['options']['tables']['tx_formhandler_log'] = array(
			'dateField' => 'tstamp',
			'expirePeriod' => 180
		);
	}
}
else {
	// …same for TYPO3 CMS < 6.0
	if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_scheduler_TableGarbageCollection']['options']['tables']['tx_formhandler_log'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_scheduler_TableGarbageCollection']['options']['tables']['tx_formhandler_log'] = array(
			'dateField' => 'tstamp',
			'expirePeriod' => 180
		);
	}
}

?>