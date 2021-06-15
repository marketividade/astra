if (window.location.pathname == '/') {
  // Index (home) page
  console.log("the page is: home!");
  styleSpecificForHome();


} else {
  // Other page
  console.log("the page is: " + window.location.pathname);
}

function styleSpecificForHome() {
  setTimeout(function () {
    jQuery(".menu-text").css("color", "#FFFFFF");
    jQuery(".icon-arrow").css("color", "#FFFFFF");
    jQuery(".sub-menu .menu-text").css("color", "#0094A1");
}, 200);
}
