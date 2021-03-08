<?php
/**
 * User: grnspc
 * Date: 7/25/2020
 * Time: 11:35 AM
 */

namespace grnspc\phpmvc\exception;


use grnspc\phpmvc\Application;

/**
 * Class ForbiddenException
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}