<?php


class StubHelper {

    public static function isRequestFromDesktop() {
        return rand(0,1);
    }
    
    public static function shouldItBlink() {
        return rand(0,1);
    }

    public static function shouldItShake() {
        return rand(0,1);
    }

    public static function shouldItHaveColor() {
        return rand(0,1);
    }
    
    public static function shouldItBeText() {
        return rand(0,1);
    }


}