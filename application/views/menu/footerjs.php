<script>
var ChartsAmcharts = function() {

	<?php $no=1; foreach ($persubbab->result() as $key) {
		# code...
		?>


    var initChartSample<?=$no?> = function() {
        var chart = AmCharts.makeChart("chart_<?=$no?>", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open sans',
            
            "color":    '#888',

            "dataProvider": [
            {
                "Kuis": "Sangat Tidak Setuju",
                "nilai": <?= $satu[$no];?>
            },
            {
                "Kuis": "Tidak Setuju",
                "nilai": <?= $dua[$no];?>
            },
            {
                "Kuis": "Cukup",
                "nilai": <?= $tiga[$no];?>
            },
            {
                "Kuis": "Setuju",
                "nilai": <?= $empat[$no];?>
            },
            {
                "Kuis": "Sangat Setuju",
                "nilai": <?= $lima[$no];?>
            } ],
            "valueField": "nilai",
            "titleField": "Kuis",
            "exportConfig": {
                menuItems: [{
                    icon: Metronic.getGlobalPluginsPath() + "amcharts/amcharts/images/export.png",
                    format: 'png'
                }]
            }
        });

        $('#chart_<?=$no?>').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }
	<?php
	$no++; } ?>
    

    return {
        //main function to initiate the module

        init: function() {
            <?php
            for($i=1;$i<=47;$i++){ ?>
            initChartSample<?=$i?>();

            <?php }?>
        }

    };

}();
</script>