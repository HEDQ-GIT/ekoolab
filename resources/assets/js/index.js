new Vue ({
    el: 'body',
    ready: function() {

        $('#paper').teletype({
            text: [
                'Choose Ekoolab, we will give you the best IT service in Singapore!',
                '选择Ekoolab，我们将给你新加坡最划算IT的服务！'
            ]
        });

        $('#cursor').teletype({
            text: ['|', ' '],
            delay: 0,
            pause: 200
        });

        var wow = new WOW(
            {
                boxClass: 'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 0,          // distance to the element when triggering the animation (default is 0)
                mobile: true,       // trigger animations on mobile devices (default is true)
                live: true,       // act on asynchronously loaded content (default is true)
                callback: function (box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                }
            }
        );
        wow.init();

        $('.slider').slider({
            full_width: true,
            //height: '600px'
        });
    }

});