<?php


class DesktopAdsFactory extends AbstractAdsFactory {

    function makeTextAd(){
        return new DesktopTextAd();
    }
    
    function makeMultimediaAd(){
        return new DesktopMultimediaAd();
    }
    
    
}