<?php
	if(has_category()) :?> 
		<!-- <form method="get"> -->
		
		<?php $categories = get_categories();?>

		<div class="widget-item post-filter"><h2 class="widgettitle">Filter Post Here</h2>

		<?php
			foreach($categories as $category){
				if($category->name != 'Uncategorized'){
					echo '<div class="post-filter-item"><input class="filter" name="filter_cat[]" type="checkbox" value="'.$category->slug.'" >' . $category->name . '</div>';
				}
			}
				// echo '<div class="submit-filter-button"><input name="submit_filter" type="submit" value="Filter"></div>';
				// echo '<div class="testing"><input id="test" name="testing" type="text" value="Button"></div>';
			?>
		</div>

		<!-- </form> -->
<?php
	endif;		
?>