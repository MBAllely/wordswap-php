<?php
class Swap
{

    function wordSwap($input_word, $replacement_word, $input_phrase)
    {
        $output = str_replace($input_word, $replacement_word, $input_phrase);
        return $output;
    }
}

 ?>
