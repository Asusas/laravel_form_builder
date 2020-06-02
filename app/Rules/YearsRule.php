<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class YearsRule implements Rule
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
        $current_date = Carbon::today()->format('Y-m-d');
        $passed_date = date_create('1900-10-10');
        $formatted_date = date_format($passed_date, 'Y-m-d');

        if ($value < $current_date && $value > $formatted_date) {
            return $this->message();
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Vilkiko metai negali būti mažesni nei 1900 bei didesni nei einamieji metai';
    }
}