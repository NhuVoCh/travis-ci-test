<?php

/**
 * Trivial assertions
 *
 * PHP Version 5.6, 7.2 and 7.4
 *
 * @category  Test
 * @package   TravisCiTest
 * @author    Nhu-Hoai Robert Vo <nhuhoai.vo@nhuvo.ch>
 * @copyright 2020 Nhu-Hoai Robert Vo
 * @license   https://www.nhuvo.ch/Proprietary Proprietary project
 * @version   GIT: 0.1.0
 * @link      https://github.com/NhuVoCh/travis-ci-test
 * @since     0.1.0
 */

namespace NhuVo\TravisCiTest;

use PHPUnit\Framework\TestCase;

/**
 * Trivial assertions
 *
 * PHP Version 5.6, 7.2 and 7.4
 *
 * @category  Test
 * @package   TravisCiTest
 * @author    Nhu-Hoai Robert Vo <nhuhoai.vo@nhuvo.ch>
 * @copyright 2020 Nhu-Hoai Robert Vo
 * @license   https://www.nhuvo.ch/Proprietary Proprietary project
 * @version   Release: 0.1.0
 * @link      https://github.com/NhuVoCh/travis-ci-test
 * @since     0.1.0
 */
final class TestTrivial extends TestCase
{
  /**
   * Test equals assertions
   * 
   * @test testEquals
   *
   * @return void
   */
  public function testEquals()
  {
    $a = 0;
    $b = 1;
    $c = 2;

    $this->assertEquals($b, $a + $b);
  }
}
