<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Portofolio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="css/index.css">
    @php
    $profiles = App\Models\profile::all();
    @endphp
    @foreach ($profiles as $profile)
    <link rel="icon" href="imgProfile/{{$profile->gambar}}">
    @endforeach
    <style>
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}

body, html {
  overflow-x: hidden;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  overflow-x: hidden;
}

html {
  scroll-behavior: smooth;
}

.header {
  background-color: #f1f1f1;
  text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  font-size: 25px;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1000;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 22px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

/* Layout */
.container {
  margin-top: 60px;
}

.column {
  float: left;
  padding: 10px;
}

.column.side {
  width: 25%;
}

.column.middle {
  width: 50%;
}

.row {
  height: 100%;
  margin: 0;
  padding: 0;
}

/* Profile Container */
.profile-container {
  max-width: 800px;
  margin: 0 auto;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.profile-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.profile-pic {
  width: 100px;
  height: 100px;
  margin-right: 20px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.profile-form .form-group {
  margin-bottom: 15px;
}

.profile-form input[type="text"],
.profile-form input[type="file"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.profile-form button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.profile-form button:hover {
  background-color: #0056b3;
}

/* Buttons */
button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #FFC107;
  color: black;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #ecb202;
}

/* Tables */
table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  background-color: #fff;
}

thead th {
  background-color: #ecb202;
  color: white;
  padding: 12px;
  font-size: 1.1em;
  text-align: center;
}

tbody td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
  font-size: 1em;
  text-align: center;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f1f1f1;
  transition: background-color 0.3s ease;
}

/* Forms */
.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
}

label {
  margin-bottom: 0.5rem;
  font-weight: bold;
}

.input-field,
.form-group input[type="text"],
.form-group input[type="file"],
.form-group input[type="url"],
.form-group textarea {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 1rem;
  color: #333;
}

.input-field:focus,
.form-group input[type="text"]:focus,
.form-group input[type="url"]:focus,
.form-group textarea:focus {
  border-color: #007bff;
  outline: none;
}

button.save-skill-btn,
.form-group input[type="submit"] {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
}

button.save-skill-btn:hover,
.form-group input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Progress Bar */
.progress-bar {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.progress-bar progress {
  width: 80%;
  height: 25px;
  border-radius: 5px;
  -webkit-appearance: none;
  appearance: none;
}

progress::-webkit-progress-bar {
  background-color: #ddd;
  border-radius: 5px;
}

progress::-webkit-progress-value {
  background-color: #007bff;
  border-radius: 5px;
}

.progress-bar span {
  font-size: 1rem;
  font-weight: bold;
  color: #333;
}

/* Containers */
.container-skill-form,
.add-portofolio,
.social-media-form,
.message-box {
  max-width: 600px;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
}

.container-skill-form {
  padding: 1rem;
}

h3 {
  color: black;
  margin-bottom: 1rem;
}

.add-portofolio h3,
.social-media-form h3 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
  font-size: 1.5rem;
}

.message {
  padding: 1rem;
  margin-top: 2rem;
  background-color: #fff;
  border-left: 4px solid #007bff;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.message h4 {
  margin: 0;
  font-size: 1.2rem;
  color: #333;
}

.sender-name {
  font-weight: bold;
  color: #007bff;
}

.email {
  font-size: 0.9rem;
  color: #555;
  margin-top: 0.5rem;
}

.message-content {
  margin-top: 1rem;
  font-size: 1rem;
  color: #444;
  padding: 0.75rem;
  border-radius: 6px;
}

/* Contact Section */
section.contact {
  background-color: #ffffff;
  padding: 4rem 2rem;
  width: 100%;
  color: #333;
  box-sizing: border-box;
}

.container-contact {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}

