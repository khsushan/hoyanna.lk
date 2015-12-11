/* ========================================================================= */
/*  Preloader Script
/* =========================================================================

window.onload = function () {
    document.getElementById('loading-mask').style.display = 'none';
} */

$(function(){
    /* ========================================================================= */
    /*  Menu item highlighting
    /* ========================================================================= */

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 400) {
            jQuery("#navigation").css("background-color","#00C7FC");
            jQuery("#navigation").addClass("animated-nav");
        }
    });

    $('#nav').onePageNav({
        filter: ':not(.external)',
        scrollSpeed: 950,
        scrollThreshold: 1
    });

    // Slider Height
    var slideHeight = $(window).height();
    $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',slideHeight);

    $(window).resize(function(){'use strict',
        $('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',slideHeight);
    });

    // portfolio filtering

    $("#projects").mixItUp();

    //fancybox

    $(".fancybox").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 650,

        closeEffect : 'elastic',
        closeSpeed  : 550,
    });


    /* ========================================================================= */
    /*  Facts count
    /* ========================================================================= */

    "use strict";
    $(".fact-item").appear(function () {
        $(".fact-item [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });

/* ========================================================================= */
/*  On scroll fade/bounce fffect
/* ========================================================================= */

    $("#testimonial").owlCarousel({
        pagination : true, // Show bullet pagination
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
    });
    
});

/* ========================================================================= */
/*  On scroll fade/bounce fffect
/* ========================================================================= */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        mobile: false
    });
    wow.init();

/* ---------------------------------------------------------------------- */
/*      Progress Bars
/* ---------------------------------------------------------------------- */

initProgress('.progress');

function initProgress(el){
    jQuery(el).each(function(){
        var pData = jQuery(this).data('progress');
        progress(pData,jQuery(this));
    });
}
            
function progress(percent, $element) {
    var progressBarWidth = 0;
    
    (function myLoop (i,max) {
        progressBarWidth = i * $element.width() / 100;
        setTimeout(function () {   
        $element.find('div').find('small').html(i+'%');
        $element.find('div').width(progressBarWidth);
        if (++i<=max) myLoop(i,max);     
        }, 10)
    })(0,percent);  
}   

$(document).ready(function() {

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar').fullCalendar({
        theme: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,

        // add event name to title attribute on mouseover
        eventMouseover: function(event, jsEvent, view) {
            if (view.name !== 'agendaDay') {
                $(jsEvent.target).attr('title', event.title);
            }
        },
        eventDestroy: function(event, element, view)
        {
            alert("removing stuff");
        },
        eventClick: function(calEvent, jsEvent, view)
        {
            var r=confirm("Delete " + calEvent.title);
            if (r===true)
              {
                  $('#calendar').fullCalendar('removeEvents', calEvent._id);
              }
        },

        // For DEMO only
        // *************
        events: [
            {
            title: '[Session] - Startup UVA Sri Lanka Disrupt 1.0',
            start: new Date(y, m, 1)},
        
        {
            id: 999,
            title: '[Meetup] - Crop Marketing Strategies.',
            start: new Date(y, m, d - 6),
            allDay: false},
        {
            id: 999,
            title: '[Session] - Startup UVA Sri Lanka Disrupt 2.0',
            start: new Date(y, m, d + 4, 20, 0),
            allDay: false},
        
        {
            title: '[Meetup] - Marketers UVA. ',
            start: new Date(y, m, d + 1, 16, 0),
            end: new Date(y, m, d + 1, 22, 30),
            allDay: false},
        {
            title: '[Session] - Carrier Opportunities Guidance.',
            start: new Date(y, m, 28),
             allDay: false}
        ]
    });


    // Visual Event
    // http://www.sprymedia.co.uk/article/Visual+Event
    $('.vebookmarklet').click(function() {
        if (typeof VisualEvent != 'undefined') {
            if (document.getElementById('Event_display')) {
                VisualEvent.fnClose();
            } else {
                VisualEvent.fnInit();
            }
        } else {
            var n = document.createElement('script');
            n.setAttribute('language', 'JavaScript');
            n.setAttribute('src', 'http://www.sprymedia.co.uk/design/event/media/js/event-loader.js');
            document.body.appendChild(n);
        }
    });

    // See https://gist.github.com/938670
    $('.layers').click(function() {
        $('.vebookmarklet').trigger('click');
        var veColors = ['black', 'orange', 'purple', 'green', 'blue', 'yellow', 'red'],
            veColorLength = veColors.length - 1,
            veLayerIndex = 0;

        function showVeLayer(nxt) {
            veLayerIndex += (nxt) ? 1 : -1;
            if (veLayerIndex > veColorLength) {
                veLayerIndex = 0;
            }
            if (veLayerIndex < 0) {
                veLayerIndex = veColorLength;
            }

            var veLayer = $('.Event_bg_' + veColors[veLayerIndex]);
            if (veLayer.length === 0) {
                showVeLayer(nxt);
                return;
            }

            $('.Event_bg_' + veColors.join(', .Event_bg_')).hide();
            veLayer.show();
        }

        $(document).keyup(function(e) {
            switch (e.which) {
            case 39:
            case 40:
                // right/down
                showVeLayer(true);
                break;
            case 37:
            case 38:
                // left/up
                showVeLayer();
                break;
            }
        });

    });

});


