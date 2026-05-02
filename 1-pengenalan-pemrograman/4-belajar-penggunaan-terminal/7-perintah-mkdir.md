# Mengelola Folder: Mengenal Perintah mkdir

Perintah **mkdir** digunakan untuk membuat satu atau beberapa folder baru secara instan melalui terminal.

### 📁 1. Membuat Folder Tunggal
Cara paling sederhana adalah dengan mengetikkan nama folder setelah perintah:
* **Sintaks:** \mkdir nama_folder_baru``

### 📂 2. Membuat Banyak Folder Sekaligus
Kita bisa membuat beberapa folder dalam satu baris perintah dengan memberikan spasi di antara nama foldernya:
* **Sintaks:** \mkdir folder1 folder2 folder3``

### 🏗️ 3. Membuat Folder Bersarang (Nested)
Untuk membuat folder di dalam folder yang belum ada, gunakan flag \-p` (parents):`
* **Sintaks:** \mkdir -p proyek/assets/images``
* **Fungsi:** Terminal akan otomatis membuat folder 'proyek', lalu 'assets' di dalamnya, baru kemudian 'images'.

### ⚠️ Catatan Penting
Jika nama folder terdiri dari dua kata atau lebih, gunakan tanda petik (contoh: \mkdir "proyek baru"`) agar terminal tidak menganggapnya sebagai dua folder yang berbeda.`

---
*Catatan Belajar - Materi 7 - Perintah Mkdir*