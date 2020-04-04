/**
 * Theme: Amezia - Responsive Bootstrap 4 Admin Dashboard
 * Author: Themesbrand
 * Form Advanced
 */



$(function () {
    // Select2
    $(".select2").select2({
       width: '100%'
   });
   
   // Tags Input
   jQuery('#tags').tagsInput({width:'auto'});

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    //colorpicker
    $('#cp1').colorpicker();
    $('#cp2').colorpicker();
    $('#cp3').colorpicker({
       color: '#ff679b',
       format: 'rgb'
   });
   $('#cp6').colorpicker({
       color: "#88cc33",
       horizontal: true
   });
    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
       verticalbuttons: true,
       verticalupclass: 'ion-plus-round',
       verticaldownclass: 'ion-minus-round',
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });

   $("input[name='demo1']").TouchSpin({
       min: 0,
       max: 100,
       step: 0.1,
       decimals: 2,
       boostat: 5,
       maxboostedstep: 10,
       postfix: '%',
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });
   $("input[name='demo2']").TouchSpin({
       min: -1000000000,
       max: 1000000000,
       stepinterval: 50,
       maxboostedstep: 10000000,
       prefix: '$',
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });
   $("input[name='demo3']").TouchSpin({
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });
   $("input[name='demo3_21']").TouchSpin({
       initval: 40,
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });
   $("input[name='demo3_22']").TouchSpin({
       initval: 40,
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });

   $("input[name='demo5']").TouchSpin({
       prefix: "pre",
       postfix: "post",
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });
   $("input[name='demo0']").TouchSpin({
       buttondown_class: 'btn btn-primary',
       buttonup_class: 'btn btn-primary'
   });

});
