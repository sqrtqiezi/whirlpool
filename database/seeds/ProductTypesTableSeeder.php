<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_types')->delete();
        
        \DB::table('product_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '吸油烟机',
            'attributes' => '{"0":"\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","2":"\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","3":"\\u989c\\u8272","4":"\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","5":"\\u6700\\u5927\\u9759\\u538b (Pa)","6":"\\u566a\\u97f3 (dB(A))","7":"\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","8":"\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","9":"\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","10":"\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","11":"\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","12":"\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","13":"\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","14":"17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","15":"70dB(A) \\u8d85\\u9759\\u566a\\u97f3","16":"\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","17":"\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","18":"\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","19":"\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","20":"LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"}',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-08 13:22:31',
                'updated_at' => '2016-09-09 08:31:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '灶具',
            'attributes' => '{"0":"\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","2":"\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","3":"\\u989c\\u8272","4":"\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","5":"\\u6700\\u5927\\u9759\\u538b (Pa)","6":"\\u566a\\u97f3 (dB(A))","7":"\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","8":"\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","9":"\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","10":"\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","11":"\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","12":"\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","13":"\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","14":"17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","15":"70dB(A) \\u8d85\\u9759\\u566a\\u97f3","16":"\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","17":"\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","18":"\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","19":"\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","20":"LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"}',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-08 15:53:37',
                'updated_at' => '2016-09-09 08:31:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '微波炉',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:08',
                'updated_at' => '2016-09-09 08:31:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '蒸箱',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:17',
                'updated_at' => '2016-09-09 08:31:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '消毒柜',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:26',
                'updated_at' => '2016-09-09 08:31:55',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '烤箱',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:30',
                'updated_at' => '2016-09-09 08:31:59',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '洗碗机',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:33',
                'updated_at' => '2016-09-09 08:32:03',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '嵌入式冰箱',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:42',
                'updated_at' => '2016-09-09 08:32:06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '酒柜',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:46',
                'updated_at' => '2016-09-09 08:32:10',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '暖碟机',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => NULL,
                'created_at' => '2016-09-09 08:28:51',
                'updated_at' => '2016-09-09 08:32:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '曲速引擎',
            'attributes' => '["\\u529f\\u80fd\\u53c2\\u6570 \\/ \\u578b\\u53f7","\\u5c3a\\u5bf8 (\\u6df1 \\u00d7 \\u5bbd \\u00d7 \\u9ad8)mm","\\u989c\\u8272","\\u6392\\u98ce\\u91cf (m\\u00b3\\/min)","\\u6700\\u5927\\u9759\\u538b (Pa)","\\u566a\\u97f3 (dB(A))","\\u4e3b\\u7535\\u673a\\u529f\\u7387 (w)","\\u6cb9\\u8102\\u5206\\u79bb\\u5ea6","\\u6c14\\u5473\\u964d\\u4f4e\\u5ea6","\\u7ecf\\u5178 T \\u578b\\u9ec4\\u91d1\\u6bd4\\u4f8b\\u8bbe\\u8ba1","\\u89e6\\u6478\\u611f\\u5e94\\u63a7\\u5236\\u5f00\\u5173","\\u6676\\u900f\\u94a2\\u5316\\u73bb\\u7483\\u64cd\\u63a7\\u9762\\u677f","\\u7ecf\\u5178\\u84dd\\u8272 LED \\u80cc\\u5149\\u663e\\u793a\\u7cfb\\u7edf","17(m\\u00b3\\/min) \\u8d85\\u5f3a\\u5438\\u98ce\\u80fd\\u529b","70dB(A) \\u8d85\\u9759\\u566a\\u97f3","\\u4e8c\\u6863\\u98ce\\u901f\\u8c03\\u8282","\\u53ef\\u8c03\\u8282\\u5ef6\\u65f6\\u63a7\\u5236\\u5f00\\u5173\\u8bbe\\u8ba1","\\u4e00\\u4f53\\u6210\\u578b 80mm \\u6df1\\u96c6\\u70df\\u8154","\\"\\u77ac\\u6d01\\" \\u4e0d\\u9508\\u94a2\\u53cc\\u5c42\\u6ee4\\u6cb9\\u7f51","LED \\u8282\\u80fd\\u51b7\\u5149\\u706f\\uff1a2*1W"]',
                'order' => 0,
                'deleted_at' => '2016-09-09 08:29:10',
                'created_at' => '2016-09-09 08:29:07',
                'updated_at' => '2016-09-09 08:32:17',
            ),
        ));
        
        
    }
}
