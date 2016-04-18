$(document).ready(function() {
  $('[name="SeoPage[title]"]').keyup(updateGoogle);
  $('[name="SeoPage[url]"]').keyup(updateGoogle);
  $('[name="SeoPage[description]"]').keyup(updateGoogle);
  updateGoogle();

  
});

function updateGoogle(){
  $('.google-search-title').html($('[name="SeoPage[title]"]').val());
  $('.google-search-url .url').html($('[name="SeoPage[url]"]').val());
  $('.google-search-description').html($('[name="SeoPage[description]"]').val());
}
