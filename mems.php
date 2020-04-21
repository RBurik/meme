<?php

//$freeUserId = ( $_COOKIE['_free_user_id'] != '' ? $_COOKIE['_free_user_id'] : null);
//var_dump($userFree); die;
$freeUserId = $userFree['id'];

/*
echo '<pre>';
    var_dump($userFree['id']);
    var_dump($freeUserId);
echo '</pre>';
*/

if ( $auth_user_arr["user"] == 'dima_traflinks' || $auth_user_arr["user"] == 'andrey_php' || $auth_user_arr["user"] == 'maxim_traflinks' ) {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}

?>
<base href='/'>

<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-param" content="_csrf">
        <meta name="csrf-token" content="am9XS3Q5STFYKhEyMUt7eCY/IHsman4FPjwBGR9.LFVaImcbEAEnYQ==">
        <title>Бесплатная раскрутка сайта. Результат через две недели!</title>
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="traflinks.com">
        <meta property="og:title" content="Бесплатная раскрутка сайта. Результат через две недели! Бесплатное продвижение сайта. Облачное SEO.  Белое СЕО продвижение.">
        <meta property="og:description" content="Нет времени объяснять, просто зайди!">
        <meta property="og:url" content="https://traflinks.com/cloud-seo">
        <meta property="og:locale" content="ru_RU">
        <meta property="og:image" content="https://traflinks.com/images/chto-takoye-oblachnoye-seo_968x504.gif">
        <meta property="og:image:width" content="968">
        <meta property="og:image:height" content="504">
        <meta name="twitter:title" content="Бесплатное продвижение сайта. Облачное SEO.  Белое СЕО продвижение.">
        <meta name="twitter:description" content="Бесплатное продвижение сайта. Облачное SEO.  Белое СЕО продвижение. Мы не берем предоплату, две недели бесплатно! Попробуйте облачное продвижение сайта сейчас.">
        <meta name="twitter:image:src" content="https://traflinks.com/images/chto-takoye-oblachnoye-seo_968x504.gif">
        <meta name="twitter:url" content="https://traflinks.com/cloud-seo">
        <meta name="twitter:domain" content="traflinks.com">
        <meta name="twitter:site" content="@">
        <meta name="twitter:creator" content="@traflinkscom">


        <link href="https://traflinks.com/free" rel="canonical">
        <link rel="icon"  href="/favicon.ico">

        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-N97TJHN');</script>
        <!-- End Google Tag Manager -->

        <link href="assets/876d035c/slick.css?v=1519469845" rel="stylesheet">
        <link href="assets/876d035c/slick-theme.css?v=1519469845" rel="stylesheet">
        <link href="assets/b0567d4c/css/bootstrap.css?v=1519469844" rel="stylesheet">
        <link href="css/site.css?v=1519469845" rel="stylesheet">
        <link href="css/styles.css?v=1521582580" rel="stylesheet">
        <script src="assets/96500297/jquery.js?v=1519469843"></script>
        <script src="assets/3d6163f6/yii.js?v=1519469846"></script>
        <script src="js/main.js?v=1519469846"></script>
