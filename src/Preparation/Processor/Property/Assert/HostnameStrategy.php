<?php

declare(strict_types=1);

/*
 *  This file is part of the Micro framework package.
 *
 *  (c) Stanislau Komar <kost@micro-php.net>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Micro\Library\DTO\Preparation\Processor\Property\Assert;

use Symfony\Component\Validator\Constraints\Hostname;

class HostnameStrategy extends AbstractConstraintStrategy
{
    protected function generateArguments(array $config): array
    {
        $arguments = parent::generateArguments($config);

        return [
            ...$arguments,
            ...[
                'requireTld' => $this->stringToBool($config['ltd_required'] ?? 'false'),
            ],
        ];
    }

    protected function getValidatorProperty(): string
    {
        return 'hostname';
    }

    protected function getAttributeClassName(): string
    {
        return Hostname::class;
    }
}
