$('textarea[name=description]').ckeditor({
    height: 100,
    filebrowserImageBrowseUrl: route_prefix + '?type=Images',
    filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token=' + csrf_token,
    filebrowserBrowseUrl: route_prefix + '?type=Files',
    filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token=' + csrf_token
});
