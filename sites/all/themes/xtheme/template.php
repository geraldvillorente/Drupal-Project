<?php

// Example process_page hook
function xtheme_process_page(&$vars) {
  $vars['logo'] = url( drupal_get_path('theme', 'xtheme').'/logo.png' );
}
