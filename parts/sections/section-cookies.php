<?php 
$cookies_title = get_field('cookies_title', 'options');
$cookies_txt = get_field('cookies_text', 'options');
?>
<div id="cookie-policy" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $cookies_title; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $cookies_txt; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>