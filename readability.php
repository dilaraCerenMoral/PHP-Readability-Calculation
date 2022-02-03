<?php
class AtesmanText {
    public $text;
    public $legibility;

    function setText($text){
        $this->text=$text;
    }

    function calculateLegibility(){

        $count_syllables = preg_match_all('/[aeiouıöü]/i',$this->text,$matches);
        $count_words = substr_count($this->text, ' ')+1;
        $count_sentences = preg_match_all('/[\.!?:]/i',$this->text,$matches);


        $this->legibility = round(((198825/1000) - ((40175/1000)*($count_syllables /$count_words))) - ((2610/1000)*($count_words/$count_sentences)),2);

    }

}

?>
