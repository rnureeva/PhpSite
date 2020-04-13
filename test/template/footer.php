<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <img src="/images/logo.jpg" alt="logo" width="98" height="98">
            <small class="d-block mb-3 text-muted">© 2017-2020</small>
        </div>
        <div class="col-6 col-md">
            <h5>Как нас найти</h5>
                <div id = "map" style="height: 100%; width: 100%;"></div>
                   <script>
                       function initMap() {
                           var uluru = {lat: 55.7895120, lng: 49.113862};
                           var map = new google.maps.Map(
                               document.getElementById('map'), {zoom: 12, center: uluru});
                           var marker = new google.maps.Marker({position: uluru, map: map});
                       }
                   </script>
                   <script async defer
                           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs_IXW7-Ax9rkQhSPWgfmlcAlxw1-dhEY&callback=initMap">
                   </script>
        </div>
        <div class="col-6 col-md">
            <h5>Контакты</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Телефон: </a></li>
                <li><a class="text-muted" href="#">Вконтакте</a></li>
                <li><a class="text-muted" href="#">Инстаграмм</a></li>
            </ul>
        </div>
    </div>

</footer>
<div id="wt-sky-root"></div>
</body>
</html>