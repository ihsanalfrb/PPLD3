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
//        DB::table('user_accounts')->delete();
//        $this->create_user_account_model('admin@batique.com', 'admin','batiqueadmin', 'admin','admin', \Carbon\Carbon::now(),'N', 'T');
//        $this->create_user_account_model('example1@domain1.com', 'default1','admin', 'default','1' , \Carbon\Carbon::now(),'L','F');
        factory(\App\User::class,2)->create();
    }

//    public function create_user_account_model($email, $username, $password, $firstname, $lastname, $tanggallahir, $jeniskelamin, $isadmin) {
//        $useraccount = new UserAccount();
//        $useraccount->email = $email;
//        $useraccount->password = $password;
//        $useraccount->username = $username;
//        $useraccount->first_name = $firstname;
//        $useraccount->last_name = $lastname;
//        $useraccount->tanggal_lahir = $tanggallahir;
//        $useraccount->jenis_kelamin = $jeniskelamin;
//        if($isadmin == 'T') {
//            $useraccount->isadmin = true;
//        } else {
//            $useraccount->isadmin = false;
//        }
//        $useraccount->save();
//
////        $idbatik = App\Batik::where('nama_batik','=',$namabatik)->first()->id;
////        $idtagbatik = App\TagBatik::where('tag_batik','=',$tag)->first()->id;
////
////        DB::table('user_accounts')->insert(array('batik_id'=>$idbatik, 'tag_batik_id'=>$idtagbatik));
//    }
}
