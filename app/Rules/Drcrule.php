<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Drcrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //  使用说明
        //  'body' => ['required',new Drcrule],
        $flag = true;
        if($attribute==='drc'){
            if (strval($value)!=='red'){
                $flag = false;
            }
        }
        return $flag;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error message:attribute drc value invalide.';
    }
}
