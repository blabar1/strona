jQuery(document).ready(function ($) {
    function morphDropdown(element) {
        this.element = element;
        this.mainNavigation = this.element.find('.main-nav');
        this.mainNavigationItems = this.mainNavigation.find('.has-dropdown');
        this.dropdownList = this.element.find('.dropdown-list');
        this.dropdownWrappers = this.dropdownList.find('.dropdown');
        this.dropdownItems = this.dropdownList.find('.content');
        this.dropdownBg = this.dropdownList.find('.bg-layer');
        this.mq = this.checkMq();
        this.bindEvents();
    }

    morphDropdown.prototype.checkMq = function () {
        //check screen size
        var self = this;
        return window.getComputedStyle(self.element.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
    };

    morphDropdown.prototype.bindEvents = function () {
        var self = this;
        //hover over an item in the main navigation
        this.mainNavigationItems.mouseenter(function (event) {
            //hover over one of the nav items -> show dropdown
            self.showDropdown($(this));
        }).mouseleave(function () {
            setTimeout(function () {
                //if not hovering over a nav item or a dropdown -> hide dropdown
                if (self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0) self.hideDropdown();
            }, 50);
        });

        //hover over the dropdown
        this.dropdownList.mouseleave(function () {
            setTimeout(function () {
                //if not hovering over a dropdown or a nav item -> hide dropdown
                (self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0) && self.hideDropdown();
            }, 50);
        });

        //click on an item in the main navigation -> open a dropdown on a touch device
        this.mainNavigationItems.on('touchstart', function (event) {
            var selectedDropdown = self.dropdownList.find('#' + $(this).data('content'));
            if (!self.element.hasClass('is-dropdown-visible') || !selectedDropdown.hasClass('active')) {
                event.preventDefault();
                self.showDropdown($(this));
            }
        });

        //on small screens, open navigation clicking on the menu icon
        this.element.on('click', '.nav-trigger', function (event) {
            event.preventDefault();
            self.element.toggleClass('nav-open');
        });
    };

    morphDropdown.prototype.showDropdown = function (item) {
        this.mq = this.checkMq();
        if (this.mq == 'desktop') {
            var self = this;
            var selectedDropdown = this.dropdownList.find('#' + item.data('content')),
                selectedDropdownHeight = selectedDropdown.innerHeight(),
                selectedDropdownWidth = selectedDropdown.children('.content').innerWidth(),
                selectedDropdownLeft = item.offset().left + item.innerWidth() / 2 - selectedDropdownWidth / 2;

            //update dropdown position and size
            this.updateDropdown(selectedDropdown, parseInt(selectedDropdownHeight), selectedDropdownWidth, parseInt(selectedDropdownLeft));
            //add active class to the proper dropdown item
            this.element.find('.active').removeClass('active');
            selectedDropdown.addClass('active').removeClass('move-left move-right').prevAll().addClass('move-left').end().nextAll().addClass('move-right');
            item.addClass('active');
            //show the dropdown wrapper if not visible yet
            if (!this.element.hasClass('is-dropdown-visible')) {
                setTimeout(function () {
                    self.element.addClass('is-dropdown-visible');
                }, 10);
            }
        }
    };

    morphDropdown.prototype.updateDropdown = function (dropdownItem, height, width, left) {
        this.dropdownList.css({
            '-moz-transform': 'translateX(' + left + 'px)',
            '-webkit-transform': 'translateX(' + left + 'px)',
            '-ms-transform': 'translateX(' + left + 'px)',
            '-o-transform': 'translateX(' + left + 'px)',
            'width': width + 'px',
            'height': height + 'px'
        });

        this.dropdownBg.css({
            '-moz-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-webkit-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-ms-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
            '-o-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
        });
    };

    morphDropdown.prototype.hideDropdown = function () {
        this.mq = this.checkMq();
        if (this.mq == 'desktop') {
            this.element.removeClass('is-dropdown-visible').find('.active').removeClass('active').end().find('.move-left').removeClass('move-left').end().find('.move-right').removeClass('move-right');
        }
    };

    morphDropdown.prototype.resetDropdown = function () {
        this.mq = this.checkMq();
        if (this.mq == 'mobile') {
            this.dropdownList.removeAttr('style');
        }
    };

    var morphDropdowns = [];
    if ($('.cd-morph-dropdown').length > 0) {
        $('.cd-morph-dropdown').each(function () {
            //create a morphDropdown object for each .cd-morph-dropdown
            morphDropdowns.push(new morphDropdown($(this)));
        });

        var resizing = false;

        //on resize, reset dropdown style property
        updateDropdownPosition();
        $(window).on('resize', function () {
            if (!resizing) {
                resizing = true;
                (!window.requestAnimationFrame) ? setTimeout(updateDropdownPosition, 300) : window.requestAnimationFrame(updateDropdownPosition);
            }
        });

        function updateDropdownPosition() {
            morphDropdowns.forEach(function (element) {
                element.resetDropdown();
            });

            resizing = false;
        };
    }
});

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    var w = window.innerWidth;
    let menu_hidding = document.getElementById("c_menu_list_hidding");
    var $menu_hidding = $("#c_menu_list_hidding");
    if (currentScrollPos === 0) {
        menu_hidding.style.top = "-100px";
    } else if ($menu_hidding.is(":hover")) {
        $menu_hidding.css("top", "-100px");
    } else if (prevScrollpos < currentScrollPos) {
        $("#c_menu_list_hidding").hover(function () {
            $("#c_menu_list_hidding").css('top', '-100px');
        });
        menu_hidding.style.top = "-100px";
    } else {
        menu_hidding.style.top = "-190px";
    }
    prevScrollpos = currentScrollPos;

    menu_hidding.onmouseover = function () { mouseOver() };

    function mouseOver() {
        menu_hidding.style.top = "-100px";
    }

}

$(document).ready(function () {
    $(".has-dropdown").hover(function () {
        $(".overlay").toggle();
    });
    if ($(window).width() >= 1183) {

        $(".dropdown-list").hover(function () {

            $(".overlay").toggle();
        });

    } else {

    }
    $(".nav-trigger").click(function () {
        $(".overlay").toggle();
        if ($(".nav-trigger").is("#active") == false) {

            $('.morph-dropdown-wrapper').show();
            $('.morph-dropdown-wrapper').removeClass("animation-left");
            $('.morph-dropdown-wrapper').toggleClass("animation-right");
            $('.nav-trigger').attr('id', "active");
        } else {
            $('.morph-dropdown-wrapper').show();

            $('.morph-dropdown-wrapper').toggleClass("animation-left");
            $('.morph-dropdown-wrapper').removeClass("animation-right");
            $('.nav-trigger').attr('id', "not active");

        }
    });
});

$(document).ready(function () {
    $(window).resize(function () {
        if ($(window).width() > 900) {
            $('.morph-dropdown-wrapper').removeClass("animation-left");
            $('.morph-dropdown-wrapper').removeClass("animation-right");
            $(".overlay").hide();
            $('.morph-dropdown-wrapper').show();
        }
        if ($(window).width() < 900) {
            $('.morph-dropdown-wrapper').hide();
            $('.morph-dropdown-wrapper').removeClass("animation-left");
            $('.morph-dropdown-wrapper').removeClass("animation-right");
        }
    });
});

$(document).ready(function () {
    $(window).load(function () {
    $('#c_menu_list_hidding').show();
    });
});