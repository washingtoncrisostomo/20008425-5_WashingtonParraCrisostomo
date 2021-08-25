<?php
include 'pages/header.php';
?>

<div class="container map">
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHksyZFCGRusvV2DLjit0xWTGsAMjX4ks&callback=initMap&libraries=&v=weekly" async></script>
</div>

<?php
include 'pages/footer.php';
?>