function scrollToElement(name) {
    var Element = document.getElementById(name);
    Element.scrollIntoView({ behavior: 'smooth' });
  }

function redirect(site) {
  window.location.href = site;
  }