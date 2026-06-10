<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>

<script>
    am5.ready(function() {
        // Create root element
        var root = am5.Root.new("kt_amcharts_5");

        // Set themes
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Create chart
        var chart = root.container.children.push(am5radar.RadarChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "panX",
            wheelY: "zoomX",
            innerRadius: am5.percent(10),
            startAngle: -90,
            endAngle: 180
        }));

        // Data
        var data = [{
            category: "Research",
            value: 25,
            full: 100,
            columnSettings: {
                fill: chart.get("colors").getIndex(0)
            }
        }, {
            category: "Marketing",
            value: 45,
            full: 100,
            columnSettings: {
                fill: chart.get("colors").getIndex(1)
            }
        }, {
            category: "Distribution",
            value: 65,
            full: 100,
            columnSettings: {
                fill: chart.get("colors").getIndex(2)
            }
        }, {
            category: "Human Resources",
            value: 85,
            full: 100,
            columnSettings: {
                fill: chart.get("colors").getIndex(3)
            }
        }];

        // Add cursor
        var cursor = chart.set("cursor", am5radar.RadarCursor.new(root, {
            behavior: "zoomX"
        }));

        cursor.lineY.set("visible", false);

        // Create axes and their renderers
        var xRenderer = am5radar.AxisRendererCircular.new(root, {});

        var isDark = document.documentElement.getAttribute("data-bs-theme") === "dark";

        xRenderer.labels.template.setAll({
            radius: 10,
            fill: am5.color(isDark ? 0xFFFFFF : 0x000000)
        });

        xRenderer.grid.template.setAll({
            forceHidden: true
        });

        var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
            renderer: xRenderer,
            min: 0,
            max: 100,
            strictMinMax: true,
            numberFormat: "#'%'",
            tooltip: am5.Tooltip.new(root, {})
        }));

        var yRenderer = am5radar.AxisRendererRadial.new(root, {
            minGridDistance: 20
        });

        yRenderer.labels.template.setAll({
            centerX: am5.p100,
            fontWeight: "500",
            fontSize: 18,
            templateField: "columnSettings"
        });

        yRenderer.grid.template.setAll({
            forceHidden: true
        });

        var yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
            categoryField: "category",
            renderer: yRenderer
        }));

        yAxis.data.setAll(data);

        // Create series
        var series1 = chart.series.push(am5radar.RadarColumnSeries.new(root, {
            xAxis: xAxis,
            yAxis: yAxis,
            clustered: false,
            valueXField: "full",
            categoryYField: "category",
            fill: root.interfaceColors.get("alternativeBackground")
        }));

        series1.columns.template.setAll({
            width: am5.p100,
            fillOpacity: 0.08,
            strokeOpacity: 0,
            cornerRadius: 20
        });

        series1.data.setAll(data);

        var series2 = chart.series.push(am5radar.RadarColumnSeries.new(root, {
            xAxis: xAxis,
            yAxis: yAxis,
            clustered: false,
            valueXField: "value",
            categoryYField: "category"
        }));

        series2.columns.template.setAll({
            width: am5.p100,
            strokeOpacity: 0,
            tooltipText: "{category}: {valueX}%",
            cornerRadius: 20,
            templateField: "columnSettings"
        });

        series2.data.setAll(data);

        // Animate chart and series in
        series1.appear(1000);
        series2.appear(1000);
        chart.appear(1000, 100);
    });
</script>

<script>

function toggleAddressField() {
   var checkbox = document.getElementById("addressToggleSwitch");
   var addressField = document.getElementById("new_publi_address_field");
   var addressInput = document.getElementById("new_publi_address_input");
   addressField.classList.toggle("d-none", !checkbox.checked);
   addressInput.value = "";
}

function disableToSubmit(button, form) {
    button.disabled = true;
    var form = document.getElementById(form);
    button.innerHTML = 'Criando... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>';
    form.submit();
}

</script>
    