<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;

/**
 * @Annotation
 * @NamedArgumentConstructor()
 * @Target("PROPERTY")
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Embedded implements Annotation
{
    public function __construct(
        /** @readonly */
        public string|null $class = null,
        /** @readonly */
        public string|bool|null $columnPrefix = null,
    ) {
    }
}
