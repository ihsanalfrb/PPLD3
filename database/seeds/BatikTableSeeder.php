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

       $this->create_batik_model('Arum Dalu', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Blibar11', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar12', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar13', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar14', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar21', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar22', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar23', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Blibar24', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Budi Luhur1', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Budi Luhur2', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Ceplok Abimanyu1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Abimanyu2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Abimanyu3', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Ambar Sekar', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Gambir Anom', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Gusti Putri1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Jelanggrong', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Keci1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Keci2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kembang Tebu1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kembang Tebu2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kembang Waru1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kembang Waru2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kenongo1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kenongo2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kenongo3', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Lenggang Kangkung', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Mawar Sari', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Mulyo1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Mulyo2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Pamugari 11', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Pamugari 12', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Pamugari 21', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Pamugari 22', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Prana Jiwa1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Prana Jiwa2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Sekar Bangah1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sekar Bangah2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Ceplok Sekar Sidoguri', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Sirap', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Tanjungsari1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Ceplok Tanjungsari2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Ceplok Wahyuningrat1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Ceplok Wahyuningrat2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Gambiro Wati1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Gambiro Wati2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Gendala Giri1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Gendala Giri2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Glagah Kurung', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Grompol I1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Grompol I2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Grompol II1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Grompol II2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kartiko Wati1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kartiko Wati2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kembang Kapas1', 'absde', 'efgh', '', 'Madura');
       $this->create_batik_model('Kembang Kapas2', 'absde', 'efgh', '', 'Madura');
       $this->create_batik_model('Kembang Kapas3', 'absde', 'efgh', '', 'Madura');
       $this->create_batik_model('Kembang Pala1', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Kembang Pala2', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Kembang Tanjung1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kembang Tanjung2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kenanga Sari1', 'absde', 'efgh', '', 'Surabaya');
       $this->create_batik_model('Kenanga Sari2', 'absde', 'efgh', '', 'Surabaya');
       $this->create_batik_model('Kerton Bekingking', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Kerton Pari Anom', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Konang Sakebon1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Konang Sakebon2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Kotak Banci Kasut', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kotak Jamblang', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Kotak Peksi Kurung1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kotak Peksi Kurung2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kupu Anom', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lara Sedowo1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lara Sedowo2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Limaran1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Limaran2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Melati Rinonce I1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Melati Rinonce I2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sawo Bludru1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Sawo Bludru2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Sekar Kopi1', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Kopi2', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Sembojo', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Sidoguri1', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Sidoguri2', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Tanjung', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sekar Turi1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Sekar Turi2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Sido Mulyo II1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sido Mulyo II2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sumber Lintang1', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sumber Lintang2', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Sumber Lintang3', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Triloka', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Ceplok Kawung Gringsing', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kawung Beton', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kawung Brendhi', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kawung Cacah Gori', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Kawung Galar', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Kawung Gamblok', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Kepyar', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Ndil', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Picis', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Plentong', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Putri', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Sen', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Ukel', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Uter', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Kawung Manila', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sawo Pecah', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Sawo Tanjungsari', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Lereng Dana Tirta', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Abiyoso', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Bangun Ningrat1', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Bangun Ningrat', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Blambangan', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Cagak Talang', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Candi Puro', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Golang galing', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Kembang Bayem', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Modang', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Paripurno', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Lereng Prana Jiwo', 'absde', 'efgh', '', 'Cirebon');
       $this->create_batik_model('Rujak Senthe I', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Rujak Senthe II-1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Rujak Senthe II', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Rujak Tales', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Tatagati', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Lereng Tritis', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Udan Riris', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Uceng Udik', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Sukoreno', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Lereng Weningsari', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Ceplok Liring', 'absde', 'efgh', '', 'Pekalongan');
       $this->create_batik_model('Nitik Dara Gelar', 'absde', 'efgh', '', 'Pekalongan');
       $this->create_batik_model('Nitik Grompol', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Kartika', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Kapulogo', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Nagasari', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Nujuprana', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Pandanwangi', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Rumpuk', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Sekar Andala', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Anggrek', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Bangah', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Blimbing', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Cendul', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Cengkeh I', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Cengkeh II', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Delimo', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Giwang', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Jagung', 'absde', 'efgh', '', 'Solo');
       $this->create_batik_model('Nitik Sekar Jali', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Jambe', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Jambet', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Kenongo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Kentang', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Kepel', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Sekar Manggar', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Sekar Melati', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Menur', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Pala I', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Sekar Pala II', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Nitik Sekar Polong', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Randu I', 'absde', 'efgh', '', 'Pekalongan');
       $this->create_batik_model('Nitik Sekar Randu II', 'absde', 'efgh', '', 'Pekalongan');
       $this->create_batik_model('Nitik Sekar Randu III', 'absde', 'efgh', '', 'Pekalongan');
       $this->create_batik_model('Nitik Sekar Sawo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Sedah', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Tebu', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Teleng I', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Sekar Teleng II', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Tanjung Gunung I', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Tanjung Gunung II', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Nitik Tanjung Gunung III', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Curiga', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Curiga Nata', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Gendewa', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Parang Harjono', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Joyopuro', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Karno', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Komojoyo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Kondur Baris', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Parang Kumudaningrat', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Parang Kusumo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Kusumo Besar', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Laras Madyo', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Parang Larasati', 'absde', 'efgh', '', 'Jepara');
       $this->create_batik_model('Parang Muncar 1', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Muncar 2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Muninggar', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Nengkulo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Ningsih', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Pandan Sari', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Parikesit Putri', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Poncowati', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Rusak Barong', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Samba', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sawut 2', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sawut Seling', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Semiaji', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Seno', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Seto', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sidoreno', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sisik', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Srimpi', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sukawati', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Sumbo', 'absde', 'efgh', '', 'Yogyakarta');
       $this->create_batik_model('Parang Tarupulo', 'absde', 'efgh', '', 'Yogyakarta');
    }

    public function create_batik_model($namabatik, $maknabatik, $sejarahbatik, $cluster, $asaldaerah) {
        $batik = new Batik();

        $batik->nama_batik = $namabatik;
        $batik->makna_batik = $maknabatik;
        $batik->sejarah_batik = $sejarahbatik;
        $batik->cluster_batik = $cluster;
        $batik->asal_daerah = $asaldaerah;
        $batik->save();
    }
}
