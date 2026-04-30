# Mengenal Struktur Data Linked List

Linked List adalah sekumpulan elemen data (node) yang terhubung satu sama lain melalui pointer atau referensi alamat memori.

### 🔗 Komponen Utama Node
Setiap elemen dalam Linked List disebut **Node**, yang terdiri dari dua bagian:
1. **Data:** Nilai atau informasi yang disimpan(Integer, String, dll).
2. **Pointer (Next):** Alamat memori yang menunjuk ke node berikutnya dalam urutan.

### 🚀 Perbedaan dengan Array
* **Alokasi Memori:** Array bersifat statis dan berurutan, sedangkan Linked List bersifat dinamis dan bisa tersebar di memori.
* **Efisiensi:** Linked List sangat efisien untuk operasi penambahan (*insertion*) dan penghapusan (*deletion*) data karena tidak perlu menggeser elemen lain, cukup mengubah arah pointer.
* **Akses Data:** Tidak bisa diakses langsung via index (harus ditelusuri dari elemen pertama atau *Head*).

### 🛠️ Jenis-Jenis Linked List
* **Single Linked List:** Pointer hanya menunjuk ke satu arah (depan).
* **Double Linked List:** Memiliki dua pointer, menunjuk ke node sebelum (*prev*) dan sesudah (*next*).
* **Circular Linked List:** Node terakhir menunjuk kembali ke node pertama.

---
*Catatan Belajar - Materi 2 - Mengenal Linked List*