<div class="noticia clearfix">
	<?php
	print $fields['php']->content;
        if($fields['field_corte_imagen']->content == 1) {
                $imagen = theme('image_style', array('style_name' => 'front-6-noticias-arriba', 'path' => $fields['filename']->content));
        } elseif($fields['field_corte_imagen']->content == 2) {
                $imagen = theme('image_style', array('style_name' => 'front-6-noticias-centro', 'path' => $fields['filename']->content));
        } elseif($fields['field_corte_imagen']->content == 3) {
                $imagen = theme('image_style', array('style_name' => 'front-6-noticias-abajo', 'path' => $fields['filename']->content));
        }
	print '<div class="imagen">' . $imagen . '</div>';
	print $fields['field_titulo_portada']->content;
	?>
</div>
