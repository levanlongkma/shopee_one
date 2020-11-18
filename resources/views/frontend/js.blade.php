<script id='script_viewport' type='text/javascript'>
    window.ladi_viewport = function() {
        var width = window.outerWidth > 0 ? window.outerWidth : window.screen.width;
        var widthDevice = width;
        var is_desktop = width >= 768;
        var content = "";
        if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
            window.ladi_is_desktop = is_desktop;
        }
        if (!is_desktop) {
            widthDevice = 420;
        } else {
            widthDevice = 960;
        }
        content = "width=" + widthDevice + ", user-scalable=no";
        var scale = 1;
        if (!is_desktop && widthDevice != window.screen.width && window.screen.width > 0) {
            scale = window.screen.width / widthDevice;
        }
        if (scale != 1) {
            content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;
        }
        var docViewport = document.getElementById("viewport");
        if (!docViewport) {
            docViewport = document.createElement("meta");
            docViewport.setAttribute("id", "viewport");
            docViewport.setAttribute("name", "viewport");
            document.head.appendChild(docViewport);
        }
        docViewport.setAttribute("content", content);
    };
    window.ladi_viewport();
    function scrollRegister() {
        location.href = "#SECTION275";
    }
</script>
<script type='text/javascript'>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq("init", "298639434449319");
    fbq("init", "224613385409630");
    fbq("init", "279422439753168");
    fbq("track", "PageView");
    fbq("track", "ViewContent");
</script>
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '279422439753168');
    fbq('track', 'PageView');
</script>
<script id="script_lazyload" type="text/javascript">
    (function() {
        var list_element_lazyload = document.querySelectorAll('.ladi-section-background, .ladi-image-background, .ladi-button-background, .ladi-headline, .ladi-video-background, .ladi-countdown-background, .ladi-box, .ladi-frame, .ladi-form-item-background, .ladi-gallery-view-item, .ladi-gallery-control-item, .ladi-spin-lucky-screen, .ladi-spin-lucky-start, .ladi-list-paragraph ul li');
        var style_lazyload = document.getElementById('style_lazyload');
        for (var i = 0; i < list_element_lazyload.length; i++) {
            var rect = list_element_lazyload[i].getBoundingClientRect();
            if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {
                rect.x = rect.left;
                rect.y = rect.top;
            }
            var offset_top = rect.y + window.scrollY;
            if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight) {
                list_element_lazyload[i].classList.add('ladi-lazyload');
            }
        }
        style_lazyload.parentElement.removeChild(style_lazyload);
        var currentScrollY = window.scrollY;
        var stopLazyload = function(event) {
            if (event.type == "scroll" && window.scrollY == currentScrollY) {
                currentScrollY = -1;
                return;
            }
            window.removeEventListener('scroll', stopLazyload);
            list_element_lazyload = document.getElementsByClassName('ladi-lazyload');
            while (list_element_lazyload.length > 0) {
                list_element_lazyload[0].classList.remove('ladi-lazyload');
            }
        };
        window.addEventListener('scroll', stopLazyload);
    })();
