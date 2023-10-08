var keys = ["email", "password"];

$("#email").on("input", function () {
    if (validateRequired("email")) {
        if ($("#email").val() != "") {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            validatePattern("email", pattern);
        } else $(".err-email").text("");
    }
});

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

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

$(".btn-forgot").on("click", function (event) {
    event.preventDefault();
    let rs = true;
    let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
    if (!validateRequired("email") || !validatePattern("email", pattern)) {
        rs = false;
    }
    if (rs) {
        console.log("call api");
        $('.btn-submit').click();
    }
});
