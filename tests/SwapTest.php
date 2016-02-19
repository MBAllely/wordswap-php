<?php
    require_once __DIR__ . '/../src/Swap.php';

    class SwapTest extends PHPUnit_Framework_TestCase
    {
        function test_wordSwap_once()
        {
            // Arrange
            $test_Swap = new Swap;
            $input_word = "Hello";
            $replacement_word = "Goodbye";
            $input_phrase = "Hello young padowan";

            // Act
            $result = $test_Swap->wordSwapAnyMatch($input_word, $replacement_word, $input_phrase);
            // Assert
            $this->assertEquals("Goodbye young padowan", $result);
        }

        function test_wordSwap_twice()
        {
            // Arrange
            $test_Swap = new Swap;
            $input_word = "cat";
            $replacement_word = "dog";
            $input_phrase = "That cat is cute, but my cat is better.";

            // Act
            $result = $test_Swap->wordSwapAnyMatch($input_word, $replacement_word, $input_phrase);
            // Assert
            $this->assertEquals("That dog is cute, but my dog is better.", $result);
        }

        function test_wordSwap_partial_match()
        {
            // Arrange
            $test_Swap = new Swap;
            $input_word = "cat";
            $replacement_word = "dog";
            $input_phrase = "Let's play catch with the cat .";

            // Act
            $result = $test_Swap->wordSwapCaseMatch($input_phrase, $input_word, $replacement_word);
            // Assert
            $this->assertEquals("Let's play catch with the dog .", $result);
        }
    }
 ?>
