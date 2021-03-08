<?php
/**
 * User: grnspc
 * Date: 7/25/2020
 * Time: 11:33 AM
 */

namespace grnspc\phpmvc\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}