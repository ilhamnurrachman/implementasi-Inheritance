class Pegawai:
    def _init_(self, nama, id_pegawai):
        self.nama = nama
        self.id_pegawai = id_pegawai

    def tampilkan_informasi(self):
        print(f"Nama: {self.nama}")
        print(f"ID Pegawai: {self.id_pegawai}")

class PegawaiTetap(Pegawai):
    def _init_(self, nama, id_pegawai, gaji_bulanan):
        super()._init_(nama, id_pegawai)
        self.gaji_bulanan = gaji_bulanan

    def tampilkan_informasi(self):
        super().tampilkan_informasi()
        print(f"Gaji Bulanan: {self.gaji_bulanan}")

class PegawaiHarian(Pegawai):
    def _init_(self, nama, id_pegawai, tarif_per_jam, jumlah_jam_kerja):
        super()._init_(nama, id_pegawai)
        self.tarif_per_jam = tarif_per_jam
        self.jumlah_jam_kerja = jumlah_jam_kerja

    def tampilkan_informasi(self):
        super().tampilkan_informasi()
        print(f"Tarif per Jam: {self.tarif_per_jam}")
        print(f"Jumlah Jam Kerja: {self.jumlah_jam_kerja}")

class PegawaiKontrak(Pegawai):
    def _init_(self, nama, id_pegawai, durasi_kontrak, gaji_total):
        super()._init_(nama, id_pegawai)
        self.durasi_kontrak = durasi_kontrak
        self.gaji_total = gaji_total

    def tampilkan_informasi(self):
        super().tampilkan_informasi()
        print(f"Durasi Kontrak: {self.durasi_kontrak}")
        print(f"Gaji Total: {self.gaji_total}")

# Contoh penggunaan kelas-kelas di atas
pegawai_tetap = PegawaiTetap("John", "EMP001", 5000)
pegawai_harian = PegawaiHarian("Alice", "EMP002", 20, 40)
pegawai_kontrak = PegawaiKontrak("Bob", "EMP003", "1 tahun", 12000)

print("Informasi Pegawai Tetap:")
pegawai_tetap.tampilkan_informasi()

print("\nInformasi Pegawai Harian:")
pegawai_harian.tampilkan_informasi()

print("\nInformasi Pegawai Kontrak:")
pegawai_kontrak.tampilkan_informasi()
