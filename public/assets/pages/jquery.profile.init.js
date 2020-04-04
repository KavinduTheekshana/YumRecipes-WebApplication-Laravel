/*
 Template Name: Amezia - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Profile
 */

 // Line Chart

var config = {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Augest', 'September'],
    datasets: [{
      label: "Conversion Rate",
      fill: false,
      backgroundColor: '#4eb7eb',
      borderColor: '#4eb7eb',
      data: [44,60,-33,58,-4,57,-89,60,-33,58,-22,35]
  }, {
      label: "Average Sale Value",
      fill: false,
      backgroundColor: '#e3eaef',
      borderColor: "#e3eaef",
      borderDash: [5, 5],
      data: [-68,41,86,-49,2,65,-64,86,-49,2,-8,41]
  }]
  },
  options: {
    responsive: true,
      // title:{
      //     display:true,
      //     text:'Chart.js Line Chart'
      // },
      tooltips: {
          mode: 'index',
          intersect: false
      },
      hover: {
          mode: 'nearest',
          intersect: true
      },
      scales: {
          xAxes: [{
              display: true,
              // scaleLabel: {
              //     display: true,
              //     labelString: 'Month'
              // },
              gridLines: {
                  color: "rgba(0,0,0,0.1)"
              }
          }],
          yAxes: [{
              gridLines: {
                  color: "rgba(255,255,255,0.05)",
                  fontColor: '#fff'
              },
              ticks: {
                  max: 100,
                  min: -100,
                  stepSize: 20
              }
          }]
      }
  }
};
window.onload = function() {
  var ctx = document.getElementById('lineChart').getContext('2d');
  window.myLine = new Chart(ctx, config);
};

// Map

$(document).ready(function(){
    map = new GMaps({
      el: '#gmaps-markers',
      lat: -12.043333,
      lng: -77.028333,
      zoomControl : true,
      zoomControlOpt: {
          style : 'SMALL',
          position: 'TOP_LEFT'
      },
      panControl : false,
      streetViewControl : false,
      mapTypeControl: false,
      overviewMapControl: false
    });
  });
  
// Popup

$('.mfp-image').magnificPopup({
    type:'image',
    mainClass: 'mfp-with-zoom',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    }
});

// File Uploead

$('.dropify').dropify();