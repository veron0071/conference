# ICSET 2027 Web Portal & Admin Management System
### The 1st International Conference on Sustainable Economic Transformation
**"Digital Intelligence, Responsible Business and Inclusive Development for a Sustainable Future"**

Website resmi & sistem manajemen konferensi internasional yang diselenggarakan oleh **Fakultas Ekonomi dan Bisnis (FEB), Universitas Wahid Hasyim (UNWAHAS)**, Semarang, Indonesia. Dibangun berbasis **Laravel 12**, **Eloquent ORM**, **Blade Template**, dan **Tailwind CSS**.

---

## 🚀 Akses Cepat Website & Admin Panel

### 1. Halaman Publik & Konferensi
- **Homepage Utama**: [http://localhost/icset2027](http://localhost/icset2027) atau [http://icset2027.test](http://icset2027.test)
- **Halaman Registrasi Peserta**: [http://localhost/icset2027/register-participant](http://localhost/icset2027/register-participant)
- **Cek Status Registrasi**: [http://localhost/icset2027/registration/check](http://localhost/icset2027/registration/check)

### 2. Admin Control Panel
- **URL Login Admin**: [http://localhost/icset2027/admin/login](http://localhost/icset2027/admin/login)
- **Default Email**: `admin@icset2027.unwahas.ac.id`
- **Default Password**: `admin12345`

---

## 🌐 Dukungan Multi-Bahasa (5 Bahasa Dunia)
Website mendukung penerjemahan instan ke 5 bahasa dengan tombol pemilih bahasa mengambang (*floating language button*) di pojok kiri bawah:
1. 🇬🇧 **English (`en`)** - Default international scholarly conference standard.
2. 🇮🇩 **Bahasa Indonesia (`id`)** - Terjemahan lengkap seluruh track, jadwal, biaya, dan form.
3. 🇨🇳 **简体中文 (`zh`)** - Standard Chinese academic translation.
4. 🇸🇦 **العربية (`ar`)** - Formal Arabic with dynamic RTL (*Right-to-Left*) layout.
5. 🇯🇵 **日本語 (`ja`)** - Formal Japanese conference terminology (*Keigo*).

---

## 🎛️ Fitur Admin Panel (100% Dinamis)

1. **Dashboard Metrik**: Ringkasan total pendaftar, pembayaran terverifikasi, jumlah pembicara, dan track.
2. **Manajemen Registrasi Peserta (CRUD & Verifikasi)**:
   - Filter pendaftar berdasarkan status (*Pending*, *Verified*, *Rejected*) dan kategori.
   - Pencarian berdasarkan kode registrasi, nama, email, atau instansi.
   - Tinjauan detail peserta, judul artikel/abstrak, dan bukti transfer pembayaran.
   - Verifikasi status pembayaran serta catatan review panitia.
3. **Manajemen Keynote & Invited Speakers**:
   - Tambah pembicara baru (nama, foto, instansi, negara, bendera, fokus topik, status konfirmasi).
   - Edit atau hapus data pembicara.
4. **Manajemen 6 Track & Subtopik**:
   - Tambah/edit track konferensi dan daftar subtopik keilmuan.
5. **Manajemen Timeline & Jadwal Penting**:
   - Tambah/atur ulang tanggal milestone (Call for Papers, Deadline, Review, Pelaksanaan).
6. **Pengaturan Global Konferensi**:
   - Ubah tema utama, tanggal pelaksanaan, lokasi Gedung CBT / FK UNWAHAS, link OJS, rekening bank panitia, dll.

---

## 📝 Alur Registrasi Peserta (Author / Attendee)

1. Peserta membuka halaman [Registrasi](http://localhost/icset2027/register-participant).
2. Mengisi formulir:
   - Data diri & gelar akademik, email, WhatsApp, universitas/instansi, dan negara.
   - Pilihan kategori tiket (Presenter Lokal, Presenter Internasional, Mahasiswa, atau Non-Presenter).
   - Mode kehadiran (*Onsite* di Gedung CBT UNWAHAS atau *Online Hybrid*).
   - Pemilihan Track & input judul artikel serta abstrak (bagi Presenter).
   - Unggah bukti pembayaran (opsional pada saat pendaftaran).
3. Sistem secara otomatis menerbitkan **Kode Registrasi Unik** (misal: `ICSET27-00226`).
4. Halaman bukti pendaftaran dapat langsung dicetak (*Print Confirmation*) dan statusnya dapat dipantau di halaman [Cek Status](http://localhost/icset2027/registration/check).

---

## 🛠️ Instalasi & Perintah Berguna

```powershell
# Masuk ke direktori
cd C:\laragon\www\icset2027

# Salin berkas environment
copy .env.example .env

# Install dependensi composer
composer install

# Generate application key
php artisan key:generate

# Migrasi dan seed database awal
php artisan migrate --seed

# Build aset frontend produksi
npm install
npm run build

# Menjalankan server lokal (jika tidak menggunakan Apache Laragon)
php artisan serve
```
