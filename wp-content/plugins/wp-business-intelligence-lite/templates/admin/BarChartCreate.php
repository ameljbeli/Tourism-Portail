<?php $this->layout('admin/baseLayout', array('title' => 'Create Bar Chart')) ?>
<form id='create-bar-chart' action='<?=$this->e($action)?>' method='post'>
  <table class="form-table">
    <tbody>
      <?php $this->insert('admin/partials/QuerySelector', array('queries' => $queries)) ?>
    </tbody>
  </table>
  <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Create"></p>
</form>