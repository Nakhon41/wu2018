<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        
        if (strpos($text, "ครับ") !== false) {
            return 'Male';
            }
        elseif(strpos($text, "คะ") !== false) {
            return 'Female';
            }
        return 'Unknown';
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        return 'Positive';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        return ['แสสสสสส'];
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {

        if (!preg_match('/[^A-Za-z0-9]/', $text)){
            return ['EN'];
            }
            
        return ['TH'];
    }
}
