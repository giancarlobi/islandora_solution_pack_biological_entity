<?php
/**
 * @file
 * This is the template file for the porcus object page.
 *
 * Here we build an html page using the variables passed in by
 * the islandora_porcus_preprocess_islandora_porcus
 * function.  Elements such as labels and buttons can be added here
 */


//$islandora_content = $islandora_object['BE']->content;
$path = drupal_get_path('module', 'islandora_solution_pack_biological_entity');
//drupal_add_css("$path/css/islandora_solution_pack_biological_entity.css");
//drupal_add_js("$path/js/islandora_solution_pack_biological_entity.js");
?>

<div class="islandora-solution_pack_biological_entity-object islandora">

<?php print ("Has Taxonomic Level Of:");?>
<?php foreach ($variables['related_rank'] as $pid => $child) {

?>

  <div class ="solution_pack_biological_entity_thumb">
    <?php print '<a href="/islandora/object/'.$pid.'">'.$child['title'].'</a>'; ?>
  </div>

<?php
  }
?>

<?php print ("Has Broader:");?>
<?php foreach ($variables['related_broader'] as $pid => $child) {

?>

  <div class ="solution_pack_biological_entity_thumb">
    <?php print '<a href="/islandora/object/'.$pid.'">'.$child['title'].'</a>'; ?>
  </div>

<?php
  }
?>

<?php print ("Has Narrower:");?>
<?php foreach ($variables['related_narrower'] as $pid => $child) {

?>

  <div class ="solution_pack_biological_entity_thumb">
    <?php print '<a href="/islandora/object/'.$pid.'">'.$child['title'].'</a>'; ?>
  </div>

<?php
  }
?>

</div>
