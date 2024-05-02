
            if (biw < 850) {
                window.addEventListener('load', function() {
                    var box1 = document.getElementById('mhandle');
                    var startx = 0;
                    var dirmove = 0;
                    var dist = 0;
                    var distst = 0;
                    box1.addEventListener('touchstart', function(e) {
                        distst = 0;
                        var touchobj = e.changedTouches[0];
                        startx = parseInt(touchobj.clientX);
                        $("div#mhandle").removeClass("mhandleout").addClass("mhandlehover");
                        e.preventDefault()
                    },passiveSupported ? { passive: true } : false, !1);
                    box1.addEventListener('touchmove', function(e) {
                        var touchobj = e.changedTouches[0];
                        dist = parseInt(touchobj.clientX) - startx;
                        dirmove = 1;
                        if (dist > 300) distst = dist;
                        e.preventDefault()
                    },passiveSupported ? { passive: true } : false, !1);
                    box1.addEventListener('touchend', function(e) {
                        $("div#mhandle").removeClass("mhandlehover").addClass("mhandleout");
                        if (dirmove == 1 && distst > 300) {
                            if (menuopened) {
                                closeMenu();
                                $(dimOverlay).fadeOut();
                                $(".menu-items").slideUp();
                                $(".dropdown-heading").removeClass("active")
                            } else {
                                $(hamburger).toggleClass("active");
                                openMenu();
                                $(dimOverlay).fadeIn()
                            }
                        }
                        e.preventDefault()
                    },passiveSupported ? { passive: true } : false, !1);
                    var swponj = document.getElementById('mainmenu');
                    var startPoint = {};
                    var nowPoint;
                    var ldelay;
                    swponj.addEventListener('touchstart', function(event) {
                        startPoint.x = event.changedTouches[0].pageX;
                        startPoint.y = event.changedTouches[0].pageY;
                        ldelay = new Date()
                    },passiveSupported ? { passive: true } : false, !1);
                    swponj.addEventListener('touchmove', function(event) {}, !1);
                    swponj.addEventListener('touchend', function(event) {
                        nowPoint = event.changedTouches[0];
                        var xAbs = Math.abs(startPoint.x - nowPoint.pageX);
                        var yAbs = Math.abs(startPoint.y - nowPoint.pageY);
                        if (xAbs > 30 || yAbs > 30) {
                            if (xAbs > yAbs) {
                                if (nowPoint.pageX < startPoint.x) {
                                    if (menuopened) {
                                        closeMenu();
                                        $(dimOverlay).fadeOut();
                                        $(".menu-items").slideUp();
                                        $(".dropdown-heading").removeClass("active")
                                    } else {
                                        $(hamburger).toggleClass("active");
                                        openMenu();
                                        $(dimOverlay).fadeIn()
                                    }
                                } else {}
                            } else {
                                if (nowPoint.pageY < startPoint.y) {} else {}
                            }
                        }
                    },passiveSupported ? { passive: true } : false, !1)
                },passiveSupported ? { passive: true } : false, !1)
            }