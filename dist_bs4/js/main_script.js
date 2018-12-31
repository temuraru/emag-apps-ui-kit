/*!
 * eMAG Apps UI KIT v1.0.0 * Copyright 2001-2018 eMAG HX Team
 * Licensed under the ISC license
 */
window.photonPageLang = document.documentElement.lang || 'en';

// @Todo add translations also for en_BG, ro_RO etc

window.photonTranslations = {
  'listing': {
    'en': {
      noResults: 'No records to display.',
      view: 'View',
      of: 'of',
      items: 'rows'
    },
    'ro': {
      noResults: 'Nu există înregistrări.',
      view: 'Vezi',
      of: 'din',
      items: 'rânduri'
    },
    'bg': {
      noResults: 'Няма записи за показване.',
      view: 'Вижте',
      of: 'на',
      items: 'реда'
    },
    'hu': {
      noResults: 'Nincs bejegyzés megjelenítéséhez.',
      view: 'Megtekint',
      of: 'of',
      items: 'sorok'
    },
    'pl': {
      noResults: 'Brak nagrań do odtworzenia.',
      view: 'Zobacz',
      of: 'z',
      items: 'rzędami'
    }
  }
};

/* NProgress, (c) 2013, 2014 Rico Sta. Cruz - http://ricostacruz.com/nprogress
 * @license MIT */

;(function(root, factory) {

  if (typeof define === 'function' && define.amd) {
    define(factory);
  } else if (typeof exports === 'object') {
    module.exports = factory();
  } else {
    root.NProgress = factory();
  }

})(this, function() {
  var NProgress = {};

  NProgress.version = '0.2.0';

  var Settings = NProgress.settings = {
    minimum: 0.08,
    easing: 'ease',
    positionUsing: '',
    speed: 200,
    trickle: true,
    trickleRate: 0.02,
    trickleSpeed: 800,
    showSpinner: true,
    barSelector: '[role="bar"]',
    spinnerSelector: '[role="spinner"]',
    parent: 'body',
    template: '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'
  };

  /**
   * Updates configuration.
   *
   *     NProgress.configure({
   *       minimum: 0.1
   *     });
   */
  NProgress.configure = function(options) {
    var key, value;
    for (key in options) {
      value = options[key];
      if (value !== undefined && options.hasOwnProperty(key)) Settings[key] = value;
    }

    return this;
  };

  /**
   * Last number.
   */

  NProgress.status = null;

  /**
   * Sets the progress bar status, where `n` is a number from `0.0` to `1.0`.
   *
   *     NProgress.set(0.4);
   *     NProgress.set(1.0);
   */

  NProgress.set = function(n) {
    var started = NProgress.isStarted();

    n = clamp(n, Settings.minimum, 1);
    NProgress.status = (n === 1 ? null : n);

    var progress = NProgress.render(!started),
        bar      = progress.querySelector(Settings.barSelector),
        speed    = Settings.speed,
        ease     = Settings.easing;

    progress.offsetWidth; /* Repaint */

    queue(function(next) {
      // Set positionUsing if it hasn't already been set
      if (Settings.positionUsing === '') Settings.positionUsing = NProgress.getPositioningCSS();

      // Add transition
      css(bar, barPositionCSS(n, speed, ease));

      if (n === 1) {
        // Fade out
        css(progress, { 
          transition: 'none', 
          opacity: 1 
        });
        progress.offsetWidth; /* Repaint */

        setTimeout(function() {
          css(progress, { 
            transition: 'all ' + speed + 'ms linear', 
            opacity: 0 
          });
          setTimeout(function() {
            NProgress.remove();
            next();
          }, speed);
        }, speed);
      } else {
        setTimeout(next, speed);
      }
    });

    return this;
  };

  NProgress.isStarted = function() {
    return typeof NProgress.status === 'number';
  };

  /**
   * Shows the progress bar.
   * This is the same as setting the status to 0%, except that it doesn't go backwards.
   *
   *     NProgress.start();
   *
   */
  NProgress.start = function() {
    if (!NProgress.status) NProgress.set(0);

    var work = function() {
      setTimeout(function() {
        if (!NProgress.status) return;
        NProgress.trickle();
        work();
      }, Settings.trickleSpeed);
    };

    if (Settings.trickle) work();

    return this;
  };

  /**
   * Hides the progress bar.
   * This is the *sort of* the same as setting the status to 100%, with the
   * difference being `done()` makes some placebo effect of some realistic motion.
   *
   *     NProgress.done();
   *
   * If `true` is passed, it will show the progress bar even if its hidden.
   *
   *     NProgress.done(true);
   */

  NProgress.done = function(force) {
    if (!force && !NProgress.status) return this;

    return NProgress.inc(0.3 + 0.5 * Math.random()).set(1);
  };

  /**
   * Increments by a random amount.
   */

  NProgress.inc = function(amount) {
    var n = NProgress.status;

    if (!n) {
      return NProgress.start();
    } else {
      if (typeof amount !== 'number') {
        amount = (1 - n) * clamp(Math.random() * n, 0.1, 0.95);
      }

      n = clamp(n + amount, 0, 0.994);
      return NProgress.set(n);
    }
  };

  NProgress.trickle = function() {
    return NProgress.inc(Math.random() * Settings.trickleRate);
  };

  /**
   * Waits for all supplied jQuery promises and
   * increases the progress as the promises resolve.
   *
   * @param $promise jQUery Promise
   */
  (function() {
    var initial = 0, current = 0;

    NProgress.promise = function($promise) {
      if (!$promise || $promise.state() === "resolved") {
        return this;
      }

      if (current === 0) {
        NProgress.start();
      }

      initial++;
      current++;

      $promise.always(function() {
        current--;
        if (current === 0) {
            initial = 0;
            NProgress.done();
        } else {
            NProgress.set((initial - current) / initial);
        }
      });

      return this;
    };

  })();

  /**
   * (Internal) renders the progress bar markup based on the `template`
   * setting.
   */

  NProgress.render = function(fromStart) {
    if (NProgress.isRendered()) return document.getElementById('nprogress');

    addClass(document.documentElement, 'nprogress-busy');
    
    var progress = document.createElement('div');
    progress.id = 'nprogress';
    progress.innerHTML = Settings.template;

    var bar      = progress.querySelector(Settings.barSelector),
        perc     = fromStart ? '-100' : toBarPerc(NProgress.status || 0),
        parent   = document.querySelector(Settings.parent),
        spinner;
    
    css(bar, {
      transition: 'all 0 linear',
      transform: 'translate3d(' + perc + '%,0,0)'
    });

    if (!Settings.showSpinner) {
      spinner = progress.querySelector(Settings.spinnerSelector);
      spinner && removeElement(spinner);
    }

    if (parent != document.body) {
      addClass(parent, 'nprogress-custom-parent');
    }

    parent.appendChild(progress);
    return progress;
  };

  /**
   * Removes the element. Opposite of render().
   */

  NProgress.remove = function() {
    removeClass(document.documentElement, 'nprogress-busy');
    removeClass(document.querySelector(Settings.parent), 'nprogress-custom-parent');
    var progress = document.getElementById('nprogress');
    progress && removeElement(progress);
  };

  /**
   * Checks if the progress bar is rendered.
   */

  NProgress.isRendered = function() {
    return !!document.getElementById('nprogress');
  };

  /**
   * Determine which positioning CSS rule to use.
   */

  NProgress.getPositioningCSS = function() {
    // Sniff on document.body.style
    var bodyStyle = document.body.style;

    // Sniff prefixes
    var vendorPrefix = ('WebkitTransform' in bodyStyle) ? 'Webkit' :
                       ('MozTransform' in bodyStyle) ? 'Moz' :
                       ('msTransform' in bodyStyle) ? 'ms' :
                       ('OTransform' in bodyStyle) ? 'O' : '';

    if (vendorPrefix + 'Perspective' in bodyStyle) {
      // Modern browsers with 3D support, e.g. Webkit, IE10
      return 'translate3d';
    } else if (vendorPrefix + 'Transform' in bodyStyle) {
      // Browsers without 3D support, e.g. IE9
      return 'translate';
    } else {
      // Browsers without translate() support, e.g. IE7-8
      return 'margin';
    }
  };

  /**
   * Helpers
   */

  function clamp(n, min, max) {
    if (n < min) return min;
    if (n > max) return max;
    return n;
  }

  /**
   * (Internal) converts a percentage (`0..1`) to a bar translateX
   * percentage (`-100%..0%`).
   */

  function toBarPerc(n) {
    return (-1 + n) * 100;
  }


  /**
   * (Internal) returns the correct CSS for changing the bar's
   * position given an n percentage, and speed and ease from Settings
   */

  function barPositionCSS(n, speed, ease) {
    var barCSS;

    if (Settings.positionUsing === 'translate3d') {
      barCSS = { transform: 'translate3d('+toBarPerc(n)+'%,0,0)' };
    } else if (Settings.positionUsing === 'translate') {
      barCSS = { transform: 'translate('+toBarPerc(n)+'%,0)' };
    } else {
      barCSS = { 'margin-left': toBarPerc(n)+'%' };
    }

    barCSS.transition = 'all '+speed+'ms '+ease;

    return barCSS;
  }

  /**
   * (Internal) Queues a function to be executed.
   */

  var queue = (function() {
    var pending = [];
    
    function next() {
      var fn = pending.shift();
      if (fn) {
        fn(next);
      }
    }

    return function(fn) {
      pending.push(fn);
      if (pending.length == 1) next();
    };
  })();

  /**
   * (Internal) Applies css properties to an element, similar to the jQuery 
   * css method.
   *
   * While this helper does assist with vendor prefixed property names, it 
   * does not perform any manipulation of values prior to setting styles.
   */

  var css = (function() {
    var cssPrefixes = [ 'Webkit', 'O', 'Moz', 'ms' ],
        cssProps    = {};

    function camelCase(string) {
      return string.replace(/^-ms-/, 'ms-').replace(/-([\da-z])/gi, function(match, letter) {
        return letter.toUpperCase();
      });
    }

    function getVendorProp(name) {
      var style = document.body.style;
      if (name in style) return name;

      var i = cssPrefixes.length,
          capName = name.charAt(0).toUpperCase() + name.slice(1),
          vendorName;
      while (i--) {
        vendorName = cssPrefixes[i] + capName;
        if (vendorName in style) return vendorName;
      }

      return name;
    }

    function getStyleProp(name) {
      name = camelCase(name);
      return cssProps[name] || (cssProps[name] = getVendorProp(name));
    }

    function applyCss(element, prop, value) {
      prop = getStyleProp(prop);
      element.style[prop] = value;
    }

    return function(element, properties) {
      var args = arguments,
          prop, 
          value;

      if (args.length == 2) {
        for (prop in properties) {
          value = properties[prop];
          if (value !== undefined && properties.hasOwnProperty(prop)) applyCss(element, prop, value);
        }
      } else {
        applyCss(element, args[1], args[2]);
      }
    }
  })();

  /**
   * (Internal) Determines if an element or space separated list of class names contains a class name.
   */

  function hasClass(element, name) {
    var list = typeof element == 'string' ? element : classList(element);
    return list.indexOf(' ' + name + ' ') >= 0;
  }

  /**
   * (Internal) Adds a class to an element.
   */

  function addClass(element, name) {
    var oldList = classList(element),
        newList = oldList + name;

    if (hasClass(oldList, name)) return; 

    // Trim the opening space.
    element.className = newList.substring(1);
  }

  /**
   * (Internal) Removes a class from an element.
   */

  function removeClass(element, name) {
    var oldList = classList(element),
        newList;

    if (!hasClass(element, name)) return;

    // Replace the class name.
    newList = oldList.replace(' ' + name + ' ', ' ');

    // Trim the opening and closing spaces.
    element.className = newList.substring(1, newList.length - 1);
  }

  /**
   * (Internal) Gets a space separated list of the class names on the element. 
   * The list is wrapped with a single space on each end to facilitate finding 
   * matches within the list.
   */

  function classList(element) {
    return (' ' + (element.className || '') + ' ').replace(/\s+/gi, ' ');
  }

  /**
   * (Internal) Removes an element from the DOM.
   */

  function removeElement(element) {
    element && element.parentNode && element.parentNode.removeChild(element);
  }

  return NProgress;
});


