<?php

namespace Joselfonseca\LaravelApiTools\Traits;

use Joselfonseca\LaravelApiTools\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Factory as Validator;

/**
 * Class ValidateAbleTrait
 * @package Joselfonseca\LaravelApiTools\Traits
 */
trait ValidateAbleTrait
{


    /**
     * Runs the validator and throws exception if fails
     * @param array $attributes
     * @param $rules
     * @param $messages
     * @throws ValidationException
     */
    public function runValidator(array $attributes, $rules, $messages)
    {
        $validator = app(Validator::class)->make($attributes, $rules, $messages);
        if ($validator->fails()) {
            throw new ValidationException($validator->getMessageBag());
        }
    }
}
