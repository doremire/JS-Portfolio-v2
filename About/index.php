<!DOCTYPE html>
<html class="no-js" lang="ja" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Doremire-server</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/icon2.png" />
    <link rel="apple-touch-icon" href="image/icon2.png">
    <meta name="theme-color" content="#fafafa">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- bulmaを読み込む -->
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!-- cssを読み込む -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/Layout/navbar.css">
    <link rel="stylesheet" href="/css/Layout/footer.css">
    <!-- three.min.jsを読み込む -->
    <script src=" https://unpkg.com/three@0.140.2/build/three.min.js "> </script>
    <!-- OrbitControls.jsを読み込む -->
    <script src="https://unpkg.com/three@0.137.4/examples/js/controls/OrbitControls.js"></script>
    <!-- GLTFLoader.jsを読み込む -->
    <script src="https://unpkg.com/three@0.137.4/examples/js/loaders/GLTFLoader.js"></script>
    <!-- index.jsを読み込む -->
    <script src="/three/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js
"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css
">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/twemoji@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
    <style>
        img.emoji {
            height: 1em;
            width: 1em;
            margin: 0 .05em 0 .1em;
            vertical-align: -0.1em;
        }
    </style>
</head>

<body>
    <div class="loading">
        <span class="circle"></span>
    </div>
    <script>
        const loading = document.querySelector('.loading');
        window.addEventListener('load', () => {
            loading.classList.add('hide');
        }, false);
        setTimeout(() => {
            document.getElementById('container1').style.opacity = 0;
        }, 5000);
        document.addEventListener('DOMContentLoaded', () => {
            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {
                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        });
    </script>
    <!-- ヘッダー -->
    <?php
    include_once('../components/header.php');
    ?>
    <!-- メイン -->
    <div id="main_canvas">
        <canvas id="myCanvas" style="pointer-events: none;"></canvas>
    </div>
    <h1 class="has-text-centered title m-4">About</h1>
    <div class="box">
        <section class="section">
            <div class="container">
                <div class="columns is-justify-content-center">
                    <div class="column is-one-fifth">
                        <figure class="image is-128x128">
                            <img class="is-rounded" src="../image/icon.png">
                        </figure>
                    </div>
                    <div class="column">
                        <h1 class="title">
                            Hi, there👋
                        </h1>
                        <p class="subtitle">
                            I'm learning <strong>web</strong> development!
                        </p>
                        <div class="column" style="margin-left: -24px;">
                            <div class="column">
                                <p>名前：doremire</p>
                            </div>
                            <div class="column">
                                <p>現在：高校生(16)</p>
                            </div>
                            <div class="column">
                                <p>内容：Webサイト/Webアプリケーションの開発及び制作を行っています。</p>
                            </div>
                            <div class="column">
                                <p>勉強中：<i class="fa-brands fa-laravel"></i>Laravel/<i class="fa-brands fa-docker"></i>Docker/<i class="fa-brands fa-linux"></i>Linux/
                                    <i class="fa-brands fa-node"></i>Node.js/Express
                                </p>
                            </div>
                            <div class="column">
                                <p>学習カテゴリ：セキュリティ/Web全般</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <div class="box">
        <div class="columns is-mobile">
            <div class="column">
                <div class="columns is-mobile">
                    <div class="column">
                        <p>[メインスキル]</p>
                        <p><i class="fa-brands fa-html5"></i>HTML5</p>
                        <p><i class="fa-brands fa-css3-alt"></i>CSS3</p>
                        <p><i class="fa-brands fa-js"></i>JavaScript</p>
                        <p><i class="fa-brands fa-php"></i>PHP</p>
                        <p><svg width="30px" height="25px" role="img" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z" />
                            </svg>MySQL</p>
                    </div>
                    <div class="column">
                        <p>[サブスキル]</p>
                        <p><i class="fa-brands fa-sass"></i>SASS</p>
                        <p>C language</p>
                        <p><svg width="12px" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.525 5.87c-2.126 3.054-1.862 7.026-.237 10.269.037.079.078.154.118.229.023.052.049.1.077.15.013.027.031.056.047.082.026.052.054.102.081.152l.157.266c.03.049.057.097.09.146.056.094.12.187.178.281.026.04.05.078.079.117a6.368 6.368 0 00.31.445c.078.107.156.211.24.315.027.038.058.076.086.115l.22.269c.028.03.055.067.084.099.098.118.202.233.306.35l.005.006a3.134 3.134 0 00.425.44c.08.083.16.165.245.245l.101.097c.111.105.223.209.34.309.002 0 .003.002.005.003l.057.05c.102.089.205.178.31.26l.125.105c.085.068.174.133.26.2l.137.105c.093.07.192.139.287.207.035.025.07.05.106.073l.03.023.28.185.12.08c.148.094.294.184.44.272.041.02.084.044.123.068.108.062.22.125.329.183.06.034.122.063.184.094.075.042.153.083.234.125a.324.324 0 01.056.023c.033.015.064.031.096.047.12.06.245.118.375.175.024.01.05.02.076.034.144.063.289.123.438.182.034.01.07.027.105.04.135.051.274.103.411.152l.05.018c.154.052.305.102.46.15.036.01.073.023.111.033.16.048.314.105.474.137 10.273 1.872 13.258-6.177 13.258-6.177-2.508 3.266-6.958 4.127-11.174 3.169-.156-.036-.312-.086-.47-.132a13.539 13.539 0 01-.567-.182l-.062-.024c-.136-.046-.267-.097-.4-.148a1.615 1.615 0 00-.11-.04c-.148-.06-.29-.121-.433-.184-.031-.01-.057-.024-.088-.036a23.44 23.44 0 01-.362-.17 1.485 1.485 0 01-.106-.052c-.094-.044-.188-.095-.28-.143a3.947 3.947 0 01-.187-.096c-.114-.06-.227-.125-.34-.187-.034-.024-.073-.044-.112-.066a15.922 15.922 0 01-.439-.27 2.107 2.107 0 01-.118-.078 6.01 6.01 0 01-.312-.207c-.035-.023-.067-.048-.103-.073a9.553 9.553 0 01-.295-.212c-.042-.034-.087-.066-.132-.1-.088-.07-.177-.135-.265-.208l-.118-.095a10.593 10.593 0 01-.335-.28.258.258 0 00-.037-.031l-.347-.316-.1-.094c-.082-.084-.166-.164-.25-.246l-.098-.1a9.081 9.081 0 01-.309-.323l-.015-.016c-.106-.116-.21-.235-.313-.355-.027-.03-.053-.064-.08-.097l-.227-.277a21.275 21.275 0 01-.34-.449C2.152 11.79 1.306 7.384 3.177 3.771m4.943-.473c-1.54 2.211-1.454 5.169-.254 7.508a9.111 9.111 0 00.678 1.133c.23.33.484.721.793.988.107.122.223.24.344.36l.09.09c.114.11.232.217.35.325l.016.013a9.867 9.867 0 00.414.342c.034.023.063.05.096.073.14.108.282.212.428.316l.015.009c.062.045.128.086.198.13.028.018.06.042.09.06.106.068.21.132.318.197.017.007.032.016.048.023.09.055.188.108.282.157.033.02.065.035.1.054.066.033.132.068.197.102l.032.014c.135.067.273.129.408.19.034.014.063.025.092.039.111.048.224.094.336.137.05.017.097.037.144.052.102.038.21.073.31.108l.14.045c.147.045.295.104.449.13C22.164 17.206 24 11.098 24 11.098c-1.653 2.38-4.852 3.513-8.261 2.628a8.04 8.04 0 01-.449-.13c-.048-.014-.09-.029-.136-.043-.104-.036-.211-.07-.312-.109l-.144-.054c-.113-.045-.227-.087-.336-.135-.034-.015-.065-.025-.091-.04-.14-.063-.281-.125-.418-.192l-.206-.107-.119-.06a5.673 5.673 0 01-.265-.15.62.62 0 01-.062-.035c-.106-.066-.217-.13-.318-.198-.034-.019-.065-.042-.097-.062l-.208-.136c-.144-.1-.285-.208-.428-.313-.032-.029-.063-.053-.094-.079-1.499-1.178-2.681-2.79-3.242-4.613-.59-1.897-.46-4.023.56-5.75m4.292-.147c-.909 1.334-.996 2.99-.37 4.46.665 1.563 2.024 2.79 3.608 3.37.065.025.128.046.196.07l.088.027c.092.03.185.063.28.084 4.381.845 5.567-2.25 5.886-2.704-1.043 1.498-2.792 1.857-4.938 1.335a4.85 4.85 0 01-.516-.16 6.352 6.352 0 01-.618-.254 6.53 6.53 0 01-1.082-.66c-1.922-1.457-3.113-4.236-1.859-6.5" />
                            </svg>jQuery</p>
                        <p><svg width="20px" height="15px" role="img" viewBox="0 -2 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Bulma</title>
                                <path d="M11.25 0l-6 6 -1.5 10.5 7.5 7.5 9 -6 -6 -6 4.5 -4.5 -7.5 -7.5Z" />
                            </svg>Bulma</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="columns is-mobile">
            <div class="column">
                <div class="columns is-mobile">
                    <div class="column">
                        <p>[学びたい言語]</p>
                        <p>Java</p>
                        <p>Python</p>
                        <p>[その為]</p>
                        <p>Tailwind CSS</p>
                        <p>BootStrap</p>
                    </div>
                    <div class="column">
                        <p>[作りたい物]</p>
                        <p>Discord Bot</p>
                        <p>ソフトウェア</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="box">
        <p>[開発した物]</p>
        <p>Webサイト</p>
        <p>Webアプリケーション</p>
        <p>LINE Bot</p>
        <p>IDEの拡張機能</p>
    </div>


    <div class="box mb-6">
        <p>経歴：2022/01/27よりWeb制作を始める
        <details>
            <summary>詳細</summary>
            2022/1月：デベロッパーツールからHTML/CSSを知る<br>
            2022/2月：C言語を知り始める<br>
            2022/3月：JavaScriptを始める<br>
            2022/4月：簡易手な掲示板サイトを公開<br>
            2022/5月：簡単なDOM操作<br>
            2022/6月：パソコンを分解した<br>
            2022/7月：クラスのLINE Bot開発<br>
            2022/8月：ポートフォリオ制作<br>
            2022/9月：拡張機能開発<br>
            2022/10月：PHP/MySQLを知り始める<br>
            2022/11月：セキュリティの勉強を始める<br>
            2022/12月：国家試験がありました<br>
            ──────────────────<br>
            2023/1月：自宅サーバ構築しました<br>
            2023/2月：本格的にサービスを提供を始めました
        </details>
        </p>
        <p>業務経歴：なし
        <details>
            <summary>詳細</summary>
            なし
        </details>
        </p>
    </div>
    <!-- フッター -->
    <!--   footer starts from here  -->
    <?php
    include_once('../components/footer.php');
    ?>
</body>
<script>
    twemoji.parse(document.body)
</script>

</html>