# Mengenal Pola Perulangan 

Perulangan adalah instruksi untuk menjalankan aktivitas yang sama berkali-kali sampai kondisi tertentu terpenuhi.

### ☕ Analogi: Mengaduk Kopi
Dalam membuat kopi, kita mengaduk berulang kali sampai gula larut. Menuliskan instruksi "aduk kopi" sebanyak 5 atau 10 kali secara manual sangat tidak efisien.

### 🔄 Efisiensi Algoritma
Daripada menulis instruksi yang sama berulang-ulang, kita menggunakan struktur perulangan. Kita hanya perlu menentukan syaratnya, misalnya: "Aduk selama kopi belum larut".

### 📝 Contoh Pseudocode (While-Do)
**DEKLARASI**
I, jumlah_aduk : Integer
**ALGORITMA**
I <- 1
WHILE (I <= jumlah_aduk) DO
Aduk_Kopi()
I <- I + 1
ENDWHILE

### 💡 Komponen Penting
1. **Kondisi:** Syarat agar perulangan terus berjalan  (misal: I <= 10).
2. **Pencegah (Counter):** Variabel untuk menghitung jumlah perulangan agar tidak terjadi *infinite loop*.

---
*Catatan Belajar - Materi 4 - Mengenali Pola Perulangan*