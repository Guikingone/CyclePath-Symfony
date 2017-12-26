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

namespace App\Responder\Core;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeResponder
 *
 * @author Guillaume Loulier <contact@guillaumeloulier.fr>
 */
final class HomeResponder
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * HomeResponder constructor.
     *
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param string $view
     * @param array $data
     *
     * @return Response
     *
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function __invoke(string $view, array $data)
    {
        $response = new Response(
            $this->twig->render($view, $data)
        );

        $response->setSharedMaxAge(3600);

        return $response;
    }
}
