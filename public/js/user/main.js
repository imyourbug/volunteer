$("#avatar").on("click", function (event) {
    event.preventDefault();
    $("#change-image").click();
    // if (checkSave()) {
    //     console.log("call api");
    //     $.ajax({
    //         type: "POST",
    //         data: $("#form-volunteer").serialize(),
    //         url: "/volunteers/create",
    //     }).then((response) => {
    //         location.href = "/profile/index";
    //     });
    // }
});

$("#change-image").change(function () {
    const form = new FormData();
    form.append("file", $(this)[0].files[0]);
    $.ajax({
        processData: false, // need to send file
        contentType: false, // need to send file
        type: "POST",
        data: form,
        url: "/change_avatar",
        success: function (results) {
            location.reload();
        },
    });
});
