<?php
class Random 
{
    public $adjectives = ['mad','little','easy','short','flat','tiny','hot','sweet','flaky','fancy'];
    public $nouns = ['dime','snake','feather','trick','beef','goose','number','street','cactus','patch'];
    public function getRandomAdjective() 
    {
       $adjective = $this->adjectives[array_rand($this->adjectives, 1)];
       return $adjective;
    }
    public function getRandomNoun()
    {
        $noun = $this->nouns[array_rand($this->nouns, 1)];
        return $noun;
    }
    public function combine()
    {
        return $this->getRandomAdjective() .' ' . $this->getRandomNoun();
    }
}
?>