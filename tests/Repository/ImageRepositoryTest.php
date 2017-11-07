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

use App\Repository\ImageRepository;
use App\Interactors\ImageInteractor;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class ImageRepositoryTest
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class ImageRepositoryTest extends KernelTestCase
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
            ImageRepository::class,
            static::$kernel->getContainer()->get('doctrine.orm.entity_manager')
                                           ->getRepository(ImageInteractor::class)
        );
    }
}
