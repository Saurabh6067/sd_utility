<!DOCTYPE html>
<html>

<head>
    <title>Distance Calculation</title>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx_5V0k3AP2ZxGMNZ7TSy0LnhwChWuDoE&libraries=geometry&callback=initMap"
        async defer></script>
    <script>
        function initMap() {
            const lat1 = 28.627981;
            const lon1 = 77.3648567;
            const lat2 = 28.6287001;
            const lon2 = 77.3814695;

            const location1 = new google.maps.LatLng(lat1, lon1);
            const location2 = new google.maps.LatLng(lat2, lon2);

            const distance = google.maps.geometry.spherical.computeDistanceBetween(location1, location2);

            const distanceInKm = distance / 1000; 

            document.getElementById("distanc").innerText = `Distance: ${distanceInKm.toFixed(6)} km`;
        }
    </script>
</head>

<body>
    <h1>Distance Calculation Using Google Maps API</h1>
    <div id="distanc"></div>
</body>

</html>