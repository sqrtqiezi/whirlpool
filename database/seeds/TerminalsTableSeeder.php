<?php

use Illuminate\Database\Seeder;

class TerminalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terminals')->delete();
        
        \DB::table('terminals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '厦门市建设大路店',
                'location' => 4,
                'address' => '建设大路 441 号甲 2',
                'telephone' => '022-22435112',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 19:35:44',
                'updated_at' => '2016-09-03 21:54:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '深圳南山区法院路店',
                'location' => 6,
                'address' => '南山区 24 号 2212',
                'telephone' => '010-22421223',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 20:08:20',
                'updated_at' => '2016-09-03 21:54:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '凌源店',
                'location' => 8,
                'address' => '丹东市元宝区元宝新村 27 号 101 室',
                'telephone' => '001-2233112',
                'thumbnail' => '',
                'deleted_at' => '2016-09-03 22:01:36',
                'created_at' => '2016-09-03 21:56:05',
                'updated_at' => '2016-09-03 22:01:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '和绵北京燕莎友谊店',
                'location' => 2,
                'address' => '北京市朝阳区亮马桥路 52 号北京燕莎友谊商场四楼',
                'telephone' => '15321991060',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:56:47',
                'updated_at' => '2016-09-03 21:56:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '北京太阳店',
                'location' => 2,
                'address' => '北京市朝阳区太阳宫中路 12 号凯德 MALL 二层耐克 北京, 100029',
                'telephone' => '010-84430048',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:57:16',
                'updated_at' => '2016-09-03 21:57:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '宁波联丰优惠店',
                'location' => 11,
                'address' => '宁波市鄞州区秋实路 555 号杉井奥特莱斯广场 ',
                'telephone' => '0574-89015581',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:57:54',
                'updated_at' => '2016-09-03 21:57:54',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '武汉品牌体验店',
                'location' => 16,
                'address' => '湖北省武汉市中央文化区汉街 126 号',
                'telephone' => '027-87110608',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:58:49',
                'updated_at' => '2016-09-03 21:58:49',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '合肥芙蓉店',
                'location' => 7,
                'address' => '合肥市经开区翡翠路与金炉路交汇处港澳广场 ',
                'telephone' => '0551-63808359',
                'thumbnail' => '',
                'deleted_at' => '2016-09-03 22:00:55',
                'created_at' => '2016-09-03 21:59:14',
                'updated_at' => '2016-09-03 22:00:55',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '马鞍山店',
                'location' => 7,
                'address' => '马鞍山市雨山区朱然路 1379 号马鞍山亿丰环球商业中心奥特莱斯购物中心一层 A128 号单元',
                'telephone' => '0555-2293295/2293292',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:59:41',
                'updated_at' => '2016-09-03 21:59:41',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '成都万科店',
                'location' => 7,
                'address' => '成都市成华区万科路 9 号凯德广场三层 11/12',
                'telephone' => '028-64187001',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 22:00:14',
                'updated_at' => '2016-09-03 22:01:36',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '重庆佰富',
                'location' => 3,
                'address' => '重庆市北部新区石马河来鹿寺 8 号',
                'telephone' => '13983730288',
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 22:00:43',
                'updated_at' => '2016-09-03 22:00:43',
            ),
        ));
        
        
    }
}
