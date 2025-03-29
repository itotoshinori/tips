import './bootstrap';
import $ from 'jquery';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.$ = $;
window.jQuery = $;

$(document).ready(function() {
    console.log("jQuery is loaded!");
});
