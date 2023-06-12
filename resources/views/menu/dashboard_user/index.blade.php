<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3 bg-white">
                    <h2 style="text-align: center; color: #111">Rekrutmen </h2>
                    <p style="text-align: justify; color: #333">Lorem Ipsum<br><br>
                        Lorem Ipsum</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card p-3 bg-white">
                    <h2 style="text-align: center; color: #111">Kilas Kegiatan</h2>
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#imageCarousel" data-slide-to="1"></li>
                            <li data-target="#imageCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/faces/1.jpg') }}" class="d-block w-100" alt="Gambar 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/faces/2.jpg') }}" class="d-block w-100" alt="Gambar 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/faces/3.jpg') }}" class="d-block w-100" alt="Gambar 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 20 // Waktu dalam milidetik antara pergantian gambar
            });
        });
    </script>
    @endpush
</x-app-layout>
