<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <title>teste</title>
  
  </head>
  <body onload="initMap()">
  <!-- header -->
  <div class= 'section-top pt-3'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="Recursos/logo-frisabor.png" alt="logo" class="img-logo">
                <span class="float-right"><i class="fas fa-phone-alt"></i> <div class="text float-right"><small> ATENDIMENTO  </small> <br> 81 98998-2946</div></span>
            </div>
        </div>
    </div>
  </div>
  <!-- franquia -->
  <div class="section-investiment mt-4">
    <div class="container">
        <div class="row d-flex">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-1">
                <h1 class="displaytext--bold h1">SEJA NOSSO FRANQUEADO</h1>
                <span class="invert-orange p-1">INVESTIMENTO</span>
                <div class="row investment-container">
                    <!-- informação sobre o investimento aqui -->
                    <div class="col">
                        Taxa de franquia: <br>Lojas: <span class="text-orange"><br>R$40.000,00</span><br>Quiosques: <span class="text-orange"><br>R$20.000,00</span>
                    </div>
                    <div class="col separador">Investimento total (sem ponto comerial):<br>entre <span class="text-orange">R$120.000,00</span> e <span class="text-orange">R$230.000,00</span>
                    </div>
                    <div class="col">
                        Retorno previsto: <br>de <span class="text-orange">24</span> a <span class="text-orange">36</span> meses
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="Recursos/sundaes.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="Recursos/sundaes.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="Recursos/sundaes.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="section-diferentials pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h3>TENHA UMA FRANQUIA FRISABOR!</h3>
                <div class="box-diferential">
                    <h4><img src="/Recursos/quality.svg" alt="diferencial-logo" class="icon separator-right">DIFERENCIAIS</h4>
                    <p>Experiência de 60 anos no segmento</p><hr>
                    <p>Mais de 30 sabores disponíveis</p><hr>
                    <p>Operacional simples</p><hr>
                    <p>Produtos com ingredientes de altíssima qualidade</p><hr>
                    <p>Mix que engloba sorvetes, picolés, deliciosas </p><hr>
                    <p>Sobremesa e cafés </p><hr>
                    <p>Qualidade reconhecida</p>
                </div>
                <div class="box-diferential">
                    <h4><img src="/Recursos/store.svg" alt="store-logo" class="icon separator-right">CONDIÇÕES</h4>
                    <p>Cidades com mais de 50 mil habitantes</p><hr>
                    <p>Lojas que cabem em ruas, galerias e shoppings (de 30m<sup>2</sup> a 40m<sup>2</sup>)</p><hr>
                    <p>Ser administrado ppelo próprio franqueado (dedicação)</p>
                </div>
                <div class="box-diferential">
                    <h4><img src="/Recursos/hand-shake.svg" alt="store-logo" class="icon separator-right">SUPORTE AO FRANQUEADO</h4>
                    <p>Direito de uso de marca</p><hr>
                    <p>Auxílio na análise e escolha do ponto comercial</p><hr>
                    <p>Acompanhamento na montagem e inauguração da loja</p><hr>
                    <p>Treinamento inicial de gestão de loja</p><hr>
                    <p>Assistência à operação da franquia</p><hr>
                    <p>Manual da franquia</p><hr>
                    <p>Apoio de Marqueting</p><hr>
                    <p>Consultoria de campo</p><hr>
                    <p>Sistema gourmet de frente de loja</p>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 contact-form ml-auto font-weight-bold">
                <h4 class="text-orange">PREENCHA NOSSO FORMULÁRIO</h4>
                <p>Um de nossos consultores entrará em contanto com você.</p>
                <form action="apiCrud.php" method="POST" id="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control font-weight-bold" id="name" name="name" placeholder="Seu Nome" required>
                        <input type="mail" class="form-control font-weight-bold" id="email" name="email" placeholder="Seu E-mail" required>
                        <input type="text" class="form-control font-weight-bold" id="phone" name="phone" placeholder="Seu Telefone" required>
                        <input type="text" class="form-control font-weight-bold" id="occupation" name="occupation" placeholder="Sua Profissão" required>
                    </div>
                    <select name="investment_money" id="investment_money" class="form-control c-select font-weight-bold">
                        <option value="" selected hidden> Capital disponível para investimento</option>
                        <option value="1000">R$1.000,00</option>
                        <option value="2000">R$2.000,00</option>
                        <option value="3000">R$3.000,00</option>
                        <option value="4000">R$4.000,00</option>
                        <option value="5000">R$5.000,00</option>
                        <option value="6000">R$6.000,00</option>
                        <option value="7000">R$7.000,00</option>
                    </select>
                    <input type="text" class="form-control font-weight-bold" id="city" name="city" placeholder="Cidade" required>
                    <input type="text" class="form-control font-weight-bold" id="neighborhood" name="neighborhood" placeholder="Bairro" required>
                    <textarea name="message" id="message" class="form-control textarea font-weight-bold" placeholder="Mensagem" required></textarea>
                    <button type="submit" class="btn btn-submit font-weight-bold" name="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
  </div>

  <section class="mt-4" id="mapSection">
        <div class="container mt-2">
            <h3 class="sectionheader-text">Nossas Franquias</h3>
        </div>
        <div style="width:100%; height: 32rem;" id="map"></div>
  </section>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container">
        &copy;2017 Fisabor. Todos os direitos reservados.
      <div class="float-right">
            <a href="https://www.facebook.com/FriSabor/" target="_blank">
                <!-- icone do facebook -->
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/frisabor/" target="_blank">
                <!-- icone do insta --> 
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=visualization&key=AIzaSyCGZVipN-cpMXkFLSdgelAuO37mjXnP8uQ"></script>
    <script>
        function initMap() {
            var myLatlng = new google.maps.LatLng(-8.064192, -34.871640);
            var mapOptions = {
            zoom: 15,
            center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"Frisabor recife antigo"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
    </script>
  </body>

</html>