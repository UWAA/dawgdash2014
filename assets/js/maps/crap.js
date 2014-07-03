! function () {
    for (var a, b = function () {}, c = ["assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn"], d = c.length, e = window.console = window.console || {}; d--;) a = c[d], e[a] || (e[a] = b)
}();
var $j = jQuery.noConflict();
$j(window).ready(function () {
    $j("input:radio").prop("checked", !1), $j(".donation-level-container").hover(function () {
        $j(this).addClass("hover")
    }, function () {
        $j(this).removeClass("hover")
    }).click(function () {
        return $j(this).removeClass("hover"), $j(this).toggleClass("selected").find("input").prop("checked", !0), $j(".donation-level-container").not(this).removeClass("selected"), !1
    }).mouseup(function () {
        var b = $j(this),
            c = b.find("input").prop("checked");
        c && setTimeout(function () {
            b.find("input").prop("checked", !1).blur()
        }, 10)
    }), $j(".premium-selector-radio-option-description").hover(function () {
        $j(this).addClass("hover")
    }, function () {
        $j(this).removeClass("hover")
    }).click(function () {
        return $j(this).removeClass("hover"), $j(this).toggleClass("selected").parent().find("input").prop("checked", !0), $j(".premium-selector-radio-option-description").not(this).removeClass("selected"), !1
    }).mouseup(function () {
        var b = $j(this),
            c = b.parent().find("input").prop("checked");
        c && setTimeout(function () {
            b.parent().find("input").prop("checked", !1).blur()
        }, 10)
    }), $j(".radio-button-container").hover(function () {
        $j(this).addClass("hover")
    }, function () {
        $j(this).removeClass("hover")
    }).click(function () {
        return $j(this).removeClass("hover"), $j(this).toggleClass("selected").find("input").prop("checked", !0), $j(".radio-button-container").not(this).removeClass("selected"), !1
    }).mouseup(function () {
        var b = $j(this),
            c = b.find("input").prop("checked");
        c && setTimeout(function () {
            b.find("input").prop("checked", !1).blur()
        }, 10)
    })
});