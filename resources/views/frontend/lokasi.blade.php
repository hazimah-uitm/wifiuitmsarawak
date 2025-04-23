<section id="lokasi" class="pricing section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Lokasi</h2>
        <div><span>Lokasi dan Peta Liputan</span> <span class="description-title">WiFi</span></div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center mb-4 g-2">
            <!-- Map Button -->
            <div class="col-12 col-md-3">
                <a href="https://wifi.uitm.edu.my/wifi/coverage.html" target="_blank"
                    class="btn w-100 d-flex align-items-center justify-content-center gap-3 px-4 py-2 shadow transition-all"
                    style="
                      background: linear-gradient(135deg, #1b3f84, #3b74c4);
                      color: #fff;
                      border-radius: 12px;
                      height: 50px;
                      font-weight: 700;
                      letter-spacing: 0.5px;
                      text-transform: uppercase;
                      box-shadow: 0 4px 12px rgba(3, 36, 76, 0.4);
                   ">
                    <i class="bi bi-map-fill fs-5" style="color: #ffffffcc;"></i>
                    <span>LIHAT PETA WIFI</span>
                </a>
            </div>

            <!-- Search Input -->
            <div class="col-12 col-md-9">
                <div class="position-relative">
                    <input type="text" class="form-control rounded-2 px-3 py-2" id="searchInput"
                        placeholder="Cari lokasi..." style="height: 42px;">
                    <!-- Clear Icon without round background -->
                    <span id="clearIcon" class="position-absolute end-0 top-50 translate-middle-y cursor-pointer"
                        style="display: none; background: none; padding: 0; border-radius: 0;">
                        <i class="bi bi-x" style="font-size: 25px; color: #9e0707; padding:10px"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Locations Row -->
        <div class="row g-4">
            <!-- Samarahan -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-white text-uppercase text-center" style="background-color: #03244c">
                        Samarahan
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush" style="max-height: 250px; overflow-y: auto;"
                            id="samarahanList">
                            <div class="list-group-item">BILIK MESYUARAT <span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Bilik Pemandu <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Bilik Perdana <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK SEMINAR <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK SEMINAR <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block A First Floor 1 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block A First Floor 2 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block A Ground Floor 1 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block A Ground Floor 2 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B First Floor 1 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B First Floor 2 <span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B First Floor 3<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Fourth Floor 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Fourth Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Fourth Floor 3<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Secd Floor 1<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Secd Floor 2<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Secd Floor 3<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Third Floor 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Third Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block B Third Floor 3<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block C Ground Floor<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block C Third Floor 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block C Third Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block C Third Floor 3<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block C Third Floor 4<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block D<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block F 1<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block F 2<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras Aras Dua (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras Aras Dua (2)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras First Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras First Floor (2)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras First Floor (3)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Aras First Floor (4)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Ground Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Ground Floor (2)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Ground Floor (3)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block G Ground Floor (4)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block H<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block I 1<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block I 2<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block J Ground Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block K Auditorium 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block K Auditorium 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block K Ground Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block K Upper Floor<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block L Ground Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Aras Satu (8)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Aras Satu (9)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (10)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (2)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (3)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (4)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (5)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (6)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M First Floor (7)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor (1)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 10<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 11<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 13<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 14<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 15<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 3<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 4<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 5<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 6<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 7<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 8<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block M Ground Floor 9<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block N<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block P<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Block Pentadbiran<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Blok B tingkat 1 <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Blok B tingkat 3 <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Blok B tingkat 4 <span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Blok C (Pejabat AM BPF)<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Blok G (Depan pejabat ipsis) <span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Blok J (berdepan bengkel bata) <span
                                    class="badge bg-danger float-end signal-badge">
                                    <i class="fa fa-wifi"></i> Low
                                </span></div>
                            <div class="list-group-item">Blok J (Ruang legar) <span
                                    class="badge bg-danger float-end signal-badge">
                                    <i class="fa fa-wifi"></i> Low
                                </span></div>
                            <div class="list-group-item">Blok K (pejabat IT) <span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Blok K (Ruang legar bawah) <span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Cafeteria Block M<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Clinic UiTM Block M (2)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Jubli1<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Jubli2<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DEWAN MAKAN GADING<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Gading 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Gading 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Mulu First Floor 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Mulu First Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Mulu Ground Floor 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Dewan Makan Mulu Ground Floor 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DICUSSION ROOM<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">HEP First Floor<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">HEP Ground Floor<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">Kantin Medan Jubli <span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">POS POLIS BANTUAN PINTU UTAMA<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">POS POLIS BANTUAN PINTU DI KOLEJ MULU<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Samarahan 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-white text-uppercase text-center" style="background-color: #03244c">
                        Samarahan 2
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush" style="max-height: 250px; overflow-y: auto;"
                            id="samarahan2List">
                            <div class="list-group-item">BILIK SEMINAR UTAMA, ARAS 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BiLIK MESY. PENTADBIRAN, ARAS 2<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK MESY. HEA, ARAS 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">RUANG KAUNTER HEA, ARAS 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KORIDOR , ARAS 1<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK MESY. HEP, ARAS 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK MESY. PEROLEHAN, ARAS 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BILIK MESY. INFRASTRUKTUR, ARAS 1<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 1 (01/03)<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 1 (02/03)<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 1, BILIK 24 JAM<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 2 (01/02)<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 2 (02/02)<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">MASMED BILIK MESY<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">MASMED RUANG PEJABAT<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">MASJID Al GHAZALI<span class="badge float-end signal-badge"
                                    style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 1 (07 A 01 005)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 1 (07 A 01 032)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 1 (07 A 01 033)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 2 (07 A 02 003)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 2 (07 A 02 010)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">PUSAT PELAJAR ARAS 2, BILIK PERWAKILAN PELAJAR<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 1 (12 A 01 004)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 1 (12 A 01 013)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 1 (12 A 01 018)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 1 (12 A 01 031)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 2 (12 A 02 006)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 2 (12 A 02 028)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 2 (12 A 02 051)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 2 (12 A 02 066)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 2, AUDI A<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 3 (12 A 03 005)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 3 (12 A 03 028)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 3 (12 A 03 051)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK A ARAS 3 (12 A 03 093)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 1 (11 A 01 001)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 1 (11 A 01 010)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 1 (11 A 01 015)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 1 (11 A 01 021)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 1 (HENTIAN BAS)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 2 (11 A 02 003)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 2 (11 A 02 026)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 2 (11 A 02 041)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 2 (11 A 02 062)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 2, AUDI B<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 3 (11 A 03 003)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 3 (11 A 03 018)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 3 (11 A 03 039)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 3 (11 A 03 048)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 4 (11 A 04 004)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 4 (11 A 04 017)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 4 (11 A 04 033)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 4 (11 A 04 059)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 4 (11 A 04 076)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 5 (11 A 05 004)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 5 (11 A 05 013)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 5 (11 A 05 037)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK B ARAS 5 (11 A 05 053)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 1 (10 A 01 002)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 1 (10 A 01 011)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 1 (10 A 01 015)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 1 (10 A 01 021)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 2 (10 A 02 003)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 2 (10 A 02 012)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 2 (10 A 02 016)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 2 (10 A 02 023)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 3 (10 A 03 003)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 3 (10 A 03 012)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 3 (10 A 03 016)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">BLOK C ARAS 3 (10 A 03 022)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DEWAN MAKAN SRI PINANG (01/04)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DEWAN MAKAN SRI PINANG (02/04)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DEWAN MAKAN SRI PINANG (03/04)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">DEWAN MAKAN SRI PINANG (04/04)<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 01/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 02/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 03/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 04/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 05/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 06/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 07/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 1, 08/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 01/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 02/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 03/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 04/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 05/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 06/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 07/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 08/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 09/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 10/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 11/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 2, 12/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 01/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 02/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 03/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 04/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 05/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 06/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 07/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 08/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 09/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 10/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 11/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 3, 12/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 01/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 02/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 03/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 04/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 05/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 06/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 07/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 08/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 09/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 10/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 11/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 4, 12/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 01/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 02/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 03/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 04/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 05/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWA ARAS 5, 06/06<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 01/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 02/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 03/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 04/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 05/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 06/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 07/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 08/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 09/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 10/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 11/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 1, 12/12<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 01/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 02/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 03/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 04/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 05/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 06/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 07/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 08/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 09/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 10/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 11/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 12/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 13/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 14/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 15/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 16/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 17/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 2, 18/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 01/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 02/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 03/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 04/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 05/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 06/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 07/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 08/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 09/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 10/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 11/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 12/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 13/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 14/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 15/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 16/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 17/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 3, 18/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 01/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 02/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 03/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 04/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 05/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 06/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 07/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 08/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 09/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 10/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 11/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 12/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 13/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 14/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 15/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 16/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 17/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 4, 18/18<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 01/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 02/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 03/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 04/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 05/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 06/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 07/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                            <div class="list-group-item">KOLEJ SRI PINANG SISWI ARAS 5, 08/08<span
                                    class="badge float-end signal-badge" style="background-color: rgb(255, 174, 0)">
                                    <i class="fa fa-wifi"></i> Medium
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mukah -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header text-white text-uppercase text-center"
                        style="background-color: #03244c">
                        Mukah
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush" style="max-height: 250px; overflow-y: auto;"
                            id="mukahList">
                            <div class="list-group-item">Pejabat Pendaftar & Infostruktur<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Penolong Rektor<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Hal Ehwal Akademik (HEA)<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Hal Ehwal Pelajar (HEP)<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Bendahari<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Unit Kesihatan<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Polis Bantuan<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Pengurusan Infrastruktur<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pos Kawalan Utama Polis Bantuan<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Unit Kolej Kediaman<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Pejabat Unit Ladang<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">PTAR ARAS 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Takan Berambeh Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Takan Berambeh Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">ACIS Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">ACIS Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Perladangan dan Agroteknologi A1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Perladangan dan Agroteknologi A2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Perladangan dan Agroteknologi A3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Pengurusan & Perniagaan A1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Pengurusan & Perniagaan A2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Sains Gunaan Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Fakulti Sains Gunaan Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Dewan Balau<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Dewan Kuliah Tellian<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Dewan Kuliah Judan<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 1 Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 1 Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 1 Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 1 Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 2 Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 2 Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 2 Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Kuala 2 Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Lamin Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Lamin Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Lamin Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Kolej Seri Lamin Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 1 Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 1 Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 1 Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 1 Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 1 Aras 5<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 2 Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 2 Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 2 Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 2 Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 2 Aras 5<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 3 Aras 1<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 3 Aras 2<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 3 Aras 3<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 3 Aras 4<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sri Tanjung 3 Aras 5<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                            <div class="list-group-item">Sago<span
                                    class="badge bg-success float-end signal-badge">
                                    <i class="fa fa-wifi"></i> High
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
