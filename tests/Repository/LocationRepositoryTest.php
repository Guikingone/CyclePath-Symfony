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

namespace App\Tests\Repository;

use App\Repository\LocationRepository;
use App\Interactors\LocationInteractor;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class LocationRepositoryTest
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class LocationRepositoryTest extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        static::bootKernel();
    }

    public function testRepositoryExist()
    {
        static::assertInstanceOf(
            LocationRepository::class,
            static::$kernel->getContainer()->get('doctrine.orm.entity_manager')
                                           ->getRepository(LocationInteractor::class)
        );
    }
}