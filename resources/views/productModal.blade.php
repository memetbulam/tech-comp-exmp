<!-- Project details-->
<h2 class="text-uppercase mb-5">{{$phone->phone_brand}} {{$phone->phone_model}}</h2>
<img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
<table class="table">
    <thead>
        <tr>
        <th scope="col">EKRAN</th>
        <th scope="col">KAMERA</th>
        <th scope="col">DONANIM</th>
        <th scope="col">BATARYA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td scope="row"><strong>Ekran Boyutu:</strong> {{$phone->screen_size}}</td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td scope="row"><strong>Ekran Çözünürlüğü:</strong> {{$phone->screen_resolution}}</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <td scope="row"><strong>Ekran Yenileme Hızı:</strong> {{$phone->screen_refresh_rate}}</td>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
    <i class="fas fa-times me-1"></i>
    Close Project
</button>
