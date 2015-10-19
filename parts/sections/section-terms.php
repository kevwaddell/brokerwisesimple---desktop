<?php 
$terms_title = get_field('terms_title', 'options');
$terms_txt = get_field('terms_text', 'options');
?>
<div id="terms-and-conditions" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $terms_title; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $terms_txt; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>