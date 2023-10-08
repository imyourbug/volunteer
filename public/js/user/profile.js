var btnProfile = $(".btn-profile");
var btnInfo = $(".btn-info");
var btnLog = $(".btn-log");
var formProfile = $(".form-profile");
var formInfo = $(".form-info");
var formLog = $(".form-log");
//
var btnDetail = $(".btn-detail");
var btnParent = $(".btn-parent");
var btnMember = $(".btn-member");
var formDetail = $(".form-detail");
var formParent = $(".form-parent");
var formMember = $(".form-member");
//
var btnAward = $(".btn-award");
var btnCause = $(".btn-cause");
var btnLog = $(".btn-log");
var formAward = $(".form-award");
var formCause = $(".form-cause");
var formLog = $(".form-log");

function load() {
    $(".btn-type").css("background-color", "white");
    $(".btn-type").css("color", "black");
    $(".form-type").css("display", "none");
}

load();
btnProfile.css("background-color", "#000E7B");
btnProfile.css("color", "white");
formProfile.css("display", "block");

btnProfile.on("click", function () {
    load();
    btnProfile.css("background-color", "#000E7B");
    btnProfile.css("color", "white");
    formProfile.css("display", "block");
});

btnInfo.on("click", function () {
    load();
    btnInfo.css("background-color", "#000E7B");
    btnInfo.css("color", "white");
    formInfo.css("display", "block");
});

btnLog.on("click", function () {
    load();
    btnLog.css("background-color", "#000E7B");
    btnLog.css("color", "white");
    formLog.css("display", "block");
});
//
function loadInfo() {
    $(".btn-type-info").css("background-color", "white");
    $(".btn-type-info").css("color", "black");
    $(".form-type-info").css("display", "none");
}

$(".btn-type-info").css("background-color", "white");
$(".btn-type-info").css("color", "black");

loadInfo();
btnDetail.css("background-color", "#000E7B");
btnDetail.css("color", "white");
formDetail.css("display", "block");

btnDetail.on("click", function () {
    loadInfo();
    btnDetail.css("background-color", "#000E7B");
    btnDetail.css("color", "white");
    formDetail.css("display", "block");
});

btnParent.on("click", function () {
    loadInfo();
    btnParent.css("background-color", "#000E7B");
    btnParent.css("color", "white");
    formParent.css("display", "block");
});

btnMember.on("click", function () {
    loadInfo();
    btnMember.css("background-color", "#000E7B");
    btnMember.css("color", "white");
    formMember.css("display", "block");
});

//
function loadLog() {
    $(".btn-type-log").css("background-color", "white");
    $(".btn-type-log").css("color", "black");
    $(".form-type-log").css("display", "none");
}

$(".btn-type-log").css("background-color", "white");
$(".btn-type-log").css("color", "black");

loadLog();
btnAward.css("background-color", "#000E7B");
btnAward.css("color", "white");
formAward.css("display", "block");

btnAward.on("click", function () {
    loadLog();
    btnAward.css("background-color", "#000E7B");
    btnAward.css("color", "white");
    formAward.css("display", "block");
});

btnCause.on("click", function () {
    loadLog();
    btnCause.css("background-color", "#000E7B");
    btnCause.css("color", "white");
    formCause.css("display", "block");
});

btnLog.on("click", function () {
    loadLog();
    btnLog.css("background-color", "#000E7B");
    btnLog.css("color", "white");
    formLog.css("display", "block");
});

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

function validateRequired(id) {
    let value = $("#" + id).val();
    if (value == '' || value == undefined) {
        $(".err-" + id).text(
            capitalizeFirstLetter(id) + " is required"
        );
        return false;

    }
    $(".err-" + id).text('');
    return true;
}

function validatePattern(id, pattern) {
    let value = $("#" + id).val();
    if (!pattern.test(value)) {
        $(".err-" + id).text(
            capitalizeFirstLetter(id) + " is not valid format"
        );
        return false;
    }
    $(".err-" + id).text('');
    return true;
}

$(".TextInput_text-input__CQMEM").on("input", function (event) {
    let id = event.target.id;
    if (id != "phone" && id != "email") {
        validateRequired(id);
    }
    if (id == "phone") {
        let pattern = new RegExp("^0\\d{9}$");
        validatePattern(id, pattern);
    }
    if (id == "email") {
        let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
        validatePattern(id, pattern);
    }
});

$(".btn-save").on("click", function (event) {
    event.preventDefault();
    keys.forEach((key) => {
        if (key == "phone" && $('#' + key).val() != '') {
            let pattern = new RegExp("^0\\d{9}$");
            rs = validatePattern(key, pattern);
        }
        else if (key == "email" && $('#' + key).val() != '') {
            let pattern = new RegExp("^([a-zA-Z0-9])*(@gmail.com)");
            rs = validatePattern(key, pattern);
        } else {
            if (key != "email" && key != "phone") {
                rs = validateRequired(key);
            }
        };
    });
    if (rs) {
        $.ajax({
            type: "POST",
            data: $('#form-volunteer').serialize(),
            url: '/volunteers/create',
        }).then((response) => {
            location.href = '/profile/index';
        })
    }
});

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
