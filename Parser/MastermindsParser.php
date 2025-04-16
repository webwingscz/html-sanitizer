<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HtmlSanitizer\Parser;

use Masterminds\HTML5;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
final class MastermindsParser implements ParserInterface
{
    private array $defaultOptions = [];

    public function __construct(array $defaultOptions = [])
    {
        $this->defaultOptions = $defaultOptions;
    }

    public function parse(string $html): ?\DOMNode
    {
        return (new HTML5($this->defaultOptions))->loadHTMLFragment($html);
    }
}
