<?php

abstract class AbstractMultimediaAd extends AbstractAd implements BlinkableInterface, ShakeableInterface {

    const DEFAULT_MM_AD_WRAPPER_BORDER_COLOR = '#000000';
    const DEFAULT_MM_AD_WRAPPER_BACKGROUND_COLOR = '#ffffff';

    public $imageSrcUrl = '';
    public $borderColor = self::DEFAULT_MM_AD_WRAPPER_BORDER_COLOR;
    public $backgroundColor = self::DEFAULT_MM_AD_WRAPPER_BACKGROUND_COLOR;
    public $doesItBlink = false;

    public function colorize() {
        $this->borderColor = '#' . dechex(rand(0,255)) . dechex(rand(0,255)) . dechex(rand(0,255));
        $this->backgroundColor = '#' . dechex(rand(100,255)) . dechex(rand(100,255)) . dechex(rand(100,255));
        return true;
    }
    
}