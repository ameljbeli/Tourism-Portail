<?php $this->layout('admin/baseLayout', array('title' => 'Create Pie Chart')) ?>
<form id='create-pie-chart' action='<?=$this->e($action)?>' method='post'>

  <table class="form-table">
    <tbody>

      <?php $this->insert('admin/partials/QuerySelector', array('queries' => $queries)) ?>

      <tr>
        <th scope="row"><label for='show_legend'>Show Legend?</label></th>
        <td>
          <input id='show_legend' name='show_legend' type='checkbox'/>
        </td>
      </tr>

    </tbody>
  </table>

  <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Create"></p>

</form>