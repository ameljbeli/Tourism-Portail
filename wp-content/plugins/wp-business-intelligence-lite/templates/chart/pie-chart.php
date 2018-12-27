<?php if ($chartData !== '[]'): ?>
  <div id="js-pie-container-<?=$chartId?>"></div>
  <div id="js-pie-container-legend-<?=$chartId?>"></div>

  <script type="text/javascript">
    jQuery(function() {
      "use strict";

      var chart = britecharts.donut();
      var data = <?=$chartData?>;
      var chartContainer = d3.select('#js-pie-container-<?=$chartId?>');
      wpbiBriteChartsHelpers.loadAndListen(chart, chartContainer, data);

      var showLegend = <?=$options['show_legend']?>;
      if (showLegend) {
        var legend = britecharts.legend();
  //    legend
  //      .numberFormat('.1f');
  //      .isHorizontal(true)
  //      .width(containerWidth*0.6)
  //      .markerSize(8)
  //      .height(40);
        d3.select('#js-pie-container-legend-<?=$chartId?>')
          .datum(data)
          .call(legend);
      }

    });

  </script>
<?php endif; ?>
