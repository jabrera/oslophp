<<<<<<< HEAD
<?php
/**
 * Copyright 2017 Juvar Abrera
 *
 * // Apache
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * // PHP Version 5
 *
 * This source file is subject to version 3.01 of the PHP license that
 * is available through the world-wide-web at the following
 * URI: http://www.php.net/license/3_01.txt.  If you did not receive
 * a copy of the PHP License and are unable to obtain it through the
 * web, please send a note to license@php.net so we can mail you
 * a copy immediately.
 *
 * @project			 Moon PHP
 * @package			 moonphp
 * @author			  Juvar Abrera <me@juvarabrera.com>
 * @copyright		   2017 Juvar Abrera
 */

namespace Oslo\Database;

/**
 * Uses sqlsrv functions for websites that uses SQL Server.
 * Uses Interface IDatabase. See interface for function documentation.
 *
 * Class SQLSRV
 *
 * @package Oslo\Database
 *
 */
class SQLSRV {

	/**
	 * Instance of the connection of the database
	 *
	 * @var MySQL Link Identifier
	 */
	protected $link;

	/**
	 * Default values can be change in /library/config.php
	 *
	 * @param $host 		database host name
	 * @param $user			database username
	 * @param $pass			database password
	 * @param $database		database name
	 *
	 */
	public function connect($host, $user, $pass, $database) {
		$connectionInfo = array(
			"UID" => $user,
			"pwd" => $pass,
			"Database" => $database,
			"LoginTimeout" => 30,
			"Encrypt" => 1,
			"ReturnDatesAsStrings" => true
		);
		$this->link = sqlsrv_connect($host, $connectionInfo);
	}

	/**
	 * This will fetch data from the query. If $singleRow
	 * is TRUE, only the first data will be taken.
	 *
	 * @param Query $query
	 * @param bool  $singleRow
	 *
	 * @return Query
	 *
	 */
	public function read(Query $query, $singleRow = false) {
		$q = sqlsrv_query($this->link, $query->get());
		$result = array();
		while($row = sqlsrv_fetch_array($q, SQLSRV_FETCH_ASSOC)) {
			if($singleRow) {
				$result = $row;
				break;
			}
			$result[] = $row;
		}
		$query->setResult($result);
		return $query;
	}

	/**
	 * Executes the query from the object Query.
	 *
	 * @param Query $query
	 *
	 * @return Query
	 *
	 */
	public function execute(Query $query) {
		$query->setResult(sqlsrv_query($this->link, $query->get()));
		return $query;
	}

	/**
	 * Frees resources from a query.
	 *
	 * @param $q
	 *
	 */
	public function free_resources($q) {
		sqlsrv_free_stmt($q);
	}

	/**
	 *	Disconnects you to the current database connection
	 */
	public function disconnect() {
		sqlsrv_close($this->link);
	}

=======
<?php
/**
 * Copyright 2017 Juvar Abrera
 *
 * // Apache
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * // PHP Version 5
 *
 * This source file is subject to version 3.01 of the PHP license that
 * is available through the world-wide-web at the following
 * URI: http://www.php.net/license/3_01.txt.  If you did not receive
 * a copy of the PHP License and are unable to obtain it through the
 * web, please send a note to license@php.net so we can mail you
 * a copy immediately.
 *
 * @project			 Moon PHP
 * @package			 moonphp
 * @author			  Juvar Abrera <me@juvarabrera.com>
 * @copyright		   2017 Juvar Abrera
 */

namespace Oslo\Database;

/**
 * Uses sqlsrv functions for websites that uses SQL Server.
 * Uses Interface IDatabase. See interface for function documentation.
 *
 * Class SQLSRV
 *
 * @package Oslo\Database
 *
 */
class SQLSRV {

	/**
	 * Instance of the connection of the database
	 *
	 * @var MySQL Link Identifier
	 */
	protected $link;

	/**
	 * Default values can be change in /library/config.php
	 *
	 * @param $host 		database host name
	 * @param $user			database username
	 * @param $pass			database password
	 * @param $database		database name
	 *
	 */
	public function connect($host, $user, $pass, $database) {
		$connectionInfo = array(
			"UID" => $user,
			"pwd" => $pass,
			"Database" => $database,
			"LoginTimeout" => 30,
			"Encrypt" => 1,
			"ReturnDatesAsStrings" => true
		);
		$this->link = sqlsrv_connect($host, $connectionInfo);
	}

	/**
	 * This will fetch data from the query. If $singleRow
	 * is TRUE, only the first data will be taken.
	 *
	 * @param Query $query
	 * @param bool  $singleRow
	 *
	 * @return Query
	 *
	 */
	public function read(Query $query, $singleRow = false) {
		$q = sqlsrv_query($this->link, $query->get());
		$result = array();
		while($row = sqlsrv_fetch_array($q, SQLSRV_FETCH_ASSOC)) {
			if($singleRow) {
				$result = $row;
				break;
			}
			$result[] = $row;
		}
		$query->setResult($result);
		return $query;
	}

	/**
	 * Executes the query from the object Query.
	 *
	 * @param Query $query
	 *
	 * @return Query
	 *
	 */
	public function execute(Query $query) {
		$query->setResult(sqlsrv_query($this->link, $query->get()));
		return $query;
	}

	/**
	 * Frees resources from a query.
	 *
	 * @param $q
	 *
	 */
	public function free_resources($q) {
		sqlsrv_free_stmt($q);
	}

	/**
	 *	Disconnects you to the current database connection
	 */
	public function disconnect() {
		sqlsrv_close($this->link);
	}

>>>>>>> refs/remotes/origin/master
}