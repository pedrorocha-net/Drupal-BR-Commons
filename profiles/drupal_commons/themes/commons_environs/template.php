<?php
function commons_environs_commons_core_info_block() {
  $content = '';
  
  $content .= '<div id="acquia-footer-message">';

  $content .= '<a href="http://acquia.com/drupalcommons" title="Drupal Commons social business software">';
  $content .= theme('image', 'profiles/drupal_commons/images/commons_droplet.png', t('Drupal Commons social business software'), t('Drupal Commons social business software'));
  $content .= '</a>';
  $content .= '<span>';
  $content .= t('A !dc Community, powered by', array('!dc' => l(t('Drupal Commons'), 'http://acquia.com/drupalcommons', array('attributes' => array('title' => t('A Drupal Commons social business software')))))) . '&nbsp;';
  $content .= l(t('Acquia'), 'http://acquia.com', array('attributes' => array('title' => t('Acquia'))));
  $content .= '</span>';
  $content .= '</div>';
  
  $content .= '<div id="fusion-footer-message">';
  $content .= t('Theme by') . '&nbsp;';
  $content .= '<a href="http://www.vml.com" title="Drupal Themes by VML">VML</a>';
  $content .= ', ' . t('powered by') . '&nbsp;';
  $content .= '<a href="http://fusiondrupalthemes.com" title="Premium Drupal themes powered by Fusion">Fusion</a>.';
  $content .= '</div>';

  return $content;
}