/*!
  * Bootstrap v4.1.3 (https://getbootstrap.com/)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery'), require('popper.js')) :
  typeof define === 'function' && define.amd ? define(['exports', 'jquery', 'popper.js'], factory) :
  (factory((global.bootstrap = {}),global.jQuery,global.Popper));
}(this, (function (exports,$,Popper) { 'use strict';

  $ = $ && $.hasOwnProperty('default') ? $['default'] : $;
  Popper = Popper && Popper.hasOwnProperty('default') ? Popper['default'] : Popper;

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function _objectSpread(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i] != null ? arguments[i] : {};
      var ownKeys = Object.keys(source);

      if (typeof Object.getOwnPropertySymbols === 'function') {
        ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) {
          return Object.getOwnPropertyDescriptor(source, sym).enumerable;
        }));
      }

      ownKeys.forEach(function (key) {
        _defineProperty(target, key, source[key]);
      });
    }

    return target;
  }

  function _inheritsLoose(subClass, superClass) {
    subClass.prototype = Object.create(superClass.prototype);
    subClass.prototype.constructor = subClass;
    subClass.__proto__ = superClass;
  }

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): util.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Util = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Private TransitionEnd Helpers
     * ------------------------------------------------------------------------
     */
    var TRANSITION_END = 'transitionend';
    var MAX_UID = 1000000;
    var MILLISECONDS_MULTIPLIER = 1000; // Shoutout AngusCroll (https://goo.gl/pxwQGp)

    function toType(obj) {
      return {}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase();
    }

    function getSpecialTransitionEndEvent() {
      return {
        bindType: TRANSITION_END,
        delegateType: TRANSITION_END,
        handle: function handle(event) {
          if ($$$1(event.target).is(this)) {
            return event.handleObj.handler.apply(this, arguments); // eslint-disable-line prefer-rest-params
          }

          return undefined; // eslint-disable-line no-undefined
        }
      };
    }

    function transitionEndEmulator(duration) {
      var _this = this;

      var called = false;
      $$$1(this).one(Util.TRANSITION_END, function () {
        called = true;
      });
      setTimeout(function () {
        if (!called) {
          Util.triggerTransitionEnd(_this);
        }
      }, duration);
      return this;
    }

    function setTransitionEndSupport() {
      $$$1.fn.emulateTransitionEnd = transitionEndEmulator;
      $$$1.event.special[Util.TRANSITION_END] = getSpecialTransitionEndEvent();
    }
    /**
     * --------------------------------------------------------------------------
     * Public Util Api
     * --------------------------------------------------------------------------
     */


    var Util = {
      TRANSITION_END: 'bsTransitionEnd',
      getUID: function getUID(prefix) {
        do {
          // eslint-disable-next-line no-bitwise
          prefix += ~~(Math.random() * MAX_UID); // "~~" acts like a faster Math.floor() here
        } while (document.getElementById(prefix));

        return prefix;
      },
      getSelectorFromElement: function getSelectorFromElement(element) {
        var selector = element.getAttribute('data-target');

        if (!selector || selector === '#') {
          selector = element.getAttribute('href') || '';
        }

        try {
          return document.querySelector(selector) ? selector : null;
        } catch (err) {
          return null;
        }
      },
      getTransitionDurationFromElement: function getTransitionDurationFromElement(element) {
        if (!element) {
          return 0;
        } // Get transition-duration of the element


        var transitionDuration = $$$1(element).css('transition-duration');
        var floatTransitionDuration = parseFloat(transitionDuration); // Return 0 if element or transition duration is not found

        if (!floatTransitionDuration) {
          return 0;
        } // If multiple durations are defined, take the first


        transitionDuration = transitionDuration.split(',')[0];
        return parseFloat(transitionDuration) * MILLISECONDS_MULTIPLIER;
      },
      reflow: function reflow(element) {
        return element.offsetHeight;
      },
      triggerTransitionEnd: function triggerTransitionEnd(element) {
        $$$1(element).trigger(TRANSITION_END);
      },
      // TODO: Remove in v5
      supportsTransitionEnd: function supportsTransitionEnd() {
        return Boolean(TRANSITION_END);
      },
      isElement: function isElement(obj) {
        return (obj[0] || obj).nodeType;
      },
      typeCheckConfig: function typeCheckConfig(componentName, config, configTypes) {
        for (var property in configTypes) {
          if (Object.prototype.hasOwnProperty.call(configTypes, property)) {
            var expectedTypes = configTypes[property];
            var value = config[property];
            var valueType = value && Util.isElement(value) ? 'element' : toType(value);

            if (!new RegExp(expectedTypes).test(valueType)) {
              throw new Error(componentName.toUpperCase() + ": " + ("Option \"" + property + "\" provided type \"" + valueType + "\" ") + ("but expected type \"" + expectedTypes + "\"."));
            }
          }
        }
      }
    };
    setTransitionEndSupport();
    return Util;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): alert.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Alert = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'alert';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.alert';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var Selector = {
      DISMISS: '[data-dismiss="alert"]'
    };
    var Event = {
      CLOSE: "close" + EVENT_KEY,
      CLOSED: "closed" + EVENT_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      ALERT: 'alert',
      FADE: 'fade',
      SHOW: 'show'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Alert =
    /*#__PURE__*/
    function () {
      function Alert(element) {
        this._element = element;
      } // Getters


      var _proto = Alert.prototype;

      // Public
      _proto.close = function close(element) {
        var rootElement = this._element;

        if (element) {
          rootElement = this._getRootElement(element);
        }

        var customEvent = this._triggerCloseEvent(rootElement);

        if (customEvent.isDefaultPrevented()) {
          return;
        }

        this._removeElement(rootElement);
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        this._element = null;
      }; // Private


      _proto._getRootElement = function _getRootElement(element) {
        var selector = Util.getSelectorFromElement(element);
        var parent = false;

        if (selector) {
          parent = document.querySelector(selector);
        }

        if (!parent) {
          parent = $$$1(element).closest("." + ClassName.ALERT)[0];
        }

        return parent;
      };

      _proto._triggerCloseEvent = function _triggerCloseEvent(element) {
        var closeEvent = $$$1.Event(Event.CLOSE);
        $$$1(element).trigger(closeEvent);
        return closeEvent;
      };

      _proto._removeElement = function _removeElement(element) {
        var _this = this;

        $$$1(element).removeClass(ClassName.SHOW);

        if (!$$$1(element).hasClass(ClassName.FADE)) {
          this._destroyElement(element);

          return;
        }

        var transitionDuration = Util.getTransitionDurationFromElement(element);
        $$$1(element).one(Util.TRANSITION_END, function (event) {
          return _this._destroyElement(element, event);
        }).emulateTransitionEnd(transitionDuration);
      };

      _proto._destroyElement = function _destroyElement(element) {
        $$$1(element).detach().trigger(Event.CLOSED).remove();
      }; // Static


      Alert._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var $element = $$$1(this);
          var data = $element.data(DATA_KEY);

          if (!data) {
            data = new Alert(this);
            $element.data(DATA_KEY, data);
          }

          if (config === 'close') {
            data[config](this);
          }
        });
      };

      Alert._handleDismiss = function _handleDismiss(alertInstance) {
        return function (event) {
          if (event) {
            event.preventDefault();
          }

          alertInstance.close(this);
        };
      };

      _createClass(Alert, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }]);

      return Alert;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DISMISS, Alert._handleDismiss(new Alert()));
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Alert._jQueryInterface;
    $$$1.fn[NAME].Constructor = Alert;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Alert._jQueryInterface;
    };

    return Alert;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): button.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Button = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'button';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.button';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var ClassName = {
      ACTIVE: 'active',
      BUTTON: 'btn',
      FOCUS: 'focus'
    };
    var Selector = {
      DATA_TOGGLE_CARROT: '[data-toggle^="button"]',
      DATA_TOGGLE: '[data-toggle="buttons"]',
      INPUT: 'input',
      ACTIVE: '.active',
      BUTTON: '.btn'
    };
    var Event = {
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY,
      FOCUS_BLUR_DATA_API: "focus" + EVENT_KEY + DATA_API_KEY + " " + ("blur" + EVENT_KEY + DATA_API_KEY)
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Button =
    /*#__PURE__*/
    function () {
      function Button(element) {
        this._element = element;
      } // Getters


      var _proto = Button.prototype;

      // Public
      _proto.toggle = function toggle() {
        var triggerChangeEvent = true;
        var addAriaPressed = true;
        var rootElement = $$$1(this._element).closest(Selector.DATA_TOGGLE)[0];

        if (rootElement) {
          var input = this._element.querySelector(Selector.INPUT);

          if (input) {
            if (input.type === 'radio') {
              if (input.checked && this._element.classList.contains(ClassName.ACTIVE)) {
                triggerChangeEvent = false;
              } else {
                var activeElement = rootElement.querySelector(Selector.ACTIVE);

                if (activeElement) {
                  $$$1(activeElement).removeClass(ClassName.ACTIVE);
                }
              }
            }

            if (triggerChangeEvent) {
              if (input.hasAttribute('disabled') || rootElement.hasAttribute('disabled') || input.classList.contains('disabled') || rootElement.classList.contains('disabled')) {
                return;
              }

              input.checked = !this._element.classList.contains(ClassName.ACTIVE);
              $$$1(input).trigger('change');
            }

            input.focus();
            addAriaPressed = false;
          }
        }

        if (addAriaPressed) {
          this._element.setAttribute('aria-pressed', !this._element.classList.contains(ClassName.ACTIVE));
        }

        if (triggerChangeEvent) {
          $$$1(this._element).toggleClass(ClassName.ACTIVE);
        }
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        this._element = null;
      }; // Static


      Button._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          if (!data) {
            data = new Button(this);
            $$$1(this).data(DATA_KEY, data);
          }

          if (config === 'toggle') {
            data[config]();
          }
        });
      };

      _createClass(Button, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }]);

      return Button;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE_CARROT, function (event) {
      event.preventDefault();
      var button = event.target;

      if (!$$$1(button).hasClass(ClassName.BUTTON)) {
        button = $$$1(button).closest(Selector.BUTTON);
      }

      Button._jQueryInterface.call($$$1(button), 'toggle');
    }).on(Event.FOCUS_BLUR_DATA_API, Selector.DATA_TOGGLE_CARROT, function (event) {
      var button = $$$1(event.target).closest(Selector.BUTTON)[0];
      $$$1(button).toggleClass(ClassName.FOCUS, /^focus(in)?$/.test(event.type));
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Button._jQueryInterface;
    $$$1.fn[NAME].Constructor = Button;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Button._jQueryInterface;
    };

    return Button;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): carousel.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Carousel = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'carousel';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.carousel';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var ARROW_LEFT_KEYCODE = 37; // KeyboardEvent.which value for left arrow key

    var ARROW_RIGHT_KEYCODE = 39; // KeyboardEvent.which value for right arrow key

    var TOUCHEVENT_COMPAT_WAIT = 500; // Time for mouse compat events to fire after touch

    var Default = {
      interval: 5000,
      keyboard: true,
      slide: false,
      pause: 'hover',
      wrap: true
    };
    var DefaultType = {
      interval: '(number|boolean)',
      keyboard: 'boolean',
      slide: '(boolean|string)',
      pause: '(string|boolean)',
      wrap: 'boolean'
    };
    var Direction = {
      NEXT: 'next',
      PREV: 'prev',
      LEFT: 'left',
      RIGHT: 'right'
    };
    var Event = {
      SLIDE: "slide" + EVENT_KEY,
      SLID: "slid" + EVENT_KEY,
      KEYDOWN: "keydown" + EVENT_KEY,
      MOUSEENTER: "mouseenter" + EVENT_KEY,
      MOUSELEAVE: "mouseleave" + EVENT_KEY,
      TOUCHEND: "touchend" + EVENT_KEY,
      LOAD_DATA_API: "load" + EVENT_KEY + DATA_API_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      CAROUSEL: 'carousel',
      ACTIVE: 'active',
      SLIDE: 'slide',
      RIGHT: 'carousel-item-right',
      LEFT: 'carousel-item-left',
      NEXT: 'carousel-item-next',
      PREV: 'carousel-item-prev',
      ITEM: 'carousel-item'
    };
    var Selector = {
      ACTIVE: '.active',
      ACTIVE_ITEM: '.active.carousel-item',
      ITEM: '.carousel-item',
      NEXT_PREV: '.carousel-item-next, .carousel-item-prev',
      INDICATORS: '.carousel-indicators',
      DATA_SLIDE: '[data-slide], [data-slide-to]',
      DATA_RIDE: '[data-ride="carousel"]'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Carousel =
    /*#__PURE__*/
    function () {
      function Carousel(element, config) {
        this._items = null;
        this._interval = null;
        this._activeElement = null;
        this._isPaused = false;
        this._isSliding = false;
        this.touchTimeout = null;
        this._config = this._getConfig(config);
        this._element = $$$1(element)[0];
        this._indicatorsElement = this._element.querySelector(Selector.INDICATORS);

        this._addEventListeners();
      } // Getters


      var _proto = Carousel.prototype;

      // Public
      _proto.next = function next() {
        if (!this._isSliding) {
          this._slide(Direction.NEXT);
        }
      };

      _proto.nextWhenVisible = function nextWhenVisible() {
        // Don't call next when the page isn't visible
        // or the carousel or its parent isn't visible
        if (!document.hidden && $$$1(this._element).is(':visible') && $$$1(this._element).css('visibility') !== 'hidden') {
          this.next();
        }
      };

      _proto.prev = function prev() {
        if (!this._isSliding) {
          this._slide(Direction.PREV);
        }
      };

      _proto.pause = function pause(event) {
        if (!event) {
          this._isPaused = true;
        }

        if (this._element.querySelector(Selector.NEXT_PREV)) {
          Util.triggerTransitionEnd(this._element);
          this.cycle(true);
        }

        clearInterval(this._interval);
        this._interval = null;
      };

      _proto.cycle = function cycle(event) {
        if (!event) {
          this._isPaused = false;
        }

        if (this._interval) {
          clearInterval(this._interval);
          this._interval = null;
        }

        if (this._config.interval && !this._isPaused) {
          this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval);
        }
      };

      _proto.to = function to(index) {
        var _this = this;

        this._activeElement = this._element.querySelector(Selector.ACTIVE_ITEM);

        var activeIndex = this._getItemIndex(this._activeElement);

        if (index > this._items.length - 1 || index < 0) {
          return;
        }

        if (this._isSliding) {
          $$$1(this._element).one(Event.SLID, function () {
            return _this.to(index);
          });
          return;
        }

        if (activeIndex === index) {
          this.pause();
          this.cycle();
          return;
        }

        var direction = index > activeIndex ? Direction.NEXT : Direction.PREV;

        this._slide(direction, this._items[index]);
      };

      _proto.dispose = function dispose() {
        $$$1(this._element).off(EVENT_KEY);
        $$$1.removeData(this._element, DATA_KEY);
        this._items = null;
        this._config = null;
        this._element = null;
        this._interval = null;
        this._isPaused = null;
        this._isSliding = null;
        this._activeElement = null;
        this._indicatorsElement = null;
      }; // Private


      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, Default, config);
        Util.typeCheckConfig(NAME, config, DefaultType);
        return config;
      };

      _proto._addEventListeners = function _addEventListeners() {
        var _this2 = this;

        if (this._config.keyboard) {
          $$$1(this._element).on(Event.KEYDOWN, function (event) {
            return _this2._keydown(event);
          });
        }

        if (this._config.pause === 'hover') {
          $$$1(this._element).on(Event.MOUSEENTER, function (event) {
            return _this2.pause(event);
          }).on(Event.MOUSELEAVE, function (event) {
            return _this2.cycle(event);
          });

          if ('ontouchstart' in document.documentElement) {
            // If it's a touch-enabled device, mouseenter/leave are fired as
            // part of the mouse compatibility events on first tap - the carousel
            // would stop cycling until user tapped out of it;
            // here, we listen for touchend, explicitly pause the carousel
            // (as if it's the second time we tap on it, mouseenter compat event
            // is NOT fired) and after a timeout (to allow for mouse compatibility
            // events to fire) we explicitly restart cycling
            $$$1(this._element).on(Event.TOUCHEND, function () {
              _this2.pause();

              if (_this2.touchTimeout) {
                clearTimeout(_this2.touchTimeout);
              }

              _this2.touchTimeout = setTimeout(function (event) {
                return _this2.cycle(event);
              }, TOUCHEVENT_COMPAT_WAIT + _this2._config.interval);
            });
          }
        }
      };

      _proto._keydown = function _keydown(event) {
        if (/input|textarea/i.test(event.target.tagName)) {
          return;
        }

        switch (event.which) {
          case ARROW_LEFT_KEYCODE:
            event.preventDefault();
            this.prev();
            break;

          case ARROW_RIGHT_KEYCODE:
            event.preventDefault();
            this.next();
            break;

          default:
        }
      };

      _proto._getItemIndex = function _getItemIndex(element) {
        this._items = element && element.parentNode ? [].slice.call(element.parentNode.querySelectorAll(Selector.ITEM)) : [];
        return this._items.indexOf(element);
      };

      _proto._getItemByDirection = function _getItemByDirection(direction, activeElement) {
        var isNextDirection = direction === Direction.NEXT;
        var isPrevDirection = direction === Direction.PREV;

        var activeIndex = this._getItemIndex(activeElement);

        var lastItemIndex = this._items.length - 1;
        var isGoingToWrap = isPrevDirection && activeIndex === 0 || isNextDirection && activeIndex === lastItemIndex;

        if (isGoingToWrap && !this._config.wrap) {
          return activeElement;
        }

        var delta = direction === Direction.PREV ? -1 : 1;
        var itemIndex = (activeIndex + delta) % this._items.length;
        return itemIndex === -1 ? this._items[this._items.length - 1] : this._items[itemIndex];
      };

      _proto._triggerSlideEvent = function _triggerSlideEvent(relatedTarget, eventDirectionName) {
        var targetIndex = this._getItemIndex(relatedTarget);

        var fromIndex = this._getItemIndex(this._element.querySelector(Selector.ACTIVE_ITEM));

        var slideEvent = $$$1.Event(Event.SLIDE, {
          relatedTarget: relatedTarget,
          direction: eventDirectionName,
          from: fromIndex,
          to: targetIndex
        });
        $$$1(this._element).trigger(slideEvent);
        return slideEvent;
      };

      _proto._setActiveIndicatorElement = function _setActiveIndicatorElement(element) {
        if (this._indicatorsElement) {
          var indicators = [].slice.call(this._indicatorsElement.querySelectorAll(Selector.ACTIVE));
          $$$1(indicators).removeClass(ClassName.ACTIVE);

          var nextIndicator = this._indicatorsElement.children[this._getItemIndex(element)];

          if (nextIndicator) {
            $$$1(nextIndicator).addClass(ClassName.ACTIVE);
          }
        }
      };

      _proto._slide = function _slide(direction, element) {
        var _this3 = this;

        var activeElement = this._element.querySelector(Selector.ACTIVE_ITEM);

        var activeElementIndex = this._getItemIndex(activeElement);

        var nextElement = element || activeElement && this._getItemByDirection(direction, activeElement);

        var nextElementIndex = this._getItemIndex(nextElement);

        var isCycling = Boolean(this._interval);
        var directionalClassName;
        var orderClassName;
        var eventDirectionName;

        if (direction === Direction.NEXT) {
          directionalClassName = ClassName.LEFT;
          orderClassName = ClassName.NEXT;
          eventDirectionName = Direction.LEFT;
        } else {
          directionalClassName = ClassName.RIGHT;
          orderClassName = ClassName.PREV;
          eventDirectionName = Direction.RIGHT;
        }

        if (nextElement && $$$1(nextElement).hasClass(ClassName.ACTIVE)) {
          this._isSliding = false;
          return;
        }

        var slideEvent = this._triggerSlideEvent(nextElement, eventDirectionName);

        if (slideEvent.isDefaultPrevented()) {
          return;
        }

        if (!activeElement || !nextElement) {
          // Some weirdness is happening, so we bail
          return;
        }

        this._isSliding = true;

        if (isCycling) {
          this.pause();
        }

        this._setActiveIndicatorElement(nextElement);

        var slidEvent = $$$1.Event(Event.SLID, {
          relatedTarget: nextElement,
          direction: eventDirectionName,
          from: activeElementIndex,
          to: nextElementIndex
        });

        if ($$$1(this._element).hasClass(ClassName.SLIDE)) {
          $$$1(nextElement).addClass(orderClassName);
          Util.reflow(nextElement);
          $$$1(activeElement).addClass(directionalClassName);
          $$$1(nextElement).addClass(directionalClassName);
          var transitionDuration = Util.getTransitionDurationFromElement(activeElement);
          $$$1(activeElement).one(Util.TRANSITION_END, function () {
            $$$1(nextElement).removeClass(directionalClassName + " " + orderClassName).addClass(ClassName.ACTIVE);
            $$$1(activeElement).removeClass(ClassName.ACTIVE + " " + orderClassName + " " + directionalClassName);
            _this3._isSliding = false;
            setTimeout(function () {
              return $$$1(_this3._element).trigger(slidEvent);
            }, 0);
          }).emulateTransitionEnd(transitionDuration);
        } else {
          $$$1(activeElement).removeClass(ClassName.ACTIVE);
          $$$1(nextElement).addClass(ClassName.ACTIVE);
          this._isSliding = false;
          $$$1(this._element).trigger(slidEvent);
        }

        if (isCycling) {
          this.cycle();
        }
      }; // Static


      Carousel._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = _objectSpread({}, Default, $$$1(this).data());

          if (typeof config === 'object') {
            _config = _objectSpread({}, _config, config);
          }

          var action = typeof config === 'string' ? config : _config.slide;

          if (!data) {
            data = new Carousel(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'number') {
            data.to(config);
          } else if (typeof action === 'string') {
            if (typeof data[action] === 'undefined') {
              throw new TypeError("No method named \"" + action + "\"");
            }

            data[action]();
          } else if (_config.interval) {
            data.pause();
            data.cycle();
          }
        });
      };

      Carousel._dataApiClickHandler = function _dataApiClickHandler(event) {
        var selector = Util.getSelectorFromElement(this);

        if (!selector) {
          return;
        }

        var target = $$$1(selector)[0];

        if (!target || !$$$1(target).hasClass(ClassName.CAROUSEL)) {
          return;
        }

        var config = _objectSpread({}, $$$1(target).data(), $$$1(this).data());

        var slideIndex = this.getAttribute('data-slide-to');

        if (slideIndex) {
          config.interval = false;
        }

        Carousel._jQueryInterface.call($$$1(target), config);

        if (slideIndex) {
          $$$1(target).data(DATA_KEY).to(slideIndex);
        }

        event.preventDefault();
      };

      _createClass(Carousel, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }]);

      return Carousel;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DATA_SLIDE, Carousel._dataApiClickHandler);
    $$$1(window).on(Event.LOAD_DATA_API, function () {
      var carousels = [].slice.call(document.querySelectorAll(Selector.DATA_RIDE));

      for (var i = 0, len = carousels.length; i < len; i++) {
        var $carousel = $$$1(carousels[i]);

        Carousel._jQueryInterface.call($carousel, $carousel.data());
      }
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Carousel._jQueryInterface;
    $$$1.fn[NAME].Constructor = Carousel;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Carousel._jQueryInterface;
    };

    return Carousel;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): collapse.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Collapse = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'collapse';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.collapse';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var Default = {
      toggle: true,
      parent: ''
    };
    var DefaultType = {
      toggle: 'boolean',
      parent: '(string|element)'
    };
    var Event = {
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      SHOW: 'show',
      COLLAPSE: 'collapse',
      COLLAPSING: 'collapsing',
      COLLAPSED: 'collapsed'
    };
    var Dimension = {
      WIDTH: 'width',
      HEIGHT: 'height'
    };
    var Selector = {
      ACTIVES: '.show, .collapsing',
      DATA_TOGGLE: '[data-toggle="collapse"]'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Collapse =
    /*#__PURE__*/
    function () {
      function Collapse(element, config) {
        this._isTransitioning = false;
        this._element = element;
        this._config = this._getConfig(config);
        this._triggerArray = $$$1.makeArray(document.querySelectorAll("[data-toggle=\"collapse\"][href=\"#" + element.id + "\"]," + ("[data-toggle=\"collapse\"][data-target=\"#" + element.id + "\"]")));
        var toggleList = [].slice.call(document.querySelectorAll(Selector.DATA_TOGGLE));

        for (var i = 0, len = toggleList.length; i < len; i++) {
          var elem = toggleList[i];
          var selector = Util.getSelectorFromElement(elem);
          var filterElement = [].slice.call(document.querySelectorAll(selector)).filter(function (foundElem) {
            return foundElem === element;
          });

          if (selector !== null && filterElement.length > 0) {
            this._selector = selector;

            this._triggerArray.push(elem);
          }
        }

        this._parent = this._config.parent ? this._getParent() : null;

        if (!this._config.parent) {
          this._addAriaAndCollapsedClass(this._element, this._triggerArray);
        }

        if (this._config.toggle) {
          this.toggle();
        }
      } // Getters


      var _proto = Collapse.prototype;

      // Public
      _proto.toggle = function toggle() {
        if ($$$1(this._element).hasClass(ClassName.SHOW)) {
          this.hide();
        } else {
          this.show();
        }
      };

      _proto.show = function show() {
        var _this = this;

        if (this._isTransitioning || $$$1(this._element).hasClass(ClassName.SHOW)) {
          return;
        }

        var actives;
        var activesData;

        if (this._parent) {
          actives = [].slice.call(this._parent.querySelectorAll(Selector.ACTIVES)).filter(function (elem) {
            return elem.getAttribute('data-parent') === _this._config.parent;
          });

          if (actives.length === 0) {
            actives = null;
          }
        }

        if (actives) {
          activesData = $$$1(actives).not(this._selector).data(DATA_KEY);

          if (activesData && activesData._isTransitioning) {
            return;
          }
        }

        var startEvent = $$$1.Event(Event.SHOW);
        $$$1(this._element).trigger(startEvent);

        if (startEvent.isDefaultPrevented()) {
          return;
        }

        if (actives) {
          Collapse._jQueryInterface.call($$$1(actives).not(this._selector), 'hide');

          if (!activesData) {
            $$$1(actives).data(DATA_KEY, null);
          }
        }

        var dimension = this._getDimension();

        $$$1(this._element).removeClass(ClassName.COLLAPSE).addClass(ClassName.COLLAPSING);
        this._element.style[dimension] = 0;

        if (this._triggerArray.length) {
          $$$1(this._triggerArray).removeClass(ClassName.COLLAPSED).attr('aria-expanded', true);
        }

        this.setTransitioning(true);

        var complete = function complete() {
          $$$1(_this._element).removeClass(ClassName.COLLAPSING).addClass(ClassName.COLLAPSE).addClass(ClassName.SHOW);
          _this._element.style[dimension] = '';

          _this.setTransitioning(false);

          $$$1(_this._element).trigger(Event.SHOWN);
        };

        var capitalizedDimension = dimension[0].toUpperCase() + dimension.slice(1);
        var scrollSize = "scroll" + capitalizedDimension;
        var transitionDuration = Util.getTransitionDurationFromElement(this._element);
        $$$1(this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
        this._element.style[dimension] = this._element[scrollSize] + "px";
      };

      _proto.hide = function hide() {
        var _this2 = this;

        if (this._isTransitioning || !$$$1(this._element).hasClass(ClassName.SHOW)) {
          return;
        }

        var startEvent = $$$1.Event(Event.HIDE);
        $$$1(this._element).trigger(startEvent);

        if (startEvent.isDefaultPrevented()) {
          return;
        }

        var dimension = this._getDimension();

        this._element.style[dimension] = this._element.getBoundingClientRect()[dimension] + "px";
        Util.reflow(this._element);
        $$$1(this._element).addClass(ClassName.COLLAPSING).removeClass(ClassName.COLLAPSE).removeClass(ClassName.SHOW);
        var triggerArrayLength = this._triggerArray.length;

        if (triggerArrayLength > 0) {
          for (var i = 0; i < triggerArrayLength; i++) {
            var trigger = this._triggerArray[i];
            var selector = Util.getSelectorFromElement(trigger);

            if (selector !== null) {
              var $elem = $$$1([].slice.call(document.querySelectorAll(selector)));

              if (!$elem.hasClass(ClassName.SHOW)) {
                $$$1(trigger).addClass(ClassName.COLLAPSED).attr('aria-expanded', false);
              }
            }
          }
        }

        this.setTransitioning(true);

        var complete = function complete() {
          _this2.setTransitioning(false);

          $$$1(_this2._element).removeClass(ClassName.COLLAPSING).addClass(ClassName.COLLAPSE).trigger(Event.HIDDEN);
        };

        this._element.style[dimension] = '';
        var transitionDuration = Util.getTransitionDurationFromElement(this._element);
        $$$1(this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      };

      _proto.setTransitioning = function setTransitioning(isTransitioning) {
        this._isTransitioning = isTransitioning;
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        this._config = null;
        this._parent = null;
        this._element = null;
        this._triggerArray = null;
        this._isTransitioning = null;
      }; // Private


      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, Default, config);
        config.toggle = Boolean(config.toggle); // Coerce string values

        Util.typeCheckConfig(NAME, config, DefaultType);
        return config;
      };

      _proto._getDimension = function _getDimension() {
        var hasWidth = $$$1(this._element).hasClass(Dimension.WIDTH);
        return hasWidth ? Dimension.WIDTH : Dimension.HEIGHT;
      };

      _proto._getParent = function _getParent() {
        var _this3 = this;

        var parent = null;

        if (Util.isElement(this._config.parent)) {
          parent = this._config.parent; // It's a jQuery object

          if (typeof this._config.parent.jquery !== 'undefined') {
            parent = this._config.parent[0];
          }
        } else {
          parent = document.querySelector(this._config.parent);
        }

        var selector = "[data-toggle=\"collapse\"][data-parent=\"" + this._config.parent + "\"]";
        var children = [].slice.call(parent.querySelectorAll(selector));
        $$$1(children).each(function (i, element) {
          _this3._addAriaAndCollapsedClass(Collapse._getTargetFromElement(element), [element]);
        });
        return parent;
      };

      _proto._addAriaAndCollapsedClass = function _addAriaAndCollapsedClass(element, triggerArray) {
        if (element) {
          var isOpen = $$$1(element).hasClass(ClassName.SHOW);

          if (triggerArray.length) {
            $$$1(triggerArray).toggleClass(ClassName.COLLAPSED, !isOpen).attr('aria-expanded', isOpen);
          }
        }
      }; // Static


      Collapse._getTargetFromElement = function _getTargetFromElement(element) {
        var selector = Util.getSelectorFromElement(element);
        return selector ? document.querySelector(selector) : null;
      };

      Collapse._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var $this = $$$1(this);
          var data = $this.data(DATA_KEY);

          var _config = _objectSpread({}, Default, $this.data(), typeof config === 'object' && config ? config : {});

          if (!data && _config.toggle && /show|hide/.test(config)) {
            _config.toggle = false;
          }

          if (!data) {
            data = new Collapse(this, _config);
            $this.data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      _createClass(Collapse, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }]);

      return Collapse;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function (event) {
      // preventDefault only for <a> elements (which change the URL) not inside the collapsible element
      if (event.currentTarget.tagName === 'A') {
        event.preventDefault();
      }

      var $trigger = $$$1(this);
      var selector = Util.getSelectorFromElement(this);
      var selectors = [].slice.call(document.querySelectorAll(selector));
      $$$1(selectors).each(function () {
        var $target = $$$1(this);
        var data = $target.data(DATA_KEY);
        var config = data ? 'toggle' : $trigger.data();

        Collapse._jQueryInterface.call($target, config);
      });
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Collapse._jQueryInterface;
    $$$1.fn[NAME].Constructor = Collapse;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Collapse._jQueryInterface;
    };

    return Collapse;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): dropdown.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Dropdown = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'dropdown';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.dropdown';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var ESCAPE_KEYCODE = 27; // KeyboardEvent.which value for Escape (Esc) key

    var SPACE_KEYCODE = 32; // KeyboardEvent.which value for space key

    var TAB_KEYCODE = 9; // KeyboardEvent.which value for tab key

    var ARROW_UP_KEYCODE = 38; // KeyboardEvent.which value for up arrow key

    var ARROW_DOWN_KEYCODE = 40; // KeyboardEvent.which value for down arrow key

    var RIGHT_MOUSE_BUTTON_WHICH = 3; // MouseEvent.which value for the right button (assuming a right-handed mouse)

    var REGEXP_KEYDOWN = new RegExp(ARROW_UP_KEYCODE + "|" + ARROW_DOWN_KEYCODE + "|" + ESCAPE_KEYCODE);
    var Event = {
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      CLICK: "click" + EVENT_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY,
      KEYDOWN_DATA_API: "keydown" + EVENT_KEY + DATA_API_KEY,
      KEYUP_DATA_API: "keyup" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      DISABLED: 'disabled',
      SHOW: 'show',
      DROPUP: 'dropup',
      DROPRIGHT: 'dropright',
      DROPLEFT: 'dropleft',
      MENURIGHT: 'dropdown-menu-right',
      MENULEFT: 'dropdown-menu-left',
      POSITION_STATIC: 'position-static'
    };
    var Selector = {
      DATA_TOGGLE: '[data-toggle="dropdown"]',
      FORM_CHILD: '.dropdown form',
      MENU: '.dropdown-menu',
      NAVBAR_NAV: '.navbar-nav',
      VISIBLE_ITEMS: '.dropdown-menu .dropdown-item:not(.disabled):not(:disabled)'
    };
    var AttachmentMap = {
      TOP: 'top-start',
      TOPEND: 'top-end',
      BOTTOM: 'bottom-start',
      BOTTOMEND: 'bottom-end',
      RIGHT: 'right-start',
      RIGHTEND: 'right-end',
      LEFT: 'left-start',
      LEFTEND: 'left-end'
    };
    var Default = {
      offset: 0,
      flip: true,
      boundary: 'scrollParent',
      reference: 'toggle',
      display: 'dynamic'
    };
    var DefaultType = {
      offset: '(number|string|function)',
      flip: 'boolean',
      boundary: '(string|element)',
      reference: '(string|element)',
      display: 'string'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Dropdown =
    /*#__PURE__*/
    function () {
      function Dropdown(element, config) {
        this._element = element;
        this._popper = null;
        this._config = this._getConfig(config);
        this._menu = this._getMenuElement();
        this._inNavbar = this._detectNavbar();

        this._addEventListeners();
      } // Getters


      var _proto = Dropdown.prototype;

      // Public
      _proto.toggle = function toggle() {
        if (this._element.disabled || $$$1(this._element).hasClass(ClassName.DISABLED)) {
          return;
        }

        var parent = Dropdown._getParentFromElement(this._element);

        var isActive = $$$1(this._menu).hasClass(ClassName.SHOW);

        Dropdown._clearMenus();

        if (isActive) {
          return;
        }

        var relatedTarget = {
          relatedTarget: this._element
        };
        var showEvent = $$$1.Event(Event.SHOW, relatedTarget);
        $$$1(parent).trigger(showEvent);

        if (showEvent.isDefaultPrevented()) {
          return;
        } // Disable totally Popper.js for Dropdown in Navbar


        if (!this._inNavbar) {
          /**
           * Check for Popper dependency
           * Popper - https://popper.js.org
           */
          if (typeof Popper === 'undefined') {
            throw new TypeError('Bootstrap dropdown require Popper.js (https://popper.js.org)');
          }

          var referenceElement = this._element;

          if (this._config.reference === 'parent') {
            referenceElement = parent;
          } else if (Util.isElement(this._config.reference)) {
            referenceElement = this._config.reference; // Check if it's jQuery element

            if (typeof this._config.reference.jquery !== 'undefined') {
              referenceElement = this._config.reference[0];
            }
          } // If boundary is not `scrollParent`, then set position to `static`
          // to allow the menu to "escape" the scroll parent's boundaries
          // https://github.com/twbs/bootstrap/issues/24251


          if (this._config.boundary !== 'scrollParent') {
            $$$1(parent).addClass(ClassName.POSITION_STATIC);
          }

          this._popper = new Popper(referenceElement, this._menu, this._getPopperConfig());
        } // If this is a touch-enabled device we add extra
        // empty mouseover listeners to the body's immediate children;
        // only needed because of broken event delegation on iOS
        // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html


        if ('ontouchstart' in document.documentElement && $$$1(parent).closest(Selector.NAVBAR_NAV).length === 0) {
          $$$1(document.body).children().on('mouseover', null, $$$1.noop);
        }

        this._element.focus();

        this._element.setAttribute('aria-expanded', true);

        $$$1(this._menu).toggleClass(ClassName.SHOW);
        $$$1(parent).toggleClass(ClassName.SHOW).trigger($$$1.Event(Event.SHOWN, relatedTarget));
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        $$$1(this._element).off(EVENT_KEY);
        this._element = null;
        this._menu = null;

        if (this._popper !== null) {
          this._popper.destroy();

          this._popper = null;
        }
      };

      _proto.update = function update() {
        this._inNavbar = this._detectNavbar();

        if (this._popper !== null) {
          this._popper.scheduleUpdate();
        }
      }; // Private


      _proto._addEventListeners = function _addEventListeners() {
        var _this = this;

        $$$1(this._element).on(Event.CLICK, function (event) {
          event.preventDefault();
          event.stopPropagation();

          _this.toggle();
        });
      };

      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, this.constructor.Default, $$$1(this._element).data(), config);
        Util.typeCheckConfig(NAME, config, this.constructor.DefaultType);
        return config;
      };

      _proto._getMenuElement = function _getMenuElement() {
        if (!this._menu) {
          var parent = Dropdown._getParentFromElement(this._element);

          if (parent) {
            this._menu = parent.querySelector(Selector.MENU);
          }
        }

        return this._menu;
      };

      _proto._getPlacement = function _getPlacement() {
        var $parentDropdown = $$$1(this._element.parentNode);
        var placement = AttachmentMap.BOTTOM; // Handle dropup

        if ($parentDropdown.hasClass(ClassName.DROPUP)) {
          placement = AttachmentMap.TOP;

          if ($$$1(this._menu).hasClass(ClassName.MENURIGHT)) {
            placement = AttachmentMap.TOPEND;
          }
        } else if ($parentDropdown.hasClass(ClassName.DROPRIGHT)) {
          placement = AttachmentMap.RIGHT;
        } else if ($parentDropdown.hasClass(ClassName.DROPLEFT)) {
          placement = AttachmentMap.LEFT;
        } else if ($$$1(this._menu).hasClass(ClassName.MENURIGHT)) {
          placement = AttachmentMap.BOTTOMEND;
        }

        return placement;
      };

      _proto._detectNavbar = function _detectNavbar() {
        return $$$1(this._element).closest('.navbar').length > 0;
      };

      _proto._getPopperConfig = function _getPopperConfig() {
        var _this2 = this;

        var offsetConf = {};

        if (typeof this._config.offset === 'function') {
          offsetConf.fn = function (data) {
            data.offsets = _objectSpread({}, data.offsets, _this2._config.offset(data.offsets) || {});
            return data;
          };
        } else {
          offsetConf.offset = this._config.offset;
        }

        var popperConfig = {
          placement: this._getPlacement(),
          modifiers: {
            offset: offsetConf,
            flip: {
              enabled: this._config.flip
            },
            preventOverflow: {
              boundariesElement: this._config.boundary
            }
          } // Disable Popper.js if we have a static display

        };

        if (this._config.display === 'static') {
          popperConfig.modifiers.applyStyle = {
            enabled: false
          };
        }

        return popperConfig;
      }; // Static


      Dropdown._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = typeof config === 'object' ? config : null;

          if (!data) {
            data = new Dropdown(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      Dropdown._clearMenus = function _clearMenus(event) {
        if (event && (event.which === RIGHT_MOUSE_BUTTON_WHICH || event.type === 'keyup' && event.which !== TAB_KEYCODE)) {
          return;
        }

        var toggles = [].slice.call(document.querySelectorAll(Selector.DATA_TOGGLE));

        for (var i = 0, len = toggles.length; i < len; i++) {
          var parent = Dropdown._getParentFromElement(toggles[i]);

          var context = $$$1(toggles[i]).data(DATA_KEY);
          var relatedTarget = {
            relatedTarget: toggles[i]
          };

          if (event && event.type === 'click') {
            relatedTarget.clickEvent = event;
          }

          if (!context) {
            continue;
          }

          var dropdownMenu = context._menu;

          if (!$$$1(parent).hasClass(ClassName.SHOW)) {
            continue;
          }

          if (event && (event.type === 'click' && /input|textarea/i.test(event.target.tagName) || event.type === 'keyup' && event.which === TAB_KEYCODE) && $$$1.contains(parent, event.target)) {
            continue;
          }

          var hideEvent = $$$1.Event(Event.HIDE, relatedTarget);
          $$$1(parent).trigger(hideEvent);

          if (hideEvent.isDefaultPrevented()) {
            continue;
          } // If this is a touch-enabled device we remove the extra
          // empty mouseover listeners we added for iOS support


          if ('ontouchstart' in document.documentElement) {
            $$$1(document.body).children().off('mouseover', null, $$$1.noop);
          }

          toggles[i].setAttribute('aria-expanded', 'false');
          $$$1(dropdownMenu).removeClass(ClassName.SHOW);
          $$$1(parent).removeClass(ClassName.SHOW).trigger($$$1.Event(Event.HIDDEN, relatedTarget));
        }
      };

      Dropdown._getParentFromElement = function _getParentFromElement(element) {
        var parent;
        var selector = Util.getSelectorFromElement(element);

        if (selector) {
          parent = document.querySelector(selector);
        }

        return parent || element.parentNode;
      }; // eslint-disable-next-line complexity


      Dropdown._dataApiKeydownHandler = function _dataApiKeydownHandler(event) {
        // If not input/textarea:
        //  - And not a key in REGEXP_KEYDOWN => not a dropdown command
        // If input/textarea:
        //  - If space key => not a dropdown command
        //  - If key is other than escape
        //    - If key is not up or down => not a dropdown command
        //    - If trigger inside the menu => not a dropdown command
        if (/input|textarea/i.test(event.target.tagName) ? event.which === SPACE_KEYCODE || event.which !== ESCAPE_KEYCODE && (event.which !== ARROW_DOWN_KEYCODE && event.which !== ARROW_UP_KEYCODE || $$$1(event.target).closest(Selector.MENU).length) : !REGEXP_KEYDOWN.test(event.which)) {
          return;
        }

        event.preventDefault();
        event.stopPropagation();

        if (this.disabled || $$$1(this).hasClass(ClassName.DISABLED)) {
          return;
        }

        var parent = Dropdown._getParentFromElement(this);

        var isActive = $$$1(parent).hasClass(ClassName.SHOW);

        if (!isActive && (event.which !== ESCAPE_KEYCODE || event.which !== SPACE_KEYCODE) || isActive && (event.which === ESCAPE_KEYCODE || event.which === SPACE_KEYCODE)) {
          if (event.which === ESCAPE_KEYCODE) {
            var toggle = parent.querySelector(Selector.DATA_TOGGLE);
            $$$1(toggle).trigger('focus');
          }

          $$$1(this).trigger('click');
          return;
        }

        var items = [].slice.call(parent.querySelectorAll(Selector.VISIBLE_ITEMS));

        if (items.length === 0) {
          return;
        }

        var index = items.indexOf(event.target);

        if (event.which === ARROW_UP_KEYCODE && index > 0) {
          // Up
          index--;
        }

        if (event.which === ARROW_DOWN_KEYCODE && index < items.length - 1) {
          // Down
          index++;
        }

        if (index < 0) {
          index = 0;
        }

        items[index].focus();
      };

      _createClass(Dropdown, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }, {
        key: "DefaultType",
        get: function get() {
          return DefaultType;
        }
      }]);

      return Dropdown;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.KEYDOWN_DATA_API, Selector.DATA_TOGGLE, Dropdown._dataApiKeydownHandler).on(Event.KEYDOWN_DATA_API, Selector.MENU, Dropdown._dataApiKeydownHandler).on(Event.CLICK_DATA_API + " " + Event.KEYUP_DATA_API, Dropdown._clearMenus).on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function (event) {
      event.preventDefault();
      event.stopPropagation();

      Dropdown._jQueryInterface.call($$$1(this), 'toggle');
    }).on(Event.CLICK_DATA_API, Selector.FORM_CHILD, function (e) {
      e.stopPropagation();
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Dropdown._jQueryInterface;
    $$$1.fn[NAME].Constructor = Dropdown;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Dropdown._jQueryInterface;
    };

    return Dropdown;
  }($, Popper);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): modal.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Modal = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'modal';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.modal';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var ESCAPE_KEYCODE = 27; // KeyboardEvent.which value for Escape (Esc) key

    var Default = {
      backdrop: true,
      keyboard: true,
      focus: true,
      show: true
    };
    var DefaultType = {
      backdrop: '(boolean|string)',
      keyboard: 'boolean',
      focus: 'boolean',
      show: 'boolean'
    };
    var Event = {
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      FOCUSIN: "focusin" + EVENT_KEY,
      RESIZE: "resize" + EVENT_KEY,
      CLICK_DISMISS: "click.dismiss" + EVENT_KEY,
      KEYDOWN_DISMISS: "keydown.dismiss" + EVENT_KEY,
      MOUSEUP_DISMISS: "mouseup.dismiss" + EVENT_KEY,
      MOUSEDOWN_DISMISS: "mousedown.dismiss" + EVENT_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      SCROLLBAR_MEASURER: 'modal-scrollbar-measure',
      BACKDROP: 'modal-backdrop',
      OPEN: 'modal-open',
      FADE: 'fade',
      SHOW: 'show'
    };
    var Selector = {
      DIALOG: '.modal-dialog',
      DATA_TOGGLE: '[data-toggle="modal"]',
      DATA_DISMISS: '[data-dismiss="modal"]',
      FIXED_CONTENT: '.fixed-top, .fixed-bottom, .is-fixed, .sticky-top',
      STICKY_CONTENT: '.sticky-top'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Modal =
    /*#__PURE__*/
    function () {
      function Modal(element, config) {
        this._config = this._getConfig(config);
        this._element = element;
        this._dialog = element.querySelector(Selector.DIALOG);
        this._backdrop = null;
        this._isShown = false;
        this._isBodyOverflowing = false;
        this._ignoreBackdropClick = false;
        this._scrollbarWidth = 0;
      } // Getters


      var _proto = Modal.prototype;

      // Public
      _proto.toggle = function toggle(relatedTarget) {
        return this._isShown ? this.hide() : this.show(relatedTarget);
      };

      _proto.show = function show(relatedTarget) {
        var _this = this;

        if (this._isTransitioning || this._isShown) {
          return;
        }

        if ($$$1(this._element).hasClass(ClassName.FADE)) {
          this._isTransitioning = true;
        }

        var showEvent = $$$1.Event(Event.SHOW, {
          relatedTarget: relatedTarget
        });
        $$$1(this._element).trigger(showEvent);

        if (this._isShown || showEvent.isDefaultPrevented()) {
          return;
        }

        this._isShown = true;

        this._checkScrollbar();

        this._setScrollbar();

        this._adjustDialog();

        $$$1(document.body).addClass(ClassName.OPEN);

        this._setEscapeEvent();

        this._setResizeEvent();

        $$$1(this._element).on(Event.CLICK_DISMISS, Selector.DATA_DISMISS, function (event) {
          return _this.hide(event);
        });
        $$$1(this._dialog).on(Event.MOUSEDOWN_DISMISS, function () {
          $$$1(_this._element).one(Event.MOUSEUP_DISMISS, function (event) {
            if ($$$1(event.target).is(_this._element)) {
              _this._ignoreBackdropClick = true;
            }
          });
        });

        this._showBackdrop(function () {
          return _this._showElement(relatedTarget);
        });
      };

      _proto.hide = function hide(event) {
        var _this2 = this;

        if (event) {
          event.preventDefault();
        }

        if (this._isTransitioning || !this._isShown) {
          return;
        }

        var hideEvent = $$$1.Event(Event.HIDE);
        $$$1(this._element).trigger(hideEvent);

        if (!this._isShown || hideEvent.isDefaultPrevented()) {
          return;
        }

        this._isShown = false;
        var transition = $$$1(this._element).hasClass(ClassName.FADE);

        if (transition) {
          this._isTransitioning = true;
        }

        this._setEscapeEvent();

        this._setResizeEvent();

        $$$1(document).off(Event.FOCUSIN);
        $$$1(this._element).removeClass(ClassName.SHOW);
        $$$1(this._element).off(Event.CLICK_DISMISS);
        $$$1(this._dialog).off(Event.MOUSEDOWN_DISMISS);

        if (transition) {
          var transitionDuration = Util.getTransitionDurationFromElement(this._element);
          $$$1(this._element).one(Util.TRANSITION_END, function (event) {
            return _this2._hideModal(event);
          }).emulateTransitionEnd(transitionDuration);
        } else {
          this._hideModal();
        }
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        $$$1(window, document, this._element, this._backdrop).off(EVENT_KEY);
        this._config = null;
        this._element = null;
        this._dialog = null;
        this._backdrop = null;
        this._isShown = null;
        this._isBodyOverflowing = null;
        this._ignoreBackdropClick = null;
        this._scrollbarWidth = null;
      };

      _proto.handleUpdate = function handleUpdate() {
        this._adjustDialog();
      }; // Private


      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, Default, config);
        Util.typeCheckConfig(NAME, config, DefaultType);
        return config;
      };

      _proto._showElement = function _showElement(relatedTarget) {
        var _this3 = this;

        var transition = $$$1(this._element).hasClass(ClassName.FADE);

        if (!this._element.parentNode || this._element.parentNode.nodeType !== Node.ELEMENT_NODE) {
          // Don't move modal's DOM position
          document.body.appendChild(this._element);
        }

        this._element.style.display = 'block';

        this._element.removeAttribute('aria-hidden');

        this._element.scrollTop = 0;

        if (transition) {
          Util.reflow(this._element);
        }

        $$$1(this._element).addClass(ClassName.SHOW);

        if (this._config.focus) {
          this._enforceFocus();
        }

        var shownEvent = $$$1.Event(Event.SHOWN, {
          relatedTarget: relatedTarget
        });

        var transitionComplete = function transitionComplete() {
          if (_this3._config.focus) {
            _this3._element.focus();
          }

          _this3._isTransitioning = false;
          $$$1(_this3._element).trigger(shownEvent);
        };

        if (transition) {
          var transitionDuration = Util.getTransitionDurationFromElement(this._element);
          $$$1(this._dialog).one(Util.TRANSITION_END, transitionComplete).emulateTransitionEnd(transitionDuration);
        } else {
          transitionComplete();
        }
      };

      _proto._enforceFocus = function _enforceFocus() {
        var _this4 = this;

        $$$1(document).off(Event.FOCUSIN) // Guard against infinite focus loop
        .on(Event.FOCUSIN, function (event) {
          if (document !== event.target && _this4._element !== event.target && $$$1(_this4._element).has(event.target).length === 0) {
            _this4._element.focus();
          }
        });
      };

      _proto._setEscapeEvent = function _setEscapeEvent() {
        var _this5 = this;

        if (this._isShown && this._config.keyboard) {
          $$$1(this._element).on(Event.KEYDOWN_DISMISS, function (event) {
            if (event.which === ESCAPE_KEYCODE) {
              event.preventDefault();

              _this5.hide();
            }
          });
        } else if (!this._isShown) {
          $$$1(this._element).off(Event.KEYDOWN_DISMISS);
        }
      };

      _proto._setResizeEvent = function _setResizeEvent() {
        var _this6 = this;

        if (this._isShown) {
          $$$1(window).on(Event.RESIZE, function (event) {
            return _this6.handleUpdate(event);
          });
        } else {
          $$$1(window).off(Event.RESIZE);
        }
      };

      _proto._hideModal = function _hideModal() {
        var _this7 = this;

        this._element.style.display = 'none';

        this._element.setAttribute('aria-hidden', true);

        this._isTransitioning = false;

        this._showBackdrop(function () {
          $$$1(document.body).removeClass(ClassName.OPEN);

          _this7._resetAdjustments();

          _this7._resetScrollbar();

          $$$1(_this7._element).trigger(Event.HIDDEN);
        });
      };

      _proto._removeBackdrop = function _removeBackdrop() {
        if (this._backdrop) {
          $$$1(this._backdrop).remove();
          this._backdrop = null;
        }
      };

      _proto._showBackdrop = function _showBackdrop(callback) {
        var _this8 = this;

        var animate = $$$1(this._element).hasClass(ClassName.FADE) ? ClassName.FADE : '';

        if (this._isShown && this._config.backdrop) {
          this._backdrop = document.createElement('div');
          this._backdrop.className = ClassName.BACKDROP;

          if (animate) {
            this._backdrop.classList.add(animate);
          }

          $$$1(this._backdrop).appendTo(document.body);
          $$$1(this._element).on(Event.CLICK_DISMISS, function (event) {
            if (_this8._ignoreBackdropClick) {
              _this8._ignoreBackdropClick = false;
              return;
            }

            if (event.target !== event.currentTarget) {
              return;
            }

            if (_this8._config.backdrop === 'static') {
              _this8._element.focus();
            } else {
              _this8.hide();
            }
          });

          if (animate) {
            Util.reflow(this._backdrop);
          }

          $$$1(this._backdrop).addClass(ClassName.SHOW);

          if (!callback) {
            return;
          }

          if (!animate) {
            callback();
            return;
          }

          var backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop);
          $$$1(this._backdrop).one(Util.TRANSITION_END, callback).emulateTransitionEnd(backdropTransitionDuration);
        } else if (!this._isShown && this._backdrop) {
          $$$1(this._backdrop).removeClass(ClassName.SHOW);

          var callbackRemove = function callbackRemove() {
            _this8._removeBackdrop();

            if (callback) {
              callback();
            }
          };

          if ($$$1(this._element).hasClass(ClassName.FADE)) {
            var _backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop);

            $$$1(this._backdrop).one(Util.TRANSITION_END, callbackRemove).emulateTransitionEnd(_backdropTransitionDuration);
          } else {
            callbackRemove();
          }
        } else if (callback) {
          callback();
        }
      }; // ----------------------------------------------------------------------
      // the following methods are used to handle overflowing modals
      // todo (fat): these should probably be refactored out of modal.js
      // ----------------------------------------------------------------------


      _proto._adjustDialog = function _adjustDialog() {
        var isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight;

        if (!this._isBodyOverflowing && isModalOverflowing) {
          this._element.style.paddingLeft = this._scrollbarWidth + "px";
        }

        if (this._isBodyOverflowing && !isModalOverflowing) {
          this._element.style.paddingRight = this._scrollbarWidth + "px";
        }
      };

      _proto._resetAdjustments = function _resetAdjustments() {
        this._element.style.paddingLeft = '';
        this._element.style.paddingRight = '';
      };

      _proto._checkScrollbar = function _checkScrollbar() {
        var rect = document.body.getBoundingClientRect();
        this._isBodyOverflowing = rect.left + rect.right < window.innerWidth;
        this._scrollbarWidth = this._getScrollbarWidth();
      };

      _proto._setScrollbar = function _setScrollbar() {
        var _this9 = this;

        if (this._isBodyOverflowing) {
          // Note: DOMNode.style.paddingRight returns the actual value or '' if not set
          //   while $(DOMNode).css('padding-right') returns the calculated value or 0 if not set
          var fixedContent = [].slice.call(document.querySelectorAll(Selector.FIXED_CONTENT));
          var stickyContent = [].slice.call(document.querySelectorAll(Selector.STICKY_CONTENT)); // Adjust fixed content padding

          $$$1(fixedContent).each(function (index, element) {
            var actualPadding = element.style.paddingRight;
            var calculatedPadding = $$$1(element).css('padding-right');
            $$$1(element).data('padding-right', actualPadding).css('padding-right', parseFloat(calculatedPadding) + _this9._scrollbarWidth + "px");
          }); // Adjust sticky content margin

          $$$1(stickyContent).each(function (index, element) {
            var actualMargin = element.style.marginRight;
            var calculatedMargin = $$$1(element).css('margin-right');
            $$$1(element).data('margin-right', actualMargin).css('margin-right', parseFloat(calculatedMargin) - _this9._scrollbarWidth + "px");
          }); // Adjust body padding

          var actualPadding = document.body.style.paddingRight;
          var calculatedPadding = $$$1(document.body).css('padding-right');
          $$$1(document.body).data('padding-right', actualPadding).css('padding-right', parseFloat(calculatedPadding) + this._scrollbarWidth + "px");
        }
      };

      _proto._resetScrollbar = function _resetScrollbar() {
        // Restore fixed content padding
        var fixedContent = [].slice.call(document.querySelectorAll(Selector.FIXED_CONTENT));
        $$$1(fixedContent).each(function (index, element) {
          var padding = $$$1(element).data('padding-right');
          $$$1(element).removeData('padding-right');
          element.style.paddingRight = padding ? padding : '';
        }); // Restore sticky content

        var elements = [].slice.call(document.querySelectorAll("" + Selector.STICKY_CONTENT));
        $$$1(elements).each(function (index, element) {
          var margin = $$$1(element).data('margin-right');

          if (typeof margin !== 'undefined') {
            $$$1(element).css('margin-right', margin).removeData('margin-right');
          }
        }); // Restore body padding

        var padding = $$$1(document.body).data('padding-right');
        $$$1(document.body).removeData('padding-right');
        document.body.style.paddingRight = padding ? padding : '';
      };

      _proto._getScrollbarWidth = function _getScrollbarWidth() {
        // thx d.walsh
        var scrollDiv = document.createElement('div');
        scrollDiv.className = ClassName.SCROLLBAR_MEASURER;
        document.body.appendChild(scrollDiv);
        var scrollbarWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth;
        document.body.removeChild(scrollDiv);
        return scrollbarWidth;
      }; // Static


      Modal._jQueryInterface = function _jQueryInterface(config, relatedTarget) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = _objectSpread({}, Default, $$$1(this).data(), typeof config === 'object' && config ? config : {});

          if (!data) {
            data = new Modal(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config](relatedTarget);
          } else if (_config.show) {
            data.show(relatedTarget);
          }
        });
      };

      _createClass(Modal, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }]);

      return Modal;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function (event) {
      var _this10 = this;

      var target;
      var selector = Util.getSelectorFromElement(this);

      if (selector) {
        target = document.querySelector(selector);
      }

      var config = $$$1(target).data(DATA_KEY) ? 'toggle' : _objectSpread({}, $$$1(target).data(), $$$1(this).data());

      if (this.tagName === 'A' || this.tagName === 'AREA') {
        event.preventDefault();
      }

      var $target = $$$1(target).one(Event.SHOW, function (showEvent) {
        if (showEvent.isDefaultPrevented()) {
          // Only register focus restorer if modal will actually get shown
          return;
        }

        $target.one(Event.HIDDEN, function () {
          if ($$$1(_this10).is(':visible')) {
            _this10.focus();
          }
        });
      });

      Modal._jQueryInterface.call($$$1(target), config, this);
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Modal._jQueryInterface;
    $$$1.fn[NAME].Constructor = Modal;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Modal._jQueryInterface;
    };

    return Modal;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): tooltip.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Tooltip = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'tooltip';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.tooltip';
    var EVENT_KEY = "." + DATA_KEY;
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var CLASS_PREFIX = 'bs-tooltip';
    var BSCLS_PREFIX_REGEX = new RegExp("(^|\\s)" + CLASS_PREFIX + "\\S+", 'g');
    var DefaultType = {
      animation: 'boolean',
      template: 'string',
      title: '(string|element|function)',
      trigger: 'string',
      delay: '(number|object)',
      html: 'boolean',
      selector: '(string|boolean)',
      placement: '(string|function)',
      offset: '(number|string)',
      container: '(string|element|boolean)',
      fallbackPlacement: '(string|array)',
      boundary: '(string|element)'
    };
    var AttachmentMap = {
      AUTO: 'auto',
      TOP: 'top',
      RIGHT: 'right',
      BOTTOM: 'bottom',
      LEFT: 'left'
    };
    var Default = {
      animation: true,
      template: '<div class="tooltip" role="tooltip">' + '<div class="arrow"></div>' + '<div class="tooltip-inner"></div></div>',
      trigger: 'hover focus',
      title: '',
      delay: 0,
      html: false,
      selector: false,
      placement: 'top',
      offset: 0,
      container: false,
      fallbackPlacement: 'flip',
      boundary: 'scrollParent'
    };
    var HoverState = {
      SHOW: 'show',
      OUT: 'out'
    };
    var Event = {
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      INSERTED: "inserted" + EVENT_KEY,
      CLICK: "click" + EVENT_KEY,
      FOCUSIN: "focusin" + EVENT_KEY,
      FOCUSOUT: "focusout" + EVENT_KEY,
      MOUSEENTER: "mouseenter" + EVENT_KEY,
      MOUSELEAVE: "mouseleave" + EVENT_KEY
    };
    var ClassName = {
      FADE: 'fade',
      SHOW: 'show'
    };
    var Selector = {
      TOOLTIP: '.tooltip',
      TOOLTIP_INNER: '.tooltip-inner',
      ARROW: '.arrow'
    };
    var Trigger = {
      HOVER: 'hover',
      FOCUS: 'focus',
      CLICK: 'click',
      MANUAL: 'manual'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Tooltip =
    /*#__PURE__*/
    function () {
      function Tooltip(element, config) {
        /**
         * Check for Popper dependency
         * Popper - https://popper.js.org
         */
        if (typeof Popper === 'undefined') {
          throw new TypeError('Bootstrap tooltips require Popper.js (https://popper.js.org)');
        } // private


        this._isEnabled = true;
        this._timeout = 0;
        this._hoverState = '';
        this._activeTrigger = {};
        this._popper = null; // Protected

        this.element = element;
        this.config = this._getConfig(config);
        this.tip = null;

        this._setListeners();
      } // Getters


      var _proto = Tooltip.prototype;

      // Public
      _proto.enable = function enable() {
        this._isEnabled = true;
      };

      _proto.disable = function disable() {
        this._isEnabled = false;
      };

      _proto.toggleEnabled = function toggleEnabled() {
        this._isEnabled = !this._isEnabled;
      };

      _proto.toggle = function toggle(event) {
        if (!this._isEnabled) {
          return;
        }

        if (event) {
          var dataKey = this.constructor.DATA_KEY;
          var context = $$$1(event.currentTarget).data(dataKey);

          if (!context) {
            context = new this.constructor(event.currentTarget, this._getDelegateConfig());
            $$$1(event.currentTarget).data(dataKey, context);
          }

          context._activeTrigger.click = !context._activeTrigger.click;

          if (context._isWithActiveTrigger()) {
            context._enter(null, context);
          } else {
            context._leave(null, context);
          }
        } else {
          if ($$$1(this.getTipElement()).hasClass(ClassName.SHOW)) {
            this._leave(null, this);

            return;
          }

          this._enter(null, this);
        }
      };

      _proto.dispose = function dispose() {
        clearTimeout(this._timeout);
        $$$1.removeData(this.element, this.constructor.DATA_KEY);
        $$$1(this.element).off(this.constructor.EVENT_KEY);
        $$$1(this.element).closest('.modal').off('hide.bs.modal');

        if (this.tip) {
          $$$1(this.tip).remove();
        }

        this._isEnabled = null;
        this._timeout = null;
        this._hoverState = null;
        this._activeTrigger = null;

        if (this._popper !== null) {
          this._popper.destroy();
        }

        this._popper = null;
        this.element = null;
        this.config = null;
        this.tip = null;
      };

      _proto.show = function show() {
        var _this = this;

        if ($$$1(this.element).css('display') === 'none') {
          throw new Error('Please use show on visible elements');
        }

        var showEvent = $$$1.Event(this.constructor.Event.SHOW);

        if (this.isWithContent() && this._isEnabled) {
          $$$1(this.element).trigger(showEvent);
          var isInTheDom = $$$1.contains(this.element.ownerDocument.documentElement, this.element);

          if (showEvent.isDefaultPrevented() || !isInTheDom) {
            return;
          }

          var tip = this.getTipElement();
          var tipId = Util.getUID(this.constructor.NAME);
          tip.setAttribute('id', tipId);
          this.element.setAttribute('aria-describedby', tipId);
          this.setContent();

          if (this.config.animation) {
            $$$1(tip).addClass(ClassName.FADE);
          }

          var placement = typeof this.config.placement === 'function' ? this.config.placement.call(this, tip, this.element) : this.config.placement;

          var attachment = this._getAttachment(placement);

          this.addAttachmentClass(attachment);
          var container = this.config.container === false ? document.body : $$$1(document).find(this.config.container);
          $$$1(tip).data(this.constructor.DATA_KEY, this);

          if (!$$$1.contains(this.element.ownerDocument.documentElement, this.tip)) {
            $$$1(tip).appendTo(container);
          }

          $$$1(this.element).trigger(this.constructor.Event.INSERTED);
          this._popper = new Popper(this.element, tip, {
            placement: attachment,
            modifiers: {
              offset: {
                offset: this.config.offset
              },
              flip: {
                behavior: this.config.fallbackPlacement
              },
              arrow: {
                element: Selector.ARROW
              },
              preventOverflow: {
                boundariesElement: this.config.boundary
              }
            },
            onCreate: function onCreate(data) {
              if (data.originalPlacement !== data.placement) {
                _this._handlePopperPlacementChange(data);
              }
            },
            onUpdate: function onUpdate(data) {
              _this._handlePopperPlacementChange(data);
            }
          });
          $$$1(tip).addClass(ClassName.SHOW); // If this is a touch-enabled device we add extra
          // empty mouseover listeners to the body's immediate children;
          // only needed because of broken event delegation on iOS
          // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html

          if ('ontouchstart' in document.documentElement) {
            $$$1(document.body).children().on('mouseover', null, $$$1.noop);
          }

          var complete = function complete() {
            if (_this.config.animation) {
              _this._fixTransition();
            }

            var prevHoverState = _this._hoverState;
            _this._hoverState = null;
            $$$1(_this.element).trigger(_this.constructor.Event.SHOWN);

            if (prevHoverState === HoverState.OUT) {
              _this._leave(null, _this);
            }
          };

          if ($$$1(this.tip).hasClass(ClassName.FADE)) {
            var transitionDuration = Util.getTransitionDurationFromElement(this.tip);
            $$$1(this.tip).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
          } else {
            complete();
          }
        }
      };

      _proto.hide = function hide(callback) {
        var _this2 = this;

        var tip = this.getTipElement();
        var hideEvent = $$$1.Event(this.constructor.Event.HIDE);

        var complete = function complete() {
          if (_this2._hoverState !== HoverState.SHOW && tip.parentNode) {
            tip.parentNode.removeChild(tip);
          }

          _this2._cleanTipClass();

          _this2.element.removeAttribute('aria-describedby');

          $$$1(_this2.element).trigger(_this2.constructor.Event.HIDDEN);

          if (_this2._popper !== null) {
            _this2._popper.destroy();
          }

          if (callback) {
            callback();
          }
        };

        $$$1(this.element).trigger(hideEvent);

        if (hideEvent.isDefaultPrevented()) {
          return;
        }

        $$$1(tip).removeClass(ClassName.SHOW); // If this is a touch-enabled device we remove the extra
        // empty mouseover listeners we added for iOS support

        if ('ontouchstart' in document.documentElement) {
          $$$1(document.body).children().off('mouseover', null, $$$1.noop);
        }

        this._activeTrigger[Trigger.CLICK] = false;
        this._activeTrigger[Trigger.FOCUS] = false;
        this._activeTrigger[Trigger.HOVER] = false;

        if ($$$1(this.tip).hasClass(ClassName.FADE)) {
          var transitionDuration = Util.getTransitionDurationFromElement(tip);
          $$$1(tip).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
        } else {
          complete();
        }

        this._hoverState = '';
      };

      _proto.update = function update() {
        if (this._popper !== null) {
          this._popper.scheduleUpdate();
        }
      }; // Protected


      _proto.isWithContent = function isWithContent() {
        return Boolean(this.getTitle());
      };

      _proto.addAttachmentClass = function addAttachmentClass(attachment) {
        $$$1(this.getTipElement()).addClass(CLASS_PREFIX + "-" + attachment);
      };

      _proto.getTipElement = function getTipElement() {
        this.tip = this.tip || $$$1(this.config.template)[0];
        return this.tip;
      };

      _proto.setContent = function setContent() {
        var tip = this.getTipElement();
        this.setElementContent($$$1(tip.querySelectorAll(Selector.TOOLTIP_INNER)), this.getTitle());
        $$$1(tip).removeClass(ClassName.FADE + " " + ClassName.SHOW);
      };

      _proto.setElementContent = function setElementContent($element, content) {
        var html = this.config.html;

        if (typeof content === 'object' && (content.nodeType || content.jquery)) {
          // Content is a DOM node or a jQuery
          if (html) {
            if (!$$$1(content).parent().is($element)) {
              $element.empty().append(content);
            }
          } else {
            $element.text($$$1(content).text());
          }
        } else {
          $element[html ? 'html' : 'text'](content);
        }
      };

      _proto.getTitle = function getTitle() {
        var title = this.element.getAttribute('data-original-title');

        if (!title) {
          title = typeof this.config.title === 'function' ? this.config.title.call(this.element) : this.config.title;
        }

        return title;
      }; // Private


      _proto._getAttachment = function _getAttachment(placement) {
        return AttachmentMap[placement.toUpperCase()];
      };

      _proto._setListeners = function _setListeners() {
        var _this3 = this;

        var triggers = this.config.trigger.split(' ');
        triggers.forEach(function (trigger) {
          if (trigger === 'click') {
            $$$1(_this3.element).on(_this3.constructor.Event.CLICK, _this3.config.selector, function (event) {
              return _this3.toggle(event);
            });
          } else if (trigger !== Trigger.MANUAL) {
            var eventIn = trigger === Trigger.HOVER ? _this3.constructor.Event.MOUSEENTER : _this3.constructor.Event.FOCUSIN;
            var eventOut = trigger === Trigger.HOVER ? _this3.constructor.Event.MOUSELEAVE : _this3.constructor.Event.FOCUSOUT;
            $$$1(_this3.element).on(eventIn, _this3.config.selector, function (event) {
              return _this3._enter(event);
            }).on(eventOut, _this3.config.selector, function (event) {
              return _this3._leave(event);
            });
          }

          $$$1(_this3.element).closest('.modal').on('hide.bs.modal', function () {
            return _this3.hide();
          });
        });

        if (this.config.selector) {
          this.config = _objectSpread({}, this.config, {
            trigger: 'manual',
            selector: ''
          });
        } else {
          this._fixTitle();
        }
      };

      _proto._fixTitle = function _fixTitle() {
        var titleType = typeof this.element.getAttribute('data-original-title');

        if (this.element.getAttribute('title') || titleType !== 'string') {
          this.element.setAttribute('data-original-title', this.element.getAttribute('title') || '');
          this.element.setAttribute('title', '');
        }
      };

      _proto._enter = function _enter(event, context) {
        var dataKey = this.constructor.DATA_KEY;
        context = context || $$$1(event.currentTarget).data(dataKey);

        if (!context) {
          context = new this.constructor(event.currentTarget, this._getDelegateConfig());
          $$$1(event.currentTarget).data(dataKey, context);
        }

        if (event) {
          context._activeTrigger[event.type === 'focusin' ? Trigger.FOCUS : Trigger.HOVER] = true;
        }

        if ($$$1(context.getTipElement()).hasClass(ClassName.SHOW) || context._hoverState === HoverState.SHOW) {
          context._hoverState = HoverState.SHOW;
          return;
        }

        clearTimeout(context._timeout);
        context._hoverState = HoverState.SHOW;

        if (!context.config.delay || !context.config.delay.show) {
          context.show();
          return;
        }

        context._timeout = setTimeout(function () {
          if (context._hoverState === HoverState.SHOW) {
            context.show();
          }
        }, context.config.delay.show);
      };

      _proto._leave = function _leave(event, context) {
        var dataKey = this.constructor.DATA_KEY;
        context = context || $$$1(event.currentTarget).data(dataKey);

        if (!context) {
          context = new this.constructor(event.currentTarget, this._getDelegateConfig());
          $$$1(event.currentTarget).data(dataKey, context);
        }

        if (event) {
          context._activeTrigger[event.type === 'focusout' ? Trigger.FOCUS : Trigger.HOVER] = false;
        }

        if (context._isWithActiveTrigger()) {
          return;
        }

        clearTimeout(context._timeout);
        context._hoverState = HoverState.OUT;

        if (!context.config.delay || !context.config.delay.hide) {
          context.hide();
          return;
        }

        context._timeout = setTimeout(function () {
          if (context._hoverState === HoverState.OUT) {
            context.hide();
          }
        }, context.config.delay.hide);
      };

      _proto._isWithActiveTrigger = function _isWithActiveTrigger() {
        for (var trigger in this._activeTrigger) {
          if (this._activeTrigger[trigger]) {
            return true;
          }
        }

        return false;
      };

      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, this.constructor.Default, $$$1(this.element).data(), typeof config === 'object' && config ? config : {});

        if (typeof config.delay === 'number') {
          config.delay = {
            show: config.delay,
            hide: config.delay
          };
        }

        if (typeof config.title === 'number') {
          config.title = config.title.toString();
        }

        if (typeof config.content === 'number') {
          config.content = config.content.toString();
        }

        Util.typeCheckConfig(NAME, config, this.constructor.DefaultType);
        return config;
      };

      _proto._getDelegateConfig = function _getDelegateConfig() {
        var config = {};

        if (this.config) {
          for (var key in this.config) {
            if (this.constructor.Default[key] !== this.config[key]) {
              config[key] = this.config[key];
            }
          }
        }

        return config;
      };

      _proto._cleanTipClass = function _cleanTipClass() {
        var $tip = $$$1(this.getTipElement());
        var tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX);

        if (tabClass !== null && tabClass.length) {
          $tip.removeClass(tabClass.join(''));
        }
      };

      _proto._handlePopperPlacementChange = function _handlePopperPlacementChange(popperData) {
        var popperInstance = popperData.instance;
        this.tip = popperInstance.popper;

        this._cleanTipClass();

        this.addAttachmentClass(this._getAttachment(popperData.placement));
      };

      _proto._fixTransition = function _fixTransition() {
        var tip = this.getTipElement();
        var initConfigAnimation = this.config.animation;

        if (tip.getAttribute('x-placement') !== null) {
          return;
        }

        $$$1(tip).removeClass(ClassName.FADE);
        this.config.animation = false;
        this.hide();
        this.show();
        this.config.animation = initConfigAnimation;
      }; // Static


      Tooltip._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = typeof config === 'object' && config;

          if (!data && /dispose|hide/.test(config)) {
            return;
          }

          if (!data) {
            data = new Tooltip(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      _createClass(Tooltip, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }, {
        key: "NAME",
        get: function get() {
          return NAME;
        }
      }, {
        key: "DATA_KEY",
        get: function get() {
          return DATA_KEY;
        }
      }, {
        key: "Event",
        get: function get() {
          return Event;
        }
      }, {
        key: "EVENT_KEY",
        get: function get() {
          return EVENT_KEY;
        }
      }, {
        key: "DefaultType",
        get: function get() {
          return DefaultType;
        }
      }]);

      return Tooltip;
    }();
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */


    $$$1.fn[NAME] = Tooltip._jQueryInterface;
    $$$1.fn[NAME].Constructor = Tooltip;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Tooltip._jQueryInterface;
    };

    return Tooltip;
  }($, Popper);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): popover.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Popover = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'popover';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.popover';
    var EVENT_KEY = "." + DATA_KEY;
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var CLASS_PREFIX = 'bs-popover';
    var BSCLS_PREFIX_REGEX = new RegExp("(^|\\s)" + CLASS_PREFIX + "\\S+", 'g');

    var Default = _objectSpread({}, Tooltip.Default, {
      placement: 'right',
      trigger: 'click',
      content: '',
      template: '<div class="popover" role="tooltip">' + '<div class="arrow"></div>' + '<h3 class="popover-header"></h3>' + '<div class="popover-body"></div></div>'
    });

    var DefaultType = _objectSpread({}, Tooltip.DefaultType, {
      content: '(string|element|function)'
    });

    var ClassName = {
      FADE: 'fade',
      SHOW: 'show'
    };
    var Selector = {
      TITLE: '.popover-header',
      CONTENT: '.popover-body'
    };
    var Event = {
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      INSERTED: "inserted" + EVENT_KEY,
      CLICK: "click" + EVENT_KEY,
      FOCUSIN: "focusin" + EVENT_KEY,
      FOCUSOUT: "focusout" + EVENT_KEY,
      MOUSEENTER: "mouseenter" + EVENT_KEY,
      MOUSELEAVE: "mouseleave" + EVENT_KEY
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Popover =
    /*#__PURE__*/
    function (_Tooltip) {
      _inheritsLoose(Popover, _Tooltip);

      function Popover() {
        return _Tooltip.apply(this, arguments) || this;
      }

      var _proto = Popover.prototype;

      // Overrides
      _proto.isWithContent = function isWithContent() {
        return this.getTitle() || this._getContent();
      };

      _proto.addAttachmentClass = function addAttachmentClass(attachment) {
        $$$1(this.getTipElement()).addClass(CLASS_PREFIX + "-" + attachment);
      };

      _proto.getTipElement = function getTipElement() {
        this.tip = this.tip || $$$1(this.config.template)[0];
        return this.tip;
      };

      _proto.setContent = function setContent() {
        var $tip = $$$1(this.getTipElement()); // We use append for html objects to maintain js events

        this.setElementContent($tip.find(Selector.TITLE), this.getTitle());

        var content = this._getContent();

        if (typeof content === 'function') {
          content = content.call(this.element);
        }

        this.setElementContent($tip.find(Selector.CONTENT), content);
        $tip.removeClass(ClassName.FADE + " " + ClassName.SHOW);
      }; // Private


      _proto._getContent = function _getContent() {
        return this.element.getAttribute('data-content') || this.config.content;
      };

      _proto._cleanTipClass = function _cleanTipClass() {
        var $tip = $$$1(this.getTipElement());
        var tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX);

        if (tabClass !== null && tabClass.length > 0) {
          $tip.removeClass(tabClass.join(''));
        }
      }; // Static


      Popover._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = typeof config === 'object' ? config : null;

          if (!data && /destroy|hide/.test(config)) {
            return;
          }

          if (!data) {
            data = new Popover(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      _createClass(Popover, null, [{
        key: "VERSION",
        // Getters
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }, {
        key: "NAME",
        get: function get() {
          return NAME;
        }
      }, {
        key: "DATA_KEY",
        get: function get() {
          return DATA_KEY;
        }
      }, {
        key: "Event",
        get: function get() {
          return Event;
        }
      }, {
        key: "EVENT_KEY",
        get: function get() {
          return EVENT_KEY;
        }
      }, {
        key: "DefaultType",
        get: function get() {
          return DefaultType;
        }
      }]);

      return Popover;
    }(Tooltip);
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */


    $$$1.fn[NAME] = Popover._jQueryInterface;
    $$$1.fn[NAME].Constructor = Popover;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Popover._jQueryInterface;
    };

    return Popover;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): scrollspy.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var ScrollSpy = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'scrollspy';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.scrollspy';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var Default = {
      offset: 10,
      method: 'auto',
      target: ''
    };
    var DefaultType = {
      offset: 'number',
      method: 'string',
      target: '(string|element)'
    };
    var Event = {
      ACTIVATE: "activate" + EVENT_KEY,
      SCROLL: "scroll" + EVENT_KEY,
      LOAD_DATA_API: "load" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      DROPDOWN_ITEM: 'dropdown-item',
      DROPDOWN_MENU: 'dropdown-menu',
      ACTIVE: 'active'
    };
    var Selector = {
      DATA_SPY: '[data-spy="scroll"]',
      ACTIVE: '.active',
      NAV_LIST_GROUP: '.nav, .list-group',
      NAV_LINKS: '.nav-link',
      NAV_ITEMS: '.nav-item',
      LIST_ITEMS: '.list-group-item',
      DROPDOWN: '.dropdown',
      DROPDOWN_ITEMS: '.dropdown-item',
      DROPDOWN_TOGGLE: '.dropdown-toggle'
    };
    var OffsetMethod = {
      OFFSET: 'offset',
      POSITION: 'position'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var ScrollSpy =
    /*#__PURE__*/
    function () {
      function ScrollSpy(element, config) {
        var _this = this;

        this._element = element;
        this._scrollElement = element.tagName === 'BODY' ? window : element;
        this._config = this._getConfig(config);
        this._selector = this._config.target + " " + Selector.NAV_LINKS + "," + (this._config.target + " " + Selector.LIST_ITEMS + ",") + (this._config.target + " " + Selector.DROPDOWN_ITEMS);
        this._offsets = [];
        this._targets = [];
        this._activeTarget = null;
        this._scrollHeight = 0;
        $$$1(this._scrollElement).on(Event.SCROLL, function (event) {
          return _this._process(event);
        });
        this.refresh();

        this._process();
      } // Getters


      var _proto = ScrollSpy.prototype;

      // Public
      _proto.refresh = function refresh() {
        var _this2 = this;

        var autoMethod = this._scrollElement === this._scrollElement.window ? OffsetMethod.OFFSET : OffsetMethod.POSITION;
        var offsetMethod = this._config.method === 'auto' ? autoMethod : this._config.method;
        var offsetBase = offsetMethod === OffsetMethod.POSITION ? this._getScrollTop() : 0;
        this._offsets = [];
        this._targets = [];
        this._scrollHeight = this._getScrollHeight();
        var targets = [].slice.call(document.querySelectorAll(this._selector));
        targets.map(function (element) {
          var target;
          var targetSelector = Util.getSelectorFromElement(element);

          if (targetSelector) {
            target = document.querySelector(targetSelector);
          }

          if (target) {
            var targetBCR = target.getBoundingClientRect();

            if (targetBCR.width || targetBCR.height) {
              // TODO (fat): remove sketch reliance on jQuery position/offset
              return [$$$1(target)[offsetMethod]().top + offsetBase, targetSelector];
            }
          }

          return null;
        }).filter(function (item) {
          return item;
        }).sort(function (a, b) {
          return a[0] - b[0];
        }).forEach(function (item) {
          _this2._offsets.push(item[0]);

          _this2._targets.push(item[1]);
        });
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        $$$1(this._scrollElement).off(EVENT_KEY);
        this._element = null;
        this._scrollElement = null;
        this._config = null;
        this._selector = null;
        this._offsets = null;
        this._targets = null;
        this._activeTarget = null;
        this._scrollHeight = null;
      }; // Private


      _proto._getConfig = function _getConfig(config) {
        config = _objectSpread({}, Default, typeof config === 'object' && config ? config : {});

        if (typeof config.target !== 'string') {
          var id = $$$1(config.target).attr('id');

          if (!id) {
            id = Util.getUID(NAME);
            $$$1(config.target).attr('id', id);
          }

          config.target = "#" + id;
        }

        Util.typeCheckConfig(NAME, config, DefaultType);
        return config;
      };

      _proto._getScrollTop = function _getScrollTop() {
        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop;
      };

      _proto._getScrollHeight = function _getScrollHeight() {
        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
      };

      _proto._getOffsetHeight = function _getOffsetHeight() {
        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height;
      };

      _proto._process = function _process() {
        var scrollTop = this._getScrollTop() + this._config.offset;

        var scrollHeight = this._getScrollHeight();

        var maxScroll = this._config.offset + scrollHeight - this._getOffsetHeight();

        if (this._scrollHeight !== scrollHeight) {
          this.refresh();
        }

        if (scrollTop >= maxScroll) {
          var target = this._targets[this._targets.length - 1];

          if (this._activeTarget !== target) {
            this._activate(target);
          }

          return;
        }

        if (this._activeTarget && scrollTop < this._offsets[0] && this._offsets[0] > 0) {
          this._activeTarget = null;

          this._clear();

          return;
        }

        var offsetLength = this._offsets.length;

        for (var i = offsetLength; i--;) {
          var isActiveTarget = this._activeTarget !== this._targets[i] && scrollTop >= this._offsets[i] && (typeof this._offsets[i + 1] === 'undefined' || scrollTop < this._offsets[i + 1]);

          if (isActiveTarget) {
            this._activate(this._targets[i]);
          }
        }
      };

      _proto._activate = function _activate(target) {
        this._activeTarget = target;

        this._clear();

        var queries = this._selector.split(','); // eslint-disable-next-line arrow-body-style


        queries = queries.map(function (selector) {
          return selector + "[data-target=\"" + target + "\"]," + (selector + "[href=\"" + target + "\"]");
        });
        var $link = $$$1([].slice.call(document.querySelectorAll(queries.join(','))));

        if ($link.hasClass(ClassName.DROPDOWN_ITEM)) {
          $link.closest(Selector.DROPDOWN).find(Selector.DROPDOWN_TOGGLE).addClass(ClassName.ACTIVE);
          $link.addClass(ClassName.ACTIVE);
        } else {
          // Set triggered link as active
          $link.addClass(ClassName.ACTIVE); // Set triggered links parents as active
          // With both <ul> and <nav> markup a parent is the previous sibling of any nav ancestor

          $link.parents(Selector.NAV_LIST_GROUP).prev(Selector.NAV_LINKS + ", " + Selector.LIST_ITEMS).addClass(ClassName.ACTIVE); // Handle special case when .nav-link is inside .nav-item

          $link.parents(Selector.NAV_LIST_GROUP).prev(Selector.NAV_ITEMS).children(Selector.NAV_LINKS).addClass(ClassName.ACTIVE);
        }

        $$$1(this._scrollElement).trigger(Event.ACTIVATE, {
          relatedTarget: target
        });
      };

      _proto._clear = function _clear() {
        var nodes = [].slice.call(document.querySelectorAll(this._selector));
        $$$1(nodes).filter(Selector.ACTIVE).removeClass(ClassName.ACTIVE);
      }; // Static


      ScrollSpy._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var data = $$$1(this).data(DATA_KEY);

          var _config = typeof config === 'object' && config;

          if (!data) {
            data = new ScrollSpy(this, _config);
            $$$1(this).data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      _createClass(ScrollSpy, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }, {
        key: "Default",
        get: function get() {
          return Default;
        }
      }]);

      return ScrollSpy;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(window).on(Event.LOAD_DATA_API, function () {
      var scrollSpys = [].slice.call(document.querySelectorAll(Selector.DATA_SPY));
      var scrollSpysLength = scrollSpys.length;

      for (var i = scrollSpysLength; i--;) {
        var $spy = $$$1(scrollSpys[i]);

        ScrollSpy._jQueryInterface.call($spy, $spy.data());
      }
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = ScrollSpy._jQueryInterface;
    $$$1.fn[NAME].Constructor = ScrollSpy;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return ScrollSpy._jQueryInterface;
    };

    return ScrollSpy;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): tab.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  var Tab = function ($$$1) {
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    var NAME = 'tab';
    var VERSION = '4.1.3';
    var DATA_KEY = 'bs.tab';
    var EVENT_KEY = "." + DATA_KEY;
    var DATA_API_KEY = '.data-api';
    var JQUERY_NO_CONFLICT = $$$1.fn[NAME];
    var Event = {
      HIDE: "hide" + EVENT_KEY,
      HIDDEN: "hidden" + EVENT_KEY,
      SHOW: "show" + EVENT_KEY,
      SHOWN: "shown" + EVENT_KEY,
      CLICK_DATA_API: "click" + EVENT_KEY + DATA_API_KEY
    };
    var ClassName = {
      DROPDOWN_MENU: 'dropdown-menu',
      ACTIVE: 'active',
      DISABLED: 'disabled',
      FADE: 'fade',
      SHOW: 'show'
    };
    var Selector = {
      DROPDOWN: '.dropdown',
      NAV_LIST_GROUP: '.nav, .list-group',
      ACTIVE: '.active',
      ACTIVE_UL: '> li > .active',
      DATA_TOGGLE: '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
      DROPDOWN_TOGGLE: '.dropdown-toggle',
      DROPDOWN_ACTIVE_CHILD: '> .dropdown-menu .active'
      /**
       * ------------------------------------------------------------------------
       * Class Definition
       * ------------------------------------------------------------------------
       */

    };

    var Tab =
    /*#__PURE__*/
    function () {
      function Tab(element) {
        this._element = element;
      } // Getters


      var _proto = Tab.prototype;

      // Public
      _proto.show = function show() {
        var _this = this;

        if (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && $$$1(this._element).hasClass(ClassName.ACTIVE) || $$$1(this._element).hasClass(ClassName.DISABLED)) {
          return;
        }

        var target;
        var previous;
        var listElement = $$$1(this._element).closest(Selector.NAV_LIST_GROUP)[0];
        var selector = Util.getSelectorFromElement(this._element);

        if (listElement) {
          var itemSelector = listElement.nodeName === 'UL' ? Selector.ACTIVE_UL : Selector.ACTIVE;
          previous = $$$1.makeArray($$$1(listElement).find(itemSelector));
          previous = previous[previous.length - 1];
        }

        var hideEvent = $$$1.Event(Event.HIDE, {
          relatedTarget: this._element
        });
        var showEvent = $$$1.Event(Event.SHOW, {
          relatedTarget: previous
        });

        if (previous) {
          $$$1(previous).trigger(hideEvent);
        }

        $$$1(this._element).trigger(showEvent);

        if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) {
          return;
        }

        if (selector) {
          target = document.querySelector(selector);
        }

        this._activate(this._element, listElement);

        var complete = function complete() {
          var hiddenEvent = $$$1.Event(Event.HIDDEN, {
            relatedTarget: _this._element
          });
          var shownEvent = $$$1.Event(Event.SHOWN, {
            relatedTarget: previous
          });
          $$$1(previous).trigger(hiddenEvent);
          $$$1(_this._element).trigger(shownEvent);
        };

        if (target) {
          this._activate(target, target.parentNode, complete);
        } else {
          complete();
        }
      };

      _proto.dispose = function dispose() {
        $$$1.removeData(this._element, DATA_KEY);
        this._element = null;
      }; // Private


      _proto._activate = function _activate(element, container, callback) {
        var _this2 = this;

        var activeElements;

        if (container.nodeName === 'UL') {
          activeElements = $$$1(container).find(Selector.ACTIVE_UL);
        } else {
          activeElements = $$$1(container).children(Selector.ACTIVE);
        }

        var active = activeElements[0];
        var isTransitioning = callback && active && $$$1(active).hasClass(ClassName.FADE);

        var complete = function complete() {
          return _this2._transitionComplete(element, active, callback);
        };

        if (active && isTransitioning) {
          var transitionDuration = Util.getTransitionDurationFromElement(active);
          $$$1(active).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
        } else {
          complete();
        }
      };

      _proto._transitionComplete = function _transitionComplete(element, active, callback) {
        if (active) {
          $$$1(active).removeClass(ClassName.SHOW + " " + ClassName.ACTIVE);
          var dropdownChild = $$$1(active.parentNode).find(Selector.DROPDOWN_ACTIVE_CHILD)[0];

          if (dropdownChild) {
            $$$1(dropdownChild).removeClass(ClassName.ACTIVE);
          }

          if (active.getAttribute('role') === 'tab') {
            active.setAttribute('aria-selected', false);
          }
        }

        $$$1(element).addClass(ClassName.ACTIVE);

        if (element.getAttribute('role') === 'tab') {
          element.setAttribute('aria-selected', true);
        }

        Util.reflow(element);
        $$$1(element).addClass(ClassName.SHOW);

        if (element.parentNode && $$$1(element.parentNode).hasClass(ClassName.DROPDOWN_MENU)) {
          var dropdownElement = $$$1(element).closest(Selector.DROPDOWN)[0];

          if (dropdownElement) {
            var dropdownToggleList = [].slice.call(dropdownElement.querySelectorAll(Selector.DROPDOWN_TOGGLE));
            $$$1(dropdownToggleList).addClass(ClassName.ACTIVE);
          }

          element.setAttribute('aria-expanded', true);
        }

        if (callback) {
          callback();
        }
      }; // Static


      Tab._jQueryInterface = function _jQueryInterface(config) {
        return this.each(function () {
          var $this = $$$1(this);
          var data = $this.data(DATA_KEY);

          if (!data) {
            data = new Tab(this);
            $this.data(DATA_KEY, data);
          }

          if (typeof config === 'string') {
            if (typeof data[config] === 'undefined') {
              throw new TypeError("No method named \"" + config + "\"");
            }

            data[config]();
          }
        });
      };

      _createClass(Tab, null, [{
        key: "VERSION",
        get: function get() {
          return VERSION;
        }
      }]);

      return Tab;
    }();
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */


    $$$1(document).on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function (event) {
      event.preventDefault();

      Tab._jQueryInterface.call($$$1(this), 'show');
    });
    /**
     * ------------------------------------------------------------------------
     * jQuery
     * ------------------------------------------------------------------------
     */

    $$$1.fn[NAME] = Tab._jQueryInterface;
    $$$1.fn[NAME].Constructor = Tab;

    $$$1.fn[NAME].noConflict = function () {
      $$$1.fn[NAME] = JQUERY_NO_CONFLICT;
      return Tab._jQueryInterface;
    };

    return Tab;
  }($);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.1.3): index.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   * --------------------------------------------------------------------------
   */

  (function ($$$1) {
    if (typeof $$$1 === 'undefined') {
      throw new TypeError('Bootstrap\'s JavaScript requires jQuery. jQuery must be included before Bootstrap\'s JavaScript.');
    }

    var version = $$$1.fn.jquery.split(' ')[0].split('.');
    var minMajor = 1;
    var ltMajor = 2;
    var minMinor = 9;
    var minPatch = 1;
    var maxMajor = 4;

    if (version[0] < ltMajor && version[1] < minMinor || version[0] === minMajor && version[1] === minMinor && version[2] < minPatch || version[0] >= maxMajor) {
      throw new Error('Bootstrap\'s JavaScript requires at least jQuery v1.9.1 but less than v4.0.0');
    }
  })($);

  exports.Util = Util;
  exports.Alert = Alert;
  exports.Button = Button;
  exports.Carousel = Carousel;
  exports.Collapse = Collapse;
  exports.Dropdown = Dropdown;
  exports.Modal = Modal;
  exports.Popover = Popover;
  exports.Scrollspy = ScrollSpy;
  exports.Tab = Tab;
  exports.Tooltip = Tooltip;

  Object.defineProperty(exports, '__esModule', { value: true });

})));
//# sourceMappingURL=bootstrap.js.map

