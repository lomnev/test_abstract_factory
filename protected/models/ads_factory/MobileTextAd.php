<?php

class MobileTextAd extends AbstractTextAd {

    public function assembleAd() {
        $this->text = 'This is optimal MOBILE text. Click it!';
        return $this;
    }
    
}