<div class="panel-front clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php if($content['encabezado']): ?>
		<div class="panel-encabezado">
			<div class="inside"><?php print $content['encabezado']; ?></div>
		</div>
	<?php endif ?>

	<div class="contenedor clearfix">
		<div class="contenedor-izquierdo clearfix">
			<?php if($content['slideshow']): ?>
				<div class="panel-slideshow">
					<div class="inside"><?php print $content['slideshow']; ?></div>
				</div>
			<?php endif ?>
			
			<?php if($content['6-noticias']): ?>
				<div class="panel-6-noticias">
					<div class="inside"><?php print $content['6-noticias']; ?></div>
				</div>
			<?php endif ?>

			<div class="contenedor clearfix">
				<?php if($content['noticias-autogeneradas']): ?>
					<div class="panel-noticias-autogeneradas">
						<div class="inside"><?php print $content['noticias-autogeneradas']; ?></div>
					</div>
				<?php endif ?>
				<?php if($content['notas-graficas']): ?>
					<div class="panel-notas-graficas">
						<div class="inside"><?php print $content['notas-graficas']; ?></div>
					</div>
				<?php endif ?>
			</div>
		</div>

		<div class="contenedor-derecho clearfix">
			<?php if($content['audiovisuales']): ?>
				<div class="panel-audiovisuales">
					<div class="inside"><?php print $content['audiovisuales']; ?></div>
				</div>
			<?php endif ?>

			<?php if($content['titulares']): ?>
				<div class="panel-titulares">
					<div class="inside"><?php print $content['titulares']; ?></div>
				</div>
			<?php endif ?>
			<?php if($content['lo-mas-leido']): ?>
				<div class="panel-lo-mas-leido">
					<div class="inside"><?php print $content['lo-mas-leido']; ?></div>
				</div>
			<?php endif ?>
			<?php if($content['reportajes']): ?>
				<div class="panel-reportajes">
					<div class="inside"><?php print $content['reportajes']; ?></div>
				</div>
			<?php endif ?>
			<?php if($content['opinion']): ?>
				<div class="panel-opinion">
					<div class="inside"><?php print $content['opinion']; ?></div>
				</div>
			<?php endif ?>
			<?php if($content['debate']): ?>
				<div class="panel-debate">
					<div class="inside"><?php print $content['debate']; ?></div>
				</div>
			<?php endif ?>
			<?php if($content['especiales']): ?>
				<div class="panel-especiales">
					<div class="inside"><?php print $content['especiales']; ?></div>
				</div>
			<?php endif ?>
		</div>
	</div>

	<?php if($content['pie-de-pagina']): ?>
		<div class="panel-pie-de-pagina">
			<div class="inside"><?php print $content['pie-de-pagina']; ?></div>
		</div>
	<?php endif ?>
</div>
