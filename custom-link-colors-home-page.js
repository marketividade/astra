
if (window.location.pathname == '/') {
  // Index (home) page
  console.log("the page is: home!");
  styleSpecificForHome();


} else {
  // Other page
 styleSpecificForOtherThanHome()
 console.log("the page is: " + window.location.pathname);
}

function styleSpecificForHome() {
  setTimeout(function () {
 // jQuery(".menu-text").hide();

    jQuery(".menu-text").css("color", "#FFFFFF");
    jQuery(".icon-arrow").css("color", "#FFFFFF");
    jQuery(".sub-menu .menu-text").css("color", "#0094A1");


  console.log("function called:styleSpecificForHome 2");
  }, 200);
}

function styleSpecificForOtherThanHome() {
  setTimeout(function () {
    console.log("function called:styleSpecificForOtherThanHome");
    
    //in the case you have an SVG on the menu, use the css attribute "fill" to toggle its color
    //Thanks Biskrem Muhammad https://stackoverflow.com/a/49627345
    jQuery(".icon-search svg path").css("fill", "#0094A1");

  }, 200);
  
}
