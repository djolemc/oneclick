$(document).ready(function () {


    $('.delete').on('click', function () {

        id = (this.value);

        console.log(id);

        $.ajax({
            type: 'post',
            url: 'admin.php',
            data: {name: 'Delete', id: id},
            success: function (response) {

                alert(response);

            }
        });

        this.closest('div').remove();
    })
});