<!-- パンくずリスト -->
<div class="breadcrumb">
	<li class="breadcrumb-item">
		<!-- ホームのURLを表示 -->
		<a href="<?php echo home_url(); ?>">
			HOME
		</a>
	</li>
	<!-- singleページなら -->
	<?php if(is_single()): ?>
		<?php
			// 配列を取得
			$cats = $sort = array();
			// カテゴリーを取得
			$category = get_the_category();
			// カテゴリーの親子関係を取得
			foreach ($category as $cat) {
				$layer = count(get_ancestors($cat->term_id, 'category'));
				$cats[] = array(
					'name' => $cat->name,
					'id' => $cat->term_id,
					'layer' => $layer
				);
				$sort[] = $layer;
			}
			array_multisort($sort, SORT_ASC, $cats);
		?>
		<!-- 取得したカテゴリーを表示 -->
		<?php foreach ($cats as $cat): ?>
			<li class="breadcrumb-item">
				<a href="<?php echo get_category_link($cat['id']); ?>">
					<?php echo $cat['name']; ?>
				</a>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</div>