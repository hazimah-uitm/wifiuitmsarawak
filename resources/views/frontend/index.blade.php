<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>WiFi UiTM Cawangan Sarawak</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('public/assets/images/logo-icon.png') }}" rel="icon">
    <link href="{{ asset('public/assets/images/logo-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('main') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('public/assets/images/logo-icon.png') }}" alt="">
                <h1 class="sitename">WiFi UiTM Cawangan Sarawak</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#utama" class="active">Utama</a></li>
                    <li><a href="#status">Status</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="#pelaninduk">Pelan Induk</a></li>
                    <li><a href="#projek">Projek</a></li>
                    <li><a href="#tatacara">Tatacara</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
                    <li><a href="#contact">Hubungi</a></li>
                    <li><a href="#aduan">Aduan</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- utama Section -->
        <section id="utama" class="hero section dark-background">
            <img src="{{ asset('public/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('public/assets/img/hero-img2.png') }}" class="img-fluid animated"
                            alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Informasi Perkhidmatan <span>WiFi</span> UiTM Cawangan Sarawak</h1>
                        <p>Laman utama bagi semakan, panduan dan bantuan rangkaian kampus</p>
                        {{-- <div class="d-flex">
                            <a href="#status" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div> --}}
                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- /utama Section -->

        <!-- Status Section -->
        @include('frontend.status')
        <!-- /Status Section -->

        <!-- Lokasi Section -->
        @include('frontend.lokasi')
        <!-- /Lokasi Section -->

        <!-- Stats Section -->
        {{-- <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-headset"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="1463"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section> --}}
        <!-- /Stats Section -->

        <!-- Pelan Induk Section -->
        @include('frontend.pelaninduk')
        <!-- /Pelan Induk Section -->

        <!-- Projek Section -->
        @include('frontend.projek')
        <!-- /Projek Section -->

        <!-- tatacara Section -->
        @include('frontend.tatacara')
        <!-- /tatacara Section -->

        <!-- Contact Section -->
        @include('frontend.hubungi')
        <!-- /Contact Section -->

        <!-- Faq Section -->
        @include('frontend.faq')
        <!-- /Faq Section -->
    </main>

    <footer id="footer" class="footer dark-background">

        {{-- <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">WiFi UiTM Cawangan Sarawak</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div> --}}

        <div class="container copyright text-center mt-4" id="copyright">
            {{-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
      </div> --}}
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chartjs/chart.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();

        // Update the content of the element with the current year
        document.getElementById("copyright").innerHTML = '© ' + currentYear +
            ' <a href="https://sarawak.uitm.edu.my/" target="_blank">UiTM Cawangan Sarawak</a>';
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('liputanChart').getContext('2d');

            const labels = ["SAMARAHAN", "SAMARAHAN 2", "MUKAH"];
            const data = [62.1, 41.9, 100];

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: ['#00b894', '#0984e3', '#f39c12'],
                        borderRadius: 10,
                        barPercentage: 0.6
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: 10
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: value => value + '%',
                                font: {
                                    family: 'Inter',
                                    size: 12
                                }
                            },
                            grid: {
                                color: '#f1f2f6'
                            }
                        },
                        y: {
                            ticks: {
                                display: false
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${labels[tooltipItem.dataIndex]}: ${data[tooltipItem.dataIndex]}%`;
                                }
                            }
                        }
                    },
                    animation: {
                        duration: 800,
                        easing: 'easeOutCubic'
                    }
                },
                plugins: [{
                    afterDraw: function(chart) {
                        const ctx = chart.ctx;
                        ctx.font = '600 13px Inter';
                        ctx.fillStyle = '#ffffff'; // text color inside bar
                        ctx.textAlign = 'left';

                        chart.data.datasets.forEach((dataset, i) => {
                            const meta = chart.getDatasetMeta(i);
                            meta.data.forEach((bar, index) => {
                                const label =
                                    `${labels[index]} (${dataset.data[index]}%)`;
                                const textPadding = 5;
                                const textX = bar.base +
                                    textPadding; // this ensures it's *inside* the bar
                                const textY = bar.y + bar.height / 18 + 3;

                                // optional: adjust text color based on bar width for contrast
                                if ((bar.width) < ctx.measureText(label).width +
                                    20) {
                                    ctx.fillStyle =
                                        '#000'; // switch to black if text doesn't fit
                                    ctx.textAlign = 'right';
                                    ctx.fillText(label, bar.x + bar.width - 5,
                                        textY);
                                } else {
                                    ctx.fillStyle = '#fff';
                                    ctx.textAlign = 'left';
                                    ctx.fillText(label, textX, textY);
                                }
                            });
                        });
                    }
                }]
            });
        });
    </script>
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const lists = document.querySelectorAll('.list-group');
            const clearIcon = document.getElementById('clearIcon');

            // Show the clear icon when there's text
            if (this.value) {
                clearIcon.style.display = 'block';
            } else {
                clearIcon.style.display = 'none';
            }

            // Filter the list items
            lists.forEach(list => {
                const items = list.querySelectorAll('.list-group-item');
                items.forEach(item => {
                    item.style.display = item.textContent.toLowerCase().includes(filter) ? '' :
                        'none';
                });
            });
        });

        // Clear search input and show all items when the "X" is clicked
        document.getElementById('clearIcon').addEventListener('click', function() {
            const searchInput = document.getElementById('searchInput');
            searchInput.value = ''; // Clear the input field

            const lists = document.querySelectorAll('.list-group');
            lists.forEach(list => {
                const items = list.querySelectorAll('.list-group-item');
                items.forEach(item => {
                    item.style.display = ''; // Show all items
                });
            });

            // Hide the clear icon again
            this.style.display = 'none';
        });
    </script>


</body>

</html>
