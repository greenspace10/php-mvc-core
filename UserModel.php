<?php
/**
 * User: grnspc
 * Date: 7/25/2020
 * Time: 10:13 AM
 */

namespace grnspc\phpmvc;

use grnspc\phpmvc\db\DbModel;

/**
 * Class UserModel
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}