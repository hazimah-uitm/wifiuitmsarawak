<section id="pelaninduk" class="details section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Pelan Induk</h2>
        <div><span>Pelan Induk Naik Taraf Sistem Rangkaian</span> <span class="description-title">WiFi</span></div>
    </div>

    <div class="container">
        <div class="accordion" id="pelanIndukAccordion">

            <!-- Samarahan -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSamarahan">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSamarahan" aria-expanded="true" aria-controls="collapseSamarahan">
                        SAMARAHAN
                    </button>
                </h2>
                <div id="collapseSamarahan" class="accordion-collapse collapse show" aria-labelledby="headingSamarahan"
                    data-bs-parent="#pelanIndukAccordion">
                    <div class="accordion-body text-center">
                        <img src="{{ asset('public/assets/img/pelan_induk_s1.png') }}" class="img-fluid rounded shadow"
                            style="max-width: 80%; cursor: pointer;" alt="Pelan Induk Samarahan"
                            onclick="showImageModal(this)">
                    </div>
                </div>
            </div>

            <!-- Samarahan 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSamarahan2">
                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSamarahan2" aria-expanded="false" aria-controls="collapseSamarahan2">
                        SAMARAHAN 2
                    </button>
                </h2>
                <div id="collapseSamarahan2" class="accordion-collapse collapse" aria-labelledby="headingSamarahan2"
                    data-bs-parent="#pelanIndukAccordion">
                    <div class="accordion-body text-center">
                        <img src="{{ asset('public/assets/img/pelan_induk_s2.png') }}" class="img-fluid rounded shadow"
                            style="max-width: 80%; cursor: pointer;" alt="Pelan Induk Samarahan"
                            onclick="showImageModal(this)">
                    </div>
                </div>
            </div>

            <!-- Mukah -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingMukah">
                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseMukah" aria-expanded="false" aria-controls="collapseMukah">
                        MUKAH
                    </button>
                </h2>
                <div id="collapseMukah" class="accordion-collapse collapse" aria-labelledby="headingMukah"
                    data-bs-parent="#pelanIndukAccordion">
                    <div class="accordion-body text-center">
                        <img src="{{ asset('public/assets/img/pelan_induk_mkh.png') }}" class="img-fluid rounded shadow"
                            style="max-width: 80%; cursor: pointer;" alt="Pelan Induk Samarahan"
                            onclick="showImageModal(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content position-relative bg-white rounded shadow">
            <!-- Close Button -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>

            <!-- Modal Body with Zoomable Image -->
            <div class="modal-body text-center p-0" style="overflow: auto;">
                <img id="modalImage" src="" alt="Preview" class="img-fluid rounded"
                    style="cursor: zoom-in; transition: transform 0.3s;">
            </div>
        </div>
    </div>
</div>

<!-- JS Script -->
<script>
    function showImageModal(imgElement) {
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imgElement.src;
        modalImage.style.transform = 'scale(1)';
        modalImage.style.cursor = 'zoom-in';
        
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();

        // Zoom functionality with drag
        let isDragging = false;
        let startX, startY, offsetX = 0, offsetY = 0;

        modalImage.onclick = () => {
            const isZoomed = modalImage.style.transform === 'scale(2)';
            modalImage.style.transform = isZoomed ? 'scale(1)' : 'scale(2)';
            modalImage.style.cursor = isZoomed ? 'zoom-in' : 'zoom-out';

            // Enable drag only if zoomed
            if (isZoomed) {
                modalImage.style.cursor = 'move';
                modalImage.style.transition = 'none';  // Disable smooth transition during dragging
            } else {
                modalImage.style.transition = 'transform 0.3s';  // Re-enable smooth transition when zooming out
            }
        };

        // Mouse down to initiate drag
        modalImage.addEventListener('mousedown', (e) => {
            if (modalImage.style.transform === 'scale(2)') { // Only allow drag when zoomed in
                isDragging = true;
                startX = e.clientX - offsetX;
                startY = e.clientY - offsetY;
                modalImage.style.transition = 'none';  // Disable smooth transition during drag
            }
        });

        // Mouse move for dragging
        window.addEventListener('mousemove', (e) => {
            if (isDragging) {
                offsetX = e.clientX - startX;
                offsetY = e.clientY - startY;
                modalImage.style.transform = `scale(2) translate(${offsetX}px, ${offsetY}px)`;
            }
        });

        // Mouse up to stop dragging
        window.addEventListener('mouseup', () => {
            isDragging = false;
            modalImage.style.transition = 'transform 0.3s';  // Re-enable smooth transition
        });
    }
</script>
