
var prevScrollpos = window.pageYOffset;
window.onscroll =  function() {
var currentScrollPos = window.pageYOffset;
  if (document.body.scrollTop > 150 ||document.documentElement.scrollTop > 150){
    if(prevScrollpos > currentScrollPos) {
    document.getElementById("menubar").style.top = "0px";
  } else {
    document.getElementById("menubar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}
}