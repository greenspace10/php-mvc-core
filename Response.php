<?php
/**
 * User: grnspc
 * Date: 7/7/2020
 * Time: 10:53 AM
 */

namespace grnspc\phpmvc;


/**
 * Class Response
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}