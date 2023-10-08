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
    if (value == "" || value == undefined) {
        $(".err-" + id).text(capitalizeFirstLetter(id) + " is required");
        return false;
    } else {
        $(".err-" + id).text("");
        return true;
    }
}

function validatePattern(id, pattern, message = "is invalid format") {
    let value = $("#" + id).val();
    if (!pattern.test(value)) {
        $(".err-" + id).text(capitalizeFirstLetter(id) + ` ${message}`);
        return false;
    } else {
        $(".err-" + id).text("");
        return true;
    }
}

$(".TextInput_text-input__CQMEM").on("input", function (event) {
    console.log(event.target.value);
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
            location.href = "/profile/index";
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
