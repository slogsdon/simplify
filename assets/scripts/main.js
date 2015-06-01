/*global window*/
(function (window, document) {
  'use strict';
  var toggle     = document.querySelector('.sidebar-toggle');
  var sidebar    = document.querySelector('#sidebar');
  var checkbox   = document.querySelector('#sidebar-checkbox');
  var twitter    = document.getElementById('twitter');
  var facebook   = document.getElementById('facebook');
  var googlePlus = document.getElementById('google-plus');

  function listen(target, event, callback) {
    if (target.addEventListener) {
      target.addEventListener(event, callback, false);
    } else if (target.attachEvent) {
      target.attachEvent(event, callback, false);
    }
  }

  listen(document, 'click', function (e) {
    var target = e.target;

    if (!checkbox.checked ||
        sidebar.contains(target) ||
        (target === checkbox || target === toggle)) { return; }

    checkbox.checked = false;
  });

  // Social sharing links
  if (twitter) {
    listen(twitter, 'click', function (e) {
      e.preventDefault();
      window.open(this.href, 'twitter-share', 'width=550,height=235');
    });

    listen(facebook, 'click', function (e) {
      e.preventDefault();
      window.open(this.href, 'facebook-share', 'width=580,height=296');
    });

    listen(googlePlus, 'click', function (e) {
      e.preventDefault();
      window.open(this.href, 'google-plus-share', 'width=490,height=530');
    });
  }
}(window, window.document));
