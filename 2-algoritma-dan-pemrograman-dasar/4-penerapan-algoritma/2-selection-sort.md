# Pengurutan dengan Teknik Selection Sort

Selection Sort adalah algoritma pengurutan yang bekerja dengan cara nilai terkecil (atau terbesar) dari bagian yang belum terurut dan menukarnya ke posisi yang benar secara bertahap.

### ⚙️ Cara Kerja Algoritma
1. **Cari:** Pindai seluruh data yang belum terurut untuk menemukan nilai minimun.
2. **Tukar:** Pindahkan nilai minimum tersebut ke posisi paling depan dari bagian yang belum terurut.
3. **Geser:** Anggap posisi tersebut sudah terurut, lalu ulangi langkah di atas untuk sisa data berikutnya.

### 📝 Contoh Pseudocode
**PROCEDURE** SelectionSort(input list : Array)
n <- length(list)
FOR i FROM 0 TO n-2 DO
minIndex <- i
FOR j FROM i+1 TO n-1 DO
IF list[j] < list[minIndex] THEN
minIndex <- j
ENDIF
ENDFOR
Swap(list[i], list[minIndex])
ENDFOR
**END PROCEDURE**

### ⚖️ Karakteristik
* **Kelebihan:** Sangat mudah dipahami dan jumlah pertukaran (*swap*) datanya minim.
* **Kekurangan:** Tidak efisien untuk jumlah data yang sangat besar karena harus selalu memindai sisa list di setiap langkah.

---
*Catatan Belajar - Materi 2 - Selection Sort*