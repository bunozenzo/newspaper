
$(document).ready(function () {
    $("a#select-img").click(function (event) {
        event.preventDefault();
        $("#myModal").modal('show');
        $("#myModal").on('hide.bs.modal', function (e) {
            var imgUrl = $('input#image').val();
            $('img#show-img').attr('src', imgUrl);
            // alert(host[0]);
        });
    });
});

$(document).ready(function () {
    $("a#remove-img").click(function (event) {
        event.preventDefault();
        $('input#image').val('');
        $('img#show-img').attr('src', '');
    });
});