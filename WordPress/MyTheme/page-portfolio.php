<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">Bootstrap</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#column">column<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Flex">Flex</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#tab">tab</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Embeds">Embeds</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#modal">modal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#card">card</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#accordion">accordion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#contactform">contactform</a>
            </li>
          </ul>
        </div>
      </nav>
    </header><!-- /header -->

    <!--スライドショー-->
        <div class="keyvisual">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/1800/600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>HTML/CSS</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/1800/600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bootstrap</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/1800/600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Programing</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="container py-5 my-5 bg-white">
          <!-- Bootstrapの特徴 -->
          <div id="column">
            <h2 class="text-center py-3">Bootstrapの特徴</h2>
          </div>
          <div class="row">
            <div class="col-md-4 col-12 text-center">
              <img src="https://picsum.photos/300/200">
            </div>
            <div class="col-md-4 col-12 text-center my-3">
              <img src="https://picsum.photos/300/200">
            </div>
            <div class="col-md-4 col-12 text-center">
              <img src="https://picsum.photos/300/200">
            </div>
          </div>

          <!-- お客様の声 -->
          <div id="Flex">
            <h2 class="text-center py-3">お客様の声</h2>
          </div>
          <div class="d-flex flex-wrap-reverse justify-content-center">
            <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
              ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
            </div>
            <div class="col-md-6 col-12 p-0 align-self-center">
              <img src="https://picsum.photos/550" class="img-fluid" alt="">
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center">
            <div class="col-md-6 col-12 p-0 align-self-center">
              <img src="https://picsum.photos/550" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
              ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
            </div>
          </div>

          <!-- Bootstrapのタブ -->
          <div id="tab">
            <h2 class="text-center py-3">Bootstrapのタブ</h2>
          </div>
          <div class="tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item col-4 p-0">
                <a class="nav-link active text-center" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">グリッドシステム</a>
              </li>
              <li class="nav-item col-4 p-0">
                <a class="nav-link text-center" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">OOCSS</a>
              </li>
              <li class="nav-item col-4 p-0">
                <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">豊富なコンポーネント</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-md-8 col-12 my-5 mx-auto">
                  Bootstrapでは横幅を１２個の列に分けたグリッドシステムを採用したデザインになっています。 １２は２,3,4,6で割り切れるのでレスポンシブデザインが用意になっています
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="col-md-8 col-12 my-5 mx-auto">
                  BootStrapではOOCSS（Object-Oriented CSS）というオブジェクト指向CSSが採用されています。 構造と見た目を切り離した設計になります。
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="col-md-8 col-12 my-5 mx-auto">
                  このサイトでも使われているようにBootstrapでは様々なコンポーネントが用意されています。 公式サイトで調べながら使いながら慣れていきましょう
                </div>
              </div>
            </div>
          </div>

          <!-- Bootstrapのタブ -->
          <div id="Embeds">
            <h2 class="text-center py-3">YouTube</h2>
          </div>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fou-ZR9LhGM" allowfullscreen></iframe>
          </div>

          <!-- よくある質問 -->
          <div id="modal">
            <h2 class="text-center py-3">よくある質問</h2>
          </div>
          <div class="row">
            <div class="col-6 pt-3">
              <!-- Button trigger modal -->
              <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter1">
                何ヶ月ぐらい勉強すれば稼げるようになりますか？
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">何ヶ月ぐらい勉強すれば稼げるようになりますか？</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      学習期間は半年から１年は必要だと思います。ただ、早い人であれば3ヶ月ほどで稼いでいる人もいます。
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 pt-3">
              <!-- Button trigger modal -->
              <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter2">
                WEB制作で必要なスキルは？
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">WEB制作で必要なスキルは？</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      HTML,CSS,JQueryは必須スキルです。その他にJavascript,Bootstrap。 その他デザインツール(Photoshop,XD,Figma)などのデータからのコーディングが出来ると良いです
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 pt-3">
              <!-- Button trigger modal -->
              <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter3">
                おすすめのPCはありますか？
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">おすすめのPCはありますか？</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      フロントエンドエンジニアはMacBookを使っている人が多いです。 ただ、まずは持っているPCで勉強を始めるのが良いと思います。
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 pt-3">
              <!-- Button trigger modal -->
              <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter4">
                プログラミングは独学で勉強可能ですか？
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">プログラミングは独学で勉強可能ですか？</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      プログラミングは独学で身に付けることは出来ると思います。 しかし、初心者のうちはメンターをつけるなど解決方法がわからなくなった時に聞ける人を作るのがおすすめです。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- カード -->
          <div id="card">
            <h2 class="text-center py-3">実績</h2>
          </div>
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="card">
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Amazon Kindle</h5>
                  <p class="card-text">WEB構築ランキング,アプリケーション入門書部門,コンピュータ・ITランキング１位 になりました。 画像や動画を使って分かりやすく解説をしました</p>
                  <a href="https://amzn.to/2G9QzJJ" class="btn btn-primary">Amazonで見て見る</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="card">
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">YouTube</h5>
                  <p class="card-text">プログラミングの学習方法やWEBサイト制作の学習を中心に発信しています。</p>
                  <a href="https://amzn.to/2G9QzJJ" class="btn btn-primary">YouTubeを見る</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="card">
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Twitter</h5>
                  <p class="card-text">プログラミングの学習方法を中心に発信しています。自身の経験をベースに発信しています</p>
                  <a href="https://amzn.to/2G9QzJJ" class="btn btn-primary">Twitterを見る</a>
                </div>
              </div>
            </div>
          </div>

          <!-- よくある質問 -->
          <div id="accordion">
            <h2 class="text-center py-3">よくある質問</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    プログラミングスキルは必要ですか？
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  HTML/CSS,BootStrapの基礎が必要です。しかし勉強中であれば大丈夫だと思います。
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    稼げるようになりますか？
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  半年から一年くらいしっかりと勉強をすれば稼げるようになると思います。 しかし、プログラミングで稼ぐためには技術力だけでなく営業力も必要になるので日々勉強が必要です。
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    追加でかかる費用はありますか？
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  サーバー代、ドメイン代が必要になります。 おすすめのサーバーはエックスサーバー 、ドメインはお名前ドットコムがおすすめです。
                </div>
              </div>
            </div>
          </div>

          <!-- お問い合わせ -->
          <div id="contactform">
            <h2 class="text-center py-3">お問い合わせ</h2>
          </div>
          <form class="needs-validation col-8 mx-auto" novalidate>
            <div class="form-row">
              <div class="col-12 mb-3">
                <label for="validationCustom01">苗字</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  苗字を入れて下さい
                </div>
              </div>
              <div class="col-12 mb-3">
                <label for="validationCustom02">名前</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  名前を入れて下さい
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-12 mb-3">
                <label for="validationCustom04">住所</label>
                  <select class="custom-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>東京</option>
                    <option>愛知</option>
                    <option>大阪</option>
                    <option>福岡</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  同意する
                </label>
                <div class="invalid-feedback">
                  同意するにチェックを入れて下さい
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>

          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          </script>
        </div>

        <!-- フッター -->
        <footer class="bg-white">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="py-4">
                  <h4 class="d-inline-block py-3 border-bottom border-info">Profile</h4>
                </div>
                <div class="mx-5">
                  <img class="img-fluid rounded-circle mb-3" src="https://picsum.photos/300" alt="">
                </div>
                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
              </div>
              <div class="col-md-4 col-12">
                <div class="py-4">
                  <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <a href="#">YouTube Channel</a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Portfolio Site</a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Amazon</a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Twitter</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-12">
                <div class="py-4">
                  <h4 class="d-inline-block py-3 border-bottom border-info">Twitter</h4>
                </div>
                <a class="twitter-timeline" data-lang="ja" data-height="600" href="https://twitter.com/qweblog?ref_src=twsrc%5Etfw">Tweets by qweblog</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
          </div>
          <div class="bg-dark text-white text-center p-3">
            Copyright - Shota Hirata, 2020 All Rights Reserved.
          </div>
        </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>