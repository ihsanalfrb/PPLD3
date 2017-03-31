<?php

use App\UserAccount;
use Illuminate\Database\Seeder;

class UserAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    public function create_user_account_model($email, $username, $password, $firstname, $lastname, $tanggallahir, $jeniskelamin) {
        $useraccount = new UserAccount();
        $useraccount->email = $email;
        $useraccount->password = $password;
        $useraccount->username = $username;
        $useraccount->first_name = $firstname;
        $useraccount->last_name = $lastname;
        $useraccount->tanggal_lahir = $tanggallahir;
        $useraccount->jenis_kelamin = $jeniskelamin;
        $useraccount->save();

//        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
//        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
//
//        DB::table('batik_tag_batik')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
    }
}
