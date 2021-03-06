<?php

namespace voku\Html2Text\tests;

use voku\Html2Text\Html2Text;

/**
 * Class ParagraphBreakTest
 *
 * @internal
 */
final class ParagraphBreakTest extends \PHPUnit\Framework\TestCase
{
    public function testParagraphBreak()
    {
        $html = <<<EOT
Before
<p>
    This is a paragraph
</p>
After
EOT;
        $expected = <<<EOT
Before

This is a paragraph

After
EOT;

        $html2text = new Html2Text($html);
        static::assertSame(\str_replace(["\n", "\r\n", "\r"], "\n", $expected), $html2text->getText());
    }
}