/**
 * jQuery Custom Scrollbar 0.5.5
 * GitHub: https://github.com/mzubala/jquery-custom-scrollbar
 */
(function ($) {

  $.fn.customScrollbar = function (options, args) {

    var defaultOptions = {
      skin: undefined,
      hScroll: true,
      vScroll: true,
      updateOnWindowResize: false,
      animationSpeed: 300,
      onCustomScroll: undefined,
      swipeSpeed: 1,
      wheelSpeed: 40,
      fixedThumbWidth: undefined,
      fixedThumbHeight: undefined
    }

    var Scrollable = function (element, options) {
      this.$element = $(element);
      this.options = options;
      this.addScrollableClass();
      this.addSkinClass();
      this.addScrollBarComponents();
      if (this.options.vScroll)
        this.vScrollbar = new Scrollbar(this, new VSizing());
      if (this.options.hScroll)
        this.hScrollbar = new Scrollbar(this, new HSizing());
      this.$element.data("scrollable", this);
      this.initKeyboardScrolling();
      this.bindEvents();
    }

    Scrollable.prototype = {

      addScrollableClass: function () {
        if (!this.$element.hasClass("scrollable")) {
          this.scrollableAdded = true;
          this.$element.addClass("scrollable");
        }
      },

      removeScrollableClass: function () {
        if (this.scrollableAdded)
          this.$element.removeClass("scrollable");
      },

      addSkinClass: function () {
        if (typeof(this.options.skin) == "string" && !this.$element.hasClass(this.options.skin)) {
          this.skinClassAdded = true;
          this.$element.addClass(this.options.skin);
        }
      },

      removeSkinClass: function () {
        if (this.skinClassAdded)
          this.$element.removeClass(this.options.skin);
      },

      addScrollBarComponents: function () {
        this.assignViewPort();
        if (this.$viewPort.length == 0) {
          this.$element.wrapInner("<div class=\"viewport\" />");
          this.assignViewPort();
          this.viewPortAdded = true;
        }
        this.assignOverview();
        if (this.$overview.length == 0) {
          this.$viewPort.wrapInner("<div class=\"overview\" />");
          this.assignOverview();
          this.overviewAdded = true;
        }
        this.addScrollBar("vertical", "prepend");
        this.addScrollBar("horizontal", "append");
      },

      removeScrollbarComponents: function () {
        this.removeScrollbar("vertical");
        this.removeScrollbar("horizontal");
        if (this.overviewAdded)
          this.$element.unwrap();
        if (this.viewPortAdded)
          this.$element.unwrap();
      },

      removeScrollbar: function (orientation) {
        if (this[orientation + "ScrollbarAdded"])
          this.$element.find(".scroll-bar." + orientation).remove();
      },

      assignViewPort: function () {
        this.$viewPort = this.$element.find(".viewport");
      },

      assignOverview: function () {
        this.$overview = this.$viewPort.find(".overview");
      },

      addScrollBar: function (orientation, fun) {
        if (this.$element.find(".scroll-bar." + orientation).length == 0) {
          this.$element[fun]("<div class='scroll-bar " + orientation + "'><div class='thumb'></div></div>")
          this[orientation + "ScrollbarAdded"] = true;
        }
      },

      resize: function (keepPosition) {
        if (this.vScrollbar)
          this.vScrollbar.resize(keepPosition);
        if (this.hScrollbar)
          this.hScrollbar.resize(keepPosition);
      },

      scrollTo: function (element) {
        if (this.vScrollbar)
          this.vScrollbar.scrollToElement(element);
        if (this.hScrollbar)
          this.hScrollbar.scrollToElement(element);
      },

      scrollToXY: function (x, y) {
        this.scrollToX(x);
        this.scrollToY(y);
      },

      scrollToX: function (x) {
        if (this.hScrollbar)
          this.hScrollbar.scrollOverviewTo(x, true);
      },

      scrollToY: function (y) {
        if (this.vScrollbar)
          this.vScrollbar.scrollOverviewTo(y, true);
      },

      remove: function () {
        this.removeScrollableClass();
        this.removeSkinClass();
        this.removeScrollbarComponents();
        this.$element.data("scrollable", null);
        this.removeKeyboardScrolling();
        if (this.vScrollbar)
          this.vScrollbar.remove();
        if (this.hScrollbar)
          this.hScrollbar.remove();
      },

      setAnimationSpeed: function (speed) {
        this.options.animationSpeed = speed;
      },

      isInside: function (element, wrappingElement) {
        var $element = $(element);
        var $wrappingElement = $(wrappingElement);
        var elementOffset = $element.offset();
        var wrappingElementOffset = $wrappingElement.offset();
        return (elementOffset.top >= wrappingElementOffset.top) && (elementOffset.left >= wrappingElementOffset.left) &&
          (elementOffset.top + $element.height() <= wrappingElementOffset.top + $wrappingElement.height()) &&
          (elementOffset.left + $element.width() <= wrappingElementOffset.left + $wrappingElement.width())
      },

      initKeyboardScrolling: function () {
        var _this = this;

        this.elementKeydown = function (event) {
          if (document.activeElement === _this.$element[0]) {
            if (_this.vScrollbar)
              _this.vScrollbar.keyScroll(event);
            if (_this.hScrollbar)
              _this.hScrollbar.keyScroll(event);
          }
        }

        this.$element
          .attr('tabindex', '-1')
          .keydown(this.elementKeydown);
      },

      removeKeyboardScrolling: function () {
        this.$element
          .removeAttr('tabindex')
          .unbind("keydown", this.elementKeydown);
      },

      bindEvents: function () {
        if (this.options.onCustomScroll)
          this.$element.on("customScroll", this.options.onCustomScroll);
      }

    }

    var Scrollbar = function (scrollable, sizing) {
      this.scrollable = scrollable;
      this.sizing = sizing
      this.$scrollBar = this.sizing.scrollBar(this.scrollable.$element);
      this.$thumb = this.$scrollBar.find(".thumb");
      this.setScrollPosition(0, 0);
      this.resize();
      this.initMouseMoveScrolling();
      this.initMouseWheelScrolling();
      this.initTouchScrolling();
      this.initMouseClickScrolling();
      this.initWindowResize();
    }

    Scrollbar.prototype = {

      resize: function (keepPosition) {
        this.scrollable.$viewPort.height(this.scrollable.$element.height());
        this.sizing.size(this.scrollable.$viewPort, this.sizing.size(this.scrollable.$element));
        this.viewPortSize = this.sizing.size(this.scrollable.$viewPort);
        this.overviewSize = this.sizing.size(this.scrollable.$overview);
        this.ratio = this.viewPortSize / this.overviewSize;
        this.sizing.size(this.$scrollBar, this.viewPortSize);
        this.thumbSize = this.calculateThumbSize();
        this.sizing.size(this.$thumb, this.thumbSize);
        this.maxThumbPosition = this.calculateMaxThumbPosition();
        this.maxOverviewPosition = this.calculateMaxOverviewPosition();
        this.enabled = (this.overviewSize > this.viewPortSize);
        if (this.scrollPercent === undefined)
          this.scrollPercent = 0.0;
        if (this.enabled)
          this.rescroll(keepPosition);
        else
          this.setScrollPosition(0, 0);
        this.$scrollBar.toggle(this.enabled);
      },

      calculateThumbSize: function () {
        var fixedSize = this.sizing.fixedThumbSize(this.scrollable.options)
        var size;
        if (fixedSize)
          size = fixedSize;
        else
          size = this.ratio * this.viewPortSize
        return Math.max(size, this.sizing.minSize(this.$thumb));
      },

      initMouseMoveScrolling: function () {
        var _this = this;
        this.$thumb.mousedown(function (event) {
          if (_this.enabled)
            _this.startMouseMoveScrolling(event);
        });
        this.documentMouseup = function (event) {
          _this.stopMouseMoveScrolling(event);
        };
        $(document).mouseup(this.documentMouseup);
        this.documentMousemove = function (event) {
          _this.mouseMoveScroll(event);
        };
        $(document).mousemove(this.documentMousemove);
        this.$thumb.click(function (event) {
          event.stopPropagation();
        });
      },

      removeMouseMoveScrolling: function () {
        this.$thumb.unbind();
        $(document).unbind("mouseup", this.documentMouseup);
        $(document).unbind("mousemove", this.documentMousemove);
      },

      initMouseWheelScrolling: function () {
        var _this = this;
        this.scrollable.$element.mousewheel(function (event, delta, deltaX, deltaY) {
          if (_this.enabled) {
            if (_this.mouseWheelScroll(deltaX, deltaY)) {
              event.stopPropagation();
              event.preventDefault();
            }
          }
        });
      },

      removeMouseWheelScrolling: function () {
        this.scrollable.$element.unbind("mousewheel");
      },

      initTouchScrolling: function () {
        if (document.addEventListener) {
          var _this = this;
          this.elementTouchstart = function (event) {
            if (_this.enabled)
              _this.startTouchScrolling(event);
          }
          this.scrollable.$element[0].addEventListener("touchstart", this.elementTouchstart);
          this.documentTouchmove = function (event) {
            _this.touchScroll(event);
          }
          document.addEventListener("touchmove", this.documentTouchmove);
          this.elementTouchend = function (event) {
            _this.stopTouchScrolling(event);
          }
          this.scrollable.$element[0].addEventListener("touchend", this.elementTouchend);
        }
      },

      removeTouchScrolling: function () {
        if (document.addEventListener) {
          this.scrollable.$element[0].removeEventListener("touchstart", this.elementTouchstart);
          document.removeEventListener("touchmove", this.documentTouchmove);
          this.scrollable.$element[0].removeEventListener("touchend", this.elementTouchend);
        }
      },

      initMouseClickScrolling: function () {
        var _this = this;
        this.scrollBarClick = function (event) {
          _this.mouseClickScroll(event);
        };
        this.$scrollBar.click(this.scrollBarClick);
      },

      removeMouseClickScrolling: function () {
        this.$scrollBar.unbind("click", this.scrollBarClick);
      },

      initWindowResize: function () {
        if (this.scrollable.options.updateOnWindowResize) {
          var _this = this;
          this.windowResize = function () {
            _this.resize();
          };
          $(window).resize(this.windowResize);
        }
      },

      removeWindowResize: function () {
        $(window).unbind("resize", this.windowResize);
      },

      isKeyScrolling: function (key) {
        return this.keyScrollDelta(key) != null;
      },

      keyScrollDelta: function (key) {
        for (var scrollingKey in this.sizing.scrollingKeys)
          if (scrollingKey == key)
            return this.sizing.scrollingKeys[key](this.viewPortSize);
        return null;
      },

      startMouseMoveScrolling: function (event) {
        this.mouseMoveScrolling = true;
        $("html").addClass("not-selectable");
        this.setUnselectable($("html"), "on");
        this.setScrollEvent(event);
      },

      stopMouseMoveScrolling: function (event) {
        this.mouseMoveScrolling = false;
        $("html").removeClass("not-selectable");
        this.setUnselectable($("html"), null);
      },

      setUnselectable: function (element, value) {
        if (element.attr("unselectable") != value) {
          element.attr("unselectable", value);
          element.find(':not(input)').attr('unselectable', value);
        }
      },

      mouseMoveScroll: function (event) {
        if (this.mouseMoveScrolling) {
          var delta = this.sizing.mouseDelta(this.scrollEvent, event);
          this.scrollThumbBy(delta);
          this.setScrollEvent(event);
        }
      },

      startTouchScrolling: function (event) {
        if (event.touches && event.touches.length == 1) {
          this.setScrollEvent(event.touches[0]);
          this.touchScrolling = true;
          event.stopPropagation();
        }
      },

      touchScroll: function (event) {
        if (this.touchScrolling && event.touches && event.touches.length == 1) {
          var delta = -this.sizing.mouseDelta(this.scrollEvent, event.touches[0]) * this.scrollable.options.swipeSpeed;
          var scrolled = this.scrollOverviewBy(delta);
          if (scrolled) {
            event.stopPropagation();
            event.preventDefault();
            this.setScrollEvent(event.touches[0]);
          }
        }
      },

      stopTouchScrolling: function (event) {
        this.touchScrolling = false;
        event.stopPropagation();
      },

      mouseWheelScroll: function (deltaX, deltaY) {
        var delta = -this.sizing.wheelDelta(deltaX, deltaY) * this.scrollable.options.wheelSpeed;
        if (delta != 0)
          return this.scrollOverviewBy(delta);
      },

      mouseClickScroll: function (event) {
        var delta = this.viewPortSize - 20;
        if (event["page" + this.sizing.scrollAxis()] < this.$thumb.offset()[this.sizing.offsetComponent()])
        // mouse click over thumb
          delta = -delta;
        this.scrollOverviewBy(delta);
      },

      keyScroll: function (event) {
        var keyDown = event.which;
        if (this.enabled && this.isKeyScrolling(keyDown)) {
          if (this.scrollOverviewBy(this.keyScrollDelta(keyDown)))
            event.preventDefault();
        }
      },

      scrollThumbBy: function (delta) {
        var thumbPosition = this.thumbPosition();
        thumbPosition += delta;
        thumbPosition = this.positionOrMax(thumbPosition, this.maxThumbPosition);
        var oldScrollPercent = this.scrollPercent;
        this.scrollPercent = thumbPosition / this.maxThumbPosition;
        var overviewPosition = (thumbPosition * this.maxOverviewPosition) / this.maxThumbPosition;
        this.setScrollPosition(overviewPosition, thumbPosition);
        if (oldScrollPercent != this.scrollPercent) {
          this.triggerCustomScroll(oldScrollPercent);
          return true
        }
        else
          return false;
      },

      thumbPosition: function () {
        return this.$thumb.position()[this.sizing.offsetComponent()];
      },

      scrollOverviewBy: function (delta) {
        var overviewPosition = this.overviewPosition() + delta;
        return this.scrollOverviewTo(overviewPosition, false);
      },

      overviewPosition: function () {
        return -this.scrollable.$overview.position()[this.sizing.offsetComponent()];
      },

      scrollOverviewTo: function (overviewPosition, animate) {
        overviewPosition = this.positionOrMax(overviewPosition, this.maxOverviewPosition);
        var oldScrollPercent = this.scrollPercent;
        this.scrollPercent = overviewPosition / this.maxOverviewPosition;
        var thumbPosition = this.scrollPercent * this.maxThumbPosition;
        if (animate)
          this.setScrollPositionWithAnimation(overviewPosition, thumbPosition);
        else
          this.setScrollPosition(overviewPosition, thumbPosition);
        if (oldScrollPercent != this.scrollPercent) {
          this.triggerCustomScroll(oldScrollPercent);
          return true;
        }
        else
          return false;
      },

      positionOrMax: function (p, max) {
        if (p < 0)
          return 0;
        else if (p > max)
          return max;
        else
          return p;
      },

      triggerCustomScroll: function (oldScrollPercent) {
        this.scrollable.$element.trigger("customScroll", {
            scrollAxis: this.sizing.scrollAxis(),
            direction: this.sizing.scrollDirection(oldScrollPercent, this.scrollPercent),
            scrollPercent: this.scrollPercent * 100
          }
        );
      },

      rescroll: function (keepPosition) {
        if (keepPosition) {
          var overviewPosition = this.positionOrMax(this.overviewPosition(), this.maxOverviewPosition);
          this.scrollPercent = overviewPosition / this.maxOverviewPosition;
          var thumbPosition = this.scrollPercent * this.maxThumbPosition;
          this.setScrollPosition(overviewPosition, thumbPosition);
        }
        else {
          var thumbPosition = this.scrollPercent * this.maxThumbPosition;
          var overviewPosition = this.scrollPercent * this.maxOverviewPosition;
          this.setScrollPosition(overviewPosition, thumbPosition);
        }
      },

      setScrollPosition: function (overviewPosition, thumbPosition) {
        this.$thumb.css(this.sizing.offsetComponent(), thumbPosition + "px");
        this.scrollable.$overview.css(this.sizing.offsetComponent(), -overviewPosition + "px");
      },

      setScrollPositionWithAnimation: function (overviewPosition, thumbPosition) {
        var thumbAnimationOpts = {};
        var overviewAnimationOpts = {};
        thumbAnimationOpts[this.sizing.offsetComponent()] = thumbPosition + "px";
        this.$thumb.animate(thumbAnimationOpts, this.scrollable.options.animationSpeed);
        overviewAnimationOpts[this.sizing.offsetComponent()] = -overviewPosition + "px";
        this.scrollable.$overview.animate(overviewAnimationOpts, this.scrollable.options.animationSpeed);
      },

      calculateMaxThumbPosition: function () {
        return this.sizing.size(this.$scrollBar) - this.thumbSize;
      },

      calculateMaxOverviewPosition: function () {
        return this.sizing.size(this.scrollable.$overview) - this.sizing.size(this.scrollable.$viewPort);
      },

      setScrollEvent: function (event) {
        var attr = "page" + this.sizing.scrollAxis();
        if (!this.scrollEvent || this.scrollEvent[attr] != event[attr])
          this.scrollEvent = {pageX: event.pageX, pageY: event.pageY};
      },

      scrollToElement: function (element) {
        var $element = $(element);
        if (this.sizing.isInside($element, this.scrollable.$overview) && !this.sizing.isInside($element, this.scrollable.$viewPort)) {
          var elementOffset = $element.offset();
          var overviewOffset = this.scrollable.$overview.offset();
          var viewPortOffset = this.scrollable.$viewPort.offset();
          this.scrollOverviewTo(elementOffset[this.sizing.offsetComponent()] - overviewOffset[this.sizing.offsetComponent()], true);
        }
      },

      remove: function () {
        this.removeMouseMoveScrolling();
        this.removeMouseWheelScrolling();
        this.removeTouchScrolling();
        this.removeMouseClickScrolling();
        this.removeWindowResize();
      }

    }

    var HSizing = function () {
    }

    HSizing.prototype = {
      size: function ($el, arg) {
        if (arg)
          return $el.width(arg);
        else
          return $el.width();
      },

      minSize: function ($el) {
        return parseInt($el.css("min-width")) || 0;
      },

      fixedThumbSize: function (options) {
        return options.fixedThumbWidth;
      },

      scrollBar: function ($el) {
        return $el.find(".scroll-bar.horizontal");
      },

      mouseDelta: function (event1, event2) {
        return event2.pageX - event1.pageX;
      },

      offsetComponent: function () {
        return "left";
      },

      wheelDelta: function (deltaX, deltaY) {
        return deltaX;
      },

      scrollAxis: function () {
        return "X";
      },

      scrollDirection: function (oldPercent, newPercent) {
        return oldPercent < newPercent ? "right" : "left";
      },

      scrollingKeys: {
        37: function (viewPortSize) {
          return -10; //arrow left
        },
        39: function (viewPortSize) {
          return 10; //arrow right
        }
      },

      isInside: function (element, wrappingElement) {
        var $element = $(element);
        var $wrappingElement = $(wrappingElement);
        var elementOffset = $element.offset();
        var wrappingElementOffset = $wrappingElement.offset();
        return (elementOffset.left >= wrappingElementOffset.left) &&
          (elementOffset.left + $element.width() <= wrappingElementOffset.left + $wrappingElement.width());
      }

    }

    var VSizing = function () {
    }

    VSizing.prototype = {

      size: function ($el, arg) {
        if (arg)
          return $el.height(arg);
        else
          return $el.height();
      },

      minSize: function ($el) {
        return parseInt($el.css("min-height")) || 0;
      },

      fixedThumbSize: function (options) {
        return options.fixedThumbHeight;
      },

      scrollBar: function ($el) {
        return $el.find(".scroll-bar.vertical");
      },

      mouseDelta: function (event1, event2) {
        return event2.pageY - event1.pageY;
      },

      offsetComponent: function () {
        return "top";
      },

      wheelDelta: function (deltaX, deltaY) {
        return deltaY;
      },

      scrollAxis: function () {
        return "Y";
      },

      scrollDirection: function (oldPercent, newPercent) {
        return oldPercent < newPercent ? "down" : "up";
      },

      scrollingKeys: {
        38: function (viewPortSize) {
          return -10; //arrow up
        },
        40: function (viewPortSize) {
          return 10; //arrow down
        },
        33: function (viewPortSize) {
          return -(viewPortSize - 20); //page up
        },
        34: function (viewPortSize) {
          return viewPortSize - 20; //page down
        }
      },

      isInside: function (element, wrappingElement) {
        var $element = $(element);
        var $wrappingElement = $(wrappingElement);
        var elementOffset = $element.offset();
        var wrappingElementOffset = $wrappingElement.offset();
        return (elementOffset.top >= wrappingElementOffset.top) &&
          (elementOffset.top + $element.height() <= wrappingElementOffset.top + $wrappingElement.height());
      }

    }

    return this.each(function () {
      if (options == undefined)
        options = defaultOptions;
      if (typeof(options) == "string") {
        var scrollable = $(this).data("scrollable");
        if (scrollable)
          scrollable[options](args);
      }
      else if (typeof(options) == "object") {
        options = $.extend(defaultOptions, options);
        new Scrollable($(this), options);
      }
      else
        throw "Invalid type of options";
    });

  }
  ;

})
  (jQuery);

