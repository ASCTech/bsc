		<div id="front-header">
			<div class="container">
            	<a href="http://artsandsciences.osu.edu/" id="banner" title="Click here to visit the Arts and Sciences homepage">&nbsp;</a>
				<div id="front-text" class="span-12 last">
					<?php print $front_header; ?>
				</div>
                <div id="front-image">
               	 	<?php print $front_image; ?>
                </div>
			</div>
		</div>

	<div id="main-content" class="container">
		<div>
			<?php if($messages){ ?>
				<div id="message"><?php print $messages; ?></div>
			<?php } ?>

			<div class="content span-24">
				<div class="span-18" id="leftcontent">

					<?php if($tabs){ ?>
						<?php print $tabs ?>
					<?php } ?>
					<?php if($messages){ ?>
						<div id="message"><?php print $messages ?></div>
					<?php } ?>

					<div class="content">
						<?php print $before_content ?>
						<?php print $content ?>
					</div>
				</div>
				<div class="span-6 last" id="sidebar">
					<?php print $right_col; ?>
				</div> <!-- #sidebar -->
			</div>

		</div><!-- #leftcontent-nostyle -->

		
	</div>