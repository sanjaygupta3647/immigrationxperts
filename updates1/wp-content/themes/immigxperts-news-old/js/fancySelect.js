(function(){var e;e=window.jQuery||window.Zepto||window.$,e.fn.fancySelect=function(n){var t,s;return null==n&&(n={}),s=e.extend({forceiOS:!1,includeBlank:!1,optionTemplate:function(e){return e.text()},triggerTemplate:function(e){return e.text()}},n),t=!!navigator.userAgent.match(/iP(hone|od|ad)/i),this.each(function(){var n,r,i,a,o,l,d;return a=e(this),a.hasClass("fancified")||"SELECT"!==a[0].tagName?void 0:(a.addClass("fancified"),a.css({width:1,height:1,display:"block",position:"absolute",top:0,left:0,opacity:0}),a.wrap('<div class="fancy-select">'),d=a.parent(),a.data("class")&&d.addClass(a.data("class")),d.append('<div class="trigger">'),(!t||s.forceiOS)&&d.append('<ul class="options">'),o=d.find(".trigger"),i=d.find(".options"),r=a.prop("disabled"),r&&d.addClass("disabled"),l=function(){var e;return e=s.triggerTemplate(a.find(":selected")),o.html(e)},a.on("blur.fs",function(){return o.hasClass("open")?setTimeout(function(){return o.trigger("close.fs")},120):void 0}),o.on("close.fs",function(){return o.removeClass("open"),i.removeClass("open")}),o.on("click.fs",function(){var n,l;if(!r)if(o.toggleClass("open"),t&&!s.forceiOS){if(o.hasClass("open"))return a.focus()}else if(o.hasClass("open")&&(l=o.parent(),n=l.offsetParent(),l.offset().top+l.outerHeight()+i.outerHeight()+20>e(window).height()+e(window).scrollTop()?i.addClass("overflowing"):i.removeClass("overflowing")),i.toggleClass("open"),!t)return a.focus()}),a.on("enable",function(){return a.prop("disabled",!1),d.removeClass("disabled"),r=!1,n()}),a.on("disable",function(){return a.prop("disabled",!0),d.addClass("disabled"),r=!0}),a.on("change.fs",function(e){return e.originalEvent&&e.originalEvent.isTrusted?e.stopPropagation():l()}),a.on("keydown",function(e){var n,t,s;if(s=e.which,n=i.find(".hover"),n.removeClass("hover"),i.hasClass("open")){if(38===s?(e.preventDefault(),n.length&&n.index()>0?n.prev().addClass("hover"):i.find("li:last-child").addClass("hover")):40===s?(e.preventDefault(),n.length&&n.index()<i.find("li").length-1?n.next().addClass("hover"):i.find("li:first-child").addClass("hover")):27===s?(e.preventDefault(),o.trigger("click.fs")):13===s||32===s?(e.preventDefault(),n.trigger("click.fs")):9===s&&o.hasClass("open")&&o.trigger("close.fs"),t=i.find(".hover"),t.length)return i.scrollTop(0),i.scrollTop(t.position().top-12)}else if(13===s||32===s||38===s||40===s)return e.preventDefault(),o.trigger("click.fs")}),i.on("click.fs","li",function(){var n;return n=e(this),a.val(n.data("raw-value")),t||a.trigger("blur.fs").trigger("focus.fs"),i.find(".selected").removeClass("selected"),n.addClass("selected"),o.addClass("selected"),a.val(n.data("raw-value")).trigger("change.fs").trigger("blur.fs").trigger("focus.fs")}),i.on("mouseenter.fs","li",function(){var n,t;return t=e(this),n=i.find(".hover"),n.removeClass("hover"),t.addClass("hover")}),i.on("mouseleave.fs","li",function(){return i.find(".hover").removeClass("hover")}),n=function(){var n;return l(),!t||s.forceiOS?(n=a.find("option"),a.find("option").each(function(n,t){var r;return t=e(t),t.prop("disabled")||!t.val()&&!s.includeBlank?void 0:(r=s.optionTemplate(t),i.append(t.prop("selected")?'<li data-raw-value="'+t.val()+'" class="selected">'+r+"</li>":'<li data-raw-value="'+t.val()+'">'+r+"</li>"))})):void 0},a.on("update.fs",function(){return d.find(".options").empty(),n()}),n())})}}).call(this);;;
