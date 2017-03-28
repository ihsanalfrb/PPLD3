<?php

use App\Batik;
use App\TagBatik;
use Illuminate\Database\Seeder;

class TagBatikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('tag_batik')->insert([
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => ''),
//            array('id_batik' => '', 'tag_batik' => '')
//        ]);

        $this->create_tag_batik_model('Arum', 'Arum Dalu');
        $this->create_tag_batik_model('Dalu', 'Arum Dalu');
        $this->create_tag_batik_model('Blibar', 'Blibar11');
        $this->create_tag_batik_model('Blibar', 'Blibar12');
        $this->create_tag_batik_model('Blibar', 'Blibar13');
        $this->create_tag_batik_model('Blibar', 'Blibar14');
        $this->create_tag_batik_model('Blibar', 'Blibar21');
        $this->create_tag_batik_model('Blibar', 'Blibar22');
        $this->create_tag_batik_model('Blibar', 'Blibar23');
        $this->create_tag_batik_model('Blibar', 'Blibar24');
        $this->create_tag_batik_model('Budi', 'Budi Luhur1');
        $this->create_tag_batik_model('Budi', 'Budi Luhur2');
        $this->create_tag_batik_model('Luhur', 'Budi Luhur1');
        $this->create_tag_batik_model('Luhur', 'Budi Luhur2');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Abimanyu1');
        $this->create_tag_batik_model('Abimanyu', 'Ceplok Abimanyu2');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Abimanyu3');
        $this->create_tag_batik_model('Ambar', 'Ceplok Ambar Sekar');
        $this->create_tag_batik_model('Gambir', 'Ceplok Gambir Anom');
        $this->create_tag_batik_model('Gusti', 'Ceplok Gusti Putri1');
        $this->create_tag_batik_model('Jelanggrong', 'Ceplok Jelanggrong');
        $this->create_tag_batik_model('Keci', 'Ceplok Keci1');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Keci2');
        $this->create_tag_batik_model('Kembang', 'Ceplok Kembang Tebu1');
        $this->create_tag_batik_model('Tebu', 'Ceplok Kembang Tebu2');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Kembang Waru1');
        $this->create_tag_batik_model('Kembang', 'Ceplok Kembang Waru2');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Kenongo1');
        $this->create_tag_batik_model('Kenongo', 'Ceplok Kenongo2');
        $this->create_tag_batik_model('Kenongo', 'Ceplok Kenongo3');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Lenggang Kangkung');
        $this->create_tag_batik_model('Sari', 'Ceplok Mawar Sari');
        $this->create_tag_batik_model('Mulyo', 'Ceplok Mulyo1');
        $this->create_tag_batik_model('Mulyo', 'Ceplok Mulyo2');
        $this->create_tag_batik_model('Pamugari', 'Ceplok Pamugari 11');
        $this->create_tag_batik_model('Pamugari', 'Ceplok Pamugari 12');
        $this->create_tag_batik_model('Pamugari', 'Ceplok Pamugari 21');
        $this->create_tag_batik_model('Pamugari', 'Ceplok Pamugari 22');
        $this->create_tag_batik_model('Prana', 'Ceplok Prana Jiwa1');
        $this->create_tag_batik_model('Prana', 'Ceplok Prana Jiwa2');
        $this->create_tag_batik_model('Sekar', 'Sekar Bangah1');
        $this->create_tag_batik_model('Sekar', 'Sekar Bangah2');
        $this->create_tag_batik_model('Sidoguri', 'Ceplok Sekar Sidoguri');
        $this->create_tag_batik_model('Ceplok', 'Ceplok Sirap');
        $this->create_tag_batik_model('Tanjungsari', 'Ceplok Tanjungsari1');
        $this->create_tag_batik_model('Tanjungsari', 'Ceplok Tanjungsari2');
        $this->create_tag_batik_model('Wahyuningrat', 'Ceplok Wahyuningrat1');
        $this->create_tag_batik_model('Wahyuningrat', 'Ceplok Wahyuningrat2');
        $this->create_tag_batik_model('Gambiro', 'Gambiro Wati1');
        $this->create_tag_batik_model('Gambiro', 'Gambiro Wati2');
        $this->create_tag_batik_model('Giri', 'Gendala Giri1');
        $this->create_tag_batik_model('Giri', 'Gendala Giri2');
        $this->create_tag_batik_model('Glagah', 'Glagah Kurung');
        $this->create_tag_batik_model('Grompol', 'Grompol I1');
        $this->create_tag_batik_model('Grompol', 'Grompol I2');
        $this->create_tag_batik_model('Grompol', 'Grompol II1');
        $this->create_tag_batik_model('Grompol', 'Grompol II2');
        $this->create_tag_batik_model('Wati', 'Kartiko Wati1');
        $this->create_tag_batik_model('Wati', 'Kartiko Wati2');
        $this->create_tag_batik_model('Kapas', 'Kembang Kapas1');
        $this->create_tag_batik_model('Kapas', 'Kembang Kapas2');
        $this->create_tag_batik_model('Kapas', 'Kembang Kapas3');
        $this->create_tag_batik_model('Kembang', 'Kembang Pala1');
        $this->create_tag_batik_model('Kembang', 'Kembang Pala2');
        $this->create_tag_batik_model('Tanjung', 'Kembang Tanjung1');
        $this->create_tag_batik_model('Tanjung', 'Kembang Tanjung2');
        $this->create_tag_batik_model('Kenanga', 'Kenanga Sari1');
        $this->create_tag_batik_model('Kenanga', 'Kenanga Sari2');
        $this->create_tag_batik_model('Kerton', 'Kerton Bekingking');
        $this->create_tag_batik_model('Anom', 'Kerton Pari Anom');
        $this->create_tag_batik_model('Konang', 'Konang Sakebon1');
        $this->create_tag_batik_model('Konang', 'Konang Sakebon2');
        $this->create_tag_batik_model('Kotak', 'Kotak Banci Kasut');
        $this->create_tag_batik_model('Kotak', 'Kotak Jamblang');
        $this->create_tag_batik_model('Kotak', 'Kotak Peksi Kurung1');
        $this->create_tag_batik_model('Kotak', 'Kotak Peksi Kurung2');
        $this->create_tag_batik_model('', 'Kupu Anom');
        $this->create_tag_batik_model('', 'Lara Sedowo1');
        $this->create_tag_batik_model('', 'Lara Sedowo2');
        $this->create_tag_batik_model('', 'Limaran1');
        $this->create_tag_batik_model('', 'Limaran2');
        $this->create_tag_batik_model('', 'Melati Rinonce I1');
        $this->create_tag_batik_model('', 'Melati Rinonce I2');
        $this->create_tag_batik_model('', 'Sawo Bludru1');
        $this->create_tag_batik_model('', 'Sawo Bludru2');
        $this->create_tag_batik_model('', 'Sekar Kopi1');
        $this->create_tag_batik_model('', 'Sekar Kopi2');
        $this->create_tag_batik_model('', 'Sekar Sembojo');
        $this->create_tag_batik_model('', 'Sekar Sidoguri1');
        $this->create_tag_batik_model('', 'Sekar Sidoguri2');
        $this->create_tag_batik_model('', 'Sekar Tanjung');
        $this->create_tag_batik_model('', 'Sekar Turi1');
        $this->create_tag_batik_model('', 'Sekar Turi2');
        $this->create_tag_batik_model('', 'Sido Mulyo II1');
        $this->create_tag_batik_model('', 'Sido Mulyo II2');
        $this->create_tag_batik_model('', 'Sumber Lintang1');
        $this->create_tag_batik_model('', 'Sumber Lintang2');
        $this->create_tag_batik_model('', 'Sumber Lintang3');
        $this->create_tag_batik_model('', 'Triloka');
        $this->create_tag_batik_model('', 'Ceplok Kawung Grinsing');
        $this->create_tag_batik_model('', 'Kawung Beton');
        $this->create_tag_batik_model('', 'Kawung Brendhi');
        $this->create_tag_batik_model('', 'Kawung Cacah Gori');
        $this->create_tag_batik_model('', 'Kawung Galar');
        $this->create_tag_batik_model('', 'Kawung Gamblok');
        $this->create_tag_batik_model('', 'Kawung Kepyar');
        $this->create_tag_batik_model('', 'Kawung Ndil');
        $this->create_tag_batik_model('', 'Kawung Picis');
        $this->create_tag_batik_model('', 'Kawung Plentong');
        $this->create_tag_batik_model('', 'Kawung Putri');
        $this->create_tag_batik_model('', 'Kawung Sen');
        $this->create_tag_batik_model('', 'Kawung Ukel');
        $this->create_tag_batik_model('', 'Kawung Uter');
        $this->create_tag_batik_model('', 'Kawung Manila');
        $this->create_tag_batik_model('', 'Sawo Pecah');
        $this->create_tag_batik_model('', 'Sawo Tanjungsari');
        $this->create_tag_batik_model('', 'Lereng Dana Tirta');
        $this->create_tag_batik_model('', 'Lereng Abiyoso');
        $this->create_tag_batik_model('', 'Lereng Bangun Ningrat1');
        $this->create_tag_batik_model('', 'Lereng Bangun Ningrat');
        $this->create_tag_batik_model('', 'Lereng Blambangan');
        $this->create_tag_batik_model('', 'Lereng Cagak Talang');
        $this->create_tag_batik_model('', 'Lereng Candi Puro');
        $this->create_tag_batik_model('', 'Lereng Golang galing');
        $this->create_tag_batik_model('', 'Lereng Kembang Bayem');
        $this->create_tag_batik_model('', 'Lereng Modang');
        $this->create_tag_batik_model('', 'Lereng Paripurno');
        $this->create_tag_batik_model('', 'Lereng Prana Jiwo');
        $this->create_tag_batik_model('', 'Rujak Senthe I');
        $this->create_tag_batik_model('', 'Lereng Rujak Senthe II-1');
        $this->create_tag_batik_model('', 'Lereng Rujak Senthe II');
        $this->create_tag_batik_model('', 'Lereng Rujak Tales');
        $this->create_tag_batik_model('', 'Lereng Tatagati');
        $this->create_tag_batik_model('', 'Lereng Tritis');
        $this->create_tag_batik_model('', 'Lereng Udan Riris');
        $this->create_tag_batik_model('', 'Lereng Uceng Udik');
        $this->create_tag_batik_model('', 'Lereng Sukoreno');
        $this->create_tag_batik_model('', 'Lereng Weningsari');
        $this->create_tag_batik_model('', 'Nitik Ceplok Liring');
        $this->create_tag_batik_model('', 'Nitik Dara Gelar');
        $this->create_tag_batik_model('', 'Nitik Grompol');
        $this->create_tag_batik_model('', 'Nitik Kartika');
        $this->create_tag_batik_model('', 'Nitik Kapulogo');
        $this->create_tag_batik_model('', 'Nitik Nagasari');
        $this->create_tag_batik_model('', 'Nitik Nujuprana');
        $this->create_tag_batik_model('', 'Nitik Pandanwangi');
        $this->create_tag_batik_model('', 'Nitik Rumpuk');
        $this->create_tag_batik_model('', 'Nitik Sekar Andala');
        $this->create_tag_batik_model('', 'Nitik Sekar Anggrek');
        $this->create_tag_batik_model('', 'Nitik Sekar Bangah');
        $this->create_tag_batik_model('', 'Nitik Sekar Blimbing');
        $this->create_tag_batik_model('', 'Nitik Sekar Cendul');
        $this->create_tag_batik_model('', 'Nitik Sekar Cengkeh I');
        $this->create_tag_batik_model('', 'Nitik Sekar Cengkeh II');
        $this->create_tag_batik_model('', 'Nitik Sekar Delimo');
        $this->create_tag_batik_model('', 'Nitik Sekar Giwang');
        $this->create_tag_batik_model('', 'Nitik Sekar Jagung');
        $this->create_tag_batik_model('', 'Nitik Sekar Jali');
        $this->create_tag_batik_model('', 'Nitik Sekar Jambe');
        $this->create_tag_batik_model('', 'Nitik Sekar Jambet');
        $this->create_tag_batik_model('', 'Nitik Sekar Kenongo');
        $this->create_tag_batik_model('', 'Nitik Sekar Kentang');
        $this->create_tag_batik_model('', 'Nitik Sekar Kepel');
        $this->create_tag_batik_model('', 'Nitik Sekar Manggar');
        $this->create_tag_batik_model('', 'Nitik Sekar Melati');
        $this->create_tag_batik_model('', 'Nitik Sekar Menur');
        $this->create_tag_batik_model('', 'Nitik Sekar Pala I');
        $this->create_tag_batik_model('', 'Nitik Sekar Pala II');
    }

    public function create_tag_batik_model($tag, $namabatik) {
        if (App\TagBatik::where('tag_batik','=',$tag)->get()->isEmpty()) {
            $tagbatik = new TagBatik();
            $tagbatik->tag_batik = $tag;
            $tagbatik->save() ;
        }
        

        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->pluck('id');
        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->pluck('id');
        DB::table('batik_pola_batik')->insert(array('batik_id'=>$idbatik, 'pola_batik_id'=>$idtagbatik));
    }
}
