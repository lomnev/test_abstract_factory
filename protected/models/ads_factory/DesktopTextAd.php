<?php

class DesktopTextAd extends AbstractTextAd {

    public function assembleAd() {
        $this->text = 'This is optimal DESKTOP text. Click it!';
        return $this;
    }
    
}