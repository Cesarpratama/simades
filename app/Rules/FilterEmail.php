<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;

class FilterEmail implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $domain = Str::after($value, '@');
        if (!in_array($domain, ['gmail.com', 'yahoo.com'])) {
            $fail('email yang kamu gunakan tidak valid.');
        }
    }
}
