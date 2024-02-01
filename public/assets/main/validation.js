function printErrorMsg(msg) {
    console.log(msg.responseJSON);
    $.each(msg.responseJSON.errors, function (key, value) {
        console.log(' ' + key + ': ' + value);
        $(".error-" + key).html(value);
        $(".error-" + key).removeClass('d-none');
    });
}
