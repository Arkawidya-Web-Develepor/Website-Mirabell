// =======================================================
// KLINIK UTAMA MIRABELL - REBRANDING INTERACTIVE ENGINE
// =======================================================

// 1. DATASET JADWAL DOKTER SPESIALIS & UMUM
const DOCTORS_DATA = [
  {
    id: 1,
    name: "dr. Hendra Wijaya, Sp.JP (K)",
    specialty: "Jantung",
    title: "Spesialis Jantung & Pembuluh Darah",
    days: ["Senin", "Rabu", "Jumat"],
    hours: "16.00 - 20.00 WITA",
    room: "Poli Jantung & Treadmill",
    initial: "HW"
  },
  {
    id: 2,
    name: "dr. Siti Rahmawati, Sp.OG",
    specialty: "Kandungan",
    title: "Spesialis Kebidanan & Kandungan (USG 4D)",
    days: ["Senin", "Selasa", "Kamis", "Sabtu"],
    hours: "09.00 - 13.00 & 17.00 - 20.00 WITA",
    room: "Poli Kandungan & USG 4D",
    initial: "SR"
  },
  {
    id: 3,
    name: "drg. Maya Anggraini, Sp.KG",
    specialty: "Gigi",
    title: "Dokter Gigi Spesialis Konservasi Gigi",
    days: ["Selasa", "Kamis", "Jumat"],
    hours: "14.00 - 18.00 WITA",
    room: "Klinik Gigi & Estetika Medis",
    initial: "MA"
  },
  {
    id: 4,
    name: "dr. Bambang Prasetyo, Sp.N",
    specialty: "Saraf",
    title: "Spesialis Neurologi (Saraf & Stroke)",
    days: ["Senin", "Rabu", "Kamis"],
    hours: "18.00 - 21.00 WITA",
    room: "Poli Saraf & Fisioterapi",
    initial: "BP"
  },
  {
    id: 5,
    name: "dr. Anita Kusuma, Sp.THT-KL",
    specialty: "THT",
    title: "Spesialis Telinga Hidung Tenggorokan",
    days: ["Selasa", "Rabu", "Sabtu"],
    hours: "10.00 - 14.00 WITA",
    room: "Poli THT & Endoskopi",
    initial: "AK"
  },
  {
    id: 6,
    name: "dr. Rizky Maulana & Tim Dokter Jaga",
    specialty: "Umum",
    title: "Dokter Umum & Penanggung Jawab UGD",
    days: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
    hours: "24 Jam Setiap Hari (3 Shift)",
    room: "Unit Gawat Darurat (UGD)",
    initial: "UGD"
  },
  {
    id: 7,
    name: "Nurul Aini, S.Gz, RD",
    specialty: "Gizi",
    title: "Nutrisionis & Konselor Diet Medis",
    days: ["Senin", "Kamis", "Jumat"],
    hours: "09.00 - 15.00 WITA",
    room: "Ruang Konsultasi Gizi",
    initial: "NA"
  },
  {
    id: 8,
    name: "Dian Permata, M.Psi., Psikolog",
    specialty: "Psikolog",
    title: "Psikolog Klinis Dewasa & Anak",
    days: ["Rabu", "Sabtu"],
    hours: "13.00 - 17.00 WITA",
    room: "Ruang Konseling & Terapi",
    initial: "DP"
  }
];

