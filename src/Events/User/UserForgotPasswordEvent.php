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

namespace App\Events\User;

use App\Models\Interfaces\UserInterface;
use Symfony\Component\EventDispatcher\Event;
use App\Events\Interfaces\UserEventInterface;

/**
 * Class UserForgotPasswordEvent
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
final class UserForgotPasswordEvent extends Event implements UserEventInterface
{
    const NAME = 'user.forgot_password';

    /**
     * @var UserInterface
     */
    private $user;

    /**
     * UserForgotPasswordEvent constructor.
     *
     * @param UserInterface $user
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }
}
