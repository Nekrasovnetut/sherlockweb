/*!
 * Polyfill.js - v0.1.0
 *
 * Copyright (c) 2013 Philip Walton <http://philipwalton.com>
 * Released under the MIT license
 *
 * Date: 2013-05-12
 */
(function(e,t){"use strict";function n(e){return e.replace(/^\s+|\s+$/g,"")}function r(e,t){var n,r=0;if(!e||!t)return!1;for(;n=t[r++];)if(e===n)return!0;return!1}function i(e){return u.test(e)}function s(e){var t,n=0;for(this._rules=[];t=e[n++];)this._rules.push(new o(t))}function o(e){this._rule=e}function a(e){return this instanceof a?(this._options=e,e.keywords||(this._options={keywords:e}),this._promise=[],this._getStylesheets(),this._downloadStylesheets(),this._parseStylesheets(),this._filterCSSByKeywords(),this._buildMediaQueryMap(),this._reportInitialMatches(),this._addMediaListeners(),undefined):new a(e)}var u=RegExp("^"+({}.valueOf+"").replace(/[.*+?\^${}()|\[\]\\]/g,"\\$&").replace(/valueOf|for [^\]]+/g,".+?")+"$"),c=function(){var e=t.getElementsByTagName("base")[0],n=/^([a-zA-Z:]*\/\/)/;return function(t){var r=!n.test(t)&&!e||t.replace(RegExp.$1,"").split("/")[0]===location.host;return r}}(),f={matchMedia:e.matchMedia&&e.matchMedia("only all").matches,nativeMatchMedia:i(e.matchMedia)},l=function(){function t(e){for(var t,n=0;t=e[n++];)u[t]||r(t,c)||c.push(t)}function n(){if(0===h.readyState||4===h.readyState){var e;(e=c[0])&&i(e),e||o()}}function i(e){l++,h.open("GET",e,!0),h.onreadystatechange=function(){4!=h.readyState||200!=h.status&&304!=h.status||(u[e]=h.responseText,c.shift(),n())},h.send(null)}function s(e){for(var t,n=0,r=0;t=e[n++];)u[t]&&r++;return r===e.length}function o(){for(var e;e=f.shift();)a(e.urls,e.fn)}function a(e,t){for(var n,r=[],i=0;n=e[i++];)r.push(u[n]);t.call(null,r)}var u={},c=[],f=[],l=0,h=function(){var t;try{t=new e.XMLHttpRequest}catch(n){t=new e.ActiveXObject("Microsoft.XMLHTTP")}return t}();return{request:function(e,r){f.push({urls:e,fn:r}),s(e)?o():(t(e),n())},clearCache:function(){u={}},_getRequestCount:function(){return l}}}(),h={_cache:{},clearCache:function(){h._cache={}},parse:function(e,t){function r(){return o(/^\{\s*/)}function i(){return o(/^\}\s*/)}function s(){var t,n=[];for(a(),u(n);"}"!=e.charAt(0)&&(t=S()||x());)n.push(t),u(n);return n}function o(t){var n=t.exec(e);if(n)return e=e.slice(n[0].length),n}function a(){o(/^\s*/)}function u(e){e=e||[];for(var t;t=c();)e.push(t);return e}function c(){if("/"==e[0]&&"*"==e[1]){for(var t=2;"*"!=e[t]||"/"!=e[t+1];)++t;t+=2;var n=e.slice(2,t-2);return e=e.slice(t),a(),{comment:n}}}function f(){var e=o(/^([^{]+)/);if(e)return n(e[0]).split(/\s*,\s*/)}function l(){var e=o(/^(\*?[\-\w]+)\s*/);if(e&&(e=e[0],o(/^:\s*/))){var t=o(/^((?:'(?:\\'|.)*?'|"(?:\\"|.)*?"|\([^\)]*?\)|[^};])+)\s*/);if(t)return t=n(t[0]),o(/^[;\s]*/),{property:e,value:t}}}function d(){for(var e,t=[];e=o(/^(from|to|\d+%|\.\d+%|\d+\.\d+%)\s*/);)t.push(e[1]),o(/^,\s*/);return t.length?{values:t,declarations:R()}:undefined}function p(){var e=o(/^@([\-\w]+)?keyframes */);if(e){var t=e[1],e=o(/^([\-\w]+)\s*/);if(e){var n=e[1];if(r()){u();for(var s,a=[];s=d();)a.push(s),u();if(i()){var c={name:n,keyframes:a};return t&&(c.vendor=t),c}}}}}function v(){var e=o(/^@supports *([^{]+)/);if(e){var t=n(e[1]);if(r()){u();var a=s();if(i())return{supports:t,rules:a}}}}function m(){var e=o(/^@media *([^{]+)/);if(e){var t=n(e[1]);if(r()){u();var a=s();if(i())return{media:t,rules:a}}}}function y(){var e=o(/^@page */);if(e){var t=f()||[],n=[];if(r()){u();for(var s;s=l()||_();)n.push(s),u();if(i())return{type:"page",selectors:t,declarations:n}}}}function _(){var e=o(/^@([a-z\-]+) */);if(e){var t=e[1];return{type:t,declarations:R()}}}function M(){return E("import")}function g(){return E("charset")}function w(){return E("namespace")}function E(e){var t=o(RegExp("^@"+e+" *([^;\\n]+);\\s*"));if(t){var r={};return r[e]=n(t[1]),r}}function R(){var e=[];if(r()){u();for(var t;t=l();)e.push(t),u();if(i())return e}}function S(){return p()||m()||v()||M()||g()||w()||y()}function x(){var e=f();if(e)return u(),{selectors:e,declarations:R()}}return t&&h._cache[t]?h._cache[t]:(e=e.replace(/\/\*[\s\S]*?\*\//g,""),h._cache[t]=s())},filter:function(e,t){function r(e,t){return e||t?e?e.concat(t):[t]:undefined}function i(e){null==e.media&&delete e.media,null==e.supports&&delete e.supports,f.push(e)}function s(e,t){if(t)for(var n=t.length;n--;)if(e.indexOf(t[n])>=0)return!0}function o(e,t){for(var r,i,s,o,a=/\*/,u=0;r=t[u++];)if(i=r.split(":"),s=RegExp("^"+n(i[0]).replace(a,".*")+"$"),o=RegExp("^"+n(i[1]).replace(a,".*")+"$"),s.test(e.property)&&o.test(e.value))return!0}function a(e,n,r){return t.selectors?s(e.selectors.join(","),t.selectors)?(i({media:n,supports:r,selectors:e.selectors,declarations:e.declarations}),!0):undefined:undefined}function u(e,n,r){if(t.declarations)for(var s,a=0;s=e.declarations[a++];)if(o(s,t.declarations))return i({media:n,supports:r,selectors:e.selectors,declarations:e.declarations}),!0}function c(e,t,n){for(var i,s=0;i=e[s++];)i.declarations?a(i,t,n)||u(i,t,n):i.rules&&i.media?c(i.rules,r(t,i.media),n):i.rules&&i.supports&&c(i.rules,t,r(n,i.supports))}var f=[];return c(e),f}},d=function(){function n(){if(s)return s;var e=t.documentElement,n=t.body,r=e.style.fontSize,i=n.style.fontSize,o=t.createElement("div");return e.style.fontSize="1em",n.style.fontSize="1em",n.appendChild(o),o.style.width="1em",o.style.position="absolute",s=o.offsetWidth,n.removeChild(o),n.style.fontSize=i,e.style.fontSize=r,s}function r(t){return e.matchMedia(t)}function i(e){var r,i,s=!1;return o=t.documentElement.clientWidth,a.test(e)&&(r="em"===RegExp.$2?parseFloat(RegExp.$1)*n():parseFloat(RegExp.$1)),u.test(e)&&(i="em"===RegExp.$2?parseFloat(RegExp.$1)*n():parseFloat(RegExp.$1)),r&&i?s=o>=r&&i>=o:(r&&o>=r&&(s=!0),i&&i>=o&&(s=!0)),{matches:s,media:e}}var s,o,a=/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/,u=/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/,c={};return{matchMedia:function(e){return f.matchMedia?r(e):i(e)},clearCache:function(){f.nativeMatchMedia||(o=null,c={})}}}(),p=function(){function t(e,t){var n;return function(){clearTimeout(n),n=setTimeout(e,t)}}var n=function(){var e=[];return{add:function(t,n,r){for(var i,s=0;i=e[s++];)if(i.polyfill==t&&i.mql===n&&i.fn===r)return!1;n.addListener(r),e.push({polyfill:t,mql:n,fn:r})},remove:function(t){for(var n,r=0;n=e[r++];)n.polyfill===t&&(n.mql.removeListener(n.fn),e.splice(--r,1))}}}(),r=function(t){function n(){for(var e,n=0;e=t[n++];)e.fn()}return{add:function(r,i){t.length||(e.addEventListener?e.addEventListener("resize",n,!1):e.attachEvent("onresize",n)),t.push({polyfill:r,fn:i})},remove:function(r){for(var i,s=0;i=t[s++];)i.polyfill===r&&t.splice(--s,1);t.length||(e.removeEventListener?e.removeEventListener("resize",n,!1):e.detachEvent&&e.detachEvent("onresize",n))}}}([]);return{removeListeners:function(e){f.nativeMatchMedia?n.remove(e):r.remove(e)},addListeners:function(e,i){function s(){if(f.nativeMatchMedia)for(var s in a)a.hasOwnProperty(s)&&function(t,r){n.add(e,t,function(){i.call(e,r,t.matches)})}(a[s],s);else{var u=t(function(e,t){return function(){o(e,t)}}(e,a),e._options.debounceTimeout||100);r.add(e,u)}}function o(e,t){var n,r={};d.clearCache();for(n in t)t.hasOwnProperty(n)&&(r[n]=d.matchMedia(n).matches,r[n]!=u[n]&&i.call(e,n,d.matchMedia(n).matches));u=r}var a=e._mediaQueryMap,u={};(function(){for(var e in a)a.hasOwnProperty(e)&&(u[e]=d.matchMedia(e).matches)})(),s()}}}();s.prototype.each=function(e,t){var n,r=0;for(t||(t=this);n=this._rules[r++];)e.call(t,n)},s.prototype.size=function(){return this._rules.length},s.prototype.at=function(e){return this._rules[e]},o.prototype.getDeclaration=function(){for(var e,t={},n=0,r=this._rule.declarations;e=r[n++];)t[e.property]=e.value;return t},o.prototype.getSelectors=function(){return this._rule.selectors.join(", ")},o.prototype.getMedia=function(){return this._rule.media.join(" and ")},a.prototype.doMatched=function(e){return this._doMatched=e,this._resolve(),this},a.prototype.undoUnmatched=function(e){return this._undoUnmatched=e,this._resolve(),this},a.prototype.getCurrentMatches=function(){for(var e,t,n=0,r=[];e=this._filteredRules[n++];)t=e.media&&e.media.join(" and "),(!t||d.matchMedia(t).matches)&&r.push(e);return new s(r)},a.prototype.destroy=function(){this._undoUnmatched&&(this._undoUnmatched(this.getCurrentMatches()),p.removeListeners(this))},a.prototype._defer=function(e,t){e.call(this)?t.call(this):this._promise.push({condition:e,callback:t})},a.prototype._resolve=function(){for(var e,t=0;e=this._promise[t];)e.condition.call(this)?(this._promise.splice(t,1),e.callback.call(this)):t++},a.prototype._getStylesheets=function(){var e,n,i,s,o,a=0,u=[];if(this._options.include){for(n=this._options.include;e=n[a++];)if(i=t.getElementById(e)){if(i.media&&"print"==i.media)continue;if(!c(i.href))continue;o={href:i.href},i.media&&(o.media=i.media),u.push(o)}}else for(n=this._options.exclude,s=t.getElementsByTagName("link");i=s[a++];)i.rel&&"stylesheet"==i.rel&&"print"!=i.media&&c(i.href)&&!r(i.id,n)&&(o={href:i.href},i.media&&(o.media=i.media),u.push(o));return this._stylesheets=u},a.prototype._downloadStylesheets=function(){for(var e,t=this,n=[],r=0;e=this._stylesheets[r++];)n.push(e.href);l.request(n,function(e){for(var n,r=0;n=e[r];)t._stylesheets[r++].text=n;t._resolve()})},a.prototype._parseStylesheets=function(){this._defer(function(){return this._stylesheets&&this._stylesheets.length&&this._stylesheets[0].text},function(){for(var e,t=0;e=this._stylesheets[t++];)e.rules=h.parse(e.text,e.url)})},a.prototype._filterCSSByKeywords=function(){this._defer(function(){return this._stylesheets&&this._stylesheets.length&&this._stylesheets[0].rules},function(){for(var e,t,n=[],r=0;e=this._stylesheets[r++];)t=e.media,t&&"all"!=t&&"screen"!=t?n.push({rules:e.rules,media:e.media}):n=n.concat(e.rules);this._filteredRules=h.filter(n,this._options.keywords)})},a.prototype._buildMediaQueryMap=function(){this._defer(function(){return this._filteredRules},function(){var e,t,n=0;for(this._mediaQueryMap={};t=this._filteredRules[n++];)t.media&&(e=t.media.join(" and "),this._mediaQueryMap[e]=d.matchMedia(e))})},a.prototype._reportInitialMatches=function(){this._defer(function(){return this._filteredRules&&this._doMatched},function(){this._doMatched(this.getCurrentMatches())})},a.prototype._addMediaListeners=function(){this._defer(function(){return this._filteredRules&&this._doMatched&&this._undoUnmatched},function(){p.addListeners(this,function(e,t){for(var n,r=0,i=[],o=[];n=this._filteredRules[r++];)n.media&&n.media.join(" and ")==e&&(t?i:o).push(n);i.length&&this._doMatched(new s(i)),o.length&&this._undoUnmatched(new s(o))})})},a.modules={DownloadManager:l,StyleManager:h,MediaManager:d,EventManager:p},a.constructors={Ruleset:s,Rule:o},e.Polyfill=a})(window,document);(function($) {

  /**
   * Feature detect position sticky, if it exists then do nothing
   */
  if ((function(d) {
    try {
      // some browsers will throw an error when assigning an
      // unsupported value to a property
      d.style.position = "sticky"
    } catch (e) {
      return false
    }
    // this will return false if the browser doesn't recognize
    // "sticky" as a valid position value
    return d.style.position === "sticky"
  }(document.createElement("div")))) return


  /**
   * A unique id used to safely remove event callbacks
   */
  var uniqueID = 0


  /**
   * Scroll event callback
   * Based on the scroll position toggle the element between
   * position:fixed and its default position value
   */
  function onscroll($el) {
    var data = $el.data("position:sticky")
    if (!data) return
    if ($(window).scrollTop() >= data.offsetTop - data.top) {
      if (!data.$clone) {
        data.$clone = $el.clone().css({position: "fixed", top: data.top}).appendTo("body")
        $el.css("visibility", "hidden")
        onresize($el)
      }
    }
    else {
      if (data.$clone) {
        data.$clone.remove()
        data.$clone = null
        $el.css("visibility", "visible")
      }
    }
  }


  /**
   * Resize event callback
   * Recalculate the dimensions of the hidden element as
   * it may have changed. If it has, update the clone
   */
  function onresize($el) {
    var data = $el.data("position:sticky")
      , offset
    // Make sure no operations that require a repaint are
    // done unless a cloned element exists
    if (data && data.$clone) {
      offset = $el.offset()
      data.offsetTop = offset.top
      data.$clone.css({left: offset.left, width: $el.width()})
    }
  }

  function doMatched(rules) {
    rules.each(function(rule) {
      var $elements = $(rule.getSelectors())
        , declaration = rule.getDeclaration()
      $elements.each(function() {
        var $this = $(this)
          , data = $this.data("position:sticky")
        if (!data) {
          data = {
            id: ++uniqueID,
            offsetTop: $this.offset().top,
            top: parseInt(declaration.top, 10)
          }
          $this.data("position:sticky", data)
        }
        onscroll($this)
        $(window).on("scroll.position:sticky:" + data.id, function() { onscroll($this) })
        $(window).on("resize.position:sticky:" + data.id, function() { onresize($this) })
      })
    })
  }

  function undoUnmatched(rules) {
    rules.each(function(rule) {
      var $elements = $(rule.getSelectors())
      $elements.each(function() {
        var $this = $(this)
          , data = $(this).data("position:sticky")
        if (data) {
          if (data.$clone) {
            data.$clone.remove()
            $this.css("visibility", "visible")
          }
          $(window).off(".position:sticky:" + data.id)
          $this.removeData("position:sticky")
        }
      })
    })
  }

  Polyfill({
    declarations:["position:sticky"]
  }, {
    include: ["position-sticky"]
  })
  .doMatched(doMatched)
  .undoUnmatched(undoUnmatched)

}(jQuery))