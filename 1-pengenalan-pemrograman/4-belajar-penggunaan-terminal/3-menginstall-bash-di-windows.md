# Menginstall dan Konfigurasi Bash di Windows

Untuk mendapatkan pengalaman terminal yang lebih powerful di Windows, kita bisa menggunakan Git Bash, yang merupakan bagian dari paket instalasi Git.

### 📥 Langkah-Langkah Instalasi
1. **Download:** Unduh installer Git dari situs resmi [git-scm.com](https://git-scm.com/).
2. **Installation:** Jalankan installer dan pastikan opsi "Git Bash Here" tercentang.
3. **Konfigurasi:** Pilih opsi "Use Git and optional Unix tools from the Command Prompt" jika ingin perintah Unix bisa diakses di CMD biasa.
4. **Verify:** Buka aplikasi "Git Bash" dan ketikkan perintah \bash --version` untuk memastikan instalasi berhasil.`

### ✨ Mengapa Menggunakan Git Bash?
* **Unix Commands:** Memungkinkan penggunaan perintah seperti \ls`, `cd`, `mkdir`, dan `rm` dengan standar Linux.`
* **Integrasi VS Code:** Git Bash dapat dijadikan sebagai default terminal di dalam Visual Studio Code.
* **Ringan:** Tidak membutuhkan resource besar seperti menjalankan Virtual Machine atau WSL (Windows Subsystem for Linux).

### 💡 Tips Konfigurasi di VS Code
Buka Command Palette (**Ctrl+Shift+P**), cari "Terminal: Select Default Profile", lalu pilih **Git Bash**. Sekarang terminal di bawah VS Code kamu sudah menggunakan Bash!

---
*Catatan Belajar - Materi 3 - Menginstall Bash di Windows*