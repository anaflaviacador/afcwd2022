window.FakeLoader = function (o, i, a) { var d = { auto_hide: !0, overlay_id: "fakeloader-overlay", fade_timeout: 200, wait_for_images: !0, wait_for_images_selector: "body" }, l = null, n = { hideOverlay: function () { l.removeClass("visible"), i.setTimeout(function () { l.addClass("hiddenload") }, d.fade_timeout) }, showOverlay: function () { l.removeClass("hiddenload").addClass("visible") }, init: function (e) { o.extend(d, e), o("#" + d.overlay_id).length <= 0 ? (l = o('<div id="' + d.overlay_id + '" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>'), o("body").append(l), "undefined" != typeof console && void 0 !== console.log && console.log("You should put the fakeLoader loading overlay element in your markup directly for best results.")) : l = o("#" + d.overlay_id), l.click(function () { n.hideOverlay() }), o(i).bind("beforeunload", function () { o("#" + d.overlay_id).removeClass("incoming").addClass("outgoing"), n.showOverlay() }), o(a).ready(function () { 1 == d.auto_hide && ("function" == typeof o.fn.waitForImages && 1 == d.wait_for_images ? o(d.wait_for_images_selector).waitForImages(function () { n.hideOverlay() }) : n.hideOverlay()) }) } }; return n }(jQuery, window, document);