(function ($) {

  var types = ['DOMMouseScroll', 'mousewheel'];

  if ($.event.fixHooks) {
    for (var i = types.length; i;) {
      $.event.fixHooks[ types[--i] ] = $.event.mouseHooks;
    }
  }

  $.event.special.mousewheel = {
    setup: function () {
      if (this.addEventListener) {
        for (var i = types.length; i;) {
          this.addEventListener(types[--i], handler, false);
        }
      } else {
        this.onmousewheel = handler;
      }
    },

    teardown: function () {
      if (this.removeEventListener) {
        for (var i = types.length; i;) {
          this.removeEventListener(types[--i], handler, false);
        }
      } else {
        this.onmousewheel = null;
      }
    }
  };

  $.fn.extend({
    mousewheel: function (fn) {
      return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel");
    },

    unmousewheel: function (fn) {
      return this.unbind("mousewheel", fn);
    }
  });


  function handler(event) {
    var orgEvent = event || window.event, args = [].slice.call(arguments, 1), delta = 0, returnValue = true, deltaX = 0, deltaY = 0;
    event = $.event.fix(orgEvent);
    event.type = "mousewheel";

    // Old school scrollwheel delta
    if (orgEvent.wheelDelta) {
      delta = orgEvent.wheelDelta / 120;
    }
    if (orgEvent.detail) {
      delta = -orgEvent.detail / 3;
    }

    // New school multidimensional scroll (touchpads) deltas
    deltaY = delta;

    // Gecko
    if (orgEvent.axis !== undefined && orgEvent.axis === orgEvent.HORIZONTAL_AXIS) {
      deltaY = 0;
      deltaX = delta;
    }

    // Webkit
    if (orgEvent.wheelDeltaY !== undefined) {
      deltaY = orgEvent.wheelDeltaY / 120;
    }
    if (orgEvent.wheelDeltaX !== undefined) {
      deltaX = orgEvent.wheelDeltaX / 120;
    }

    // Add event and delta to the front of the arguments
    args.unshift(event, delta, deltaX, deltaY);

    return ($.event.dispatch || $.event.handle).apply(this, args);
  }

})(jQuery);

