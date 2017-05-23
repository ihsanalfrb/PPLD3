<?php

use App\Batik;
use Illuminate\Database\Seeder;


class BatikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('batik')->delete();
        // DB::table('batik')->insert([
        //     array('nama_batik' => 'Arum Dalu', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Blibar11', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar12', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar13', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar14', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar21', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar22', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar23', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Blibar24', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Budi Luhur1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Budi Luhur2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Abimanyu1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Abimanyu2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Abimanyu3', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Ambar Sekar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Gambir Anom', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Gusti Putri1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Jelanggrong', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Yogyakarta'),
        //     array('nama_batik' => 'Ceplok Keci1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Keci2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kembang Tebu1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kembang Tebu2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kembang Waru1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kembang Waru2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kenongo1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kenongo2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kenongo3', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Lenggang Kangkung', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Mawar Sari', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Mulyo1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Mulyo2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Pamugari 11', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Pamugari 12', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Pamugari 21', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Pamugari 22', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Prana Jiwa1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Prana Jiwa2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Bangah1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Bangah2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Sekar Sidoguri', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Sirap', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Tanjungsari1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Tanjungsari2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Wahyuningrat1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Wahyuningrat2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Gambiro Wati1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Gambiro Wati2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Gendala Giri1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Gendala Giri2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Glagah Kurung', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Grompol I1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Grompol I2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Grompol II1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Grompol II2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kartiko Wati1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kartiko Wati2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Kapas1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Kapas2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Kapas3', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Pala1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Pala2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Tanjung1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kembang Tanjung2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kenanga Sari1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kenanga Sari2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kerton Bekingking', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kerton Pari Anom', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Konang Sakebon1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Konang Sakebon2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kotak Banci Kasut', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kotak Jamblang', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kotak Peksi Kurung1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kotak Peksi Kurung2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kupu Anom', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lara Sedowo1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lara Sedowo2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Limaran1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Limaran2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Melati Rinonce I1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Melati Rinonce I2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sawo Bludru1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sawo Bludru2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Kopi1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Kopi2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Sembojo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Sidoguri1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Sidoguri2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Tanjung', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Turi1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sekar Turi2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sido Mulyo II1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sido Mulyo II2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sumber Lintang1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sumber Lintang2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sumber Lintang3', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Triloka', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Ceplok Kawung Grinsing', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Beton', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Brendhi', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Cacah Gori', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Galar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Gamblok', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Kepyar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Ndil', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Picis', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Plentong', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Putri', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Sen', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Ukel', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Uter', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Kawung Manila', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sawo Pecah', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Sawo Tanjungsari', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Dana Tirta', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Abiyoso', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Bangun Ningrat1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Bangun Ningrat', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Blambangan', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Cagak Talang', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Candi Puro', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Golang galing', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Kembang Bayem', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Modang', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Paripurno', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Prana Jiwo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Rujak Senthe I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Rujak Senthe II-1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Rujak Senthe II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Rujak Tales', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Tatagati', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Tritis', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Udan Riris', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Uceng Udik', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Sukoreno', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Lereng Weningsari', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Ceplok Liring', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Dara Gelar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Grompol', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Kartika', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Kapulogo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Nagasari', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Nujuprana', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Pandanwangi', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Rumpuk', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Andala', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Anggrek', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Bangah', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Blimbing', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Cendul', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Cengkeh I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Cengkeh II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Delimo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Giwang', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Jagung', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Jali', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Jambe', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Jambet', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Kenongo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Kentang', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Kepel', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Manggar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Melati', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Menur', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Pala I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Pala II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Polong', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Randu I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Randu II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Randu III', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Sawo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Sedah', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Tebu', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Teleng I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Sekar Teleng II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Tanjung Gunung I', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Tanjung Gunung II', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Nitik Tanjung Gunung III', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Curiga', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Curiga Nata', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Gendewa', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Harjono', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Joyopuro', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Karno', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Komojoyo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Kondur Baris', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Kumudaningrat', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Kusumo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Kusumo Besar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Laras Madyo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Larasati', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Muncar 1', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Muncar 2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Muninggar', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Nengkulo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Ningsih', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Pandan Sari', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Parikesit Putri', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Poncowati', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Rusak Barong', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Samba', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sawut 2', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sawut Seling', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Semiaji', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Seno', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Seto', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sidoreno', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sisik', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Srimpi', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sukawati', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Sumbo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara'),
        //     array('nama_batik' => 'Parang Tarupulo', 'makna_batik' => '', 'sejarah_batik' => '', 'asal_daerah' => 'Jepara')
        // ]);

       $this->create_batik_model('Arum Dalu', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK001-Arum Dalu.png', '');
       $this->create_batik_model('Blibar11', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK003-Blibar11.png', '');
       $this->create_batik_model('Blibar12', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK003-Blibar12.png', '');
       $this->create_batik_model('Blibar13', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK003-Blibar13.png', '');
       $this->create_batik_model('Blibar14', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK003-Blibar14.png', '');
       $this->create_batik_model('Blibar21', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK004-Blibar21.png', '');
       $this->create_batik_model('Blibar22', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK004-Blibar22.png', '');
       $this->create_batik_model('Blibar23', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK004-Blibar23.png', '');
       $this->create_batik_model('Blibar24', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK004-Blibar24.png', '');
       $this->create_batik_model('Budi Luhur1', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK005-Budi Luhur1.png', '');
       $this->create_batik_model('Budi Luhur2', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK005-Budi Luhur2.png', '');
       $this->create_batik_model('Ceplok Abimanyu1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK006-Ceplok Abimanyu1.png', '');
       $this->create_batik_model('Ceplok Abimanyu2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK006-Ceplok Abimanyu2.png', '');
       $this->create_batik_model('Ceplok Abimanyu3', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK006-Ceplok Abimanyu3.png', '');
       $this->create_batik_model('Ceplok Ambar Sekar', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK007-Ceplok Ambar Sekar.png', '');
       $this->create_batik_model('Ceplok Gambir Anom', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK008-Ceplok Gambir Anom.png', '');
       $this->create_batik_model('Ceplok Gusti Putri1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK009-Ceplok Gusti Putri1.png', '');
       $this->create_batik_model('Ceplok Jelanggrong', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK011-Ceplok Jelanggrong.png', '');
       $this->create_batik_model('Ceplok Keci1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK013-Ceplok Keci1.png', '');
       $this->create_batik_model('Ceplok Keci2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK013-Ceplok Keci2.png', '');
       $this->create_batik_model('Ceplok Kembang Tebu1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK014-Ceplok Kembang Tebu1.png', '');
       $this->create_batik_model('Ceplok Kembang Tebu2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK014-Ceplok Kembang Tebu2.png', '');
       $this->create_batik_model('Ceplok Kembang Waru1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK015-Ceplok Kembang Waru1.png', '');
       $this->create_batik_model('Ceplok Kembang Waru2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK015-Ceplok Kembang Waru2.png', '');
       $this->create_batik_model('Ceplok Kenongo1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK016-Ceplok Kenongo1.png', '');
       $this->create_batik_model('Ceplok Kenongo2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK016-Ceplok Kenongo2.png', '');
       $this->create_batik_model('Ceplok Kenongo3', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK016-Ceplok Kenongo3.png', '');
       $this->create_batik_model('Ceplok Lenggang Kangkung', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK018-Ceplok Lenggang Kangkung.png', '');
       $this->create_batik_model('Ceplok Mawar Sari', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK019-Ceplok Mawar Sari.png', '');
       $this->create_batik_model('Ceplok Mulyo1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK020-Ceplok Mulyo1.png', '');
       $this->create_batik_model('Ceplok Mulyo2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK020-Ceplok Mulyo2.png', '');
       $this->create_batik_model('Ceplok Pamugari 11', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK023-Ceplok Pamugari 11.png', '');
       $this->create_batik_model('Ceplok Pamugari 12', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK023-Ceplok Pamugari 12.png', '');
       $this->create_batik_model('Ceplok Pamugari 21', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK024-Ceplok Pamugari 21.png', '');
       $this->create_batik_model('Ceplok Pamugari 22', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK024-Ceplok Pamugari 22.png', '');
       $this->create_batik_model('Ceplok Prana Jiwa1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK025-Ceplok Prana Jiwa1.png', '');
       $this->create_batik_model('Ceplok Prana Jiwa2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK025-Ceplok Prana Jiwa2.png', '');
       $this->create_batik_model('Sekar Bangah1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK026-Sekar Bangah1.png', '');
       $this->create_batik_model('Sekar Bangah2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK026-Sekar Bangah2.png', '');
       $this->create_batik_model('Ceplok Sekar Sidoguri', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK027-Ceplok Sekar Sidoguri.png', '');
       $this->create_batik_model('Ceplok Sirap', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK028-Ceplok Sirap.png', '');
       $this->create_batik_model('Ceplok Tanjungsari1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK029-Ceplok Tanjungsari1.png', '');
       $this->create_batik_model('Ceplok Tanjungsari2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK029-Ceplok Tanjungsari2.png', '');
       $this->create_batik_model('Ceplok Wahyuningrat1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK031-Ceplok Wahyuningrat1.png', '');
       $this->create_batik_model('Ceplok Wahyuningrat2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK031-Ceplok Wahyuningrat2.png', '');
       $this->create_batik_model('Gambiro Wati1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK033-Gambiro Wati1.png', '');
       $this->create_batik_model('Gambiro Wati2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK033-Gambiro Wati2.png', '');
       $this->create_batik_model('Gendala Giri1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK035-Gendala Giri1.png', '');
       $this->create_batik_model('Gendala Giri2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK035-Gendala Giri2.png', '');
       $this->create_batik_model('Glagah Kurung', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK036-Glagah Kurung.png', '');
       $this->create_batik_model('Grompol I1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK037-Grompol I1.png', '');
       $this->create_batik_model('Grompol I2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK037-Grompol I2.png', '');
       $this->create_batik_model('Grompol II1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK038-Grompol II1.png', '');
       $this->create_batik_model('Grompol II2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK038-Grompol II2.png', '');
       $this->create_batik_model('Kartiko Wati1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK040-Kartiko Wati1.png', '');
       $this->create_batik_model('Kartiko Wati2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK040-Kartiko Wati2.png', '');
       $this->create_batik_model('Kembang Kapas1', 'absde', 'efgh', 'Ceplok', 'Madura', 'CPK041-Kembang Kapas1.png', '');
       $this->create_batik_model('Kembang Kapas2', 'absde', 'efgh', 'Ceplok', 'Madura', 'CPK041-Kembang Kapas2.png', '');
       $this->create_batik_model('Kembang Kapas3', 'absde', 'efgh', 'Ceplok', 'Madura', 'CPK041-Kembang Kapas3.png', '');
       $this->create_batik_model('Kembang Pala1', 'absde', 'efgh', 'Ceplok', 'Cirebon', 'CPK042-Kembang Pala1.png', '');
       $this->create_batik_model('Kembang Pala2', 'absde', 'efgh', 'Ceplok', 'Cirebon', 'CPK042-Kembang Pala2.png', '');
       $this->create_batik_model('Kembang Tanjung1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK043-Kembang Tanjung1.png', '');
       $this->create_batik_model('Kembang Tanjung2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK043-Kembang Tanjung2.png', '');
       $this->create_batik_model('Kenanga Sari1', 'absde', 'efgh', 'Ceplok', 'Surabaya', 'CPK044-Kenanga Sari1.png', '');
       $this->create_batik_model('Kenanga Sari2', 'absde', 'efgh', 'Ceplok', 'Surabaya', 'CPK044-Kenanga Sari2.png', '');
       $this->create_batik_model('Kerton Bekingking', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK045-Kerton Bekingking.png', '');
       $this->create_batik_model('Kerton Pari Anom', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK046-Kerton Pari Anom.png', '');
       $this->create_batik_model('Konang Sakebon1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK048-Konang Sakebon1.png', '');
       $this->create_batik_model('Konang Sakebon2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK048-Konang Sakebon2.png', '');
       $this->create_batik_model('Kotak Banci Kasut', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK049-Kotak Banci Kasut.png', '');
       $this->create_batik_model('Kotak Jamblang', 'absde', 'efgh', 'Ceplok', 'Cirebon', 'CPK050-Kotak Jamblang.png', '');
       $this->create_batik_model('Kotak Peksi Kurung1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK051-Kotak Peksi Kurung1.png', '');
       $this->create_batik_model('Kotak Peksi Kurung2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK051-Kotak Peksi Kurung2.png', '');
       $this->create_batik_model('Kupu Anom', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK052-Kupu Anom.png', '');
       $this->create_batik_model('Lara Sedowo1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK053-Lara Sedowo1.png', '');
       $this->create_batik_model('Lara Sedowo2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK053-Lara Sedowo2.png', '');
       $this->create_batik_model('Limaran1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK054-Limaran1.png', '');
       $this->create_batik_model('Limaran2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK054-Limaran2.png', '');
       $this->create_batik_model('Melati Rinonce I1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK055-Melati Rinonce I1.png', '');
       $this->create_batik_model('Melati Rinonce I2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK055-Melati Rinonce I2.png', '');
       $this->create_batik_model('Sawo Bludru1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK061-Sawo Bludru1.png', '');
       $this->create_batik_model('Sawo Bludru2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK061-Sawo Bludru2.png', '');
       $this->create_batik_model('Sekar Kopi1', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK063-Sekar Kopi1.png', '');
       $this->create_batik_model('Sekar Kopi2', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK063-Sekar Kopi2.png', '');
       $this->create_batik_model('Sekar Sembojo', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK064-Sekar Sembojo.png', '');
       $this->create_batik_model('Sekar Sidoguri1', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK065-Sekar Sidoguri1.png', '');
       $this->create_batik_model('Sekar Sidoguri2', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK065-Sekar Sidoguri2.png', '');
       $this->create_batik_model('Sekar Tanjung', 'absde', 'efgh', 'Ceplok', 'Jepara', 'CPK066-Sekar Tanjung.png', '');
       $this->create_batik_model('Sekar Turi1', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK067-Sekar Turi1.png', '');
       $this->create_batik_model('Sekar Turi2', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK067-Sekar Turi2.png', '');
       $this->create_batik_model('Sido Mulyo II1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK072-Sido Mulyo II1.png', '');
       $this->create_batik_model('Sido Mulyo II2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK072-Sido Mulyo II2.png', '');
       $this->create_batik_model('Sumber Lintang1', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK074-Sumber Lintang1.png', '');
       $this->create_batik_model('Sumber Lintang2', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK074-Sumber Lintang2.png', '');
       $this->create_batik_model('Sumber Lintang3', 'absde', 'efgh', 'Ceplok', 'Solo', 'CPK074-Sumber Lintang3.png', '');
       $this->create_batik_model('Triloka', 'absde', 'efgh', 'Ceplok', 'Yogyakarta', 'CPK079-Triloka.png', '');
       $this->create_batik_model('Ceplok Kawung Grinsing', 'absde', 'efgh', 'Kawung', 'Yogyakarta', 'KWG001-Ceplok Kawung Grinsing.png', '');
       $this->create_batik_model('Kawung Beton', 'absde', 'efgh', 'Kawung', 'Yogyakarta', 'KWG002-Kawung Beton.png', '');
       $this->create_batik_model('Kawung Brendhi', 'absde', 'efgh', 'Kawung', 'Yogyakarta', 'KWG004-Kawung Brendhi.png', '');
       $this->create_batik_model('Kawung Cacah Gori', 'absde', 'efgh', 'Kawung', 'Yogyakarta', 'KWG005-Kawung Cacah Gori.png', '');
       $this->create_batik_model('Kawung Galar', 'absde', 'efgh', 'Kawung', 'Solo', 'KWG006-Kawung Galar.png', '');
       $this->create_batik_model('Kawung Gamblok', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG007-Kawung Gamblok.png', '');
       $this->create_batik_model('Kawung Kepyar', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG009-Kawung Kepyar.png', '');
       $this->create_batik_model('Kawung Ndil', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG011-Kawung Ndil.png', '');
       $this->create_batik_model('Kawung Picis', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG012-Kawung Picis.png', '');
       $this->create_batik_model('Kawung Plentong', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG013-Kawung Plentong.png', '');
       $this->create_batik_model('Kawung Putri', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG014-Kawung Putri.png', '');
       $this->create_batik_model('Kawung Sen', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG017-Kawung Sen.png', '');
       $this->create_batik_model('Kawung Ukel', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG018-Kawung Ukel.png', '');
       $this->create_batik_model('Kawung Uter', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG019-Kawung Uter.png', '');
       $this->create_batik_model('Kawung Manila', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG021-Kawung Manila.png', '');
       $this->create_batik_model('Sawo Pecah', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG022-Sawo Pecah.png', '');
       $this->create_batik_model('Sawo Tanjungsari', 'absde', 'efgh', 'Kawung', 'Jepara', 'KWG023-Sawo Tanjungsari.png', '');
       $this->create_batik_model('Lereng Dana Tirta', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG001-Lereng Dana Tirta.png', '');
       $this->create_batik_model('Lereng Abiyoso', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG002-Lereng Abiyoso.png', '');
       $this->create_batik_model('Lereng Bangun Ningrat1', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG003-Lereng Bangun Ningrat1.png', '');
       $this->create_batik_model('Lereng Bangun Ningrat', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG003-Lereng Bangun Ningrat.png', '');
       $this->create_batik_model('Lereng Blambangan', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG004-Lereng Blambangan.png', '');
       $this->create_batik_model('Lereng Cagak Talang', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG005-Lereng Cagak Talang.png', '');
       $this->create_batik_model('Lereng Candi Puro', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG006-Lereng Candi Puro.png', '');
       $this->create_batik_model('Lereng Golang galing', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG007-Lereng Golang galing.png', '');
       $this->create_batik_model('Lereng Kembang Bayem', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG008-Lereng Kembang Bayem.png', '');
       $this->create_batik_model('Lereng Modang', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG009-Lereng Modang.png', '');
       $this->create_batik_model('Lereng Paripurno', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG010-Lereng Paripurno.png', '');
       $this->create_batik_model('Lereng Prana Jiwo', 'absde', 'efgh', 'Lereng', 'Cirebon', 'LRG011-Lereng Prana Jiwo.png', '');
       $this->create_batik_model('Rujak Senthe I', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG012-Rujak Senthe I.png', '');
       $this->create_batik_model('Lereng Rujak Senthe II-1', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG013-Lereng Rujak Senthe II-1.png', '');
       $this->create_batik_model('Lereng Rujak Senthe II', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG013-Lereng Rujak Senthe II.png', '');
       $this->create_batik_model('Lereng Rujak Tales', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG014-Lereng Rujak Tales.png', '');
       $this->create_batik_model('Lereng Tatagati', 'absde', 'efgh', 'Lereng', 'Jepara', 'LRG015-Lereng Tatagati.png', '');
       $this->create_batik_model('Lereng Tritis', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG016-Lereng Tritis.png', '');
       $this->create_batik_model('Lereng Udan Riris', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG017-Lereng Udan Riris.png', '');
       $this->create_batik_model('Lereng Uceng Udik', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG018-Lereng Uceng Udik.png', '');
       $this->create_batik_model('Lereng Sukoreno', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG019-Lereng Sukoreno.png', '');
       $this->create_batik_model('Lereng Weningsari', 'absde', 'efgh', 'Lereng', 'Yogyakarta', 'LRG020-Lereng Weningsari.png', '');
       $this->create_batik_model('Nitik Ceplok Liring', 'absde', 'efgh', 'Nitik', 'Pekalongan', 'NTK001-Nitik Ceplok Liring.png', '');
       $this->create_batik_model('Nitik Dara Gelar', 'absde', 'efgh', 'Nitik', 'Pekalongan', 'NTK002-Nitik Dara Gelar.png', '');
       $this->create_batik_model('Nitik Grompol', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK003-Nitik Grompol.png', '');
       $this->create_batik_model('Nitik Kartika', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK004-Nitik Kartika.png', '');
       $this->create_batik_model('Nitik Kapulogo', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK005-Nitik Kapulogo.png', '');
       $this->create_batik_model('Nitik Nagasari', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK006-Nitik Nagasari.png', '');
       $this->create_batik_model('Nitik Nujuprana', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK007-Nitik Nujuprana.png', '');
       $this->create_batik_model('Nitik Pandanwangi', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK008-Nitik Pandanwangi.png', '');
       $this->create_batik_model('Nitik Rumpuk', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK009-Nitik Rumpuk.png', '');
       $this->create_batik_model('Nitik Sekar Andala', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK010-Nitik Sekar Andala.png', '');
       $this->create_batik_model('Nitik Sekar Anggrek', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK011-Nitik Sekar Anggrek.png', '');
       $this->create_batik_model('Nitik Sekar Bangah', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK012-Nitik Sekar Bangah.png', '');
       $this->create_batik_model('Nitik Sekar Blimbing', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK013-Nitik Sekar Blimbing.png', '');
       $this->create_batik_model('Nitik Sekar Cendul', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK014-Nitik Sekar Cendul.png', '');
       $this->create_batik_model('Nitik Sekar Cengkeh I', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK015-Nitik Sekar Cengkeh I.png', '');
       $this->create_batik_model('Nitik Sekar Cengkeh II', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK016-Nitik Sekar Cengkeh II.png', '');
       $this->create_batik_model('Nitik Sekar Delimo', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK017-Nitik Sekar Delimo.png', '');
       $this->create_batik_model('Nitik Sekar Giwang', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK018-Nitik Sekar Giwang.png', '');
       $this->create_batik_model('Nitik Sekar Jagung', 'absde', 'efgh', 'Nitik', 'Solo', 'NTK019-Nitik Sekar Jagung.png', '');
       $this->create_batik_model('Nitik Sekar Jali', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK020-Nitik Sekar Jali.png', '');
       $this->create_batik_model('Nitik Sekar Jambe', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK021-Nitik Sekar Jambe.png', '');
       $this->create_batik_model('Nitik Sekar Jambet', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK022-Nitik Sekar Jambet.png', '');
       $this->create_batik_model('Nitik Sekar Kenongo', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK023-Nitik Sekar Kenongo.png', '');
       $this->create_batik_model('Nitik Sekar Kentang', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK024-Nitik Sekar Kentang.png', '');
       $this->create_batik_model('Nitik Sekar Kepel', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK025-Nitik Sekar Kepel.png', '');
       $this->create_batik_model('Nitik Sekar Manggar', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK026-Nitik Sekar Manggar.png', '');
       $this->create_batik_model('Nitik Sekar Melati', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK027-Nitik Sekar Melati.png', '');
       $this->create_batik_model('Nitik Sekar Menur', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK028-Nitik Sekar Menur.png', '');
       $this->create_batik_model('Nitik Sekar Pala I', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK029-Nitik Sekar Pala I.png', '');
       $this->create_batik_model('Nitik Sekar Pala II', 'absde', 'efgh', 'Nitik', 'Jepara', 'NTK030-Nitik Sekar Pala II.png', '');
       $this->create_batik_model('Nitik Sekar Polong', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK031-Nitik Sekar Polong.png', '');
       $this->create_batik_model('Nitik Sekar Randu I', 'absde', 'efgh', 'Nitik', 'Pekalongan', 'NTK032-Nitik Sekar Randu I.png', '');
       $this->create_batik_model('Nitik Sekar Randu II', 'absde', 'efgh', 'Nitik', 'Pekalongan', 'NTK033-Nitik Sekar Randu II.png', '');
       $this->create_batik_model('Nitik Sekar Randu III', 'absde', 'efgh', 'Nitik', 'Pekalongan', 'NTK034-Nitik Sekar Randu III.png', '');
       $this->create_batik_model('Nitik Sekar Sawo', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK035-Nitik Sekar Sawo.png', '');
       $this->create_batik_model('Nitik Sekar Sedah', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK036-Nitik Sekar Sedah.png', '');
       $this->create_batik_model('Nitik Sekar Tebu', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK037-Nitik Sekar Tebu.png', '');
       $this->create_batik_model('Nitik Sekar Teleng I', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK038-Nitik Sekar Teleng I.png', '');
       $this->create_batik_model('Nitik Sekar Teleng II', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK039-Nitik Sekar Teleng II.png', '');
       $this->create_batik_model('Nitik Tanjung Gunung I', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK040-Nitik Tanjung Gunung I.png', '');
       $this->create_batik_model('Nitik Tanjung Gunung II', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK041-Nitik Tanjung Gunung II.png', '');
       $this->create_batik_model('Nitik Tanjung Gunung III', 'absde', 'efgh', 'Nitik', 'Yogyakarta', 'NTK042-Nitik Tanjung Gunung III.png', '');
       $this->create_batik_model('Parang Curiga', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG007-Parang Curiga.png', '');
       $this->create_batik_model('Parang Curiga Nata', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG008-Parang Curiga Nata.png', '');
       $this->create_batik_model('Parang Gendewa', 'absde', 'efgh', 'Parang', 'Jepara', 'PRG010-Parang Gendewa.png', '');
       $this->create_batik_model('Parang Harjono', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG013-Parang Harjono.png', '');
       $this->create_batik_model('Parang Joyopuro', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG015-Parang Joyopuro.png', '');
       $this->create_batik_model('Parang Karno', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG016-Parang Karno.png', '');
       $this->create_batik_model('Parang Komojoyo', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG019-Parang Komojoyo.png', '');
       $this->create_batik_model('Parang Kondur Baris', 'absde', 'efgh', 'Parang', 'Jepara', 'PRG020-Parang Kondur Baris.png', '');
       $this->create_batik_model('Parang Kumudaningrat', 'absde', 'efgh', 'Parang', 'Jepara', 'PRG022-Parang Kumudaningrat.png', '');
       $this->create_batik_model('Parang Kusumo', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG023-Parang Kusumo.png', '');
       $this->create_batik_model('Parang Kusumo Besar', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG024-Parang Kusumo Besar.png', '');
       $this->create_batik_model('Parang Laras Madyo', 'absde', 'efgh', 'Parang', 'Jepara', 'PRG025-Parang Laras Madyo.png', '');
       $this->create_batik_model('Parang Larasati', 'absde', 'efgh', 'Parang', 'Jepara', 'PRG026-Parang Larasati.png', '');
       $this->create_batik_model('Parang Muncar 1', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG028-Parang Muncar 1.png', '');
       $this->create_batik_model('Parang Muncar 2', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG029-Parang Muncar 2.png', '');
       $this->create_batik_model('Parang Muninggar', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG030-Parang Muninggar.png', '');
       $this->create_batik_model('Parang Nengkulo', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG031-Parang Nengkulo.png', '');
       $this->create_batik_model('Parang Ningsih', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG032-Parang Ningsih.png', '');
       $this->create_batik_model('Parang Pandan Sari', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG033-Parang Pandan Sari.png', '');
       $this->create_batik_model('Parang Parikesit Putri', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG035-Parang Parikesit Putri.png', '');
       $this->create_batik_model('Parang Poncowati', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG036-Parang Poncowati.png', '');
       $this->create_batik_model('Parang Rusak Barong', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG038-Parang Rusak Barong.png', '');
       $this->create_batik_model('Parang Samba', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG039-Parang Samba.png', '');
       $this->create_batik_model('Parang Sawut 2', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG042-Parang Sawut 2.png', '');
       $this->create_batik_model('Parang Sawut Seling', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG043-Parang Sawut Seling.png', '');
       $this->create_batik_model('Parang Semiaji', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG044-Parang Semiaji.png', '');
       $this->create_batik_model('Parang Seno', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG045-Parang Seno.png', '');
       $this->create_batik_model('Parang Seto', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG046-Parang Seto.png', '');
       $this->create_batik_model('Parang Sidoreno', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG050-Parang Sidoreno.png', '');
       $this->create_batik_model('Parang Sisik', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG052-Parang Sisik.png', '');
       $this->create_batik_model('Parang Srimpi', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG053-Parang Srimpi.png', '');
       $this->create_batik_model('Parang Sukawati', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG054-Parang Sukawati.png', '');
       $this->create_batik_model('Parang Sumbo', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG055-Parang Sumbo.png', '');
       $this->create_batik_model('Parang Tarupulo', 'absde', 'efgh', 'Parang', 'Yogyakarta', 'PRG056-Parang Tarupulo.png', '');
    }

    public function create_batik_model($namabatik, $maknabatik, $sejarahbatik, $cluster, $asaldaerah, $gambarpola, $matrikspola) {
//        $batik = new Batik();
//
//        $batik->nama_batik = $namabatik;
//        $batik->makna_batik = $maknabatik;
//        $batik->sejarah_batik = $sejarahbatik;
//        $batik->cluster_batik = $cluster;
//        $batik->asal_daerah = $asaldaerah;
//        $batik->gambar_pola_batik = $gambarpola;
//        $batik->matriks_pola_batik = $matrikspola;
//        $batik->save();

        Batik::create([
            'nama_batik' => $namabatik,
            'makna_batik' => 'Batik '.$namabatik.' adalah sebuah batik yang memiliki pola '. $cluster.'.',
            'sejarah_batik' => 'Batik ' .$namabatik .'pertama kali dibuat dan digunakan di wilayah '. $asaldaerah .'.',
            'cluster_batik' => $cluster,
            'asal_daerah' => $asaldaerah,
            'gambar_pola_batik' => $gambarpola,
            'matriks_pola_batik' => $matrikspola,
            'views' => rand(0, 50)
        ]);
    }
}
