# web2
ini adalah webapp untuk pemberian bantuan tunai

step by step untuk deploy ke server:
1. Clone git repository atau download as .zip
2. Extract .zip ke folder server (xampp: htdocs)
3. Import fix.sql ke database server.
3.1 Table 'ci_sessions' = database session untuk Code Igniter (jika ingin dirubah mode sessionnya silahkan konfigurasi sendiri)
3.2 Table 'daftar' = database untuk profile penerima bantuan
3.3 Table 'trsckrecord' = database untuk history belanja keseluruhan
3.4 Table 'users' = database untuk username login webApp
4. Sesuaikan konfigurasi CodeIgniter dengan server
4.1 application/config/config.php - $config['base_url'] ; $config['sess_driver'] ; dan lainnya menyesuaikan.
4.2 application/config/database.php - sesuaikan dengan konfigurasi database
5. Buat folder tambahan 'assets/res/nota' - ini base folder menyimpan foto nota
6. Silahkan di tes

Author E-Mail:
wicaksonomm1@gmail.com

P.S: Tolong subject e-mailnya diisi link repo githubnya.
