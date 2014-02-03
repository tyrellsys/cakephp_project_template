<?php
/**
 * ControllerTest file
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Test.Case
 * @since         CakePHP(tm) v 2.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * ControllerTest class
 *
 * This test group will run controller class tests
 *
 * @package       Cake.Test.Case
 */
class ControllerTest extends CakeTestSuite {

    /**
     * suite method, defines tests for this suite.
     *
     * @return void
     */
    public static function suite() {
        $suite = new CakeTestSuite('All Controller related class tests');

        $suite->addTestDirectoryRecursive(APP_TEST_CASES . DS . 'Controller' );

        return $suite;
    }
}
