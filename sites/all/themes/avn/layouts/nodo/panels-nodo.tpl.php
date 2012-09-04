<div class="panel-nodo clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php if($content['encabezado']): ?>
		<div class="panel-encabezado">
			<div class="inside"><?php print $content['encabezado']; ?></div>
		</div>
	<?php endif ?>

	<div class="contenedor clearfix">
		<div class="contenedor-izquierdo clearfix">
			<?php if($content['noticia']): ?>
				<div class="panel-noticia">
					<div class="inside"><?php print $content['noticia']; ?></div>
				</div>
			<?php endif ?>
		</div>

		<div class="contenedor-derecho clearfix">
			<?php if($content['titulares']): ?>
				<div class="panel-titulares">
					<div class="inside"><?php print $content['titulares']; ?></div>
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
		</div>
	</div>

	<?php if($content['pie-de-pagina']): ?>
		<div class="panel-pie-de-pagina">
			<div class="inside"><?php print $content['pie-de-pagina']; ?></div>
		</div>
	<?php endif ?>
</div>
