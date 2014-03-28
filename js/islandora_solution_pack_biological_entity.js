
(function($) {
  Drupal.behaviors.IslandoraBE = {
    attach: function(context, settings) {
      $('#solution_pack_biological_entity_image').hide();
      $('.solution_pack_biological_entity_thumb').click(function() {
        $('.solution_pack_biological_entity_thumb').hide('slow');
        $('#solution_pack_biological_entity_image').show('slow');
      });
      $('#solution_pack_biological_entity_image').click(function() {
        $('.solution_pack_biological_entity_thumb').show('slow');
        $('#solution_pack_biological_entity_image').hide('slow');
      });
    }
  };
})(jQuery);
