# Pengurutan dengan Teknik Insertion Sort

Insertion Sort adalah algoritma pengurutan yang membangun hasil akhir secara bertahap dengan mengambil satu elemen dari data yang belum terurut dan menyisipkannya ke posisi yang benar pada bagian yang sudah terurut.

### ⚙️ Cara Kerja Algoritma
1. **Ambil:** Mulai dari elemen kedua, anggap elemen pertama sudah terurut.
2. **Bandingkan:** Bandingkan elemen tersebut dengan elemen-elemen di sebelah kirinya.
3. **Geser:** Geser elemen yang lebih besar ke kanan untuk membuat ruang.
4. **Sisipkan:** Masukkan elemen tersebut ke posisi yang tepat.

### 📝 Contoh Pseudocode
**PROCEDURE** InsertionSort(input list : Array)
FOR i FROM 1 TO length(list) - 1 DO
key <- list[i]
j <- i - 1
WHILE j >= 0 AND list[j] > key DO
list[j + 1] <- list[j]
j <- j - 1
ENDWHILE
list[j + 1] <- key
ENDFOR
**END PROCEDURE**

### ⚖️ Karakteristik
* **Efisiensi Tinggi:** Sangat cepat jika data hampir terurut.
* **Adaptif:** Bagus untuk data kecil atau data yang masuk secara *real-time* satu per satu.

---
*Catatan Belajar - Materi 3 - Insertion Sort*