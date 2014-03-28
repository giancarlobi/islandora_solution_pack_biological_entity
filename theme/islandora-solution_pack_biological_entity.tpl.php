<?php
/**
 * @file
 * This is the template file for the porcus object page.
 *
 * Here we build an html page using the variables passed in by
 * the islandora_porcus_preprocess_islandora_porcus
 * function.  Elements such as labels and buttons can be added here
 */
$islandora_content = $islandora_object['BE']->content;
$path = drupal_get_path('module', 'islandora_solution_pack_biological_entity');
drupal_add_css("$path/css/islandora_solution_pack_biological_entity.css");
drupal_add_js("$path/js/islandora_solution_pack_biological_entity.js");
?>

<div class="islandora-solution_pack_biological_entity-object islandora">
  <button id="solution_pack_biological_entity_image">Bring Back</button>
  <div class ="solution_pack_biological_entity_thumb">
    <?php print $variables['islandora_thumbnail_img'] ?>
  </div>
  <div class="islandora-basic-image-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-solution_pack_biological_entity-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
  </div>
