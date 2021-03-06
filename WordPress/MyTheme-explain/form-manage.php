<!-- オリジナル管理画面 -->
<div class="wrap">
	<h2>MyTheme管理</h2>
	<form action="options.php" method="post">
		<?php
			settings_fields('original-field-manage');
			do_settings_sections('original-field-manage');
		?>
		<!-- サイドバーに任意で表示させる記事 -->
		<label>ピックアップ記事</label>
		<?php $field_name = 'mytheme_pickup_article'; ?>
		<input  type="text"
				placeholder="例)1,2,3"
				id="<?php echo $field_name; ?>"
		 	    name="<?php echo $field_name; ?>"
		 	    value="<?php echo esc_attr(get_option($field_name)); ?>">
		<p>投稿IDを「,」カンマ区切りで指定</p>

		<!-- ファビコンの設定 -->
		<label>ファビコン</label>
		<?php $field_name = 'mytheme_favicon_img'; ?>
		<input  type="text"
				placeholder="例)1,2,3"
				id="<?php echo $field_name; ?>"
		 	    name="<?php echo $field_name; ?>"
		 	    value="<?php echo esc_attr(get_option($field_name)); ?>">
		<p>ファビコンのURLを指定</p>
		<?php submit_button(); ?>
	</form>
</div>