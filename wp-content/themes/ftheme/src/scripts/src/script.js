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

    const demoPopup = {
        init: function() {
            this.toggle();
        },
        toggle: function() {
            const demoButton = document.querySelectorAll('.js-demo-button');
            const demoModal = document.querySelector('.js-demo-modal');
            const demoClose = document.querySelector('.js-demo-close');

            demoButton.forEach(button => {
                button.addEventListener('click', function() {
                    demoModal.classList.add('-active');
                });
            });

            demoClose.addEventListener('click', function() {
                demoModal.classList.remove('-active');
            });
        },
    };

    const freePopup = {
        init: function() {
            this.toggle();
        },
        toggle: function() {
            const freeButton = document.querySelectorAll('.js-free-button');
            const freeModal = document.querySelector('.js-free-modal');
            const freeClose = document.querySelector('.js-free-close');

            freeButton.forEach(button => {
                button.addEventListener('click', function() {
                    freeModal.classList.add('-active');

                });
            });

            freeClose.addEventListener('click', function() {
                freeModal.classList.remove('-active');
            });
        },
    };

    const checklistPopup = {
        init: function() {
            this.toggle();
        },
        toggle: function() {
            const checklistButton = document.querySelectorAll('.js-checklist-button');
            const checklistModal = document.querySelector('.js-checklist-modal');
            const checklistClose = document.querySelector('.js-checklist-close');

            checklistButton.forEach(button => {
                button.addEventListener('click', function() {
                    checklistModal.classList.add('-active');
                });
            });

            checklistClose.addEventListener('click', function() {
                checklistModal.classList.remove('-active');
            });
        },
    };

    $(document).ready(function() {

        AOS.init({
            once: true
        });


        dropdown.init();
        navigation.init();
        demoPopup.init();
        freePopup.init();
        checklistPopup.init();


        if (document.querySelector('.js-popular-button')) {

            posts.init();
        }





    });

    $(window).on('load', function() {

    });
}(jQuery));