<?php

class SiteController extends Controller {

	public function actionIndex() {
		$this->render('index', [
			'adHtml' => $this->getOptimalAdHtml(),
		]);
	}

	protected function getOptimalAdHtml(){
		$ad = (new OptimalAd())->getOptimalAd();
		if($ad instanceof AbstractTextAd){
			return $this->renderPartial('//ad_templates/text_ad', ['ad' => $ad], true);
		} elseif($ad instanceof AbstractMultimediaAd){
			return $this->renderPartial('//ad_templates/multimedia_ad', ['ad' => $ad], true);
		} else {
			return 'Error. Can not create the ad.';
		}
	}

	public function actionGetAnotherAd() {
		Yii::app()->end($this->getOptimalAdHtml());
	}

	public function actionError() {
		die('Error occured');
	}


}