<?php
/**
 * Template Name: Mirabell Modern Rebranding Homepage
 * Description: High-converting, Kadence-powered, dual-funnel (B2C & B2B) landing page for Klinik Utama Mirabell.
 */
$theme_uri = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Utama Mirabell | Layanan Medis Terpadu & UGD 24 Jam Balikpapan</title>
  
  <script>
    window.MIRABELL_THEME_URI = "<?php echo esc_url( $theme_uri ); ?>";
  </script>

  <!-- Schema.org Structured Data for Local Medical Clinic SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MedicalClinic",
    "name": "Klinik Utama Mirabell",
    "image": "https://mirabell.co.id/berkas/logo4.png",
    "telephone": "+625428528888",
    "url": "https://mirabell.co.id",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Syarifuddin Yoes No. 88, Sepinggan Baru",
      "addressLocality": "Balikpapan",
      "addressRegion": "Kalimantan Timur",
      "postalCode": "76115",
      "addressCountry": "ID"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "-1.2378",
      "longitude": "116.8942"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
      ],
      "opens": "00:00",
      "closes": "23:59"
    },
    "medicalSpecialty": [
      "EmergencyMedicalService", "Cardiovascular", "ObstetricsAndGynecology",
      "Dentistry", "OccupationalMedicine", "Radiology", "Pathology"
    ]
  }
  </script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- 1. TOP EMERGENCY BAR -->
  <aside class="emergency-bar">
    <div class="container emergency-bar-inner">
      <div class="emergency-left">
        <span class="live-pulse-badge">
          <span class="live-dot"></span> Buka 24 Jam Nonstop
        </span>
        <span class="divider">|</span>
        <span>UGD & Laboratorium Siaga Setiap Hari</span>
      </div>
      <div class="emergency-right">
        <a href="tel:05428528888" class="emergency-link-item emergency-phone-tag emergency-btn-call">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          UGD: (0542) 852 8888
        </a>
        <a href="https://api.whatsapp.com/send?phone=628115067711&text=Halo%20Klinik%20Utama%20Mirabell,%20saya%20membutuhkan%20informasi%20layanan%20medis." target="_blank" class="emergency-link-item emergency-wa-tag emergency-btn-wa">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
          WhatsApp 24 Jam
        </a>
      </div>
    </div>
  </aside>

  <!-- 2. MAIN HEADER & NAVBAR -->
  <header class="main-header">
    <div class="container header-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
        <div class="logo-symbol">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="9" stroke="#FFFFFF" stroke-width="1.8"/></svg>
        </div>
        <div class="logo-text">
          <span class="brand-name">MIRABELL</span>
          <span class="brand-category">KLINIK UTAMA & LAYANAN MEDIS TERPADU</span>
        </div>
      </a>

      <nav class="nav-links">
        <a href="#layanan" class="nav-item">Layanan 24 Jam</a>
        <a href="#dokter" class="nav-item">Jadwal Dokter</a>
        <a href="#mcu" class="nav-item">Paket MCU</a>
        <a href="#korporat" class="nav-item">Kemitraan Korporat B2B</a>
        <a href="#fasilitas" class="nav-item">Fasilitas Medis</a>
      </nav>

      <div class="header-cta">
        <button class="btn btn-outline" onclick="openBookingModal('Portal Pasien & Unduh Hasil Lab')">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          Portal Pasien
        </button>
        <button class="btn btn-primary" onclick="openBookingModal('Pendaftaran Janji Temu')">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          Buat Janji Temu
        </button>
      </div>
    </div>
  </header>

  <!-- 3. MODERN SEGMENTED AUDIENCE SWITCHER -->
  <div class="audience-toggle-bar">
    <div class="container">
      <div class="toggle-container">
        <span class="toggle-label">Pilih Kebutuhan Anda:</span>
        <div class="segmented-control">
          <button id="btnTabB2C" class="toggle-btn active" onclick="switchAudience('b2c')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            Pasien & Keluarga (B2C)
          </button>
          <button id="btnTabB2B" class="toggle-btn" onclick="switchAudience('b2b')">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            Kemitraan Perusahaan & MCU (B2B)
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- 4. HERO SECTION WITH FAST WIZARD -->
  <section class="hero-section">
    <div class="container hero-grid">
      
      <!-- Left: Value Proposition -->
      <div class="hero-content">
        <div id="heroBadge" class="hero-accreditation-pill">
          <span class="gold-badge-icon">✨</span>
          <span id="heroBadgeText">Fasilitas Layanan Medis Terpadu & Terpercaya Balikpapan</span>
        </div>
        
        <h1 id="heroTitle">
          Layanan Medis Komprehensif & Terpercaya di Balikpapan
        </h1>
        
        <p id="heroSubtitle" class="hero-desc">
          Bukan sekadar klinik biasa. Klinik Utama Mirabell menyediakan penanganan UGD 24 Jam sigap, Poliklinik Dokter Spesialis terpadu, Laboratorium & Radiologi canggih, serta Rawat Inap nyaman untuk seluruh keluarga Anda.
        </p>

        <div id="heroKeyPoints" class="hero-key-points">
          <div class="key-point-item">
            <span class="check-icon-pill">✓</span>
            <span>UGD, Laboratorium & Apotek 24 Jam Siaga Setiap Hari</span>
          </div>
          <div class="key-point-item">
            <span class="check-icon-pill">✓</span>
            <span>12+ Dokter Spesialis (Jantung, Kandungan, THT, Gigi, Saraf, Gizi)</span>
          </div>
          <div class="key-point-item">
            <span class="check-icon-pill">✓</span>
            <span>Rekanan Resmi Asuransi & TPA Terkemuka di Indonesia</span>
          </div>
        </div>

        <div class="hero-actions">
          <button class="btn btn-primary btn-lg" onclick="openBookingModal('Konsultasi Dokter Spesialis')">
            Daftar / Konsultasi Cepat
          </button>
          <a href="#layanan" class="btn btn-secondary btn-lg">
            Jelajahi Fasilitas Medis
          </a>
        </div>
      </div>

      <!-- Right: Fast Booking & Triage Wizard -->
      <div class="hero-card">
        <div class="card-header-badge">Layanan Satu Pintu</div>
        <h3>Reservasi Cepat & Konsultasi</h3>
        <p>Dapatkan jadwal dokter atau konsultasi layanan tanpa antre panjang.</p>

        <form id="quickBookingForm" class="card-form" onsubmit="handleQuickBooking(event)">
          <div class="form-group">
            <label>Nama Pasien / Nama Instansi</label>
            <input type="text" id="qbName" placeholder="Contoh: Budi Santoso" required>
          </div>

          <div class="form-group">
            <label>Pilihan Layanan</label>
            <select id="qbService" required>
              <option value="">-- Pilih Kebutuhan Layanan --</option>
              <option value="UGD 24 Jam (Darurat Medis)">UGD 24 Jam (Darurat Medis)</option>
              <option value="Konsultasi Dokter Spesialis">Konsultasi Dokter Spesialis</option>
              <option value="Medical Check Up (MCU) Individu">Medical Check Up (MCU) Individu</option>
              <option value="MCU Korporat / Kemitraan Perusahaan">MCU Korporat / Kemitraan Perusahaan (B2B)</option>
              <option value="Laboratorium & Radiologi (USG/Rontgen)">Laboratorium & Radiologi (USG/Rontgen)</option>
              <option value="Rawat Inap / Persalinan">Rawat Inap / Persalinan</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Tanggal Kunjungan</label>
              <input type="date" id="qbDate" required>
            </div>
            <div class="form-group">
              <label>No. WhatsApp Aktif</label>
              <input type="tel" id="qbPhone" placeholder="0812xxxxxxx" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-block">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            Hubungkan ke WhatsApp Petugas Medis
          </button>
          <span class="guarantee-text">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            Privasi Data Pasien Terjamin & Bebas Biaya Pendaftaran Online
          </span>
        </form>
      </div>

    </div>
  </section>

  <!-- 5. SOCIAL PROOF & PARTNERSHIP BADGES -->
  <section class="trust-bar-section">
    <div class="container">
      <div class="trust-header">
        <p class="trust-subtitle">Dipercaya oleh Perusahaan Migas, Pertambangan, dan Asuransi Terkemuka</p>
      </div>
            <div class="partner-grid">
        <div class="partner-logo-card" title="Pertamina Hulu Mahakam & KPB">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/pertamina.svg' ); ?>" alt="Pertamina" loading="lazy">
          <span class="partner-category-sub">Mitra Migas Kaltim</span>
        </div>
        <div class="partner-logo-card" title="Medco Energi">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/medco.svg' ); ?>" alt="Medco Energi" loading="lazy">
          <span class="partner-category-sub">Occupational Health</span>
        </div>
        <div class="partner-logo-card" title="SLB (Schlumberger)">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/slb.svg' ); ?>" alt="SLB Schlumberger" loading="lazy">
          <span class="partner-category-sub">Energy Services</span>
        </div>
        <div class="partner-logo-card" title="Petrosea">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/petrosea.svg' ); ?>" alt="Petrosea" loading="lazy">
          <span class="partner-category-sub">Fit-to-Work Partner</span>
        </div>
        <div class="partner-logo-card" title="Berau Coal">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/beraucoal.svg' ); ?>" alt="Berau Coal" loading="lazy">
          <span class="partner-category-sub">Mining Partner</span>
        </div>
        <div class="partner-logo-card" title="SKK Migas">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/skkmigas.svg' ); ?>" alt="SKK Migas" loading="lazy">
          <span class="partner-category-sub">K3 Migas RI</span>
        </div>
        <div class="partner-logo-card" title="AIA Financial">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/aia.svg' ); ?>" alt="AIA Financial" loading="lazy">
          <span class="partner-category-sub">Rekanan Asuransi</span>
        </div>
        <div class="partner-logo-card" title="BNI Life">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/bni_life.svg' ); ?>" alt="BNI Life" loading="lazy">
          <span class="partner-category-sub">Asuransi Rekanan</span>
        </div>
        <div class="partner-logo-card" title="BRI Life">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/bri_life.svg' ); ?>" alt="BRI Life" loading="lazy">
          <span class="partner-category-sub">Asuransi Rekanan</span>
        </div>
        <div class="partner-logo-card" title="Asuransi Jasindo">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/jasindo.svg' ); ?>" alt="Jasindo" loading="lazy">
          <span class="partner-category-sub">BUMN Asuransi</span>
        </div>
        <div class="partner-logo-card" title="FWD Insurance">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/fwd.svg' ); ?>" alt="FWD Insurance" loading="lazy">
          <span class="partner-category-sub">Asuransi Rekanan</span>
        </div>
        <div class="partner-logo-card" title="Owlexa Healthcare">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/partners/owlexa.svg' ); ?>" alt="Owlexa Healthcare" loading="lazy">
          <span class="partner-category-sub">TPA Healthcare</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. LAYANAN MEDIS 24 JAM & POLIKLINIK -->
  <section id="layanan" class="services-section">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-tag">Fasilitas Medis Lengkap</span>
        <h2>Layanan Kesehatan Terpadu untuk Anda & Keluarga</h2>
        <p>Didukung oleh tenaga medis berpengalaman dan teknologi medis generasi terbaru di Balikpapan Selatan.</p>
      </div>

      <div class="services-grid">
        <div class="service-card highlight-card">
          <span class="service-badge-top">24 Jam Standby</span>
          <div class="service-icon-wrap red-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="9" stroke-width="1.8"/></svg>
          </div>
          <h3>Unit Gawat Darurat (UGD)</h3>
          <p>Penanganan trauma darurat dan kondisi kritis dengan ambulans siaga, dokter jaga 24 jam, dan respon cepat.</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Ambulans & Respon Cepat</li>
            <li><span class="bullet-dot"></span> Dokter & Perawat Bersertifikat ACLS/ATLS</li>
            <li><span class="bullet-dot"></span> Ruang Resusitasi & Bed Observasi Higienis</li>
          </ul>
          <a href="tel:05428528888" class="card-action-link emergency-action-link">Hubungi UGD (0542) 852 8888 →</a>
        </div>

        <div class="service-card">
          <div class="service-icon-wrap teal-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Poliklinik Dokter Spesialis</h3>
          <p>Pemeriksaan mendalam bersama dokter spesialis: Jantung, Kandungan & USG 4D, Saraf, Gigi, THT, Gizi, dan Psikolog.</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Pemeriksaan USG Fetomaternal & 4D</li>
            <li><span class="bullet-dot"></span> EKG & Treadmill Jantung Terpadu</li>
            <li><span class="bullet-dot"></span> Klinik Gigi & Fisioterapi Medik</li>
          </ul>
          <a href="#dokter" class="card-action-link">Lihat Jadwal Dokter →</a>
        </div>

        <div class="service-card">
          <div class="service-icon-wrap blue-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Laboratorium & Radiologi</h3>
          <p>Laboratorium 24 Jam dengan hasil cepat dan akurat, serta unit Radiologi (Rontgen Thorax, USG Abdomen).</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Hematologi, Kimia Darah, Serologi</li>
            <li><span class="bullet-dot"></span> Rontgen Digital & Pemeriksaan Sinar-X</li>
            <li><span class="bullet-dot"></span> Hasil Digital Fast-Track via WhatsApp/Email</li>
          </ul>
          <button class="card-action-link" onclick="openBookingModal('Pemeriksaan Laboratorium')">Pesan Tes Laboratorium →</button>
        </div>

        <div class="service-card">
          <div class="service-icon-wrap amber-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3>Rawat Inap & Persalinan</h3>
          <p>Kamar rawat inap yang nyaman, higienis, didukung ruang persalinan terpadu dan perawatan pasca melahirkan.</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Kamar Rawat Inap VIP & Kelas 1-3</li>
            <li><span class="bullet-dot"></span> Bidan & Dokter Kandungan Siaga 24 Jam</li>
            <li><span class="bullet-dot"></span> Pemantauan Pasien Intensif</li>
          </ul>
          <button class="card-action-link" onclick="openBookingModal('Informasi Rawat Inap/Persalinan')">Informasi Kamar & Biaya →</button>
        </div>

        <div class="service-card">
          <div class="service-icon-wrap green-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3>Apotek 24 Jam & Farmasi</h3>
          <p>Sedia obat-obatan resep dokter, obat bebas berlisensi BPOM, serta konsultasi kefarmasian sepanjang hari.</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Buka 24 Jam Siap Antar / Resep Online</li>
            <li><span class="bullet-dot"></span> Apoteker Berpengalaman Siaga</li>
            <li><span class="bullet-dot"></span> Stok Obat Medis Lengkap</li>
          </ul>
          <button class="card-action-link" onclick="openBookingModal('Konsultasi Apotek/Obat')">Tanya Ketersediaan Obat →</button>
        </div>

        <div class="service-card">
          <div class="service-icon-wrap purple-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
          </div>
          <h3>HomeCare & Layanan Kunjungan</h3>
          <p>Layanan pemeriksaan dokter, rawat luka, fisioterapi, dan pengambilan sampel lab langsung di kediaman Anda.</p>
          <ul class="card-features">
            <li><span class="bullet-dot"></span> Kunjungan Dokter & Perawat ke Rumah</li>
            <li><span class="bullet-dot"></span> Pengambilan Sampel Darah di Tempat</li>
            <li><span class="bullet-dot"></span> Perawatan Pasca Operasi & Lansia</li>
          </ul>
          <button class="card-action-link" onclick="openBookingModal('Permintaan HomeCare')">Jadwalkan HomeCare →</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. REAL-TIME DOCTOR FINDER WITH AUTHENTIC PORTRAITS -->
  <section id="dokter" class="doctor-finder-section">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-tag">Jadwal Praktik Real-Time</span>
        <h2>Temukan Dokter Spesialis & Buat Janji</h2>
        <p>Pilih spesialisasi atau hari praktik untuk melihat jadwal aktif dokter di Klinik Utama Mirabell.</p>
      </div>

      <div class="finder-filter-box">
        <div class="filter-group">
          <label>Spesialisasi / Poli:</label>
          <select id="filterSpecialty" onchange="applyDoctorFilter()">
            <option value="ALL">Semua Spesialisasi</option>
            <option value="Kandungan">Spesialis Kebidanan & Kandungan (Sp.OG)</option>
            <option value="Jantung">Spesialis Jantung & Pembuluh Darah (Sp.JP)</option>
            <option value="Gigi">Dokter Gigi & Konservasi Gigi</option>
            <option value="Saraf">Spesialis Saraf (Neurologi)</option>
            <option value="THT">Spesialis THT-KL</option>
            <option value="Umum">Dokter Umum (Siaga 24 Jam)</option>
            <option value="Gizi">Konsultasi Gizi Klinis</option>
            <option value="Psikolog">Psikolog Klinis</option>
          </select>
        </div>

        <div class="filter-group">
          <label>Hari Praktik:</label>
          <select id="filterDay" onchange="applyDoctorFilter()">
            <option value="ALL">Semua Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
          </select>
        </div>

        <div class="filter-group" style="flex: 0; min-width: auto;">
          <button class="btn btn-outline" onclick="resetDoctorFilter()">Reset Filter</button>
        </div>
      </div>

      <div id="doctorCardsList" class="doctor-cards-grid">
        <!-- Rendered dynamically by mirabell-custom.js with authentic doctor portraits -->
      </div>
    </div>
  </section>

  <!-- 8. REAL MEDICAL FACILITY SHOWCASE (PHOTOREALISTIC CARDS) -->
  <section id="fasilitas" class="facility-section">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-tag">Bukti Fasilitas Nyata</span>
        <h2>Standar Sarana & Prasarana Medis Modern</h2>
        <p>Kami menjamin sterilitas, kenyamanan, dan akurasi diagnostik dengan investasi teknologi medis terdepan.</p>
      </div>

      <div class="facility-grid">
        <div class="facility-card">
          <div class="facility-img-wrap">
            <img src="<?php echo esc_url( $theme_uri . '/assets/images/ugd.jpg' ); ?>" alt="Ruang Tindakan UGD 24 Jam" loading="lazy">
            <span class="facility-tag-badge">UGD 24 Jam</span>
          </div>
          <div class="facility-body">
            <h4>Fasilitas Tindakan UGD 24 Jam</h4>
            <p>Dilengkapi bed observasi modern, defibrillator, oksigen sentral, dan peralatan tindakan medis darurat higienis.</p>
          </div>
        </div>

        <div class="facility-card">
          <div class="facility-img-wrap">
            <img src="<?php echo esc_url( $theme_uri . '/assets/images/lab.jpg' ); ?>" alt="Laboratorium Klinis Otomatis" loading="lazy">
            <span class="facility-tag-badge">Laboratorium 24 Jam</span>
          </div>
          <div class="facility-body">
            <h4>Laboratorium Klinis Presisi</h4>
            <p>Mesin analizer hematologi dan kimia darah otomatis dengan kontrol mutu berkala demi akurasi hasil cepat.</p>
          </div>
        </div>

        <div class="facility-card">
          <div class="facility-img-wrap">
            <img src="<?php echo esc_url( $theme_uri . '/assets/images/radiologi.jpg' ); ?>" alt="Radiologi & USG 4D" loading="lazy">
            <span class="facility-tag-badge">Imaging & Radiologi</span>
          </div>
          <div class="facility-body">
            <h4>Radiologi & Ultrasonografi 4D</h4>
            <p>Hasil rontgen digital resolusi tinggi minim radiasi serta mesin USG 4D untuk pemantauan janin tajam dan akurat.</p>
          </div>
        </div>

        <div class="facility-card">
          <div class="facility-img-wrap">
            <img src="<?php echo esc_url( $theme_uri . '/assets/images/rawat_inap.jpg' ); ?>" alt="Ruang Rawat Inap Nyaman" loading="lazy">
            <span class="facility-tag-badge">Rawat Inap & Bersalin</span>
          </div>
          <div class="facility-body">
            <h4>Ruang Perawatan & Persalinan</h4>
            <p>Suasana tenang berfasilitas AC, perawat ramah 24 jam, dan kamar mandi dalam untuk pemulihan optimal keluarga.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. PAKET MEDICAL CHECK UP (MCU) & COMPARATOR -->
  <section id="mcu" class="mcu-section">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-tag">Pencegahan & Skrining Dini</span>
        <h2>Paket Medical Check Up (MCU) Komprehensif</h2>
        <p>Pilihan paket skrining kesehatan mandiri dan standar sertifikasi industri migas/pertambangan.</p>
      </div>

      <div class="mcu-pricing-grid">
        <div class="mcu-card">
          <div class="mcu-badge">Individu & Pra-Nikah</div>
          <h3>Basic Screening MCU</h3>
          <div class="mcu-price">Rp 450.000 <span class="period">/ orang</span></div>
          <p class="mcu-desc">Pemeriksaan kondisi organ vital dasar untuk skrining kesehatan tahunan atau syarat berkas kerja.</p>
          <ul class="mcu-items">
            <li><span class="check-green">✓</span> Pemeriksaan Fisik Lengkap Dokter Umum</li>
            <li><span class="check-green">✓</span> Pengukuran Vital Signs (Tensi, BMI, Nadi)</li>
            <li><span class="check-green">✓</span> Laboratorium: Darah Lengkap & Urine Lengkap</li>
            <li><span class="check-green">✓</span> Glukosa Darah Puasa & Kolesterol Total</li>
            <li><span class="check-green">✓</span> Konsultasi Hasil & Rekomendasi Dokter</li>
          </ul>
          <button class="btn btn-outline btn-block" onclick="openBookingModal('MCU Basic Screening')">Daftar Paket Ini</button>
        </div>

        <div class="mcu-card featured-mcu">
          <div class="popular-ribbon">Paling Direkomendasikan</div>
          <div class="mcu-badge">Standar Migas & Tambang</div>
          <h3>Fit-to-Work Offshore / Tambang</h3>
          <div class="mcu-price">Rp 1.250.000 <span class="period">/ orang</span></div>
          <p class="mcu-desc">Standar resmi sertifikasi kesehatan kerja migas, laut, dan site pertambangan Kalimantan Timur.</p>
          <ul class="mcu-items">
            <li><span class="check-green">✓</span> <strong>Semua parameter Paket Basic</strong></li>
            <li><span class="check-green">✓</span> Rontgen Thorax Digital (Spesialis Radiologi)</li>
            <li><span class="check-green">✓</span> EKG Jantung (Elektrokardiogram 12-Lead)</li>
            <li><span class="check-green">✓</span> Tes Spirometri (Fungsi & Kapasitas Paru)</li>
            <li><span class="check-green">✓</span> Tes Audiometri (Bilik Kedap Suara)</li>
            <li><span class="check-green">✓</span> Panel Narkoba 6 Parameter & Buta Warna</li>
            <li><span class="check-green">✓</span> <strong>Sertifikat Fit-to-Work Dokter Okupasi</strong></li>
          </ul>
          <button class="btn btn-primary btn-block" onclick="openBookingModal('MCU Fit-to-Work Offshore/Tambang')">Reservasi / Quota Perusahaan</button>
        </div>

        <div class="mcu-card">
          <div class="mcu-badge">Eksekutif & Lengkap</div>
          <h3>Executive Comprehensive MCU</h3>
          <div class="mcu-price">Rp 2.450.000 <span class="period">/ orang</span></div>
          <p class="mcu-desc">Evaluasi menyeluruh profil organ dalam untuk pimpinan manajemen dan pencegahan dini penyakit kronis.</p>
          <ul class="mcu-items">
            <li><span class="check-green">✓</span> <strong>Semua parameter Paket Fit-to-Work</strong></li>
            <li><span class="check-green">✓</span> USG Abdomen Lengkap (Hati, Ginjal, Empedu)</li>
            <li><span class="check-green">✓</span> Treadmill Stress Test Jantung (Sp.JP)</li>
            <li><span class="check-green">✓</span> Profil Lemak Lengkap (HDL, LDL, Trigliserida)</li>
            <li><span class="check-green">✓</span> Fungsi Ginjal (Ureum, Kreatinin, Asam Urat)</li>
            <li><span class="check-green">✓</span> Fungsi Hati (SGOT, SGPT, Bilirubin)</li>
            <li><span class="check-green">✓</span> Medical Book Report & Konsultasi Diet Gizi</li>
          </ul>
          <button class="btn btn-outline btn-block" onclick="openBookingModal('MCU Executive Comprehensive')">Daftar Paket Ini</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. SECTION B2B CORPORATE OCCUPATIONAL HEALTH -->
  <section id="korporat" class="corporate-section">
    <div class="container corporate-grid">
      <div class="corporate-text">
        <span class="section-tag" style="background:#0A96A6; color:#FFFFFF; border:none;">B2B Health Partner</span>
        <h2>Solusi Kesehatan Kerja (Occupational Health) untuk Industri Kaltim</h2>
        <p>
          Klinik Utama Mirabell adalah mitra terpercaya korporasi migas, logistik laut, dan pertambangan di Balikpapan. Kami membantu manajemen HRD & HSE menjaga kepatuhan regulasi K3 serta kesehatan karyawan.
        </p>

        <div class="b2b-features-list">
          <div class="b2b-feat-item">
            <div class="b2b-icon-chip">🏢</div>
            <div>
              <h4>Onsite & Mobile Medical Check Up</h4>
              <p>Tim medis kami hadir langsung di kantor atau site proyek Anda dengan mobile medical unit.</p>
            </div>
          </div>

          <div class="b2b-feat-item">
            <div class="b2b-icon-chip">📋</div>
            <div>
              <h4>Sertifikasi Fit-to-Work Cepat & Resmi</h4>
              <p>Pemeriksaan terstandarisasi dengan penerbitan sertifikat digital yang dapat diverifikasi online.</p>
            </div>
          </div>

          <div class="b2b-feat-item">
            <div class="b2b-icon-chip">🩺</div>
            <div>
              <h4>Penyediaan Paramedis & Dokter Onsite</h4>
              <p>Layanan penempatan dokter perusahaan dan perawat bersertifikasi di site tambang / pabrik.</p>
            </div>
          </div>

          <div class="b2b-feat-item">
            <div class="b2b-icon-chip">📊</div>
            <div>
              <h4>Dashboard Hasil MCU & Evaluasi Ergonomi</h4>
              <p>Laporan agregat kesehatan pekerja untuk audit K3 dan pemantauan penyakit akibat kerja (PAK).</p>
            </div>
          </div>
        </div>

        <div class="corporate-cta-box">
          <button class="btn btn-primary btn-lg" onclick="openBookingModal('Penawaran MCU Korporat')">
            Minta Proposal & Negosiasi Tarif Korporat
          </button>
          <a href="https://api.whatsapp.com/send?phone=628115067711&text=Halo%20PIC%20B2B%20Klinik%20Utama%20Mirabell,%20kami%20ingin%20berdiskusi%20kemitraan%20MCU%20karyawan." target="_blank" class="btn btn-outline btn-lg">
            Hubungi PIC Korporat
          </a>
        </div>
      </div>

      <div class="corporate-visual">
        <div class="stats-card">
          <div class="stat-number">150+</div>
          <div class="stat-label">Perusahaan Rekanan Aktif di Kalimantan Timur</div>
        </div>
        <div class="stats-card">
          <div class="stat-number">35.000+</div>
          <div class="stat-label">Pemeriksaan MCU Pekerja Lapangan Sukses Terlaksana</div>
        </div>
        <div class="stats-card">
          <div class="stat-number">24 Jam</div>
          <div class="stat-label">Dukungan Rujukan & Evakuasi Medis Terkoordinasi</div>
        </div>
        <div class="stats-card">
          <div class="stat-number">100%</div>
          <div class="stat-label">Kepatuhan Standar Keselamatan Migas & Kemenkes RI</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. FOOTER -->
  <footer class="main-footer">
    <div class="container footer-grid">
      <div class="footer-col about-col">
        <div class="brand-logo footer-logo">
          <div class="logo-symbol">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="9" stroke="#FFFFFF" stroke-width="1.8"/></svg>
          </div>
          <div class="logo-text">
            <span class="brand-name">MIRABELL</span>
            <span class="brand-category">KLINIK UTAMA & LAYANAN MEDIS TERPADU</span>
          </div>
        </div>
        <p class="footer-desc">
          Fasilitas pelayanan kesehatan tingkat lanjut di Balikpapan dengan motto <em>"Caring Heart for Better Healing"</em>. Melayani UGD 24 Jam, Poli Spesialis, Rawat Inap, dan Layanan Medis Kerja Korporat.
        </p>
        <div class="footer-rating">
          <span class="stars">★★★★★</span>
          <strong>4.8 / 5.0</strong> di Google Reviews (1.200+ Pasien Terlayani)
        </div>
      </div>

      <div class="footer-col">
        <h4>Layanan Prioritas</h4>
        <ul class="footer-links">
          <li><a href="#layanan">Unit Gawat Darurat 24 Jam</a></li>
          <li><a href="#layanan">Laboratorium Klinis 24 Jam</a></li>
          <li><a href="#layanan">Apotek & Farmasi Siaga</a></li>
          <li><a href="#dokter">Poli Spesialis Jantung & Obgyn</a></li>
          <li><a href="#mcu">Paket MCU Fit-to-Work</a></li>
          <li><a href="#korporat">MCU Onsite & Mobile Unit</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Kontak & Emergensi</h4>
        <p><strong>Lokasi:</strong><br>Jl. Syarifuddin Yoes No. 88, Sepinggan Baru, Balikpapan Selatan, Kota Balikpapan, Kaltim 76115</p>
        <p><strong>Hotline UGD:</strong><br><a href="tel:05428528888" style="color:#FDA4AF; font-weight:700;">(0542) 852 8888</a></p>
        <p><strong>WhatsApp Booking:</strong><br><a href="https://api.whatsapp.com/send?phone=628115067711" target="_blank" style="color:#6EE7B7; font-weight:700;">+62 811-5067-711</a></p>
        <p><strong>Email Resmi:</strong><br>cs@mirabell.co.id</p>
      </div>

      <div class="footer-col">
        <h4>Jam Operasional</h4>
        <div class="ops-box">
          <div class="ops-row">
            <span>UGD & Ambulans:</span>
            <strong>24 Jam Setiap Hari</strong>
          </div>
          <div class="ops-row">
            <span>Laboratorium:</span>
            <strong>24 Jam Setiap Hari</strong>
          </div>
          <div class="ops-row">
            <span>Apotek:</span>
            <strong>24 Jam Setiap Hari</strong>
          </div>
          <div class="ops-row">
            <span>Poli Dokter Spesialis:</span>
            <strong>08.00 - 21.00 WITA</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p>© <?php echo date('Y'); ?> Klinik Utama Mirabell. All rights reserved. Powered by Kadence & Mirabell Rebranding Engine.</p>
        <div class="footer-bottom-links">
          <a href="#">Kebijakan Privasi Rekam Medis</a>
          <a href="#">Syarat Layanan</a>
          <a href="#">Standar K3 & Akreditasi</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- 12. FLOATING WHATSAPP BUTTON -->
  <a href="https://api.whatsapp.com/send?phone=628115067711&text=Halo%20Klinik%20Utama%20Mirabell,%20saya%20ingin%20bertanya%20mengenai%20layanan%20kesehatan." target="_blank" class="floating-wa-btn" title="Chat WhatsApp Klinik 24 Jam">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="#FFFFFF"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
    <span class="floating-tooltip">Butuh bantuan? Chat kami 24 Jam</span>
  </a>

  <!-- 13. MODAL 1-PINTU BOOKING -->
  <div id="bookingModal" class="modal-backdrop">
    <div class="modal-dialog">
      <div class="modal-header">
        <div>
          <h3 id="modalTitle">Formulir Pendaftaran & Janji Temu</h3>
          <p id="modalSubtitle">Layanan Satu Pintu Klinik Utama Mirabell</p>
        </div>
        <button class="modal-close" onclick="closeBookingModal()">✕</button>
      </div>

      <form id="modalBookingForm" onsubmit="handleModalSubmit(event)">
        <div class="form-group">
          <label>Nama Pasien / Nama Instansi</label>
          <input type="text" id="mbName" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
          <label>Nomor WhatsApp Pasien</label>
          <input type="tel" id="mbPhone" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Layanan yang Diperlukan</label>
            <select id="mbService" required>
              <option value="Konsultasi Dokter Spesialis">Konsultasi Dokter Spesialis</option>
              <option value="UGD 24 Jam (Darurat)">UGD 24 Jam (Darurat)</option>
              <option value="Medical Check Up (MCU)">Medical Check Up (MCU)</option>
              <option value="Pemeriksaan Laboratorium">Pemeriksaan Laboratorium</option>
              <option value="Radiologi / Rontgen / USG">Radiologi / Rontgen / USG</option>
              <option value="Rawat Inap / Persalinan">Rawat Inap / Persalinan</option>
              <option value="Fisioterapi & Konsultasi Gizi">Fisioterapi & Konsultasi Gizi</option>
              <option value="HomeCare Medis">HomeCare Medis</option>
            </select>
          </div>

          <div class="form-group">
            <label>Rencana Tanggal Kunjungan</label>
            <input type="date" id="mbDate" required>
          </div>
        </div>

        <div class="form-group">
          <label>Keluhan / Catatan Khusus (Opsional)</label>
          <textarea id="mbNotes" rows="2" placeholder="Tuliskan dokter yang dituju atau gejala yang dirasakan..."></textarea>
        </div>

        <div class="modal-actions">
          <button type="button" class="btn btn-secondary" onclick="closeBookingModal()">Batal</button>
          <button type="submit" class="btn btn-primary">
            Kirim ke WhatsApp Petugas Medis
          </button>
        </div>
      </form>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
