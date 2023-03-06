$(function() {

    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');

        $.ajax({
            url: 'cart',
            type: 'GET',
            data: {cart: 'add', id: id},
            dataType: 'json',
            success: function (res) {
               if (res.code == 'OK') {
               	location.reload();
               } else {
               		alert(res.answer);
               }
            },
            error: function () {
                alert('Error');
            }
        });
    });

});