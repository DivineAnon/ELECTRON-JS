require('./bootstrap');

require('../../public/js/jquery-3.4.0.min.js');
require('../../public/js/jquery.dataTables.min.js');
require('../../public/plugin/DataTables-Bootstrap4/js/dataTables.bootstrap4.min.js');
require('../../public/plugin/repeatable/jquery.repeatable.js');
require('../../public/js/popper.min.js');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
//Sweet Alert
import Swal from 'sweetalert2';
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

Vue.use(VueAxios, axios, VueRouter);

Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);

const app = new Vue({
    el: '#app'
});
