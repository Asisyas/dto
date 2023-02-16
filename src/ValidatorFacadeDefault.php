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

namespace Micro\Library\DTO;

use Micro\Library\DTO\Validator\ValidatorFactory;

class ValidatorFacadeDefault extends ValidatorFacade
{
    public function __construct()
    {
        parent::__construct(new ValidatorFactory());
    }
}