/* ========================================================================
 * Photon Admin: mod_sidebar.js v1.0.2
 *
 * ========================================================================
 * Copyright 2011-2016 eMAG, Inc.
 * Licensed under MIT
 * ======================================================================== */

"use strict";

function createSidebar(data) {
    var defaultData = {
        expanded: 'expanded',           // Posible values: 'expanded', 'collapsed'
        fixed: 'fixed',                 // Posible values: 'fixed', 'un-fixed'
        menuItems: [],
        sidebarContainer: '#sidebar',
        sidebarSearchInputId: 'sidebar_menu_search',
        sidebarSearchClearButtonId: 'sidebar_menu_search_clear_button',
        sidebarSearchButtonId: 'sidebar_menu_search_button',
        noResultsMessage: 'No results found',
        withSearch: true,
        withExpandCollapseButton: true
    };

    data = $.extend({}, defaultData, data);

    var $sidebarContainer = $(data.sidebarContainer),
        menuItemsIdCount = 0,
        sidebarMenuNodes = {};

    $('body').blockControl({ blurElement: $sidebarContainer });

    var initMenuItemData = function (menuItemData) {
        var defaultMenuItemData = {
            'title': '',
            'href': '',
            'data-href': '',
            'icon': 'fa-angle-double-right'
        };

        return $.extend({}, defaultMenuItemData, menuItemData);
    },
        addMenuItemLink = function ($newMenuItem, menuItemData) {
            var $menuItemLink = $('<a>', {
                attr: {
                    'href': menuItemData.href,
                    'data-href': menuItemData['data-href']
                }
            });
            $menuItemLink.append($('<i>', { class: 'menu-icon fa ' + menuItemData.icon }));
            $menuItemLink.append($('<span>', {
                class: 'menu-text',
                html: menuItemData.title
            }));
            $newMenuItem.append($menuItemLink);
        },
        createMenuItemDataContainer = function (menuItemData) {
            return $('<div>', {
                class: 'menu-item-data',
                html: $('<a>', {
                    class: 'menu-item-min-link',
                    attr: {
                        href: menuItemData.href
                    },
                    html: $('<span>', {
                        class: 'menu-text',
                        html: menuItemData.title
                    })
                })
            });
        },
        addMenuItemChildrenToDataContainer = function (menuItemId, $menuItemDataContainer, menuItemDataChildren) {
            var $sidebarSubmenu = $('<ul>', { class: 'sidebar-submenu' });

            for (var j in menuItemDataChildren) {
                $sidebarSubmenu.append(createSidebarSubmenuItem(menuItemId, menuItemDataChildren[j]));
            }

            $menuItemDataContainer.append($sidebarSubmenu);
        },
        createSidebarSubmenuItem = function (parentMenuItemId, data) {
            var defaultData = {
                'title': '',
                'href': ''
            };
            data = $.extend({}, defaultData, data);

            var menuItemId = getMenuItemId(data, menuItemsIdCount);

            sidebarMenuNodes[menuItemId] = jQuery.extend({}, data);
            sidebarMenuNodes[menuItemId].id = menuItemId;
            sidebarMenuNodes[menuItemId].parent = parentMenuItemId;
            sidebarMenuNodes[parentMenuItemId].children.push(menuItemId);

            var $newSidebarSubmenuItem = $('<li>', {
                class: 'menu-item',
                attr: {
                    id: menuItemId
                },
                html: $('<a>', {
                    attr: {
                        href: data.href
                    },
                    html: $('<span>', {
                        class: 'menu-text',
                        html: data.title
                    })
                })
            });

            if (data.children) {
                sidebarMenuNodes[menuItemId].children = [];
                $newSidebarSubmenuItem.addClass('menu-item-has-children');
                addChildrenForSidebarSubmenuItem(menuItemId, $newSidebarSubmenuItem, data)
            }

            return $newSidebarSubmenuItem;
        },
        addChildrenForSidebarSubmenuItem = function (newSidebarSubmenuItemId, $newSidebarSubmenuItem, sidebarSubmenuItemData) {
            var $sidebar2ndSubmenuList = $('<ul>', { class: 'sidebar-submenu' });

            for (var i in sidebarSubmenuItemData.children) {
                $sidebar2ndSubmenuList.append(createSidebarSubmenuItem(newSidebarSubmenuItemId, sidebarSubmenuItemData.children[i]));
            }

            $newSidebarSubmenuItem.append($sidebar2ndSubmenuList);

            return $newSidebarSubmenuItem;
        },
        getMenuItemId = function (menuItem) {
            var menuItemId = '';
            if (menuItem.id) {
                menuItemId = menuItem.id;
            } else {
                menuItemsIdCount++;
                menuItemId = 'sidebar_menu_item_' + menuItemsIdCount;
            }

            return menuItemId;
        },
        makeParentsVisible = function (menuItemId) {
            if (sidebarMenuNodes[menuItemId].parent && sidebarMenuNodes[menuItemId].parent !== null) {
                $('#' + sidebarMenuNodes[menuItemId].parent).show();
                makeParentsVisible(sidebarMenuNodes[menuItemId].parent);
            }
        },
        addSearchEvent = function () {
            var $searchInput = $('#' + data.sidebarSearchInputId),
                typingTimer,
                doneTypingInterval = 600,
                doneTyping = function () {
                    var searchString = $searchInput.val().toLowerCase(),
                        foundMenuItems = [],
                        words = searchString.split(" "),
                        searchRegex = '',
                        resultsNumber = 0;

                    if (searchString !== '') {
                        for (var i = 0; i < words.length; i++) {
                            searchRegex += "(?=.*" + words[i] + ")";
                        }

                        searchRegex = new RegExp(searchRegex + ".+", "gi");

                        for (var i in sidebarMenuNodes) {
                            var nodeTitle = sidebarMenuNodes[i].title.toLowerCase(),
                                nodeKeywords = sidebarMenuNodes[i].keywords ? sidebarMenuNodes[i].keywords.toLowerCase() : '';

                            if (searchRegex.test(nodeTitle) || searchRegex.test(nodeKeywords)) {
                                resultsNumber++;
                                foundMenuItems.push(i);
                                $('#' + i).show();
                                makeParentsVisible(i);
                            } else {
                                $('#' + i).hide();

                                if ($.inArray(sidebarMenuNodes[i].parent, foundMenuItems) !== -1) {
                                    resultsNumber++;
                                    $('#' + i).show();
                                    if (sidebarMenuNodes[i].children && sidebarMenuNodes[i].children.length > 0) {
                                        foundMenuItems.push(i);
                                    }
                                }
                            }
                        }
                    } else {
                        for (var i in sidebarMenuNodes) {
                            resultsNumber++;
                            $('#' + i).show();
                        }
                    }

                    if (resultsNumber > 0) {
                        $('#sidebar_menu_item_no_results').hide();
                    } else {
                        $('#sidebar_menu_item_no_results').show();
                    }
                };

            $searchInput.on('keyup change paste input', function () {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });

            $searchInput.on('change paste input', function () {
                clearTimeout(typingTimer);
                doneTyping();
            });

            $searchInput.on('keydown', function () {
                clearTimeout(typingTimer);
            });

            $('#' + data.sidebarSearchClearButtonId).on('click', function () {
                $searchInput.val('').focus().trigger('change');
            });

            $('#' + data.sidebarSearchButtonId).on('click', function () {
                $('#toggle-sidebar-size-btn').trigger('click');
            });
        };

    $sidebarContainer.append($('<div>', { class: 'sidebar-outer' }));
    var $sidebarInner = $('<ul>', { class: 'sidebar-inner' });

    if (data.withSearch && data.withSearch === true) {
        var $searchItem = $('<li>', {
            class: 'menu-item form-group sidebar-menu-item-search',
            attr: {
                id: 'sidebar_menu_item_search'
            }
        }),
            $searchItem = $('<li>', {
                class: 'menu-item form-group sidebar-menu-item-search',
                attr: {
                    id: 'sidebar_menu_item_search'
                }
            });

        $searchItem.append($('<button>', {
            attr: {
                id: data.sidebarSearchButtonId,
                type: 'button'
            },
            class: 'btn btn-no-border sidebar-menu-search-button',
            html: $('<i>', { class: 'fa fa-search' })
        }));

        var $searchInputGroup = $('<div>', { class: 'input-group input-group-no-separation' });
        $searchInputGroup.append($('<input>', {
            class: 'form-control sidebar-menu-search',
            attr: {
                id: data.sidebarSearchInputId,
                placeholder: 'Search...',
                type: 'text'
            }
        }));
        $searchInputGroup.append($('<span>', {
            attr: {
                id: data.sidebarSearchClearButtonId
            },
            class: 'input-group-addon cursor-pointer sidebar-menu-search-clear-button',
            html: $('<i>', { class: 'fa fa-times' })
        }));
        $searchItem.append($searchInputGroup);

        var noResultsItemData = {
            'title': data.noResultsMessage,
            'href': 'javascript:void(0)',
            'icon': 'fa-times'
        };
        noResultsItemData = initMenuItemData(noResultsItemData);
        var $noResultsItem = $('<li>', {
            class: 'menu-item sidebar-menu-item-no-results',
            attr: {
                id: 'sidebar_menu_item_no_results',
                style: 'display: none;'
            }
        });
        addMenuItemLink($noResultsItem, noResultsItemData);
        $noResultsItem.append(createMenuItemDataContainer(noResultsItemData));

        $sidebarInner.append($searchItem);
        $sidebarInner.append($noResultsItem);
    }

    for (var i in data.menuItems) {
        var menuItemId = getMenuItemId(data.menuItems[i], menuItemsIdCount);

        sidebarMenuNodes[menuItemId] = data.menuItems[i];
        sidebarMenuNodes[menuItemId].id = menuItemId;
        sidebarMenuNodes[menuItemId].parent = null;

        var menuItemData = initMenuItemData(data.menuItems[i]),
            $newMenuItem = $('<li>', {
                class: 'menu-item',
                attr: {
                    id: menuItemId
                }
            });

        addMenuItemLink($newMenuItem, menuItemData);

        var $menuItemDataContainer = createMenuItemDataContainer(menuItemData);
        if (menuItemData.children) {
            sidebarMenuNodes[menuItemId].children = [];
            $newMenuItem.addClass('menu-item-has-children');
            addMenuItemChildrenToDataContainer(menuItemId, $menuItemDataContainer, menuItemData.children);
        }
        $newMenuItem.append($menuItemDataContainer);

        $sidebarInner.append($newMenuItem);
    }

    $sidebarContainer.find('.sidebar-outer').eq(0).append($sidebarInner);

    $sidebarContainer.addClass('sidebar');
    if (data.fixed == 'fixed') {
        $sidebarContainer.addClass('sidebar-fixed');
    }

    if (data.withExpandCollapseButton && data.withExpandCollapseButton === true) {
        var $sidebarControl = $('<div>', {
            class: 'sidebar-control',
            html: $('<div>', {
                class: 'sidebar-toggle',
                html: $('<button>', {
                    id: 'toggle-sidebar-size-btn',
                    class: 'btn btn-default btn-sm',
                    attr: {
                        type: 'button'
                    },
                    html: $('<i>', {
                        class: 'menu-icon fa fa-arrow-left'
                    })
                })
            })
        })

        $sidebarContainer.append($sidebarControl);
    } else {
        setCookie('sidebarStatus', 'open');
    }

    initScrollbarForSidebar();

    if (data.withSearch && data.withSearch === true) {
        addSearchEvent();
    }

    $('body').unblockControl({ focusElement: $sidebarContainer });

    return sidebarMenuNodes;
}

function initScrollbarForSidebar() {
    $('#sidebar .sidebar-outer').customScrollbar({
        skin: 'default-skin',
        hScroll: false,
        updateOnWindowResize: true
    });
}

function updateScrollbar() {
    $('#sidebar .sidebar-outer').customScrollbar('resize', true);
    $(window).resize();
}

function newScrollbarHeight($sidebarInner, $menuItem) {
    var rowHeight = $('.sidebar-inner > .menu-item:first-of-type').outerHeight();
    return Math.max(
        ((rowHeight * ($sidebarInner.find(' > .menu-item').index($menuItem) + 1)) + $menuItem.find('.sidebar-submenu').outerHeight()),
        $sidebarInner.height()
    );
}

function updateSidebarHeight() {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    $sidebarInner.css('height', '');
    $sidebarInner = $('#sidebar .sidebar-inner');
    var $firstActiveMenuItem = $('#sidebar .menu-item.active').eq(0);
    var newHeight = newScrollbarHeight($sidebarInner, $firstActiveMenuItem);

    $sidebarInner.height(newHeight);
}

