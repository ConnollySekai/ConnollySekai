/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VModal from 'vue-js-modal';

import Form from 'form-backend-validation';

import animation from './animations';

import scrollObserver from './scrollObserver';

Vue.use(VModal);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        form: new Form({
            name:'',
            email: '',
            message: ''
        }),
        form_success: false
    },
    methods: {
        async handleSubmit() {
            
            this.form.populate({
                valid_from: document.getElementById('valid_from').value,
                itadakiru_hp: document.getElementById('itadakiru_hp').value

            });

            try {
                const response = await this.form.post('/inquiry');

    
                if (response.success === true) {
                    this.form_success = true;
                }
            } catch (error) {

                this.form_success = false;
            } 
            
        },
        showContactForm() {
            this.$modal.show('contact-modal');
        }
    },
    mounted() {

        animation.hero();

        scrollObserver.init(animation);
    }
});
