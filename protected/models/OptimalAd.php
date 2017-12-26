<?php


class OptimalAd {

    /**
     * @return AbstractAd subclass object
     */
    public function getOptimalAd() {
        $ad = $this->getBasicAdObject();
        // colorize: text
        if($ad instanceof AbstractTextAd && StubHelper::shouldItHaveColor()){
            $ad->comment .= 'It should have color. ';
            $ad->colorize();
        }
        // blink
        if(StubHelper::shouldItBlink()){
            $ad->comment .= 'It should blink. ';
            $ad->blink();
        }
        // shake
        if(StubHelper::shouldItShake()){
            $ad->comment .= 'It should shake. ';
            $ad->shake();
        }
        // assemble with selected options
        $ad->assembleAd();
        return $ad;
    }

    /**
     * @return AbstractAd subclass object
     */
    protected function getBasicAdObject() {
        if(StubHelper::isRequestFromDesktop()){
            if(StubHelper::shouldItBeText()){
                return new DesktopTextAd();
            } else {
                return new DesktopMultimediaAd();
            }
        } else {
            if(StubHelper::shouldItBeText()){
                return new MobileTextAd();
            } else {
                return new MobileMultimediaAd();
            }
        }
    }


}