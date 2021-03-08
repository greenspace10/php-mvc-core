<?php
/**
 * User: grnspc
 * Date: 7/26/2020
 * Time: 3:49 PM
 */

namespace grnspc\phpmvc\form;


/**
 * Class TextareaField
 *
 * @author  Nathan Robinson <greenspace.nr@gmail.com>
 * @package grnspc\phpmvc\form
 */
class TextareaField extends BaseField
{
    public function renderInput()
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>',
             $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}