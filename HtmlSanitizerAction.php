<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HtmlSanitizer;

class HtmlSanitizerAction
{
    /**
     * Dropped elements are elements the sanitizer should remove from the input, including their children.
     */
    public const Drop = 'drop';

    /**
     * Blocked elements are elements the sanitizer should remove from the input, but retain their children.
     */
    public const Block = 'block';

    /**
     * Allowed elements are elements the sanitizer should retain from the input.
     */
    public const Allow = 'allow';
}