// 2. AUDIENCE SWITCHER (B2C VS B2B)
function switchAudience(type) {
  const btnB2C = document.getElementById('btnTabB2C');
  const btnB2B = document.getElementById('btnTabB2B');
  const heroBadge = document.getElementById('heroBadge');
  const heroTitle = document.getElementById('heroTitle');
  const heroSubtitle = document.getElementById('heroSubtitle');
  const heroKeyPoints = document.getElementById('heroKeyPoints');

  if (type === 'b2b') {
    btnB2C.classList.remove('active');
    btnB2B.classList.add('active');

    heroBadge.innerHTML = '<span class="badge-dot"></span> Mitra Resmi Occupational Health Migas & Tambang Kaltim';
    heroTitle.innerHTML = 'Solusi Kesehatan Kerja (K3) & Medical Check Up Korporat';
    heroSubtitle.innerHTML = 'Mendukung produktivitas dan kepatuhan K3 perusahaan Anda dengan sertifikasi Fit-to-Work, MCU Onsite/Mobile Unit, dan tim medis siaga di Balikpapan.';

    heroKeyPoints.innerHTML = `
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>Paket Fit-to-Work Standar Migas & Offshore (Spirometri, Audiometri, EKG)</span>
      </div>
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>Mobile Medical Unit & Onsite Paramedic Placement</span>
      </div>
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>Layanan MCU Massal & Portal Unduh Hasil Digital Terintegrasi</span>
      </div>
    `;

    document.getElementById('qbService').value = "MCU Korporat / Kemitraan Perusahaan";
  } else {
    btnB2B.classList.remove('active');
    btnB2C.classList.add('active');

    heroBadge.innerHTML = '<span class="badge-dot"></span> Fasilitas Kesehatan Utama Terakreditasi di Balikpapan';
    heroTitle.innerHTML = 'Layanan Medis Komprehensif & Terpercaya di Balikpapan';
    heroSubtitle.innerHTML = 'Bukan sekadar klinik biasa. Klinik Utama Mirabell menyediakan penanganan UGD 24 Jam sigap, Poliklinik Dokter Spesialis terpadu, Laboratorium & Radiologi canggih, serta Rawat Inap nyaman untuk seluruh keluarga Anda.';

    heroKeyPoints.innerHTML = `
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>UGD, Laboratorium & Apotek 24 Jam Siaga</span>
      </div>
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>12+ Dokter Spesialis (Jantung, Kandungan, THT, Gigi, Saraf, Gizi)</span>
      </div>
      <div class="key-point-item">
        <span class="check-icon">✓</span>
        <span>Rekanan Resmi Asuransi & TPA Terkemuka</span>
      </div>
    `;

    document.getElementById('qbService').value = "Konsultasi Dokter Spesialis";
  }
}

// 3. RENDER & FILTER JADWAL DOKTER
function renderDoctors(doctors) {
  const container = document.getElementById('doctorCardsList');
  if (!container) return;

  if (doctors.length === 0) {
    container.innerHTML = `
      <div style="grid-column: 1/-1; text-align: center; padding: 40px; background: #F8FAFC; border-radius: 12px; color: #64748B;">
        <p style="font-size: 16px; font-weight: 600;">Tidak ditemukan jadwal dokter untuk filter yang dipilih.</p>
        <p style="font-size: 13.5px; margin-top: 6px;">Silakan pilih hari lain atau hubungi layanan WhatsApp untuk konfirmasi jadwal dokter tamu.</p>
        <button class="btn btn-outline" style="margin-top: 14px;" onclick="resetDoctorFilter()">Lihat Semua Dokter</button>
      </div>
    `;
    return;
  }

  container.innerHTML = doctors.map(doc => `
    <div class="doctor-card">
      <div class="doctor-avatar-wrap">${doc.initial}</div>
      <span class="doctor-specialty-badge">${doc.title}</span>
      <h4>${doc.name}</h4>
      
      <div class="doctor-schedule-box">
        <div class="schedule-row">
          <span>Hari Praktik:</span>
          <strong>${doc.days.join(', ')}</strong>
        </div>
        <div class="schedule-row">
          <span>Jam:</span>
          <strong>${doc.hours}</strong>
        </div>
        <div class="schedule-row">
          <span>Ruang:</span>
          <strong>${doc.room}</strong>
        </div>
      </div>

      <button class="btn btn-primary btn-block" onclick="bookDoctor('${doc.name}', '${doc.title}')">
        Reservasi Jadwal Ini
      </button>
    </div>
  `).join('');
}

