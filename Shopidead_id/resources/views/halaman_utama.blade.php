@extends('components.layout_kalender')
@section('slot')


    <div class="card-body">
        <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Etalase e-commerce</b> <br><i>Projek 2 - Pemrograman Web 2</i></h4>
        <br><br>
        @auth
        <fieldset>
                        <legend style="color: black; font-weight: bold;">Hello!</legend>
                        <article style="text-align: justify; color: black;">
                        @if(Auth::user()->role=='administrator')
                        @if (Auth::check())
                            <span style="font-size: 150%;">S</span>elamat datang {{ strtoupper(Auth::user()->name) ?? "" }} di Dashboard Admin Etalase E-Commerce. Halaman ini memberikan Anda akses penuh untuk mengelola seluruh aspek dari toko online kami. Anda dapat mengelola produk, testimoni, jenis produk dan kategori tokoh. Gunakan fitur-fitur canggih yang tersedia untuk melakukan analisis performa toko dan mengoptimalkan strategi penjualan. Kami berharap dashboard ini membantu Anda menjalankan toko online dengan lebih efisien dan sukses.
                        </article>
                        @endif
                        @endif

                        <article style="text-align: justify; color: black;">
                        @if(Auth::user()->role=='member')
                        @if (Auth::check())
                            <span style="font-size: 150%;">S</span>elamat datang {{ strtoupper(Auth::user()->name) ?? "" }} di Dashboard Member Etalase E-Commerce. Halaman ini dirancang khusus untuk memberikan pengalaman berbelanja yang lebih personal dan bermanfaat bagi Anda. Di sini, Anda dapat menemukan produk-produk terbaru dan eksklusif, melihat testimoni dengan mudah. Kami berkomitmen untuk menyediakan platform yang memudahkan Anda dalam berbelanja online dengan aman, nyaman, dan menyenangkan.
                        </article>
                        @endif
                        @endif
        </fieldset>
        @endauth

        <!-- KALENDER -->

        <fieldset class="mb-3 mt-5">
            <legend style="color: black; font-weight: bold;">Calendar</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="calendar calendar-first" id="calendar_first" style="max-width: 750px;">
                        <div class="calendar_header">
                            <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                            <h2></h2>
                            <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="calendar_weekdays rounded" style="max-width: 750px;"></div>
                        <div class="calendar_content rounded" style="background-color: rgb(188, 197, 194); max-width: 750px;"></div>
                    </div>
                </div>
            </div>

        </fieldset>
        <!-- KALENDER -->
    </div>
@endsection
