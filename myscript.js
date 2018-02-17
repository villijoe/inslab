
$( document ).ready( function(){

    $( "textarea" ).focusin( function() {
        $( this ).summernote({
            height: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname']],
                ['color', ['color']],
                ['paragraph', ['ol', 'ul', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['misc', ['fullscreen', 'codeview', 'help']]
            ]
        })
    });

    $( "#send" ).click( function( event ){
        var emails = $( "#emails" ).val(),
            title = $( "#title" ).val(),
            text = $( "#text" ).val();
        validateForm();
        event.preventDefault();
        //console.log([emails, title, text]);
        $.ajax({
            method: "POST",
            url: "handle.php",
            data: { emails: emails, title: title, text: text },
            dataType: "json",
            success: function(data){
                $( ".message-complete" ).html(data);
            }
        });
    });

    function validateForm(){
        var i = 1;
        $( ".valid" ).each( function(){
            if ( $( this ).val() == ""){
                $( this ).next().css({
                    "display": "inline"
                });
            }
        });
    }

});