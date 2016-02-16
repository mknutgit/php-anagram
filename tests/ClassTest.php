<?php

	require_once 'src/Class.php';

	class ClassTest extends PHPUnit_Framework_TestCase
	{

		function test_wordArraySome()
		{
		//Arrange
		$test_wordArray = new Anagram;
		$input1 = "least";
		$input2 = "steal stale leopard";

		//Act
		$result = $test_wordArray->wordArray($input1, $input2);

		//Assert
		$this->assertEquals(array('steal', 'stale'), $result);
		}

		function test_wordArrayAll()
		{
		//Arrange
		$test_wordArray = new Anagram;
		$input1 = "least";
		$input2 = "steal stale least";

		//Act
		$result = $test_wordArray->wordArray($input1, $input2);

		//Assert
		$this->assertEquals(array('steal', 'stale', 'least'), $result);
		}

	}

?>
