require('./bootstrap');

$(document).ready(function () {
    url = new URL(window.location.href);
    if (url.searchParams.get('type')) {
        $("#"+url.searchParams.get('type')+"-tab").addClass("active");
    }
    else {
        $("#all-tab").addClass("active");
    }

    $(".report-btn").click(function () {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            url: "/places/report",
            type: "POST",
            data: {
                place_id: $(this).data("value"),
            },
            success: function (data) {
                alert("Успешно поднесено барање! Истото ќе биде разгледано.")
            },
            error: function (data) {
                alert("Неуспешно поднесено барање! Ве молиме обидете се подоцна.")
            }
        });
    });
});
