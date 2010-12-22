<?php

/**
 * Override from base theme to switch background image and kill
 * copenhagens example text
 */
function billund_ting_search_form($form){
  $form['submit']['#type'] = "image_button" ;
  $form['submit']['#src'] = drupal_get_path('theme','copenhagen')."/images/searchbutton.png";
  $form['submit']['#attributes']['class'] = "";

  return drupal_render($form);
}
