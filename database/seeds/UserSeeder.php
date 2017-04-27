<?php

use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('users')->delete();
     $this->create_user_model("default","default@example.com",bcrypt('default'));
     $this->create_user_model("null","null@example.com",bcrypt('null')) ;
     $this->create_user_model("foo","foo@example.com",bcrypt('foo'));
     $this->create_user_model("boo","boo@example.com",bcrypt('boo'));
     $this->create_user_model_admin("admin","admin@example.com",bcrypt('admin'));
    }

public function create_user_model($name,$email,$password) {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
  }


public function create_user_model_admin($name,$email,$password) {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->is_admin = true;
        $user->password = $password;
        $user->save();
  }
}
