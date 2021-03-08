<?php
/**
 * User: grnspc
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace grnspc\phpmvc;

use grnspc\phpmvc\middlewares\BaseMiddleware;
/**
 * Class Controller
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \grnspc\phpmvc\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \grnspc\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}