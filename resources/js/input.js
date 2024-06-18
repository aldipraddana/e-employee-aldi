import "daterangepicker";
// import Dropzone from "dropzone";
import "bootstrap-fileinput";

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
                format: 'DD-MMM-YYYY'
            }
        }
    );
});

//fileinput js
$("input[type=file]").fileinput();

//drop zone
// let myDropzone = new Dropzone(".form--input-employee");
// Dropzone.options.myDropzone = {
//     uploadMultiple: true,
//     maxFilesize: 4194304, // in byte
// }
// myDropzone.on("addedfile", file => {
//   console.log(`File added: ${file.name}`);
// });
