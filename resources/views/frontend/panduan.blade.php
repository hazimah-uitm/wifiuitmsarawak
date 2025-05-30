<section id="panduan" class="details section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Panduan</h2>
        <div><span>Panduan Perkhidmatan</span> <span class="description-title">WiFi</span>
        </div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">
        <div class="card mb-4">
            <div class="card-header text-center text-white h6" style="background-color: #03244c;">
                PERKHIDMATAN WIFI
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-3 text-center">
            <!-- UiTM WiFi STAF -->
            <div class="col">
                <div class="card h-100 border-0 wifi-card"
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-start">
                        <div class="text-center mb-3"><i class="bi bi-briefcase-fill text-primary fs-2"></i></div>
                        <h6 class="fw-bold text-primary text-center">UiTM WiFi STAFF</h6>
                        <ul class="small ps-3">
                            <li>Guna ID webmail & kata laluan WiFi.</li>
                            <li>Untuk log masuk kali pertama, sila aktifkan ID WiFi
                                <br><button class="btn btn-primary btn-sm p-2"
                                    onclick="window.open('https://wifi.uitm.edu.my/activation', '_blank')">Aktifkan
                                    Akaun</button>
                            </li>
                            <li>Lupa kata laluan? Reset di:
                                <br><button class="btn btn-info btn-sm p-2"
                                    onclick="window.open('https://wifi.uitm.edu.my/resetpassword', '_blank')">Reset
                                    Password</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- UiTM WiFi STUDENT -->
            <div class="col">
                <div class="card h-100 border-0 wifi-card"
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-start">
                        <div class="text-center mb-3"><i class="bi bi-mortarboard-fill text-success fs-2"></i></div>
                        <h6 class="fw-bold text-success text-center">UiTM WiFi STUDENT</h6>
                        <ul class="small ps-3">
                            <li>Sila log masuk WiFi menggunakan ID portal pelajar (iStudent Portal).</li>
                            <li>Tiada pengaktifan diperlukan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- UiTM WiFi GUEST -->
            <div class="col">
                <div class="card h-100 border-0 wifi-card"
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-start">
                        <div class="text-center mb-3"><i class="bi bi-person-badge-fill text-warning fs-2"></i></div>
                        <h6 class="fw-bold text-warning text-center">UiTM WiFi GUEST</h6>
                        <ul class="small ps-3">
                            <li>Hubungi pentadbir rangkaian.</li>
                            <li>Telefon:
                                <br>082-677357 (Kampus Samarahan)
                                <br>082-678206 (Kampus Samarahan 2)
                                <br>084-876012 (Kampus Mukah)
                            </li>
                            <li>Emel:
                                <button class="btn btn-warning btn-sm p-2 mt-2"
                                    onclick="window.location.href='mailto:wifi@uitm.edu.my'">wifi@uitm.edu.my</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- eduroam -->
            <div class="col">
                <div class="card h-100 border-0 wifi-card"
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-start">
                        <div class="text-center mb-3"><i class="bi bi-globe2 text-danger fs-2"></i></div>
                        <h6 class="fw-bold text-danger text-uppercase text-center">eduroam</h6>
                        <ul class="small ps-3">
                            <li>Untuk pelawat universiti luar – daftar di institusi asal untuk mengakses eduroam di
                                UiTM.</li>
                            <li>Staf UiTM: Guna email @uitm.edu.my & kata laluan WiFi.</li>
                            <li>Pelajar UiTM: Guna ID @isiswa.uitm.edu.my & kata laluan portal.</li>
                            <li>Senarai ahli:
                                <button class="btn btn-danger btn-sm p-2 mt-2"
                                    onclick="window.open('https://mon.eduroam.my/participants', '_blank')">eduroam.my</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row g-4 mt-2 mb-2 align-items-stretch">
            <!-- Tatacara Sambungan WiFi -->
            <div class="col-lg-8">
                <div class="card shadow-sm h-100 d-flex flex-column">
                    <div class="card-header text-center text-white h6 text-uppercase" style="background-color: #03244c;">
                        Tatacara Sambungan WiFi
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('public/assets/img/tatacara.png') }}" alt="Tatacara Sambungan Wifi"
                            class="img-fluid rounded shadow" style="max-width: 100%; cursor: pointer;"
                            onclick="showImageModal(this)">
                    </div>
                </div>
            </div>
    
            <!-- Liputan WiFi -->
            <div class="col-lg-4">
                <div class="card shadow-sm h-100 d-flex flex-column">
                    <div class="card-header text-center text-white h6 text-uppercase" style="background-color: #03244c;">
                        Liputan WiFi
                    </div>
                    <div class="card-body">
                        <p class="text-center"><strong>Kemudahan WiFi di UiTM Cawangan Sarawak bergantung kepada:</strong></p>
                        <ul class="list-unstyled ps-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Kualiti peranti yang digunakan</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Jarak efektif antara pengguna dan AP (radius 50 meter tanpa halangan)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sekiranya kedudukan AP dan pengguna terlalu jauh atau mempunyai halangan fizikal (dinding / pintu) serta terlalu ramai pengguna serentak di lokasi yang sama mempunyai Wireless Access Point (AP), pengguna akan menghadapi kesukaran untuk menyambung ke WiFi  atau sambungan Wifi yang tidak stabil.</li>
                        </ul>
                        <div class="d-grid gap-2">
                            <a href="#lokasi" class="btn btn-primary btn-sm">Lihat Lokasi Liputan WiFi</a>
                            <a href="https://units.uitm.edu.my/index.html" target="blank"class="btn btn-info btn-sm">Lapor Aduan WiFi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content position-relative bg-white rounded shadow">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
    
                <div class="modal-body text-center p-0" style="overflow: auto;">
                    <img id="modalImage" src="" alt="Preview" class="img-fluid rounded"
                         style="cursor: zoom-in; transition: transform 0.3s;">
                </div>
            </div>
        </div>
    </div>
    
    <!-- JS Script (Zoom + Drag) -->
    <script>
        function showImageModal(imgElement) {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imgElement.src;
            modalImage.style.transform = 'scale(1)';
            modalImage.style.cursor = 'zoom-in';
    
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
    
            let isDragging = false;
            let startX, startY, offsetX = 0, offsetY = 0;
    
            modalImage.onclick = () => {
                const isZoomed = modalImage.style.transform.startsWith('scale(2)');
                if (isZoomed) {
                    modalImage.style.transform = 'scale(1)';
                    modalImage.style.cursor = 'zoom-in';
                } else {
                    modalImage.style.transform = `scale(2) translate(0px, 0px)`;
                    modalImage.style.cursor = 'move';
                }
            };
    
            modalImage.addEventListener('mousedown', (e) => {
                if (modalImage.style.transform.startsWith('scale(2)')) {
                    isDragging = true;
                    startX = e.clientX - offsetX;
                    startY = e.clientY - offsetY;
                    modalImage.style.transition = 'none';
                }
            });
    
            window.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    offsetX = e.clientX - startX;
                    offsetY = e.clientY - startY;
                    modalImage.style.transform = `scale(2) translate(${offsetX}px, ${offsetY}px)`;
                }
            });
    
            window.addEventListener('mouseup', () => {
                isDragging = false;
                modalImage.style.transition = 'transform 0.3s';
            });
        }
    </script>
    
</section>
