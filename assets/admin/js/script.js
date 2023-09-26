jQuery(document).ready(function($) {

  $('.first_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.first_img').attr('src', attachment.url);
      $('.first_img_url').val(attachment.url);
      $('.first_img_id').val(attachment.id);
    })
    .open();
  });  
  
  $('.second_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.second_img').attr('src', attachment.url);
      $('.second_img_url').val(attachment.url);
      $('.second_img_id').val(attachment.id);
    })
    .open();
  });

    $('.slider_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.slider_img').attr('src', attachment.url);
      $('.slider_img_url').val(attachment.url);
    })
    .open();
  });

  $('.single_product_first_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.single_product_first_img').attr('src', attachment.url);
      $('.single_product_first_img_url').val(attachment.url);
      $('.single_product_first_img_id').val(attachment.id);
    })
    .open();
  }); 

  $('.single_product_second_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.single_product_second_img').attr('src', attachment.url);
      $('.single_product_second_img_url').val(attachment.url);
      $('.single_product_second_img_id').val(attachment.id);
    })
    .open();
  }); 

});
   