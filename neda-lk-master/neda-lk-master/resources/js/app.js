/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


(function ($, vue) {
        'use strict';

        function boot() {
            console.log('Welcome to NEDA.lk');

            if ($('#featuredLinks').length) {
                $('#featuredLinks').owlCarousel({
                    loop: false,
                    margin: 0,
                    nav: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            }

            if ($('#featuredArticles').length) {
                $('#featuredArticles').owlCarousel({
                    loop: false,
                    margin: 0,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            }

            if ($('#ImportantLinks').length) {
                $('#ImportantLinks').owlCarousel({
                    margin: 0,
                    autoplay: false,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            }


            $('#video-modal').on('shown.bs.modal', function (e) {
                if ($(e.relatedTarget).data('src')) {
                    $("#video").attr('src', $(e.relatedTarget).data('src') + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
                }
            })

            $('#video-modal').on('hide.bs.modal', function (e) {
                $("#video").attr('src', '');
            });

            $('.gallery-img').click(function () {

                var img_index = $(this).data('index');

                $('.photo-gallery-item').each(function (index) {
                    if (index == img_index) {

                        $(this).addClass('active');
                    } else {

                        $(this).removeClass('active');
                    }
                });
            });
        }

        // Mobile Menu
        document.addEventListener(
            "DOMContentLoaded", () => {
                if ($('#mobileMenu').length) {
                    const menu = new MmenuLight(
                        document.querySelector("#mobileMenu")
                    );

                    const navigator = menu.navigation();
                    const drawer = menu.offcanvas();

                    document.querySelector('a[href="#mobileMenu"]')
                        .addEventListener('click', (evnt) => {
                            evnt.preventDefault();
                            drawer.open();
                        });
                }
            }
        );


        $(document).ready(boot);

    }

)(jQuery, window.vue);

