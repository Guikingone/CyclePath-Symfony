<?php

/*
 * This file is part of the CyclePath project.
 *
 * (c) Guillaume Loulier <contact@guillaumeloulier.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository;

use App\Gateway\Interfaces\PathGatewayInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class PathRepository.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class PathRepository extends EntityRepository implements PathGatewayInterface
{
}
