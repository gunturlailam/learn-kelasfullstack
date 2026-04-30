# Mengenal Algoritma Rekursif

Rekursif adalah sebuah teknik di mana suatu fungsi memanggil dirinya sendiri untuk menyelesaikan masalah dengan memecahnya menjadi sub-masalah yang lebih kecil.

### 🧩 Komponen Utama Rekursif
Setiap fungsi rekursif wajib memiliki dua bagian utama agar tidak terjadi perulangan tanpa henti:
1. **Base Case (Kondisi Berhenti):** Kondisi di mana fungsi berhenti memanggil dirinya sendiri.
2. **Recurrence Relation (Langkah Rekursif):** Bagian di mana fungsi memanggil dirinya sendiri dengan input yang lebih sederhana.

### 📝 Contoh Klasik: Faktorial
Faktorial $n!$ dapat didefinisikan sebagai $n \times (n-1)!$.
* **Base Case:** Jika $n = 0$ atau $n = 1$, hasilnya adalah 1.
* **Rekursif:** $f(n) = n * f(n-1)$.

### ⚠️ Hal yang Perlu Diperhatikan
* **Stack Overflow:** Terjadi jika rekursi terlalu dalam atau lupa membuat *Base Case*, sehingga memori penuh.
* **Memori:** Rekursif biasanya memakan lebih banyak memori dibandingkan perulangan biasa (*looping*) karena setiap panggilan fungsi disimpan dalam stack.

---
*Catatan Belajar - Materi 5 - Algoritma Rekursif*