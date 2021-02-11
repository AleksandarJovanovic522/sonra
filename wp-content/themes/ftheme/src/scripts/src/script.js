/* eslint-disable no-console */

(function($) {
    'use strict';


    const dropdown = {
        init: function() {
            this.showHide();
        },
        showHide: function() {
            var buttons = document.querySelectorAll('.js-nav-drop');
            buttons.forEach(function(button) {
                window.addEventListener('click', function(e) {
                    if (e.target.parentElement.classList.contains('js-nav-drop')) {
                        e.preventDefault();
                    }



                    var modal = button.querySelector('.sub-menu');
                    var buttonLink = button.querySelector('a');
                    var hamburgerLink = document.querySelector('.js-hamburger');
                    var hamburgerClicked = hamburgerLink.contains(e.target);
                    var buttonLinkClicked = buttonLink.contains(e.target);
                    var modalClicked = modal.contains(e.target);
                    var buttonClicked = button.contains(e.target);
                    var modalClassList = modal.classList;
                    var modalActive = modalClassList.contains('-active');

                    if (buttonLinkClicked) {
                        button.classList.toggle('-active');
                        if (modal.style.maxHeight) {
                            modal.style.maxHeight = null;
                        } else {
                            modal.style.maxHeight = modal.scrollHeight + 'px';
                        }
                    }

                    if (hamburgerClicked) {

                        button.classList.remove('-active');
                        modal.style.maxHeight = null;
                    }


                    if (window.innerWidth > 992) {


                        if (modalActive && !modalClicked) {
                            modalClassList.remove('-active');
                            button.classList.remove('-active');


                        } else if (!modalActive && buttonClicked) {
                            modalClassList.add('-active');
                            button.classList.add('-active');

                        }
                    }
                });
            });


        },
    };


    const navigation = {
        init: function() {
            this.toggle();
        },
        toggle: function() {
            var hamburger = document.querySelector('.js-hamburger');
            var nav = document.querySelector('.js-nav');

            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('-active');
                nav.classList.toggle('-active');

            });





        },
    };

    const posts = {
        init: function() {
            this.toggle();
        },
        toggle: function() {
            const popularButton = document.querySelector('.js-popular-button');
            const latestButton = document.querySelector('.js-latest-button');
            const popularPosts = document.querySelector('.js-popular');
            const latestPosts = document.querySelector('.js-latest');

            popularButton.addEventListener('click', function() {
                popularButton.classList.add('-active');
                popularPosts.classList.add('-active');
                latestButton.classList.remove('-active');
                latestPosts.classList.remove('-active');
            });

            latestButton.addEventListener('click', function() {
                popularButton.classList.remove('-active');
                popularPosts.classList.remove('-active');
                latestButton.classList.add('-active');
                latestPosts.classList.add('-active');
            });
        },
    };

    $(document).ready(function() {

        AOS.init({
            once: true
        });


        dropdown.init();
        navigation.init();

        if (document.querySelector('.js-popular-button')) {

            posts.init();
        }





    });

    $(window).on('load', function() {

    });
}(jQuery));