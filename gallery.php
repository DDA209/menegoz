<!-- TERRES CUITES -->

<?php
	$countdir = 60;
	$directory = $_GET["go"];
	$folder = 'images/'.$directory.'/'.$countdir;
	echo '<div class="container_24">';
	echo '<div class="blankline_1">';
	echo '</div>';
	echo '<div class="grid_24">';
	if ($directory == 'terracotta')
	{
		echo '<p class="galleries">Les Terres Cuites</p>';
	}
	if ($directory == 'bronzes')
	{
		echo '<p class="galleries">Les Bronzes</p>';
	}
	echo '</div>';
	echo '<div class="blankline_2">';
	echo '</div>';
	echo '</div>';
	while ($countdir > 0)
	{
		$i = 1;
		$folder = 'images/'.$directory.'/'.$countdir;
		if (is_dir($folder))
		{
			echo '<div class="container_24">';
			
			while ($i <= 5) 
			{
				$countfile = 1;
				$folder = 'images/'.$directory.'/'.$countdir.'/';
				$files = $folder.$countfile.'.jpg';
				if ($i <= 0)
				{
					echo '<div class="grid_4">';
					echo '&#160;';
					echo '</div>';
				}
				else
				{
					if (is_dir($folder))
					{
						if (file_exists($folder.'2.jpg'))
						{
							$description = fopen ($folder.'description.txt', 'r');
							$text = fgets ($description);
							echo '<div class="grid_4">';
/* pour vignette devant */				echo '<div style="width:150; height:150; position:absolute;"><img width="150" height="150" src="'.$folder.'t.jpg" /></div>';
//* sans vignette devant */				echo '<div style="width:150; height:150; position:relative;"><a href="'.$folder.'1.jpg" rel="prettyPhoto[galleryT'.$countdir.']" title="'.htmlEntities($text).'"><img width="150" height="150" src="'.$folder.'t.jpg" alt="'.htmlEntities($text).'" /></a></div>';
							echo '<div>';
/* pour vignette devant */				echo '<div style="width:150; height:150; position:relative;"><a href="'.$folder.'1.jpg" rel="prettyPhoto[galleryT'.$countdir.']" title="'.htmlEntities($text).'"><img width="150" height="150" src="pics/vignette.png" alt="'.htmlEntities($text).'" /></a></div>';
							while ($countfile <= 10)
							{
								$countfile++;
								if (file_exists($folder.$countfile.'.jpg'))
								{
									$files = $folder.$countfile.'.jpg';
//	erreur							echo '<a href="'.$folder.$countfile.'.jpg" rel="prettyPhoto[galleryT'.$countdir.']"" title="'.htmlEntities($text).'"></a>';
									echo '<a href="'.$files.'" rel="prettyPhoto[galleryT'.$countdir.']"" title="'.htmlEntities($text).'"></a>';
								}
								else
								{
									echo '';
								}
							}
							echo '</div>';
							echo '</div>';
						}
						else
						{
							$description = fopen ($folder.'description.txt', 'r');
							$text = fgets ($description);
							echo '<div class="grid_4">';
/* pour vignette devant */				echo '<div style="width:150; height:150; position:absolute;"><img width="150" height="150" src="'.$folder.'t.jpg" /></div>';
//* sans vignette devant */				echo '<div style="width:150; height:150; position:relative;"><a href="'.$folder.'1.jpg" rel="prettyPhoto" title="'.htmlEntities($text).'"><img width="150" height="150" src="'.$folder.'t.jpg" alt="'.htmlEntities($text).'" /></a></div>';
							echo '<div>';
/* pour vignette devant */				echo '<div style="width:150; height:150; position:relative;"><a href="'.$folder.'1.jpg" rel="prettyPhoto" title="'.htmlEntities($text).'"><img width="150" height="150" src="pics/vignette.png" alt="'.htmlEntities($text).'" /></a></div>';
							echo '</div>';
							echo '</div>';
						}
					}
					else
					{
						echo '<div class="grid_4">';
						echo '<img src="pics/1px.png" />';
						echo '</div>';
					}
					if ($i != 5)
					{
						echo '<div class="grid_1">';
						echo '<img src="pics/1px.png" />';
						echo '</div>';
					}
					else
					{
						echo "";
					}
					$i++;
					$countdir -= 1;
				}
			}
			if ($countdir == 1)
			{
				echo '';
			}
			else
			{
				if ($countdir > 1)
				{
					echo '</div>';
					echo '<div class="container_24">';
					echo '<div class="blankline_1">';
					echo '</div>';
					echo '</div>';
				}
				else
				{
					echo "";
				}
			}
		}
		else
		{
			$countdir -= 1;
		}

	}
?>
</div>