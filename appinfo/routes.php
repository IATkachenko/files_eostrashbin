<?php
/**
 * @author Lukas Reschke <lukas@statuscode.ch>
 * @author Roeland Jago Douma <rullzer@owncloud.com>
 * @author Vincent Petry <pvince81@owncloud.com>
 *
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\Files_EosTrashbin\AppInfo;

$application = new Application();

$this->create('files_eostrashbin_ajax_delete', 'ajax/delete.php')
	->actionInclude('files_eostrashbin/ajax/delete.php');
$this->create('files_eostrashbin_ajax_isEmpty', 'ajax/isEmpty.php')
	->actionInclude('files_eostrashbin/ajax/isEmpty.php');
$this->create('files_eostrashbin_ajax_list', 'ajax/list.php')
	->actionInclude('files_eostrashbin/ajax/list.php');
$this->create('files_eostrashbin_ajax_undelete', 'ajax/undelete.php')
	->actionInclude('files_eostrashbin/ajax/undelete.php');

