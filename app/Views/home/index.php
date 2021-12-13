<?php $this->view("templates/header") ?>

<main class="container-fluid" style="height: 100vh; padding-top: 56px;">
    <div class="row h-100">

        <div class="col-3 px-0 shadow">
            <nav class="bg-light pt-3">
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Cari Rute</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cari Pangkalan</button>
                </div>
            </nav>

            <div class="tab-content pt-4 px-3 bg-white" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="mb-3">
                        <label for="awal" class="form-label">Posisi Awal</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="awal">
                            <button class="btn btn-dark" type="button" id="button-awal">Pilih</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="tujuan">
                            <button class="btn btn-dark" type="button" id="button-tujuan">Pilih</button>
                        </div>
                    </div>
                    <button class="mt-2 btn bg-hub fw-bold text-white">Mulai</button>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                    <div class="mb-3">
                        <label for="katakunci" class="form-label">Kata Kunci</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="katakunci" placeholder="Contoh: manukan">
                            <button class="btn bg-hub text-white" type="button" id="button-katakunci">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9" id="map">
            <!-- map -->
        </div>
    </div>
</main>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin="">
</script>
<script>
    var map = L.map('map').setView([-7.26811, 112.66676], 13);

    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);

    var marker = L.marker([-7.26811, 112.66676]).addTo(map).bindPopup(
                    '<b>Nama Pangkalan</b><br/>Posisi.'
                    );

    var pathLine = L.polyline([
        [-7.26811, 112.65676],
        [-7.27811, 112.66676],
        [-7.26811, 112.67676],
    ]).addTo(map)

    function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);
</script>

<?php $this->view("templates/footer") ?>