<?php

class ChangYanWidget extends CWidget {
	public $appId = 0;
	public $compatible = false;
	public $sid = false;
	public $isMobile = false;
	public $conf = "";
	
	public function run() {
		if ( ! $this->appId || ! $this->conf) {
            throw new CHttpException(500, Yii::t(__CLASS__, 'Parameter "appid" and "conf" must be set.'));
		}
		
		$this->render('ChangYan');
	}
}