=========================
Formhandler ClearLog Task
=========================

:Extension name: Formhandler ClearLog Task
:Extension key: formhandler_clearlog_task
:Version: 0.1.0
:Description: Add formhandler log table to table garbage collection task
:Language: en
:Author: Dan Untenzu
:Creation: 2013-12-18
:Keywords: formhandler, log, clear, cleanup, storage
:Licence: Open Content License available from `www.opencontent.org/opl.shtml <http://www.opencontent.org/opl.shtml>`_

EXT: Formhandler ClearLog Task
==============================

Extension Key: formhandler_clearlog_task

Author: Dan Untenzu <untenzu@webit.de> for webit! Gesellschaft für
neue Medien mbH (http://www.webit.de/)

This document is published under the Open Content License, available
from `www.opencontent.org/opl.shtml <http://www.opencontent.org/opl.shtml>`_.

The content of this document is related to TYPO3, a GNU/GPL
CMS/Framework available from `www.typo3.org <http://www.typo3.org/>`_.

The extension is published under the GNU General Public License
version 2, available from `www.gnu.org/copyleft/gpl.html
<http://www.gnu.org/copyleft/gpl.html>`_

**Table of Contents**

.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

Introduction
------------

What does it do?
^^^^^^^^^^^^^^^^

- This backend extension adds the formhandler log table to the
  »Table garbage collection« scheduler task

- Remove entries in the formhandler log older than a given number
  of days automatically.

Configuration
-------------

- Grab this extension from TER and install it

- The extension won't install any tables or any additional fields

- Open the scheduler module, add a task, select »Table garbage collection«

- Select »tx_formhandler_log« (the formhandler log table)

- Adjust the other values as desired and set a frequency

Reference
^^^^^^^^^

- None

Known problems
--------------

- None

Please do not hesitate to contact me if you find any bugs or even
better yet, send a pull request on GitHub.

.. tip::
	Issue tracker: https://github.com/webit-de/typo3-formhandler_clearlog_task/issues

To-Do list
----------

- None

Please do not hesitate to contact me if you have a wishlist or usefull
patches.

.. tip::
	Issue tracker: https://github.com/webit-de/typo3-formhandler_clearlog_task/issues

Changelog
---------

- https://github.com/webit-de/typo3-formhandler_clearlog_task/blob/master/src/typo3/formhandler_clearlog_task/Changelog.md

Contribution
------------

	TYPO3 - inspiring people to share!

This TYPO3 extension is Open Source, so please use, patch, extend or fork it.

- https://github.com/webit-de/typo3-formhandler_clearlog_task/
