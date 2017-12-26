<?php

class DesktopMultimediaAd extends AbstractMultimediaAd {

    public function assembleAd() {
        $adImages = [
            'http://lorempixel.com/200/100',
            'http://lorempixel.com/300/150',
            'http://lorempixel.com/260/120',
            'https://placeimg.com/340/140/any',
            'https://placeimg.com/320/100/any',
        ];
        $this->imageSrcUrl = $adImages[array_rand($adImages)];
        return $this;
    }
    
}