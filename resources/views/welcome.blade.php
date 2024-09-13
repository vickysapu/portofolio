<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @php
        $profiles = App\Models\profile::all();
    @endphp
    @foreach ($profiles as $profile)
        <link rel="icon" href="imgProfile/{{$profile->gambar}}">
    @endforeach
    <title>Portofolio</title>
</head>
<body>
    <nav>
        <li><a href="#home"><i class="fa-solid fa-house"></i></a></li>
        <li><a href="#about"><i class="fa-solid fa-user"></i></a></li>
        <li><a href="#skill"><i class="fa-solid fa-laptop-code"></i></a></li>
        <li><a href="#portofolio"><i class="fa-solid fa-suitcase"></i></a></li>
        <li><a href="#contact"><i class="fa-solid fa-phone"></i></a></li>
        <li><a href="{{ route('indexLogin') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
    </nav>
    <section class="home" id="home">
        <div class="container">
            <div class="container-item">
                    @php
                        $profiles = App\Models\profile::all();
                    @endphp

                    <h3>IM
                        @foreach ($profiles as $profile)
                            <span>{{ $profile->nama_panggilan }}</span>
                        @endforeach
                    </h3>

                <p class="intro">
                    Sebagai siswa SMK yang sedang mendalami dunia IT,
                    saya memiliki minat yang mendalam dalam pemrograman
                    dan teknologi. Saya berkomitmen untuk terus memperluas
                    pengetahuan dan keterampilan saya dalam bidang ini,
                    dengan tujuan untuk menjadi seorang profesional yang
                    kompeten di dunia pemrograman.
                </p>
            </div>
            <div class="container-item">
                <img src="img/welcome.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container-about">
            <div class="container-item-about">
                <h3>About Me</h3>
                <p class="intro-about">
                @php
                    $profiles = App\Models\profile::all();
                @endphp

                    @foreach ($profiles as $profile)
                        {{ $profile->nama_lengkap }} :
                    @endforeach
                    Saya adalah seorang siswa SMK dengan minat mendalam di bidang teknologi dan pemrograman.
                    Selama studi saya, saya telah terlibat dalam berbagai proyek yang menantang dan memperluas
                    keterampilan saya dalam pengembangan web, pemrograman, dan desain sistem.
                    Dengan dedikasi untuk terus belajar dan beradaptasi dengan teknologi terbaru,
                    saya berkomitmen untuk mencapai keunggulan dalam setiap proyek yang saya kerjakan.
                    Di luar studi, saya aktif dalam komunitas teknologi dan mengikuti perkembangan terbaru
                    untuk tetap berada di garis depan inovasi. Tujuan saya adalah untuk terus berkembang dan
                    memberikan kontribusi yang berarti di industri teknologi.
                </p>
            </div>
        </div>
    </section>
    <section class="skill" id="skill">
        <div class="container-skill">
            <div class="container-item-skill">
                <h3>Skills</h3>
                @php
                    $skill = App\Models\skill::all();
                @endphp
                @foreach ($skill as $skills)
                    <label for="file">{{$skills->nama_skill}}</label>
                    <progress id="file" value="{{$skills->performa}}" max="100"> {{$skills->performa}}% </progress>
                @endforeach

            </div>
        </div>
    </section>
    <section class="portofolio" id="portofolio">
        <div class="container-portofolio">
            <div class="container-item-portofolio">
                @php
                    $portofolio = App\Models\portofolio::all();
                @endphp

                @foreach ($portofolio as $portofolios)
                    <div class="content-portofolio">
                        <div class="img">
                            <img src="imgPortofolio/{{ $portofolios->gambar }}" alt="">
                        </div>
                        <h3>{{ $portofolios->nama_portofolio }}</h3>
                        <p>{{ $portofolios->deskripsi }}</p>
                        @if ($portofolios->link)
                            <button><a href="{{ $portofolios->link }}" style="text-decoration: none">Lihat</a></button>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <button id="load-more" class="load-more">Lihat lebih banyak</button>
    </section>


    <section class="contact" id="contact">
    <div class="container-contact">
        <div class="container-item-contact">
            <div class="contact-content">
                <form action="{{route('kirim_pesan')}}" method="POST">
                    @csrf
                    <label for="nama">Nama Anda</label>
                    <input type="text" id="nama" name="nama" placeholder="nama..." required>

                    <label for="email">Email Anda</label>
                    <input type="email" id="email" name="email" placeholder="email..." required>

                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="pesan" required></textarea>

                    <input type="submit" value="kirim">
                </form>
            </div>
            <div class="contact-content2">
                <ul>
                    @php
                        $sosmed = App\Models\sosmed::all();
                    @endphp
                    @foreach ($sosmed as $medsos)
                        <li><a href="https://www.facebook.com/{{$medsos->facebook}}" target="_blank"><i class="fab fa-facebook social-icon"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/{{$medsos->instagram}}" target="_blank"><i class="fab fa-instagram social-icon"></i> Instagram</a></li>
                        <li><a href="https://www.github.com/{{$medsos->github}}" target="_blank"><i class="fab fa-github social-icon"></i> GitHub</a></li>
                        <li><a href="https://wa.me/{{$medsos->whatsapp}}" target="_blank"><i class="fab fa-whatsapp social-icon"></i> WhatsApp</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreButton = document.getElementById('load-more');
            let itemsToShow = 6;
            const allItems = document.querySelectorAll('.content-portofolio');

            function showItems(count) {
                allItems.forEach((item, index) => {
                    if (index < count) {
                        item.style.opacity = '0';
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.transition = 'opacity 0.5s ease-in-out';
                            item.style.opacity = '1';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 500);
                    }
                });

                if (count >= allItems.length) {
                    loadMoreButton.textContent = 'Sembunyikan';
                } else {
                    loadMoreButton.textContent = 'Lihat lebih banyak';
                }
            }

            showItems(itemsToShow);

            loadMoreButton.addEventListener('click', function() {
                if (itemsToShow >= allItems.length) {
                    itemsToShow = 6;
                    showItems(itemsToShow);
                } else {
                    itemsToShow += 6;
                    showItems(itemsToShow);
                }
            });
        });
    </script>


</body>
</html>
