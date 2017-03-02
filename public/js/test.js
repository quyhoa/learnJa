function setActive(id) {
    $('#id').addClass('active');
}

function checkUser() {
    var token = $("input[name='_token']").val();
    var name = $("input[name='name']").val();
    $.ajax({
        type: 'POST',
        url: '/adm/test1',
        data: {
            _token: token, //must has
            name: name
        },
        success: function(data) {
            console.log(data);
            if(data['status'] == 1)
            {
                text = "<ul> <li class='danger-message'>" + data['data'] + '</li></ul>';
                $("#msg").html(text);
            }
        }
    });
}
