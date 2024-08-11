<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title>CEP</title>
        <meta name='robots' content='noindex, nofollow'/>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin/>
        <link rel="alternate" type="application/rss+xml" title="Donik &raquo; Feed" href="https://donikdemo.boomdevstheme.com/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Donik &raquo; Comments Feed" href="https://donikdemo.boomdevstheme.com/comments/feed/"/>
        <link rel="alternate" type="text/calendar" title="Donik &raquo; iCal Feed" href="https://donikdemo.boomdevstheme.com/events/?ical=1"/>
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/donikdemo.boomdevstheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"
                }
            };
            
            !function(i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                      , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }
                function u(e, t, n) {
                    switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                    }
                    return !1
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,150) : i.createElement("canvas")
                      , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                      , o = (a.textBaseline = "top",
                    a.font = "600 32px Arial",
                    {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                }
                function t(e) {
                    var t = i.createElement("script");
                    t.src = e,
                    t.defer = !0,
                    i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports",
                s = ["flag", "emoji"],
                n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }
                ),
                new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                                return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                            try {
                                var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                                  , r = new Blob([e],{
                                    type: "text/javascript"
                                })
                                  , a = new Worker(URL.createObjectURL(r),{
                                    name: "wpTestEmojiSupports"
                                });
                                return void (a.onmessage = function(e) {
                                    c(n = e.data),
                                    a.terminate(),
                                    t(n)
                                }
                                )
                            } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }
                ).then(function(e) {
                    for (var t in e)
                        n.supports[t] = e[t],
                        n.supports.everything = n.supports.everything && n.supports[t],
                        "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
                    n.DOMReady = !1,
                    n.readyCallback = function() {
                        n.DOMReady = !0
                    }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(),
                    (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji),
                    t(e.wpemoji)))
                }))
            }((window,
            document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <style id='wp-emoji-styles-inline-css' type='text/css'>
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id='safe-svg-svg-icon-style-inline-css' type='text/css'>
            .safe-svg-cover {
                text-align: center
            }

            .safe-svg-cover .safe-svg-inside {
                display: inline-block;
                max-width: 100%
            }

            .safe-svg-cover svg {
                height: 100%;
                max-height: 100%;
                max-width: 100%;
                width: 100%
            }
        </style>
        <style id='classic-theme-styles-inline-css' type='text/css'>
            
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        <style id='global-styles-inline-css' type='text/css'>
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex > :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid > :is(*, div) {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel='stylesheet' id='redux-extendify-styles-css' href='https://donikdemo.boomdevstheme.com/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities.css?ver=4.4.15' type='text/css' media='all'/>
        <link rel='stylesheet' id='contact-form-7-css' href='https://donikdemo.boomdevstheme.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.4' type='text/css' media='all'/>
        <link rel='stylesheet' id='give-donation-summary-style-frontend-css' href='https://donikdemo.boomdevstheme.com/wp-content/plugins/give/assets/dist/css/give-donation-summary.css?ver=3.8.0' type='text/css' media='all'/>
        <link rel='stylesheet' id='euis-css' href='https://donikdemo.boomdevstheme.com/wp-content/plugins/unlimited-elementor-inner-sections-by-boomdevs/public/css/euis-public.css?ver=1.0.6' type='text/css' media='all'/>
        <link rel='stylesheet' id='donik-fonts-css' href='//fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C500%2C600%2C700%7CPT+Sans%3A400%2C500%2C700%7CPlus+Jakarta+Sans%3A300%2C400%2C500%2C600%2C700%2C800&#038;ver=1.0.0' type='text/css' media='all'/>
        <link rel='stylesheet' id='bootstrap-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/bootstrap.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='fontawesome-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/fontawesome.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='magnific-popup-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/magnific-popup.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='slick-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/slick.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='meanmenu-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/meanmenu.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='nice-select-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/nice-select.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='animate-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/animate.min.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='donik-main-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/style.css?ver=1723260327' type='text/css' media='all'/>
        <style id='donik-main-inline-css' type='text/css'>
            :root {
                --primary-color: #FFE144;
                --brand: #ff4638;
            }
        </style>
        <link rel='stylesheet' id='donik-style-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/style.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='donik_breadcrumb_bg_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_breadcrumb_bg_img-inline-css' type='text/css'>
            .page-breadcrumb-area.page-bg {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/bg.jpg)
            }
        </style>
        <link rel='stylesheet' id='donik_breadcrumb_bg_color-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_breadcrumb_bg_color-inline-css' type='text/css'>
            .page-breadcrumb-area.page-bg {
                background-color: #f4f9fc
            }
        </style>
        <link rel='stylesheet' id='donik_breadcrumb_shape_image_one_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_breadcrumb_shape_image_one_img-inline-css' type='text/css'>
            .page-breadcrumb-area .feature-shape1 {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/elements.png)
            }
        </style>
        <link rel='stylesheet' id='donik_breadcrumb_shape_image_two_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_breadcrumb_shape_image_two_img-inline-css' type='text/css'>
            .page-breadcrumb-area .feature-shape2 {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/wave-white-2.png)
            }
        </style>
        <link rel='stylesheet' id='donik_breadcrumb_shape_image_three_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_breadcrumb_shape_image_three_img-inline-css' type='text/css'>
            .page-breadcrumb-area .feature-shape3 {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/footer-slice-white.png)
            }
        </style>
        <link rel='stylesheet' id='donik_footer_bg_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='donik_footer_bg_shape_one_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_footer_bg_shape_one_img-inline-css' type='text/css'>
            .footer.style-1 .footer-sec .shape-2 {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/footer-slice-white.png)
            }
        </style>
        <link rel='stylesheet' id='donik_footer_bg_shape_two_img-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <style id='donik_footer_bg_shape_two_img-inline-css' type='text/css'>
            .footer.style-1 .footer-sec .shape-1 {
                background-image: url( https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/shape-1.png)
            }
        </style>
        <link rel='stylesheet' id='donik_footer_bottom_bg-css' href='https://donikdemo.boomdevstheme.com/wp-content/themes/donik/css/color/donik_inline_custom.css?ver=6.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='elementor-frontend-css' href='https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1713589982' type='text/css' media='all'/>
        <link rel='stylesheet' id='swiper-css' href='https://donikdemo.boomdevstheme.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css' media='all'/>
        <link rel='stylesheet' id='elementor-post-10-css' href='https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/css/post-10.css?ver=1713589982' type='text/css' media='all'/>
        <link rel='stylesheet' id='elementor-global-css' href='https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/css/global.css?ver=1713589982' type='text/css' media='all'/>
        <link rel='stylesheet' id='elementor-post-4407-css' href='https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/css/post-4407.css?ver=1719136280' type='text/css' media='all'/>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=PT%20Sans:400,700,400italic,700italic%7CPlus%20Jakarta%20Sans:200,300,400,500,600,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic%7CVujahday%20Script:400%7COpen%20Sans:300,400,500,600,700,800,300italic,400italic,500italic,600italic,700italic,800italic&#038;display=swap&#038;ver=1719138086"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT%20Sans:400,700,400italic,700italic%7CPlus%20Jakarta%20Sans:200,300,400,500,600,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic%7CVujahday%20Script:400%7COpen%20Sans:300,400,500,600,700,800,300italic,400italic,500italic,600italic,700italic,800italic&#038;display=swap&#038;ver=1719138086" media="print" onload="this.media='all'">
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT%20Sans:400,700,400italic,700italic%7CPlus%20Jakarta%20Sans:200,300,400,500,600,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic%7CVujahday%20Script:400%7COpen%20Sans:300,400,500,600,700,800,300italic,400italic,500italic,600italic,700italic,800italic&#038;display=swap&#038;ver=1719138086"/>
        </noscript>
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CVujahday+Script%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlus+Jakarta+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.6.1' type='text/css' media='all'/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            /* ]]> */
        </script>
        
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/give/assets/dist/js/give.js?ver=45021738ab584c0b" id="give-js"></script>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/unlimited-elementor-inner-sections-by-boomdevs/public/js/euis-public.js?ver=1.0.6" id="euis-js"></script>
        <script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.min.js?ver=1" id="donik-jquery-js-js"></script>
        <link rel="https://api.w.org/" href="https://donikdemo.boomdevstheme.com/wp-json/"/>
        <link rel="alternate" title="JSON" type="application/json" href="https://donikdemo.boomdevstheme.com/wp-json/wp/v2/pages/4407"/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://donikdemo.boomdevstheme.com/xmlrpc.php?rsd"/>
        <meta name="generator" content="WordPress 6.6.1"/>
        <link rel="canonical" href="https://donikdemo.boomdevstheme.com/home-3/"/>
        <link rel='shortlink' href='https://donikdemo.boomdevstheme.com/?p=4407'/>
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://donikdemo.boomdevstheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdonikdemo.boomdevstheme.com%2Fhome-3%2F"/>
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://donikdemo.boomdevstheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdonikdemo.boomdevstheme.com%2Fhome-3%2F&#038;format=xml"/>
        <meta name="generator" content="Redux 4.4.15"/>
        <meta name="generator" content="Give v3.8.0"/>
        <meta name="et-api-version" content="v1">
        <meta name="et-api-origin" content="https://donikdemo.boomdevstheme.com">
        <link rel="https://theeventscalendar.com/" href="https://donikdemo.boomdevstheme.com/wp-json/tribe/tickets/v1/"/>
        <meta name="tec-api-version" content="v1">
        <meta name="tec-api-origin" content="https://donikdemo.boomdevstheme.com">
        <link rel="alternate" href="https://donikdemo.boomdevstheme.com/wp-json/tribe/events/v1/"/>
        <meta name="generator" content="Elementor 3.21.1; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        <style type="text/css" id="wp-custom-css">
            #post-645 {
                margin-top: 0 !important;
            }
        </style>
        <style id="donik_options-dynamic-css" title="dynamic-css" class="redux-options-output">
            .header-top-info ul li a {
                font-family: "PT Sans";
                line-height: 14px;
                font-weight: 400;
                font-style: normal;
                font-size: 14px;
            }

            .header-top-info ul li a {
                color: #ffffff;
            }

            .header-top-info ul li a:hover {
                color: #FFE144;
            }

            .header-btn {
                font-family: "Plus Jakarta Sans";
                line-height: 18px;
                font-weight: 500;
                font-style: normal;
                font-size: 18px;
            }

            .header-btn {
                color: #020a27;
            }

            .header-btn:hover {
                color: #ffffff;
            }

            .header-btn {
                background-color: var(--primary-color);
            }

            .header-btn:hover {
                background-color: #ffffff;
            }

            .header-btn span {
                background-color: #FFFFFF;
            }

            .header-btn:hover span {
                background-color: #FF4638;
            }

            .header-btn {
                padding-top: 16px;
                padding-right: 24px;
                padding-bottom: 16px;
                padding-left: 24px;
            }

            .main-menu ul li a, {
                font-family: "PT Sans";
                text-transform: capitalize;
                line-height: 18px;
                font-weight: 400;
                font-style: normal;
                font-size: 18px;
            }

            .main-menu ul ul li a {
                font-family: "PT Sans";
                text-transform: capitalize;
                line-height: 18px;
                font-weight: 400;
                font-style: normal;
                font-size: 18px;
            }

            .main-menu ul li a, .main-menu ul ul li a {
                color: #ffffff;
            }

            .main-menu ul li a:hover, .main-menu ul ul li a:hover, .main-menu ul li:hover a {
                color: #FFE144;
            }

            .main-menu ul li.active > a {
                color: #FFE144;
            }

            .header-menu-area.sticky_menu {
                background-color: #ffffff;
            }

            .page-template .breadcrumb-wrapper .page-title {
                font-family: "Plus Jakarta Sans";
                text-transform: capitalize;
                line-height: 51px;
                font-weight: 700;
                font-style: normal;
                color: #ffffff;
                font-size: 51px;
            }

            .page-template .breadcrumb-list a {
                font-family: "Plus Jakarta Sans";
                text-transform: capitalize;
                line-height: 18px;
                font-weight: 400;
                font-style: normal;
                font-size: 18px;
            }

            .page-template .breadcrumb-list ul li a {
                color: #ffffff;
            }

            .page-template .breadcrumb-list.active a {
                color: #FFE144;
            }

            .page-template .breadcrumb-list ul li a:hover, .page-template .breadcrumb-list.active a:hover {
                color: #ff6731;
            }

            .read-more .theme-btn {
                color: #121212;
            }

            .read-more .theme-btn:hover {
                color: #ffffff;
            }

            .read-more .theme-btn {
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 16px;
                padding-left: 32px;
            }


            p, p.desc, p.title {
                font-family: "PT Sans";
                line-height: 30px;
                font-weight: 400;
                font-style: normal;
                font-size: 18px;
            }

            .slider-short-title {
                font-family: "Vujahday Script";
                line-height: 32px;
                font-weight: 400;
                font-style: normal;
                font-size: 32px;
            }

            h1, h1.slider-title {
                font-family: "Plus Jakarta Sans";
                line-height: 80px;
                font-weight: 800;
                font-style: normal;
                font-size: 80px;
            }

            h2, h2.title {
                font-family: "Plus Jakarta Sans";
                line-height: 51px;
                font-weight: 700;
                font-style: normal;
                font-size: 51px;
            }

            h3, h3. heading-three {
                font-family: "Plus Jakarta Sans";
                line-height: 38px;
                font-weight: 700;
                font-style: normal;
                font-size: 38px;
            }

            h4, h4.heading-four {
                font-family: "Plus Jakarta Sans";
                line-height: 28px;
                font-weight: 500;
                font-style: normal;
                font-size: 28px;
            }

            h5, h5.heading-five {
                font-family: "Plus Jakarta Sans";
                line-height: 22px;
                font-weight: 600;
                font-style: normal;
                font-size: 22px;
            }

            h6, h6.heading-six {
                font-family: "Plus Jakarta Sans";
                line-height: 16px;
                font-weight: 500;
                font-style: normal;
                font-size: 16px;
            }

            .newsletter-area.style-1 .subscribe-form .section-title .short-title {
                font-family: "Vujahday Script";
                line-height: 32px;
                font-weight: 400;
                font-style: normal;
                color: #121212;
                font-size: 32px;
            }

            .subscribe-area .section-title .title {
                font-family: "Plus Jakarta Sans";
                line-height: 51px;
                font-weight: 700;
                font-style: normal;
                color: #121212;
                font-size: 51px;
            }

            .subscribe-form-widget .single-field .theme-btn {
                font-family: "Plus Jakarta Sans";
                line-height: 30px;
                font-weight: normal;
                font-style: normal;
                font-size: 18px;
            }

            .subscribe-form-widget .single-field .theme-btn {
                color: #ffffff;
            }

            .subscribe-form-widget .single-field .theme-btn:hover {
                color: #ffffff;
            }

            .subscribe-form-widget .single-field .theme-btn span {
                background-color: #020a27;
            }

            .subscribe-form-widget .single-field .theme-btn:hover span {
                background-color: #FF4638;
            }

            .subscribe-form-widget .submit-btn {
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 16px;
                padding-left: 32px;
            }

            .footer-widget.widget_nav_menu li a, .footer-widget .footer-widget-contact .footer-contact ul li .contact-text p, .footer-widget .footer-widget-contact .footer-contact ul li .contact-text a {
                color: #ffffff;
            }

            .footer-widget.widget_nav_menu li a, .footer-widget .footer-widget-contact .footer-contact ul li .contact-text p, .footer-widget .footer-widget-contact .footer-contact ul li .contact-text a {
                -webkit-text-fill-color: #ffffff;
            }

            .footer-widget.widget_nav_menu li:hover a, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-text p, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-text a {
                color: #FFE144;
            }

            .footer-widget.widget_nav_menu li:hover a, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-text p, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-text a {
                -webkit-text-fill-color: #FFE144;
            }

            .footer-widget .footer-widget-info .social-profile a i, .footer-widget .footer-widget-contact .footer-contact ul li .contact-icon i {
                color: #ffffff;
            }

            .footer-widget .footer-widget-info .social-profile a:hover i, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-icon i {
                color: #020a27;
            }

            .footer-widget .footer-widget-info .social-profile a, .footer-widget .footer-widget-contact .footer-contact ul li .contact-icon {
                background-color: #000000;
            }

            .footer-widget .footer-widget-info .social-profile a:hover, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-icon:before {
                background-color: #FFE144;
            }

            .footer-widget .footer-widget-info .social-profile a, .footer-widget .footer-widget-contact .footer-contact ul li .contact-icon {
                border-color: #ffffff;
            }

            .footer-widget .footer-widget-info .social-profile a:hover, .footer-widget .footer-widget-contact .footer-contact ul li:hover .contact-icon {
                border-color: #FFE144;
            }

            .footer {
                background-color: #121212;
            }

            .footer-bottom-area {
                background-color: #232323;
            }

            .footer-widget-title {
                font-family: "Plus Jakarta Sans";
                line-height: 30px;
                font-weight: 700;
                font-style: normal;
                font-size: 21px;
            }

            .footer-widget-title {
                color: #ffffff;
            }

            .footer-widget-title:hover {
                color: #ffffff;
            }

            .footer-widget .footer-widget-info p {
                font-family: "PT Sans";
                line-height: 30px;
                font-weight: 400;
                font-style: normal;
                color: #BDBDBD;
                font-size: 18px;
            }

            .footer-bottom-area .copyright-text p {
                font-family: "Open Sans";
                line-height: 30px;
                font-weight: 400;
                font-style: normal;
                color: #ffffff;
                font-size: 14px;
            }

            .footer-bottom-menu ul li a {
                font-family: "Open Sans";
                line-height: 27px;
                font-weight: 400;
                font-style: normal;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
      <!-- Header Start -->
<header class="header-area style-1 style-3">
    <div class="header-menu-area sticky-header">
        <div class="container p-md-0">
            <div class="header-menu-area-inner">
                <div class="row align-items-center">
                    <!-- Logo Section -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="https://donikdemo.boomdevstheme.com/">
                                <img src="https://cep.yowza.co.za/images/community-engagement-platform_-logo_v4-1.png" alt="logo" class="standard-logo img-fluid" style="width: 120px;" />
                                <img src="https://cep.yowza.co.za/images/community-engagement-platform_-logo_v4-1.png" alt="Sticky Logo" class="sticky-logo img-fluid" style="width: 120px;">
                            </a>
                        </div>
                    </div>
                    
                    <!-- Navigation Menu -->
                    <div class="col-xl-9 col-lg-9 col-md-6 col-6 d-flex justify-content-end align-items-center">
                        <nav id="main-menu" class="main-menu d-none d-lg-block">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a title="Home" href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a title="Get In Touch" href="#" class="nav-link">Get In Touch</a>
                                </li>
                                <li class="nav-item">
                                    <a title="Sign In" href="#" class="nav-link">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a title="Register" href="#" class="nav-link">Register</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Mobile Menu Toggle Button -->
                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile Menu -->
                <div class="row">
                    <div class="col-12">
                        <div class="collapse" id="mobile-menu">
                            <nav id="mobile-menu-nav" class="mobile-menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a title="Home" href="#" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a title="Get In Touch" href="#" class="nav-link">Get In Touch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a title="Sign In" href="#" class="nav-link">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a title="Register" href="#" class="nav-link">Register</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
        <!-- Header End !-->
        <!-- Menu Sidebar Section Start -->

        <div class="body-overlay"></div>
        <div data-elementor-type="wp-page" data-elementor-id="4407" class="elementor elementor-4407">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-f8408fa elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f8408fa" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cd2ee36" data-id="cd2ee36" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-13f7d9c elementor-align-left elementor-widget elementor-widget-donik-slider" data-id="13f7d9c" data-element_type="widget" data-widget_type="donik-slider.default">
                                <div class="elementor-widget-container">
                                    <!-- Slider Section Start !-->
                                    <div class="slider-area style-3">
                                        <div class="counter-section" style="background-image: url('https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/bottom-shape1.svg')">
                                            <div class="counter-container-wrapper">
                                                <div class="single-counter-wrapper">
                                                    <div class="counter-inner">
                                                        <span class="counter-area m-0">
                                                            <span class="counter">50</span>
                                                            K
                                                        </span>
                                                    </div>
                                                    <p class="title m-0">We Helped People</p>
                                                </div>
                                                <div class="divider">
                                                    <div class="outline"></div>
                                                </div>
                                                <div class="single-counter-wrapper">
                                                    <div class="counter-inner">
                                                        <span class="counter-area m-0">
                                                            $<span class="counter">20</span>
                                                            M
                                                        </span>
                                                    </div>
                                                    <p class="title m-0">Funds Collected</p>
                                                </div>
                                                <div class="divider">
                                                    <div class="outline"></div>
                                                </div>
                                                <div class="single-counter-wrapper">
                                                    <div class="counter-inner">
                                                        <span class="counter-area m-0">
                                                            <span class="counter">50</span>
                                                            K
                                                        </span>
                                                    </div>
                                                    <p class="title m-0">Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-wrapper home_slider_three" id="home-slider-v3-13f7d9c" data-autoplay="true" data-autoplay-speed="3000" data-slide-speed="1500" data-slides-show-desktop="1" data-slides-scroll="1" data-loop="true" data-dots="true" data-arrows="true" data-swipe-slide="true" data-pause-hover="true">
                                            <!-- single slider start -->
                                            <div class="single-slider-wrapper">
                                                <div class="single-slider" style="background-image: url('https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/bg.jpg')">
                                                    <div class="slider-overlay"></div>
                                                    <img decoding="async" class="top-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/ornament-2.png" alt="top-shape">
                                                    <img decoding="async" class="bottom-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/wave-white-2.png" alt="bottom-shape">
                                                    <img decoding="async" class="bottom-shape2" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/g-shape.png" alt="bottom-shape">
                                                    <div class="container h-100 align-self-center">
                                                        <div class="row h-100">
                                                            <div class="col-lg-6 align-self-center order-2 order-md-1">
                                                                <div class="slider-content-wrapper">
                                                                    <div class="slider-content">
                                                                        <span class="slider-short-title">Community Engagement Platform</span>
                                                                        <h1 class="slider-title">
                                                                            <span>
                                                                                Your voice,<br>
                                                                            </span>
                                                                            platform and opportunity to connect                                                        
                                                                        </h1>
                                                                        <div class="slider-btn-wrapper">
                                                                            <a href="#" target="_self" class="theme-btn style-1 bubble">Offerings</a>
                                                                            <a href="#" target="_self" class="theme-btn style-2 bubble">Register</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single slider end -->
                                            <!-- single slider start -->
                                            <div class="single-slider-wrapper">
                                                <div class="single-slider" style="background-image: url('https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/h3-hero-img-2.png')">
                                                    <div class="slider-overlay"></div>
                                                    <img decoding="async" class="top-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/ornament-2.png" alt="top-shape">
                                                    <img decoding="async" class="bottom-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/wave-white-2.png" alt="bottom-shape">
                                                    <img decoding="async" class="bottom-shape2" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/g-shape.png" alt="bottom-shape">
                                                    <div class="container h-100 align-self-center">
                                                        <div class="row h-100">
                                                            <div class="col-lg-6 align-self-center order-2 order-md-1">
                                                                <div class="slider-content-wrapper">
                                                                    <div class="slider-content">
                                                                        <span class="slider-short-title">Community Engagement Platform</span>
                                                                        <h1 class="slider-title">
                                                                            <span>The greatest</span>
                                                                            gift is the gift of kindness                                                        
                                                                        </h1>
                                                                        <div class="slider-btn-wrapper">
                                                                            <a href="#" target="_self" class="theme-btn style-1 bubble">Offerings</a>
                                                                            <a href="#" target="_self" class="theme-btn style-2 bubble">Register</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single slider end -->
                                            <!-- single slider start -->
                                            <div class="single-slider-wrapper">
                                                <div class="single-slider" style="background-image: url('https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/h3-hero-img-3.png')">
                                                    <div class="slider-overlay"></div>
                                                    <img decoding="async" class="top-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/ornament-2.png" alt="top-shape">
                                                    <img decoding="async" class="bottom-shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/wave-white-2.png" alt="bottom-shape">
                                                    <img decoding="async" class="bottom-shape2" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/g-shape.png" alt="bottom-shape">
                                                    <div class="container h-100 align-self-center">
                                                        <div class="row h-100">
                                                            <div class="col-lg-6 align-self-center order-2 order-md-1">
                                                                <div class="slider-content-wrapper">
                                                                    <div class="slider-content">
                                                                        <span class="slider-short-title">Community Engagement Platform</span>
                                                                        <h1 class="slider-title">
                                                                            <span>Together we are the </span>
                                                                            heartbeat of humanity                                                        
                                                                        </h1>
                                                                        <div class="slider-btn-wrapper">
                                                                            <a href="#" target="_self" class="theme-btn style-1 bubble">Offerings</a>
                                                                            <a href="#" target="_self" class="theme-btn style-2 bubble">Register</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single slider end -->
                                        </div>
                                    </div>
                                    <!-- Slider Section End !-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-131679e elementor-section-stretched about-us-area style-1 style-3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="131679e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-60ffdf0" data-id="60ffdf0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d756314 elementor-widget elementor-widget-donik-about-gallery" data-id="d756314" data-element_type="widget" data-widget_type="donik-about-gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="about-us-image-wrapper">
                                        <img decoding="async" class="shape" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/slice-3.png" alt="Shape">
                                        <img decoding="async" class="shape-2" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/ornament-dots2-1.png" alt="Shape">
                                        <div class="slider-image-shape">
                                            <img decoding="async" class="bg-img" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/about-us-3.jpg" alt="union">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61ebfba about-us-content-wrapper" data-id="61ebfba" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-900e264 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="900e264" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1e4e15d" data-id="1e4e15d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b9665c6 elementor-widget__width-initial elementor-align-left elementor-widget elementor-widget-donik-header" data-id="b9665c6" data-element_type="widget" data-widget_type="donik-header.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <span class="short-title">Who is Siyakha</span>
                                                        <h2 class="title">Your voice, platform and opportunity to connect</h2>
                                                        <p class="desc">Siyakha is the development partner behind the Community Engagement Platform, driving growth and development and ensuring sustainability within each of these communities.​</p>
                                                        
                                                        <p class="desc">In our experience over the last 25 years, we have engaged with communities and implemented projects in rural and informal markets, which have taught us that if we focus on skills transfer and building capability, then we can legitimately move communities out of a developmental state and into a state of growth​.</p>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-14474b6 about-us-list elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="14474b6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-aa82f60" data-id="aa82f60" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8823526 elementor-widget elementor-widget-donik-about-list-image" data-id="8823526" data-element_type="widget" data-widget_type="donik-about-list-image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="about-info-card">
                                                        <div class="icon">
                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/icon-home-1.png" alt="Who we are"/>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <h5 class="title">Our Purpose</h5>
                                                            <p class="desc">The community engagement platform is based on the reality that ordinary South Africans living in township or rural communities still experience limitations in their access to opportunity that furthers the divide of social and economic inequity.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-686bdc9 elementor-widget elementor-widget-donik-about-list-image" data-id="686bdc9" data-element_type="widget" data-widget_type="donik-about-list-image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="about-info-card">
                                                        <div class="icon">
                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/icon-hand-1.png" alt="Our commitment"/>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <h5 class="title">Our Objective</h5>
                                                            <p class="desc"> To create a common platform, upon which the community can access knowledge, information and resources to build their own community tool that meets their needs, in their own individual way.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="elementor-element elementor-element-686bdc9 elementor-widget elementor-widget-donik-about-list-image" data-id="686bdc9" data-element_type="widget" data-widget_type="donik-about-list-image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="about-info-card">
                                                            <div class="icon">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/icon-hand-1.png" alt="Our commitment"/>
                                                            </div>
                                                            <div class="content-wrapper">
                                                                <h5 class="title">OUR CEOs</h5>
                                                                <p class="desc"> Our Youth development teams capture community information including job seekers, small businesses, community policing forum, the community leaders and the carers for elderly and people with disabilities.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-696fad1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="696fad1" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8001390" data-id="8001390" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-38b3bda style-6 elementor-align-left elementor-widget elementor-widget-donik-button" data-id="38b3bda" data-element_type="widget" data-widget_type="donik-button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="theme-btn-wrapper">
                                                                        <a href="#" target="_self" class="theme-btn style-6 bubble">Learn More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5b7847c" data-id="5b7847c" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-3c46e4b elementor-widget elementor-widget-donik-certified-counter" data-id="3c46e4b" data-element_type="widget" data-widget_type="donik-certified-counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="certified-wrapper">
                                                                        <div class="certified">
                                                                            <div class="circle-wrapper">
                                                                                <div class="circle">
                                                                                    <svg viewBox="0 0 100 100" width="160" height="160">
                                                                                        <defs>
                                                                                            <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"/>
                                                                                        </defs>
                                                                                        <text font-size="10" letter-spacing="1.4">
                                                                                            <textPath href="#circle">☆   E  N  G  A  G  E  ☆  E N  G  A G  E  ☆ E  N  G  A  G  E </textPath>
                                                                                        </text>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="inner">
                                                                                    <p>
                                                                                        <span class="counter">204</span>
                                                                                        +
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-4ec4065 elementor-absolute heart-sketch elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="4ec4065" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <style>
                                                                        /*! elementor - v3.21.0 - 18-04-2024 */
                                                                        .elementor-widget-image {
                                                                            text-align: center
                                                                        }

                                                                        .elementor-widget-image a {
                                                                            display: inline-block
                                                                        }

                                                                        .elementor-widget-image a img[src$=".svg"] {
                                                                            width: 48px
                                                                        }

                                                                        .elementor-widget-image img {
                                                                            vertical-align: middle;
                                                                            display: inline-block
                                                                        }
                                                                    </style>
                                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/thumbs/heart-qg0zdy31w25x2rkfnjrsyqftszflphzvyh63m41qrs.png" title="heart" alt="heart" loading="lazy"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0ca2898 elementor-section-stretched service-area style-2 style-3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0ca2898" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-71f203a" data-id="71f203a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-0d781ee elementor-align-left elementor-widget elementor-widget-donik-header" data-id="0d781ee" data-element_type="widget" data-widget_type="donik-header.default">
                                <div class="elementor-widget-container">
                                    <div class="section-title">
                                        <span class="short-title">What We Do At Siyakha?</span>
                                        <h2 class="title">Overall Impact on Communities </h2>
                                    </div>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-c584297 top-feature elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c584297" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-159b81b" data-id="159b81b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-eee8b5e elementor-absolute elementor-widget elementor-widget-image" data-id="eee8b5e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/heart-3-white-1.png" title="heart-3-white" alt="heart-3-white" loading="lazy"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0edfd5e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0edfd5e" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5db8d57" data-id="5db8d57" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-53938c0 elementor-align-left elementor-widget elementor-widget-donik-service-list" data-id="53938c0" data-element_type="widget" data-widget_type="donik-service-list.default">
                                                <div class="elementor-widget-container">
                                                    <!-- Service Area Start  -->
                                                    <div class="container">
                                                        <div class="service-wrapper">
                                                            <div class="row gy-4">
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature1-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Economic Growth</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature2-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Education & Skills Development</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature3-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Innovation & Technology Adoption</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature4-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Health Improvements</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature5-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Social Cohesion</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                                <!-- Service Single Item Start -->
                                                                <div class="col-lg-4 col-md-6 col-12">
                                                                    <div class="service-item">
                                                                        <div class="icon">
                                                                            <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/feature6-1.svg" alt="icon-1">
                                                                        </div>
                                                                        <div class="divider">
                                                                            <div class="outline">
                                                                                <div class="inner-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="service-content">
                                                                            <h5 class="title">Access to Opportunities</h5>
                                                                            <p class="decs">Lorem ipsum dolor sit amet care about consectetur. Sit donec adipiscing our habitant malesuada iaculis.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Service Single Item End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Service Area End  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-abea914 bottom-feature elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="abea914" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c7788e7" data-id="c7788e7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8d810bc elementor-widget elementor-widget-image" data-id="8d810bc" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/slice-1.png" title="slice" alt="slice" loading="lazy"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-98bbbef elementor-section-stretched counter-area style-1 style-2 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="98bbbef" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9a7764f" data-id="9a7764f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4305288 elementor-absolute feature-image1 elementor-widget elementor-widget-image" data-id="4305288" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img fetchpriority="high" decoding="async" width="287" height="189" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/curlly3-1.png" class="attachment-large size-large wp-image-586" alt="" srcset="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/curlly3-1.png 287w, https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/elementor/thumbs/curlly3-1-qfoco6j17udztnnxpcy1u2su6o3maoxe5xjbbxeq5k.png 250w" sizes="(max-width: 287px) 100vw, 287px"/>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b486cad elementor-absolute feature-image2 elementor-widget elementor-widget-image" data-id="b486cad" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="137" height="137" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/slice-white-1.png" class="attachment-large size-large wp-image-1378" alt=""/>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-f509f40 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f509f40" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4f71ae1" data-id="4f71ae1" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e2d2e2b elementor-widget elementor-widget-donik-counter" data-id="e2d2e2b" data-element_type="widget" data-widget_type="donik-counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="counter-container-wrapper">
                                                        <!-- Single Counter Start -->
                                                        <div class="single-counter">
                                                            <div class="signature">
                                                                <img decoding="async" class="counter-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/logo1-1.png" alt="Countries">
                                                            </div>
                                                            <div class="counter-inner">
                                                                <h2 class="counter m-0">85</h2>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="title m-0">Communities</p>
                                                        </div>
                                                        <!-- Single Counter End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c98f82c" data-id="c98f82c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ca5ac1c elementor-widget elementor-widget-donik-counter" data-id="ca5ac1c" data-element_type="widget" data-widget_type="donik-counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="counter-container-wrapper">
                                                        <!-- Single Counter Start -->
                                                        <div class="single-counter">
                                                            <div class="signature">
                                                                <img decoding="async" class="counter-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/logo2-2.png" alt="Volunteers">
                                                            </div>
                                                            <div class="counter-inner">
                                                                <h2 class="counter m-0">480</h2>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="title m-0">Businesses</p>
                                                        </div>
                                                        <!-- Single Counter End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6ffc02d" data-id="6ffc02d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2ae2511 elementor-widget elementor-widget-donik-counter" data-id="2ae2511" data-element_type="widget" data-widget_type="donik-counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="counter-container-wrapper">
                                                        <!-- Single Counter Start -->
                                                        <div class="single-counter">
                                                            <div class="signature">
                                                                <img decoding="async" class="counter-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/logo3-2.png" alt="Goal">
                                                            </div>
                                                            <div class="counter-inner">
                                                                <h2 class="counter m-0">500</h2>
                                                                <span>K</span>
                                                            </div>
                                                            <p class="title m-0">Goal</p>
                                                        </div>
                                                        <!-- Single Counter End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fd15ab7" data-id="fd15ab7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8819d4b elementor-widget elementor-widget-donik-counter" data-id="8819d4b" data-element_type="widget" data-widget_type="donik-counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="counter-container-wrapper">
                                                        <!-- Single Counter Start -->
                                                        <div class="single-counter">
                                                            <div class="signature">
                                                                <img decoding="async" class="counter-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/logo4-2.png" alt="Raised">
                                                            </div>
                                                            <div class="counter-inner">
                                                                <h2 class="counter m-0">430</h2>
                                                                <span>k</span>
                                                            </div>
                                                            <p class="title m-0">Raised</p>
                                                        </div>
                                                        <!-- Single Counter End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-2e5b3fa elementor-section-full_width causes-area style-1 elementor-section-height-default elementor-section-height-default" data-id="2e5b3fa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a2a85a" data-id="2a2a85a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-2f508e5 container elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f508e5" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-573682a causes-title" data-id="573682a" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-7c19a80 elementor-mobile-align-left elementor-widget-tablet__width-initial elementor-align-left elementor-widget elementor-widget-donik-header" data-id="7c19a80" data-element_type="widget" data-widget_type="donik-header.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="section-title">
                                                                        <span class="short-title">Platform Offerings</span>
                                                                        <h2 class="title">Actively engage with local, district government and the private sector around the needs of each community.</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3f7d102" data-id="3f7d102" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-de432b3 elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-donik-button" data-id="de432b3" data-element_type="widget" data-widget_type="donik-button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="theme-btn-wrapper">
                                                                        <a href="https://donikdemo.boomdevstheme.com/causes/" target="_blank" class="theme-btn style-6 bubble">More Offerings</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-119e1de elementor-absolute feature-shape-2 elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-widget elementor-widget-image" data-id="119e1de" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/thumbs/heart-2-white-1-qfocos5begehleo0lywyvd1w4zpt14w7w5yx56bo5u.png" title="heart-2-white" alt="heart-2-white" loading="lazy"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-cf7f7a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cf7f7a0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f179725" data-id="f179725" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6939f0a elementor-widget elementor-widget-donik-donation-post" data-id="6939f0a" data-element_type="widget" data-widget_type="donik-donation-post.default">
                                <div class="elementor-widget-container">
                                    <!-- Causes Area Start -->
                                    <div class="causes-area style-3" id="causes-area">
                                        <div class="container">
                                            <!-- Causes Slider Area Start -->
                                            <div class="causes-slider-area style-3">
                                                <div class="causes-slider" id="donation-slider-6939f0a" data-autoplay="true" data-autoplay-speed="3000" data-slide-speed="1500" data-slides-show-desktop="3" data-slides-show-tablet="2" data-slides-show-mobile="1" data-slides-scroll="1" data-loop="true" data-dots="false" data-arrows="false" data-swipe-slide="true" data-pause-hover="true">
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/give-food-support-for-every-rural-homeless-poor-children/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/Give-food-support-for-every-rural-homeless-poor-chi-scaled.jpg" alt="Give food support for every rural homeless poor children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">Marketplace</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/give-food-support-for-every-rural-homeless-poor-children/">Give food support for every rural homeless poor children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="62.16%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;50975</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-4-2/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/Need-Education-support-for-rural-homeless-poor-childre-scaled.jpg" alt="Need education support for rural homeless poor children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">Education</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-4-2/">Need education support for rural homeless poor children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="55.74%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;45706</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/give-pure-water-support-for-every-rural-poor-children/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/Pure-Water-scaled.jpg" alt="Give pure water support for every rural poor children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">Bussiness Learning</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/give-pure-water-support-for-every-rural-poor-children/">Give pure water support for every rural poor children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="92.54%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;75880</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-3/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/Give-health-support-for-every-homeless-poor-children-1-scaled.jpg" alt="Give health support for every homeless poor children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">Health</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-3/">Give health support for every homeless poor children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="207.51%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;170155</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-4/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/Need-education-support-for-rural-homeless-poor-children-scaled.jpg" alt="Need education support for rural homeless poor children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">News</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-4/">Need education support for rural homeless poor children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="112.23%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;92025</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                    <!-- Single Causes Card Start -->
                                                    <div class="causes-card-2">
                                                        <div class="image-wrapper">
                                                            <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-5/">
                                                                <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/card-bg-4-scaled-2.jpg" alt="Shelter is a essential needs for every homeless children">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <p class="theme-btn style-1">Security Alertds</p>
                                                            <h3 class="title">
                                                                <a href="https://donikdemo.boomdevstheme.com/donations/donation-form-5/">Shelter is a essential needs for every homeless children</a>
                                                            </h3>
                                                            <p class="decs">Lorem ipsum dolor sit amet consectetur quis est ultrices ultrices aget info</p>
                                                        </div>
                                                        <div class="skill-progressbar">
                                                            <div class="skill-progressbar">
                                                                <div class="progress-inner" data-percentage="7.46%">
                                                                    <div class="progress-content-outter">
                                                                        <div class="progress-content"></div>
                                                                    </div>
                                                                    <div class="progress-inner-item">
                                                                        <div class="goals">
                                                                            <p class="title">Goals</p>
                                                                            <p class="price">&#36;82000</p>
                                                                        </div>
                                                                        <span class="progress-number-count">
                                                                            <span class="progress-percent"></span>
                                                                        </span>
                                                                        <div class="raised">
                                                                            <p class="title">Raised</p>
                                                                            <p class="price">&#36;6120</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Causes Card End -->
                                                </div>
                                            </div>
                                            <!-- Causes Slider Area End -->
                                        </div>
                                    </div>
                                    <!-- Causes Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0248df3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0248df3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-df057f6" data-id="df057f6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ac0126e elementor-absolute feature-shape elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="ac0126e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/elementor/thumbs/slice-1-qfocos5aliekfkp3g81xr43kqle972lwky5fj3n74q.png" title="slice" alt="slice" loading="lazy"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-b84bee6 donation-area style-1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b84bee6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-07b778f" data-id="07b778f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c631df5 elementor-absolute elementor-widget elementor-widget-image" data-id="c631df5" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="453" height="150" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape3.png" class="attachment-large size-large wp-image-4545" alt="" srcset="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape3.png 453w, https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape3-300x99.png 300w" sizes="(max-width: 453px) 100vw, 453px"/>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2ed8947 elementor-absolute elementor-widget elementor-widget-image" data-id="2ed8947" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="430" height="124" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape4.png" class="attachment-large size-large wp-image-4552" alt="" srcset="https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape4.png 430w, https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/shape4-300x87.png 300w" sizes="(max-width: 430px) 100vw, 430px"/>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1390632 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1390632" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5c3301b latest-title" data-id="5c3301b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-971cfcb elementor-mobile-align-left elementor-widget-tablet__width-initial elementor-tablet-align-left elementor-align-left elementor-widget elementor-widget-donik-header" data-id="971cfcb" data-element_type="widget" data-widget_type="donik-header.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <span class="short-title">Community Engagement Platform</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8d0a4d" data-id="f8d0a4d" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
        <section class="elementor-section elementor-inner-section elementor-element elementor-element-254b707 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="254b707" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-57362fc" data-id="57362fc" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4da531b elementor-align-right elementor-mobile-align-left elementor-widget__width-initial elementor-tablet-align-left elementor-widget elementor-widget-donik-button" data-id="4da531b" data-element_type="widget" data-widget_type="donik-button.default">
                            <div class="elementor-widget-container">
                                <div class="theme-btn-wrapper">
                                    <a href="https://donikdemo.boomdevstheme.com/contact/" target="_blank" class="theme-btn style-5 bubble">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e7dd632" data-id="e7dd632" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6d88d31 elementor-mobile-align-left elementor-widget__width-initial elementor-align-left elementor-widget elementor-widget-donik-button" data-id="6d88d31" data-element_type="widget" data-widget_type="donik-button.default">
                            <div class="elementor-widget-container">
                                <div class="theme-btn-wrapper">
                                    <a href="https://donikdemo.boomdevstheme.com/donations/give-food-support-for-every-rural-homeless-poor-children/" target="_blank" class="theme-btn style-1 bubble">Make a contribution</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div></section></div></div></div></section>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<section class="elementor-section elementor-top-section elementor-element elementor-element-35db13d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="35db13d" data-element_type="section">
   
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cec4013" data-id="cec4013" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-b67c50b elementor-widget elementor-widget-donik-testimonials" data-id="b67c50b" data-element_type="widget" data-widget_type="donik-testimonials.default">
                    <div class="elementor-widget-container">
                        <!-- Testimonial Slider Area Start -->
                        <div class="testimonial-slider-area style-3" style="background-image: url('https://donikdemo.boomdevstheme.com/wp-content/uploads/2024/01/bg-1.jpg')">
                            <img decoding="async" class="top-feature-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/curlly3-1.png" alt="Shape">
                            <div class="popup-video-wrapper2">
                                <div class="video-btn2" style="background-image: url('')">
                                    <a href="#" target="_self" class="mfp-iframe video-play">
                                        <i class="fa-solid fa-play" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="container p-0">
                                <div class="row m-0">
                                    <div class="col-lg-7 col-12 p-0">
                                        <div class="slider-inner">
                                            <img decoding="async" class="bottom-feature-icon" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/slice-1.png" alt="Shape">
                                            <div class="testimonial-slider-wrapper has-backgorund-slider testimonial-slider-two-v2 style-3" id="testimonial_slider-area-3">
                                                <!-- Slider Start -->
                                                <div class="testimonial-slider">
                                                    <!-- Single Slider Start -->
                                                    <div class="slider-card">
                                                        <div class="quote-text">
                                                            <i class="fa-solid fa-quote-right"></i>
                                                        </div>
                                                        <div class="section-title">
                                                            <span class="short-title">Testimonials</span>
                                                            <h2 class="title m-0">What people say about us</h2>
                                                            <p class="desc m-0">Humanity is a wonderful, easy to use site. We were able to have a successful silent auction and we could have done it. Lorem ipsum consectetur.</p>
                                                            <div class="meta-user">
                                                                <div class="user-image">
                                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/user1-1.jpg" alt="Wiliam Johnson"/>
                                                                </div>
                                                                <div class="info">
                                                                    <h2>Wiliam Johnson</h2>
                                                                    <p>Azerbaijan</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Slider End -->
                                                    <!-- Single Slider Start -->
                                                    <div class="slider-card">
                                                        <div class="quote-text">
                                                            <i class="fa-solid fa-quote-right"></i>
                                                        </div>
                                                        <div class="section-title">
                                                            <span class="short-title">Testimonials</span>
                                                            <h2 class="title m-0">What people say about us</h2>
                                                            <p class="desc m-0">Humanity is a wonderful, easy to use site. We were able to have a successful silent auction and we could have done it. Lorem ipsum consectetur.</p>
                                                            <div class="meta-user">
                                                                <div class="user-image">
                                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/user2-1.jpg" alt="Robart Jack"/>
                                                                </div>
                                                                <div class="info">
                                                                    <h2>Robart Jack</h2>
                                                                    <p>Azerbaijan</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Slider End -->
                                                </div>
                                                <!-- Slider End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider Area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('.testimonial-slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            infinite: true,
            pauseOnHover: true,
            swipe: true,
        });
    });