.container-item-contact {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.contact-content,
.contact-content2 {
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
  width: 100%;
}

.contact-content form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact-content label {
  font-size: 1.2rem;
  color: #555;
}

.contact-content input,
.contact-content textarea {
  width: 100%;
  padding: 0.8rem;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 1rem;
  box-sizing: border-box;
}

.contact-content textarea {
  resize: vertical;
}

.contact-content input[type="submit"] {
  background-color: #FFC107;
  border: none;
  color: #000;
  cursor: pointer;
  padding: 0.8rem;
  border-radius: 25px;
  transition: background 0.3s, box-shadow 0.3s;
}

.contact-content input[type="submit"]:hover {
  background-color: #FF9800;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.contact-content2 ul {
  list-style: none;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
.contact-content2 li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 1rem;
  color: #333;
}

.contact-content2 li i {
  color: #FFC107;
}

/* Portfolio Section */
.portfolio {
  background-color: #f9f9f9;
  padding: 4rem 2rem;
}

.portfolio-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
}

.portfolio-item {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: calc(33.333% - 1.5rem);
  padding: 1rem;
  text-align: center;
  box-sizing: border-box;
}

.portfolio-item img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

.portfolio-item h4 {
  margin: 1rem 0;
  font-size: 1.2rem;
  color: #333;
}

.portfolio-item p {
  font-size: 1rem;
  color: #666;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .portfolio-item {
    width: calc(50% - 1.5rem);
  }

  .container-item-contact {
    flex-direction: column;
    align-items: center;
  }
}

@media (max-width: 768px) {
  .portfolio-item {
    width: calc(100% - 1.5rem);
  }

  .contact-content,
  .contact-content2 {
    padding: 1rem;
  }

  .contact-content input[type="submit"] {
    padding: 0.6rem;
  }

  .portfolio-container {
    gap: 1rem;
  }
}

@media (max-width: 480px) {
    body{
        overflow-x: hidden;
    }
  .header ul {
    font-size: 18px;
  }

  .profile-pic {
    width: 80px;
    height: 80px;
  }

  .portfolio-item {
    width: calc(100% - 1rem);
  }
}
.portfolio-display {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Default to 3 columns */
    gap: 1rem;
    margin-top: 2rem;
}

.portfolio-item {
    background-color: #fff;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
}

.portfolio-item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.portfolio-item h4 {
    font-size: 1.2rem;
    margin: 0.5rem 0;
}

.portfolio-item p {
    font-size: 0.9rem;
    color: #555;
}

.portfolio-item a {
    color: #007bff;
    text-decoration: none;
}

.portfolio-item a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .portfolio-display {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .portfolio-display {
        grid-template-columns: 1fr;
    }
}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<div class="header">
    <ul>
        <li><a href="{{route('login')}}"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        <li><a href="#message"><i class="fa-solid fa-message"></i></a></li>
        <li><a href="#social-media-form"><i class="fa-solid fa-phone"></i></a></li>
        <li><a href="#skills"><i class="fa-solid fa-chart-simple"></i></a></li>
        <li><a href="#add-portofolio"><i class="fa-solid fa-suitcase"></i></a></li>
        <li><a href="#dashboard"><i class="fa-solid fa-house-user"></i></a></li>
    </ul>
</div>
@php
    $dataProfile = \App\Models\Profile::all();
@endphp
<div class="container">
    <section class="dashboard" id="dashboard">
        <div class="profile-container">
            @foreach ($dataProfile as $profile)
            <div class="profile-header">
                <img src="imgProfile/{{ $profile->gambar }}" class="profile-pic">
                <h1>{{ $profile->nama_lengkap }}</h1>
            </div>
                <form action="{{ route('update_profile') }}" method="POST" class="profile-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="fullName" name="nama_lengkap" value="{{ $profile->nama_lengkap }}" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <input type="text" id="username" name="nama_panggilan" value="{{ $profile->nama_panggilan }}" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <input type="text" id="password" name="password" value="{{ $profile->password }}" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <input type="file" id="profilePhoto" name="gambar" value="{{ $profile->gambar }}">
                    </div>
                    <button type="submit">Update</button>
                </form>
            @endforeach
        </div>
    </section>
</div>


