
<div class="content">

	<div class="box">
		<h3>Contact</h3>
		<div class="box-content">
		  <ul class="services">
			<li><a href="https://savannah.nongnu.org/users/trucomanx"><img src="imagenes/mail.png" width=20>E-mail</a></li>
		  </ul>
		</div>       
	</div>
  
	<div class="box">
		<h3>Social</h3>
		<div class="box-content">
		  <ul class="services">
			<li><a href="https://x.com/trucomanx"><img src="imagenes/x.svg" width=20>X</a></li>
		  </ul>
		  <ul class="services">
			<li><a href="https://trucomanx.wordpress.com/"><img src="imagenes/wordpress.png" width=20>Blog</a></li>
		  </ul>
		</div>
	</div>      
   
	<div class="box">
		<h3>News</h3>
		<div class="box-content">
			<?php
			$rss_feed = simplexml_load_file("https://sourceforge.net/p/diashapes-others/activity/feed");
			if(!empty($rss_feed)) 
			{
				$i=0;
				foreach ($rss_feed->channel->item as $feed_item) 
				{
					if($i>=4) break;
					?>
					<div><a class="feed_title" href="<?php echo $feed_item->link; ?>"><b><?php echo $feed_item->title; ?></b></a></div>
					<div><?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?></div>
					<?php		
					$i++;	
				}
			}
			?>
		</div>
	</div>

</div>
