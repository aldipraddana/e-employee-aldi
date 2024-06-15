import './bootstrap';

import moment from 'moment';
window.moment = moment;

import jQuery from 'jquery'; 
window.$ = window.jQuery = jQuery;

$('.logout-button').on('click', function() {
    alert("Under Maintenance");
})