</script>

<section class="elementor-section elementor-top-section elementor-element elementor-element-dda7bff elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="dda7bff" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-71f3a77" data-id="71f3a77" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-b0d983b elementor-align-left elementor-widget elementor-widget-donik-blog-post" data-id="b0d983b" data-element_type="widget" data-widget_type="donik-blog-post.default">
                    <div class="elementor-widget-container">
                        <!-- Blog-area Style-1 Start -->
                        <div class="blog-area style-1">
                            <img decoding="async" class="shape-1" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/shape-1-1-1.png" alt="Shape">
                            <img decoding="async" class="shape-2" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/shape-2-1.svg" alt="Shape">
                            <img decoding="async" class="shape-3" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/shape-3-1.svg" alt="Shape">
                            <img decoding="async" class="shape-4" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/11/slice-1.png" alt="Shape">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6 col-12">
                                        <div class="section-title">
                                            <span class="short-title">Blog</span>
                                            <h2 class="title">News &amp;Articles</h2>
                                            <p class="desc">Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Quisque eget augue antel.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4 justify-content-md-start justify-content-lg-end">
                                    <div class="col-md-6 ">
                                        <!-- Single Blog Card Start -->
                                        <div class="blog-card style-1">
                                            <div class="image-wrapper">
                                                <a href="https://donikdemo.boomdevstheme.com/san-francisco-is-officially-the-first-city-to-ban-plastic-bottles-2/">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/latest-blog-1.jpg" alt="blog">
                                                </a>
                                                <!-- <div class="tag"><h6>15 APRIL</h6></div> -->
                                                <div class="tag">
                                                    <h6>21 October</h6>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <h3 class="title">
                                                    <a href="https://donikdemo.boomdevstheme.com/san-francisco-is-officially-the-first-city-to-ban-plastic-bottles-2/">San Francisco is officially the first city to</a>
                                                </h3>
                                                <p class="desc">50K We Helped People $20M Fund Collected 50K Projects How you could help!! Giving help to</p>
                                            </div>
                                            <div class="blog-btn">
                                                <a href="https://donikdemo.boomdevstheme.com/san-francisco-is-officially-the-first-city-to-ban-plastic-bottles-2/" class="theme-btn style-6 bubble">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Single Blog Card End -->
                                    </div>
                                    <div class="col-md-6 ">
                                        <!-- Single Blog Card Start -->
                                        <div class="blog-card style-2">
                                            <div class="image-wrapper">
                                                <a href="https://donikdemo.boomdevstheme.com/weve-reached-2-million-in-donations-and-celebrating-2/">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/latest-blog-2.jpg" alt="blog">
                                                </a>
                                                <!-- <div class="tag"><h6>15 APRIL</h6></div> -->
                                                <div class="tag">
                                                    <h6>21 October</h6>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <h3 class="title">
                                                    <a href="https://donikdemo.boomdevstheme.com/weve-reached-2-million-in-donations-and-celebrating-2/">We’ve reached 2 million in donate and celebrating</a>
                                                </h3>
                                                <p class="desc">50K We Helped People $20M Fund Collected 50K Projects How you could help!! Giving help to</p>
                                            </div>
                                            <div class="blog-btn">
                                                <a href="https://donikdemo.boomdevstheme.com/weve-reached-2-million-in-donations-and-celebrating-2/" class="theme-btn style-6 bubble">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Single Blog Card End -->
                                    </div>
                                    <div class="col-md-6 ">
                                        <!-- Single Blog Card Start -->
                                        <div class="blog-card style-3">
                                            <div class="image-wrapper">
                                                <a href="https://donikdemo.boomdevstheme.com/costa-rica-is-the-surprising-foodie-haven-you-need-to-know-about/">
                                                    <img decoding="async" src="https://donikdemo.boomdevstheme.com/wp-content/uploads/2023/10/latest-blog-3.jpg" alt="blog">
                                                </a>
                                                <!-- <div class="tag"><h6>15 APRIL</h6></div> -->
                                                <div class="tag">
                                                    <h6>21 October</h6>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <h3 class="title">
                                                    <a href="https://donikdemo.boomdevstheme.com/costa-rica-is-the-surprising-foodie-haven-you-need-to-know-about/">Costa Rica is the surprising foodie haven you</a>
                                                </h3>
                                                <p class="desc">50K We Helped People $20M Fund Collected 50K Projects How you could help!! Giving help to</p>
                                            </div>
                                            <div class="blog-btn">
                                                <a href="https://donikdemo.boomdevstheme.com/costa-rica-is-the-surprising-foodie-haven-you-need-to-know-about/" class="theme-btn style-6 bubble">Read More</a>
                                            </div>
                                        </div>
                                        <!-- Single Blog Card End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog-area Style-1 End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="donik_subscriber_widget-1" class="footer-top-widget widget_donik_subscriber_widget">
    <!-- Newsletter-area style-1 Start -->
    <div class="newsletter-area style-1">
        <div class="sketch-1">
            <img src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/heart-2-white.png" alt="sketch">
        </div>
        <div class="sketch-2">
            <img src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/shape1.png" alt="sketch">
        </div>
        <div class="container">
            <div class="subscribe-form">
                <div class="section-title">
                    <span class="short-title">Join us</span>
                    <h2 class="title">Let’s be a Part of Change</h2>
                </div>
                <div class="subscribe-form-widget">
                    <div class="sketch-3">
                        <img src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/img/slice.png" alt="sketch">
                    </div>
                    <form action="#">
                        <div class="mc4wp-form-fields">
                            <div class="single-field">
                                <script>
                                    (function() {
                                        window.mc4wp = window.mc4wp || {
                                            listeners: [],
                                            forms: {
                                                on: function(evt, cb) {
                                                    window.mc4wp.listeners.push({
                                                        event: evt,
                                                        callback: cb
                                                    });
                                                }
                                            }
                                        }
                                    }
                                    )();
                                </script>
                                <!-- Mailchimp for WordPress v4.9.11 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1486" method="post" data-id="1486" data-name="">
                                    <div class="mc4wp-form-fields">
                                        <div class="single-field">
                                            <input type="email" placeholder="Enter your e-mail address">
                                            <button type="submit" class="theme-btn style-7 bubble">Join Now</button>
                                        </div>
                                    </div>
                                    <label style="display: none !important;">
                                        Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"/>
                                    </label>
                                    <input type="hidden" name="_mc4wp_timestamp" value="1723260328"/>
                                    <input type="hidden" name="_mc4wp_form_id" value="1486"/>
                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"/>
                                    <div class="mc4wp-response"></div>
                                </form>
                                <!-- / Mailchimp for WordPress Plugin -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter-area style-1 End -->