function updateSidebarHeightByMenuItem($menuItem) {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    if ($menuItem.parent().hasClass('sidebar-inner')) {
        $sidebarInner.css('height', '');

        if ($menuItem.hasClass('active')) {
            var newHeight = newScrollbarHeight($sidebarInner, $menuItem);
            $sidebarInner.height(newHeight);
        }
    } else {
        if ($menuItem.hasClass('active')) {
            $sidebarInner.height($sidebarInner.height() + $menuItem.find('.sidebar-submenu').outerHeight());
        } else {
            $sidebarInner.height($sidebarInner.height() - $menuItem.find('.sidebar-submenu').outerHeight());
        }
    }
}

function staticNavigation(path) {
    path = (typeof path === 'undefined') ? window.location.pathname + window.location.hash : path;

    $('#sidebar .menu-item').removeClass('active');

    $('#sidebar .menu-item > a').each(function () {
        var href = $(this).attr('href');
        if (href == '#') {
            href = $(this).attr('data-href');
        }
        if (path === href) {
            $(this).parents('.menu-item-has-children').addClass('active');
            $(this).closest('.menu-item').addClass('active');
        }
    });
    updateSidebarHeight();
    updateScrollbar();

    scrollActiveMenuItemIntoView();

    $(window).resize();
}

function scrollActiveMenuItemIntoView() {
    $('#sidebar .sidebar-outer').customScrollbar('scrollTo', '.menu-item.active:last');
}

function initSidebarEvents() {
    /**
     * Jquery objects for sidebar
     * @type {*|HTMLElement}
     */
    var $toggleNavBtn = $('#toggle-nav-btn');
    var $sidebar = $('#sidebar');
    var $toggleSidebarBtn = $('#toggle-sidebar-btn');
    var $document = $(document);
    /**
     * CSS Classes that trigger the submenu collapse
     * @type {string}
     */
    var menuItemHasChildrenCssClass = '.menu-item-has-children';

    const SCREEN_XS_MAX = 767;

    /**
     * Sidebar elements
     * @event click
     */
    $sidebar.on('click', '.menu-item a', function (e) {
        if ($(this).attr('href') == '#') {
            e.preventDefault();
        }
        var element = $($(this).parents('.menu-item')[0]);

        $sidebar.find('.menu-item').not('.menu-item-has-children').removeClass('active');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find(menuItemHasChildrenCssClass).removeClass('active');
        }
        else {
            element.parent().find(menuItemHasChildrenCssClass).removeClass('active');
            element.addClass('active');
        }
    });
    /**
     * Collapse sidebar using the dedicated button from the bottom (Only on desktop/tablet)
     * @event click
     */
    $sidebar.on('click', '#toggle-sidebar-size-btn', function (e) {
        e.preventDefault();
        var $sidebarInner = $('#sidebar .sidebar-inner');

        $(this).find('.menu-icon').toggleClass('fa-arrow-right fa-arrow-left');
        if ($sidebar.hasClass('sidebar-min')) {
            $sidebar.removeClass('sidebar-min');
            $(window).trigger('maximize.photon.sidebar');
            setCookie('sidebarStatus', 'open');

            $sidebarInner.css('height', '');
        } else {
            $sidebar.addClass('sidebar-min');
            $(window).trigger('minimize.photon.sidebar');
            setCookie('sidebarStatus', 'close');

            updateSidebarHeight();
        }
        updateScrollbar();
        $(window).resize();
        realignNotifications();
    });
    /**
     * Open/Close sidebar by using the "#toggle-sidebar-btn" button from the main navigation (Only on mobile)
     * @event click
     */
    $document.on('click', '#toggle-sidebar-btn', function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-primary');

        if ($sidebar.hasClass('open')) {
            $sidebar.removeClass('open');
            $(window).trigger('close.photon.sidebar');
        } else {
            $sidebar.addClass('open');
            $(window).trigger('open.photon.sidebar');
        }

        if ($toggleNavBtn.hasClass('btn-primary')) {
            $toggleNavBtn.toggleClass('btn-primary');
            $toggleNavBtn.find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
        }
        $('#main-nav').collapse('hide');
    });
    /**
     * Close sidebar on mobile when click out of sidebar
     * @event click
     */
    $document.on('click', function (e) {
        if (!$(e.target).closest('#sidebar, #toggle-sidebar-btn').length) {
            $sidebar.removeClass('open');
            if ($toggleSidebarBtn.hasClass('btn-primary')) {
                $toggleSidebarBtn.removeClass('btn-primary');
            }
        }
    });

    /** Function to toggle the navbar minimization */
    $(document).on('click', '#toggle-nav-btn', function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-primary');
        $(this).find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
    });

    $(document).on('click', '.menu-item > a, .menu-item > .menu-item-data > a', function (e) {
        if ($('#sidebar').hasClass('sidebar-min')) {
            var $menuItem = $(this).parents('.menu-item').eq(0);
            updateSidebarHeightByMenuItem($menuItem);
        }

        updateScrollbar();
    });

    $(function () {
        var sidebarStatus = getCookie('sidebarStatus');

        if (sidebarStatus == '') {
            setCookie('sidebarStatus', 'open');
        } else {
            if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
                $sidebar.addClass('sidebar-min');
                $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
            }
        }
    });

    $(window).on('resize', function () {
        var sidebarStatus = getCookie('sidebarStatus');
        var $sidebarInner = $('#sidebar .sidebar-inner');

        if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
            $sidebar.addClass('sidebar-min');
            $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
            updateSidebarHeight();
        } else {
            $sidebar.removeClass('sidebar-min');
            $sidebar.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-right').addClass('fa-arrow-left');
            $sidebarInner.css('height', '');
        }
    })

    // MENU LANGUAGES MOBILE BUG FIXED
    $("#main-container").click(function (e) { // When any `div.container` is clicked
        if (!$(this).parents().hasClass("navbar")) { // to check if it's not the menu links that are clicked
            if ($('.navbar-collapse').hasClass('in')) { //if the navbar is open (we only want to close it when it is open or else it causes a glitch when you first click outside)
                $('.navbar-collapse').collapse('hide'); //hide the navbar
            }
        }
    });
}

jQuery(function ($) {
    initScrollbarForSidebar();
    initSidebarEvents();
});

(function(window, $) {
    'use strict';

    function PhotonDataFormatter() {

        var self = this;

        /**
         * Not Available Formatter
         * @param item
         * @return {string}
         */
        this.notAvailable = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return '<span class="formatter-notavailable label label-default">N/A</span>';
            }

            return item;
        };

        /**
         * DateTime Formatter
         * @param item
         * @return {string}
         */
        this.dateTime = function (item) {
            return dateTimeFormatter(item, 'datetime', false);
        };

        /**
         * DateTime Formatter without icon
         * @param item
         * @return {string}
         */
        this.dateTimeNoIcon = function (item) {
            return dateTimeFormatter(item, 'datetime', true);
        };

        /**
         * Date Formatter
         * @param item
         * @return {string}
         */
        this.date = function (item) {
            return dateTimeFormatter(item, 'date', false);
        };

        /**
         * Date Formatter without icon
         * @param item
         * @return {string}
         */
        this.dateNoIcon = function (item) {
            return dateTimeFormatter(item, 'date', true);
        };

        /**
         * Time Formatter
         * @param item
         * @return {string}
         */
        this.time = function (item) {
            return dateTimeFormatter(item, 'time', false);
        };

        /**
         * Time Formatter without icon
         * @param item
         * @return {string}
         */
        this.timeNoIcon = function (item) {
            return dateTimeFormatter(item, 'time', true);
        };

        /**
         * Id Formatter
         * @param item
         * @returns {string}
         */
        this.id = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            return '<span class="formatter-id"><i>#</i> '  + item + '</span>';
        };

        /**
         * Cell UserEmail Formatter
         * @param item
         * @return {string}
         */
        this.userEmail = function (item) {
            return userEmailFormatter(item, false);
        };

        /**
         * Cell UserEmail Formatter without icon
         * @param item
         * @return {string}
         */
        this.userEmailNoIcon = function (item) {
            return userEmailFormatter(item, true);
        };

        /**
         * Country Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.country = function (item, options, rowObject) {
            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            var rCountryCode = rowObject !== undefined ? getItemStatus(rowObject.countryCode) : getItemStatus(null);

            if (rCountryCode.hasNoValue) {
                if (i.isString && !i.isJson) {
                    var countryCode = item.toString();
                    return countryFormatterString({country: item, countryCode: countryCode.toLowerCase()});
                }

                if (i.isJson) {
                    item = JSON.parse(item);
                }
                return countryFormatterString(item);
            }

            return countryFormatterString({country: item, countryCode: rowObject.countryCode});
        };

        /**
         * Actions buttons Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.actionsButtons = function (item) {
            var i = getItemStatus(item);

            if (i.isJson) {
                item = JSON.parse(item);
                i = getItemStatus(item);
            }

            if (!i.isArray) {
                console.error('jqGrid actions buttons cell data must be array of objects.');
                return '';
            }

            var buttonsGroups = {};

            $.each(item, function(index, element) {
                var currentButtonGroup;


                currentButtonGroup = getCurrentButtonGroup(buttonsGroups, element.group);

                if (typeof(buttonsGroups[currentButtonGroup]) == 'undefined') {
                    buttonsGroups[currentButtonGroup] = $('<div>', { class: 'btn-group' });
                }

                var attr = makeButtonSetup(element);

                if (element.dropdown instanceof Array && element.dropdown.length > 0) {
                    var dropdownContent = getDropdownContent(element.dropdown);

                    attr['data-content'] = dropdownContent.prop('outerHTML');
                }

                buttonsGroups[currentButtonGroup].append($('<a>', attr));
            });

            var actionsButtons = '';

            $.each(buttonsGroups, function(index, element) {
                actionsButtons += $(element).prop('outerHTML');
            });


            return actionsButtons;
        }

        /**
         * Label and info Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.labelAndTooltip = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            if (i.isJson) {
                item = JSON.parse(item);
                i = getItemStatus(item);
            }

            var labelClass = 'label-default';

            if (i.isString) {
                return '<span class="label ' + labelClass + '">' + item + '</span>';
            }

            labelClass = item.labelClass || 'label-default';

            if (item.tooltip) {
                var tooltipType = item.tooltipType || 'default';
                var tooltipPlacement = item.tooltipPlacement || 'top';

                item.tooltip = ' data-toggle="tooltip" data-placement="' + tooltipPlacement + '" data-type="' + tooltipType + '" data-original-title="' + item.tooltip + '"';
                labelClass += ' label-with-tooltip';
            } else {
                item.tooltip = '';
            }

            return '<span class="label ' + labelClass + '"' + item.tooltip + '>' + item.label + '</span>';
        }

        /**
         * Badge Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.badge = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            if ((i.isString && !i.isJson) || i.isNumber) {
                return '<span class="badge">' + item + '</span>';
            }

            if (i.isJson || i.isObject) {
                if (i.isJson) {
                    item = JSON.parse(item);
                }

                var badgeHtml = '';
                if (item.text) {
                    badgeHtml += item.text + ' ';
                }
                badgeHtml += '<span class="badge">' + item.number + '</span>';

                return badgeHtml;
            } else {
                return self.notAvailable();
            }
        }

        /**
         * Price Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.price = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            Number.prototype.formatMoney = function(c, d, t) {
                var n = this;
                var c = isNaN(c = Math.abs(c)) ? 2 : c;
                var d = d || ",";
                var t = t || ".";
                var s = n < 0 ? "-" : "";
                var i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c)));
                var j = (j = i.length) > 3 ? j % 3 : 0;
                return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
            };

            if (i.isJson || i.isObject) {
                if (i.isJson) {
                    item = JSON.parse(item);
                }

                var currency = item.currency || 'RON';
                var value = Number(item.value);

                return '<div class="text-right">' + value.formatMoney() + ' ' + currency + '</div>';
            }

            if (i.isNumber || i.isString) {
                return '<div class="text-right">' + Number(item).formatMoney() + ' RON</div>';
            }
        }

        /**
         * Product Formatter
         * @param item
         * @param options
         * @param rowObject
         * @return {string}
         */
        this.product = function (item) {
            var i = getItemStatus(item);

            if (i.hasNoValue) {
                return self.notAvailable();
            }

            if (i.isJson || i.isObject) {
                if (i.isJson) {
                    item = JSON.parse(item);
                }

                var link = item.link || '';
                var name = item.name;

                if (link) {
                    return '<a href="' + link + '" title="' + name + '">' + name + '</a>';
                }
                return name;
            }

            return item;
        }

        /**
         * Check item properties
         * @param item
         * @return {object}
         */
        function getItemStatus (item) {
            return {
                hasNoValue: ( item == '' || item == null || typeof(item) == 'undefined' ),
                isNumber: (typeof(item) == 'number'),
                isJson: isJson(item),
                isObject: ( Object.prototype.toString.call(item) === '[object Object]' ),
                isString: ( typeof(item) == 'string' ),
                isArray: ( item instanceof Array ),
                isDateTimeArray: ( item instanceof Array && (item.length == 1 || item.length == 2) )
            };
        };

        /**
         * Test to see if it's json
         * @param str
         * @returns {boolean}
         */
        function isJson (str) {
            try {
                JSON.parse(str);
                if (str.indexOf('{') === -1) {
                    return false;
                }
            } catch (e) {
                return false;
            }
            return true;
        };

        /**
         * Create DateTime formatter
         * @param item
         * @param type - Possible values: 'datetime', 'date', 'time'
         * @return {string}
         */
        function dateTimeFormatter(item, type, noIcon) {
            if ($.inArray(type, ['datetime', 'date', 'time']) == -1) {
                return item;
            }

            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            if ((i.isString && !i.isJson) || i.isDateTimeArray) {
                var dateTimeArray = item;
                if (i.isString) {
                    dateTimeArray = item.split(' ');
                }

                if (type == 'datetime') {
                    return dateTimeFormatterString({date: dateTimeArray[0], time: dateTimeArray[1]}, type, noIcon);
                } else {
                    var dateOrTime = {};
                    dateOrTime[type] = dateTimeArray[0];
                    return dateTimeFormatterString(dateOrTime, type, noIcon);
                }
            }

            if (i.isJson || i.isObject) {
                var dateTimeObject = item;
                if (i.isJson) {
                    dateTimeObject = JSON.parse(item);
                }

                return dateTimeFormatterString(dateTimeObject, type, noIcon);
            }

            return item;
        };

        /**
         * Generate DateTime formatter's string
         * @param dateTime
         * @param type - Possible values: 'datetime', 'date', 'time'
         * @return {string}
         */
        function dateTimeFormatterString (dateTime, type, noIcon) {
            var result = '<span class="formatter-' + type + '">';

            var iconCalendar = '<i class="fa fa-calendar"></i>' + ' ';
            var iconClock = '<i class="fa fa-clock-o"></i>' + ' ';

            if (noIcon == true) {
                iconCalendar = '';
                iconClock = '';
            }

            if (dateTime.date != '' && dateTime.date != null && typeof(dateTime.date) == 'string') {
                result += '<span class="text-nowrap">'+ iconCalendar + dateTime.date + '</span> ';
            }

            if (dateTime.time != '' && dateTime.time != null && typeof(dateTime.time) == 'string') {
                dateTime.time = timeRemoveMicroseconds(dateTime.time);
                result += '<span class="text-nowrap">'+ iconClock + dateTime.time + '</span> ';
            }

            result += '</span>';

            return result;
        };

        /**
         * Remove microseconds from time format
         * @param time
         * @return {string}
         */
        function timeRemoveMicroseconds (time) {
            return (time.indexOf('.') == -1) ? time : time.substr(0, time.indexOf('.'));
        }

        /**
         * Create UserEmail formatter
         * @param item
         * @param noIcon - Possible values: false, true
         * @return {string}
         */
        function userEmailFormatter (item, noIcon) {
            var i = getItemStatus(item);

            if (i.hasNoValue || i.isNumber) {
                return self.notAvailable();
            }

            if (i.isString && !i.isJson) {
                return userEmailFormatterString(item, '', noIcon);
            }


            if (i.isJson || i.isObject) {
                var userEmail = item;
                if (i.isJson) {
                    var userEmail = JSON.parse(item);
                }

                userEmail.user = getUser(userEmail);

                return userEmailFormatterString(userEmail.email, userEmail.user, noIcon);
            }

            return item;
        };

        /**
         * Generate UserEmail formatter's string
         * @param email
         * @param user
         * @return {string}
         */
        function userEmailFormatterString (email, user, noIcon) {
            var result = '';

            var icon = '<i class="fa fa-user"></i> ';
            if (noIcon == true) {
                icon = '';
            }

            result = '<span class="formatter-useremail">' + icon + '<a href="mailto:' + email + '">';

            if (user != '' && user != null && typeof(user) == 'string') {
                result += user;
            } else {
                result += email;
            }

            result += '</a></span>';

            return result;
        };

        /**
         * Get user from userEmail object
         * @param userEmail
         * @return {string}
         */
        function getUser (userEmail) {
            var posibleVariableName = ['user', 'username', 'displayName', 'displayname', 'email'];
            var user = '';

            $.each(posibleVariableName, function(index, element) {
                if (userEmail[element] != '' && userEmail[element] != null && typeof(userEmail[element]) == 'string') {
                    user = userEmail[element];
                    return false;
                }
            });

            return user;
        };

        /**
         * Generate Country formatter's string
         * @param item
         * @return {string}
         */
        function countryFormatterString (item) {
            return '<span class="formatter-country" data-country="' + item.country + '"><i class="flag-icon flag-icon-' + item.countryCode + '"></i>'+ " " + item.country + '</span>';
        };

        /**
         * Get current button group
         * @param buttonsGroups
         * @param elementGroup
         * @return {*}
         */
        function getCurrentButtonGroup(buttonsGroups, elementGroup) {
            var currentButtonGroup;
            if (typeof(elementGroup) == 'undefined') {
                var buttonsGroupsKeys = Object.keys(buttonsGroups);
                currentButtonGroup = buttonsGroupsKeys[buttonsGroupsKeys.length - 1] + 1;
            } else {
                currentButtonGroup = elementGroup;
            }

            return currentButtonGroup;
        }

        /**
         * Create HTML for dropdown
         * @param elementDropdown
         * @return {object}
         */
        function getDropdownContent(elementDropdown) {
            var dropdownContent = $('<ul>', { class: 'dropdown-menu dropdown-default' });;

            $.each(elementDropdown, function(index, subElement) {
                var liContent = $('<li>');
                liContent.append( $('<a>', makeButtonSetup(subElement, false)) );
                dropdownContent.append(liContent);
            });

            return dropdownContent;
        }

        /**
         *
         * @param buttonData
         * @return {object}
         */
        function makeButtonSetup(buttonData, isButton) {
            var buttonSetup = buttonData.attr || {};
            buttonSetup.class = buttonSetup.class || '';

            if (isButton == undefined) {
                isButton = true;
            }

            if (isButton) {
                buttonSetup.class += ' btn btn-default btn-sm';
            }

            if (buttonData.dropdown instanceof Array && buttonData.dropdown.length > 0) {
                buttonSetup.class += ' more-actions';
            }

            buttonSetup.href = buttonSetup.href || 'javascript:void(0);';

            var buttonContentArray = [];
            if (buttonData.icon) {
                buttonContentArray.push('<i class="fa ' + buttonData.icon + '" aria-hidden="true"></i>');
            }
            if (buttonData.label) {
                buttonContentArray.push('<span>' + buttonData.label + '</span>');
            }
            buttonSetup.html = buttonContentArray.join(' ');

            return buttonSetup;
        };
    };

    var PhotonDataFormatter = new PhotonDataFormatter();

    window.PhotonDataFormatter = PhotonDataFormatter;

}(window, jQuery));
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){function b(b){var c=!1;return a('[data-notify="container"]').each(function(d,e){var f=a(e),g=f.find('[data-notify="title"]').html().trim(),h=f.find('[data-notify="message"]').html().trim(),i=g===a("<div>"+b.settings.content.title+"</div>").html().trim(),j=h===a("<div>"+b.settings.content.message+"</div>").html().trim(),k=f.hasClass("alert-"+b.settings.type);return i&&j&&k&&(c=!0),!c}),c}function c(c,e,f){var g={content:{message:"object"==typeof e?e.message:e,title:e.title?e.title:"",icon:e.icon?e.icon:"",url:e.url?e.url:"#",target:e.target?e.target:"-",id:e.id?e.id:""}};if(f=a.extend(!0,{},g,f),this.settings=a.extend(!0,{},d,f),this._defaults=d,"-"===this.settings.content.target&&(this.settings.content.target=this.settings.url_target),this.animations={start:"webkitAnimationStart oanimationstart MSAnimationStart animationstart",end:"webkitAnimationEnd oanimationend MSAnimationEnd animationend"},"number"==typeof this.settings.offset&&(this.settings.offset={x:this.settings.offset,y:this.settings.offset}),this.settings.allow_duplicates||!this.settings.allow_duplicates&&!b(this)){this.init();var h=a('[data-notify="container"]').length;this.settings.restrict>0&&h>=this.settings.restrict&&a('[data-notify="container"]').find('button[data-notify="dismiss"]').slice(0,h-this.settings.restrict).trigger("click")}}var d={element:"body",position:null,type:"info",allow_dismiss:!0,allow_duplicates:!0,newest_on_top:!1,showProgressbar:!1,placement:{from:"top",align:"right"},restrict:0,offset:20,spacing:10,width:"200px",z_index:1031,delay:5e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},onShow:null,onShown:null,onDismiss:null,onTimer:null,onClose:null,onClosed:null,onClick:null,icon_type:"class",template:['<div data-notify="container">','<div class="alert alert-{0}" role="alert">','<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>','<span data-notify="icon"></span>','<h4 class="alert-heading" data-notify="title">{1}</h4>','<p class="mb-0" data-notify="message">{2}</p>','<div class="progress" data-notify="progressbar">','<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>',"</div>",'<a href="{3}" target="{4}" data-notify="url"></a>',"</div>","</div>"].join("")};String.format=function(){var a=arguments;return arguments[0].replace(/(\{\{\d\}\}|\{\d\})/g,function(b){if("{{"===b.substring(0,2))return b;var c=parseInt(b.match(/\d/)[0]);return a[c+1]})},a.extend(c.prototype,{init:function(){var a=this;this.buildNotify(),this.settings.content.icon&&this.setIcon(),"#"!=this.settings.content.url&&this.styleURL(),this.styleDismiss(),this.placement(),this.bind(),this.notify={$ele:this.$ele,update:function(b,c){var d={};"string"==typeof b?d[b]=c:d=b;for(var e in d)switch(e){case"type":this.$ele.removeClass("alert-"+a.settings.type),this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass("progress-bar-"+a.settings.type),a.settings.type=d[e],this.$ele.addClass("alert-"+d[e]).find('[data-notify="progressbar"] > .progress-bar').addClass("progress-bar-"+d[e]);break;case"icon":var f=this.$ele.find('[data-notify="icon"]');"class"===a.settings.icon_type.toLowerCase()?f.removeClass(a.settings.content.icon).addClass(d[e]):(f.is("img")||f.find("img"),f.attr("src",d[e])),a.settings.content.icon=d[b];break;case"progress":var g=a.settings.delay-a.settings.delay*(d[e]/100);this.$ele.data("notify-delay",g),this.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow",d[e]).css("width",d[e]+"%");break;case"url":this.$ele.find('[data-notify="url"]').attr("href",d[e]);break;case"target":this.$ele.find('[data-notify="url"]').attr("target",d[e]);break;default:this.$ele.find('[data-notify="'+e+'"]').html(d[e])}var h=this.$ele.outerHeight()+parseInt(a.settings.spacing)+parseInt(a.settings.offset.y);a.reposition(h)},close:function(){a.close()}}},buildNotify:function(){var b=this.settings.content;this.$ele=a(String.format(this.settings.template,this.settings.type,b.title,b.message,b.url,b.target)),this.$ele.attr("data-notify-position",this.settings.placement.from+"-"+this.settings.placement.align),0===b.title.length&&this.$ele.find('[data-notify="title"]').css("display","none"),this.settings.allow_dismiss||this.$ele.find('[data-notify="dismiss"]').css("display","none"),(this.settings.delay<=0&&!this.settings.showProgressbar||!this.settings.showProgressbar)&&this.$ele.find('[data-notify="progressbar"]').remove(),0!==b.id.length&&this.$ele.find('[data-notify="dismiss"]').attr("data-notify-id",b.id)},setIcon:function(){"class"===this.settings.icon_type.toLowerCase()?this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon):this.$ele.find('[data-notify="icon"]').is("img")?this.$ele.find('[data-notify="icon"]').attr("src",this.settings.content.icon):this.$ele.find('[data-notify="icon"]').append('<img src="'+this.settings.content.icon+'" alt="Notify Icon" />')},styleDismiss:function(){this.$ele.find('[data-notify="dismiss"]').css({position:"absolute",right:"10px",top:"5px",zIndex:this.settings.z_index+2})},styleURL:function(){this.$ele.find('[data-notify="url"]').css({backgroundImage:"url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",height:"100%",left:0,position:"absolute",top:0,width:"100%",zIndex:this.settings.z_index+1})},placement:function(){var b=this,c=this.settings.offset.y,d={display:"inline-block",margin:"0px auto",position:this.settings.position?this.settings.position:"body"===this.settings.element?"fixed":"absolute",transition:"all .5s ease-in-out",zIndex:this.settings.z_index,width:this.settings.width},e=!1,f=this.settings;switch(a('[data-notify-position="'+this.settings.placement.from+"-"+this.settings.placement.align+'"]:not([data-closing="true"])').each(function(){c=Math.max(c,parseInt(a(this).css(f.placement.from))+parseInt(a(this).outerHeight())+parseInt(f.spacing))}),!0===this.settings.newest_on_top&&(c=this.settings.offset.y),d[this.settings.placement.from]=c+"px",this.settings.placement.align){case"left":case"right":d[this.settings.placement.align]=this.settings.offset.x+"px";break;case"center":d.left=0,d.right=0}this.$ele.css(d).addClass(this.settings.animate.enter),a.each(Array("webkit-","moz-","o-","ms-",""),function(a,c){b.$ele[0].style[c+"AnimationIterationCount"]=1}),a(this.settings.element).append(this.$ele),!0!==this.settings.newest_on_top&&(c=parseInt(c)+parseInt(this.settings.spacing)+this.$ele.outerHeight(),this.reposition(c)),a.isFunction(b.settings.onShow)&&b.settings.onShow.call(this.$ele),this.$ele.one(this.animations.start,function(){e=!0}).one(this.animations.end,function(){b.$ele.removeClass(b.settings.animate.enter),a.isFunction(b.settings.onShown)&&b.settings.onShown.call(this)}),setTimeout(function(){e||a.isFunction(b.settings.onShown)&&b.settings.onShown.call(this)},600)},bind:function(){var b=this;this.$ele.find('[data-notify="dismiss"]').on("click",function(){a.isFunction(b.settings.onDismiss)&&b.settings.onDismiss.call(this),b.close()}),a.isFunction(b.settings.onClick)&&this.$ele.on("click",function(a){a.target!=b.$ele.find('[data-notify="dismiss"]')[0]&&b.settings.onClick.call(this,a)}),this.$ele.mouseover(function(){a(this).data("data-hover","true")}).mouseout(function(){a(this).data("data-hover","false")}),this.$ele.data("data-hover","false"),this.settings.delay>0&&(b.$ele.data("notify-delay",b.settings.delay),this.timerInterval=setInterval(function(){var c=parseInt(b.$ele.data("notify-delay"))-b.settings.timer;if("false"===b.$ele.data("data-hover")&&"pause"===b.settings.mouse_over||"pause"!=b.settings.mouse_over){var d=(b.settings.delay-c)/b.settings.delay*100;b.$ele.data("notify-delay",c),b.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow",d).css("width",d+"%")}c<=-b.settings.timer&&(a.isFunction(b.settings.onTimer)&&b.settings.onTimer.call(b.$ele),b.close())},b.settings.timer))},close:function(){clearInterval(this.timerInterval);var b=this,c=parseInt(this.$ele.css(this.settings.placement.from)),d=!1;this.$ele.attr("data-closing","true").addClass(this.settings.animate.exit),b.reposition(c),a.isFunction(b.settings.onClose)&&b.settings.onClose.call(this.$ele),this.$ele.one(this.animations.start,function(){d=!0}).one(this.animations.end,function(){a(this).remove(),a.isFunction(b.settings.onClosed)&&b.settings.onClosed.call(this)}),setTimeout(function(){d||(b.$ele.remove(),a.isFunction(b.settings.onClosed)&&b.settings.onClosed.call(this))},600)},reposition:function(b){var c=this,d='[data-notify-position="'+this.settings.placement.from+"-"+this.settings.placement.align+'"]:not([data-closing="true"])',e=this.$ele.nextAll(d);!0===this.settings.newest_on_top&&(e=this.$ele.prevAll(d)),e.each(function(){a(this).css(c.settings.placement.from,b),b=parseInt(b)+parseInt(c.settings.spacing)+a(this).outerHeight()})}}),a.notify=function(a,b){return new c(this,a,b).notify},a.notifyDefaults=function(b){return d=a.extend(!0,{},d,b)},a.notifyClose=function(b){void 0===b||"all"===b?a("[data-notify]").find('[data-notify="dismiss"]').trigger("click"):"success"===b||"info"===b||"warning"===b||"danger"===b?a(".alert-"+b+"[data-notify]").find('[data-notify="dismiss"]').trigger("click"):b?a(b+"[data-notify]").find('[data-notify="dismiss"]').trigger("click"):a('[data-notify-position="'+b+'"]').find('[data-notify="dismiss"]').trigger("click")},a.notifyCloseExcept=function(b){"success"===b||"info"===b||"warning"===b||"danger"===b?a("[data-notify]").not(".alert-"+b).find('[data-notify="dismiss"]').trigger("click"):a("[data-notify]").not(b).find('[data-notify="dismiss"]').trigger("click")}});
/*!
 * jQuery blockUI plugin
 * Version 2.70.0-2014.11.23
 * Requires jQuery v1.7 or later
 *
 * Examples at: http://malsup.com/jquery/block/
 * Copyright (c) 2007-2013 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to Amir-Hossein Sobhi for some excellent contributions!
 */

