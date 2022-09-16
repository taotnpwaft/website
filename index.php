<?php include('./DatabaseHelper.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art of Tech: Not Playing with a Full Tech</title>
    <meta name="description" content="The Art of Tech: Not Playing with a full tech is a social media tech group.">
    <meta name="keywords" content="tech group social media blog chat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Gregory K. Bowne">
    <link rel="manifest" href="manifest.json">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="manifest" href="/app.webmanifest" crossorigin="use-credentials">
    <meta name="format-detection" content="telephone=no">
    <meta name="alexaVerifyID" content="">
    <meta name="p:domain_verify" content="">
    <meta name="apple-mobile-web-app-title" content="TAOTNPWAFT">
    <meta name="theme-color" content="#7d7f7c">
    <meta name="msapplication-config" content="none" />
    <meta name="google-site-verification" content="sitekeyhere">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="mask-icon" href=".svg" color="#de2600">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" href="https://taotnpwaft.org/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon" href="imagelinkhere">
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <meta name="msvalidate.01" content="bingvalidationkeyhere">
    <meta name="copyright" content="Copyright 2022 The Art of Tech:Not Playing with a Full Tech,LLC.">
    <link rel="canonical" href="https://taotnpwaft.org/">
    <link rel="dns-prefetch" href="https://ajax.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://www.gstatic.com">
    <link rel="dns-prefetch" href="https://apis.google.com">
    <link rel="dns-prefetch" href="https://ajax.googleapis.com" />
    <link rel="dns-prefetch" href="https://apis.google.com" />
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
    <link rel="dns-prefetch" href="https://google-analytics.com" />
    <link rel="dns-prefetch" href="https://maps.googleapis.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />
    <link rel="preconnect" href="https://google-analytics.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="" href="/rss.xml">
    <link rel="alternate" title="The Art of Tech: Not Playing with a Full Tech" href="https://www.taotnpwaft.org/index.html" hreflang="en">
    <meta name="google-site-verification" content="">
    <meta name="google" value="notranslate">
    <meta name="referrer" content="safe-url">
    <link rel="alternate" type="application/rss+xml" title="TAOTNPWAFT - RSS Feed" href="/rss">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="application-name" content="">
    <link rel="preconnect dns-prefetch" href="https://www.google-analytics.com">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">
    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/octicons.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open_Sans&family=Monsterrat&family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Open Sans|Lato|Monsterrat" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" integrity="sha512-Mqfoc3Z3HrXDAkb9KWQklaedI9QNM01mqRaruK/LWtT3JU6BuxnbHg0MTqowzr2P8/Xdd0ITR0po3A4R5T0h2w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" type="text/css" href="styles/TAOT.css">
    <!-- dark theme -->
    <link rel="stylesheet" type="text/css" href="styles/TAOTtheme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXX');
    </script>
    <!-- End Google Tag Manager -->
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","url":"https://taotnpwaft.org/","potentialAction":{"@type":"SearchAction","target":"https://taotnpwaft.org/search/{search_term_string}?from=google","query-input":"required name=search_term_string"}}</script>
</head>

<body class="dark-theme || light-theme">
<?php include ('./components/header.php');?>

    <!-- #page-content-wrapper -->
    <main>
        <div class="main">
            <div class="container-fluid mt-5 mb-5">
                <div class="row">
                    <div class="col-md-9">
                        <p class="lead text-lg-center">Welcome to The Art of Tech: Not Playing with a Full Tech Facebook group website. This is a place to learn, grow, share, educate, mentor, help, etc. The goal of this group is to have a safe place to discuss and share our tech lives,
                            the many, many tech things we do that help us in our lives as well as others. We are all Windows, Unix and Linux users of various levels who like to share our expertise with others no matter how basic or advanced they are.
                            My premise for creating The Art of Tech: Not Playing with a Full Tech Facebook is because there seems to be somewhat of a gap in social media for tech, IT, Networking people to get together and share without any of the usual
                            cons to posting on a social media platform. Any of us who have spent time in a tech Facebook group, tech reddit such as r/linux, Youtube, instagram, etc. etc. knows that there is plenty of misinformation as well as the 'keyboard
                            warriors'. Most of the Facebook groups you see MEME's, YouTube links, website links, irrelevant posts, SPAM, people who SPAM their non-tech related sites, irrelevant self-promotion, plenty of other useless stuff and not much
                            actual learning, discussion, sharing, growing, educating, mentoring, etc. We allow the beginners to share their questions as well as allowing the pros to share their knowledge, advice without fear of the normal things that
                            may happen when one posts to a social media outlet such at the above.</p>
                        <!-- This needs to go into a bootstrap card -->
                    </div>
                    <aside class="col-md-3">
                        <div>
                            <div class="card">
                                <h4 class="card-title">Curabitur gravida vestibulum imperdiet.</h4>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat imperdiet sem.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <!-- /#page-content-wrapper -->
<?php include ('./components/footer.php');?>
    <!--Modal Register Form-->
    <div class="modal" id="FormRegisterModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="TAOT-authmsg" id="regMsg"></div>
                <div class="TAOT-authmsg" id="uMsg"></div>
                <div class="TAOT-authmsg" id="eMsg"></div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtUserName"><i class="fa fa-user text-white"></i></span>
                        <input type="text" id="regUserName" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="txtUserName">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtEmail"><i class="fa fa-envelope text-white"></i></span>
                        <input type="text" id="regEmail" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="txtEmail">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPassword"><i class="fa fa-lock text-white"></i></span>
                        <input type="password" id="regPassword" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="txtPassword">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPassword"><i class="fa fa-lock text-white"></i></span>
                        <input type="password" id="regConfirmPassword" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="txtPassword">
                        <span class="input-group-text bg-transparent" id="txtPassword"><i class="fa fa-eye toggle-password"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="agreeBox">
                        <label for="agreeBox"> <a  class="text-decoration-none" href="#">Accept the terms & policies</a></label>
                    </div>
                    <button type="button" id="cmdRegister" class="btn btn-primary" disabled>Register</button>
                </div>
                <div class="footer-alt">

                    <span>Already have an account?</span>
                    <a href="#" onclick="showLogin()"> Login</a>

                </div>
            </div>
        </div>
    </div>
    <!--Modal Login Form-->
    <div class="modal" id="FormLoginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="TAOT-authmsg" id="logMsg"></div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtUserName"><i class="fa fa-user text-white"></i></span>
                        <input type="text" id="logUserName" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="txtUserName">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPassword"><i class="fa fa-lock text-white"></i></span>
                        <input type="password" id="logPassword" minlength="8" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="txtPassword">
                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="cmdLogin" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("TAOTSideNav").style.width = "250px";
            document.getElementById("main").style.left = "250px";
            document.getElementById("main").style.opacity = "0.8";
        }

        function closeNav() {
            document.getElementById("TAOTSideNav").style.width = "0";
            document.getElementById("main").style.left = "0";
            document.getElementById("main").style.opacity = "0.8";
        }
        var max_width = window.matchMedia("(max-width: 768)");
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            InitialiseLoginGrid();
        });
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-');
    </script>
    <!-- toggler for dark mode-->
    <script type="text/javascript">
        document.getElementById("toggle").addEventListener("click", function() {
            document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
        });
    </script>
    <script src="https://cdn.cookielaw.org/scripttemplates/6.10.0/otBannerSdk.js" async="" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="//bat.bing.com/bat.js" async=""></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" async="" src="https://www.google.com/pagead/conversion_async.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script type="text/javascript" async="" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
    <script src="https://partner.googleadservices.com/gampad/cookie.js?domain="></script>
    <script src="https://www.googleoptimize.com/optimize.js?id=(keyhere)"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-xxxxxxxx-x', 'xxxxxx.com');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '');
    </script>
    <script id="googleAnalytics">window.dataLayer = window.dataLayer || [];
        dataLayer.push({'event': 'customerIdEvent',
                        'customerId': 'GUESTACCT'});</script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        }, ga.l = +new Date, ga("create", "", "auto")
    </script>
    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script src="Libs/Bootstrap/js/bootstrap.js"></script>
    <script src="Libs/JQWidgets/jqwidgets/jqx-all.js"></script>
    <script src="Libs/Toastr/build/toastr.min.js"></script>
    <script src="Scripts/TAOTGeneral.js"></script>
    <script src="Scripts/TAOTGrid.js"></script>
    <script src="Scripts/TAOTAuth.js"></script>

</body>

</html>
