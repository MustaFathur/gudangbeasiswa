<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Beasiswa Yang Tersedia</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($beasiswa as $beasiswas)
                <div class="item">
                    <div class="card-beasiswa">
                        <div class="header">
                            <img class="card-img-top" src="gambarbeasiswa/{{ $beasiswas->gambar }}"
                                alt="{{ $beasiswas->name }}">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="card-title">{{ $beasiswas->name }}</h5>
                            <p class="card-text">{{ $beasiswas->kategori }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .card-beasiswa {
        max-width: 300px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-beasiswa .header {
        position: relative;
    }

    .card-beasiswa .header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-beasiswa .meta {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .card-beasiswa .body {
        padding: 15px;
    }

    .card-beasiswa .card-title {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .card-beasiswa .card-text {
        font-size: 14px;
        color: #777;
    }
</style>
