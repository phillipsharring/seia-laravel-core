// app.js

var contentsForm = function(){
    $('#release_at').datetimepicker();
    $('#expire_at').datetimepicker();
    var editor = new MediumEditor('.editable', {
        'toolbar': {
            'buttons': ['bold', 'italic', 'underline', 'strike', 'anchor', 'h1', 'h2', 'h3', 'quote', 'unorderedlist', 'orderedlist']
        }
    });
};

$(function(){

});
