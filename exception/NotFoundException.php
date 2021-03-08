<?php
/**
 * User: grnspc
 * Date: 7/25/2020
 * Time: 11:43 AM
 */

namespace grnspc\phpmvc\exception;


/**
 * Class NotFoundException
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}