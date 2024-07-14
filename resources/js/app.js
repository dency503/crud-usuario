
import $ from 'jquery';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';
import 'bootstrap/dist/css/bootstrap.min.css';

//import 'bootstrap';
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

window.$ = window.jQuery = $;
window.toastr = toastr;

