<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::all();
        $user=$users->first();
        $user_id=$user->id;
        //获取除id=1的所有用户的id
        $followers=$users->slice(1);
        $follower_ids=$followers->pluck('id')->toArray();
        //关注除了1以外的所有用户
        $user->follow($follower_ids);
        foreach($followers as $follower){
        	$follower->follow($user_id);
        }

    }
}
