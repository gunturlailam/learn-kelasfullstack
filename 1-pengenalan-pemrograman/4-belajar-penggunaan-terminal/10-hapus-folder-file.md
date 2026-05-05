# 🗑️ Panduan Lengkap: Menghapus File & Folder (Perintah `rm`)
**Materi**: Terminal & Command Line Interface (CLI) untuk Developer

---

## 1. Filosofi Perintah `rm`
Perintah `rm` (*Remove*) adalah pedang bermata dua bagi seorang developer. 
*   **Kecepatan**: Menghapus ribuan file (seperti folder `node_modules`) jauh lebih cepat daripada menggunakan GUI (klik kanan > delete).
*   **Permanen**: Terminal tidak memiliki konsep "Recycle Bin". Sekali perintah dijalankan, data hilang dari sistem file secara permanen.

---

## 2. Operasi Dasar (File)

### A. Menghapus File Tunggal
Gunakan nama file lengkap beserta ekstensinya.
```bash
rm index.html