$(function () {
    $('#chart1').highcharts({
        title: {
            text: 'Industrial Job Demands',
            x: -20 //center
        },
        subtitle: {
            text: 'Year 2015',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number Of Jobs'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Travel & Tourism',
            data: [70, 69, 95, 145, 182, 215, 202, 295, 233, 183, 139, 96]
        }, {
            name: 'Hospitality, Catering',
            data: [-02, 108, 187, 113, 170, 220, 248, 191, 201, 141, 86, 25]
        }, {
            name: 'Idustrial, Manufacturing & Production',
            data: [-09, 06, 35, 84, 135, 170, 186, 179, 143, 90, 39, 10]
        }, {
            name: 'Agriculture, Forestry & Outdoor',
            data: [ 233, 183, 139, 96, 170, 166, 142, 103, 66, 48, 57, 85]
        },{
            name: 'Transport, Logistics & Distribution',
            data: [39, 92, 57, 85, 119, 152, 170, 166, 142, 103, 66, 48]
        }
        ]
    });
});


$(function () {
    $('#chart2').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
             text: 'Trending Job Opportunities',
        },
        subtitle: {
             text: 'Travel & Tourism',
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: ''
            }
        },
        yAxis: {
            title: {
                text: 'Number Of Jobs'
            },
            min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f}'
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },

        series: [{
            name: 'Travel Executive',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
                [Date.UTC(1970, 9, 21), 0],
                [Date.UTC(1970, 10, 4), 28],
                [Date.UTC(1970, 10, 9), 25],
                [Date.UTC(1970, 10, 27), 2],
                [Date.UTC(1970, 11, 2), 28],
                [Date.UTC(1970, 11, 26), 28],
                [Date.UTC(1970, 11, 29), 47],
                [Date.UTC(1971, 0, 11), 79],
                [Date.UTC(1971, 0, 26), 72],
                [Date.UTC(1971, 1, 3), 102],
                [Date.UTC(1971, 1, 11), 112],
                [Date.UTC(1971, 1, 25), 12],
                [Date.UTC(1971, 2, 11), 118],
                [Date.UTC(1971, 3, 11), 119],
                [Date.UTC(1971, 4, 1), 185],
                [Date.UTC(1971, 4, 5), 22],
                [Date.UTC(1971, 4, 19), 115],
                [Date.UTC(1971, 5, 3), 0]
            ]
        }, {
            name: 'Trainee Travel Executives',
            data: [
                [Date.UTC(1970, 9, 29), 0],
                [Date.UTC(1970, 10, 9), 4],
                [Date.UTC(1970, 11, 1), 25],
                [Date.UTC(1971, 0, 1), 166],
                [Date.UTC(1971, 0, 10), 18],
                [Date.UTC(1971, 1, 19), 176],
                [Date.UTC(1971, 2, 25), 22],
                [Date.UTC(1971, 3, 19), 241],
                [Date.UTC(1971, 3, 30), 205],
                [Date.UTC(1971, 4, 14), 17],
                [Date.UTC(1971, 4, 24), 1.1],
                [Date.UTC(1971, 5, 10), 0]
            ]
        }, {
            name: 'Senior Travel Executives',
            data: [
                [Date.UTC(1970, 10, 25), 0],
                [Date.UTC(1970, 11, 6), 25],
                [Date.UTC(1970, 11, 20), 141],
                [Date.UTC(1970, 11, 25), 164],
                [Date.UTC(1971, 0, 4), 16],
                [Date.UTC(1971, 0, 17), 255],
                [Date.UTC(1971, 0, 24), 262],
                [Date.UTC(1971, 1, 4), 25],
                [Date.UTC(1971, 1, 14), 242],
                [Date.UTC(1971, 2, 6), 274],
                [Date.UTC(1971, 2, 14), 262],
                [Date.UTC(1971, 2, 24), 26],
                [Date.UTC(1971, 3, 2), 281],
                [Date.UTC(1971, 3, 12), 263],
                [Date.UTC(1971, 3, 28), 277],
                [Date.UTC(1971, 4, 5), 268],
                [Date.UTC(1971, 4, 10), 256],
                [Date.UTC(1971, 4, 15), 239],
                [Date.UTC(1971, 4, 20), 2.3],
                [Date.UTC(1971, 5, 5), 2],
                [Date.UTC(1971, 5, 10), 15],
                [Date.UTC(1971, 5, 15), 149],
                [Date.UTC(1971, 5, 23), 108]
            ]
        }, {
            name: 'Service Crew',
            data: [
                [Date.UTC(1970, 9, 29), 9],
                [Date.UTC(1970, 10, 9), 14],
                [Date.UTC(1970, 11, 1), 25],
                [Date.UTC(1971, 0, 1), 66],
                [Date.UTC(1971, 0, 10), 188],
                [Date.UTC(1971, 1, 19), 76],
                [Date.UTC(1971, 2, 25), 122],
                [Date.UTC(1971, 3, 19), 341],
                [Date.UTC(1971, 3, 30), 105],
                [Date.UTC(1971, 4, 14), 170],
                [Date.UTC(1971, 4, 24), 80],
                [Date.UTC(1971, 5, 10), 10]
            ]
        }
        ]
    });
});