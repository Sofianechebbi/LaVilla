<div class="erreur">
		<?php
		foreach($msgErreurs as $erreur)
			{
				?>
				<div class="alert alert-danger col-md-offset-3 col-md-6">
					<strong>Attention</strong>, <?php echo $erreur ?> !
				</div>
			<?php	  
			}
		?>
</div>
