
		
			
	<div class="bannerHolder">
		<div id="slides">	
			<?php
				foreach ($banners as $banner) {
				echo '<a href="' . $banner['link'] . '"><img src="' . $banner['imagePath'] . '" alt="' . $banner['title'] . '" /></a>';
				//TODO redirection to partner link
				//echo '<h2 class="title">' . $banner['title'] . '</h2>';
			}
			?>
		</div>
	</div>		
	<div class="articleHolder">
		<div class="articleNav">
			<?php
			$this->load->helper('url');
			echo "<a href='".base_url()."search/dateSearch/0'>
				Dnes</a>";
			echo "<a href='".base_url()."event/search/dateSearch/7'>
				Week</a>";
			echo "<a href='".base_url()."event/search/dateSearch/14'>
				Week</a>";
			echo "<a href='".base_url()."event/search/dateSearch/30'>
				Week</a>";
			?>
		</div>
		<article class="articleText">
			<div class="subCategoryMainHolder">
				<h1>Събития</h1>
				<div class="subCategoryEventHolder">
					<?php
					foreach($events as $event)
					{

						echo "<div class='subCategoryEvent'><h3><a href='".base_url()."event/".$event['eventId']."'>
						".$event['event_title']."</a></h3>";
						echo "<p class='date'>date1</p>";
						echo "<p>".$event['event_descr']."</p></div>";
					}
					?>
				</div>	
			</div>
		</article>
	</div>