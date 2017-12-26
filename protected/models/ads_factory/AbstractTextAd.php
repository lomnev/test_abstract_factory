<?php

abstract class AbstractTextAd extends AbstractAd implements ColorableContentInterface, BlinkableInterface {

    const DEFAULT_TEXT_AD_CONTENT_COLOR = '#000000';

    public $text = '';
    public $color = self::DEFAULT_TEXT_AD_CONTENT_COLOR;
    public $doesItBlink = false;

    public function colorize() {
        $this->color = '#' . dechex(rand(0,255)) . dechex(rand(0,255)) . dechex(rand(0,255));
        return true;
    }

}