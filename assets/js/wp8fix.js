//Windows Phone 8 Fix

(function() {
if ("-ms-user-select" in document.documentElement.style &&
(navigator.userAgent.match(/IEMobile/) ||
navigator.userAgent.match(/ZuneWP7/) ||
navigator.userAgent.match(/WPDesktop/))) {
var msViewportStyle = document.createElement("style");
msViewportStyle.appendChild(
document.createTextNode("@-ms-viewport{width:auto!important}")
);
document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}
})();