<?php

namespace Equip;

class ArrayBench
{
    public function benchHead()
    {
        return \Equip\head($this->words());
    }

    public function benchTail()
    {
        return \Equip\tail($this->words());
    }

    private function words()
    {
        // 100 random words
        return [
            'B-G',
            'Elavil',
            'Gal',
            'Heilbronn',
            'Jawing',
            'Northumbria',
            'Polycarp',
            'Suyog',
            'Thessalians',
            'Yemenis',
            'adheres',
            'anacardic',
            'anastasis',
            'arised',
            'averseness',
            'awright',
            'bandgaps',
            'bareboat',
            'beader',
            'bearishness',
            'boxlike',
            'buddha',
            'chain-bearer',
            'chartists',
            'clickjack',
            'cogence',
            'colorways',
            'conundrums',
            'correlate',
            'cultist',
            'directum',
            'disparity',
            'dribble',
            'earth-closet',
            'embank',
            'ethnographically',
            'evokers',
            'exclaimed',
            'favela',
            'foodist',
            'grenadilla',
            'gunning',
            'hearthrug',
            'humpy',
            'indels',
            'indeterminant',
            'inelastic',
            'innateness',
            'intering',
            'interlay',
            'ire',
            'izar',
            'jaden',
            'jest',
            'joshing',
            'leader',
            'leave-taking',
            'levitical',
            'liveryman',
            'loggias',
            'lubricous',
            'luxuria',
            'main-hatch',
            'mealie',
            'minigolf',
            'misgives',
            'moneyspinning',
            'nanomachine',
            'narrativized',
            'nepetalactone',
            'omosternum',
            'onry',
            'oppidans',
            'outproduced',
            'palpal',
            'parallelled',
            'paresseuse',
            'phlebotomy',
            'poignant',
            'poinsettias',
            'psychedelia',
            'redoute',
            'saxhorn',
            'schottische',
            'semifluid',
            'sheepishness',
            'someways',
            'striped',
            'thessalonica',
            'ticca',
            'timekiller',
            'typosquatters',
            'unclenching',
            'undersupplying',
            'unforeseeable',
            'unreckonable',
            'untaxed',
            'ushers',
            'vivers',
            'whf'
        ];
    }
}
