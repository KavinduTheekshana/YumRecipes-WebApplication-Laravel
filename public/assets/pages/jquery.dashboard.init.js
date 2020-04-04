/**
 * Theme: Amezia - Responsive Bootstrap 4 Admin Dashboard
 * Author: Themesbrand
 * Dashboard
 * Module/App: Flot-Chart
 */


//  Morris Area chart

$( function () {
    "use strict";

    Morris.Area( {
        element: 'extra-area-chart', data: [ 
            {y: '2018-02', a: 0, b: 0, c:0},
            {y: '2018-03', a: 150, b: 45, c:15},
            {y: '2018-04', a: 60, b: 150, c:195},
            {y: '2018-05', a: 180, b: 36, c:21},
            {y: '2018-06', a: 90, b: 60, c:360},
            {y: '2018-07', a: 75, b: 240, c:120},
            {y: '2018-08', a: 30, b: 30, c:30}
        ], 
        lineColors: [ '#009688', '#fdb93e', '#148cca'], 
        xkey: 'y', 
        ykeys: [ 'a', 'b', 'c'], 
        labels: [ 'a', 'b', 'c'], 
        pointSize: 0, lineWidth: 0, 
        resize: true, 
        fillOpacity: 0.8, 
        behaveLikeLine: true, 
        gridLineColor: '#e0e0e0', 
        hideHover: 'auto'
    }
    );
     
// Morris bar chart

    Morris.Bar( {
        element: 'morris-bar-chart', data: [ 
            { y: 'Project-1', a: 10000, b: 8000, c:7800}, 
            { y: 'Project-2', a: 8500, b: 7000, c:6500}, 
            { y: 'Project-3', a: 9000, b: 7500, c:7000}, 
            { y: 'Project-4', a: 9500, b: 8500, c:7500},
            { y: 'Project-5', a: 7500, b: 5500, c:5000}
        ], 
        barGap:8,
        barSizeRatio:0.30,
        barShape: 'soft',
        barRadius: [5, 5, 5, 5],
        xkey: 'y', 
        ykeys: [ 'a', 'b', 'c'], 
        labels: ['Total', 'Used', 'Target'], 
        barColors: ['#44a2d2', '#98d4ce', '#c1d1de'], 
        hideHover: 'auto',
        preUnits: "$", 
        gridLineColor: '#eef0f2', 
        resize: true
    }
    );

 // Knob Chart    

    $(".knob").knob({
        'format' : function (value) {
           return value + '%';
        }
      });

      $('.knob').each(function () {

        var $this = $(this);
        var myVal = $this.attr("rel");
        $this.knob();

        $({
            value: 0
        }).animate({
            value: myVal
        }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.val(Math.ceil(this.value)).trigger('change');

            },           
        }) 
    });

// Metro

    $(".live-tile, .flip-list").not(".exclude").liveTile();

// Morris Dounut

    Morris.Donut({
        element: 'donut-example',
        data: [
          {label: "P1", value: 50},
          {label: "P3", value: 114},
          {label: "P2", value: 230}
        ],
        resize: true,
        colors:[ '#e3eaef', '#ff679b', '#777edd'], 
        labelColor: '#888',
        backgroundColor: 'transparent',
        fillOpacity: 0.1,
        formatter: function (x) { return x + "h"}
    });

// Todo-task

    $(function() {
        var todoListItem = $('.todo-list');
        var todoListInput = $('.todo-list-input');
        $('.add-new-todo-btn').on("click", function(event) {
          event.preventDefault();
    
          var item = $(this).prevAll('.todo-list-input').val();
    
          if (item) {
            todoListItem.append("<div class='todo-box'><i class='remove far fa-trash-alt'></i><div class='todo-task'><label class='ckbox'><input type='checkbox'/><span>" + item + "</span><i class='input-helper'></i></label></div></div>");
            todoListInput.val("");
          }
    
        });
    
        todoListItem.on('change', '.ckbox', function() {
          if ($(this).attr('checked')) {
            $(this).removeAttr('checked');
          } else {
            $(this).attr('checked', 'checked');
          }
    
          $(this).closest(".todo-box").toggleClass('completed');
    
        });
    
        todoListItem.on('click', '.remove', function() {
          $(this).parent().remove();
        });
    
      });    
   
});


