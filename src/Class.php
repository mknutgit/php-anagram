<?php
	 class Anagram
		{
		// private property;

		 function wordArray($input_word, $input_words){
			 $input_array_of_letters = str_split($input_word);
			 $input_array_of_words = explode(" ", $input_words);
			 $anagram_confirmation = array();


			 for ($i=0; $i < count($input_array_of_words); $i++) {
			 $word = $input_array_of_words[$i];
			 $input_phrase_array = str_split($input_array_of_words[$i]);

			 sort($input_array_of_letters);
			 sort($input_phrase_array);

			 if ($input_array_of_letters === $input_phrase_array) {
				 array_push($anagram_confirmation, $word);
			 }
			 else {
				 
			 }

			}
 			return $anagram_confirmation;
		}
	}
 ?>
