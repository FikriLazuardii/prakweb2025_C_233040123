<section class="py-5" 
         style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); color: white;">
  <div class="container text-center py-4">
    
    <!-- Foto Profil -->
    <img src="<?= BASEURL; ?>/img/profil.jpeg" 
         alt="Foto Profil" 
         class="rounded-circle shadow-lg mb-3"
         style="width:130px; height:130px; object-fit:cover; border:4px solid rgba(255,255,255,0.8); transition: transform 0.3s ease;"
         onmouseover="this.style.transform='scale(1.08)'"
         onmouseout="this.style.transform='scale(1)'">

    <!-- Judul -->
    <h1 class="fw-bold mb-2" style="font-size:2.3rem; letter-spacing:0.5px;">
      👋 Halo! Selamat Datang di Website Saya
    </h1>

    <!-- Nama dan NPM -->
    <p class="fs-5 mb-3">
      <strong>Nama saya <?= $data['nama']; ?></strong><br>
      <span class="opacity-75">NPM, <?= $data['npm']; ?></span>
    </p>

    <!-- Kalimat Menarik -->
    <h5 class="fw-normal mb-3" style="font-style: italic; opacity: 0.9;">
      “Bukan sekadar coding, tapi seni menciptakan masa depan.” 💻
    </h5>

    <!-- Tombol -->
    <a href="#" class="btn btn-light fw-semibold rounded-pill px-5 py-2 shadow-sm" 
       style="color: #2c5364; font-size:1.05rem; transition: all 0.3s ease;"
       onmouseover="this.style.background='#2c5364'; this.style.color='white'; this.style.transform='scale(1.05)';"
       onmouseout="this.style.background='white'; this.style.color='#2c5364'; this.style.transform='scale(1)';">
       Klik Saya !
    </a>

  </div>
</section>