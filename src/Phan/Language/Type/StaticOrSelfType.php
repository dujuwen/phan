<?php declare(strict_types=1);
namespace Phan\Language\Type;

use Phan\CodeBase;
use Phan\Language\Type;

/**
 * Represents the PHPDoc type `self` or `static`.
 * This is converted to a real class when necessary.
 * @see $this->withStaticResolvedInContext()
 */
class StaticOrSelfType extends Type
{
    public function hasStaticOrSelfTypesRecursive(CodeBase $_) : bool
    {
        return true;
    }
}
