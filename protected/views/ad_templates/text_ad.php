<h4>TEXT Ad: <?=$ad->comment?></h4>

<div style="color: <?=$ad->color?>;display: inline-block;width: 80%;padding: 20px; border: 1px solid #a32377"
     class="<?=$ad->doesItBlink ? 'blink' : ''?> <?=$ad->doesItShake ? 'shake' : ''?>">
    <?=$ad->text?>
</div>