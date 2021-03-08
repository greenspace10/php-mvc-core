<?php
/**
 * User: grnspc
 * Date: 7/25/2020
 * Time: 11:33 AM
 */

namespace grnspc\phpmvc\middlewares;


use grnspc\phpmvc\Application;
use grnspc\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}