<?php 
$privacy_title = get_field('privacy_title', 'options');
$privacy_txt = get_field('privacy_text', 'options');
?>
<div id="privacy-policy" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $privacy_title; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $privacy_txt; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>