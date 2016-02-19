<?php
class Swap
{

    function wordSwapCaseMatch($input_phrase, $input_word, $replacement_word)
    {

        $split_phrase = explode(" ", $input_phrase);
        foreach ($split_phrase as $index => $word) {
            if ($split_phrase[$index] == $input_word) {
                $split_phrase[$index] = str_replace($input_word, $replacement_word, $word);
            }
        }
        $input_phrase = implode(" ", $split_phrase);
        return $input_phrase;
    }

    function wordSwapAnyMatch($input_word, $replacement_word, $input_phrase)
    {
        $output = str_replace($input_word, $replacement_word, $input_phrase);
        return $output;
    }
}

// preg_replace('/[^a-z]/i', '', $string)

 ?>
