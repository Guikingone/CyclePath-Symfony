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

namespace spec\App\Events\User;

use PhpSpec\ObjectBehavior;
use App\Models\Interfaces\UserInterface;
use App\Events\User\UserResetPasswordEvent;
use App\Events\Interfaces\UserEventInterface;

/**
 * Class UserResetPasswordEventSpec.
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
class UserResetPasswordEventSpec extends ObjectBehavior
{
    /**
     * @param \PhpSpec\Wrapper\Collaborator|UserInterface $user
     */
    public function it_is_initializable(UserInterface $user)
    {
        $this->beConstructedWith($user);
        $this->shouldHaveType(UserResetPasswordEvent::class);
    }

    /**
     * @param UserInterface|\PhpSpec\Wrapper\Collaborator $user
     */
    public function it_should_implement(UserInterface $user)
    {
        $this->beConstructedWith($user);
        $this->shouldImplement(UserEventInterface::class);
    }

    /**
     * @param UserInterface|\PhpSpec\Wrapper\Collaborator $user
     */
    public function it_should_return_user_identifier(UserInterface $user)
    {
        $user->getId()->willReturn(0);

        $this->beConstructedWith($user);
        $this->getUser()->getId()->shouldBe(0);
    }
}
