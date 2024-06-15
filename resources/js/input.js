import "daterangepicker";

//select config
$(function () {
    $(".select2-selection--single").css("height", "35px");
    $(".select2-selection__arrow").css("margin-top", "3px");
    $(".select2-selection__rendered").css("margin-top", "3px");
});

$(".select-employee-job--select2").select2();
$(".select-workplace--select2").select2();

//date range picker

$(function () {
    $('.date-daterangepicker').daterangepicker(
        {
            opens: "left",
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        }
    );
});
