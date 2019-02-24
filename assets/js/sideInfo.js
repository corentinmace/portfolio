function getElementOffset(id) {
    var dom = document.getElementById(id)
    var height = dom.offsetHeight

    var elem = document.querySelector("#" + id)
    var rect = elem.getBoundingClientRect()
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop
    return rect.top + scrollTop + height
}

window.addEventListener("scroll", function() {

    if (window.scrollY <= getElementOffset("accueil")) {
      document.getElementById("nav").classList.remove("navabout");
      document.getElementById("nav").classList.remove("navworks");
      document.getElementById("nav").classList.remove("navcontact");
    document.getElementById("nav").classList.add("navhome");
    document.getElementById("nav").innerHTML = "Home";

    } else if (window.scrollY <= getElementOffset("about")) {
        document.getElementById("nav").classList.remove("navhome");
        document.getElementById("nav").classList.remove("navcontact");
        document.getElementById("nav").classList.remove("navworks");
      document.getElementById("nav").classList.add("navabout");
        document.getElementById("nav").innerHTML = "About";
        


    } else if (window.scrollY <= getElementOffset("works")) {
        document.getElementById("nav").classList.remove("navhome");
      document.getElementById("nav").classList.remove("navabout");
        document.getElementById("nav").classList.remove("navcontact");
        document.getElementById("nav").classList.add("navworks");
        document.getElementById("nav").innerHTML = "Works";




    } else if (window.scrollY <= getElementOffset("contact")) {
        document.getElementById("nav").classList.remove("navhome");
          document.getElementById("nav").classList.remove("navabout");
        document.getElementById("nav").classList.remove("navworks");
        document.getElementById("nav").classList.add("navcontact");
        document.getElementById("nav").innerHTML = "Contact";


    }
})


jQuery(document).ready(function($){

});
