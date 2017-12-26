<?php

class MobileMultimediaAd extends AbstractMultimediaAd {

    public function assembleAd() {
        $adImages = [
            'http://via.placeholder.com/140x100',
            'http://lorempixel.com/200/100',
            'http://lorempixel.com/240/120',
            'http://lorempixel.com/220/100',
            'https://placeimg.com/340/140/any',
            'https://placeimg.com/320/100/any',
        ];
        $this->imageSrcUrl = $adImages[array_rand($adImages)];
        return $this;
    }
    
}