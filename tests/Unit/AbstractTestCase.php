<?php
/**
 * Copyright (c) 2017 Ryan Parman <http://ryanparman.com>.
 * Copyright (c) 2017 Contributors.
 *
 * http://opensource.org/licenses/Apache2.0
 */

declare(strict_types=1);

namespace SimplePie\Test\Unit;

use PHPUnit\Framework\TestCase;
use SimplePie\Configuration;

abstract class AbstractTestCase extends TestCase
{
    public function setUp()
    {
        Configuration::setContainer();
    }
}
