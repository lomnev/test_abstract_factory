<?php


class MobileAdsFactory extends AbstractAdsFactory {

    function makeTextAd(){
        return new MobileTextAd();
    }
    
    function makeMultimediaAd(){
        return new MobileMultimediaAd();
    }
    
    
}