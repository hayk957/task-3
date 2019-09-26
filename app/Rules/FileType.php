<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FileType implements Rule
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
        $mime = $value->getClientMimeType();

        if (isset($value)) {

            ($mime == 'jpeg' || $mime == 'jpg' || $mime == 'png' || $mime == 'gif' || $mime == 'svg') ? true : false;
        }


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Avatar must be the following mime types (jpeg, jpg, png, gif, svg)';
    }
}
