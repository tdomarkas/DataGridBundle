<?php
/*
 * This file is part of the DataGridBundle.
 *
 * (c) Lars Strojny <lars.strojny@internations.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sorien\DataGridBundle\Tests\Grid\Column;

use InterNations\Component\Testing\AbstractTestCase;
use Sorien\DataGridBundle\Grid\Column\DateColumn;

class DateColumnTest extends AbstractTestCase
{
    public function testReturnsEmptyStringForRenderFilter(): void
    {
        $column = new DateColumn([]);

        $this->assertSame('', $column->renderFilter('hash'));
    }
}

