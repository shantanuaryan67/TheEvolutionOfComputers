function colorgen() {
  var possible = "0123456789ABCDEF";
  var cg='#'
  for (var i = 0; i < 6; i++){
    cg += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return cg;
}

function colorChanger() {
  // document.documentElement.style.setProperty('--customcolor', colorgen());
  document.documentElement.style.setProperty('--customcolor', rand_hsl(0,360,70,90,60,70));
  themechanger();
}

function getcolorvalue() {
  return getComputedStyle(document.documentElement).getPropertyValue('--customcolor');
}

function themechanger() {
  var metaThemeColor = document.querySelector("meta[name=theme-color]");
  metaThemeColor.setAttribute("content", getcolorvalue());
}

function rand(min,max) // min and max included
{
    return Math.floor((Math.random()*(max-min+1))+min);
}

function rand_hsl(h1,h2,s1,s2,l1,l2) {
  hslc = "hsl(" + rand(h1,h2) + "," + rand(s1,s2) + "%," + rand(l1,l2) + "%)";
  return hslc;
}

colorChanger();