;(function() {
/*jshint eqeqeq:false curly:false latedef:false */
"use strict";

	function setup($) {
		$.fn._fadeIn = $.fn.fadeIn;

		var noOp = $.noop || function() {};

		// this bit is to ensure we don't call setExpression when we shouldn't (with extra muscle to handle
		// confusing userAgent strings on Vista)
		var msie = /MSIE/.test(navigator.userAgent);
		var ie6  = /MSIE 6.0/.test(navigator.userAgent) && ! /MSIE 8.0/.test(navigator.userAgent);
		var mode = document.documentMode || 0;
		var setExpr = $.isFunction( document.createElement('div').style.setExpression );

		// global $ methods for blocking/unblocking the entire page
		$.blockUI   = function(opts) { install(window, opts); };
		$.unblockUI = function(opts) { remove(window, opts); };

		// convenience method for quick growl-like notifications  (http://www.google.com/search?q=growl)
		$.growlUI = function(title, message, timeout, onClose) {
			var $m = $('<div class="growlUI"></div>');
			if (title) $m.append('<h1>'+title+'</h1>');
			if (message) $m.append('<h2>'+message+'</h2>');
			if (timeout === undefined) timeout = 3000;

			// Added by konapun: Set timeout to 30 seconds if this growl is moused over, like normal toast notifications
			var callBlock = function(opts) {
				opts = opts || {};

				$.blockUI({
					message: $m,
					fadeIn : typeof opts.fadeIn  !== 'undefined' ? opts.fadeIn  : 700,
					fadeOut: typeof opts.fadeOut !== 'undefined' ? opts.fadeOut : 1000,
					timeout: typeof opts.timeout !== 'undefined' ? opts.timeout : timeout,
					centerY: false,
					showOverlay: false,
					onUnblock: onClose,
					css: $.blockUI.defaults.growlCSS
				});
			};

			callBlock();
			var nonmousedOpacity = $m.css('opacity');
			$m.mouseover(function() {
				callBlock({
					fadeIn: 0,
					timeout: 30000
				});

				var displayBlock = $('.blockMsg');
				displayBlock.stop(); // cancel fadeout if it has started
				displayBlock.fadeTo(300, 1); // make it easier to read the message by removing transparency
			}).mouseout(function() {
				$('.blockMsg').fadeOut(1000);
			});
			// End konapun additions
		};

		// plugin method for blocking element content
		$.fn.block = function(opts) {
			if ( this[0] === window ) {
				$.blockUI( opts );
				return this;
			}
			var fullOpts = $.extend({}, $.blockUI.defaults, opts || {});
			this.each(function() {
				var $el = $(this);
				if (fullOpts.ignoreIfBlocked && $el.data('blockUI.isBlocked'))
					return;
				$el.unblock({ fadeOut: 0 });
			});

			return this.each(function() {
				if ($.css(this,'position') == 'static') {
					this.style.position = 'relative';
					$(this).data('blockUI.static', true);
				}
				this.style.zoom = 1; // force 'hasLayout' in ie
				install(this, opts);
			});
		};

		// plugin method for unblocking element content
		$.fn.unblock = function(opts) {
			if ( this[0] === window ) {
				$.unblockUI( opts );
				return this;
			}
			return this.each(function() {
				remove(this, opts);
			});
		};

		$.blockUI.version = 2.70; // 2nd generation blocking at no extra cost!

		// override these in your code to change the default behavior and style
		$.blockUI.defaults = {
			// message displayed when blocking (use null for no message)
			message:  '<h1>Please wait...</h1>',

			title: null,		// title string; only used when theme == true
			draggable: true,	// only used when theme == true (requires jquery-ui.js to be loaded)

			theme: false, // set to true to use with jQuery UI themes

			// styles for the message when blocking; if you wish to disable
			// these and use an external stylesheet then do this in your code:
			// $.blockUI.defaults.css = {};
			css: {
				padding:	0,
				margin:		0,
				width:		'30%',
				top:		'40%',
				left:		'35%',
				textAlign:	'center',
				color:		'#000',
				border:		'3px solid #aaa',
				backgroundColor:'#fff',
				cursor:		'wait'
			},

			// minimal style set used when themes are used
			themedCSS: {
				width:	'30%',
				top:	'40%',
				left:	'35%'
			},

			// styles for the overlay
			overlayCSS:  {
				backgroundColor:	'#000',
				opacity:			0.6,
				cursor:				'wait'
			},

			// style to replace wait cursor before unblocking to correct issue
			// of lingering wait cursor
			cursorReset: 'default',

			// styles applied when using $.growlUI
			growlCSS: {
				width:		'350px',
				top:		'10px',
				left:		'',
				right:		'10px',
				border:		'none',
				padding:	'5px',
				opacity:	0.6,
				cursor:		'default',
				color:		'#fff',
				backgroundColor: '#000',
				'-webkit-border-radius':'10px',
				'-moz-border-radius':	'10px',
				'border-radius':		'10px'
			},

			// IE issues: 'about:blank' fails on HTTPS and javascript:false is s-l-o-w
			// (hat tip to Jorge H. N. de Vasconcelos)
			/*jshint scripturl:true */
			iframeSrc: /^https/i.test(window.location.href || '') ? 'javascript:false' : 'about:blank',

			// force usage of iframe in non-IE browsers (handy for blocking applets)
			forceIframe: false,

			// z-index for the blocking overlay
			baseZ: 1000,

			// set these to true to have the message automatically centered
			centerX: true, // <-- only effects element blocking (page block controlled via css above)
			centerY: true,

			// allow body element to be stetched in ie6; this makes blocking look better
			// on "short" pages.  disable if you wish to prevent changes to the body height
			allowBodyStretch: true,

			// enable if you want key and mouse events to be disabled for content that is blocked
			bindEvents: true,

			// be default blockUI will supress tab navigation from leaving blocking content
			// (if bindEvents is true)
			constrainTabKey: true,

			// fadeIn time in millis; set to 0 to disable fadeIn on block
			fadeIn:  200,

			// fadeOut time in millis; set to 0 to disable fadeOut on unblock
			fadeOut:  400,

			// time in millis to wait before auto-unblocking; set to 0 to disable auto-unblock
			timeout: 0,

			// disable if you don't want to show the overlay
			showOverlay: true,

			// if true, focus will be placed in the first available input field when
			// page blocking
			focusInput: true,

            // elements that can receive focus
            focusableElements: ':input:enabled:visible',

			// suppresses the use of overlay styles on FF/Linux (due to performance issues with opacity)
			// no longer needed in 2012
			// applyPlatformOpacityRules: true,

			// callback method invoked when fadeIn has completed and blocking message is visible
			onBlock: null,

			// callback method invoked when unblocking has completed; the callback is
			// passed the element that has been unblocked (which is the window object for page
			// blocks) and the options that were passed to the unblock call:
			//	onUnblock(element, options)
			onUnblock: null,

			// callback method invoked when the overlay area is clicked.
			// setting this will turn the cursor to a pointer, otherwise cursor defined in overlayCss will be used.
			onOverlayClick: null,

			// don't ask; if you really must know: http://groups.google.com/group/jquery-en/browse_thread/thread/36640a8730503595/2f6a79a77a78e493#2f6a79a77a78e493
			quirksmodeOffsetHack: 4,

			// class name of the message block
			blockMsgClass: 'blockMsg',

			// if it is already blocked, then ignore it (don't unblock and reblock)
			ignoreIfBlocked: false
		};

		// private data and functions follow...

		var pageBlock = null;
		var pageBlockEls = [];

		function install(el, opts) {
			var css, themedCSS;
			var full = (el == window);
			var msg = (opts && opts.message !== undefined ? opts.message : undefined);
			opts = $.extend({}, $.blockUI.defaults, opts || {});

			if (opts.ignoreIfBlocked && $(el).data('blockUI.isBlocked'))
				return;

			opts.overlayCSS = $.extend({}, $.blockUI.defaults.overlayCSS, opts.overlayCSS || {});
			css = $.extend({}, $.blockUI.defaults.css, opts.css || {});
			if (opts.onOverlayClick)
				opts.overlayCSS.cursor = 'pointer';

			themedCSS = $.extend({}, $.blockUI.defaults.themedCSS, opts.themedCSS || {});
			msg = msg === undefined ? opts.message : msg;

			// remove the current block (if there is one)
			if (full && pageBlock)
				remove(window, {fadeOut:0});

			// if an existing element is being used as the blocking content then we capture
			// its current place in the DOM (and current display style) so we can restore
			// it when we unblock
			if (msg && typeof msg != 'string' && (msg.parentNode || msg.jquery)) {
				var node = msg.jquery ? msg[0] : msg;
				var data = {};
				$(el).data('blockUI.history', data);
				data.el = node;
				data.parent = node.parentNode;
				data.display = node.style.display;
				data.position = node.style.position;
				if (data.parent)
					data.parent.removeChild(node);
			}

			$(el).data('blockUI.onUnblock', opts.onUnblock);
			var z = opts.baseZ;

			// blockUI uses 3 layers for blocking, for simplicity they are all used on every platform;
			// layer1 is the iframe layer which is used to supress bleed through of underlying content
			// layer2 is the overlay layer which has opacity and a wait cursor (by default)
			// layer3 is the message content that is displayed while blocking
			var lyr1, lyr2, lyr3, s;
			if (msie || opts.forceIframe)
				lyr1 = $('<iframe class="blockUI" style="z-index:'+ (z++) +';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="'+opts.iframeSrc+'"></iframe>');
			else
				lyr1 = $('<div class="blockUI" style="display:none"></div>');

			if (opts.theme)
				lyr2 = $('<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:'+ (z++) +';display:none"></div>');
			else
				lyr2 = $('<div class="blockUI blockOverlay" style="z-index:'+ (z++) +';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>');

			if (opts.theme && full) {
				s = '<div class="blockUI ' + opts.blockMsgClass + ' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:'+(z+10)+';display:none;position:fixed">';
				if ( opts.title ) {
					s += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">'+(opts.title || '&nbsp;')+'</div>';
				}
				s += '<div class="ui-widget-content ui-dialog-content"></div>';
				s += '</div>';
			}
			else if (opts.theme) {
				s = '<div class="blockUI ' + opts.blockMsgClass + ' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:'+(z+10)+';display:none;position:absolute">';
				if ( opts.title ) {
					s += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">'+(opts.title || '&nbsp;')+'</div>';
				}
				s += '<div class="ui-widget-content ui-dialog-content"></div>';
				s += '</div>';
			}
			else if (full) {
				s = '<div class="blockUI ' + opts.blockMsgClass + ' blockPage" style="z-index:'+(z+10)+';display:none;position:fixed"></div>';
			}
			else {
				s = '<div class="blockUI ' + opts.blockMsgClass + ' blockElement" style="z-index:'+(z+10)+';display:none;position:absolute"></div>';
			}
			lyr3 = $(s);

			// if we have a message, style it
			if (msg) {
				if (opts.theme) {
					lyr3.css(themedCSS);
					lyr3.addClass('ui-widget-content');
				}
				else
					lyr3.css(css);
			}

			// style the overlay
			if (!opts.theme /*&& (!opts.applyPlatformOpacityRules)*/)
				lyr2.css(opts.overlayCSS);
			lyr2.css('position', full ? 'fixed' : 'absolute');

			// make iframe layer transparent in IE
			if (msie || opts.forceIframe)
				lyr1.css('opacity',0.0);

			//$([lyr1[0],lyr2[0],lyr3[0]]).appendTo(full ? 'body' : el);
			var layers = [lyr1,lyr2,lyr3], $par = full ? $('body') : $(el);
			$.each(layers, function() {
				this.appendTo($par);
			});

			if (opts.theme && opts.draggable && $.fn.draggable) {
				lyr3.draggable({
					handle: '.ui-dialog-titlebar',
					cancel: 'li'
				});
			}

			// ie7 must use absolute positioning in quirks mode and to account for activex issues (when scrolling)
			var expr = setExpr && (!$.support.boxModel || $('object,embed', full ? null : el).length > 0);
			if (ie6 || expr) {
				// give body 100% height
				if (full && opts.allowBodyStretch && $.support.boxModel)
					$('html,body').css('height','100%');

				// fix ie6 issue when blocked element has a border width
				if ((ie6 || !$.support.boxModel) && !full) {
					var t = sz(el,'borderTopWidth'), l = sz(el,'borderLeftWidth');
					var fixT = t ? '(0 - '+t+')' : 0;
					var fixL = l ? '(0 - '+l+')' : 0;
				}

				// simulate fixed position
				$.each(layers, function(i,o) {
					var s = o[0].style;
					s.position = 'absolute';
					if (i < 2) {
						if (full)
							s.setExpression('height','Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.support.boxModel?0:'+opts.quirksmodeOffsetHack+') + "px"');
						else
							s.setExpression('height','this.parentNode.offsetHeight + "px"');
						if (full)
							s.setExpression('width','jQuery.support.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"');
						else
							s.setExpression('width','this.parentNode.offsetWidth + "px"');
						if (fixL) s.setExpression('left', fixL);
						if (fixT) s.setExpression('top', fixT);
					}
					else if (opts.centerY) {
						if (full) s.setExpression('top','(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
						s.marginTop = 0;
					}
					else if (!opts.centerY && full) {
						var top = (opts.css && opts.css.top) ? parseInt(opts.css.top, 10) : 0;
						var expression = '((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + '+top+') + "px"';
						s.setExpression('top',expression);
					}
				});
			}

			// show the message
			if (msg) {
				if (opts.theme)
					lyr3.find('.ui-widget-content').append(msg);
				else
					lyr3.append(msg);
				if (msg.jquery || msg.nodeType)
					$(msg).show();
			}

			if ((msie || opts.forceIframe) && opts.showOverlay)
				lyr1.show(); // opacity is zero
			if (opts.fadeIn) {
				var cb = opts.onBlock ? opts.onBlock : noOp;
				var cb1 = (opts.showOverlay && !msg) ? cb : noOp;
				var cb2 = msg ? cb : noOp;
				if (opts.showOverlay)
					lyr2._fadeIn(opts.fadeIn, cb1);
				if (msg)
					lyr3._fadeIn(opts.fadeIn, cb2);
			}
			else {
				if (opts.showOverlay)
					lyr2.show();
				if (msg)
					lyr3.show();
				if (opts.onBlock)
					opts.onBlock.bind(lyr3)();
			}

			// bind key and mouse events
			bind(1, el, opts);

			if (full) {
				pageBlock = lyr3[0];
				pageBlockEls = $(opts.focusableElements,pageBlock);
				if (opts.focusInput)
					setTimeout(focus, 20);
			}
			else
				center(lyr3[0], opts.centerX, opts.centerY);

			if (opts.timeout) {
				// auto-unblock
				var to = setTimeout(function() {
					if (full)
						$.unblockUI(opts);
					else
						$(el).unblock(opts);
				}, opts.timeout);
				$(el).data('blockUI.timeout', to);
			}
		}

		// remove the block
		function remove(el, opts) {
			var count;
			var full = (el == window);
			var $el = $(el);
			var data = $el.data('blockUI.history');
			var to = $el.data('blockUI.timeout');
			if (to) {
				clearTimeout(to);
				$el.removeData('blockUI.timeout');
			}
			opts = $.extend({}, $.blockUI.defaults, opts || {});
			bind(0, el, opts); // unbind events

			if (opts.onUnblock === null) {
				opts.onUnblock = $el.data('blockUI.onUnblock');
				$el.removeData('blockUI.onUnblock');
			}

			var els;
			if (full) // crazy selector to handle odd field errors in ie6/7
				els = $('body').children().filter('.blockUI').add('body > .blockUI');
			else
				els = $el.find('>.blockUI');

			// fix cursor issue
			if ( opts.cursorReset ) {
				if ( els.length > 1 )
					els[1].style.cursor = opts.cursorReset;
				if ( els.length > 2 )
					els[2].style.cursor = opts.cursorReset;
			}

			if (full)
				pageBlock = pageBlockEls = null;

			if (opts.fadeOut) {
				count = els.length;
				els.stop().fadeOut(opts.fadeOut, function() {
					if ( --count === 0)
						reset(els,data,opts,el);
				});
			}
			else
				reset(els, data, opts, el);
		}

		// move blocking element back into the DOM where it started
		function reset(els,data,opts,el) {
			var $el = $(el);
			if ( $el.data('blockUI.isBlocked') )
				return;

			els.each(function(i,o) {
				// remove via DOM calls so we don't lose event handlers
				if (this.parentNode)
					this.parentNode.removeChild(this);
			});

			if (data && data.el) {
				data.el.style.display = data.display;
				data.el.style.position = data.position;
				data.el.style.cursor = 'default'; // #59
				if (data.parent)
					data.parent.appendChild(data.el);
				$el.removeData('blockUI.history');
			}

			if ($el.data('blockUI.static')) {
				$el.css('position', 'static'); // #22
			}

			if (typeof opts.onUnblock == 'function')
				opts.onUnblock(el,opts);

			// fix issue in Safari 6 where block artifacts remain until reflow
			var body = $(document.body), w = body.width(), cssW = body[0].style.width;
			body.width(w-1).width(w);
			body[0].style.width = cssW;
		}

		// bind/unbind the handler
		function bind(b, el, opts) {
			var full = el == window, $el = $(el);

			// don't bother unbinding if there is nothing to unbind
			if (!b && (full && !pageBlock || !full && !$el.data('blockUI.isBlocked')))
				return;

			$el.data('blockUI.isBlocked', b);

			// don't bind events when overlay is not in use or if bindEvents is false
			if (!full || !opts.bindEvents || (b && !opts.showOverlay))
				return;

			// bind anchors and inputs for mouse and key events
			var events = 'mousedown mouseup keydown keypress keyup touchstart touchend touchmove';
			if (b)
				$(document).bind(events, opts, handler);
			else
				$(document).unbind(events, handler);

		// former impl...
		//		var $e = $('a,:input');
		//		b ? $e.bind(events, opts, handler) : $e.unbind(events, handler);
		}

		// event handler to suppress keyboard/mouse events when blocking
		function handler(e) {
			// allow tab navigation (conditionally)
			if (e.type === 'keydown' && e.keyCode && e.keyCode == 9) {
				if (pageBlock && e.data.constrainTabKey) {
					var els = pageBlockEls;
					var fwd = !e.shiftKey && e.target === els[els.length-1];
					var back = e.shiftKey && e.target === els[0];
					if (fwd || back) {
						setTimeout(function(){focus(back);},10);
						return false;
					}
				}
			}
			var opts = e.data;
			var target = $(e.target);
			if (target.hasClass('blockOverlay') && opts.onOverlayClick)
				opts.onOverlayClick(e);

			// allow events within the message content
			if (target.parents('div.' + opts.blockMsgClass).length > 0)
				return true;

			// allow events for content that is not being blocked
			return target.parents().children().filter('div.blockUI').length === 0;
		}

		function focus(back) {
			if (!pageBlockEls)
				return;
			var e = pageBlockEls[back===true ? pageBlockEls.length-1 : 0];
			if (e)
				e.focus();
		}

		function center(el, x, y) {
			var p = el.parentNode, s = el.style;
			var l = ((p.offsetWidth - el.offsetWidth)/2) - sz(p,'borderLeftWidth');
			var t = ((p.offsetHeight - el.offsetHeight)/2) - sz(p,'borderTopWidth');
			if (x) s.left = l > 0 ? (l+'px') : '0';
			if (y) s.top  = t > 0 ? (t+'px') : '0';
		}

		function sz(el, p) {
			return parseInt($.css(el,p),10)||0;
		}

	}


	/*global define:true */
	if (typeof define === 'function' && define.amd && define.amd.jQuery) {
		define(['jquery'], setup);
	} else {
		setup(jQuery);
	}

})();

/**
 * Created by valentin.bica on 02.12.2015.
 */
(function(window, $) {
    "use strict";

    /**
     * ------------------- Private variables that can only be accessed from this execution context -------------------
     */
    /**
     * The container id where the modal will pe appended
     * @private
     * @type {String}
     */
    var _containerId = 'pop_space';
    /**
     * Html template for modal
     * @private
     * @type {String}
     */
    var _template = '';
    /**
     * Types of modal that have a special styling. These modals will have a background change
     * @private
     * @type {Array}
     */
    var _modalNotificationType = ['has-error', 'has-warning', 'has-info', 'has-success'];
    /**
     * Savel label text
     * @private
     * @type {String}
     */
    var _saveLabel = (typeof Translator != "undefined" ? Translator.trans('label.save') : "Save");
    /**
     * Cancel label text
     * @private
     * @type {String}
     */
    var _cancelLabel = (typeof Translator != "undefined" ? Translator.trans('label.cancel') : "Cancel");
    /**
     * OK label text
     * @private
     * @type {String}
     */
    var _okLabel = (typeof Translator != "undefined" ? Translator.trans('label.ok') : "OK");
    /**
     * Allow label text
     * @private
     * @type {String}
     */
    var _allowLabel = (typeof Translator != "undefined" ? Translator.trans('label.allow') : "Allow");
    /**
     * Deny label text
     * @private
     * @type {String}
     */
    var _denyLabel = (typeof Translator != "undefined" ? Translator.trans('label.deny') : "Deny");
    /**
     * Show modal loader variable
     * @private
     * @type {Boolean}
     */
    var _loaderIsVisible = false;

    /**
     * ------------------------- Create private functions and bind the behaviour to PhotonModal -------------------------
     * Create modal hide and show callbacks
     */
    function buildModalEventsCallbacks() {
        setHideCallback.call(this, this.defaults.hideCallback || function(){});
        setShowCallback.call(this, this.defaults.showCallback || function(){});
    }
    /**
     * This is a container used for setting custom events on modals
     */
    function createCustomEvents() {

        var $this = this;
        /**
         * When user inserts content into modal through ajax the modal should show NOT when .show() function is called BUT
         * when the content is received so a special event is needed
         */
        $(document).on('showModalAfterDomRenderedEvent', "#" + $this.defaults.id, function () {
            $this._isVisible ? $("#" + $this.defaults.id).modal('show') : '';
        });
        /**
         * Event for submitting the form
         * @event click
         */
        $(document).on('click', "." + $this.defaults.id + 'btnSubmit', function () {
            saveFormActionUsingAjax.call($this);
        });
        /**
         * Show modal loader
         * @event showModalLoader
         */
        $(document).on('showModalLoader', "#" + $this.defaults.id, function () {
            _loaderIsVisible = true;
            var modalBody = $("#" + $this.defaults.id).find('.modal-body');
            $(modalBody).addClass('pad-top-40').blockControl();
        });
        /**
         * Hide modal loader
         * @event hideModalLoader
         */
        $(document).on('hideModalLoader', "#" + $this.defaults.id, function () {
            _loaderIsVisible = false;
            var modalBody = $("#" + $this.defaults.id).find('.modal-body');
            $(modalBody).removeClass('pad-top-40').unblockControl();
        });
    }
    /**
     * Set callback for show and shown event
     * @param showCallback
     */
    function setShowCallback (showCallback) {
        var $this = this;
        $(document).on("shown.bs.modal", "#" + this.defaults.id, function (e) {
            showCallback(e);
           _loaderIsVisible ? $("#" + $this.defaults.id).trigger('showModalLoader') : '';
        });
    }
    /**
     * Set callback for hidden event
     * @param hiddenCallback
     */
    function setHideCallback (hiddenCallback) {
        var $this = this;
        $(document).on("hidden.bs.modal", "#" + this.defaults.id, function (e) {
            $this._isVisible = false;
            window.alertModalDisplayed = false;
            hiddenCallback(e);
        });
    }
    /**
     * Create modal and insert content from request using ajax
     */
    function createModalUsingAjax () {

        var $this = this;
        buildStaticModal.call(this);
        $this.setModalLoader(true);

        $.ajax($this.defaults.ajaxModalParams).done(function (data) {
            $this.defaults.content = data;
            $this.setModalContent(data);
            $("#" + $this.defaults.id).trigger('hideModalLoader');
            $this.defaults.ajaxDoneCallback(data);
        }).fail(function (data) {
            $this.defaults.ajaxFailCallback(data);
        }).always(function() {

        });
    }
    /**
     * Save form function
     */
    function saveFormActionUsingAjax () {

        var $this = this;
        /**
         * Append options to ajax request or override default ones for creating the ajax request
         */
        $this.defaults.ajaxFormSubmitParams.data = new FormData($("#" + $this.defaults.id).find('form')[0]);
        $this.defaults.ajaxFormSubmitParams.processData =  false;
        $this.defaults.ajaxFormSubmitParams.cache = false;
        $this.defaults.ajaxFormSubmitParams.contentType = false;

        var submitBtn = $("." + $this.defaults.id + 'btnSubmit');
        var modalBody = $("#" + $this.defaults.id).find('.modal-body');

        $(submitBtn).blockControl();
        $("#" + $this.defaults.id).trigger('showModalLoader');

        $.ajax($this.defaults.ajaxFormSubmitParams).done(function (data) {
            /**
             * Custom callback
             */
            $this.defaults.ajaxSubmitDoneCallback(data);
            $this.setModalContent(data);
            $("#" + $this.defaults.id).trigger('hideModalLoader');
        }).fail(function (data) {
            /**
             * Custom callback
             */
            $this.defaults.ajaxSubmitFailCallback(data);
        }).always(function() {
            $(submitBtn).unblockControl();
            $this.initPlugins(modalBody);
        });

    }
    /**
     * Create html for modal
     */
    function buildStaticModal() {
        /**
         * Buttons html variable
         * @type {string}
         */
        var buttonsHtml = '';
        /**
         * Buttons in modal. Override them if user sent them in constructor
         */
        var buttons = this.defaults.buttons || this.geFormStylingJson().buttons;
        /**
         * Type of modal
         * @type {string|string|string|string|string}
         */
        var classOfModal = this.geFormStylingJson().class;

        /**
         * Create buttons html having the following cases:
         * - if the button json have the key 'formSubmitter' on true than a special class is appended and an event for ajax submit is created for that class
         * - the following infos are appended also: button class, button icon, button label
         */
        for (var button in buttons) {
            buttonsHtml +=
                '<button class="btn ' + (buttons[button].formSubmitter ? this.defaults.id + 'btnSubmit ' : '')
                + buttons[button].class + '"' + (button == 'cancel' || buttons[button].closeModal ? 'data-dismiss="modal">' : '>')
                + '<span>' + (buttons[button].icon != undefined ? '<i class="' + buttons[button].icon + '"></i> ' : '') + buttons[button].label + '</span></button>';
        }

        /**
         * Close modal on click outside
         * @type {string}
         */
        var closeOnClickOutsideAttr = '';
        if(this.defaults.closeOnClickOutside == false) {
            closeOnClickOutsideAttr = ' data-backdrop="static" data-keyboard="false"';
        }
        /**
         * Close modal on click outside
         * @type {string}
         */
        var closeButtonHtml = '';
        if(this.defaults.showCloseButton == true) {
            closeButtonHtml = '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>';
        }

        /**
         * Footer text
         * @type {string}
         */
        var footerHtml = '';
        if (this.defaults.footerText != '' || buttonsHtml != '') {
            footerHtml = '<div class="modal-footer">' +
                '<div class="pull-left">' +
                this.defaults.footerText +
                '</div>' +
                '<div class="pull-right panel-controls">' +
                buttonsHtml +
                '</div>' +
                '</div>' + '<div class="pull-left"></div>';
        }
        /**
         * Create the html for the page and append it into container that has a containerId
         */
        _template =
            '<div class="modal fade ' + this.defaults.classes + '" id="' + this.defaults.id + '" tabindex="-1" role="dialog" aria-labelledby="' +  this.defaults.id + 'Label' + '"' + closeOnClickOutsideAttr + '>' +
            '<div class="modal-dialog ' + (_modalNotificationType.indexOf(this.geFormStylingJson().class) !== -1 ? 'modal-feedback ' + (classOfModal ? ' ' + classOfModal : '') + ' ' : '') + this.getSizeCssClass() + '" role="document">' +
            '<div class="modal-content">' +
            '<div class="modal-header">' +
            closeButtonHtml +
            '<h4 class="modal-title" id="' + this.defaults.id + 'Label' + '">' + this.defaults.title + '</h4>' +
            '</div>' +
            '<div class="modal-body">' +
            this.defaults.content +
            '</div>' +
            footerHtml +
            '</div>' +
            '</div>' +
            '</div>';

        /**
         * If div already exists you should replace only the html and NOT append it again
         */
        if(this.defaults.recreateOnShow) {
            if($('#' + this.defaults.id).length) {
                $('#' + this.defaults.id).replaceWith(_template);
            }
            else {
                $('#' + _containerId).append(_template);
            }
        } else {
            if(!$('#' + this.defaults.id).length) {
                $('#' + _containerId).append(_template);
            }
        }
        $("#" + this.defaults.id).trigger('showModalAfterDomRenderedEvent');
    }
    /**
     * Create html for alert modal
     */
    function buildAlertModal() {
        /**
         * Display background overlay
         * @type {string}
         */
        var backdrop = (this.defaults.showBackgroundOverlay) ? 'static' : 'false';

        /**
         * Title
         * @type {string}
         */
        var titleClass = ' ' + this.getFormStylingJson().titleClass || '';

        /**
         * Title html variable
         * @type {string}
         */
        var titleHtml = '';
        if (this.defaults.title != '') {
            titleHtml = '<h4 class="modal-title alert-modal-title' + titleClass + '" id="' + this.defaults.id + 'Label' + '">' + this.defaults.title + '</h4>';
        }

        /**
         * Buttons in modal. Override them if user sent them in constructor
         */
        var buttons = this.defaults.buttons || this.getFormStylingJson().buttons;

        /**
         * Buttons html variable
         * @type {string}
         */
        var buttonsHtml = '';
        for (var button in buttons) {
            buttonsHtml +=
                '<button class="btn ' + buttons[button].class + '" data-dismiss="modal">' +
                '<span>' + (buttons[button].icon != undefined ? '<i class="' + buttons[button].icon + '"></i> ' : '') + buttons[button].label + '</span></button>';
        }

        /**
         * Footer text
         * @type {string}
         */
        var footerHtml = '';
        if (buttonsHtml != '') {
            footerHtml = '<div class="clearfix">' +
                '<div class="pull-right panel-controls">' +
                buttonsHtml +
                '</div>' +
                '</div>';
        }

        /**
         * Create the html for the page and append it into container that has a containerId
         */
        _template =
            '<div class="modal modal-alert fade" id="' + this.defaults.id + '" tabindex="-1" role="dialog" aria-labelledby="' +  this.defaults.id + 'Label' + '" data-backdrop="' + backdrop + '" data-keyboard="false">' +
            '<div class="modal-dialog ' + this.getSizeCssClass() + '" role="document">' +
            '<div class="modal-content">' +
            '<div class="modal-body">' +
            titleHtml +
            '<div class="alert-modal-content">' +
            this.defaults.content +
            '</div>' +
            footerHtml +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        if ($('#' + this.defaults.id).length) {
            $('#' + this.defaults.id).replaceWith(_template);
        } else {
            $('#' + _containerId).append(_template);
        }

        $("#" + this.defaults.id).trigger('showModalAfterDomRenderedEvent');
    }

    /**
     * @param options {Object} Json with options for modal
     * @constructor
     */
    var PhotonModal = function (options) {
        /**
         * Options used on class instantiation that will override default ones
         */
        /**
         * Default class options
         * @type {Object}
         */
        this.defaults = {
            /**
             * How the modal will be rendered. It accepts the following parameters: small, large, default size
             * @public
             * @type {String}
             */
             size: 'default',
            /**
             * Id of modal
             * @public
             * @type {String}
             */
            classes: '',
            /**
             * Classes for modal
             * @public
             * @type {String}
             */
            id: '',
            /**
             * Recreate modal on show
             * @public
             * @type {Boolean}
             */
            recreateOnShow: true,
            /**
             * Use ajax in modal
             * @public
             * @type {Boolean}
             */
            useAjax: false,
            /**
             *  Buttons for modal
             *  @public
             *  @type {Object}
             */
            buttons: '',
            /**
             * The content of the modal
             * @public
             * @type {String}
             */
            content: '',
            /**
             * Title of modal
             * @public
             * @type {String}
             */
            title: '',
            /**
             * Type of modal
             * @private
             * @type {String}
             */
            type: 'default',
            /**
             * Modal parameters for ajax call
             * @public
             * @type {Object}
             */
            ajaxModalParams: {
                method: 'POST',
                url: ''
            },
            /**
             * Modal save parameters for form submit
             * @public
             * @type {Object}
             */
            ajaxFormSubmitParams: {
                method: 'POST',
                url: ''
            },
            /**
             * Show modal close button
             * @public
             * @type {boolean}
             */
            showCloseButton: true,
            /**
             * Show modal close button
             * @public
             * @type {String}
             */
            footerText: '',
            /**
             * Close modal on click outside
             * @public
             * @type {boolean}
             */
            closeOnClickOutside: true,
            /**
             * Ajax done callback
             * @public
             * @type {function}
             */
            ajaxDoneCallback: function (data) {},
            /**
             * Ajax fail callback
             * @param data
             * @function
             */
            ajaxFailCallback: function (data) {},
            /**
             * Ajax form done submit callback
             * @param data
             * @function
             */
            ajaxSubmitDoneCallback: function (data) {},
            /**
             * Ajax form fail submit callback
             * @param data
             * @function
             */
            ajaxSubmitFailCallback: function (data) {},
            /**
             * Modal hide callback
             * @param data
             * @function
             */
            hideCallback: function (data) {},
            /**
             * Modal show callback
             * @param data
             * @function
             */
            showCallback: function (data) {}
        };

        /**
         * Test to see if modal is visible
         * @private
         * @type {Boolean}
         */
        this._isVisible = false;

        /**
         * Extend default options of class with the ones received from class instantiation
         */
        this.options = options;
        for(var option in options) {
            this.defaults[option] = options[option];
        }
        /**
         * Set modal callbacks for both hide and show events
         */
        buildModalEventsCallbacks.call(this);
        /**
         * Create custom events for modal
         */
        createCustomEvents.call(this);
    };


    /**
     * Photon prototype
     */
    PhotonModal.prototype = {

        //------------------------------------ Getters ------------------------------------
        /**
         * Get message of modal
         * @returns {*}
         */
        getContent: function () {
            return this.defaults.content;
        },
        /**
         * Get css class for modal based on the size passed as parameter by user
         * @returns {*}
         */
        getSizeCssClass: function () {
            switch (this.defaults.size) {
                case 'small':
                    return 'modal-sm';
                case 'large':
                    return 'modal-lg';
                default:
                    return '';
            }
        },
        /**
         * Get css class for modal based on the type passed as parameter by user
         */
        geFormStylingJson: function () {
            switch (this.defaults.type) {
                case 'form':
                    return {
                        type: 'form',
                        class: '',
                        buttons: {
                            save: {
                                label: _saveLabel,
                                class: 'btn-success',
                                icon: 'fa fa-check',
                                formSubmitter: true
                            },
                            cancel: {
                                label: _cancelLabel,
                                class: 'btn-default',
                                icon: 'fa fa-times'
                            }
                        }
                    };
                case 'preview':
                    return {
                        type: 'preview',
                        class: '',
                        buttons: {
                            cancel: {
                                label: _cancelLabel,
                                class: 'btn-link',
                                icon: 'fa fa-times'
                            }
                        }
                    };
                default:
                    return {
                        type: 'default',
                        class: ''
                    };
            }
        },
        //------------------------------------ End of getters ------------------------------------

        //------------------------------------ Setters -------------------------------------------
        /**
         * Set modal loader variable
         * @param modalLoader
         */
        setModalLoader: function (modalLoader) {
            _loaderIsVisible = modalLoader;
        },
        /**
         * Change modal content dynamically
         * @param content
         */
        setModalContent: function (content) {
            this.defaults.content = content;
            $("#" + this.defaults.id).find('.modal-body').html(content);
        },

        //------------------------------------ End of Setters -------------------------------------------
        /**
         * Use init function from layout.html.twig for plugins instantiation
         */
        initPlugins: function () {
            window.initPlugins($("#" + this.defaults.id).find('.modal-body'));
        },
        /**
         * Show modal
         */
        show: function () {
            if (!this._isVisible) {
                this._isVisible = true;
                /**
                 * Build modal through ajax or with static content
                 */
                this.defaults.useAjax ? createModalUsingAjax.call(this) : buildStaticModal.call(this);
            }
        },
        hide: function () {
            this._isVisible = false;
            /**
             * Hide modal
             */
            $("#" + this.defaults.id).modal('hide');
        }
    };

    /**
     * @param options {Object} Json with options for modal
     * @constructor
     */
    var AlertModal = function (options) {
        /**
         * Options used on class instantiation that will override default ones
         */
        /**
         * Default class options
         * @type {Object}
         */
        this.defaults = {
            /**
             * How the modal will be rendered. It accepts the following parameters: small, large, default size
             * @public
             * @type {String}
             */
            size: 'default',
            /**
             * Id of modal
             * @public
             * @type {String}
             */
            id: '',
            /**
             *  Buttons for modal
             *  @public
             *  @type {Object}
             */
            buttons: '',
            /**
             * The content of the modal
             * @public
             * @type {String}
             */
            content: '',
            /**
             * Title of modal
             * @public
             * @type {String}
             */
            title: '',
            /**
             * Type of modal
             * @private
             * @type {String}
             */
            type: 'confirmation',
            /**
             * Show background overlay
             * @public
             * @type {boolean}
             */
            showBackgroundOverlay: true,
            /**
             * Modal hide callback
             * @param data
             * @function
             */
            hideCallback: function (data) {},
            /**
             * Modal show callback
             * @param data
             * @function
             */
            showCallback: function (data) {}
        };

        /**
         * Test to see if modal is visible
         * @private
         * @type {Boolean}
         */
        this._isVisible = false;

        /**
         * Extend default options of class with the ones received from class instantiation
         */
        this.options = options;
        for(var option in options) {
            this.defaults[option] = options[option];
        }
        /**
         * Set modal callbacks for both hide and show events
         */
        buildModalEventsCallbacks.call(this);
        /**
         * Create custom events for modal
         */
        createCustomEvents.call(this);
    };

    AlertModal.prototype = {

        //------------------------------------ Getters ------------------------------------
        /**
         * Get message of modal
         * @returns {*}
         */
        getContent: function () {
            return this.defaults.content;
        },
        /**
         * Get css class for modal based on the size passed as parameter by user
         * @returns {*}
         */
        getSizeCssClass: function () {
            switch (this.defaults.size) {
                case 'small':
                    return 'modal-sm';
                case 'large':
                    return 'modal-lg';
                default:
                    return '';
            }
        },
        /**
         * Get css class for modal based on the type passed as parameter by user
         */
        getFormStylingJson: function () {
            switch (this.defaults.type) {
                case 'error':
                    return {
                        titleClass: 'text-danger',
                        buttons: {
                            ok: {
                                label: _okLabel,
                                class: 'btn-default error-alert-modal-ok'
                            }
                        }
                    };
                case 'confirmation':
                    return {
                        titleClass: '',
                        buttons: {
                            allow: {
                                label: _allowLabel,
                                class: 'btn-success confirmation-alert-modal-allow'
                            },
                            deny: {
                                label: _denyLabel,
                                class: 'btn-default confirmation-alert-modal-deny'
                            }
                        }
                    };
                default:
                    return {
                        type: 'default',
                        class: ''
                    };
            }
        },
        //------------------------------------ End of getters ------------------------------------

        //------------------------------------ Setters -------------------------------------------
        /**
         * Set modal loader variable
         * @param modalLoader
         */
        setModalLoader: function (modalLoader) {
            _loaderIsVisible = modalLoader;
        },
        /**
         * Change modal content dynamically
         * @param content
         */
        setModalContent: function (content) {
            this.defaults.content = content;
            $("#" + this.defaults.id).find('.modal-body').html(content);
        },

        //------------------------------------ End of Setters -------------------------------------------
        /**
         * Use init function from layout.html.twig for plugins instantiation
         */
        initPlugins: function () {
            window.initPlugins($("#" + this.defaults.id).find('.modal-body'));
        },
        /**
         * Show modal
         */
        show: function () {
            if (!this._isVisible) {
                this._isVisible = true;
                window.alertModalDisplayed = true;
                /**
                 * Build alert modal through ajax or with static content
                 */
                buildAlertModal.call(this);
            }
        },
        hide: function () {
            this._isVisible = false;
            window.alertModalDisplayed = false;
            /**
             * Hide modal
             */
            $("#" + this.defaults.id).modal('hide');
        }
    };

    window.PhotonModal = PhotonModal;
    window.AlertModal = AlertModal;
    window.alertModalDisplayed = false;
    window.errorAlertModal = function (content, title, showBackgroundOverlay, size) {
        if (window.alertModalDisplayed === true) {
            return false;
        }

        $('#error_alert_modal').remove();

        var alertTitle = title || '';
        var alertContent = content || '';
        var alertShowBackgroundOverlay = (showBackgroundOverlay === false) ? false : true;
        var alertSize = size || 'default';

        var alertModal = new AlertModal({
            id: 'error_alert_modal',
            content: alertContent,
            title: alertTitle,
            type: 'error',
            showBackgroundOverlay: alertShowBackgroundOverlay,
            size: alertSize
        });
        alertModal.show();
    };
    window.confirmationAlertModal = function (content, title, showBackgroundOverlay, size) {
        if (window.alertModalDisplayed === true) {
            return false;
        }

        $('#confirmation_alert_modal').remove();

        var alertTitle = title || '';
        var alertContent = content || '';
        var alertShowBackgroundOverlay = (showBackgroundOverlay === false) ? false : true;
        var alertSize = size || 'default';

        var alertModal = new AlertModal({
            id: 'confirmation_alert_modal',
            content: alertContent,
            title: alertTitle,
            showBackgroundOverlay: alertShowBackgroundOverlay,
            size: alertSize
        });
        alertModal.show();
    };

}(window, jQuery));
/*
 By Osvaldas Valutis, www.osvaldas.info
 Available for use under the MIT License
 */

'use strict';
;( function ( document, window, index )
{
    var inputs = document.querySelectorAll( '.form-input-control' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.parentElement,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function(e) {
            var fileName = '';
            if( this.files && this.files.length > 1 ) {
                fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\').pop();
            }
            if( fileName ) {
                label.querySelector('span').innerHTML = fileName;
            }
        });

        // Firefox bug fix
        input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
        input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    });
}( document, window, 0 ));
+function ($, document) {
    "use strict";

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });
    });

    $(document.body).on('shown.bs.tooltip', '[data-toggle="tooltip"]', function (e) {
        var $target = $(e.target);
        var tooltipType = $target.data('type');
        var tooltipContainer = $(this).attr('aria-describedby');
        $('#' + tooltipContainer).addClass('tooltip-' + tooltipType);
    })
}(jQuery, document);
+function ($, document) {
    "use strict";

    $(function () {
        $('[data-toggle="popover"]').popover({
            container: 'body'
        });
    });

    $(document.body).on('shown.bs.popover', '[data-toggle="popover"]', function (e) {
        var $target = $(e.target);
        var popoverType = $target.data('type');
        var popoverContainer = $(this).attr('aria-describedby');
        $('#' + popoverContainer).addClass('popover-' + popoverType);
    })
}(jQuery, document);
/* Function for displaying notifications */
/* Ex. usage: addNotifications("This is an informational message", "info") */
(function ($) {
    $.extend(Notify.prototype, {
        styleDismiss: function () {
            this.$ele.find('[data-notify="dismiss"]').css({
                right: 0,
                top: 0,
                zIndex: this.settings.z_index + 2
            });
        }
    });
});
function addNotification(message, type){
    const SCREEN_XS_MAX = 767;
    const DEFAULT_OFFSET = 100;
    var BOTTOM_LEFT_OFFSET = 20;
    try {
        BOTTOM_LEFT_OFFSET = parseInt($('.page-content').eq(0).css('padding-left'));
    } catch(err) {}

    var highestZIndex = 1;
    if ($('.modal').length) {
        var highestZIndex = findHighestZIndex('div');
    }

    var notificationClass = 'notification-default';
    if (type === 'black') {
        notificationClass = 'notification-bottom-left';
    }

    var fontawesomeIcons = {
        "info": "fa-info-circle",
        "info-full-color": "fa-info-circle",
        "success": "fa-check-circle",
        "success-full-color": "fa-check-circle",
        "warning": "fa-warning",
        "warning-full-color": "fa-warning",
        "danger": "fa-exclamation-circle",
        "danger-full-color": "fa-exclamation-circle"
    };

    if (message.indexOf('fa fa') == -1) {
        var dummyMessage = message;
        message = '<i class="fa ' + fontawesomeIcons[type] + '"></i>' + dummyMessage;
    }

    var defaultOptions = {
        type: type,
        template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0} ' + notificationClass + '" role="alert" style="z-index: ' + highestZIndex + '"><button type="button" aria-hidden="true" class="close" data-notify="dismiss"><i class="fa fa-remove"></i></button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>',
        placement: {
            from: 'top',
            align: 'center'
        },
        offset: {
            y: DEFAULT_OFFSET
        },
        z_index: highestZIndex,
        animate: {
            enter: 'animations scaleIn',
            exit: 'animations scaleOut'
        }
    };

    if (type === 'black') {
        defaultOptions.placement = {
            from: 'bottom',
            align: 'left'
        };

        defaultOptions.offset.y = ($('.footer-content').eq(0).outerHeight() + BOTTOM_LEFT_OFFSET);

        if (window.innerWidth > SCREEN_XS_MAX) {
            defaultOptions.offset.x = $('#sidebar').outerWidth() + BOTTOM_LEFT_OFFSET;
        } else {
            defaultOptions.offset.x = BOTTOM_LEFT_OFFSET;
        }
    }

    var notify = $.notify(message, defaultOptions);
}
function realignNotifications() {
    const SCREEN_XS_MAX = 767;
    var BOTTOM_LEFT_OFFSET = 20;
    try {
        BOTTOM_LEFT_OFFSET = parseInt($('.page-content').eq(0).css('padding-left'));
    } catch(err) {}

    if (window.innerWidth > SCREEN_XS_MAX) {
        $('.notification-bottom-left').css({
            'left': ($('#sidebar').outerWidth() + BOTTOM_LEFT_OFFSET)
        });
    } else {
        $('.notification-bottom-left').css({
            'left': BOTTOM_LEFT_OFFSET
        });
    }
}

