$(document).ready(function () {
    // validate
    var keys = [
        "organization",
        "name",
        "phone",
        "email",
        "date",
        "start_time",
        "end_time",
        "service_type_id",
        "description",
    ];

    var keyPattern = ["phone", "email"];

    var keyRequired = [
        "organization",
        "name",
        "date",
        "start_time",
        "end_time",
        "service_type_id",
        "description",
    ];

    function validateRequired(id) {
        let value = $("#" + id).val();
        let name = $("#" + id).attr("name");
        if (value == "" || value == undefined) {
            $(".err-" + id).text(capitalizeFirstLetter(name) + " is required");
            return false;
        } else {
            $(".err-" + id).text("");
            return true;
        }
    }

    function validatePattern(id, pattern, message = "is invalid format") {
        let value = $("#" + id).val();
        let name = $("#" + id).attr("name");
        if (!pattern.test(value)) {
            $(".err-" + id).text(capitalizeFirstLetter(name) + ` ${message}`);
            return false;
        } else {
            $(".err-" + id).text("");
            return true;
        }
    }

    $(".TextInput_text-input__CQMEM").on("input", function (event) {
        let id = event.target.id;
        validateRequired(id);
    });

    $("#phone").on("input", function (event) {
        if ($("#phone").val() != "") {
            let pattern = new RegExp("^0\\d{9}$");
            validatePattern("phone", pattern);
        } else $(".err-phone").text("");
    });

    $("#email").on("input", function (event) {
        if ($("#email").val() != "") {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            validatePattern("email", pattern);
        } else $(".err-email").text("");
    });

    $(".btn-save").on("click", function (event) {
        event.preventDefault();
        if (checkSave()) {
            console.log("call api");
            $.ajax({
                type: "POST",
                data: $("#form-volunteer").serialize(),
                url: "/volunteers/create",
            }).then((response) => {
                location.href = "/profile/log/my-log";
            });
        }
    });

    function checkSave() {
        let rs = true;
        keys.forEach((key) => {
            if (keyRequired.includes(key)) {
                if (!validateRequired(key)) {
                    rs = false;
                }
            }
            if (keyPattern.includes(key)) {
                if ($("#" + key).val() != "" && key == "phone") {
                    let pattern = new RegExp("^0\\d{9}$");
                    if (!validatePattern(key, pattern)) {
                        rs = false;
                    }
                }
                if ($("#" + key).val() != "" && key == "email") {
                    let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
                    if (!validatePattern(key, pattern)) {
                        rs = false;
                    }
                }
            }
        });
        return rs;
    }

    $(".btn-clear").on("click", function (event) {
        event.preventDefault();
        keys.forEach((key) => {
            $("#" + key).val("");
            $(".err-" + key).text("");
        });
    });

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function convertStringToMin(str) {
        let time = str.split(':');
        let hour = time[0];
        let mins = time[1];
        return parseInt(hour) * 60 + parseInt(mins);
    }

    function getAMorPM(str) {
        let time = str.split(':');
        let hour = time[0];
        return str + ' ' + (parseInt(hour) >= 12 ? 'PM' : 'AM');
    }

    function convertMinToString(mins) {
        let min = mins % 60;
        let hour = Math.round(mins / 60);
        return `${hour > 0 ? (hour + 'h') : ''}${min > 0 ? (min + 'm') : ''}`;
    }

    function getDiffHour(start_time, end_time) {
        let mins = convertStringToMin(end_time) - convertStringToMin(start_time);
        return convertMinToString(mins);
    }
    //
    var urlData = $("#logData").val();
    $("#logTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: urlData,
        columns: [
            {
                data: "date",
                name: "date",
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    return data.organization + "<br/>" + data.name;
                },
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    return getAMorPM(data.start_time) + " - " + getAMorPM(data.end_time);
                },
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    return getDiffHour(data.start_time, data.end_time);
                },
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    return data.phone + "<br/>" + data.email;
                },
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    console.log(data);
                    return `<i class="btn-edit fa-solid fa-pen-to-square"
                            data-id="${data.id}" style="color: blue;"
                            ></i>&emsp;
                                <i class="btn-delete fa-solid fa-trash"
                                data-id=${data.id}
                                style="color: red;"
                                ></i>`;
                },
            },
        ],
    });

    $("#fade").modal({
        fadeDuration: 100,
    });
    // validate
    var key_update = [
        "organization_update",
        "name_update",
        "phone_update",
        "email_update",
        "date_update",
        "start_time_update",
        "end_time_update",
        "service_type_id_update",
        "description_update",
    ];

    var keyPatternUpdate = ["phone_update", "email_update"];

    var keyRequiredUpdate = [
        "organization_update",
        "name_update",
        "date_update",
        "start_time_update",
        "end_time_update",
        "service_type_id_update",
        "description_update",
    ];

    $(".TextInput_text-input__CQMEM").on("input", function (event) {
        let id = event.target.id;
        validateRequired(id);
    });

    $("#phone_update").on("input", function (event) {
        if ($("#phone_update").val() != "") {
            let pattern = new RegExp("^0\\d{9}$");
            validatePattern("phone_update", pattern);
        } else $(".err-phone_update").text("");
    });

    $("#email_update").on("input", function (event) {
        if ($("#email_update").val() != "") {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            validatePattern("email_update", pattern);
        } else $(".err-email_update").text("");
    });

    $(".btn-save_update").on("click", function (event) {
        event.preventDefault();
        if (checkSaveUpdate()) {
            console.log("call api update");
            $.ajax({
                type: "POST",
                data: $("#form-volunteer_update").serialize(),
                url: "/volunteers/update",
            }).then((response) => {
                location.href = "/profile/log/my-log";
            });
        }
    });

    function checkSaveUpdate() {
        let rs = true;
        key_update.forEach((key) => {
            if (keyRequiredUpdate.includes(key)) {
                if (!validateRequired(key)) {
                    rs = false;
                }
            }
            if (keyPatternUpdate.includes(key)) {
                let value = $("#" + key).val();
                if (value != "" && key == "phone") {
                    let pattern = new RegExp("^0\\d{9}$");
                    if (!validatePattern(key, pattern)) {
                        rs = false;
                    }
                }
                if (value != "" && key == "email") {
                    let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
                    if (!validatePattern(key, pattern)) {
                        rs = false;
                    }
                }
            }
        });
        return rs;
    }

    $(".btn-clear_update").on("click", function (event) {
        event.preventDefault();
        key_update.forEach((key) => {
            $("#" + key).val("");
            $(".err-" + key).text("");
        });
    });

    $("#btn-remove").on("click", function (event) {
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: "/volunteers/delete/" + $("#id_delete").val(),
            success: function (result) {
                if (result.status == 0) {
                    location.href = "/profile/log/my-log";
                } else {
                    console.log(result);
                }
            },
        });
    });
});

$(document).on("click", ".btn-edit", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $.ajax({
        type: "GET",
        url: "/profile/log/my-log/" + id,
        success: function (result) {
            if (result.status == 0) {
                $("#id").val(result.log.id);
                $("#organization_update").val(result.log.organization);
                $("#name_update").val(result.log.name);
                $("#phone_update").val(result.log.phone);
                $("#email_update").val(result.log.email);
                $("#date_update").val(result.log.date);
                $("#start_time_update").val(result.log.start_time);
                $("#end_time_update").val(result.log.end_time);
                $("#service_type_id_update").val(result.log.service_type_id);
                $("#description_update").val(result.log.description);
                $(".open-edit").click();
            } else {
                console.log(result);
            }
        },
    });
});

$(document).on("click", ".btn-delete", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $("#id_delete").val(id);
    $(".open-delete").click();
});
