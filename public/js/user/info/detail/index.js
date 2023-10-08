// validate
var keys = [
    "first_name",
    "last_name",
    "pronouns",
    "street",
    "ward",
    "province",
    "birth_date",
    "phone",
    "school",
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
    if (id != "pronouns" && id != "birth_date") {
        validateRequired(id);
    }
    if (id == "phone") {
        let pattern = new RegExp("^0\\d{9}$");
        validatePattern(id, pattern);
    }
});

$(".btn-save").on("click", function (event) {
    event.preventDefault();
    if (checkSave()) {
        $.ajax({
            type: "POST",
            data: $("#form-save").serialize(),
            url: "/profile/info/detail/update",
        }).then((response) => {
            location.href = "/profile/info/detail";
        });
    }
});

function checkSave() {
    let rs = true;
    keys.forEach((key) => {
        if (key != "pronouns" && key != "birth_date") {
            if (!validateRequired(key)) {
                rs = false;
            }
        }
        if (key == "phone") {
            if ($("#" + key).val() != "") {
                let pattern = new RegExp("^0\\d{9}$");
                if (!validatePattern(key, pattern)) {
                    rs = false;
                }
            } else {
                if (!validateRequired(key)) {
                    rs = false;
                }
            }
        }
    });
    return rs;
}

var keys_pass = ["password", "confirm_password"];
var messagePassword =
    "needs minimum 6 characters, with upper and lowercase and a number or a symbol.";

function validateMatch(id1, id2, message = "must be same") {
    let val1 = $("#" + id1).val();
    let val2 = $("#" + id2).val();
    if (val1.localeCompare(val2) != 0) {
        $(".err-match-confirm_password").text(
            "Password confirm" + ` ${message}`
        );
        return false;
    }
    $(".err-match-confirm_password").text("");
    return true;
}

$(".txt-password").on("input", function (event) {
    let id = event.target.id;
    let pattern = new RegExp(
        "^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&])[A-Za-z\\d@$!%*?&]{8,}$"
    );
    if (validateRequired(id)) {
        validatePattern(id, pattern, messagePassword);
    }
});

$(".btn-change").on("click", function (event) {
    event.preventDefault();
    if (checkChange()) {
        $.ajax({
            type: "POST",
            data: $("#form-change").serialize(),
            url: "/change_password",
        }).then((response) => {
            location.href = "/profile/info/detail";
        });
    }
});

function checkChange() {
    let rs = true;
    keys_pass.forEach((key) => {
        let pattern = new RegExp(
            "^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&])[A-Za-z\\d@$!%*?&]{8,}$"
        );
        if (
            !validateRequired(key) ||
            !validatePattern(key, pattern, messagePassword) ||
            !validateMatch("confirm_password", "password")
        ) {
            rs = false;
        }
    });

    return rs;
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
