
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Font Awesome
 */
require('@fortawesome/fontawesome');
require('@fortawesome/fontawesome-free-solid');
require('@fortawesome/fontawesome-free-regular');
require('@fortawesome/fontawesome-free-brands');

/**
 * https://github.com/MohammadYounes/AlertifyJS
 */
window.alertify = require('alertifyjs');
window.alertify.defaults.transition = 'slide';
window.alertify.defaults.closable = false;
window.alertify.defaults.closableByDimmer = false;
window.alertify.defaults.glossary.title = '';
window.alertify.defaults.glossary.ok = '确定';
window.alertify.defaults.glossary.cancel = '取消';

/**
 * https://github.com/gromo/jquery.scrollbar
 */
require('jquery.scrollbar');

/*
 * https://github.com/jquery/jquery-ui
 *
 * ===================================
 * Other Url:
 *   1.https://stackoverflow.com/questions/33998262/jquery-ui-and-webpack-how-to-manage-it-into-module
 *   2.https://github.com/JeffreyWay/laravel-mix/blob/master/docs/jquery-ui.md
 *   3.https://github.com/jzaefferer/webpack-jquery-ui
 * ===================================
 */
require('jquery-ui');

/**
 * https://github.com/jquery-validation/jquery-validation
 */
require('jquery-validation');