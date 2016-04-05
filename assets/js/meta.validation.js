$(document).ready(function() {
  var validationObject = {
    title: {
      selector: "SeoPage[title]",
      minLength: 1,
      maxLength: 55
    },
    description: {
      selector: "SeoPage[description]",
      minLength: 25,
      maxLength: 160
    },
    og_title: {
      selector: "SeoPage[og_title]",
      minLength: 1,
      maxLength: 55
    },
    og_description: {
      selector: "SeoPage[og_description]",
      minLength: 25,
      maxLength: 300
    },
    og_type: {
      selector: "SeoPage[og_type]",
      minLength: 1,
      maxLength: null
    },
    twt_card: {
      selector: "SeoPage[twt_card]",
      minLength: 1,
      maxLength: 50
    },
    twt_site: {
      selector: "SeoPage[twt_site]",
      minLength: 1,
      maxLength: null
    },
    twt_creator: {
      selector: "SeoPage[twt_creator]",
      minLength: 1,
      maxLength: null
    },
    twt_title: {
      selector: "SeoPage[twt_title]",
      minLength: 1,
      maxLength: null
    },
    twt_description: {
      selector: "SeoPage[twt_title]",
      minLength: 1,
      maxLength: 300
    },
  }
  $("[data-analyze-seo]").on('click', function(e) {
    for (var key in validationObject) {
      obj = validationObject[key];
      // console.log(key, obj.selector)

      selector = obj.selector;
      minLength = obj.minLength;
      maxLength = obj.maxLength;

      input = document.querySelector('[name="' + selector + '"]').value;
      // console.log(input);

      if (!input) {
        setError(selector);
      } else if (minLength && input.length < minLength) {
        setIncomplete(selector);
      } else if (maxLength && input.length > maxLength ) {
        setIncomplete(selector);
      } else{
        setComplete(selector);
      }
    }
  });
});

function setError(key) {
  if (!$('[data-field-name="' + key + '"]').hasClass('error')) {
    $('[data-field-name="' + key + '"]').toggleClass('error');
  }
}

function setComplete(key) {
  if (!$('[data-field-name="' + key + '"]').hasClass('complete')) {
    $('[data-field-name="' + key + '"]').toggleClass('complete');
  }
}

function setIncomplete(key) {
  if (!$('[data-field-name="' + key + '"]').hasClass('incomplete')) {
    $('[data-field-name="' + key + '"]').toggleClass('incomplete');
  }
}
