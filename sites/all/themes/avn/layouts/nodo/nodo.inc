<?php

// Plugin definition
$plugin = array(
  'title' => t('Nodo'),
  'category' => t('Agencia Venezolana de Noticias'),
  'icon' => 'nodo.png',
  'theme' => 'panels_nodo',
  'css' => 'nodo.css',
  'regions' => array(
    'encabezado' => t('Encabezado'),
    'noticia' => t('Noticia'),
    'titulares' => t('Titulares'),
    'reportajes' => t('Reportajes'),
    'opinion' => t('Opinión'),
    'pie-de-pagina' => t('Pie de página'),
  ),
);
