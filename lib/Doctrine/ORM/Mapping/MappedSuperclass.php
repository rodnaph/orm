<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Doctrine\ORM\EntityRepository;

/**
 * @Annotation
 * @NamedArgumentConstructor()
 * @Target("CLASS")
 */
#[Attribute(Attribute::TARGET_CLASS)]
final class MappedSuperclass implements Annotation
{
    /**
     * @var string|null
     * @psalm-var class-string<EntityRepository>|null
     * @readonly
     */
    public $repositoryClass;

    /** @psalm-param class-string<EntityRepository>|null $repositoryClass */
    public function __construct(string|null $repositoryClass = null)
    {
        $this->repositoryClass = $repositoryClass;
    }
}
