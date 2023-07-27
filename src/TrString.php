<?php

if (! function_exists('tr_strtoupper')) {
    function tr_strtoupper(string $value): string
    {
        return mb_strtoupper(str_replace('i', 'İ', $value), 'UTF-8');
    }
}

if (! function_exists('tr_strtolower')) {
    function tr_strtolower(string $value): string
    {
        return mb_strtolower(str_replace(['İ', 'I'], ['i', 'ı'], $value), 'UTF-8');
    }
}

if (! function_exists('tr_uppercase_first')) {
    function tr_uppercase_first(string $value): string
    {
        $tmp = preg_split('//u', $value, 2, PREG_SPLIT_NO_EMPTY);
        $more = $tmp[1] ?? '';

        return mb_convert_case(tr_strtoupper($tmp[0]), MB_CASE_TITLE, 'UTF-8').tr_strtolower($more);
    }
}

if (! function_exists('tr_lowercase_first')) {
    function tr_lowercase_first(string $value): string
    {
        $tmp = preg_split('//u', $value, 2, PREG_SPLIT_NO_EMPTY);
        $more = $tmp[1] ?? '';

        return mb_convert_case(tr_strtolower($tmp[0]), MB_CASE_LOWER, 'UTF-8').$more;
    }
}

if (! function_exists('tr_uppercase_words')) {
    function tr_uppercase_words(string $value): string
    {
        $result = '';
        foreach (explode(' ', $value) as $word) {
            if ($word === ' ') {
                $result .= $word;
            } else if (strlen($word) === 0) {
                $result .= ' '.$word;
            } else {
                $result .= ' '.tr_uppercase_first($word);
            }
        }

        return substr($result, 1);
    }
}