<section class="add-portofolio" id="add-portofolio">
    <div class="container-add-portofolio">
        <h3>Tambah Portofolio Baru</h3>
        <form action="{{ route('tambah_portofolio') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama-portofolio">Nama Portofolio</label>
                <input type="text" id="nama-portofolio" name="nama_portofolio" placeholder="Masukkan nama portofolio" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi portofolio" required></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" id="link" name="link" placeholder="Masukkan link portofolio">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Tambah Portofolio">
            </div>
        </form>
    </div>
@php
    $portfolioItems = App\Models\portofolio::all();
@endphp
    <div class="portfolio-items">
        @foreach ($portfolioItems as $item)
            <div class="portfolio-item">
                <img src="imgPortofolio/{{ $item->gambar }}" alt="{{ $item->nama_portofolio }}">
                <h4>{{ $item->nama_portofolio }}</h4>
                <p>{{ $item->deskripsi }}</p>
                <a href="{{route('hapus_portofolio', $item->id)}}" style="margin-top: 2rem; float : right; color : red;" onclick="return confirm('Apakah Anda yakin?');"><i class="fa-solid fa-xmark"></i></a>
            </div>
        @endforeach
    </div>
</section>


@php
    $dataSkill = \App\Models\skill::all();
@endphp
    <section class="skills" id="skills">
        <div class="container-skill">
            <div class="container-item-skill">
                <h3>My Skills</h3>

                @foreach ($dataSkill as $skill)
                    <div class="skill-bar">
                        <label for="php">{{$skill->nama_skill}}</label>
                        <div class="progress-bar">
                            <progress id="php" value="{{$skill->performa}}" max="100"></progress>
                            <span>{{$skill->performa}}%</span>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        <div class="container-skill-form">
            <h3 style="color: black;">Tambah Skill Baru</h3>
            <form action="{{ route('tambah_skill') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="skillName">Nama Skill</label>
                    <input type="text" id="skillName" placeholder="Enter skill name" class="input-field" name="nama_skill" required>

                    <label for="skillValue" style="margin-top: 2rem">Performa (0-100)</label>
                    <input type="number" id="skillValue" placeholder="Masukan performa" class="input-field" name="performa" required>
                </div>
                <button id="saveSkillBtn" type="submit" class="save-skill-btn">Tambah</button>
            </form>
        </div>
    </section>


    @php
        $dataMessage = \App\Models\message::all();
    @endphp
    <section class="message-box" id="message">
        <h3>Pesan untuk anda</h3>
        @foreach ($dataMessage as $message)
            <div class="message">
                <h4>From: <span class="sender-name">{{ $message->nama }}</span></h4>
                <p class="email">Email: {{ $message->email }}</p>
                <div class="message-content">
                    <p>{{ $message->pesan }}</p>
                </div>
                <div class="message-actions">
                    <a href="{{ route('hapus_pesan', $message->id) }}" onclick="return confirm('Apakah Anda yakin?');" style="float: right; color : red;" class="delete-link">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </section>


@php
    $dataSosmed = \App\Models\sosmed::all();
@endphp
    <section class="social-media-form" id="social-media-form">
        <h3>Ganti Akun Sosial Media</h3>
        @foreach ($dataSosmed as $sosmed)
            <form action="{{ route('update_sosmed')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" id="facebook" name="facebook" placeholder="Masukkan link Facebook" value="{{ $sosmed->facebook }}">
                </div>

                <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukkan nomor WhatsApp" value="{{ $sosmed->whatsapp }}">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" id="instagram" name="instagram" placeholder="Masukkan username Instagram" value="{{ $sosmed->instagram }}">
                </div>

                <div class="form-group">
                    <label for="github">GitHub</label>
                    <input type="text" id="github" name="github" placeholder="Masukkan link GitHub" value="{{ $sosmed->github }}">
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        @endforeach

    </section>



    <script src="script.js"></script>
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

</div>
<script src="js/script.js"></script>
</body>
</html>


