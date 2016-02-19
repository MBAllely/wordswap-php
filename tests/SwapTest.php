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
            $result = $test_Swap->wordSwap($input_word, $replacement_word, $input_phrase);
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
            $result = $test_Swap->wordSwap($input_word, $replacement_word, $input_phrase);
            // Assert
            $this->assertEquals("That dog is cute, but my dog is better.", $result);
        }
    }
 ?>
