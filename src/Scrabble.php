<?php
    class Scrabble {

        function returnScore($word) {
            $input_array = str_split($word);
            $score = 0;
            foreach ($input_array as $index => $letter) {
                if (preg_match("/[aeioulnrst]/i", $letter)) {
                    $score += 1;
                } elseif (preg_match("/[dg]/i", $letter)) {
                    $score += 2;
                } elseif (preg_match("/[bcmp]/i", $letter)) {
                    $score += 3;
                } elseif (preg_match("/[fhvwy]/i", $letter)) {
                    $score += 4;
                } elseif (preg_match("/[k]/i", $letter)) {
                    $score += 5;
                } elseif (preg_match("/[jx]/i", $letter)) {
                    $score += 8;
                } elseif (preg_match("/[qz]/i", $letter)) {
                    $score += 10;
                }
            }
            return $score;
        }
    }

?>
