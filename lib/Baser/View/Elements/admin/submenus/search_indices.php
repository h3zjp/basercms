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
 * [ADMIN] 検索インデックスメニュー
 * @var \BcAppView $this
 */
?>

<?php
echo $this->BcBaser->i18nScript([
	'reconstructSearchTitle' => __d('baser', '確認'),
    'reconstructSearchMessage' => __d('baser', '現在の検索インデックスを消去して、再構築します。本当にいいですか？'),
], ['inline' => true]);
?>

<script>
	$(function(){
		$("#BtnReconstruct").click(function(){
			$.bcConfirm.show({
				title: bcI18n.reconstructSearchTitle,
				message: bcI18n.reconstructSearchMessage,
				ok: function(){
					$.bcUtil.showLoader();
					location.href = $("#BtnReconstruct").attr('href');
				}
			});
			return false;
		});
	});
</script>
<tr>
	<th><?php echo __d('baser', '検索インデックスメニュー')?></th>
	<td>
		<ul class="cleafix">
			<li><?php $this->BcBaser->link(__d('baser', '検索インデックス再構築'), ['controller' => 'search_indices', 'action' => 'reconstruct'], ['id' => 'BtnReconstruct']) ?></li>
		</ul>
	</td>
</tr>
