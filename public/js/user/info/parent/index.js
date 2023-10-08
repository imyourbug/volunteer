// validate
var keys = [
    "mother_first_name",
    "mother_last_name",
    "mother_email",
    "mother_phone",
    "mother_employer",
    "father_first_name",
    "father_last_name",
    "father_email",
    "father_phone",
    "father_employer",
];

var keyRequired = [
    "mother_first_name",
    "mother_last_name",
    "mother_email",
    "mother_phone",
    "mother_employer",
];

var keyPatternEmail = [
    "mother_email",
    "father_email",
];

var keyPatternPhone = [
    "mother_phone",
    "father_phone",
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
    let id = event.target.id;
    let value = event.target.value;
    validateRequired(id);
});

$('#mother_email').on('input', function () {
    let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
    if (validateRequired('mother_email')) {
        validatePattern('mother_email', pattern);
    }
});

$('#father_email').on('input', function () {
    if ($('#father_email').val() != '') {
        let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
        validatePattern('father_email', pattern);
    } else $(".err-father_email").text("");
});

$('#mother_phone').on('input', function () {
    let pattern = new RegExp("^0\\d{9}$");
    if (validateRequired('mother_phone')) {
        validatePattern('mother_phone', pattern);
    }
});

$('#father_phone').on('input', function () {
    if ($('#father_phone').val() != '') {
        let pattern = new RegExp("^0\\d{9}$");
        validatePattern('father_phone', pattern);
    } else $(".err-father_phone").text("");

});

$(".btn-save").on("click", function (event) {
    event.preventDefault();
    if (checkSave()) {
        $.ajax({
            type: "POST",
            data: $("#form-parent").serialize(),
            url: "/profile/info/parent/update",
        }).then((response) => {
            location.href = "/profile/info/parent";
        });
    }
});

function checkSave() {
    let rs = true;
    keys.forEach((key) => {
        if (keyRequired.includes(key) && keyPatternEmail.includes(key)) {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            if (!validateRequired(key) || !validatePattern(key, pattern)) {
                rs = false;
            }
        }
        if (keyRequired.includes(key) && keyPatternPhone.includes(key)) {
            let pattern = new RegExp("^0\\d{9}$");
            if (!validateRequired(key) || !validatePattern(key, pattern)) {
                rs = false;
            }
        }
        if (!keyRequired.includes(key) && keyPatternEmail.includes(key)) {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            if ($('#' + key).val() != '' && !validatePattern(key, pattern)) {
                rs = false;
            }
        }
        if (!keyRequired.includes(key) && keyPatternPhone.includes(key)) {
            let pattern = new RegExp("^0\\d{9}$");
            if ($('#' + key).val() != '' && !validatePattern(key, pattern)) {
                rs = false;
            }
        }
        if (keyRequired.includes(key)) {
            if (!validateRequired(key)) {
                rs = false;
            }
        }
    });

    return rs;
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
