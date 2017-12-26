<?php

abstract class AbstractAd {

    protected $url;
    public $comment;
    public $doesItShake = false;

    abstract public function assembleAd();
    
    public function blink() {
        $this->doesItBlink = true;
    }

    public function shake() {
        $this->doesItShake = true;
    }

    
}