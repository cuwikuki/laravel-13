<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - {{ $biodata->nama }}</title>

  <!-- Bootstrap 5 CSS CDN (Supaya layout pasti rapi & tidak rusak) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Lokal Template Kamu (Jika ada di public/css) -->
  <link href="{{ asset('css/main.3f6953e9.css') }}" rel="stylesheet">

  <style>
    body {
      background-color: #f4f7f6;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    .cv-card {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      overflow: hidden;
      margin-top: 40px;
      margin-bottom: 40px;
    }
    .cv-header {
      background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
      color: white;
      padding: 40px 20px;
      text-align: center;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid rgba(255, 255, 255, 0.8);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .section-title {
      border-bottom: 2px solid #2a5298;
      padding-bottom: 8px;
      margin-bottom: 20px;
      color: #1e3c72;
      font-weight: 600;
    }
    .info-box {
      background: #f8f9fa;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      height: 100%;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 col-lg-8">

        <div class="cv-card">
          <!-- Header CV -->
          <div class="cv-header">
            <div class="mb-3">
              @if($biodata->foto_profil)
                <img src="{{ asset('storage/' . $biodata->foto_profil) }}" class="profile-img" alt="Foto Profil">
              @else
                <img src="https://via.placeholder.com/150?text=No+Photo" class="profile-img" alt="Tanpa Foto">
              @endif
            </div>

            <h1 class="fw-bold m-0">{{ $biodata->nama }}</h1>
            <p class="fs-5 mt-1 mb-1 opacity-75">{{ $biodata->profesi }}</p>
            <span class="badge bg-light text-dark px-3 py-2 fs-6">NIM: {{ $biodata->nim }}</span>
          </div>

          <!-- Body CV -->
          <div class="p-4 p-md-5">

            <!-- About Me -->
            @if($biodata->tentang_saya)
            <div class="mb-5">
              <h4 class="section-title">About Me</h4>
              <p class="lh-lg text-secondary">{{ $biodata->tentang_saya }}</p>
            </div>
            @endif

            <!-- Contact Information -->
            <div>
              <h4 class="section-title">Contact Information</h4>
              <div class="row g-3 mt-2">
                <div class="col-md-4">
                  <div class="info-box">
                    <div class="fw-bold text-dark">Email</div>
                    <div class="text-secondary small text-break">{{ $biodata->email }}</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="info-box">
                    <div class="fw-bold text-dark">Telepon</div>
                    <div class="text-secondary small">{{ $biodata->telepon ?? '-' }}</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="info-box">
                    <div class="fw-bold text-dark">Alamat</div>
                    <div class="text-secondary small">{{ $biodata->alamat ?? '-' }}</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>
