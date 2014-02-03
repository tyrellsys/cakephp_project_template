<?php
/**
 * ConsoleTest file
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
 * ConsoleTest class
 *
 * This test group will run model class tests
 *
 * @package       Cake.Test.Case
 */
class ConsoleTest extends CakeTestSuite {

    /**
     * suite method, defines tests for this suite.
     *
     * @return void
     */
    public static function suite() {
        $suite = new CakeTestSuite('All Console related class tests');

        $suite->addTestDirectoryRecursive(APP_TEST_CASES . DS . 'Console' );

        return $suite;
    }
}
