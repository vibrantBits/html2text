<?php

namespace voku\Html2Text\tests;

use voku\Html2Text\Html2Text;

/**
 * Class ListTest
 *
 * @internal
 */
final class ListTest extends \PHPUnit\Framework\TestCase
{
    public function testList()
    {
        $html = <<<'EOT'
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>
EOT;

        $expected = <<<'EOT'
* Item 1
* Item 2
* Item 3
EOT;

        $html2text = new Html2Text($html);
        static::assertSame(\str_replace(["\n", "\r\n", "\r"], "\n", $expected), $html2text->getText());
    }

    public function testOrderedList()
    {
        $html = <<<'EOT'
<ol>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ol>
EOT;

        $expected = <<<'EOT'
* Item 1
* Item 2
* Item 3
EOT;

        $html2text = new Html2Text($html);
        static::assertSame(\str_replace(["\n", "\r\n", "\r"], "\n", $expected), $html2text->getText());
    }
}
