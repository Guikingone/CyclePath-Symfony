<?php

declare(strict_types=1);

/*
 * This file is part of the CyclePath project.
 *
 * (c) Guillaume Loulier <contact@guillaumeloulier.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Resolvers;

use App\Interactors\UserInteractor;
use Doctrine\ORM\EntityManagerInterface;
use App\Resolvers\Interfaces\UserResolverInterface;

/**
 * Class UserResolver
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class UserResolver implements UserResolverInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManagerInterface;

    /**
     * UserResolver constructor.
     *
     * @param EntityManagerInterface $entityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManagerInterface)
    {
        $this->entityManagerInterface = $entityManagerInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsers(\ArrayAccess $arguments)
    {
        if ($arguments->offsetExists('id')) {
            return [
                $this->entityManagerInterface
                     ->getRepository(UserInteractor::class)
                     ->findOneBy([
                          'id' => $arguments->offsetGet('id')
                     ])
            ];
        }

        return $this->entityManagerInterface
                    ->getRepository(UserInteractor::class)
                    ->findAll();
    }
}