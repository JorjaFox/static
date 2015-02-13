// Slideup part of the site

        jQuery.extend(jQuery.easing,
        {
         easeOutCubic: function (x, t, b, c, d) {
          return c*((t=t/d-1)*t*t + 1) + b;
         }
        });
        jQuery(document).ready(function($) {
        	var isopen = false,
        	    bitHeight = $('#bitsubscribe').height(),
        		$bit = $('#bit');
        	setTimeout(function () {
        		$bit.animate({
        				bottom: '-' + bitHeight - 10 + 'px'
        			}, 200);
        		if ( (document.location.href.indexOf('subscribe=') > -1) || (document.location.href.indexOf('fb_source=') > -1) || (document.location.href.indexOf('utm_source=') > -1) || (document.referrer.match(/^https?:\/\/([^\/]+\.)?tumblr\.com(\/|$)/i)) || (document.referrer.match(/^https?:\/\/([^\/]+\.)?twitter\.com(\/|$)/i)) || (document.referrer.match(/^https?:\/\/([^\/]+\.)?t\.co(\/|$)/i))) {
        			open();
        		}
        	}, 300);
        	var open = function() {
        		if (isopen) return;
        		isopen = true;
        		$('a.bsub', $bit).addClass('open');
        		$('#bitsubscribe', $bit).addClass('open')
        		$bit.stop();
        		$bit.animate({
        			bottom: '0px'
        		   },{duration:400, easing:"easeOutCubic"});
        	}
        	var close = function() {
        		if (!isopen) return;
        		isopen = false;
        		$bit.stop();
        		$bit.animate({
        			bottom: '-' + bitHeight - 10 + 'px'
        		}, 200, function() {
        			$('a.bsub', $bit).removeClass('open');
        			$('#bitsubscribe', $bit).removeClass('open');
        		});
        	}
        	$('a.bsub', $bit).click(function () {
        		if ( !isopen )
        			open();
        		else
        			close();
        	});
        	var target = $bit.has('form').length? $bit : $(document);
        	target.keyup(function(e) {
        		if (27 == e.keyCode) close();
        	});

        	$( '#loggedout-follow' ).submit( function() {
        		email = $( '#loggedout-follow-field' ).val();
        		if ( '' === email || !email.match( /^.*@.*\..*$/ ) ) {
        			var error = LoggedOutFollow.invalid_email;
        			$( '#loggedout-follow-error' ).text( error ).css( 'opacity', 1 ).fadeIn( 'slow' );
        			$( '#loggedout-follow-field' ).focus( function() { $('#loggedout-follow-error').fadeOut(); } );
        			return false;
        		}
        		return true;
        	});
        });;
// Pingdom RUM

var _prum = [['id', '54dc32c2abe53db40506c88f'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
// Site247 RUM

var rumMOKey='5fbddb8dedec6c345d8c608fbcf3708a';(function(){if(window.performance && window.performance.timing && window.performance.navigation) {var site24x7_rum_beacon=document.createElement('script');site24x7_rum_beacon.setAttribute('src','//static.site24x7rum.com/js/rum-beacon-min.js');document.scripts[0].appendChild(site24x7_rum_beacon);}})(window)