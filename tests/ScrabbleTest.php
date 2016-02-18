<?php
    require_once __DIR__ . '/../src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_returnScore_oneLetter()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'a';

            // Act
            $result = $test_Scrabble->returnScore($input);

            // Assert
            $this->assertEquals(1, $result);
        }
        function test_returnScore_twoLetters()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'is';

            // Act
            $result = $test_Scrabble->returnScore($input);

            // Assert
            $this->assertEquals(2, $result);
        }
        function test_returnScore_complexWord()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'quote';

            // Act
            $result = $test_Scrabble->returnScore($input);

            // Assert
            $this->assertEquals(14, $result);
        }
    }
 ?>
