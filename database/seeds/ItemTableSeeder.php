<?php

use Illuminate\Database\Seeder;
use App\Items;
class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //===========step1=========================
        $item = new Items();
        $item->item_name = 'ANDROID';
        $item->cost = 4000;
        $item->step = 1;
        $item->other_cost = 8000;
        $item->save();
        $item = new Items();
        $item->item_name = 'IOS';
        $item->cost = 4000;
        $item->step = 1;
        $item->other_cost = 8000;
        $item->save();
        $item = new Items();
        $item->item_name = 'BOTH';
        $item->cost = 8000;
        $item->step = 1;
        $item->other_cost = 16000;
        $item->save();
        //===============step2=======================
        $item = new Items();
        $item->item_name = 'SOCIAL';
        $item->cost = 1000;
        $item->step = 2;
        $item->other_cost = 2000;
        $item->save();
        $item = new Items();
        $item->item_name = 'EMAIL';
        $item->cost = 1000;
        $item->step = 2;
        $item->other_cost = 2000;
        $item->save();
        $item = new Items();
        $item->item_name = 'NO';
        $item->cost = 0;
        $item->step = 2;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 2;
        $item->other_cost = 0;
        $item->save();
        //===============step3======================
        $item = new Items();
        $item->item_name = 'YES';
        $item->cost = 1500;
        $item->step = 3;
        $item->other_cost = 3000;
        $item->save();
        $item = new Items();
        $item->item_name = 'NO';
        $item->cost = 0;
        $item->step = 3;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 3;
        $item->other_cost = 0;
        $item->save();
        //===============step4===================
        $item = new Items();
        $item->item_name = 'PAID';
        $item->cost = 500;
        $item->step = 4;
        $item->other_cost = 1000;
        $item->save();
        $item = new Items();
        $item->item_name = "IN APP PURCHASES";
        $item->cost = 1000;
        $item->step = 4;
        $item->other_cost = 2000;
        $item->save();
        $item = new Items();
        $item->item_name = 'FREE';
        $item->cost = 0;
        $item->step = 4;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 4;
        $item->other_cost = 0;
        $item->save();
        //===============step5=================
        $item = new Items();
        $item->item_name = 'YES';
        $item->cost = 1500;
        $item->step = 5;
        $item->other_cost = 3000;
        $item->save();
        $item = new Items();
        $item->item_name = 'NO';
        $item->cost = 0;
        $item->step = 5;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 5;
        $item->other_cost = 0;
        $item->save();
        //============step6=================
        $item = new Items();
        $item->item_name = 'YES';
        $item->cost = 2500;
        $item->step = 6;
        $item->other_cost = 5000;
        $item->save();
        $item = new Items();
        $item->item_name = 'NO';
        $item->cost = 0;
        $item->step = 6;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 6;
        $item->other_cost = 0;
        $item->save();
        //===========step7===============
        $item = new Items();
        $item->item_name = "BARE-BONES";
        $item->cost = 1400;
        $item->step = 7;
        $item->other_cost = 2800;
        $item->save();
        $item = new Items();
        $item->item_name = "STOCK";
        $item->cost = 1500;
        $item->step = 7;
        $item->other_cost = 3000;
        $item->save();
        $item = new Items();
        $item->item_name = "BEAUTIFUL";
        $item->cost = 7900;
        $item->step = 7;
        $item->other_cost = 15800;
        $item->save();
        //==========step8===============
        $item = new Items();
        $item->item_name = "YES";
        $item->cost = 3000;
        $item->step = 8;
        $item->other_cost = 6000;
        $item->save();
        $item = new Items();
        $item->item_name = "NO";
        $item->cost = 0;
        $item->step = 8;
        $item->other_cost = 0;
        $item->save();
        $item = new Items();
        $item->item_name = "DON'T KNOW";
        $item->cost = 0;
        $item->step = 8;
        $item->other_cost = 0;
        $item->save();
    }
}
