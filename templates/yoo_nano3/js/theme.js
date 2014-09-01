/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($) {

    var config = $('html').data('config') || {};

    // Social buttons
    $('article[data-permalink]').socialButtons(config);
    //okay, let's have some fun
    var count = 0, clicked = false, UI = $.UIkit, footerDiv = $('.bix-footer'),footer = $('<div class="uk-width-1-1 uk-text-large uk-text-center uk-margin "></div>')
            .css('height','30px'),
       link =  $('<a href="http://www.bixie.nl" class="uk-animation-slide-top"><i class="uk-icon-bixie uk-margin-small-right"></i>Bixie</a>')
            .bind("contextmenu", function () {
                (function () {
                    var s = document.createElement('style');
                    s.innerHTML = '@-webkit-keyframes roll {from { -webkit-transform: rotate(0deg) } to { -webkit-transform: rotate(360deg) }}' +
                        ' @-moz-keyframes roll { from { -moz-transform: rotate(0deg) } to { -moz-transform: rotate(360deg) }}' +
                        ' @keyframes roll {from { transform: rotate(0deg) } to { transform: rotate(360deg) }}' +
                        ' body { -moz-animation-name: roll; -moz-animation-duration: 4s; -moz-animation-iteration-count: 1; ' +
                        '-webkit-animation-name: roll; -webkit-animation-duration: 4s; -webkit-animation-iteration-count: 1;}';
                    document.getElementsByTagName('head')[0].appendChild(s);
                }());
                return false;
            }),
        feeler = $('<span></span>').css({
            position: 'absolute',
            bottom: 0,
            right: 0,
            width: '1px',
            height: '1px'
        });
    footerDiv.dblclick(function () {
        if (count  > 7 && !clicked) {
            footerDiv.find('> div').append(footer);
            count = 0;
            clicked = true;
        }
        if (count == 7 && clicked) {
            footer.append('<span class="uk-animation-shake">Ook deze fantastische website is gemaakt door </span>').append(link);
        }
    }).prepend(feeler);
    UI.$doc.on("uk-scroll", function (e) {
        if(UI.Utils.isInView(feeler, {})) {
            count++;
        }
    });

});
