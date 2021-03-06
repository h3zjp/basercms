<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Feed.View.Helper
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * フィードBaserヘルパー
 * 
 * BcBaserHelper より透過的に呼び出される
 * 
 * 《利用例》
 * $this->BcBaser->feed(1)
 *
 * @package Feed.View.Helper
 *
 */
class FeedBaserHelper extends AppHelper {

/**
 * フィード出力
 * 
 * @param int $id フィードID
 * @param mixid $mobile	
 *	- '' : 現在のリクエストについて自動取得
 *	- true : モバイル用
 *	- false : PC用
 * @return void
 * @todo スマホ対応
 */
	public function feed($id, $mobile = '') {
		$url = array('mobile' => true, 'plugin' => 'feed', 'controller' => 'feed', 'action' => 'index');
		if ($mobile === '') {
			$mobile = ($this->request->params['Site']['device'] == 'mobile');
		}
		if ($mobile) {
			$url = array_merge($url, array($this->request->params['Site']['name'] => true));
		}
		echo $this->requestAction($url, array('pass' => array($id)));
	}

}