</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="copyright-text">
                    <p>Copyright ©2024 Siyakha. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function(body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    }
    )(document.body);
</script>
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }

        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    }
    )();
</script>
<div id="scrollTop" class="scrollup-wrapper">
    <div class="scrollup-btn">
        <i class="fa-regular fa-angle-up"></i>
    </div>
</div>
<script>
    /* <![CDATA[ */
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
            "all": "All",
            "next": "Next",
            "previous": "Previous"
        },
        "select": {
            "rows": {
                "0": "",
                "_": ": Selected %d rows",
                "1": ": Selected 1 row"
            }
        },
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        },
        "registration_prompt": "There is unsaved attendee information. Are you sure you want to continue?"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.4" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/donikdemo.boomdevstheme.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>

<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/give/assets/dist/js/give-donation-summary.js?ver=3.8.0" id="give-donation-summary-script-frontend-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/bootstrap.min.js?ver=6.6.1" id="bootstrap-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.nice-select.min.js?ver=6.6.1" id="jquery.nice-select-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/slick.min.js?ver=6.6.1" id="slick-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.counterup.min.js?ver=6.6.1" id="jquery.counterup-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/waypoints.min.js?ver=6.6.1" id="waypoints-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/TweenMax.min.js?ver=6.6.1" id="TweenMax-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.meanmenu.min.js?ver=6.6.1" id="jquery.meanmenu-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.scrollUp.min.js?ver=6.6.1" id="jquery.scrollUp-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery.magnific-popup.min.js?ver=6.6.1" id="jquery.magnific-popup-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/inview.min.js?ver=6.6.1" id="inview-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/wow.min.js?ver=6.6.1" id="wow-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/jquery-parallax.min.js?ver=6.6.1" id="jquery-parallax-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/tilt.jquery.min.js?ver=6.6.1" id="tilt.jquery-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/plugins.js?ver=6.6.1" id="donik-plugins-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/themes/donik/js/custom.js?ver=1.0.1" id="donik-main-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/donik-elementor/assets/js/donik-elementor.js?ver=1.0.0" id="donik-elementor-js"></script>
<script type="text/javascript" defer src="https://donikdemo.boomdevstheme.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.11" id="mc4wp-forms-api-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.21.1" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.21.1" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 992,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 991,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1024,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": true
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1280,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.21.1",
        "is_static": false,
        "experimentalFeatures": {
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "container_grid": true,
            "home_screen": true,
            "ai-layout": true,
            "landing-pages": true
        },
        "urls": {
            "assets": "https:\/\/donikdemo.boomdevstheme.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_tablet_extra", "viewport_laptop"],
            "viewport_tablet": 991,
            "viewport_tablet_extra": 1024,
            "viewport_laptop": 1280,
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 4407,
            "title": "Home%203%20%E2%80%93%20Donik",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="https://donikdemo.boomdevstheme.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.21.1" id="elementor-frontend-js"></script>
</body></html>
