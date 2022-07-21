<?php include('../DatabaseHelper.php');?>
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
    <link rel="preconnect" href="https://google-analytics.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="http://www.google.com">
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
    <link rel="stylesheet" type="text/css" href="../styles/TAOT.css">
    <!-- dark theme -->
    <link rel="stylesheet" type="text/css" href="../TAOTtheme.css">
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
    <?php include '../components/header.php';?>
    <main role="main">
        <div class="main">
            <div class="container-fluid mt-5 mb-5">
                <div class="row">
                    <div class="card" style="width: 75rem; border: .75px solid black; margin-left:auto"></div>
                </div>
            </div>
        </div>
        <section class="blog-section">
            <div class="blog-card">
                <img src="blog-header.phg" class="blog-header-image" alt="">
                <h1 class="blog-title">Lorem</h1>
                <p class="">Lorem ipsum paragrapho</p> 
                <a href="/" class="btn dark">Read</a>
                <a href="/" class="btn grey">Edit</a>
                <a href="/" class="btn danger">Delete</a>

                <div class="blog">
                    <h1 class="blog-title"></h1>
                    <p class="published"><span> Published at - </span></p>
                    <div class="article">
                        <article>

                        </article>
                    </div>
                    <h1 class="subheading">Read more</h1>
                </div>

            </div>
        </section>
        <section id="search" class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts...">
                            <div class="input-group-append">
                                <button class="btn background-primary" id="searchPostBtn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="posts">
            <div class="container">
                <div class="row">
                    <div class="col" id="post-parent">
                        <div class="card" id="post-container">
                            <div class="card-header text-center">
                                <h4>All Posts</h4>
                            </div>
                            <table class="table table-striped" id="post-table">
                                <thead class="background-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody id="post-table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- /#page-content-wrapper -->

    <?php include('../components/footer.php');?>
   
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
    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            InitialiseLoginGrid();
        });
    </script>
    <script>window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-');</script>
    <script type="text/javascript">
        document.getElementById("toggle").addEventListener("click", function () {
            document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id="></script>
    <script src="https://www.googleoptimize.com/optimize.js?id="></script>
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/"></script>
    <script src="https://partner.googleadservices.com/gampad/cookie.js?domain="></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" async="" src="https://www.google.com/pagead/conversion_async.js"></script>
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/website/Libs/JQWidgets/jqwidgets/jqx-all.js"></script>
    <script src="/website/Scripts/TAOTGeneral.js"></script>
    <script src="/website/Scripts/TAOTGrid.js"></script>
</body>

</html>
