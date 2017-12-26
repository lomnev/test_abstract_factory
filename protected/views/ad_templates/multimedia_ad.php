<h4>MULTIMEDIA Ad: <?=$ad->comment?></h4>

<div
    style="background-color: <?=$ad->backgroundColor?>, border-color: <?=$ad->borderColor?>"
    class="<?=$ad->doesItBlink ? 'blink' : ''?> <?=$ad->doesItShake ? 'shake' : ''?>"
>
    <img src="<?=$ad->imageSrcUrl?>">
</div>