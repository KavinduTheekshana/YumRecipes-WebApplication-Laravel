/**
 * Theme: Amezia - Responsive Bootstrap 4 Admin Dashboard
 * Author: Themesbrand
 * Dashboard-2
 */

 // Peity chart
    $('.peity-line').each(function () {
        $(this).peity("line", $(this).data());
    });

    $('.peity-bar').each(function () {
        $(this).peity("bar", $(this).data());
    });


// Datatable
    $('#datatable').DataTable();

// LINE CHART
    var line=new Morris.Line( {
        element: 'morris-line-chart', resize: true, data: [ {
            y: '2016 Q1', SeriesA: 2666, SeriesB: 2666
        }
        , {
            y: '2016 Q2', SeriesA: 2778, SeriesB: 1778
        }
        , {
            y: '2016 Q3', SeriesA: 4912, SeriesB: 4512
        }
        , {
            y: '2016 Q4', SeriesA: 3767, SeriesB: 1567
        }
        , {
            y: '2017 Q1', SeriesA: 3810, SeriesB: 9510
        }
        , {
            y: '2017 Q2', SeriesA: 7670, SeriesB: 1670
        }
        , {
            y: '2017 Q3', SeriesA: 2820, SeriesB: 5820
        }
        , {
            y: '2017 Q4', SeriesA: 15073, SeriesB: 10073
        }
        , {
            y: '2018 Q1', SeriesA: 10687, SeriesB: 8687
        }
        , {
            y: '2018 Q2', SeriesA: 8432, SeriesB: 7432
        }
        ], xkey: 'y', ykeys: [ 'SeriesA', 'SeriesB'], labels: [ 'Series A','Series B'], gridLineColor: '#eef0f2', lineColors: [ '#44a2d2', '#0acf97'], lineWidth: 2, hideHover: 'auto'
    });
    
//Animating a Donut with Svg.animate

    var chart = new Chartist.Pie('#animating-donut', {
        series: [20, 20, 20],
        labels: [1, 2, 3]
    }, {
        donut: true,
        showLabel: false,
        donutWidth: 30,
        plugins: [
        Chartist.plugins.tooltip()
        ]
    });
    
    chart.on('draw', function(data) {
        if(data.type === 'slice') {
        // Get the total path length in order to use for dash array animation
        var pathLength = data.element._node.getTotalLength();
    
        // Set a dasharray that matches the path length as prerequisite to animate dashoffset
        data.element.attr({
            'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
        });
    
        // Create animation definition while also assigning an ID to the animation for later sync usage
        var animationDefinition = {
            'stroke-dashoffset': {
            id: 'anim' + data.index,
            dur: 1000,
            from: -pathLength + 'px',
            to:  '0px',
            easing: Chartist.Svg.Easing.easeOutQuint,
            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
            fill: 'freeze'
            }
        };
    
        // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
        if(data.index !== 0) {
            animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
        }
    
        // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
        data.element.attr({
            'stroke-dashoffset': -pathLength + 'px'
        });
    
        // We can't use guided mode as the animations need to rely on setting begin manually
        // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
        data.element.animate(animationDefinition, false);
        }
    });
    
    // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
    chart.on('created', function() {
        if(window.__anim21278907124) {
        clearTimeout(window.__anim21278907124);
        window.__anim21278907124 = null;
        }
        window.__anim21278907124 = setTimeout(chart.update.bind(chart), 10000);
    });
   

// Map

    $('#world-map-markers').vectorMap({
        map : 'world_mill_en',
        scaleColors : ['#eff0f1', '#eff0f1'],
        normalizeFunction : 'polynomial',
        hoverOpacity : 0.7,
        hoverColor : false,
        regionStyle : {
            initial : {
                fill : '#eff0f1'
            }
        },
        markerStyle: {
            initial: {
                r: 4,
                'fill': '#0acf97',
                'fill-opacity': 0.9,
                'stroke': '#fff',
                'stroke-width' : 5,
                'stroke-opacity': 0.4
            },

            hover: {
                'stroke': '#fff',
                'fill-opacity': 1,
                'stroke-width': 2,
            }
        },
        backgroundColor : 'transparent',
        markers : [ 
            {latLng : [61.52, 105.31],name : 'Russia'}, 
            {latLng : [-25.27, 133.77],name : 'Australia'},  
            {latLng : [20.59, 78.96], name : 'India'},
            {latLng : [39.52, -87.12],name : 'Brazil'}
        ],
        series: {
            regions: [{
                values: {
                    "US": '#e0f9f2',
                    "AU": '#e0f9f2',
                    "IN": '#e0f9f2',
                    "RU": '#fde3e7',
                },
                attribute: 'fill'
            }]
        },
    });

    