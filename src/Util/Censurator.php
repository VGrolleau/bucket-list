<?php


namespace App\Util;


class Censurator
{
    const BAD_WORDS = ["putain", "merde", "foutre", "con", "gueule", "chier"];

    public function purify(string $text): string
    {
        foreach (self::BAD_WORDS as $badwords)
        {
            $replacement = str_repeat("*", mb_strlen($badwords));
            $text = str_ireplace($badwords, $replacement, $text);
        }
        return $text;
    }
}