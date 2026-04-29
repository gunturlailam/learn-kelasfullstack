# Mengenal Fungsi

Fungsi adalah blok kode yang dirancang untuk melakukan tugas spesifik dan **mengembalikan suatu nilai** ke pemanggilnya.

### 🔄 Perbedaan Fungsi & Prosedur
* **Prosedur:** Hanya menjalankan sekumpulan instruksi (tugas selesai di dalam).
* **Fungsi:** Menjalankan instruksi dan mengirimkan hasil akhirnya kembali untuk digunakan dalam proses lain.

### 🏗️ Struktur Penulisan Fungsi
1. **Nama Fungsi:** Identifier untuk pemanggilan.
2. **Parameter:** Input yang akan diolah fungsi.
3. **Tipe Data Kembalian:** Menentukan jenis nilai yang dihasilkan (misal: Integer, String).
4. **Return:** Kata kunci untuk mengirimkan hasil keluar dari fungsi.

### 📝 Contoh Pseudocode Fungsi
**FUNCTION** HitungLuas(p, 1: Integer) -> Integer
**ALGORITMA**
RETURN P * 1
**END FUNCTION**

**//Pemanggilan di program utama:**
luas_lapangan <- HitungLuas(10,5)

---
# Mengenal Prosedur

Prosedur adalah kumpulan instruksi yang dikelompokkan menjadi satu blok untuk menyelesaikan tugas tertentu. Prosedur dapat dipanggil berulang kali di dalam program utama tanpa harus menulis ulang kodenya.

### 🏗️ Struktur Penulisan Prosedur
Sebuah prosedur umumnya terdiri dari:
1. **Nama Prosedur:** Identifier untuk memanggil prosedur.
2. **Parameter (Opsional):** Variabel input yang digunakan di dalam prosedur.
3. **Bagian Deklarasi:** Variabel input yang digunakan di dalam prosedur.
4. **Bagian Algoritma:** Langkah-langkah instruksi yang akan dijalankan.

### 💡 Keuntungan Menggunakan Prosedur
* **Modularitas:** Membagi program menjadi modul-modul kecil yang fokus pada satu tugas.
* **Reusability:** Menghindari pengulangan kode yang sama (*Don't Repeat Yourself - DRY).
* **Kemudahan Maintenance:** Jika ada perubahan logika, cukup ubah di satu prosedur saja.

### 📝 Contoh Pseudocode Prosedur
**PROCEDURE** CetakBintang(n: Integer)
**DEKLARASI**
i : integer
**ALGORITMA**
FOR i FROM i TO n DO
Write("*")
ENDFOR
**END PROCEDURE**

---
*Catatan Belajar - Materi 7 - Fungsi*