<?= $HEAD; ?>

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N97TJHN"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 852701326;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/852701326/?guid=ON&amp;script=0"/>
        </div>
        </noscript>
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 852701326;
            var google_conversion_label = "ay-XCMafnXEQjuHMlgM";
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/852701326/?value=1.00&amp;currency_code=UAH&amp;label=ay-XCMafnXEQjuHMlgM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>


        <script type="text/javascript">
            var baseUrl = '';
        </script>

        <a href="//www.free-kassa.ru/" class="hidden"><img src="//www.free-kassa.ru/img/fk_btn/23.png"></a>

        <div id="page_wrapper">

            <header>
                <div class="container-fluid">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"><span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="brand-logo hidden-md hidden-lg navbar-brand" href="">
                                <img src="https://traflinks.com/images/logo_main.png" alt="TrafLinks Облачное SEO">
                            </a>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse">
                            <ul class="list-inline my-nav">
                                <li><a href="/">О нас</a></li>
                                <li><a href="/blog/">Блог</a></li>
                                <li><a href="/#comment">Отзывы</a></li>
                                <li class="logo hidden-xs hidden-sm"><a href="/"><img src="/images/logo_main.png" alt="Logo"></a></li>
                                <li><a href="/#pricing ">Цены</a></li>
                                <li><a href="https://traflinks.ru/contact" target="_blank">Контакты</a></li>
                                <li><a class='login-btn' target="_blank" href='https://traflinks.com/user/index.php' target="_blank">Войти</a></li></ul>
                        </div>
                    </nav>
                </div><!-- end of container -->
            </header>



            <section class="software">
                <div class="software-header" style="background: none;    min-height: auto;" >
                    <div class="container">
                        <h1>Промоматериалы облачного SEO</h1>
                        <p class="software-sub">Результат через две недели!</p>
                        <div class="enter-text">Облачное SEO - белее не бывает!<br>
                            <br>
                            <br>
                        </div>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-16_13-15-42-.jpg'>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-16_17-36-08-.jpg'>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-18_00-03-40.jpg'>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-18_00-03-52.jpg'>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-18_00-04-12.jpg'>
					<img style='max-width:200px;max-height:200px;margin:10px;' src='/blog_html/index/promo/mems/photo_2020-04-18_00-30-27.jpg'>
					


                    </div>
                </div>
                <div class="software-header software-headermob" style="margin-top: -270px; z-index: -9;" >
                </div>

            </section>

            <div id="modal" class="fade modal" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h2>Вход</h2>
                        </div>
                        <div class="modal-body">
                            <div id='modal-content'></div>

                        </div>

                    </div>
                </div>
            </div>


            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/"> <img src="/images/logo_white.png" alt="Logo"> </a>
                            <ul class="traflinks-info">
                                <li class="phone"><span class="glyphicon glyphicon-earphone"></span> +38(098)132-00-68</li>
                                <li class="phone"><span class="glyphicon glyphicon-earphone"></span> +38(063)132-00-68</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>Облачное SEO</h3>
                            <ul>
                                <li><a   href="/#o-nas">О нас</a></li>
                                <li><a   href="/#pricing">Цены</a></li>
                                <li><a target="_blank" href="https://traflinks.ru/contact" target="_blank">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>Соглашение</h3>
                            <ul>
                                <li><a target="_blank" href="https://traflinks.com/terms.html" target="_blank">Условия использования</a></li>
                                <li><a target="_blank" href="https://traflinks.com/guarantees.html" target="_blank">Гарантии</a></li>
                                <li>© 2018. TRAFLINKS.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>


        <!--Start of REPLAIN Script-->
        <script>
            var __REPLAIN_ = '5a04b95d-1856-4712-9415-33859c035304';
            (function (u) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = u;
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })
                    ('https://widget.replain.cc/dist/client.js');
        </script>
        <!--End of REPLAIN Script-->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115893748-2"></script>
        <script>
                            window.dataLayer = window.dataLayer || [];
                            function gtag() {
                                dataLayer.push(arguments);
                            }
                            gtag('js', new Date());

                            gtag('config', 'UA-115893748-2');
        </script>


        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter44603992 = new Ya.Metrika({
                            id: 44603992,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true,
                            ut: "noindex"
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/44603992?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window,
                    document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1701775489840365'); // Insert your pixel ID here.
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1701775489840365&ev=PageView&noscript=1"
                       /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->

        <script>

            $(document).ready(function () {
                $("#devicewidth").val(screen.width + 'x' + screen.height);


                $("#btn").click(
                        function () {
                            $('#result_form').html('Отправка...');
                            sendAjaxForm('result_form', 'ajax_form', '/blog_html/index/action_ajax_form.php');
                            return false;
                        }
                );
            });

            function sendAjaxForm(result_form, ajax_form, url) {

                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: 'json',
                    data: $("#" + ajax_form).serialize(),
                    success: function (data) {
                        if (data.status > 0) {
                            $('#result_form').removeClass('error').html(data.msg);
                        }
                        else {
                            $('#result_form').addClass('error').html(data.msg);
                        }
                        //setTimeout("$('#result_form').html('')", 4000);
                        return;
                    }
                });
            }

        </script>
        <script src="assets/876d035c/slick.min.js?v=1519469845"></script>
        <script src="assets/b0567d4c/js/bootstrap.js?v=1519469844"></script>
        <script type="text/javascript">jQuery(document).ready(function () {
                ;
                jQuery('#w0').slick({"autoplay": false, "dots": true, "arrows": true});
                jQuery('#modal').modal({"show": false});
            });</script></body>
</html>
