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
 * 	http://www.apache.org/licenses/LICENSE-2.0
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
 * @project				Moon PHP
 * @package				moonphp
 * @author				Juvar Abrera <me@juvarabrera.com>
 * @copyright			2017 Juvar Abrera
 */

use Oslo\Core as Core;

class UserModel extends Core\Model {

	public function test() {
		$q = new \Oslo\Database\Query();
		$q->prepare("SELECT * FROM Category");
		$this->db->read($q);
		return $q->getResult();
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
 * 	http://www.apache.org/licenses/LICENSE-2.0
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
 * @project				Moon PHP
 * @package				moonphp
 * @author				Juvar Abrera <me@juvarabrera.com>
 * @copyright			2017 Juvar Abrera
 */

use Oslo\Core as Core;

class UserModel extends Core\Model {

	public function test() {
		$q = new \Oslo\Database\Query();
		$q->prepare("SELECT * FROM Category");
		$this->db->read($q);
		return $q->getResult();
	}

>>>>>>> refs/remotes/origin/master
}