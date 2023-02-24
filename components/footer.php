<!-- フッター -->
<!--   footer starts from here  -->
<footer class="footer">

    <div class="columns">
        <div class="column">
            <div class="columns is-mobile">
                <div class="column">
                    <figure class="image is-96x96">
                        <img class="is-rounded" src="/image/icon2.png">
                    </figure>
                </div>
                <div class="column">
                    <h4 class="bd-footer-title
           has-text-weight-medium
           has-text-justify">
                        About
                    </h4>


                    <!-- Column 4 lists with links -->
                    <p class="bd-footer-link">
                        <a href="https://">
                            <span class="icon-text">
                                <span>このサイトについて</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://">
                            <span class="icon-text">
                                <span>お知らせ</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://">
                            <span class="icon-text">
                                <span>サーバーの稼働状態</span>
                            </span>
                        </a>
                        <br>
                        <a href="https://">
                            <span class="icon-text">
                                <span>推奨動作環境</span>
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- メンテナンス用 -->
        <div class="column">
            <div class="columns is-mobile">
                <div class="column">
                    <h4 class="bd-footer-title 
 has-text-weight-medium 
 has-text-justify">
                        Contents
                    </h4>
                    <!-- Column 2 lists with links -->
                    <p class="bd-footer-link">
                        <a href="/Home/">
                            <span class="icon-text">
                                <span>Home</span>
                            </span>
                        </a>
                        <br />
                        <a href="/About/">
                            <span class="icon-text">
                                <span>About</span>
                            </span>
                        </a>
                        <br />
                        <a href="">
                            <span class="icon-text">
                                <span>Works</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://blog.doremire-server.com/">
                            <span class="icon-text">
                                <span>Blog</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://doremire-server.com/Contact.html">
                            <span class="icon-text">
                                <span>Contact</span>
                            </span>
                        </a>
                        <br />
                    </p>
                </div>
                <div class="column">
                    <h4 class="bd-footer-title
 has-text-weight-medium
 has-text-justify">
                        Links
                    </h4>
                    <!-- Column 3 lists with links -->
                    <p class="bd-footer-link">
                        <a href="https://">
                            <span class="icon-text">
                                <span>Twitter</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://">
                            <span class="icon-text">
                                <span>GitHub</span>
                            </span>
                        </a>
                        <br />
                        <a href="https://">
                            <span class="icon-text">
                                <span>Qiita</span>
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- <hr class="navbar-divider m-5" style="background-color: #96969696; height: .1px;"> -->

    <!-- HTMLコード -->
    <hr class="hr1">

    <!-- Copyright symbol of company -->
    <div class="content has-text-centered">
        <p id="copy"></p>
        <script>
            let nowtime = new Date();
            let year = nowtime.getFullYear();
            document.getElementById("copy").innerHTML = `
                <footer>
                Copyright © 2022 - ${year} <a href="https://doremire-server.com/"><strong>doremire-server.com</strong></a> By <a href="https://twitter.com/doremire0"><strong>doremire</strong></a> All Rights Reserved.
                <a href="/terms/" class="footer-border">&emsp;利用規約&emsp;</a>
                <a href="/Notes/" class="footer-border">&emsp;注意事項&emsp;</a>
                <a href="/privacy/" class="footer-border">&emsp;プライバシーポリシー&emsp;</a>
                <a href="/policy/" class="footer-border">&emsp;Cookieのポリシー&emsp;</a>
                <a href="#" class="footer-border">&emsp;お問い合わせ&emsp;</a>
                <a href="#" class="">&emsp;サイトマップ&emsp;</a>
                </footer>`;
        </script>
    </div>
</footer>