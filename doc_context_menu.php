<?php

// on ekbdev
// Locate at /admin/structure/context/list/documentation_page_links

$context = new stdClass();
$context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
$context->api_version = 3;
$context->name = 'documentation_page_links';
$context->description = '';
$context->tag = 'Documentation';
$context->conditions = array(
  'node' => array(
    'values' => array(
      'priv_documentation' => 'priv_documentation',
    ),
    'options' => array(
      'node_form' => '1',
    ),
  ),
);
$context->reactions = array(
  'block' => array(
    'blocks' => array(
      'menu-menu-documentation-links' => array(
        'module' => 'menu',
        'delta' => 'menu-documentation-links',
        'region' => 'sidebar_first',
        'weight' => '-10',
      ),
    ),
  ),
);
$context->condition_mode = 0;

// Translatables
// Included for use with string extractors like potx.
t('Documentation');
