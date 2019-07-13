/*global $, alert, console*/

$('.sign .button button:first-child').click(function () {
    'use strict';
    
    $('.sign .in').hide();
    $('.sign .up').show();
    $('.sign .button button:first-child').css({"background-color": "#fff", "color": "#2e3d49", "border": "none"});
    $('.sign .button button:last-child').css({"background-color": "#fafbfc", " border-bottom": "1px solid #dbe2e8", "color": "#7d97ad", "border": "1px solid #cfd4d9"});
});

$('.sign .button button:last-child').click(function () {
    'use strict';
    
    $('.sign .up').hide();
    $('.sign .in ').show();
    $('.sign .button button:last-child').css({"background-color": "#fff", "color": "#2e3d49", "border": "none"});
    $('.sign .button button:first-child').css({"background-color": "#fafbfc", " border-bottom": "1px solid #dbe2e8", "color": "#7d97ad", "border": "1px solid #cfd4d9"});
});
