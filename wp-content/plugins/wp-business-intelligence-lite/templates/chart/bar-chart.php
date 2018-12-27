<?php if ($chartData !== '[]'): ?>
  <div id="js-bar-container-<?=$chartId?>"></div>
  <script type="text/javascript">
    jQuery(function() {
      "use strict";

      var chart = britecharts.bar();
      var data = <?=$chartData?>;
      var chartContainer = d3.select('#js-bar-container-<?=$chartId?>');
      wpbiBriteChartsHelpers.loadAndListen(chart, chartContainer, data);
    });
  </script>
<?php endif; ?>
