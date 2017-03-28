<?php

use App\PolaBatik;
use Illuminate\Database\Seeder;

class PolaBatikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('pola_batik')->insert([
        //     array('gambar_pola_batik' => 'CPK001-Arum Dalu.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK003-Blibar11.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK003-Blibar12.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK003-Blibar13.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK003-Blibar14.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK004-Blibar21.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK004-Blibar22.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK004-Blibar23.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK004-Blibar24.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK005-Budi Luhur1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK005-Budi Luhur2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK006-Ceplok Abimanyu1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK006-Ceplok Abimanyu2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK006-Ceplok Abimanyu3.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK007-Ceplok Ambar Sekar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK008-Ceplok Gambir Anom.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK009-Ceplok Gusti Putri1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK011-Ceplok Jelanggrong.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK013-Ceplok Keci1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK013-Ceplok Keci2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK014-Ceplok Kembang Tebu1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK014-Ceplok Kembang Tebu2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK015-Ceplok Kembang Waru1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK015-Ceplok Kembang Waru2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK016-Ceplok Kenongo1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK016-Ceplok Kenongo2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK016-Ceplok Kenongo3.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK018-Ceplok Lenggang Kangkung.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK019-Ceplok Mawar Sari.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK020-Ceplok Mulyo1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK020-Ceplok Mulyo2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK023-Ceplok Pamugari 11.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK023-Ceplok Pamugari 12.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK024-Ceplok Pamugari 21.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK024-Ceplok Pamugari 22.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK025-Ceplok Prana Jiwa1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK025-Ceplok Prana Jiwa2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK026-Sekar Bangah1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK026-Sekar Bangah2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK027-Ceplok Sekar Sidoguri.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK028-Ceplok Sirap.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK029-Ceplok Tanjungsari1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK029-Ceplok Tanjungsari2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK031-Ceplok Wahyuningrat1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK031-Ceplok Wahyuningrat2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK033-Gambiro Wati1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK033-Gambiro Wati2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK035-Gendala Giri1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK035-Gendala Giri2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK036-Glagah Kurung.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK037-Grompol I1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK037-Grompol I2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK038-Grompol II1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK038-Grompol II2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK040-Kartiko Wati1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK040-Kartiko Wati2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK041-Kembang Kapas1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK041-Kembang Kapas2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK041-Kembang Kapas3.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK042-Kembang Pala1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK042-Kembang Pala2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK043-Kembang Tanjung1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK043-Kembang Tanjung2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK044-Kenanga Sari1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK044-Kenanga Sari2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK045-Kerton Bekingking.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK046-Kerton Pari Anom.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK048-Konang Sakebon1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK048-Konang Sakebon2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK049-Kotak Banci Kasut.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK050-Kotak Jamblang.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK051-Kotak Peksi Kurung1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK051-Kotak Peksi Kurung2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK052-Kupu Anom.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK053-Lara Sedowo1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK053-Lara Sedowo2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK054-Limaran1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK054-Limaran2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK055-Melati Rinonce I1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK055-Melati Rinonce I2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK061-Sawo Bludru1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK061-Sawo Bludru2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK063-Sekar Kopi1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK063-Sekar Kopi2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK064-Sekar Sembojo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK065-Sekar Sidoguri1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK065-Sekar Sidoguri2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK066-Sekar Tanjung.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK067-Sekar Turi1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK067-Sekar Turi2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK072-Sido Mulyo II1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK072-Sido Mulyo II2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK074-Sumber Lintang1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK074-Sumber Lintang2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK074-Sumber Lintang3.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'CPK079-Triloka.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG001-Ceplok Kawung Grinsing.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG002-Kawung Beton.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG004-Kawung Brendhi.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG005-Kawung Cacah Gori.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG006-Kawung Galar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG007-Kawung Gamblok.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG009-Kawung Kepyar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG011-Kawung Ndil.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG012-Kawung Picis.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG013-Kawung Plentong.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG014-Kawung Putri.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG017-Kawung Sen.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG018-Kawung Ukel.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG019-Kawung Uter.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG021-Kawung Manila.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG022-Sawo Pecah.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'KWG023-Sawo Tanjungsari.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG001-Lereng Dana Tirta.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG002-Lereng Abiyoso.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG003-Lereng Bangun Ningrat1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG003-Lereng Bangun Ningrat.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG004-Lereng Blambangan.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG005-Lereng Cagak Talang.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG006-Lereng Candi Puro.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG007-Lereng Golang galing.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG008-Lereng Kembang Bayem.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG009-Lereng Modang.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG010-Lereng Paripurno.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG011-Lereng Prana Jiwo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG012-Rujak Senthe I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG013-Lereng Rujak Senthe II-1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG013-Lereng Rujak Senthe II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG014-Lereng Rujak Tales.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG015-Lereng Tatagati.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG016-Lereng Tritis.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG017-Lereng Udan Riris.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG018-Lereng Uceng Udik.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG019-Lereng Sukoreno.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'LRG020-Lereng Weningsari.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK001-Nitik Ceplok Liring.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK002-Nitik Dara Gelar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK003-Nitik Grompol.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK004-Nitik Kartika.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK005-Nitik Kapulogo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK006-Nitik Nagasari.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK007-Nitik Nujuprana.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK008-Nitik Pandanwangi.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK009-Nitik Rumpuk.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK010-Nitik Sekar Andala.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK011-Nitik Sekar Anggrek.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK012-Nitik Sekar Bangah.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK013-Nitik Sekar Blimbing.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK014-Nitik Sekar Cendul.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK015-Nitik Sekar Cengkeh I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK016-Nitik Sekar Cengkeh II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK017-Nitik Sekar Delimo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK018-Nitik Sekar Giwang.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK019-Nitik Sekar Jagung.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK020-Nitik Sekar Jali.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK021-Nitik Sekar Jambe.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK022-Nitik Sekar Jambet.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK023-Nitik Sekar Kenongo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK024-Nitik Sekar Kentang.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK025-Nitik Sekar Kepel.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK026-Nitik Sekar Manggar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK027-Nitik Sekar Melati.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK028-Nitik Sekar Menur.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK029-Nitik Sekar Pala I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK030-Nitik Sekar Pala II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK031-Nitik Sekar Polong.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK032-Nitik Sekar Randu I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK033-Nitik Sekar Randu II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK034-Nitik Sekar Randu III.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK035-Nitik Sekar Sawo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK036-Nitik Sekar Sedah.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK037-Nitik Sekar Tebu.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK038-Nitik Sekar Teleng I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK039-Nitik Sekar Teleng II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK040-Nitik Tanjung Gunung I.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK041-Nitik Tanjung Gunung II.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'NTK042-Nitik Tanjung Gunung III.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG007-Parang Curiga.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG008-Parang Curiga Nata.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG010-Parang Gendewa.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG013-Parang Harjono.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG015-Parang Joyopuro.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG016-Parang Karno.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG019-Parang Komojoyo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG020-Parang Kondur Baris.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG022-Parang Kumudaningrat.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG023-Parang Kusumo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG024-Parang Kusumo Besar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG025-Parang Laras Madyo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG026-Parang Larasati.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG028-Parang Muncar 1.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG029-Parang Muncar 2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG030-Parang Muninggar.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG031-Parang Nengkulo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG032-Parang Ningsih.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG033-Parang Pandan Sari.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG035-Parang Parikesit Putri.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG036-Parang Poncowati.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG038-Parang Rusak Barong.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG039-Parang Samba.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG042-Parang Sawut 2.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG043-Parang Sawut Seling.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG044-Parang Semiaji.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG045-Parang Seno.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG046-Parang Seto.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG050-Parang Sidoreno.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG052-Parang Sisik.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG053-Parang Srimpi.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG054-Parang Sukawati.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG055-Parang Sumbo.png', 'matriks_pola_batik' => ''),
        //     array('gambar_pola_batik' => 'PRG056-Parang Tarupulo.png', 'matriks_pola_batik' => '')
        // ]);

        $this->create_pola_batik_model('CPK001-Arum Dalu.png', '');
        $this->create_pola_batik_model('CPK003-Blibar11.png', '');
        $this->create_pola_batik_model('CPK003-Blibar12.png', '');
        $this->create_pola_batik_model('CPK003-Blibar13.png', '');
        $this->create_pola_batik_model('CPK003-Blibar14.png', '');
        $this->create_pola_batik_model('CPK004-Blibar21.png', '');
        $this->create_pola_batik_model('CPK004-Blibar22.png', '');
        $this->create_pola_batik_model('CPK004-Blibar23.png', '');
        $this->create_pola_batik_model('CPK004-Blibar24.png', '');
        $this->create_pola_batik_model('CPK005-Budi Luhur1.png', '');
        $this->create_pola_batik_model('CPK005-Budi Luhur2.png', '');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu1.png', '');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu2.png', '');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu3.png', '');
        $this->create_pola_batik_model('CPK007-Ceplok Ambar Sekar.png', '');
        $this->create_pola_batik_model('CPK008-Ceplok Gambir Anom.png', '');
        $this->create_pola_batik_model('CPK009-Ceplok Gusti Putri1.png', '');
        $this->create_pola_batik_model('CPK011-Ceplok Jelanggrong.png', '');
        $this->create_pola_batik_model('CPK013-Ceplok Keci1.png', '');
        $this->create_pola_batik_model('CPK013-Ceplok Keci2.png', '');
        $this->create_pola_batik_model('CPK014-Ceplok Kembang Tebu1.png', '');
        $this->create_pola_batik_model('CPK014-Ceplok Kembang Tebu2.png', '');
        $this->create_pola_batik_model('CPK015-Ceplok Kembang Waru1.png', '');
        $this->create_pola_batik_model('CPK015-Ceplok Kembang Waru2.png', '');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo1.png', '');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo2.png', '');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo3.png', '');
        $this->create_pola_batik_model('CPK018-Ceplok Lenggang Kangkung.png', '');
        $this->create_pola_batik_model('CPK019-Ceplok Mawar Sari.png', '');
        $this->create_pola_batik_model('CPK020-Ceplok Mulyo1.png', '');
        $this->create_pola_batik_model('CPK020-Ceplok Mulyo2.png', '');
        $this->create_pola_batik_model('CPK023-Ceplok Pamugari 11.png', '');
        $this->create_pola_batik_model('CPK023-Ceplok Pamugari 12.png', '');
        $this->create_pola_batik_model('CPK024-Ceplok Pamugari 21.png', '');
        $this->create_pola_batik_model('CPK024-Ceplok Pamugari 22.png', '');
        $this->create_pola_batik_model('CPK025-Ceplok Prana Jiwa1.png', '');
        $this->create_pola_batik_model('CPK025-Ceplok Prana Jiwa2.png', '');
        $this->create_pola_batik_model('CPK026-Sekar Bangah1.png', '');
        $this->create_pola_batik_model('CPK026-Sekar Bangah2.png', '');
        $this->create_pola_batik_model('CPK027-Ceplok Sekar Sidoguri.png', '');
        $this->create_pola_batik_model('CPK028-Ceplok Sirap.png', '');
        $this->create_pola_batik_model('CPK029-Ceplok Tanjungsari1.png', '');
        $this->create_pola_batik_model('CPK029-Ceplok Tanjungsari2.png', '');
        $this->create_pola_batik_model('CPK031-Ceplok Wahyuningrat1.png', '');
        $this->create_pola_batik_model('CPK031-Ceplok Wahyuningrat2.png', '');
        $this->create_pola_batik_model('CPK033-Gambiro Wati1.png', '');
        $this->create_pola_batik_model('CPK033-Gambiro Wati2.png', '');
        $this->create_pola_batik_model('CPK035-Gendala Giri1.png', '');
        $this->create_pola_batik_model('CPK035-Gendala Giri2.png', '');
        $this->create_pola_batik_model('CPK036-Glagah Kurung.png', '');
        $this->create_pola_batik_model('CPK037-Grompol I1.png', '');
        $this->create_pola_batik_model('CPK037-Grompol I2.png', '');
        $this->create_pola_batik_model('CPK038-Grompol II1.png', '');
        $this->create_pola_batik_model('CPK038-Grompol II2.png', '');
        $this->create_pola_batik_model('CPK040-Kartiko Wati1.png', '');
        $this->create_pola_batik_model('CPK040-Kartiko Wati2.png', '');
        $this->create_pola_batik_model('CPK041-Kembang Kapas1.png', '');
        $this->create_pola_batik_model('CPK041-Kembang Kapas2.png', '');
        $this->create_pola_batik_model('CPK041-Kembang Kapas3.png', '');
        $this->create_pola_batik_model('CPK042-Kembang Pala1.png', '');
        $this->create_pola_batik_model('CPK042-Kembang Pala2.png', '');
        $this->create_pola_batik_model('CPK043-Kembang Tanjung1.png', '');
        $this->create_pola_batik_model('CPK043-Kembang Tanjung2.png', '');
        $this->create_pola_batik_model('CPK044-Kenanga Sari1.png', '');
        $this->create_pola_batik_model('CPK044-Kenanga Sari2.png', '');
        $this->create_pola_batik_model('CPK045-Kerton Bekingking.png', '');
        $this->create_pola_batik_model('CPK046-Kerton Pari Anom.png', '');
        $this->create_pola_batik_model('CPK048-Konang Sakebon1.png', '');
        $this->create_pola_batik_model('CPK048-Konang Sakebon2.png', '');
        $this->create_pola_batik_model('CPK049-Kotak Banci Kasut.png', '');
        $this->create_pola_batik_model('CPK050-Kotak Jamblang.png', '');
        $this->create_pola_batik_model('CPK051-Kotak Peksi Kurung1.png', '');
        $this->create_pola_batik_model('CPK051-Kotak Peksi Kurung2.png', '');
        $this->create_pola_batik_model('CPK052-Kupu Anom.png', '');
        $this->create_pola_batik_model('CPK053-Lara Sedowo1.png', '');
        $this->create_pola_batik_model('CPK053-Lara Sedowo2.png', '');
        $this->create_pola_batik_model('CPK054-Limaran1.png', '');
        $this->create_pola_batik_model('CPK054-Limaran2.png', '');
        $this->create_pola_batik_model('CPK055-Melati Rinonce I1.png', '');
        $this->create_pola_batik_model('CPK055-Melati Rinonce I2.png', '');
        $this->create_pola_batik_model('CPK061-Sawo Bludru1.png', '');
        $this->create_pola_batik_model('CPK061-Sawo Bludru2.png', '');
        $this->create_pola_batik_model('CPK063-Sekar Kopi1.png', '');
        $this->create_pola_batik_model('CPK063-Sekar Kopi2.png', '');
        $this->create_pola_batik_model('CPK064-Sekar Sembojo.png', '');
        $this->create_pola_batik_model('CPK065-Sekar Sidoguri1.png', '');
        $this->create_pola_batik_model('CPK065-Sekar Sidoguri2.png', '');
        $this->create_pola_batik_model('CPK066-Sekar Tanjung.png', '');
        $this->create_pola_batik_model('CPK067-Sekar Turi1.png', '');
        $this->create_pola_batik_model('CPK067-Sekar Turi2.png', '');
        $this->create_pola_batik_model('CPK072-Sido Mulyo II1.png', '');
        $this->create_pola_batik_model('CPK072-Sido Mulyo II2.png', '');
        $this->create_pola_batik_model('CPK074-Sumber Lintang1.png', '');
        $this->create_pola_batik_model('CPK074-Sumber Lintang2.png', '');
        $this->create_pola_batik_model('CPK074-Sumber Lintang3.png', '');
        $this->create_pola_batik_model('CPK079-Triloka.png', '');
        $this->create_pola_batik_model('KWG001-Ceplok Kawung Grinsing.png', '');
        $this->create_pola_batik_model('KWG002-Kawung Beton.png', '');
        $this->create_pola_batik_model('KWG004-Kawung Brendhi.png', '');
        $this->create_pola_batik_model('KWG005-Kawung Cacah Gori.png', '');
        $this->create_pola_batik_model('KWG006-Kawung Galar.png', '');
        $this->create_pola_batik_model('KWG007-Kawung Gamblok.png', '');
        $this->create_pola_batik_model('KWG009-Kawung Kepyar.png', '');
        $this->create_pola_batik_model('KWG011-Kawung Ndil.png', '');
        $this->create_pola_batik_model('KWG012-Kawung Picis.png', '');
        $this->create_pola_batik_model('KWG013-Kawung Plentong.png', '');
        $this->create_pola_batik_model('KWG014-Kawung Putri.png', '');
        $this->create_pola_batik_model('KWG017-Kawung Sen.png', '');
        $this->create_pola_batik_model('KWG018-Kawung Ukel.png', '');
        $this->create_pola_batik_model('KWG019-Kawung Uter.png', '');
        $this->create_pola_batik_model('KWG021-Kawung Manila.png', '');
        $this->create_pola_batik_model('KWG022-Sawo Pecah.png', '');
        $this->create_pola_batik_model('KWG023-Sawo Tanjungsari.png', '');
        $this->create_pola_batik_model('LRG001-Lereng Dana Tirta.png', '');
        $this->create_pola_batik_model('LRG002-Lereng Abiyoso.png', '');
        $this->create_pola_batik_model('LRG003-Lereng Bangun Ningrat1.png', '');
        $this->create_pola_batik_model('LRG003-Lereng Bangun Ningrat.png', '');
        $this->create_pola_batik_model('LRG004-Lereng Blambangan.png', '');
        $this->create_pola_batik_model('LRG005-Lereng Cagak Talang.png', '');
        $this->create_pola_batik_model('LRG006-Lereng Candi Puro.png', '');
        $this->create_pola_batik_model('LRG007-Lereng Golang galing.png', '');
        $this->create_pola_batik_model('LRG008-Lereng Kembang Bayem.png', '');
        $this->create_pola_batik_model('LRG009-Lereng Modang.png', '');
        $this->create_pola_batik_model('LRG010-Lereng Paripurno.png', '');
        $this->create_pola_batik_model('LRG011-Lereng Prana Jiwo.png', '');
        $this->create_pola_batik_model('LRG012-Rujak Senthe I.png', '');
        $this->create_pola_batik_model('LRG013-Lereng Rujak Senthe II-1.png', '');
        $this->create_pola_batik_model('LRG013-Lereng Rujak Senthe II.png', '');
        $this->create_pola_batik_model('LRG014-Lereng Rujak Tales.png', '');
        $this->create_pola_batik_model('LRG015-Lereng Tatagati.png', '');
        $this->create_pola_batik_model('LRG016-Lereng Tritis.png', '');
        $this->create_pola_batik_model('LRG017-Lereng Udan Riris.png', '');
        $this->create_pola_batik_model('LRG018-Lereng Uceng Udik.png', '');
        $this->create_pola_batik_model('LRG019-Lereng Sukoreno.png', '');
        $this->create_pola_batik_model('LRG020-Lereng Weningsari.png', '');
        $this->create_pola_batik_model('NTK001-Nitik Ceplok Liring.png', '');
        $this->create_pola_batik_model('NTK002-Nitik Dara Gelar.png', '');
        $this->create_pola_batik_model('NTK003-Nitik Grompol.png', '');
        $this->create_pola_batik_model('NTK004-Nitik Kartika.png', '');
        $this->create_pola_batik_model('NTK005-Nitik Kapulogo.png', '');
        $this->create_pola_batik_model('NTK006-Nitik Nagasari.png', '');
        $this->create_pola_batik_model('NTK007-Nitik Nujuprana.png', '');
        $this->create_pola_batik_model('NTK008-Nitik Pandanwangi.png', '');
        $this->create_pola_batik_model('NTK009-Nitik Rumpuk.png', '');
        $this->create_pola_batik_model('NTK010-Nitik Sekar Andala.png', '');
        $this->create_pola_batik_model('NTK011-Nitik Sekar Anggrek.png', '');
        $this->create_pola_batik_model('NTK012-Nitik Sekar Bangah.png', '');
        $this->create_pola_batik_model('NTK013-Nitik Sekar Blimbing.png', '');
        $this->create_pola_batik_model('NTK014-Nitik Sekar Cendul.png', '');
        $this->create_pola_batik_model('NTK015-Nitik Sekar Cengkeh I.png', '');
        $this->create_pola_batik_model('NTK016-Nitik Sekar Cengkeh II.png', '');
        $this->create_pola_batik_model('NTK017-Nitik Sekar Delimo.png', '');
        $this->create_pola_batik_model('NTK018-Nitik Sekar Giwang.png', '');
        $this->create_pola_batik_model('NTK019-Nitik Sekar Jagung.png', '');
        $this->create_pola_batik_model('NTK020-Nitik Sekar Jali.png', '');
        $this->create_pola_batik_model('NTK021-Nitik Sekar Jambe.png', '');
        $this->create_pola_batik_model('NTK022-Nitik Sekar Jambet.png', '');
        $this->create_pola_batik_model('NTK023-Nitik Sekar Kenongo.png', '');
        $this->create_pola_batik_model('NTK024-Nitik Sekar Kentang.png', '');
        $this->create_pola_batik_model('NTK025-Nitik Sekar Kepel.png', '');
        $this->create_pola_batik_model('NTK026-Nitik Sekar Manggar.png', '');
        $this->create_pola_batik_model('NTK027-Nitik Sekar Melati.png', '');
        $this->create_pola_batik_model('NTK028-Nitik Sekar Menur.png', '');
        $this->create_pola_batik_model('NTK029-Nitik Sekar Pala I.png', '');
        $this->create_pola_batik_model('NTK030-Nitik Sekar Pala II.png', '');
        $this->create_pola_batik_model('NTK031-Nitik Sekar Polong.png', '');
        $this->create_pola_batik_model('NTK032-Nitik Sekar Randu I.png', '');
        $this->create_pola_batik_model('NTK033-Nitik Sekar Randu II.png', '');
        $this->create_pola_batik_model('NTK034-Nitik Sekar Randu III.png', '');
        $this->create_pola_batik_model('NTK035-Nitik Sekar Sawo.png', '');
        $this->create_pola_batik_model('NTK036-Nitik Sekar Sedah.png', '');
        $this->create_pola_batik_model('NTK037-Nitik Sekar Tebu.png', '');
        $this->create_pola_batik_model('NTK038-Nitik Sekar Teleng I.png', '');
        $this->create_pola_batik_model('NTK039-Nitik Sekar Teleng II.png', '');
        $this->create_pola_batik_model('NTK040-Nitik Tanjung Gunung I.png', '');
        $this->create_pola_batik_model('NTK041-Nitik Tanjung Gunung II.png', '');
        $this->create_pola_batik_model('NTK042-Nitik Tanjung Gunung III.png', '');
        $this->create_pola_batik_model('PRG007-Parang Curiga.png', '');
        $this->create_pola_batik_model('PRG008-Parang Curiga Nata.png', '');
        $this->create_pola_batik_model('PRG010-Parang Gendewa.png', '');
        $this->create_pola_batik_model('PRG013-Parang Harjono.png', '');
        $this->create_pola_batik_model('PRG015-Parang Joyopuro.png', '');
        $this->create_pola_batik_model('PRG016-Parang Karno.png', '');
        $this->create_pola_batik_model('PRG019-Parang Komojoyo.png', '');
        $this->create_pola_batik_model('PRG020-Parang Kondur Baris.png', '');
        $this->create_pola_batik_model('PRG022-Parang Kumudaningrat.png', '');
        $this->create_pola_batik_model('PRG023-Parang Kusumo.png', '');
        $this->create_pola_batik_model('PRG024-Parang Kusumo Besar.png', '');
        $this->create_pola_batik_model('PRG025-Parang Laras Madyo.png', '');
        $this->create_pola_batik_model('PRG026-Parang Larasati.png', '');
        $this->create_pola_batik_model('PRG028-Parang Muncar 1.png', '');
        $this->create_pola_batik_model('PRG029-Parang Muncar 2.png', '');
        $this->create_pola_batik_model('PRG030-Parang Muninggar.png', '');
        $this->create_pola_batik_model('PRG031-Parang Nengkulo.png', '');
        $this->create_pola_batik_model('PRG032-Parang Ningsih.png', '');
        $this->create_pola_batik_model('PRG033-Parang Pandan Sari.png', '');
        $this->create_pola_batik_model('PRG035-Parang Parikesit Putri.png', '');
        $this->create_pola_batik_model('PRG036-Parang Poncowati.png', '');
        $this->create_pola_batik_model('PRG038-Parang Rusak Barong.png', '');
        $this->create_pola_batik_model('PRG039-Parang Samba.png', '');
        $this->create_pola_batik_model('PRG042-Parang Sawut 2.png', '');
        $this->create_pola_batik_model('PRG043-Parang Sawut Seling.png', '');
        $this->create_pola_batik_model('PRG044-Parang Semiaji.png', '');
        $this->create_pola_batik_model('PRG045-Parang Seno.png', '');
        $this->create_pola_batik_model('PRG046-Parang Seto.png', '');
        $this->create_pola_batik_model('PRG050-Parang Sidoreno.png', '');
        $this->create_pola_batik_model('PRG052-Parang Sisik.png', '');
        $this->create_pola_batik_model('PRG053-Parang Srimpi.png', '');
        $this->create_pola_batik_model('PRG054-Parang Sukawati.png', '');
        $this->create_pola_batik_model('PRG055-Parang Sumbo.png', '');
        $this->create_pola_batik_model('PRG056-Parang Tarupulo.png', '');

    }

    public function create_pola_batik_model($gambarpola, $matrikspola) {
        $polabatik = new PolaBatik();

        $polabatik->gambar_pola_batik = $gambarpola;
        $polabatik->matriks_pola_batik = $matrikspola;
        $polabatik->save();
    }
}
