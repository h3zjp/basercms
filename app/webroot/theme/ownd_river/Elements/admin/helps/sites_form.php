<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 4.0.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * [ADMIN] サブサイト編集　ヘルプ
 */
?>


<p><?php echo __d('baser', 'メインサイトに関連するサブサイトの登録を行います。<br>サブサイトのデザインを切り替えるには次の方法があります。')?></p>
<ul>
	<li><?php echo __d('baser', 'テーマ設定')?>：<?php echo __d('baser', 'サブサイト用のテーマを準備し、サブサイトにテーマを設定する。')?></li>
	<li><?php echo __d('baser', 'レイアウトテンプレート設定')?>：<?php echo __d('baser', 'サブサイト用のレイアウトテンプレートを準備し、関連するフォルダ、コンテンツで個別にレイアウトテンプレートを設定する。')?></li>
	<li><?php echo __d('baser', 'サブフォルダ配置')?>：<?php echo __d('baser', 'サブサイト用の各種テンプレートを準備し、設定されいているテーマにサブサイト識別名称と同じフォルダを作成し配置する。')?></li>
</ul>
<div class="example-box">
	<p class="head"><?php echo __d('baser', 'サブフォルダ配置の設定例')?></p>
	<p>&nbsp;</p>
	<p>　<?php echo sprintf(__d('baser', 'レイアウトテンプレートの場合・・・ theme/テーマフォルダ%s を配置'), '/Layouts/smartphone/default.php')?></p>
	<p>　<?php echo sprintf(__d('baser', 'エレメントテンプレートの場合・・・ theme/テーマフォルダ%s を配置'), '/Elements/smartphone/crumbs.php')?></p>
	<p>　<?php echo sprintf(__d('baser', 'コンテンツテンプレートの場合・・・ theme/テーマフォルダ%s を配置'), '/Blog/smartphone/default/index.php')?></p>
</div>