# Struktur Percabangan / Pemilihan

Struktur pemilihan adalah blok instruksi yang diuji untuk menentukan apakah suatu perintah akan dijalankan atau dilewati berdasarkan nilai kebenaran (*True/False*).

### 🛠️ Jenis-jenis Instruksi IF

#### 1. IF Satu Kondisi
Instruksi hanya dijalankan jika kondisi benar. Jika salah, program langsung atau melewati blok tersebut.
* **Contoh:** Cek umur untuk KTP. Jika umur > 17, maka cetak KTP.

#### 2. IF Dua Kondisi (IF-ELSE)
Menyediakan jalur alternatif jika kondisi pertama tidak terpenuhi.
* **Contoh:** Cek kelulusan. Jika nilai > 60 cetak "Lulus", jika tidak cetak "Tidak Lulus".

#### 3. IF Banyak Kondisi (Nested IF / ELSE-IF)
Digunakan untuk menguji banyak kemungkinan secara berurutan sampai ditemukan kondisi yang sesuai.
* **Contoh:** Konversi nilai angka ke huruf (A, B , C, atau D) berdasarkan rentang nilai tertentu.

### 📝 Contoh Pseudocode (Banyak Kondisi)
**IF** (nilai > 80) **THEN**
Cetak("A")
**ELSE IF** (nilai > 70) **THEN**
Cetak("B")
**ELSE**
Cetak("D")
**ENDIF**

---
*Catatan Belajar - Materi 3 - Struktur Percabangan Pemilihan*