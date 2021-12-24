<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $str_random_nip = Str::random(18);
        // \App\Models\User::factory(10)->create();
        DB::table('pegawais')->insert([
            'nip' => $str_random_nip,
            'slug' => md5($str_random_nip),
            'nama' => Str::random(20),
            'email' => Str::random(10).'@gmail.com',
            'jabatan' => Str::random(20),
            'nip_atasan' => Str::random(18),
            'unit_organisasi' => 'BPS PROVINSI JAWA BARAT',
            'nomor_telepon' => '081293485938',
        ]);

        $str_random_jenis = array(
            'Laptop',
            'Tablet',
            'PC',
            'Printer'
        );

        $jenisbarang = $str_random_jenis[array_rand($str_random_jenis)];

        $str_random_tahun = array(
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
            '2015',
            '2016',
            '2017',
            '2018',
            '2019',
            '2020'
        );

        $tahun = $str_random_tahun[array_rand($str_random_tahun)];

        DB::table('databmns')->insert([
            'nomorbmn' => Str::random(20),
            'jenisbarang' => $jenisbarang,
            'merk' => Str::random(20),
            'tipe' => Str::random(18),
            'tahun_perolehan' => $tahun,
            'harga_perolehan' => '20.000.000',
        ]);

        $tanggal_pinjam = Carbon::today()->subDays(rand(0, 365));
        $tanggal_kembali = Carbon::today()->subDays(rand(0, 365));

        DB::table('pinjamits')->insert([
            'nip_peminjam' => Str::random(20),
            'id_barang' => Str::random(20),
            'tanggal_pinjam' => $tanggal_pinjam,
            'tanggal_kembali' => $tanggal_kembali,
            'nip_petugas' => Str::random(20),
            'status_peminjaman' => 'belum dikembalikan',
        ]);
    }
}