function applyDoctorFilter() {
  const specialtyVal = document.getElementById('filterSpecialty').value;
  const dayVal = document.getElementById('filterDay').value;

  const filtered = DOCTORS_DATA.filter(doc => {
    const matchSpecialty = (specialtyVal === 'ALL') || (doc.specialty === specialtyVal);
    const matchDay = (dayVal === 'ALL') || (doc.days.includes(dayVal));
    return matchSpecialty && matchDay;
  });

  renderDoctors(filtered);
}

function resetDoctorFilter() {
  document.getElementById('filterSpecialty').value = 'ALL';
  document.getElementById('filterDay').value = 'ALL';
  renderDoctors(DOCTORS_DATA);
}

// 4. MODAL BOOKING DIALOG
function openBookingModal(defaultService = 'Konsultasi Dokter Spesialis') {
  const modal = document.getElementById('bookingModal');
  const serviceSelect = document.getElementById('mbService');
  const dateInput = document.getElementById('mbDate');

  if (serviceSelect) {
    serviceSelect.value = defaultService;
  }

  // Set default date to today
  if (dateInput && !dateInput.value) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.value = today;
  }

  modal.classList.add('open');
}

function closeBookingModal() {
  const modal = document.getElementById('bookingModal');
  modal.classList.remove('open');
}

function bookDoctor(doctorName, doctorTitle) {
  openBookingModal('Konsultasi Dokter Spesialis');
  document.getElementById('mbNotes').value = `Tujuan Dokter: ${doctorName} (${doctorTitle})`;
}

// 5. SUBMISSION KE WHATSAPP 1-PINTU (TANPA DROP-OFF)
function handleQuickBooking(e) {
  e.preventDefault();
  const name = document.getElementById('qbName').value.trim();
  const service = document.getElementById('qbService').value;
  const date = document.getElementById('qbDate').value;
  const phone = document.getElementById('qbPhone').value.trim();

  const message = `Halo Klinik Utama Mirabell Balikpapan,%0A%0ASaya ingin melakukan pendaftaran / reservasi:%0A- Nama: ${encodeURIComponent(name)}%0A- No. HP/WA: ${encodeURIComponent(phone)}%0A- Layanan: ${encodeURIComponent(service)}%0A- Rencana Tanggal: ${encodeURIComponent(date)}%0A%0AMohon konfirmasi jadwal dan ketersediaan kuota. Terima kasih!`;

  const waUrl = `https://api.whatsapp.com/send?phone=628115067711&text=${message}`;
  window.open(waUrl, '_blank');
}

function handleModalSubmit(e) {
  e.preventDefault();
  const name = document.getElementById('mbName').value.trim();
  const phone = document.getElementById('mbPhone').value.trim();
  const service = document.getElementById('mbService').value;
  const date = document.getElementById('mbDate').value;
  const notes = document.getElementById('mbNotes').value.trim();

  const message = `Halo Petugas Medis Klinik Utama Mirabell,%0A%0ASaya mendaftar via Website Satu Pintu:%0A- Nama: ${encodeURIComponent(name)}%0A- No. HP/WA: ${encodeURIComponent(phone)}%0A- Layanan: ${encodeURIComponent(service)}%0A- Tanggal: ${encodeURIComponent(date)}${notes ? `%0A- Catatan/Dokter: ${encodeURIComponent(notes)}` : ''}%0A%0AMohon info antrean dan jadwal praktiknya.`;

  const waUrl = `https://api.whatsapp.com/send?phone=628115067711&text=${message}`;
  window.open(waUrl, '_blank');
  closeBookingModal();
}

// 6. INITIALIZATION
document.addEventListener('DOMContentLoaded', () => {
  renderDoctors(DOCTORS_DATA);

  // Set default date for quick booking form
  const qbDate = document.getElementById('qbDate');
  if (qbDate) {
    const today = new Date().toISOString().split('T')[0];
    qbDate.value = today;
  }

  // Close modal on click outside
  window.addEventListener('click', (e) => {
    const modal = document.getElementById('bookingModal');
    if (e.target === modal) {
      closeBookingModal();
    }
  });
});
