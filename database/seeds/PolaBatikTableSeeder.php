<?php

use App\Batik;
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

        $this->create_pola_batik_model('CPK001-Arum Dalu.png', '', 'Arum Dalu');
        $this->create_pola_batik_model('CPK003-Blibar11.png', '', 'Blibar11');
        $this->create_pola_batik_model('CPK003-Blibar12.png', '', 'Blibar12');
        $this->create_pola_batik_model('CPK003-Blibar13.png', '', 'Blibar13');
        $this->create_pola_batik_model('CPK003-Blibar14.png', '', 'Blibar14');
        $this->create_pola_batik_model('CPK004-Blibar21.png', '', 'Blibar21');
        $this->create_pola_batik_model('CPK004-Blibar22.png', '', 'Blibar22');
        $this->create_pola_batik_model('CPK004-Blibar23.png', '', 'Blibar23');
        $this->create_pola_batik_model('CPK004-Blibar24.png', '', 'Blibar24');
        $this->create_pola_batik_model('CPK005-Budi Luhur1.png', '', 'Budi Luhur1');
        $this->create_pola_batik_model('CPK005-Budi Luhur2.png', '', 'Budi Luhur2');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu1.png', '', 'Ceplok Abimanyu1');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu2.png', '', 'Ceplok Abimanyu2');
        $this->create_pola_batik_model('CPK006-Ceplok Abimanyu3.png', '', 'Ceplok Abimanyu3');
        $this->create_pola_batik_model('CPK007-Ceplok Ambar Sekar.png', '', 'Ceplok Ambar Sekar');
        $this->create_pola_batik_model('CPK008-Ceplok Gambir Anom.png', '', 'Ceplok Gambir Anom');
        $this->create_pola_batik_model('CPK009-Ceplok Gusti Putri1.png', '', 'Ceplok Gusti Putri1');
        $this->create_pola_batik_model('CPK011-Ceplok Jelanggrong.png', '', 'Ceplok Jelanggrong');
        $this->create_pola_batik_model('CPK013-Ceplok Keci1.png', '', 'Ceplok Keci1');
        $this->create_pola_batik_model('CPK013-Ceplok Keci2.png', '', 'Ceplok Keci2');
        $this->create_pola_batik_model('CPK014-Ceplok Kembang Tebu1.png', '', 'Ceplok Kembang Tebu1');
        $this->create_pola_batik_model('CPK014-Ceplok Kembang Tebu2.png', '', 'Ceplok Kembang Tebu2');
        $this->create_pola_batik_model('CPK015-Ceplok Kembang Waru1.png', '', 'Ceplok Kembang Waru1');
        $this->create_pola_batik_model('CPK015-Ceplok Kembang Waru2.png', '', 'Ceplok Kembang Waru2');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo1.png', '', 'Ceplok Kenongo1');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo2.png', '', 'Ceplok Kenongo2');
        $this->create_pola_batik_model('CPK016-Ceplok Kenongo3.png', '', 'Ceplok Kenongo3');
        $this->create_pola_batik_model('CPK018-Ceplok Lenggang Kangkung.png', '', 'Ceplok Lenggang Kangkung');
        $this->create_pola_batik_model('CPK019-Ceplok Mawar Sari.png', '', 'Ceplok Mawar Sari');
        $this->create_pola_batik_model('CPK020-Ceplok Mulyo1.png', '', 'Ceplok Mulyo1');
        $this->create_pola_batik_model('CPK020-Ceplok Mulyo2.png', '', 'Ceplok Mulyo2');
        $this->create_pola_batik_model('CPK023-Ceplok Pamugari 11.png', '', 'Ceplok Pamugari 11');
        $this->create_pola_batik_model('CPK023-Ceplok Pamugari 12.png', '', 'Ceplok Pamugari 12');
        $this->create_pola_batik_model('CPK024-Ceplok Pamugari 21.png', '', 'Ceplok Pamugari 21');
        $this->create_pola_batik_model('CPK024-Ceplok Pamugari 22.png', '', 'Ceplok Pamugari 22');
        $this->create_pola_batik_model('CPK025-Ceplok Prana Jiwa1.png', '', 'Ceplok Prana Jiwa1');
        $this->create_pola_batik_model('CPK025-Ceplok Prana Jiwa2.png', '', 'Ceplok Prana Jiwa2');
        $this->create_pola_batik_model('CPK026-Sekar Bangah1.png', '', 'Sekar Bangah1');
        $this->create_pola_batik_model('CPK026-Sekar Bangah2.png', '', 'Sekar Bangah2');
        $this->create_pola_batik_model('CPK027-Ceplok Sekar Sidoguri.png', '', 'Ceplok Sekar Sidoguri');
        $this->create_pola_batik_model('CPK028-Ceplok Sirap.png', '', 'Ceplok Sirap');
        $this->create_pola_batik_model('CPK029-Ceplok Tanjungsari1.png', '', 'Ceplok Tanjungsari1');
        $this->create_pola_batik_model('CPK029-Ceplok Tanjungsari2.png', '', 'Ceplok Tanjungsari2');
        $this->create_pola_batik_model('CPK031-Ceplok Wahyuningrat1.png', '', 'Ceplok Wahyuningrat1');
        $this->create_pola_batik_model('CPK031-Ceplok Wahyuningrat2.png', '', 'Ceplok Wahyuningrat2');
        $this->create_pola_batik_model('CPK033-Gambiro Wati1.png', '', 'Gambiro Wati1');
        $this->create_pola_batik_model('CPK033-Gambiro Wati2.png', '', 'Gambiro Wati2');
        $this->create_pola_batik_model('CPK035-Gendala Giri1.png', '', 'Gendala Giri1');
        $this->create_pola_batik_model('CPK035-Gendala Giri2.png', '', 'Gendala Giri2');
        $this->create_pola_batik_model('CPK036-Glagah Kurung.png', '', 'Glagah Kurung');
        $this->create_pola_batik_model('CPK037-Grompol I1.png', '', 'Grompol I1');
        $this->create_pola_batik_model('CPK037-Grompol I2.png', '', 'Grompol I2');
        $this->create_pola_batik_model('CPK038-Grompol II1.png', '', 'Grompol II1');
        $this->create_pola_batik_model('CPK038-Grompol II2.png', '', 'Grompol II2');
        $this->create_pola_batik_model('CPK040-Kartiko Wati1.png', '', 'Kartiko Wati1');
        $this->create_pola_batik_model('CPK040-Kartiko Wati2.png', '', 'Kartiko Wati2');
        $this->create_pola_batik_model('CPK041-Kembang Kapas1.png', '', 'Kembang Kapas1');
        $this->create_pola_batik_model('CPK041-Kembang Kapas2.png', '', 'Kembang Kapas2');
        $this->create_pola_batik_model('CPK041-Kembang Kapas3.png', '', 'Kembang Kapas3');
        $this->create_pola_batik_model('CPK042-Kembang Pala1.png', '', 'Kembang Pala1');
        $this->create_pola_batik_model('CPK042-Kembang Pala2.png', '', 'Kembang Pala2');
        $this->create_pola_batik_model('CPK043-Kembang Tanjung1.png', '', 'Kembang Tanjung1');
        $this->create_pola_batik_model('CPK043-Kembang Tanjung2.png', '', 'Kembang Tanjung2');
        $this->create_pola_batik_model('CPK044-Kenanga Sari1.png', '', 'Kenanga Sari1');
        $this->create_pola_batik_model('CPK044-Kenanga Sari2.png', '', 'Kenanga Sari2');
        $this->create_pola_batik_model('CPK045-Kerton Bekingking.png', '', 'Kerton Bekingking');
        $this->create_pola_batik_model('CPK046-Kerton Pari Anom.png', '', 'Kerton Pari Anom');
        $this->create_pola_batik_model('CPK048-Konang Sakebon1.png', '', 'Konang Sakebon1');
        $this->create_pola_batik_model('CPK048-Konang Sakebon2.png', '', 'Konang Sakebon2');
        $this->create_pola_batik_model('CPK049-Kotak Banci Kasut.png', '', 'Kotak Banci Kasut');
        $this->create_pola_batik_model('CPK050-Kotak Jamblang.png', '', 'Kotak Jamblang');
        $this->create_pola_batik_model('CPK051-Kotak Peksi Kurung1.png', '', 'Kotak Peksi Kurung1');
        $this->create_pola_batik_model('CPK051-Kotak Peksi Kurung2.png', '', 'Kotak Peksi Kurung2');
        $this->create_pola_batik_model('CPK052-Kupu Anom.png', '', 'Kupu Anom');
        $this->create_pola_batik_model('CPK053-Lara Sedowo1.png', '', 'Lara Sedowo1');
        $this->create_pola_batik_model('CPK053-Lara Sedowo2.png', '', 'Lara Sedowo2');
        $this->create_pola_batik_model('CPK054-Limaran1.png', '', 'Limaran1');
        $this->create_pola_batik_model('CPK054-Limaran2.png', '', 'Limaran2');
        $this->create_pola_batik_model('CPK055-Melati Rinonce I1.png', '', 'Melati Rinonce I1');
        $this->create_pola_batik_model('CPK055-Melati Rinonce I2.png', '', 'Melati Rinonce I2');
        $this->create_pola_batik_model('CPK061-Sawo Bludru1.png', '', 'Sawo Bludru1');
        $this->create_pola_batik_model('CPK061-Sawo Bludru2.png', '', 'Sawo Bludru2');
        $this->create_pola_batik_model('CPK063-Sekar Kopi1.png', '', 'Sekar Kopi1');
        $this->create_pola_batik_model('CPK063-Sekar Kopi2.png', '', 'Sekar Kopi2');
        $this->create_pola_batik_model('CPK064-Sekar Sembojo.png', '', 'Sekar Sembojo');
        $this->create_pola_batik_model('CPK065-Sekar Sidoguri1.png', '', 'Sekar Sidoguri1');
        $this->create_pola_batik_model('CPK065-Sekar Sidoguri2.png', '', 'Sekar Sidoguri2');
        $this->create_pola_batik_model('CPK066-Sekar Tanjung.png', '', 'Sekar Tanjung');
        $this->create_pola_batik_model('CPK067-Sekar Turi1.png', '', 'Sekar Turi1');
        $this->create_pola_batik_model('CPK067-Sekar Turi2.png', '', 'Sekar Turi2');
        $this->create_pola_batik_model('CPK072-Sido Mulyo II1.png', '', 'Sido Mulyo II1');
        $this->create_pola_batik_model('CPK072-Sido Mulyo II2.png', '', 'Sido Mulyo II2');
        $this->create_pola_batik_model('CPK074-Sumber Lintang1.png', '', 'Sumber Lintang1');
        $this->create_pola_batik_model('CPK074-Sumber Lintang2.png', '', 'Sumber Lintang2');
        $this->create_pola_batik_model('CPK074-Sumber Lintang3.png', '', 'Sumber Lintang3');
        $this->create_pola_batik_model('CPK079-Triloka.png', '', 'Triloka');
        $this->create_pola_batik_model('KWG001-Ceplok Kawung Grinsing.png', '', 'Ceplok Kawung Grinsing');
        $this->create_pola_batik_model('KWG002-Kawung Beton.png', '', 'Kawung Beton');
        $this->create_pola_batik_model('KWG004-Kawung Brendhi.png', '', 'Kawung Brendhi');
        $this->create_pola_batik_model('KWG005-Kawung Cacah Gori.png', '', 'Kawung Cacah Gori');
        $this->create_pola_batik_model('KWG006-Kawung Galar.png', '', 'Kawung Galar');
        $this->create_pola_batik_model('KWG007-Kawung Gamblok.png', '', 'Kawung Gamblok');
        $this->create_pola_batik_model('KWG009-Kawung Kepyar.png', '', 'Kawung Kepyar');
        $this->create_pola_batik_model('KWG011-Kawung Ndil.png', '', 'Kawung Ndil');
        $this->create_pola_batik_model('KWG012-Kawung Picis.png', '', 'Kawung Picis');
        $this->create_pola_batik_model('KWG013-Kawung Plentong.png', '', 'Kawung Plentong');
        $this->create_pola_batik_model('KWG014-Kawung Putri.png', '', 'Kawung Putri');
        $this->create_pola_batik_model('KWG017-Kawung Sen.png', '', 'Kawung Sen');
        $this->create_pola_batik_model('KWG018-Kawung Ukel.png', '', 'Kawung Ukel');
        $this->create_pola_batik_model('KWG019-Kawung Uter.png', '', 'Kawung Uter');
        $this->create_pola_batik_model('KWG021-Kawung Manila.png', '', 'Kawung Manila');
        $this->create_pola_batik_model('KWG022-Sawo Pecah.png', '', 'Sawo Pecah');
        $this->create_pola_batik_model('KWG023-Sawo Tanjungsari.png', '', 'Sawo Tanjungsari');
        $this->create_pola_batik_model('LRG001-Lereng Dana Tirta.png', '', 'Lereng Dana Tirta');
        $this->create_pola_batik_model('LRG002-Lereng Abiyoso.png', '', 'Lereng Abiyoso');
        $this->create_pola_batik_model('LRG003-Lereng Bangun Ningrat1.png', '', 'Lereng Bangun Ningrat1');
        $this->create_pola_batik_model('LRG003-Lereng Bangun Ningrat.png', '', 'Lereng Bangun Ningrat');
        $this->create_pola_batik_model('LRG004-Lereng Blambangan.png', '', 'Lereng Blambangan');
        $this->create_pola_batik_model('LRG005-Lereng Cagak Talang.png', '', 'Lereng Cagak Talang');
        $this->create_pola_batik_model('LRG006-Lereng Candi Puro.png', '', 'Lereng Candi Puro');
        $this->create_pola_batik_model('LRG007-Lereng Golang galing.png', '', 'Lereng Golang galing');
        $this->create_pola_batik_model('LRG008-Lereng Kembang Bayem.png', '', 'Lereng Kembang Bayem');
        $this->create_pola_batik_model('LRG009-Lereng Modang.png', '', 'Lereng Modang');
        $this->create_pola_batik_model('LRG010-Lereng Paripurno.png', '', 'Lereng Paripurno');
        $this->create_pola_batik_model('LRG011-Lereng Prana Jiwo.png', '', 'Lereng Prana Jiwo');
        $this->create_pola_batik_model('LRG012-Rujak Senthe I.png', '', 'Rujak Senthe I');
        $this->create_pola_batik_model('LRG013-Lereng Rujak Senthe II-1.png', '', 'Lereng Rujak Senthe II-1');
        $this->create_pola_batik_model('LRG013-Lereng Rujak Senthe II.png', '', 'Lereng Rujak Senthe II');
        $this->create_pola_batik_model('LRG014-Lereng Rujak Tales.png', '', 'Lereng Rujak Tales');
        $this->create_pola_batik_model('LRG015-Lereng Tatagati.png', '', 'Lereng Tatagati');
        $this->create_pola_batik_model('LRG016-Lereng Tritis.png', '', 'Lereng Tritis');
        $this->create_pola_batik_model('LRG017-Lereng Udan Riris.png', '', 'Lereng Udan Riris');
        $this->create_pola_batik_model('LRG018-Lereng Uceng Udik.png', '', 'Lereng Uceng Udik');
        $this->create_pola_batik_model('LRG019-Lereng Sukoreno.png', '', 'Lereng Sukoreno');
        $this->create_pola_batik_model('LRG020-Lereng Weningsari.png', '', 'Lereng Weningsari');
        $this->create_pola_batik_model('NTK001-Nitik Ceplok Liring.png', '', 'Nitik Ceplok Liring');
        $this->create_pola_batik_model('NTK002-Nitik Dara Gelar.png', '', 'Nitik Dara Gelar');
        $this->create_pola_batik_model('NTK003-Nitik Grompol.png', '', 'Nitik Grompol');
        $this->create_pola_batik_model('NTK004-Nitik Kartika.png', '', 'Nitik Kartika');
        $this->create_pola_batik_model('NTK005-Nitik Kapulogo.png', '', 'Nitik Kapulogo');
        $this->create_pola_batik_model('NTK006-Nitik Nagasari.png', '', 'Nitik Nagasari');
        $this->create_pola_batik_model('NTK007-Nitik Nujuprana.png', '', 'Nitik Nujuprana');
        $this->create_pola_batik_model('NTK008-Nitik Pandanwangi.png', '', 'Nitik Pandanwangi');
        $this->create_pola_batik_model('NTK009-Nitik Rumpuk.png', '', 'Nitik Rumpuk');
        $this->create_pola_batik_model('NTK010-Nitik Sekar Andala.png', '', 'Nitik Sekar Andala');
        $this->create_pola_batik_model('NTK011-Nitik Sekar Anggrek.png', '', 'Nitik Sekar Anggrek');
        $this->create_pola_batik_model('NTK012-Nitik Sekar Bangah.png', '', 'Nitik Sekar Bangah');
        $this->create_pola_batik_model('NTK013-Nitik Sekar Blimbing.png', '', 'Nitik Sekar Blimbing');
        $this->create_pola_batik_model('NTK014-Nitik Sekar Cendul.png', '', 'Nitik Sekar Cendul');
        $this->create_pola_batik_model('NTK015-Nitik Sekar Cengkeh I.png', '', 'Nitik Sekar Cengkeh I');
        $this->create_pola_batik_model('NTK016-Nitik Sekar Cengkeh II.png', '', 'Nitik Sekar Cengkeh II');
        $this->create_pola_batik_model('NTK017-Nitik Sekar Delimo.png', '', 'Nitik Sekar Delimo');
        $this->create_pola_batik_model('NTK018-Nitik Sekar Giwang.png', '', 'Nitik Sekar Giwang');
        $this->create_pola_batik_model('NTK019-Nitik Sekar Jagung.png', '', 'Nitik Sekar Jagung');
        $this->create_pola_batik_model('NTK020-Nitik Sekar Jali.png', '', 'Nitik Sekar Jali');
        $this->create_pola_batik_model('NTK021-Nitik Sekar Jambe.png', '', 'Nitik Sekar Jambe');
        $this->create_pola_batik_model('NTK022-Nitik Sekar Jambet.png', '', 'Nitik Sekar Jambet');
        $this->create_pola_batik_model('NTK023-Nitik Sekar Kenongo.png', '', 'Nitik Sekar Kenongo');
        $this->create_pola_batik_model('NTK024-Nitik Sekar Kentang.png', '', 'Nitik Sekar Kentang');
        $this->create_pola_batik_model('NTK025-Nitik Sekar Kepel.png', '', 'Nitik Sekar Kepel');
        $this->create_pola_batik_model('NTK026-Nitik Sekar Manggar.png', '', 'Nitik Sekar Manggar');
        $this->create_pola_batik_model('NTK027-Nitik Sekar Melati.png', '', 'Nitik Sekar Melati');
        $this->create_pola_batik_model('NTK028-Nitik Sekar Menur.png', '', 'Nitik Sekar Menur');
        $this->create_pola_batik_model('NTK029-Nitik Sekar Pala I.png', '', 'Nitik Sekar Pala I');
        $this->create_pola_batik_model('NTK030-Nitik Sekar Pala II.png', '', 'Nitik Sekar Pala II');
        $this->create_pola_batik_model('NTK031-Nitik Sekar Polong.png', '', 'Nitik Sekar Polong');
        $this->create_pola_batik_model('NTK032-Nitik Sekar Randu I.png', '', 'Nitik Sekar Randu I');
        $this->create_pola_batik_model('NTK033-Nitik Sekar Randu II.png', '', 'Nitik Sekar Randu II');
        $this->create_pola_batik_model('NTK034-Nitik Sekar Randu III.png', '', 'Nitik Sekar Randu III');
        $this->create_pola_batik_model('NTK035-Nitik Sekar Sawo.png', '', 'Nitik Sekar Sawo');
        $this->create_pola_batik_model('NTK036-Nitik Sekar Sedah.png', '', 'Nitik Sekar Sedah');
        $this->create_pola_batik_model('NTK037-Nitik Sekar Tebu.png', '', 'Nitik Sekar Tebu');
        $this->create_pola_batik_model('NTK038-Nitik Sekar Teleng I.png', '', 'Nitik Sekar Teleng I');
        $this->create_pola_batik_model('NTK039-Nitik Sekar Teleng II.png', '', 'Nitik Sekar Teleng II');
        $this->create_pola_batik_model('NTK040-Nitik Tanjung Gunung I.png', '', 'Nitik Tanjung Gunung I');
        $this->create_pola_batik_model('NTK041-Nitik Tanjung Gunung II.png', '', 'Nitik Tanjung Gunung II');
        $this->create_pola_batik_model('NTK042-Nitik Tanjung Gunung III.png', '', 'Nitik Tanjung Gunung III');
        $this->create_pola_batik_model('PRG007-Parang Curiga.png', '', 'Parang Curiga');
        $this->create_pola_batik_model('PRG008-Parang Curiga Nata.png', '', 'Parang Curiga Nata');
        $this->create_pola_batik_model('PRG010-Parang Gendewa.png', '', 'Parang Gendewa');
        $this->create_pola_batik_model('PRG013-Parang Harjono.png', '', 'Parang Harjono');
        $this->create_pola_batik_model('PRG015-Parang Joyopuro.png', '', 'Parang Joyopuro');
        $this->create_pola_batik_model('PRG016-Parang Karno.png', '', 'Parang Karno');
        $this->create_pola_batik_model('PRG019-Parang Komojoyo.png', '', 'Parang Komojoyo');
        $this->create_pola_batik_model('PRG020-Parang Kondur Baris.png', '', 'Parang Kondur Baris');
        $this->create_pola_batik_model('PRG022-Parang Kumudaningrat.png', '', 'Parang Kumudaningrat');
        $this->create_pola_batik_model('PRG023-Parang Kusumo.png', '', 'Parang Kusumo');
        $this->create_pola_batik_model('PRG024-Parang Kusumo Besar.png', '', 'Parang Kusumo Besar');
        $this->create_pola_batik_model('PRG025-Parang Laras Madyo.png', '', 'Parang Laras Madyo');
        $this->create_pola_batik_model('PRG026-Parang Larasati.png', '', 'Parang Larasati');
        $this->create_pola_batik_model('PRG028-Parang Muncar 1.png', '', 'Parang Muncar 1');
        $this->create_pola_batik_model('PRG029-Parang Muncar 2.png', '', 'Parang Muncar 2');
        $this->create_pola_batik_model('PRG030-Parang Muninggar.png', '', 'Parang Muninggar');
        $this->create_pola_batik_model('PRG031-Parang Nengkulo.png', '', 'Parang Nengkulo');
        $this->create_pola_batik_model('PRG032-Parang Ningsih.png', '', 'Parang Ningsih');
        $this->create_pola_batik_model('PRG033-Parang Pandan Sari.png', '', 'Parang Pandan Sari');
        $this->create_pola_batik_model('PRG035-Parang Parikesit Putri.png', '', 'Parang Parikesit Putri');
        $this->create_pola_batik_model('PRG036-Parang Poncowati.png', '', 'Parang Poncowati');
        $this->create_pola_batik_model('PRG038-Parang Rusak Barong.png', '', 'Parang Rusak Barong');
        $this->create_pola_batik_model('PRG039-Parang Samba.png', '', 'Parang Samba');
        $this->create_pola_batik_model('PRG042-Parang Sawut 2.png', '', 'Parang Sawut 2');
        $this->create_pola_batik_model('PRG043-Parang Sawut Seling.png', '', 'Parang Sawut Seling');
        $this->create_pola_batik_model('PRG044-Parang Semiaji.png', '', 'Parang Semiaji');
        $this->create_pola_batik_model('PRG045-Parang Seno.png', '', 'Parang Seno');
        $this->create_pola_batik_model('PRG046-Parang Seto.png', '', 'Parang Seto');
        $this->create_pola_batik_model('PRG050-Parang Sidoreno.png', '', 'Parang Sidoreno');
        $this->create_pola_batik_model('PRG052-Parang Sisik.png', '', 'Parang Sisik');
        $this->create_pola_batik_model('PRG053-Parang Srimpi.png', '', 'Parang Srimpi');
        $this->create_pola_batik_model('PRG054-Parang Sukawati.png', '', 'Parang Sukawati');
        $this->create_pola_batik_model('PRG055-Parang Sumbo.png', '', 'Parang Sumbo');
        $this->create_pola_batik_model('PRG056-Parang Tarupulo.png', '', 'Parang Tarupulo');

    }

    public function create_pola_batik_model($gambarpola, $matrikspola, $namabatik) {

        $polabatik = new PolaBatik();
        $polabatik->gambar_pola_batik = $gambarpola;
        $polabatik->matriks_pola_batik = $matrikspola;
        $polabatik->save();

        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->pluck('id');
        $idpolabatik = App\PolaBatik::where('gambar_pola_batik','=',$gambarpola)->first()->pluck('id');
        DB::table('batik_pola_batik')->insert(array('batik_id'=>$idbatik, 'pola_batik_id'=>$idpolabatik));
    }
}
