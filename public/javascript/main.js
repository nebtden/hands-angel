(function (a) {
    var n = {
        Android: function () {
            return navigator.userAgent.match(/Android/i)
        }, BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i)
        }, iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i)
        }, Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i)
        }, Windows: function () {
            return navigator.userAgent.match(/IEMobile/i)
        }, any: function () {
            return (n.Android() || n.BlackBerry() || n.iOS() || n.Opera() || n.Windows())
        }
    };
    var r = function () {
        var y = "desktop";
        a(window).on("load resize", function () {
            var B = "desktop";
            if (matchMedia("only screen and (max-width: 991px)").matches) {
                B = "mobile"
            }
            if (B !== y) {
                y = B;
                if (B === "mobile") {
                    var A = a("#mainnav").attr("id", "mainnav-mobi").hide();
                    var C = a("#mainnav-mobi").find("li:has(ul)");
                    a("#header").after(A);
                    C.children("ul").hide();
                    C.children("a").after('<span class="btn-submenu"></span>');
                    a(".btn-menu").removeClass("active");
                    a("#mainnav-mobi").children(".menu").append('<li class="button"><a class="flat-button" href="page-addlisting.html">Add Listing</a></li>')
                } else {
                    var z = a("#mainnav-mobi").attr("id", "mainnav").removeAttr("style");
                    z.find(".submenu").removeAttr("style");
                    a("#header").find(".nav-wrap").append(z);
                    a(".btn-submenu").remove();
                    a(".button").remove()
                }
            }
        });
        a(".btn-menu").on("click", function () {
            a("#mainnav-mobi").slideToggle(300);
            a(this).toggleClass("active")
        });
        a(document).on("click", "#mainnav-mobi li .btn-submenu", function (z) {
            a(this).toggleClass("active").next("ul").slideToggle(300);
            z.stopImmediatePropagation()
        })
    };
    var l = function () {
        if (a("body").hasClass("header_sticky")) {
            var A = a(".header");
            if (A.size() != 0) {
                var B = a(".header").offset().top,
                    y = a(".header").height(),
                    z = a("<div />", {
                        height: y
                    }).insertAfter(A);
                z.hide();
                a(window).on("load scroll", function () {
                    if (a(window).scrollTop() > B + 120) {
                        a(".header").addClass("downscrolled");
                        z.show()
                    } else {
                        a(".header").removeClass("header-small downscrolled");
                        z.hide()
                    } if (a(window).scrollTop() > 500) {
                        a(".header").addClass("header-small upscrolled")
                    } else {
                        a(".header").removeClass("upscrolled")
                    }
                })
            }
        }
    };
    var e = function () {
        a('[data-waypoint-active="yes"]').waypoint(function () {
            a(this).trigger("on-appear")
        }, {
            offset: "90%",
            triggerOnce: true
        });
        a(window).on("load", function () {
            setTimeout(function () {
                a.waypoints("refresh")
            })
        })
    };
    var h = function () {
        a(".flat-counter").on("on-appear", function () {
            a(this).find(".numb-count").each(function () {
                var z = parseInt((a(this).attr("data-to")), 10),
                    y = parseInt((a(this).attr("data-speed")), 10);
                if (a().countTo) {
                    a(this).countTo({
                        to: z,
                        speed: y
                    })
                }
            })
        })
    };
    var b = function () {
        a("#contactform").each(function () {
            a(this).validate({
                submitHandler: function (z) {
                    var y = a(z),
                        B = y.serialize(),
                        A = a("<div />", {
                            "class": "loading"
                        });
                    a.ajax({
                        type: "POST",
                        url: y.attr("action"),
                        data: B,
                        beforeSend: function () {
                            y.find(".form-submit").append(A)
                        }, success: function (D) {
                            var E, C;
                            if (D === "Success") {
                                E = "Message Sent Successfully To Email Administrator. ( You can change the email management a very easy way to get the message of customers in the user manual )";
                                C = "msg-success"
                            } else {
                                E = "Error sending email.";
                                C = "msg-error"
                            }
                            y.prepend(a("<div />", {
                                "class": "flat-alert " + C,
                                text: E
                            }).append(a('<a class="close" href="#"><i class="fa fa-close"></i></a>')));
                            y.find(":input").not(".submit").val("")
                        }, complete: function (E, D, C) {
                            y.find(".loading").remove()
                        }
                    })
                }
            })
        })
    };
    var d = function () {
        a(document).on("click", ".close", function (y) {
            a(this).closest(".flat-alert").remove();
            y.preventDefault()
        })
    };
    var c = {
        obj: {
            subscribeEmail: a("#subscribe-email"),
            subscribeButton: a("#subscribe-button"),
            subscribeMsg: a("#subscribe-msg"),
            subscribeContent: a("#subscribe-content"),
            dataMailchimp: a("#subscribe-form").attr("data-mailchimp"),
            success_message: '<div class="notification_ok">Thank you for joining our mailing list! Please check your email for a confirmation link.</div>',
            failure_message: '<div class="notification_error">Error! <strong>There was a problem processing your submission.</strong></div>',
            noticeError: '<div class="notification_error">{msg}</div>',
            noticeInfo: '<div class="notification_error">{msg}</div>',
            basicAction: "/mail",
            mailChimpAction: "/mail"
        },
        eventLoad: function () {
            var y = c.obj;
            a(y.subscribeButton).on("click", function () {
                if (window.ajaxCalling) {
                    return
                }
                var z = y.dataMailchimp === "true";
                if (z) {
                    c.ajaxCall(y.mailChimpAction)
                } else {
                    c.ajaxCall(y.basicAction)
                }
            })
        }, ajaxCall: function (y) {
            window.ajaxCalling = true;
            var A = c.obj;
            var z = A.subscribeMsg.html("").hide();
            a.ajax({
                url: y,
                type: "POST",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    email: A.subscribeEmail.val()
                },
                success: function (C, D, B) {
                    if (C.status) {
                        A.subscribeContent.fadeOut(500, function () {
                            z.html(A.success_message).fadeIn(500)
                        })
                    } else {

                        z.fadeIn(500)
                    }
                }, error: function (C, D, B) {
                    alert(C.responseJSON.errors['email'][0]);
                    //z.html(A.noticeError.replace("{msg}", "Error! <strong>C.responseJSON.errors['email'][0]</strong>"));
                }, complete: function (B) {
                    window.ajaxCalling = false
                }
            })
        }
    };
    var j = function () {
        if (a().gmap3) {
            a(".maps").gmap3({
                map: {
                    options: {
                        zoom: 14,
                        mapTypeId: "ListAny",
                        mapTypeControlOptions: {
                            mapTypeIds: ["ListAny", google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                        },
                        scrollwheel: false
                    }
                },
                getlatlng: {
                    address: "PO Box 97845 Baker st. 567, Los Angeles, California, United States",
                    callback: function (y) {
                        if (!y) {
                            return
                        }
                        a(this).gmap3("get").setCenter(new google.maps.LatLng(y[0].geometry.location.lat(), y[0].geometry.location.lng()));
                        a(this).gmap3({
                            marker: {
                                latLng: y[0].geometry.location,
                                options: {
                                    icon: "images/map.png"
                                },
                            }
                        })
                    }
                },
                styledmaptype: {
                    id: "ListAny",
                    options: {
                        name: "ListAny Map"
                    },
                    styles: [{
                        featureType: "administrative",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "labels.text",
                        stylers: [{
                            saturation: "-100"
                        }, {
                            color: "#ef9797"
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            saturation: "-100"
                        }]
                    }, {
                        featureType: "landscape.man_made",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "landscape.natural",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }]
                    }, {
                        featureType: "landscape.natural",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            color: "#e5e5e5"
                        }]
                    }, {
                        featureType: "landscape.natural.terrain",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "off"
                        }, {
                            color: "#c0e8e8"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry.stroke",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [{
                            lightness: 100
                        }, {
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "labels",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.highway",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "on"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "labels.text",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.local",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }, {
                            weight: "0.50"
                        }]
                    }, {
                        featureType: "transit",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "transit.line",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }, {
                            lightness: 700
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "labels.text.fill",
                        stylers: [{
                            lightness: "100"
                        }, {
                            weight: "1.41"
                        }, {
                            saturation: "-100"
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "simplified"
                        }, {
                            saturation: "-100"
                        }, {
                            lightness: "29"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                            color: "#7dcdcd"
                        }, {
                            visibility: "off"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "geometry",
                        stylers: [{
                            lightness: "48"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            lightness: "84"
                        }, {
                            color: "#e7e7e7"
                        }]
                    }]
                },
            })
        }
    };
    var i = function () {
        if (a().gmap3) {
            var y = JSON.parse('[{"address":"208 W 70th St, Thành phố New York, Tiểu bang New York, Hoa Kỳ","content":""}]');
            var z = JSON.parse('[{"address":"Soco, Myrtle Avenue, Brooklyn, Tiểu bang New York, Hoa Kỳ","content":""}]');
            a(".maps").gmap3({
                map: {
                    options: {
                        center: [40.7775126, -73.9855094],
                        mapTypeId: "ListAny",
                        mapTypeControlOptions: {
                            mapTypeIds: ["ListAny", google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                        },
                        zoom: 14,
                    },
                    navigationControl: true,
                    scrollwheel: false,
                    streetViewControl: true
                }
            });
            a(".maps2").gmap3({
                map: {
                    options: {
                        center: [40.6937343, -73.9666795],
                        mapTypeId: "ListAny",
                        mapTypeControlOptions: {
                            mapTypeIds: ["ListAny", google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                        },
                        zoom: 14,
                    },
                    navigationControl: false,
                    scrollwheel: false,
                    streetViewControl: false
                }
            })
        }
        a.each(y, function (B, C) {
            a(".maps").gmap3({
                marker: {
                    values: [{
                        address: C.address,
                        options: {
                            icon: "images/map.png"
                        },
                        events: {
                            mouseover: function () {
                                a(this).gmap3({
                                    overlay: {
                                        address: C.address,
                                        options: {
                                            content: "<div class='flat-product map clearfix'><div class='rate-product'><div class='link-review clearfix'><div class='button-product float-left'><button type='button' class='flat-button' onclick='location.href='#''>Restautrant</button></div><div class='start-review float-right'><span class='flat-start'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></span></div></div><div class='info-product'><h6 class='title'><a href='#'>San Antonio Restaurants</a></h6><p>208 W 70th Street, New York, NY </p></div></div><div class='featured-product'><img src='images/services/m1.jpg' alt='image'><div class='time'>Now Close</div></div></div>",
                                            offset: {
                                                y: 5,
                                                x: -185
                                            }
                                        }
                                    }
                                })
                            }, mouseout: function () {
                                a(".infobox").each(function () {
                                    a(this).remove()
                                })
                            }
                        }
                    }]
                },
                styledmaptype: {
                    id: "ListAny",
                    options: {
                        name: "ListAny Map"
                    },
                    styles: [{
                        featureType: "administrative",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "labels.text",
                        stylers: [{
                            saturation: "-100"
                        }, {
                            color: "#ef9797"
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            saturation: "-100"
                        }]
                    }, {
                        featureType: "landscape.man_made",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "landscape.natural",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }]
                    }, {
                        featureType: "landscape.natural",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            color: "#e5e5e5"
                        }]
                    }, {
                        featureType: "landscape.natural.terrain",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "off"
                        }, {
                            color: "#c0e8e8"
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry.stroke",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "geometry",
                        stylers: [{
                            lightness: 100
                        }, {
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "road",
                        elementType: "labels",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.highway",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "on"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "labels.text",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.local",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }, {
                            weight: "0.50"
                        }]
                    }, {
                        featureType: "transit",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    }, {
                        featureType: "transit.line",
                        elementType: "geometry",
                        stylers: [{
                            visibility: "on"
                        }, {
                            lightness: 700
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "labels.text.fill",
                        stylers: [{
                            lightness: "100"
                        }, {
                            weight: "1.41"
                        }, {
                            saturation: "-100"
                        }]
                    }, {
                        featureType: "transit.station.airport",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "simplified"
                        }, {
                            saturation: "-100"
                        }, {
                            lightness: "29"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                            color: "#7dcdcd"
                        }, {
                            visibility: "off"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "geometry",
                        stylers: [{
                            lightness: "48"
                        }]
                    }, {
                        featureType: "water",
                        elementType: "geometry.fill",
                        stylers: [{
                            visibility: "on"
                        }, {
                            lightness: "84"
                        }, {
                            color: "#e7e7e7"
                        }]
                    }]
                }
            })
        });
        a.each(z, function (B, C) {
            a(".maps2").gmap3({
                marker: {
                    values: [{
                        address: C.address,
                        options: {
                            icon: "images/map.png"
                        },
                        events: {
                            mouseover: function () {
                                a(this).gmap3({
                                    overlay: {
                                        address: C.address,
                                        options: {
                                            content: "",
                                            offset: {
                                                y: 15,
                                                x: -165
                                            }
                                        }
                                    }
                                })
                            }, mouseout: function () {
                                a(".infobox").each(function () {
                                    a(this).remove()
                                })
                            }
                        }
                    }]
                },
                styledmaptype: {
                    id: "ListAny",
                    options: {
                        name: "ListAny Map"
                    },
                    styles: [{
                        featureType: "all",
                        elementType: "labels.text.fill",
                        stylers: [{
                            saturation: 36
                        }, {
                            color: "#000000"
                        }, {
                            lightness: 40
                        }]
                    }, {
                        featureType: "all",
                        elementType: "labels.text.stroke",
                        stylers: [{
                            visibility: "on"
                        }, {
                            color: "#000000"
                        }, {
                            lightness: 16
                        }]
                    }, {
                        featureType: "all",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "geometry.fill",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 20
                        }]
                    }, {
                        featureType: "administrative",
                        elementType: "geometry.stroke",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 17
                        }, {
                            weight: 1.2
                        }]
                    }, {
                        featureType: "landscape",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 20
                        }]
                    }, {
                        featureType: "poi",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 21
                        }]
                    }, {
                        featureType: "road.highway",
                        elementType: "geometry.fill",
                        stylers: [{
                            lightness: 17
                        }, {
                            color: "#301b1b"
                        }, {
                            visibility: "on"
                        }]
                    }, {
                        featureType: "road.highway",
                        elementType: "geometry.stroke",
                        stylers: [{
                            color: "#482e2e"
                        }, {
                            lightness: 29
                        }, {
                            weight: 0.2
                        }, {
                            visibility: "off"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 18
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "geometry.fill",
                        stylers: [{
                            color: "#382121"
                        }]
                    }, {
                        featureType: "road.arterial",
                        elementType: "geometry.stroke",
                        stylers: [{
                            hue: "#ff0000"
                        }]
                    }, {
                        featureType: "road.local",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 16
                        }]
                    }, {
                        featureType: "road.local",
                        elementType: "geometry.stroke",
                        stylers: [{
                            hue: "#ff0000"
                        }]
                    }, {
                        featureType: "transit",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 19
                        }]
                    }, {
                        featureType: "water",
                        elementType: "geometry",
                        stylers: [{
                            color: "#000000"
                        }, {
                            lightness: 17
                        }]
                    }]
                }
            })
        });

        function A() {
            a(".infobox").each(function () {
                var B = {
                    duration: 600
                };
                a(this).slideToggle(B).remove()
            })
        }
    };
    var m = function () {
        a(function () {
            if (a().datetimepicker) {
                a("#datetimepicker1").datetimepicker()
            }
        })
    };
    var t = function () {
        a(".form-filter").each(function () {
            // a("#ex8").slider({
            //     tooltip: "always"
            // });
            // var y = new Slider("#ex8", {
            //     tooltip: "always"
            // })
        })
    };
    var w = function () {
        a(".tf-gallery").each(function () {
            a(this).children("#tf-carousel").flexslider({
                animation: "slide",
                controlNav: false,
                controldot: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 11,
                directionNav: false,
                asNavFor: a(this).children("#tf-slider"),
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            });
            a(this).children("#tf-slider").flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
                controldot: false,
                directionNav: true,
                sync: a(this).children("#tf-carousel"),
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            })
        })
    };
    var u = function () {
        a(".flat-tabs").each(function () {
            a(this).children(".content-tab").children().hide();
            a(this).children(".content-tab").children().first().show();
            a(this).find(".menu-tab").children("li").on("click", function (z) {
                var A = a(this).index(),
                    y = a(this).siblings().removeClass("active").parents(".flat-tabs").children(".content-tab").children().eq(A);
                y.addClass("active").fadeIn("slow");
                y.siblings().removeClass("active");
                a(this).addClass("active").parents(".flat-tabs").children(".content-tab").children().eq(A).siblings().hide();
                z.preventDefault()
            })
        })
    };
    var f = function () {
        var y = {
            duration: 600
        };
        a(".flat-toggle .toggle-title.active").siblings(".toggle-content").show();
        a(".flat-toggle.enable .toggle-title").on("click", function () {
            a(this).closest(".flat-toggle").find(".toggle-content").slideToggle(y);
            a(this).toggleClass("active")
        });
        a(".flat-accordion .toggle-title").on("click", function () {
            if (!a(this).is(".active")) {
                a(this).closest(".flat-accordion").find(".toggle-title.active").toggleClass("active").next().slideToggle(y);
                a(this).toggleClass("active");
                a(this).next().slideToggle(y)
            } else {
                a(this).toggleClass("active");
                a(this).next().slideToggle(y)
            }
        })
    };
    var x = function () {
        a(".fancybox").on("click", function () {
            a.fancybox({
                href: this.href,
                type: a(this).data("type")
            });
            return false
        })
    };
    var v = function () {
        a(".listing-team").each(function () {
            if (a().owlCarousel) {
                a(this).find(".wrap-team").owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: false,
                    auto: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        767: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1200: {
                            items: 3
                        }
                    }
                })
            }
        })
    };
    var g = function () {
        a(".flat-row").each(function () {
            if (a().owlCarousel) {
                a(this).find(".flat-client").owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: a(".flat-client").data("nav"),
                    dots: a(".flat-client").data("dots"),
                    autoplay: a(".flat-client").data("auto"),
                    responsive: {
                        0: {
                            items: 1
                        },
                        320: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        767: {
                            items: 2
                        },
                        991: {
                            items: 3
                        },
                        1200: {
                            items: a(".flat-client").data("item")
                        }
                    }
                })
            }
        })
    };
    var o = function () {
        a(".wrap-flat-product .flat-product").slice(0, 6).show();
        a(".wrap-flat-product .flat-button").on("click", function (y) {
            y.preventDefault();
            a(".wrap-flat-product .flat-product:hidden").slice(0, 3).slideDown(600);
            if (a(".wrap-flat-product .flat-product:hidden").length == 0) {
                a(".wrap-flat-product .flat-button").fadeOut("slow")
            }
            a("html,body").animate({
                scrollTop: a(this).offset().top - 500
            }, 1000)
        })
    };
    var k = function () {
        a(window).scroll(function () {
            if (a(this).scrollTop() > 800) {
                a(".go-top").addClass("show")
            } else {
                a(".go-top").removeClass("show")
            }
        });
        a(".go-top").on("click", function () {
            a("html, body").animate({
                scrollTop: 0
            }, 1000, "easeInOutExpo");
            return false
        })
    };
    var s = function () {
        var y = window.devicePixelRatio > 1 ? true : false;
        if (y) {
            // a(".header .logo").find("img").attr({
            //     src: "./images/logo@2x.png",
            //     width: "144",
            //     height: "45"
            // })
        }
    };
    var p = function () {
        if (a().parallax && n.any() == null) {
            a(".parallax1").parallax("50%", 0.1);
            a(".parallax2").parallax("50%", 0.1);
            a(".parallax3").parallax("50%", 0.1)
        }
    };
    var q = function () {
        a(".loading-overlay").fadeOut("slow", function () {
            a(this).remove()
        })
    };
    a(function () {
        if (matchMedia("only screen and (min-width: 991px)").matches) {
            l()
        }
        r();
        e();
        h();
        b();
        d();
        c.eventLoad();
        i();
        f();
        m();
        t();
        w();
        x();
        v();
        g();
        o();
        k();
        s();
        p();
        u();
        q()
    })
})(jQuery);
