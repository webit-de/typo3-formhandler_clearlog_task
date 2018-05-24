<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Register formhandler log table in "Table garbage collection" task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['tx_formhandler_log'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['tx_formhandler_log'] = array(
        'dateField' => 'tstamp',
        'expirePeriod' => 180
    );
}

// Register formhandler log table in "Anonymize IP addresses in database tables" task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\IpAnonymizationTask::class]['options']['tables']['tx_formhandler_log'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\IpAnonymizationTask::class]['options']['tables']['tx_formhandler_log'] = array(
        'dateField' => 'crdate',
        'ipField' => 'ip'
    );
}
