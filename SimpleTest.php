<?php


use PHPUnit\Framework\TestCase;

require_once "Wordcount.php";


class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new WordCount();

        $TestSentence = "Nama Saya Ahmad Naufal Hakim Lubis"; 
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(6, $WordCount); 
    }
}