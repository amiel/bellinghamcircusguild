$(document).ready(function() {
  $('section.event').click(function() {
    var a = $('a', this)[0];
    if (a) { document.location = a.href; }
  });

  $('.home.page #mission').click(function() {
    document.location = '/about';
  });
});
