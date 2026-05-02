# Mengenal Absolute Path dan Relative Path

Dalam terminal dan pemrograman, ada dua cara untuk menunjukkan lokasi sebuah file atau folder.

### 📍 1. Absolute Path (Jalur Mutlak)
Menunjukkan lokasi file/folder dari akar (root) sistem operasi hingga ke tujuan akhir.
* **Karakteristik:** Selalu dimulai dari root (contoh: \C:` di Windows atau `/` di Linux).`
* **Contoh:** \C:/Users/Guntur/Documents/Projek/KickArena/index.php``
* **Kelebihan:** Lokasi pasti dan tidak akan berubah di mana pun kita berada di terminal.

### 📂 2. Relative Path (Jalur Relatif)
Menunjukkan lokasi file/folder berdasarkan posisi (direktori) kita saat ini.
* **Karakteristik:** Tidak dimulai dari root, tapi menggunakan tanda titik (\.`) atau langsung nama folder.`
* **Simbol Penting:**
* \.` (Satu titik): Berarti direktori saat ini.`
* \..` (Dua titik): Berarti naik satu tingkat ke folder induk.`
* **Contoh:** Jika di folder \Projek`, maka jalurnya cukup: `KickArena/index.php``

### ⚖️ Kapan Menggunakan Keduanya?
* **Absolute Path:** Jarang digunakan dalam kode karena jika folder dipindah ke komputer lain, jalurnya bisa rusak.
* **Relative Path:** Sangat disarankan dalam koding (seperti memanggil gambar di HTML atau CSS) agar proyek tetap fleksibel.

---
*Catatan Belajar - Materi 6 - Absolute vs Relative Path*