</script>
<script src="v2/source/ladipage.min.js?v=1588161697899" type="text/javascript"></script>
<script id="script_event_data" type="text/javascript">
    (function() {
        var run = function() {
            if (typeof window.LadiPageScript == "undefined" || window.LadiPageScript == undefined || typeof window.ladi == "undefined" || window.ladi == undefined) {
                setTimeout(run, 100);
                return;
            }
            window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
            window.LadiPageScript.runtime.ladipage_id = '5e980839b8717c5ad157b365';
            window.LadiPageScript.runtime.isMobileOnly = false;
            window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = ["dvshopee247.com"];
            window.LadiPageScript.runtime.DOMAIN_FREE = ["pagedemo.me", "demopage.me", "ladi.me", "pro5.me", "procv.to"];
            window.LadiPageScript.runtime.bodyFontSize = 12;
            window.LadiPageScript.runtime.time_zone = 7;
            window.LadiPageScript.runtime.eventData = "%7B%22BUTTON5%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION18%22%7D%7D%2C%22BUTTON7%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION30%22%7D%7D%2C%22BUTTON9%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION63%22%7D%7D%2C%22BUTTON15%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION275%22%7D%2C%22desktop.style.animation-name%22%3A%22pulse%22%2C%22desktop.style.animation-delay%22%3A%221s%22%2C%22mobile.style.animation-name%22%3A%22pulse%22%2C%22mobile.style.animation-delay%22%3A%221s%22%7D%2C%22POPUP203%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP205%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP207%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP209%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP212%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP214%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22POPUP216%22%3A%7B%22type%22%3A%22popup%22%2C%22desktop.option.popup_position%22%3A%22default%22%2C%22desktop.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%2C%22mobile.option.popup_position%22%3A%22default%22%2C%22mobile.option.popup_backdrop%22%3A%22background-color%3A%20rgba(0%2C%200%2C%200%2C%200.5)%3B%22%7D%2C%22IMAGE271%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22phone%22%2C%22action%22%3A%2202422826888%22%7D%2C%22desktop.option.sticky%22%3Atrue%2C%22desktop.option.sticky_position%22%3A%22top_right%22%2C%22desktop.option.sticky_position_top%22%3A%2213px%22%2C%22desktop.option.sticky_position_left%22%3A%220px%22%2C%22desktop.option.sticky_position_bottom%22%3A%2243px%22%2C%22desktop.option.sticky_position_right%22%3A%2221px%22%2C%22mobile.option.sticky%22%3Atrue%2C%22mobile.option.sticky_position%22%3A%22top_right%22%2C%22mobile.option.sticky_position_top%22%3A%2213px%22%2C%22mobile.option.sticky_position_left%22%3A%220px%22%2C%22mobile.option.sticky_position_bottom%22%3A%2243px%22%2C%22mobile.option.sticky_position_right%22%3A%2221px%22%7D%2C%22BUTTON272%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION31%22%7D%7D%2C%22FORM276%22%3A%7B%22type%22%3A%22form%22%2C%22option.form_config_id%22%3A%225e9809e2b8717c5ad157b3f9%22%2C%22option.form_send_ladipage%22%3Atrue%2C%22option.thankyou_type%22%3A%22default%22%2C%22option.thankyou_value%22%3A%22C%E1%BA%A3m%20%C6%A1n%20b%E1%BA%A1n%20%C4%91%C3%A3%20quan%20t%C3%A2m!%22%2C%22option.form_auto_funnel%22%3Atrue%2C%22option.form_auto_complete%22%3Atrue%7D%2C%22BUTTON277%22%3A%7B%22type%22%3A%22button%22%2C%22desktop.style.animation-name%22%3A%22pulse%22%2C%22desktop.style.animation-delay%22%3A%221s%22%2C%22mobile.style.animation-name%22%3A%22pulse%22%2C%22mobile.style.animation-delay%22%3A%221s%22%7D%2C%22FORM_ITEM278%22%3A%7B%22type%22%3A%22form_item%22%2C%22option.input_type%22%3A%22text%22%2C%22option.input_tabindex%22%3A1%7D%2C%22FORM_ITEM279%22%3A%7B%22type%22%3A%22form_item%22%2C%22option.input_type%22%3A%22email%22%2C%22option.input_tabindex%22%3A2%7D%2C%22FORM_ITEM280%22%3A%7B%22type%22%3A%22form_item%22%2C%22option.input_type%22%3A%22tel%22%2C%22option.input_tabindex%22%3A3%7D%2C%22FORM_ITEM281%22%3A%7B%22type%22%3A%22form_item%22%2C%22option.input_type%22%3A%22textarea%22%2C%22option.input_tabindex%22%3A4%7D%2C%22GROUP297%22%3A%7B%22type%22%3A%22group%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22section%22%2C%22action%22%3A%22SECTION1%22%7D%2C%22desktop.option.sticky%22%3Atrue%2C%22desktop.option.sticky_position%22%3A%22bottom_right%22%2C%22desktop.option.sticky_position_top%22%3A%220px%22%2C%22desktop.option.sticky_position_left%22%3A%220px%22%2C%22desktop.option.sticky_position_bottom%22%3A%2237px%22%2C%22desktop.option.sticky_position_right%22%3A%2284px%22%2C%22mobile.option.sticky%22%3Atrue%2C%22mobile.option.sticky_position%22%3A%22bottom_right%22%2C%22mobile.option.sticky_position_top%22%3A%220px%22%2C%22mobile.option.sticky_position_left%22%3A%220px%22%2C%22mobile.option.sticky_position_bottom%22%3A%2239px%22%2C%22mobile.option.sticky_position_right%22%3A%2229px%22%7D%2C%22NOTIFY306%22%3A%7B%22type%22%3A%22notify%22%2C%22option.sheet_id%22%3A%221dFeYdT8QnvjNJT6quamZtlFSvZuT90sEZ9qvKEhrKZQ%22%2C%22option.time_show%22%3A5%2C%22option.time_delay%22%3A10%2C%22desktop.option.position%22%3A%22bottom_left%22%2C%22mobile.option.position%22%3A%22bottom_left%22%7D%2C%22VIDEO336%22%3A%7B%22type%22%3A%22video%22%2C%22option.video_value%22%3A%22https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Drnb_2_ZlqL0%22%2C%22option.video_type%22%3A%22youtube%22%2C%22mobile.option.video_autoplay%22%3Afalse%7D%7D";
            window.LadiPageScript.run(true);
            window.LadiPageScript.runEventScroll();
        };
        run();
    })();
</script>