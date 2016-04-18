$(document).ready(function() {
  $('[copy-og-title]').on('click', function(event){
    event.preventDefault();
    $('[name="SeoPage[og_title]"]').val($('[name="SeoPage[title]"]').val());
  });
  $('[copy-og-description]').on('click', function(event){
    event.preventDefault();
    $('[name="SeoPage[og_description]"]').val($('[name="SeoPage[description]"]').val());
  });
  $('[copy-twt-title]').on('click', function(event){
    event.preventDefault();
    $('[name="SeoPage[twt_title]"]').val($('[name="SeoPage[title]"]').val());
  });
  $('[copy-twt-description]').on('click', function(event){
    event.preventDefault();
    $('[name="SeoPage[twt_description]"]').val($('[name="SeoPage[description]"]').val());
  });
});
