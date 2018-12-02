<?php
/**
 * Created by PhpStorm.
 * User: jegatheeswaran
 * Date: 6/19/2018
 * Time: 11:46 PM
 */


class Thesaurus {
    private $thesaurus;

    function __construct(array $thesaurus){
    //$this->$thesaurus= $thesaurus;
    }

    public function getSynonyms($word) {
  //print_r($this->thesaurus[$word]);exit;
        $synonims = (!empty($this->thesaurus[$word]) ? $this->thesaurus[$word] : array());
        return json_encode(array('word'=>$word, 'synonyms'=>$word));
    }
}

$thesaurus = new Thesaurus(
    [
        'buy'=>['purchase'],
        'big'=>['great','large']
    ]
);

echo $thesaurus->getSynonyms('big');
echo '/n';
echo $thesaurus->getSynonyms('agelast');

?>