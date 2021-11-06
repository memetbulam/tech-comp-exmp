<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technology Compare - Ana Sayfa</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Technology Compare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#product-list">TELEFONLAR</a></li>
                    <li class="nav-item"><a class="nav-link" href="#compare">KARŞILAŞTIR</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Phone Grid-->
    <section class="page-section product bg-light mt-5" id="product-list">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">TELEFONLAR</h2>
            </div>
            <div class="row">
                @foreach ($phones as $phone)
                    @include('productBox')
                @endforeach
                <span class="show-more">Daha fazla göster <i class="fas fa-angle-double-down"></i></span>
            </div>
        </div>
    </section>

    <!-- Compare -->
    <section class="page-section compare bg-light" id="compare">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">KARŞILAŞTIR</h2>
                <h3 class="section-subheading text-muted">Karşılaştırmak istediğin telefonu seç!</h3>
            </div>
            <div class="row mb-5">
                <div class="col-5">
                    <span>1. Telefon:</span>
                    <select class="form-select" id="select-phone-one">
                        <option value="0" selected>Seçiniz</option>
                        @foreach ($comparePhones as $phone1)
                            <option value="{{ $phone1->id }}">{{ $phone1->phone_brand }}
                                {{ $phone1->phone_model }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-5">
                    <span>2. Telefon:</span>
                    <select class="form-select" id="select-phone-two">
                        <option value="0" selected>Seçiniz</option>
                        @foreach ($comparePhones as $phone2)
                            <option value="{{ $phone2->id }}">{{ $phone2->phone_brand }}
                                {{ $phone2->phone_model }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 d-flex align-items-end">
                    <button type="button" id="btn-compare" class="btn btn-primary btn-xl text-uppercase">Karşılaştır</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Gizlilik Politikası</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Phone modal -->
    <div class="product-modal modal fade" id="mobile-phone-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                {{-- productModal.blade.php --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compare modal -->
    <div class="product-modal modal fade" id="mobile-phone-compare-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                {{-- compare.blade.php --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-easy-loading@2.0.0-rc.2/dist/jquery.loading.min.js"
        integrity="sha256-Y1VE/7a6maVMDm7HO87cT0DyxmpCdunFXQweWlGG8EA=" crossorigin="anonymous"></script>
    <script>
        var loadMorePage = 1;
        var modalPhoneLinks = document.querySelectorAll('a.product-link');
        var modalCompareButton = document.querySelector('#btn-compare');
        var phoneModal = new bootstrap.Modal(document.getElementById('mobile-phone-modal'));
        var compareModal = new bootstrap.Modal(document.getElementById('mobile-phone-compare-modal'));
        var sPhone1 = document.querySelector('#select-phone-one');
        var sPhone2 = document.querySelector('#select-phone-two');

        sPhone1.addEventListener('change', function() {
            sPhone1.style.border = "1px solid #ced4da";
        });
        sPhone2.addEventListener('change', function() {
            sPhone2.style.border = "1px solid #ced4da";
        });
        // "KARŞILAŞTIR" butonuna tıklandığında
        modalCompareButton.addEventListener('click', function() {
            var sOption1 = sPhone1.options[sPhone1.selectedIndex].value;
            var sOption2 = sPhone2.options[sPhone2.selectedIndex].value;
            var sOptionText1 = sPhone1.options[sPhone1.selectedIndex].text;
            var sOptionText2 = sPhone2.options[sPhone2.selectedIndex].text;

            if (sOption1 == sOption2|| sOptionText1 == sOptionText2) {
                sPhone1.style.border = "1px solid red";
                sPhone2.style.border = "1px solid red";
            } else if (sOption1 == 0) {
                sPhone1.style.border = "1px solid red";
                sPhone2.style.border = "1px solid #ced4da";
            } else if (sOption2 == 0) {
                sPhone1.style.border = "1px solid #ced4da";
                sPhone2.style.border = "1px solid red";
            } else {
                sPhone1.style.border = "1px solid #ced4da";
                sPhone2.style.border = "1px solid #ced4da";
                $('body').loading();
                $("#mobile-phone-compare-modal .modal-body").load("/compare/" + sOption1 + "/" + sOption2, function() {
                    $('body').loading('stop');
                    compareModal.show();
                });
            }
        });

        modalPhoneLinks.forEach(function(phoneItem) {
            phoneItem.addEventListener('click', productOnClick);
        });

        function productOnClick(e) {
            var phoneId = this.dataset['phoneId'];
            $('body').loading();
            $("#mobile-phone-modal .modal-body").load("/product/" + phoneId, function() {
                $('body').loading('stop');
                phoneModal.show();
            });
            // fetch('/product/'+phoneId)
            // .then((res) => {
            //     return res.text();
            // })
            // .then((response) => {
            //     $("#mobile-phone-modal .modal-body").html(response);
            //     $('body').loading('stop');
            //     phoneModal.show();
            // });
        }

        // JQUERY "Daha fazla göster"
        // $('.show-more').on('click', function () {
        //     loadMorePage++;
        //     $.get('/load-more', {page: loadMorePage}, function (data) {
        //         if (data.length == 0) {
        //             $('.show-more').hide();
        //         }
        //         $('.show-more').before(data);
        //     });
        // });

        // JS "Daha fazla göster"
        document.querySelector('.show-more').addEventListener('click', function() {
            loadMorePage++;
            fetch('/load-more?page=' + loadMorePage)
                .then((res) => {
                    return res.text();
                })
                .then((response) => {
                    if (response.length == 0) {
                        document.querySelector('.show-more').style.display = 'none';
                    }
                    // Convert the HTML string into a document object
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(response, 'text/html');
                    doc.querySelectorAll('a.product-link').forEach(function(item) {
                        item.addEventListener('click', productOnClick);
                    });
                    document.querySelector('.show-more').before(...doc.querySelectorAll('body > *'));
                });
        });
    </script>
</body>

</html>
