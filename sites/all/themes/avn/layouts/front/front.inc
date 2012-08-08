<?php

// Plugin definition
$plugin = array(
  'title' => t('Front'),
  'category' => t('Agencia Venezolana de Noticias'),
  'icon' => 'front.png',
  'theme' => 'panels_front',
  'css' => 'front.css',
  'regions' => array(
    'slideshow' => t('Slideshow 4 noticias'),
    'audiovisuales' => t('Audiovisuales'),
    '6-noticias' => t('6 Noticias'),
    'noticias-autogeneradas' => t('Noticias autogeneradas'),
    'notas-graficas' => t('Notas gráficas'),
    'titulares' => t('Titulares'),
    'lo-mas-leido' => t('Lo mas leído'),
    'reportajes' => t('Reportajes'),
    'opinion' => t('Opinión'),
    'debate' => t('Debate'),
    'especiales' => t('Especiales'),
  ),
);
