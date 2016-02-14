$(document).ready( function() {
    $("input.code")
    .keyup(function() {
        var value = $( this ).val();
        $( this ).parent().css("background-color", value);
        $( this ).siblings( ".usage" ).css("color", value);
    })
    .keyup();
} )