function hideBodyOverlayer() {
    $('.modal-backdrop').addClass('hidden');
}

function activateDraggableForModal($modal) {
    $modal.find('.modal-content:first').draggable({
        containment: 'body',
        cancel : '.modal-body'
    });
}

/* Function for finding the highest z-index */

function findHighestZIndex(elem) {
    var elems = document.getElementsByTagName(elem);
    var highest = 0;
    for (var i = 0; i < elems.length; i++) {
        var zindex = document.defaultView.getComputedStyle(elems[i], null).getPropertyValue("z-index");
        if ((zindex > highest) && (zindex != 'auto')) {
            highest = zindex;
        }
    }
    return highest;
}

/* Function for enabling/disabling a blocking overlay */

function showThisLoader(type, colorClass) {
    type = typeof type !== 'undefined' ? type : "dots";
    colorClass = typeof colorClass !== 'undefined' ? colorClass : 'dark';

    var loader = {
        dots :  '<div class="loader-dots '+ colorClass +'">' +
        '<div class="sk-bounce1"></div>' +
        '<div class="sk-bounce2"></div>' +
        '<div class="sk-bounce3"></div>' +
        '</div>',
        cubeGrid :  '<div class="loader-cube-grid '+ colorClass +'">' +
        '<div class="sk-cube sk-cube1"></div>' +
        '<div class="sk-cube sk-cube2"></div>' +
        '<div class="sk-cube sk-cube3"></div>' +
        '<div class="sk-cube sk-cube4"></div>' +
        '<div class="sk-cube sk-cube5"></div>' +
        '<div class="sk-cube sk-cube6"></div>' +
        '<div class="sk-cube sk-cube7"></div>' +
        '<div class="sk-cube sk-cube8"></div>' +
        '<div class="sk-cube sk-cube9"></div>' +
        '</div>',
        fadingCircle:   '<div class="loader-fading-circle '+ colorClass +'">' +
        '<div class="sk-circle1 sk-circle"></div>' +
        '<div class="sk-circle2 sk-circle"></div>' +
        '<div class="sk-circle3 sk-circle"></div>' +
        '<div class="sk-circle4 sk-circle"></div>' +
        '<div class="sk-circle5 sk-circle"></div>' +
        '<div class="sk-circle6 sk-circle"></div>' +
        '<div class="sk-circle7 sk-circle"></div>' +
        '<div class="sk-circle8 sk-circle"></div>' +
        '<div class="sk-circle9 sk-circle"></div>' +
        '<div class="sk-circle10 sk-circle"></div>' +
        '<div class="sk-circle11 sk-circle"></div>' +
        '<div class="sk-circle12 sk-circle"></div>' +
        '</div>'
    };

    if(loader[type] == undefined) {
        return type;
    } else {
        return loader[type];
    }

};

(function ( $ ) {
    $.fn.blockControl = function(options) {
        var pageOverlay = false;
        var settings = $.extend({
            // These are the defaults.
            loadingIconType: "dots",
            iconColorClass: "dark",
            overlayColor: "#fff",
            target: this,
            blurElement: null
        }, options);

        if(settings.blurElement){
            $(settings.blurElement).blur();
        }


        if(settings.target.selector == "body" || settings.target.selector == "html") {
            var pageOverlay = true;
        }

        function conditionalMessage(settings, pageOverlay){
            if (pageOverlay) {
                return '<div class="lock-center fixed">'+ showThisLoader(settings.loadingIconType, settings.iconColorClass) +'</div>'
            } else {
                return showThisLoader(settings.loadingIconType, settings.iconColorClass)
            }
        }

        $(settings.target).block({
            message: conditionalMessage(settings, pageOverlay),
            css: {
                border: 'none',
                padding: '0',
                backgroundColor: 'transparent',
                '-webkit-border-radius': '0',
                '-moz-border-radius': '0',
                width: "auto"

            },
            overlayCSS:  {
                backgroundColor: settings.overlayColor,
                opacity:         0.6,
                cursor:          'wait'
            },
            baseZ: 2000
        });
    };
}( jQuery ));

(function ( $ ) {
    $.fn.unblockControl = function(options) {
        $(this).unblock();

        var settings = $.extend({
            focusElement: null
        }, options);

        if(settings.focusElement){
            $(settings.focusElement).focus();
        }
    };

}( jQuery ));

(function ( $ ) {

    var browser = window.navigator.appName;
    var browserVersion = navigator.appVersion;
    var browserEngine = navigator.product;
    var platform = navigator.platform;

    console.log("Browser: " + browser + " | Version: " + browserVersion + " | Product: " + browserEngine + " | OS: " + platform);

}( jQuery ));

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function addMoreActions(context) {
    $(context).find('.more-actions').each(function() {
        var drop = new Drop({
            target: $(this)[0],
            classes: 'drop-actions',
            content:    $(this).attr('data-content'),
            position: 'bottom right',
            openOn: 'click',
            constrainToWindow: true,
            constrainToScrollParent: false,
            tetherOptions: {
                offset: '-5px 0'
            },
            remove: true
        });
    });
}

function correctSummerNoteFullscreenDimensions($button) {
    var $noteEditor;
    if ($button) {
        $noteEditor = $button.parents('.note-editor.note-frame');
    } else {
        $noteEditor = $('.note-editor.note-frame').eq(0);
    }
    
    if ($noteEditor.hasClass('fullscreen')) {
        setTimeout(function () {
            $noteEditor.css({
                left: $('#sidebar').outerWidth(),
                top: $('.navbar.navbar-fixed-top').outerHeight(),
                width: ($(window).width() - $('#sidebar').outerWidth()),
                height: ($(window).height() - $('.navbar.navbar-fixed-top').outerHeight())
            });
            $noteEditor.find('textarea.note-codable, .note-editable').css({
                height: ($(window).height() - $('.navbar.navbar-fixed-top').outerHeight() - $noteEditor.find('.note-toolbar').outerHeight())
            })
        }, 0);
    } else {
        $noteEditor.css({
            left: '',
            top: '',
            width: '',
            height: ''
        });
    }
}

function displayFormFieldsErrors (form, fields) {
    var $form = $(form);
    var formName = $form.attr('name');
    $form.find('.has-error .help-block').remove();
    $form.find('.has-error').removeClass('has-error');

    for (var fieldIndex in fields) {
        var fieldData = fields[fieldIndex];
        var fieldName = fieldData.field.name || '';

        if (fieldName) {
            var messageTemplate = fieldData.message_template || '';
            var parameters = fieldData.parameters || {};
            var errorMessage = fieldData.message || '';

            if (messageTemplate && Translator && typeof Translator.trans === 'function') {
                var translatedErrorMessage = Translator.trans(messageTemplate, parameters);

                if (translatedErrorMessage !== messageTemplate) {
                    errorMessage = translatedErrorMessage;
                }
            }

            if ($form.find('[name="' + fieldName + '"]').length === 0) {
                var fieldNameParts = fieldName.split('.');
                var childFormNameParts = fieldNameParts[0].split('[');
                var childFormName = childFormNameParts[0] || '';
                var childFormIndex = childFormNameParts[1].replace(']', '') || '';
                var childFormFieldName = fieldNameParts[1] || '';

                fieldName = formName + '[' + childFormName + '][' + childFormIndex + '][' + childFormFieldName + ']';
            }

            $formGroup = $form.find('[name="' + fieldName + '"]').parents('.form-group');
            $formGroup.addClass('has-error');
            $formGroup.append('<div class="help-block">' + errorMessage + '</div>')
        }
    }
}

$(window).on('resize', function () {
    realignNotifications();
    correctSummerNoteFullscreenDimensions();
});

$(function() {
    $('body').on('click', '.note-editor.note-frame .note-toolbar .note-btn.btn-fullscreen, .note-editor.note-frame .note-toolbar .note-btn.btn-codeview', function () {
        correctSummerNoteFullscreenDimensions($(this));
    })
});

const colorScheme = {
    'brand_primary' : '#005eb7',
    'brand_info' : '#2790f3',
    'brand_success' : '#38833a',
    'brand_warning' : '#f4b350',
    'brand_danger' : '#e1302b',
    'black' : '#000000',
    'gray_76' : '#c3c3c3',
    'gray_80' : '#cccccc',
    'gray_87' : '#dedede',
    'gray_93' : '#eeeeee',
    'gray_96' : '#f6f6f6',
    'gray_98' : '#fafafa',
    'white' : '#ffffff',
}

$(function () {
    var elm = document.body;
    var lastHeight = elm.clientHeight;

    updateHeight(elm, lastHeight);
});

function updateHeight (elm, lastHeight) {
    var newHeight = elm.clientHeight;
    if (lastHeight != newHeight) {
        $(document.body).trigger('bodyHeightChanged');
    }

    lastHeight = newHeight;

    if (elm.onElementHeightChangeTimer) {
        clearTimeout(elm.onElementHeightChangeTimer);
    }

    elm.onElementHeightChangeTimer = setTimeout(function () {
        updateHeight(elm, lastHeight);
    }, 0);
}

