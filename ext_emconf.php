<?php

########################################################################
# Extension Manager/Repository config file for ext "formhandler_clearlog_task".
#
# Auto generated 18-12-2013 15:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Formhandler ClearLog Task',
	'description' => 'Add formhandler log table to table garbage collection task',
	'category' => 'misc',
	'author' => 'Dan Untenzu',
	'author_email' => 'untenzu@webit.de',
	'author_company' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'php' => '5.5.0-7.0.99',
			'typo3' => '6.2.0-7.6.99',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>