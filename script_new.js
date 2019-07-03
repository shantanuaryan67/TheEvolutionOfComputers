function colorgen() {
  var possible = "0123456789ABCDEF";
  var cg='#'
  for (var i = 0; i < 6; i++){
    cg += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return cg;
}

function colorChanger() {
  document.documentElement.style.setProperty('--customcolor', colorgen());
  themechanger();
}

function getcolorvalue() {
  return getComputedStyle(document.documentElement).getPropertyValue('--customcolor');
}

function themechanger() {
  var metaThemeColor = document.querySelector("meta[name=theme-color]");
  metaThemeColor.setAttribute("content", getcolorvalue());
}

colorChanger();
