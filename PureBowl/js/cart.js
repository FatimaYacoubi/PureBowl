$('.amount').keyup(function() {
    var result = 0;
    $('#total').attr('value', function() {
        $('.amount').each(function() {
            if ($(this).val() !== '') {
                result += parseInt($(this).val());
            }
        });
        return result;
    });
});