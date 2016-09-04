<?php

use Illuminate\Database\Seeder;

class LivesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lives')->delete();
        
        \DB::table('lives')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '习近平奥巴马出席巴黎协定批准文书交存仪式',
                'content' => '<p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">新华社杭州 9 月 3 日电（记者刘华、冯源）国家主席习近平 3 日同美国总统奥巴马、联合国秘书长潘基文在杭州共同出席气候变化《巴黎协定》批准文书交存仪式。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　下午 5 时 30 分许，仪式开始。习近平和奥巴马先后向潘基文交存中国和美国气候变化《巴黎协定》批准文书。习近平随后致辞。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　习近平指出，气候变化关乎人民福祉和人类未来。《巴黎协定》为 2020 年后的全球合作应对气候变化明确了方向，标志着合作共赢、公正合理的全球 气候治理体系正在形成。中国为应对气候变化作出了重要贡献。中国倡议二十国集团发表了首份气候变化问题主席声明，率先签署了《巴黎协定》。中国向联合国交 存批准文书是中国政府作出的新的庄严承诺。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　习近平强调，中国是最大的发展中国家，美国是最大的发达国家，两国在气候变化领域开展了卓有成效的对话和合作。两国共同交存参加《巴黎协定》法 律文书，展示了共同应对全球性问题的雄心和决心。国际社会应该以落实《巴黎协定》为契机，加倍努力，不断加强和完善全球治理体系，创新应对气候变化路径， 推动《巴黎协定》早日生效和全面落实。我们要坚持共同但有区别的责任原则、公平原则、各自能力原则，按照巴黎大会授权，稳步推进后续谈判，有效应对气候变 化挑战。发达国家要履行承诺，提供资金技术支持，增强发展中国家应对气候变化能力。</p><p><ins class="sinaads sinaads-done" id="Sinads49447" data-ad-pdps="PDPS000000044086" data-ad-status="done" style="display: block; overflow: hidden; text-decoration: none;"><ins style="text-decoration: none; margin: 0px auto; width: 300px; display: block; position: relative; overflow: hidden;"><iframe width="300px" height="250px" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="http://x.jd.com/exsites?spread_type=2&ad_ids=1884:5&location_info=0&callback=getjjsku_callback" name="clickTAG=http%3A%2F%2Fsax.sina.com.cn%2Fmfp%2Fclick%3Ftype%3D3%26t%3DMjAxNi0wOS0wMyAyMTozNTo0NwkxODIuMjAwLjE4Ny44MwkxODIuMjAwLjE4NS4xODlfMTQ3MDI0MDkxMi4xMTA4NDEJaHR0cDovL25ld3Muc2luYS5jb20uY24vY2hpbmEveGx4dy8yMDE2LTA5LTAzL2RvYy1pZnh2cWN0dTYxMzcyNDIuc2h0bWwJUERQUzAwMDAwMDA0NDA4NgkxMjJjNGIwNi1mZjc4LTRhYTAtYjdmYy02OGRjZTJiYjAyMmYJRThBMEYzRjQ5QzI3CUU4QTBGM0Y0OUMyNwlhdXRvX2xldmVsOjE4MDEwMHx1c2VyX2dyb3VwOjkwOCw5MDcsOTA0LDkxNCw5MDMsOTA1LDkxMCw5MDIsOTEyLDkwMSw5MTN8dXNlcl90YWc6MjAxMDcsMjAxMDgsMjAxMDksMjA5NTEsMjA5NTYsMjA5NTcsMjA5NTgsMjA5NTksMjA5NTIsMjA5NTMsMjA5NTQsMjA5NTUsMjA5NTEsMjA5NTYsMjA5NTcsMjA5NTgsMjA5NTksMjA5NTIsMjA5NTMsMjA5NTQsMjA5NTUsMjExNjYsMjExNjcsMjExNjgsMjExNjksMjAyMTUsMjAyMTYsMjAyMTAsMjAyMTEsMjAyMTIsMjAyMTMsMjAyMTR8cG9zOlBEUFMwMDAwMDAwNDQwODZ8d2FwX29zOjcwMHx1c2VyX2FnZTo2MDN8dl96b25lOjMxOTAwMCwzMTkwMDF8dXNlcl9nZW5kZXI6NTAxfF92X3pvbmU6MzE5MDAwLDMxOTAwMXxhdXRvX3ByaWNlOjE4MDIwMHxtb2JpbGVfYnJhbmQ6MTIwOXxtb2JpbGVfYnJvd3Nlcjo4MDV8dmVyc2lvbjpnbF9ibTFfMQkJMzE5MDAwfDMxOTAwMQk5OTYzMTk5RjI4N0QJTFkxNTEyMDk2NQlQRFBTMDAwMDAwMDQ0MDg2CTk5NjMxOTlGMjg3RF9wb3J0YWwJQUUJMTY1MTkyOTg2MAk4CS0JLQktCS0JLQktCS0JLQkxCTE0CXN0cmF0ZWd5X25ld2NvZGUJMAk2CW9zOndpbmRvd3M4LjF8YnJvd3NlcjpjaHJvbWV8aWdycF9jdHI6MC4wMDE1MzU1NDc4MjA4MDMzNjc3fHBsYXRmb3JtOm90aGVyfGRldmljZTpvdGhlcg%253D%253D&amp;viewTAG=http%3A%2F%2Fsax.sina.com.cn%2Fmfp%2Fview%3Ftype%3D3%26t%3DMjAxNi0wOS0wMyAyMTozNTo0NwkxODIuMjAwLjE4Ny44MwkxODIuMjAwLjE4NS4xODlfMTQ3MDI0MDkxMi4xMTA4NDEJaHR0cDovL25ld3Muc2luYS5jb20uY24vY2hpbmEveGx4dy8yMDE2LTA5LTAzL2RvYy1pZnh2cWN0dTYxMzcyNDIuc2h0bWwJUERQUzAwMDAwMDA0NDA4NgkxMjJjNGIwNi1mZjc4LTRhYTAtYjdmYy02OGRjZTJiYjAyMmYJRThBMEYzRjQ5QzI3CUU4QTBGM0Y0OUMyNwlhdXRvX2xldmVsOjE4MDEwMHx1c2VyX2dyb3VwOjkwOCw5MDcsOTA0LDkxNCw5MDMsOTA1LDkxMCw5MDIsOTEyLDkwMSw5MTN8dXNlcl90YWc6MjAxMDcsMjAxMDgsMjAxMDksMjA5NTEsMjA5NTYsMjA5NTcsMjA5NTgsMjA5NTksMjA5NTIsMjA5NTMsMjA5NTQsMjA5NTUsMjA5NTEsMjA5NTYsMjA5NTcsMjA5NTgsMjA5NTksMjA5NTIsMjA5NTMsMjA5NTQsMjA5NTUsMjExNjYsMjExNjcsMjExNjgsMjExNjksMjAyMTUsMjAyMTYsMjAyMTAsMjAyMTEsMjAyMTIsMjAyMTMsMjAyMTR8cG9zOlBEUFMwMDAwMDAwNDQwODZ8d2FwX29zOjcwMHx1c2VyX2FnZTo2MDN8dl96b25lOjMxOTAwMCwzMTkwMDF8dXNlcl9nZW5kZXI6NTAxfF92X3pvbmU6MzE5MDAwLDMxOTAwMXxhdXRvX3ByaWNlOjE4MDIwMHxtb2JpbGVfYnJhbmQ6MTIwOXxtb2JpbGVfYnJvd3Nlcjo4MDV8dmVyc2lvbjpnbF9ibTFfMQkJMzE5MDAwfDMxOTAwMQk5OTYzMTk5RjI4N0QJTFkxNTEyMDk2NQlQRFBTMDAwMDAwMDQ0MDg2CTk5NjMxOTlGMjg3RF9wb3J0YWwJQUUJMTY1MTkyOTg2MAk4CS0JLQktCS0JLQktCS0JLQkxCTE0CXN0cmF0ZWd5X25ld2NvZGUJMAk2CW9zOndpbmRvd3M4LjF8YnJvd3NlcjpjaHJvbWV8aWdycF9jdHI6MC4wMDE1MzU1NDc4MjA4MDMzNjc3fHBsYXRmb3JtOm90aGVyfGRldmljZTpvdGhlcg%253D%253D%26userid%3D182.200.185.189_1470240912.110841%26viewlog%3Dfalse"></iframe></ins></ins></p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　习近平强调，中国是负责任的发展中大国，是全球气候治理的积极参与者。中国将落实创新、协调、绿色、开放、共享的发展理念，全面推进节能减排和低碳发展，迈向生态文明新时代。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　奥巴马在致辞中表示，气候变化的威胁是人类面临的越来越严重的挑战。应对气候变化问题需要国际社会共同努力。美中两国为推动国际合作、促成《巴 黎协定》共同发挥了重要作用。今天，美中作为两个最大经济体和最大排放国，同时批准和接受《巴黎协定》具有历史性意义。美方愿同中方继续密切合作，为建造 一个更加安全和繁荣的世界而努力。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　潘基文在致辞中表示，中美率先批准《巴黎协定》，将极大推动该协定于今年内生效。联合国高度赞赏中美两国在应对气候变化挑战方面发挥的领导作用。富有雄心的《巴黎协定》将为全球提供可持续发展新的稳定框架，将为我们共同的家园提供安全保护。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　《巴黎协定》于 2015 年 12 月 12 日在气候变化巴黎大会上通过。2016 年 4 月 22 日，中美同时签署《巴黎协定》。</p><p style="margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;">　　王沪宁、汪洋、栗战书、杨洁篪等出席仪式。</p><p><br/></p>',
                'type' => 1,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:35:43',
                'updated_at' => '2016-09-03 21:35:43',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '南京男子闯红灯被罚 回家取 508 个一毛硬币缴罚款',
            'content' => '<p><span style="color: rgb(51, 51, 51); font-family: Arial, &quot;Microsoft YaHei&quot;; font-size: 14px; line-height: 23px; background-color: rgb(255, 255, 255);">【南京男子闯红灯被罚 回家取 508 个一毛硬币缴罚款】今天上午，南京一男子骑电动车闯红灯被交警拦下。面对 50 元罚款，男子表示没带钱将回家取钱。半小时后男子返回并交出一大袋一毛硬币。民警无奈，只能现场清点其缴纳的罚款，共计 508 个一毛，民警随后将多余的 8 毛退还给男子。（人民日报）</span></p>',
                'type' => 2,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:38:08',
                'updated_at' => '2016-09-03 21:38:08',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '伊朗副石油部长 Zamaninia 称，将支持所有旨在提振油价的举措。',
            'content' => '<p>伊朗副石油部长 Zamaninia：将支持所有旨在提振油价的举措。</p><p>伊朗寻求在维护国家利益的前提下稳定石油市场。</p><p>OPEC 秘书长 Barkindo 未来数周内将会见伊朗石油部长 Zanganeh，将讨论冻产提案相关事宜。（伊朗 Mehr 通讯社）</p><p>(华尔街见闻7x24直播 全新改版) https://live.wallstreetcn.com/gama</p><p><br/></p>',
                'type' => 4,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:46:21',
                'updated_at' => '2016-09-03 21:46:21',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '66 万被盗刷，法院判银行全赔，是怎么做到的？',
            'content' => '<p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">这三步及其所保留的证据被认为是周先生获得诉讼胜利的关键。为什么这么说呢？因为它证明了卡被周先生妥善保存着，同一时间不可能出现在别的地方。</p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">原来，银行卡被盗刷一般都是作案人克隆了一张伪卡，并且掌握了受害人的密码。盗刷一般都是在异地进行。尽管银行对储户有保证存款安全的义务，但是银行往往可以辩称是储户没有妥善地保管好自己的卡号和密码。而 “马上到最近的 ATM 机” 并且保留好凭证很必要，这样便能证明盗刷发生时，用户保管着卡，和盗刷发生地不在同一个地方，毕竟不可能瞬间转移。</p><h2 data-page-model="title" style="margin: 30px 0px 45px; padding: 0px 0px 25px 38px; font-family: &quot;Microsoft YaHei&quot;, SimHei; font-size: 24px; font-weight: 500; line-height: 50px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(150, 150, 150); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/playvideo.png&quot;) 0px 16px no-repeat;">去 ATM 机或银行网点等获得凭证是非常关键又容易被忽略的一步</h2><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">一般来讲，人们发现银行卡被盗刷之后，会做出挂失和报警的反应，但是甚少会去 ATM 机等进行保留凭据的操作，也往往因此吃亏。比如说，今年 7 月广西媒体报道了这样一起案件——市民李女士的银行卡未曾离身，却在去年 10 月、11 月多次被人取走卡内钱款，法院判决银行负一半的赔偿责任。法院审理认为，“本案中，李女士称其银行卡于 2015 年 10 月 22 日发生的 4 笔取款及手续费不是她本人所为，是他人盗取。但李不能证明这一时间其银行卡账号中的存款发生变化时，银行卡在原告身上，无法证实这 4 笔存款在澳门被支取，不是其本人或委托他人持卡发生。” 由此可见，保全证据来证明真实的银行卡被妥善保管着是极其重要的。有人可能会认为，在这里应该出现举证责任倒置，即由强势的银行来举证表示自己已经尽到了妥善保管的义务，并无责任。这是良好的愿望，不过目前的现实是，大部分时候还是需要 “谁主张谁举证”。</p><p><img src="http://img1.gtimg.com/ninja/1/2016/09/ninja147286206263599.jpg" alt="去ATM机查询并获得书面凭证非常关键" title="去ATM机查询并获得书面凭证非常关键" style="border: 0px; vertical-align: middle; margin-bottom: 20px; max-width: 100%;"/><span style="display: block; text-align: left; font-size: 14px; height: auto; line-height: 15px; padding-left: 30px; color: rgb(141, 141, 141); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/picpng.png&quot;) no-repeat;">去 ATM 机查询并获得书面凭证非常关键</span></p><h2 data-page-model="title" style="margin: 30px 0px 45px; padding: 0px 0px 25px 38px; font-family: &quot;Microsoft YaHei&quot;, SimHei; font-size: 24px; font-weight: 500; line-height: 50px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(150, 150, 150); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/playvideo.png&quot;) 0px 16px no-repeat;">这并不复杂的一步早就被专业媒体报道过，并非新鲜事，然而用的人并不多</h2><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">事实上，去 ATM 机等保留证据并非新鲜事，也不需要多高深的法律知识，因为法律专业媒体早就刊登过类似的提醒。人民法院报 2012 年的一篇名为《银行卡被盗刷后的民事责任承担》的报道是这么说的：“储户在收到短信、得知信用卡被盗刷时，应第一时间收存好证据，最好到就近的营业点查询一下卡片的余额并索取凭条，证明卡在自己身上证明自己不在银行卡被盗刷地。” 而中国法院网 2015 年刊登的《银行卡被盗刷未及时留存相关证据难获支持》一文则直截了当地解释了为何去 ATM 机、银行网点等获取凭证是最有效的办法——“司法实践中，有的持卡人请亲戚朋友出庭陈述整个见证过程，但是，因证人与持卡人存在利害关系且缺少辨别所见卡片真伪的专业能力，故此类证言证明力较低，难以作为认定伪卡交易的证据。正确的做法是，第一时间到附近的银行柜台、ATM 机或 POS 机进行刷卡交易。”</p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">这一招的确早就存在，并且司法机关工作人员在法律专业媒体上提醒过，但是用起来的人并不多。只能说，周先生确实是个有心之人。</p><h2 data-page-model="title" style="margin: 30px 0px 45px; padding: 0px 0px 25px 38px; font-family: &quot;Microsoft YaHei&quot;, SimHei; font-size: 24px; font-weight: 500; line-height: 50px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(150, 150, 150); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/playvideo.png&quot;) 0px 16px no-repeat;">国人保全证据的意识并不强，在纠纷很多的年代，这一短板需要补足</h2><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">一些法院系统的微信公号也转载了周先生的报道，表示出对其良好的证据保全意识的嘉许。不过，恐怕多数人没有周先生这么强烈的证据意识，而这正是国人所欠缺的。举两个例子。</p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">其一是家暴案件。根据北京青年报今年的报道，从 2014 年至今年妇女节，北京二中院审结的离婚案件中，当事人主张受到家庭暴力的案件共有 80 起，但法院最终认定存在家庭暴力的案件却仅有 5 起。因为当事人提供的证据大多难以形成完整的证据链。所以法院建议当事人们要提高证据意识。比如说，一位女士提供了就诊证明等表示自己被丈夫打伤。但是由于被打时并未报警或者求助外力，因此难以证明伤害和家暴之间的关系。</p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">其二是民间借贷案件。论文《民间借贷、虚假诉讼与当事人的证据意识》提及，浙江民间借贷纠纷高发的原因有宏观经济形势等三个，然而根本原因可以归结为证据意识的缺失。证据意识缺失在民间借贷诉讼中最为直接的表现是当事人举证责任的履行不能。</p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">国人的证据意识差可以从历史、文化、法律沿革等多方面找到原因，比如重视人情而轻契约，再比如，在司法中重实体轻程序等等。总之，不管哪种原因，证据意识都有待加强。</p><h2 data-page-model="title" style="margin: 30px 0px 45px; padding: 0px 0px 25px 38px; font-family: &quot;Microsoft YaHei&quot;, SimHei; font-size: 24px; font-weight: 500; line-height: 50px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(150, 150, 150); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/playvideo.png&quot;) 0px 16px no-repeat;">本案例的一大启示是，尽可能地把证据以书面形式固定下来</h2><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">之所以能够证明周先生本人和卡不在盗刷的地方，主要靠的是 ATM 的回执，这是书面证据，比亲戚朋友的出庭陈述要好用得多。通过这个事例，不仅仅能够让我们在银行卡被盗刷的恐慌中学会正确的保护自己的招数，更是可以举一反三，认识到保存书面证据的好处和威力。前述论文《民间借贷、虚假诉讼与当事人的证据意识》也特别建议了这一点，在经济交往中，增强收集和保留证据的意识，尽量将已经发生的事实以书面形式固定下来。比如说借钱的时候，可以订立好合同，而不仅仅是一个简单的借条那么简单。当然，一些人连借条都不打。再比如，在打钱的时候，尽可能通过银行转账而非当面点钱。</p><p><img src="http://img1.gtimg.com/ninja/1/2016/09/ninja147286210972878.png" alt="详细的借款合同是很好的书面证据" title="详细的借款合同是很好的书面证据" style="border: 0px; vertical-align: middle; margin-bottom: 20px; max-width: 100%;"/><span style="display: block; text-align: left; font-size: 14px; height: auto; line-height: 15px; padding-left: 30px; color: rgb(141, 141, 141); background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/picpng.png&quot;) no-repeat;">详细的借款合同是很好的书面证据</span></p><p data-page-model="text" style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 34px; text-indent: 2em;">总之，任何纠纷或者麻烦，都可以想想是否有书面证据可以保存下来证明，这样能够更好地在纠纷中保护自己的权益，而非哀叹或者抓瞎。</p><h2 style="margin: 0px; padding: 0px; display: inline-block; width: 95px; height: 95px; background: url(&quot;http://mat1.gtimg.com/www/topicmenu/topic/topicallpic.png&quot;) 0px 0px no-repeat;"></h2><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px;">银行卡被盗刷的案例层出不穷，但是能够清醒又机智地保留证据的周先生为大家提高证据意识上了非常良好的一课。法律学者何家弘认为，所谓证据意识，是指人们在社会生活和交往中对证据作用和价值的一种觉醒和知晓的心理状态，是人们在面对纠纷或处理争议时重视证据并自觉运用证据的心理觉悟。这样的觉悟，在现代社会多多益善。</p><p><br/></p>',
                'type' => 1,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:47:29',
                'updated_at' => '2016-09-03 21:51:56',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '不动产权证书来了 你的房本会作废吗？',
            'content' => '<p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">近期有媒体报道，我国目前 31 个省（区、市）中，除了西藏自治区以外，都已经发放出了首本不动产权证书。也就是说，房产证和土地使用证就要下岗了，由不动产权证书替代。<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">这不动产权证书到底是个啥？跟过去的房产证相比到底有什么区别？</strong></span></p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147263693013262.jpg" alt="" title="" style="margin: 10px auto; padding: 0px; border: 0px; vertical-align: middle; display: block;"/></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">先来看看不动产权证是什么：<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">根据《物权法》，“不动产权属证书是权利人享有该不动产物权的证明。”</strong></span>&nbsp;我国目前全面启用的统一不动产登记簿证样式，包括《不动产登记簿》《不动产权证书》《不动产登记证明》等。其中，不动产登记簿由不动产登记机构负责管理，并永久保存；不动产权证书则向申请人发放。进行房屋交易需以登记簿为准。（不动产权证书内页照片）</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">过去，我国的土地和房屋由不同的部门登记发证，买个房子，不仅要到房产部门办理房屋所有权证，还要到国土资源部门办理土地使用证，而现在这俩证要合二为一，成为不动产权证了。</strong></span></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">那合并以后，我的老房本还有效吗？<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">当然！按照国家 “不变不换” 的原则，权利不变动，证书不更换，只要不动权变了、或是你买了新房子，那么就得重新登记了。</strong></span></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">那这不动产权证书和过去的 “房本” 相比，有什么不同呢？首先，不动产权证的内容更详细了。据媒体报道，房本的内页内容仅包括房屋所有权人、共有情况、房屋坐落、登记时间、房屋性质、规划用途、房屋状况和土地状况；不动产权证的封面为红色，证书的全称为《中华人民共和国不动产权证书》，里面除了权利人、共有情况、坐落位置等原来房产证内容外，还增加了镭射区、不动产单元号、使用期限等内容。</p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147263700142683.jpg" alt="" title="" style="margin: 10px auto; padding: 0px; border: 0px; vertical-align: middle; display: block;"/></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">这不动产单元号非常重要，它具有唯一代码，相当于证书记录的不动产在全国范围内唯一的 “身份证号”，通过不动产单元号就可以锁定该不动产的信息。</strong></span>（担心楼市调控 离婚买房人挤爆上海民政局）</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">其次，<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">过去的房本规避了房屋的使用年限和房屋价格，而 “不动产证” 则对使用年限进行了明确规定。</span></strong>不过，根据国土资源部官方微博介绍，这 “使用期限” 指的是土地使用权和海域使用权的期限，而不是房屋所有权。而且，房屋所有权本身也不存在什么期限的问题。</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">此外，据央视财经报道，<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">《不动产权证书》包括单一版和集成版两个版本，集成版用于记载同一权利人在同一登记辖区内享有的多个不动产单元上的不动产权利。</strong></span>比如说你有两套房产在同一宗土地上，那么两套房产登记在同一个不动产登记簿上，也就是集成版证书；如果两套房产在不同的宗地上，那么仍旧登记在两个不动产登记簿证上，也就是单一版的证书。在推广初期，将会主要采用单一版证书的形式。</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">也就是说，一证挂多房很快就要实现了。</strong></span></p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147263703013802.jpg" alt="" title="" style="margin: 10px auto; padding: 0px; border: 0px; vertical-align: middle; display: block;"/></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">从古代的地契到今天的不动产权证书，“房本” 经历了一段相当长的历史才发展到今天。此前，北京日报报道过，在中国古代，用于证明房屋买卖的凭证是房契。房契是契约的一种，按照今天的标准去看应该属于房屋买卖合同。古时候的房契往往只有一份，并且只会在上面写明出卖方是谁，中间人、经手人是谁，而买方的名字一般是不出现的。买卖完成后，房契一般交由买方收藏。<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">所以在古时候，如果你的房契丢了给别人捡去，那他完全可以自称买方，并要求房屋的居住者腾退。</strong></span>（图：古代房契）</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">1950 年，我国颁布了《中华人民共和国土地改革法》，1952 年土地改革基本完成，政府开始向房屋所有人颁发 “土地房产所有证”。到了上世纪 80 年代，房产证和土地证开始出现。到了<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">&nbsp;1997 年</span></strong>，国家要求各地统一发放房屋所有权证，并且在证上加设了共有人一栏，再对记载了共有人的发放一个房屋共有权证，<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">房屋所有权证加上房屋共有权证，就是 “房产证”。</span></strong></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">但是房产证是你对所购房屋行使占有、使用、收益和处分的权利的证件，在我国，房产所有权和土地使用权是分离的，所以买个房子，还需要土地使用证。不过，就像我们之前说的，不动产权证颁发后，这两者就合并成为不动产权证了。</p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147263706332215.jpg" alt="" title="" style="margin: 10px auto; padding: 0px; border: 0px; vertical-align: middle; display: block;"/></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">不动产权证对于保护权利人合法权益、规范登记行为等具有重要的意义。此外，不动产权证颁发以后，买房手续便捷了，大家再也不用多部门来回跑了，直接去当地的不动产登记中心一站完成就可以了。（图：领到不动产权证书的市民）</p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">去办理不动产权登记证时，需要房主本人去办理，并带上房本主人的身份证、购房合同、发票、开发公司出具的结算单等相关材料。</p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147263708717931.jpg" alt="" title="" style="margin: 10px auto; padding: 0px; border: 0px; vertical-align: middle; display: block;"/></p><p data-page-model="text" style="margin-top: 24px; margin-bottom: 24px; padding: 0px; border: 0px; vertical-align: baseline; word-wrap: break-word; font-size: medium; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background-color: rgb(244, 244, 244);">【送福利：<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">继承、赠送和出售 到底怎样把房子给子女最划算？（含继承、赠送和出售 3 种方式税费表）</strong></span>】想知道<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">怎样把房子过渡给子女才最划算</span></strong>的读者，可以关注 MissMoney 的微信公号（ID：<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">missmoneytf&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0);">或</span>&nbsp;扫描右方二维码</span></strong>）, 然后回复关键字 “<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(151, 72, 6);">不动产</span></strong>”，小 M 马上告诉你！</p><p><br/></p>',
                'type' => 4,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:48:01',
                'updated_at' => '2016-09-03 21:48:01',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '滕飞：银行股怎么投资？不能只看账面数据',
            'content' => '<p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">腾讯 “证券研究院” 特约 滕飞 注册金融分析师 CFA，中国光大银行投资经理</strong></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">上市商业银行的半年报已全部披露，作为我国金融业体量最庞大、系统重要性最强的机构，银行业的业绩变化无不牵动着投资者的心。但是，在制度红利日渐消散、竞争更加激烈的时代，银行业的黄金时期早已经过去，未来或许没有白银时代，直接进入白热化的 “战国时代”，各家银行拼刺刀、拼实力的时候到了。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">从各家银行披露的半年报经营数据看，基本都在预期之内，可概括为几个特征：一是利润增速继续下滑，大部分都为个位数增长，四大行中有三家增长不到 1%，股份制银行中除了浦发银行增速达到 12% 以外，其他股份制银行利润增速均为个位数，但城商行中不乏亮点，南京银行增速达到 22%，宁波银行也达到 16%，在所有上市银行中排名前列，意味着银行业利润出现差异和分化，过去大家躺着赚钱的时代已经过去，有竞争优势、差异化战略的银行才能取得利润的较快增长，如四大行中唯一利润两位数增长的中行，也是归功于海外业务的收入快速增长。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">二是不良贷款率继续上升，在经济下行压力之下，企业收入增长放缓，盈利能力下降，对银行贷款的还款能力下降，使银行不良贷款不断上升。银行的不良贷款率仍在上升的过程中，并没有结束，并且不良贷款对银行的盈利会构成更大的压力，因为不良的消化需要计提拨备，直接侵蚀银行的利润。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">三是银行的部分监管指标低于或逼近监管红线。银监会对银行有拨贷比和拨备覆盖率的监管，拨贷比红线为 2.5%，但是随着薄被用于消化不良贷款，大部分银行的拨贷比都在 2.5% 以下，没有达到监管要求。拨备覆盖率监管要求为 150%，工行上半年已经低于 150%，而还有好几家银行仅略高于 150%，这意味着银行过去几年计提的拨备被大量用于消化不良贷款，而新计提拨备由需要扣减利润，“鱼与熊掌不可兼得”，只能先保利润不为负增长，谁都不愿成为第一家利润负增长的银行，成为媒体的焦点。拨备反映了预期损失，经济上行期，通常不良贷款率低，预期损失也较低，因而法定计提拨备较少；而在经济下行期，不良贷款率上升、预期损失增加，要求计提拨备增加。这说明当前拨备监管制度实际是顺周期的，银行在宏观经济低迷时会面临拨备不足、利润增长快速下降、放贷能力受限的压力，加剧了宏观经济和银行自身的顺周期性。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">商业银行始终面临平衡好风险与收益、流动性安全与盈利能力、短期效益与长期稳健发展的关系。由于资本天然的逐利性，银行难以依靠自身实现平衡发展，有必要通过外部监管对其约束，形成有效制衡机制。目前我国商业银行主要面临外部约束，是资本约束、流动性约束和拨备约束。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">资本充足率对银行的约束主要体现在三方面，一是约束资产规模的扩张，不能盲目追求做大规模；二是控制信贷规模过快扩张；三是限制高风险资产的投放，如非自用不动产、衍生金融品等。风险资产的扩张要以资本的增加为基础，而资本来源主要包括公开上市、利润补充和次级债等二级资本工具，资本的增长有个累积过程，而这也决定了银行规模的扩张是稳步、循序渐进的，一味盲目扩大规模而忽视资本的约束，必然带来风险的上升。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">资本约束要求商业银行具有长期生存的能力，拥有足够的资本吸收非预期损失，以防银行在顺周期时规模扩张过快；流动性约束要求银行具备短期生存的能力，在市场流动性紧张时能坚持一段时间，防止因过度追求利润、期限错配程度过高而引发流动性风险。拨备约束要求商业银行具备吸收未来资产损失的能力，有能力提前计提未来的预期损失。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">目前，随着利率市场化改革已近完成、经济持续下行以及互联网金融的冲击，传统商业银行所具有的准入壁垒和垄断优势已经在逐渐消逝，虽然还有金融牌照的优势，还有客户基础和基础资金结算的优势，但随着年轻一代的崛起以及他们对财富态度、对新鲜事物的接受程度都要远高于老一辈，对互联网的认可度将促使银行这种依赖传统网点的机构的相对竞争力下降。当然，银行也在拥抱互联网，各大银行的电子银行业务也在如火如荼的发展，也在与支付宝、微信等互联网巨头进行合作，未来银行的资金结算功能将更加弱化，只有进行转型，提升主动管理的能力，增加财富管理、投资银行、金融市场等业务的比重，从服务的质量上赢得客户，才能在金融自由化的时代赢得竞争力。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">整体而言，上市银行的半年报符合市场的预期，并没有太多的意料之外。中国银行股的估值向来低于美国，部分原因是净利润增速的不可持续以及隐含的不良贷款较高，因此对于银行股的价值不能只看账面数据，还要深挖背后的股市和逻辑。尤其值得注意的是，大型国有银行的股权大部分都集中在财政部或汇金的手里，他们不会大规模抛售这部分股权，但是可以通过调整少量的仓位而影响银行股的股价，比如市场很低迷时增持银行股以提振市场信心，然后当市场恢复时择机减持。因此，对于银行股的走势需要判断国家队的意图，而且银行股在上证指数中的权重较大，是稳定指数的利器，如前段时间上证指数突破 3100 点很大程度是银行股的功劳，银行股成交放量了。但是，在大牛市到来之前，在利润增速递减的情况下，银行股整体或许不会有太好的表现，但是作为指数的重要权重，进一步下跌的空间也不会太大。（本文仅代表个人观点，与所在单位无关）</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">免责声明：</strong><em style="margin: 0px; padding: 0px; border: 0px;">本文内容及观点仅供参考，不构成任何投资建议也不代表本平台意见，投资者据此操作，风险自担。一切有关本文涉及上市公司的准确信息，请以交易所公告为准。股市有风险，入市需谨慎。</em></p><p><br/></p>',
                'type' => 4,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:49:00',
                'updated_at' => '2016-09-03 21:49:00',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '吴幼珉：速评同股不同权 到底好不好？',
            'content' => '<p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">腾讯 “证券研究院” 特约 吴幼珉 香港著名财经评论员</strong></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">股票 “同股同权” 就是一股一票；上市公司所有股东在股东大会等场合对公司重大事情的决策权权重由其所持股票的数量决定。近日，新加坡交易所称它的 “上市顾问委员会” 以大比数支持实行 “双重股权架构” 计划。权力差别最多能达 “一股十票”，惟公司上市后不能再发行 “多票权股份”（按比例供股除外）。“多票权股份” 转手时，也会变回普通股；如此等等。新交所暂时还没有推出该方案的时间表。那或许是一种招徕，笔者估计新交所会等待有需要的时候才实行该方案，那会对它更为有利。不少专家已经就 “同股同权” 或 “同股不同权” 利弊进行过讨论，故本文不再重复有关论述。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">近日中国香港一些传媒和业内人士则对新交所的新方案进行了评述。上一次有关的讨论止于去年 10 月，港交所考虑香港证监会意见后，搁置 “同股不同权” 草案的撰写和市场咨询。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">事由则是阿里巴巴 2013 年希望在中国香港上市，“同股同权” 的上市规则与保障马云和管理层控制权的企业架构相抵触。港交所不愿為此修改上市规则，阿里则转向纽约证券交易所上市。现在，阿里已经是一间在美国挂牌，主业留在国内的企业。企业选择上市地点有它主要股东的全盘考虑，其中包括目标股市的规模、市盈率、日平均成交投量、市场机制、企业的财务情况与合规程度、地理位置、文化等等。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">新加坡是一个成功的亚洲城市国家；但新加坡股市规模和成交投量与目前中国香港的股市仍不相同。大象是不会选择在洗脸盆里洗澡的。我并不了解阿里的上市过程，当初它选择在纽约上市，当然有企业自己的考量。因此，现在断言由于新交所的新方案是为期过早了一些。当然，如果，新交所 “上市顾问委员会” 的决定另有内情，那会是另一回事；而那样的事情并非不可能。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">免责声明：</strong><em style="margin: 0px; padding: 0px; border: 0px;">本文内容及观点仅供参考，不构成任何投资建议，投资者据此操作，风险自担。一切有关本文涉及上市公司的准确信息，请以交易所公告为准。股市有风险，入市需谨慎。</em></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">微信扫一扫，关注最专业的资本市场智库平台——腾讯 “证券研究院” 公众号：（QQ-StockViews）</strong></p><p><br/></p>',
                'type' => 8,
                'thumbnail' => '',
                'deleted_at' => '2016-09-03 21:51:45',
                'created_at' => '2016-09-03 21:49:18',
                'updated_at' => '2016-09-03 21:51:45',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '林采宜：不确定性背景下可选择的避险投资',
            'content' => '<p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">编者按：</strong>随着全球金融市场风险偏好的下降，作为一种避险资产，黄金受到越来越多的投资者的关注和青睐。而在 A 股目前波动日益减小、各板块均无大机会的背景下，黄金投资也自然而然成为一个重要的投资手段。那国内居民投资黄金有哪些渠道？优劣几何？国泰君安证券首席经济学家林采宜就为投资者进行了详解。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">腾讯 “证券研究院” 林采宜 国泰君安证券首席经济学家</strong></p><h2 data-page-model="title" style="margin: 0px; padding: 0px 0px 0px 50px; border: 0px; color: rgb(51, 51, 51); font-size: 24px; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background: url(&quot;http://mat1.gtimg.com/finance/limeizhang/observer/image/subtitle.png&quot;) no-repeat rgb(255, 255, 255);">一、“乱世黄金”——全球经济的不确定性使得黄金成为市场新宠</h2><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">随着世界经济的不确定性增加，全球金融市场的风险偏好在下降，作为一种避险资产，黄金受到越来越多的投资者的关注和青睐。而负利率的蔓延以及国内无风险利率的不断下行，导致配置黄金资产的机会成本下降。因此，越来越多的国内投资者开始关注黄金的价格走势以及投资渠道。</p><h2 data-page-model="title" style="margin: 0px; padding: 0px 0px 0px 50px; border: 0px; color: rgb(51, 51, 51); font-size: 24px; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background: url(&quot;http://mat1.gtimg.com/finance/limeizhang/observer/image/subtitle.png&quot;) no-repeat rgb(255, 255, 255);">二、“供不应求”——投资需求增加推升黄金价格</h2><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">目前全球黄金储量 17.6 万吨，每年开采量仅占存量 1.5％，其中 50％用于首饰， 10－12％用于工业领域，38％来自投资需求。从供求特征来看，黄金是一种需求弹性大，供给弹性非常小的特殊商品，因此，黄金的价格主要由 “需求” 主导，由于工业用金和首饰用金的需求相对稳定，影响黄金价格的核心因素是市场的投资需求。这也是今年上半年以来，黄金价格持续上行的主要原因。</p><h2 data-page-model="title" style="margin: 0px; padding: 0px 0px 0px 50px; border: 0px; color: rgb(51, 51, 51); font-size: 24px; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background: url(&quot;http://mat1.gtimg.com/finance/limeizhang/observer/image/subtitle.png&quot;) no-repeat rgb(255, 255, 255);">三、黄金也是汇率动荡的避难所</h2><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">截至 7 月份，国内 M1 总量达 44.29 万亿，月度增速高达 25％，远远高于 M2 的增长率（后者 10％），M1、M2 增长率剪刀差的扩大说明越来越多多的资金没有进入实体投资领域，而是处于游离状态。热钱澎湃，在人民币汇率承压的预期下，一旦房地产价格趋势出现逆转，不排除有大量资金流向黄金以求保值（境内居民兑换美元的政策上限是 5 万美元，不足以充分满足自从置换需求）。</p><h2 data-page-model="title" style="margin: 0px; padding: 0px 0px 0px 50px; border: 0px; color: rgb(51, 51, 51); font-size: 24px; line-height: 28px; font-family: &quot;Microsoft YaHei&quot;; white-space: normal; background: url(&quot;http://mat1.gtimg.com/finance/limeizhang/observer/image/subtitle.png&quot;) no-repeat rgb(255, 255, 255);">四、 国内居民投资黄金的渠道</h2><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">作为避险资产，黄金的配置如此必要，那么，国内居民配置黄金的途径有哪些呢？</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">1. 商业银行柜台渠道</strong></p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147260062449854.jpg" alt="" title="" style="border: 0px; margin: 0px; padding: 0px;"/></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">2. 基金形式</strong></p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147260063427187.jpg" alt="" title="" style="border: 0px; margin: 0px; padding: 0px;"/></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">3. 上海期货交易所</strong></p><p><img src="http://img1.gtimg.com/ninja/1/2016/08/ninja147260064388519.jpg" alt="" title="" style="border: 0px; margin: 0px; padding: 0px;"/></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);">上述投资渠道不同，投资标的不同，风险和交易成本也略有差别，投资者可根据自己的风险偏好、专业背景和交易经验选择适合自身的投资方式。</p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">免责声明</strong>：<em style="margin: 0px; padding: 0px; border: 0px;">本文内容及观点仅供参考，不构成任何投资建议，投资者据此操作，风险自担。一切有关本文涉及上市公司的准确信息，请以交易所公告为准。股市有风险，入市需谨慎。</em></p><p data-page-model="text" style="margin-top: 30px; margin-bottom: 30px; padding: 0px; border: 0px; line-height: 28px; color: rgb(51, 51, 51); text-indent: 2em; font-family: simsun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">微信扫一扫，关</strong></p><p><br/></p>',
                'type' => 8,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:49:36',
                'updated_at' => '2016-09-03 21:49:36',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => '国产欧蓝德正式下线 预售 16-24 万元',
            'content' => '<p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);">广汽<a class="a-tips-Article-QQ" target="_blank" title="三菱" href="http://data.auto.qq.com/car_brand/173/" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(83, 109, 166);">三菱</a>国产欧蓝德于 8 月 26 日正式下线，新车在外观和内饰方面原汁原味的保持了进口版的设计，新车预售价 16-24 万元。</p><p style="text-align:center;margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><img alt="国产欧蓝德正式下线 预售16-24万元" src="http://img1.gtimg.com/auto/pics/hv1/210/203/2120/137904975.png" style="border: 0px; vertical-align: bottom; max-width: 640px;"/></p><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);">三菱现款欧蓝德曾于 2015 年 8 月 24 日正式以进口方式进入国内销售，时隔不到一年后，广汽三菱正式将这款产品引入国产，新车原汁原味的保持了进口版的设计，家族式 X 型前脸造型犀利，黑色 “大嘴” 配以镀铬装饰条勾边，突显运动风格。</p><p style="text-align:center;margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><img alt="国产欧蓝德正式下线 预售16-24万元" src="http://img1.gtimg.com/auto/pics/hv1/212/203/2120/137904977.png" style="border: 0px; vertical-align: bottom; max-width: 640px;"/></p><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);"><br/></p><p><a class="rv-js-autoplay enabled" target="_self" bosszone="bofang_button_close" style="outline: 0px; float: right; display: block; width: 32px; height: 18px; padding: 2px; margin-top: 10px; margin-left: 12px; border-radius: 10px; font-size: 0px; text-indent: -9999px; cursor: pointer; transition: background 0.3s ease-out; background-color: rgb(0, 108, 183);"><span style="display: block; width: 18px; height: 18px; border-radius: 50%; margin-left: 14px; box-shadow: rgba(0, 0, 0, 0.6) 1px 1px 3px; transition: all 0.3s ease-out; background-color: rgb(255, 255, 255);">自动播放开关</span></a><span style="font-size: 14px; float: right;">自动播放</span></p><h2 class="rv-title" style="margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;"><a href="http://v.qq.com/page/l/q/j/l0323rjmtqj.html" target="_blank" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; font-size: 18px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">原汁原味保留进口设计 国产欧蓝德解析</a></h2><p><a class="prev disabled" target="_self" bosszone="rvideo_list_forward" style="color: rgb(80, 80, 80); outline: 0px; display: block; position: absolute; top: 0px; width: 17px; height: 100px; line-height: 100px; font-size: 14px; font-weight: 700; font-family: NanumMyeongjo, 宋体, sans-serif; text-align: center; cursor: not-allowed; left: 0px; background-color: rgba(47, 47, 47, 0.8);">&lt;</a><a class="next" target="_self" bosszone="rvideo_list_back" style="color: rgb(163, 163, 163); outline: 0px; display: block; position: absolute; top: 0px; width: 17px; height: 100px; line-height: 100px; font-size: 14px; font-weight: 700; font-family: NanumMyeongjo, 宋体, sans-serif; text-align: center; cursor: pointer; right: 0px; background-color: rgba(47, 47, 47, 0.8);">&gt;</a></p><ol class="rv-playlist-list rv-cf list-paddingleft-2" style="list-style-type: none;"><li><p><a data-vid="l0323rjmtqj" data-idx="0" href="http://v.qq.com/page/l/q/j/l0323rjmtqj.html" target="_self" class="current" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer; background: rgb(16, 16, 16);"><img src="http://vpic.video.qq.com/84946696/l0323rjmtqj_ori_1.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="l0323rjmtqj" data-idx="0" href="http://v.qq.com/page/l/q/j/l0323rjmtqj.html" target="_self" class="current" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer; background: rgb(16, 16, 16);"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(255, 109, 26); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">原汁原味保留进口设计 国产欧蓝德解析</span></a></p><p></p></li><li><p><a data-vid="d0323t19740" data-idx="1" href="http://v.qq.com/page/d/4/0/d0323t19740.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/15116101/d0323t19740_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="d0323t19740" data-idx="1" href="http://v.qq.com/page/d/4/0/d0323t19740.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">以梦为马青海寻梦 2016 欧蓝德朝圣之旅</span></a></p><p></p></li><li><p><a data-vid="k0322eju4gq" data-idx="2" href="http://v.qq.com/page/k/g/q/k0322eju4gq.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/83585634/k0322eju4gq_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="k0322eju4gq" data-idx="2" href="http://v.qq.com/page/k/g/q/k0322eju4gq.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">广汽三菱欧蓝德沙漠越野</span></a></p><p></p></li><li><p><a data-vid="j0308w1h1ev" data-idx="3" href="http://v.qq.com/page/j/e/v/j0308w1h1ev.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/3842449/j0308w1h1ev_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="j0308w1h1ev" data-idx="3" href="http://v.qq.com/page/j/e/v/j0308w1h1ev.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">看不上国产！25 万哪些进口 SUV 值得买？</span></a></p><p></p></li><li><p><a data-vid="s0322hfdyru" data-idx="4" href="http://v.qq.com/page/s/r/u/s0322hfdyru.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/20439756/s0322hfdyru_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="s0322hfdyru" data-idx="4" href="http://v.qq.com/page/s/r/u/s0322hfdyru.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">新款三菱帕杰罗劲畅 车型配置亮点介绍</span></a></p><p></p></li><li><p><a data-vid="e0323exuciw" data-idx="5" href="http://v.qq.com/page/e/i/w/e0323exuciw.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/56969698/e0323exuciw_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="e0323exuciw" data-idx="5" href="http://v.qq.com/page/e/i/w/e0323exuciw.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">你认同吗？外媒评选 2016 年最佳大型 SUV</span></a></p><p></p></li><li><p><a data-vid="t0323l3hi9r" data-idx="6" href="http://v.qq.com/page/t/9/r/t0323l3hi9r.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/45537207/t0323l3hi9r_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="t0323l3hi9r" data-idx="6" href="http://v.qq.com/page/t/9/r/t0323l3hi9r.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">普拉多算娘炮?！这 4 台硬派 SUV 竟是军车背景</span></a></p><p></p></li><li><p><a data-vid="f0323ce9mhu" data-idx="7" href="http://v.qq.com/page/f/h/u/f0323ce9mhu.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/91466489/f0323ce9mhu_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="f0323ce9mhu" data-idx="7" href="http://v.qq.com/page/f/h/u/f0323ce9mhu.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">车辆介绍 8 款 50 万内 SUV 集中测试（上）</span></a></p><p></p></li><li><p><a data-vid="k03202dwvrz" data-idx="8" href="http://v.qq.com/page/k/r/z/k03202dwvrz.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/92740543/k03202dwvrz_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="k03202dwvrz" data-idx="8" href="http://v.qq.com/page/k/r/z/k03202dwvrz.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">2016 款三菱全新欧蓝德 车展内外动态实拍</span></a></p><p></p></li><li><p><a data-vid="x0319hnkaih" data-idx="9" href="http://v.qq.com/page/x/i/h/x0319hnkaih.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/9016024/x0319hnkaih_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="x0319hnkaih" data-idx="9" href="http://v.qq.com/page/x/i/h/x0319hnkaih.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">试驾三菱欧蓝德 进口品质合资价</span></a></p><p></p></li><li><p><a data-vid="z0313ompowi" data-idx="10" href="http://v.qq.com/page/z/w/i/z0313ompowi.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/8056316/z0313ompowi_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="z0313ompowi" data-idx="10" href="http://v.qq.com/page/z/w/i/z0313ompowi.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">比亚迪唐 VS 欧蓝德爬陡坡 比亚迪唐完胜 这个...</span></a></p><p></p></li><li><p><a data-vid="t0306kt38bx" data-idx="11" href="http://v.qq.com/page/t/b/x/t0306kt38bx.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><img src="http://vpic.video.qq.com/23426593/t0306kt38bx_160_90_3.jpg" style="border: 0px; vertical-align: top; width: 160px; height: 90px; opacity: 1; transition: opacity 0.3s ease-out; max-width: 640px;"/></a></p><p><a data-vid="t0306kt38bx" data-idx="11" href="http://v.qq.com/page/t/b/x/t0306kt38bx.html" target="_self" class="" bosszone="rvideo_list_title" style="color: rgb(0, 0, 0); text-decoration: none; outline: 0px; display: block; position: relative; width: 160px; height: 90px; padding: 5px; cursor: pointer;"><span style="display: block; height: 18px; margin: 5px; padding: 5px 10px 2px; overflow: hidden; font-family: Arial, sans-serif; color: rgb(171, 171, 171); transition: all 0.2s ease-out; background-color: rgba(0, 0, 0, 0.8);">广汽三菱欧蓝德实车曝光</span></a></p><p></p></li></ol><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);">新车尾灯组采用 LED 光源，仅倒车灯位置相比进口版有所调整。并在后备厢右侧增加 “广汽三菱” 字样，从而表明其国产身份。此外，新车还将继续使用进口版车型上的花瓣形双色 18 英寸轮圈。</p><p style="text-align:center;margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);"><img alt="国产欧蓝德正式下线 预售16-24万元" src="http://img1.gtimg.com/auto/pics/hv1/213/203/2120/137904978.png" style="border: 0px; vertical-align: bottom; max-width: 640px;"/></p><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);">动力方面，新车将继续代号为 4J11 的 2.0L 自然吸气发动机和代号为 4J12 的 2.4L 自然吸气发动机，其中 2.4L 车型的最大功率 169 马力，峰值扭矩 235 牛 · 米，相比进口版增加 15 牛 · 米。传动方面，与发动机匹配的将是一台 CVT 变速箱。</p><p style="margin-top: 0px; margin-bottom: 28px; padding: 0px; line-height: 28px; word-break: break-word; font-family: 微软雅黑, Arial, Helvetica, sans-serif; white-space: normal; text-indent: 2em; background-color: rgb(255, 255, 255);"><span style="color:#ff0033;font-family:Verdana"><strong>版权声明：本文系腾讯汽车独家稿件，版权为腾讯汽车所有。欢迎转载，请务必注明出处（腾讯汽车）及作者，否则必将追究法律责任。</strong></span></p><p><br/></p>',
                'type' => 2,
                'thumbnail' => '',
                'deleted_at' => NULL,
                'created_at' => '2016-09-03 21:50:08',
                'updated_at' => '2016-09-03 21:50:08',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => '《纽约时报》总裁兼 CEO：“视频直播太伟大了！”',
            'content' => '<h1 style="margin: 0px; padding: 0px 0px 16px; font-size: 26px; font-weight: normal; font-family: 微软雅黑;">《纽约时报》总裁兼 CEO：“视频直播太伟大了！”</h1><p><span class="color-a-1" bosszone="jgname" style="float: left;"><a target="_blank" href="http://cul.qq.com/" style="outline: none; color: rgb(102, 102, 102); text-decoration: none;">腾讯文化</a></span><span class="infoMblog" id="mbSourceCard" style="position: relative; z-index: 11; float: left;"><span class="color-a-2" bosszone="jgmblog" style="float: left;"></span></span><span class="color-a-3" style="float: left; margin: 0px 8px;">崔莹</span><span class="article-time" style="margin-top: 4px; height: 12px; padding-right: 13px; padding-left: 5px; line-height: 12px; float: left;">2016-09-03 07:17</span><span class="bor-tit" style="display: inline; width: 1px; height: 13px; overflow: hidden; margin-left: 0px; margin-right: 9px; margin-top: 4px; float: left; background: rgb(232, 232, 232);"></span></p><p><a class="shareBtn-hd" style="display: inline-block; position: relative; z-index: 3; width: 64px; height: 23px; padding-left: 8px; border-bottom-style: none; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(255, 255, 255); color: rgb(103, 103, 103); cursor: pointer;">我要分享<span style="position: absolute; right: 6px; top: 8px; width: 0px; height: 0px; font-size: 0px; line-height: 0; border-width: 4px; border-style: solid; border-color: rgb(139, 140, 142) rgb(255, 255, 255) rgb(255, 255, 255); transition: transform 0.2s ease-in; transform: rotate(0deg);"></span></a></p><p><span class="r all-number-comment" style="float: right; padding-left: 18px;"><a href="http://coral.qq.com/1524864709" id="cmtNum" bosszone="Ncomm" target="_blank" style="outline: none; color: rgb(80, 111, 165); text-decoration: none; display: inline-block; height: 23px; padding-left: 36px; padding-right: 10px; font-weight: bold; font-size: 13px; font-family: tahoma; background-image: url(&quot;http://mat1.gtimg.com/news/dc/images/pl_icon.png&quot;); background-color: rgb(235, 245, 253); background-position: left 0px; background-repeat: no-repeat;">47</a></span></p><p><a style="outline: none; display: block; width: 20px; height: 20px;"></a></p><p class="titdd-Article" style="margin-top: -20px; margin-bottom: 29px; padding: 12px 18px 10px; font-size: 14px; background: rgb(243, 243, 243);">[<strong>摘要</strong>]“在美国，我们是较早开始视频直播的媒体。到目前为止，我们的视频直播已经进行了三四个月，有一百多位记者参与。”</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;"><strong>腾讯文化 崔莹 发自英国爱丁堡</strong></p><p style="text-align:center;margin-top: 0px; margin-bottom: 29px; padding: 0px;"><br/></p><p><img alt="《纽约时报》总裁兼CEO：“视频直播太伟大了！”" src="http://img1.gtimg.com/cul/pics/hv1/24/133/2123/138082014.jpg" style="border: none; vertical-align: bottom; max-width: 640px;"/></p><p><br/></p><p style="text-align:center;margin-top: 0px; margin-bottom: 29px; padding: 0px; font-family: 宋体; font-size: 10pt;">8 月 29 日下午，《纽约时报》总裁兼 CEO 马克 · 汤普森在爱丁堡图书节活动现场 拍摄：崔莹</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;">在英国 “脱欧公投” 的结果公布后，《纽约时报》总裁兼 CEO 马克 · 汤普森（Mark Thompson）与记者吉姆 · 鲁滕贝格进行了一次对话。对话采用视频直播的形式，凌晨 6 点在 Facebook Live 平台播出，一下就吸引了 50 万人观看，效果堪比电视台的专业现场直播。</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;">“太不可思议了！” 回忆起那天，马克 · 汤普森说。今年 4 月，《纽约时报》开始与 Facebook Live 直播平台合作，进行视频直播。这一动作的主导者之一，就是 60 岁的马克 · 汤普森。</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;">马克 · 汤普森在 2012 年 11 月 12 日来到《纽约时报》，担任总裁兼 CEO。此前，他在英国广播公司（BBC）当了 8 年总裁。在他带领下，《纽约时报》发生了巨大变化：开发不同的 App，制作 VR 新闻电影，开始视频直播…… 目前，《纽约时报》的网上付费订阅读者已经超过 100 万，数字广告收入也在增长。</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;">然而，就具体经营数据来看，《纽约时报》2015 全年的广告总收入为 6.38 亿美元，其中数字广告收入占比不到三分之一（1.971 亿美元）。《纽约时报》2015 全年的发行收入为 8.45 亿美元，其中数字订阅收入占比不到四分之一（1.927 亿美元）。《纽约时报》的数字化转型依然任重道远。</p><p style="margin-top: 0px; margin-bottom: 29px; padding: 0px; text-indent: 2em;">为宣传自己的新书《说够了：政治语言哪里出了问题》，马克 · 汤普森在近日参加了英国爱丁堡国际图书节，并发表了演讲。8 月 29 日下午，就对新闻业未来发展的预测、《纽约时报》的转型实践等话题，腾讯文化在活动现场采访了他。以下为访谈内容。</p><p><br/></p>',
                'type' => 1,
                'thumbnail' => '',
                'deleted_at' => '2016-09-03 21:51:42',
                'created_at' => '2016-09-03 21:50:36',
                'updated_at' => '2016-09-03 21:51:42',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => '腾讯公布 2016 年第二季度及中期业绩 ',
                'content' => '<p>1
即时发布
腾讯公布 2016 年第二季度及中期业绩
香港，2016 年 8 月 17 日 – 中国领先的互联网增值服务提供商–腾讯控股有限公司 (“腾讯”或“本公司”，香港
联交所股票编号: 00700 ) 今天公布截至 2016 年 6 月 30 日未经审核的第二季度及中期业绩。
2016 年上半年业绩摘要：
 总收入为人民币 676.86 亿元（102.07 亿美元1），比去年同期增长 48%。
 经营盈利为人民币 277.27亿元（41.81 亿美元），比去年同期增长 43%；经营利润率由去年同期的 42%降至 41%。
 期内盈利为人民币 201.48 亿元（30.38 亿美元），比去年同期增长 41%；净利润率由去年同期的 31%降至 30%。
 本公司权益持有人应占盈利为人民币 199.20 亿元（30.04 亿美元），比去年同期增长 40%。
 每股基本盈利为人民币 2.128 元，每股摊薄盈利为人民币 2.102 元。
 按非通用会计准则（撇除股份酬金、来自投资公司的（收益）/亏损凈额、无形资产摊销及减值拨备）：
- 经营盈利为人民币 281.71 亿元（42.48 亿美元），比去年同期增长 43%；经营利润率由去年同期的 43%
降至 42%。
- 期内盈利为人民币 216.30 亿元（32.62 亿美元），比去年同期增长 41%；净利润率由去年同期的 34%降
至 32%。
- 本公司权益持有人应占盈利为人民币 213.51 亿元（32.20 亿美元），比去年同期增长 41%。
- 每股基本盈利为人民币 2.280 元，每股摊薄盈利为人民币 2.253 元。
2016 年第二季度业绩摘要：
 总收入为人民币 356.91 亿元（53.82 亿美元），比去年同期增长 52%。
 经营盈利为人民币 143.29亿元（21.61 亿美元），比去年同期增长 43%；经营利润率由去年同期的 43%降至 40%。
 期内盈利为人民币 108.80 亿元（16.41 亿美元），比去年同期增长 47%；净利润率由去年同期的 32%降至 30%。
 本公司权益持有人应占盈利为人民币 107.37 亿元（16.19 亿美元），比去年同期增长 47%。
 每股基本盈利为人民币 1.146 元，每股摊薄盈利为人民币 1.133 元。
 按非通用会计准则（撇除股份酬金、来自投资公司的（收益）/亏损凈额、无形资产摊销及减值拨备）：
- 经营盈利为人民币 146.87 亿元（22.15 亿美元），比去年同期增长 42%；经营利润率由去年同期的 44%
降至 41%。
- 期内盈利为人民币 114.96 亿元（17.34 亿美元），比去年同期增长 42%；净利润率由去年同期的 35%降
至 32%。
- 本公司权益持有人应占盈利为人民币 113.19 亿元（17.07 亿美元），比去年同期增长 42%。
- 每股基本盈利为人民币 1.208 元，每股摊薄盈利为人民币 1.194 元。

1 美元数据基于 1 美元兑人民币 6.6312 元计算。
2
腾讯主席兼首席执行官马化腾表示：“第二季度，我们旗下的平台和业务均保持了稳健增长，包括社交和媒体平台、
游戏、数字内容、广告和支付服务等。我们的战略举措巩固了生态系统和加强了我们为用户带来顶尖娱乐内容的
能力。举例而言，我们将 QQ 音乐与 China Music Corporation 进行整合，打造了中国领先的在线音乐平台，这将帮
助用户发现新音乐，帮助艺人触达更多粉丝，同时帮助唱片公司探索新的商业模式。另外我们也投资了世界领先
的移动游戏开发商 Supercell，以增加我们在全球游戏市场的上游拓展力度，同时让我们与全球数亿游戏玩家更近
一步。我们相信优质的内容，加之以腾讯的用户群、分发能力和精准推荐技术，将使我们和合作伙伴更好地发掘
快速发展的数字娱乐市场的商机。”
2016 年第二季度财务分析
增值服务。本公司增值服务业务的收入同比增长 39%至 2016 年第二季度的人民币 256.80 亿元。网络游戏收入增长
32%至人民币 171.24 亿元。该项增长主要来自我们玩家对战及角色扮演类主要智能手机游戏的贡献，以及来自我
们数款 PC 游戏的较少贡献。社交网络收入增长 57%至人民币 85.56 亿元。该项增长主要受虚拟道具销售以及订购
服务（尤其是视频、音乐及文学等数字内容服务）收入的增长所推动。
网络广告。本公司网络广告业务的收入同比增长 60%至 2016 年第二季度的人民币 65.32 亿元。效果广告收入增长
80%至人民币 36.97 亿元，主要反映来自微信朋友圈、移动端新闻应用及微信公众账号的效果广告收入的增长。品
牌展示广告收入增长 41%至人民币 28.35 亿元，主要受腾讯新闻及腾讯视频收入的增长所推动。
其他。本公司其他业务的收入同比增长 275%至 2016 年第二季度的人民币 34.79 亿元。该项增长主要由于我们支
付相关服务及云服务收入的增长。

2016 年第二季度其它主要财务信息
本季度股份报酬开支为人民币 8.62 亿元，较去年同期上升 31%。
EBITDA 为人民币 155.81 亿元，较去年同期上升 52%。经调整的 EBITDA 为人民币 164.01 亿元，较去年同期上升
50%。
资本开支为人民币 15.05 亿元，较去年同期下降 47%。
自由现金流为人民币 97.48 亿元，较去年同期上升 80%。
于 2016 年 6 月 30 日，本公司的现金净额为人民币 240.37 亿元。于 2016 年 6 月 30 日，我们于上市投资公司权益
（包括联营公司及可供出售金融资产）的公允价值合共为人民币 800 亿元。
策略摘要
最近数月，我们执行了若干举措以发展我们的网络游戏及数字内容业务，例如：
- 通过 QQ 音乐与营运另一领先音乐流媒体平台的 China Music Corporation 的整合以扩展我们的数字音乐
业务。我们相信中国的音乐产业有巨大的发展潜力，亦期待整合运营帮助用户发现更多音乐、帮助艺
人触达更多粉丝，以及为音乐行业创造新的产品及业务模式。
3
- 通过发起财团收购开发了《部落冲突》及《部落冲突：皇室战争》等风行全球的游戏的开发商 Supercell
大多数股权以深化我们在移动游戏领域的影响力。Supercell 的创立团队将继续独立管理该公司，完善
其现有游戏及开发新游戏，并借助腾讯的平台及专长进一步在中国发展。
- 通过进一步投资电影╱电视剧工作室及我们的自制项目以巩固我们网络视频业务的上游影响力。
- 通过与同行紧密合作打击盗版以发展我们的网络文学服务，为作者及行业提供更多可持续及健康的收
入。
季内我们亦围绕其他重要战略取得了稳健进展，例如为微信及 QQ 手机版用户建立我们的移动生态系统、提升我
们的企业通信产品、增强我们的云服务能力及客户基础，并促进用户在商品交易中使用我们的支付解决方案。
业务回顾及展望
经营资料
- QQ 月活跃账户数达到 8.99 亿，比去年同期增长 7%。
- QQ 智能终端月活跃账户达到 6.67 亿，比去年同期增长 6%。
- QQ 最高同时在线账户数（季度）达到 2.47 亿，比去年同期增长 6%。
- 微信和 WeChat 的合并月活跃账户数达到 8.06 亿，比去年同期增长 34%。
- QQ 空间月活跃账户数达到 6.52 亿，比去年同期下降 1%。
- QQ 空间智能终端月活跃账户数达到 5.96 亿，比去年同期增长 4%。
- 收费增值服务注册账户数为 1.05 亿，比去年同期增长 25%。
主要平台

- 就 QQ 而言，智能终端月活跃账户同比增长 6%至 6.67 亿。受益于短视频特效挂件等功能的丰富，以及向
家校群中的用户提供第三方在线教学内容等 QQ 群组功能的完善，QQ 手机版的活跃度得以提升。2016 年
5 月，我们亦推出可连接 QQ 社交图谱并可让用户制作及分享实时视频的直播应用程序 NOW。
- 就 QQ 空间而言，智能终端月活跃账户同比增长 4%至 5.96 亿。受直播等新功能的推动，用户活跃度得以
提升，在直播的功能下，用户可在其社交网络中分享直播视频。
- 就微信及 WeChat 而言，月活跃账户达 8.06 亿，同比增长 34%。微信进一步渗透至工作沟通场景，而促进
内部办公自动化的微信企业号注册用户已超过 2 千万。我们通过丰富微信上的城市服务，将城市服务入口
开放给中国更多的三四线城市用户，并推出电子会员卡（商户可向其客户发出电子卡以取代实体会员卡），
提升了用户参与度。
增值服务
2016 年第二季度，我们的社交网络业务收入保持强劲的增长，此乃由于我们的虚拟道具销售增长及我们的数字内
容订购服务更受欢迎。
就 PC 游戏而言，我们的收入取得高个位数同比增长，此乃由于来自体育、音乐及动作类角色扮演等现有游戏类
型的贡献增加以及来自角色扮演及射击等较新游戏类型的贡献。
4
就智能手机游戏而言，第二季度，我们的收入1约为人民币 96 亿元，同比增长 114%，此乃由于玩家对战的主要游
戏以及角色扮演的新游戏的贡献增加。
网络广告
2016 第二季度，我们网络媒体平台的流量及广告收入持续增长，大部份流量及约 80%的收入产生自移动平台。受
益于腾讯有中国独播权的 NBA 赛事（该项目 2015-2016 赛季的独立观看用户数量较播放权由多个平台共有的
2014-2015 赛季增长逾一倍）等广受用户欢迎的内容的支持，腾讯视频播放量相应增加。地区性广告主可使用我们
的广告自助投放平台购买三四线城市的微信朋友圈定向流量，我们亦已增加 QQ 空间多图轮播等新的广告形式。
有关更详细的披露，请浏览 http://www.tencent.com/zh-cn/ir/ 或通过微信公众账号关注我们：






# # #

1 包括归属给我们社交网络业务的智能手机游戏收入。
5
关于腾讯
腾讯以技术丰富互联网用户的生活。每天，数以亿计的用户通过我们的整合平台在线沟通、分享经历、获取资讯和
寻求娱乐。腾讯多元化的服务包括：社交和通信服务 QQ 及微信/WeChat、社交网络平台 QQ 空间、腾讯游戏旗下
QQ 游戏平台、门户网站腾讯网(QQ.com)、腾讯新闻客户端和网络视频服务腾讯视频。
腾讯 1998 年成立于中国深圳，2004 年在香港联交所主板上市，腾讯是香港恒生指数成份股之一。通过投资创新、
为合作伙伴提供双互共赢的环境和贴近用户的需求，腾讯致力与互联网共同发展。
投资者查询：
陈慧芬 电话：(86) 755 86013388 内线88369 或 (852)31485100 cchan#tencent.com
黄 琦 电话：(86) 755 86013388 内线83731 或 (852)31485100 tracyqhuang#tencent.com

媒体查询：
罗启琳 电话：(86) 755 86013388 内线66630 或 (852)31485100 cannylo#tencent.com
陈丽敏 电话：(86) 755 86013388 内线56011 liminchen#tencent.com
非通用会计准则财务计量
为补充根据国际财务报告准则编制的本公司综合业绩，若干非通用会计准则财务计量（包括非通用会计准则经营
盈利、非通用会计准则经营利润率、非通用会计准则期内盈利、非通用会计准则纯利率、非通用会计准则本公司
权益持有人应占盈利、非通用会计准则每股基本盈利及非通用会计准则每股摊薄盈利）已于本公布内呈列。此等
未经审核非通用会计准则财务计量应被视为根据国际财务报告准则编制的本公司财务业绩的补充而非替代计量。
此外，此等非通用会计准则财务计量的定义可能与其他公司所用的类似词汇有所不同。
本公司的管理层相信，非通用会计准则财务计量藉排除若干非现金项目及并购交易的若干影响为投资者评估本公
司核心业务的业绩提供有用的补充资料。此外，非通用会计准则调整包括本公司主要联营公司的相关非通用会计
准则调整，此乃基于相关主要联营公司可获得的已公布财务资料或本公司管理层根据所获得的资料、若干预测、
假设及前提所作出的估计。
重要注意事项

本新闻稿载有前瞻性陈述，其涉及业务展望、预测业务计划及本公司的增长策略。该等前瞻性陈述是根据本公司
现有的资料，亦按本新闻稿刊及之时的展望为基准，在本新闻稿内载列。该等前瞻性陈述是根据若干预测、假设
及前提，其中，若干部份为主观性或不受我们控制。该等前瞻性陈述或会证明为不正确及可能不会在将来实现。
该等前瞻性陈述之内大部分为风险及不明朗因素。该等风险及不明朗因素的其它详情载于我们的其它公开披露文
件和公司网站。
6
综合收益表
人民币百万元（特别说明除外）
未经审核 未经审核
2Q2016 2Q2015 2Q2016 1Q2016
收入 35,691 23,429 35,691 31,995
增值服务 25,680 18,428 25,680 24,964
网络广告 6,532 4,073 6,532 4,701
其他 3,479 928 3,479 2,330
收入成本 (15,235) (8,991) (15,235) (13,406)
毛利 20,456 14,438 20,456 18,589
毛利率 57% 62% 57% 58%
利息收入 626 598 626 703
其它收益净额 911 612 911 506
销售及市场推广开支 (2,365) (1,601) (2,365) (2,032)
一般及行政开支 (5,299) (4,011) (5,299) (4,368)
经营盈利 14,329 10,036 14,329 13,398
经营利润率 40% 43% 40% 42%
财务成本净额 (377) (341) (377) (491)
分占联营公司及合营公司亏损 (292) (452) (292) (1,089)
除税前盈利 13,660 9,243 13,660 11,818
所得税开支 (2,780) (1,847) (2,780) (2,550)
期内盈利 10,880 7,396 10,880 9,268
净利润率 30% 32% 30% 29%
下列人士应占：
本公司权益持有人 10,737 7,314 10,737 9,183
非控制性权益 143 82 143 85
非通用会计准则本公司权益持有人应占盈利 11,319 7,975 11,319 10,032
归属于本公司权益持有人的
每股盈利（每股人民币元）
- 基本 1.146 0.787 1.146 0.981
- 摊薄 1.133 0.778 1.133 0.970
7
综合全面收益表
人民币百万元（特别说明除外）
未经审核 未经审核
2Q2016 2Q2015 2Q2016 1Q2016
期内盈利 10,880 7,396 10,880 9,268
其他全面收益（除税凈额）：
其后可能会重新分类至损益的项目
分占联营公司其他全面收益 277 (168) 277 8
可供出售金融资产公允价值变动收益/（损
失）净额
4,979 4,805 4,979 (1,653)
处置可供出售金融资产后转至损益 79 (10) 79 -
外币折算差额 1,308 (367) 1,308 (214)
其他公允价值亏损 (182) - (182) (139)
其后可能不会重新分类至损益的项目
其他公允价值亏损 (66) - (66) (262)
期内全面收益总额 17,275 11,656 17,275 7,008
下列人士应占：
本公司权益持有人 17,116 11,594 17,116 6,920
非控制性权益 159 62 159 88
其他财务信息
人民币百万元（特别说明除外）
未经审核
2Q2016 2Q2015 1Q2016
EBITDA (a) 15,581 10,258 14,329
经调整的 EBITDA (a) 16,401 10,899 15,004
经调整的 EBITDA 比率 (b) 46% 47% 47%
利息开支 494 399 477
现金净额 (c) 24,037 21,663 27,429
资本开支 (d) 1,505 2,841 4,105
附注:
a) EBITDA 包括经营盈利减利息收入、其他收益╱亏损净额加固定资产及投资物业折旧以及无形资产摊销。经调整的 EBITDA 包
括 EBITDA 加按股权结算的股份酬金开支。
b) 经调整的 EBITDA 比率根据经调整的 EBITDA 除以收入计算。
c) 现金净额为期末余额，乃根据现金及现金等价物、定期存款，减借款及应付票据计算。
d) 资本开支包括添置（不包括业务合并）固定资产、在建工程、土地使用权以及无形资产（不包括游戏及其他内容授权）。
8
综合财务状况表
人民币百万元（特别说明的除外） 未经审核 未经审核
2016 年 6 月 30 日 2016 年 3 月 31 日
资产
非流动资产
固定资产 11,469 10,301
在建工程 4,066 5,176
投资物业 710 291
土地使用权 4,066 4,087
无形资产 14,190 13,793
于联营公司的投资 64,092 60,747
于联营公司可赎回优先股的投资 8,203 7,015
于合营公司的投资 573 537
可供出售的金融资产 54,827 43,489
预付款项、按金及其它资产 7,049 6,694
递延所得税资产 4,739 667
定期存款 9,034 9,033
183,018 161,830
流动资产
存货 216 226
应收账款 8,810 7,148
预付款项、按金及其他资产 11,908 12,723
其他金融资产 1,537 928
定期存款 35,774 33,719
受限制现金 125,490 85,816
现金及现金等价物 64,206 56,607
247,941 197,167
资产总额 430,959 358,997
9
综合财务状况表 （续上）
人民币百万元（特别说明的除外） 未经审核 未经审核
2016 年 6 月 30 日 2016 年 3 月 31 日
权益
本公司权益持有人应占权益
股本 - -
股本溢价 14,619 13,670
股份奖励计划所持股份 (2,425) (2,257)
其它储备 12,884 6,268
保留盈利 116,192 109,185
141,270 126,866
非控制性权益 2,851 2,243
权益总额 144,121 129,109
负债
非流动负债
借款 33,030 18,802
应付票据 34,585 36,886
长期应付款项 3,936 3,774
递延所得税负债 3,920 3,518
递延收入 2,365 2,687
77,836 65,667
流动负债
应付帐款 21,168 19,748
其他应付款项及预提费用 138,759 98,546
借款 10,080 12,373
应付票据 7,282 3,869
流动所得税负债 3,555 2,423
其它税项负债 384 301
递延收入 27,774 26,961
209,002 164,221
负债总额 286,838 229,888
权益及负债总额 430,959 358,997
10
非通用会计准则财务计量与根据国际财务报告准则编制的计量的差异
已报告
调整
人民币百万元 非通用会计准则
百分比除外
按股权结算
的股份酬金
按现金结算
的股份酬金(a)
来自投资公司的（收益）
/亏损凈额(b)
无形资产
摊销(c)
减值拨备(d)
截至 2016 年 6 月 30 日六个月未经审核
经营盈利 27,727 1,495 74 (3,718) 96 2,497 28,171
期内盈利 20,148 1,880 74 (4,037) 684 2,881 21,630
本公司权益持有人
应占盈利 19,920 1,852 74 (4,033) 665 2,873 21,351
经营利润率 41% 42%
净利润率 30% 32%
截至 2015 年 6 月 30 日六个月未经审核
经营盈利 19,408 1,202 50 (2,326) 106 1,275 19,715
期内盈利 14,326 1,364 50 (2,238) 598 1,285 15,385
本公司权益持有人
应占盈利 14,197 1,323 48 (2,238) 578 1,269 15,177
经营利润率 42% 43%
净利润率 31% 34%
11
非通用会计准则财务计量与根据国际财务报告准则编制的计量的差异（续上）
已报告
调整
人民币百万元 非通用会计准则
百分比除外
按股权结算
的股份酬金
按现金结算
的股份酬金(a)
来自投资公司的（收益）
/亏损凈额(b)
无形资产
摊销(c)
减值拨备(d)
截至 2016 年 6 月 30 日三个月未经审核
经营盈利 14,329 820 42 (2,990) 49 2,437 14,687
期内盈利 10,880 1,014 42 (3,251) 328 2,483 11,496
本公司权益持有人
应占盈利 10,737 995 42 (3,247) 317 2,475 11,319
经营利润率 40% 41%
净利润率 30% 32%
截至 2016 年 3 月 31 日三个月未经审核
经营盈利 13,398 675 32 (728) 47 60 13,484
期内盈利 9,268 866 32 (786) 356 398 10,134
本公司权益持有人
应占盈利 9,183 857 32 (786) 348 398 10,032
经营利润率 42% 42%
净利润率 29% 32%
截至 2015 年 6 月 30 日三个月未经审核
经营盈利 10,036 641 18 (1,487) 56 1,052 10,316
期内盈利 7,396 720 18 (1,399) 300 1,057 8,092
本公司权益持有人
应占盈利 7,314 699 17 (1,399) 287 1,057 7,975
经营利润率 43% 44%
净利润率 32% 35%
附注:
(a) 包括授予投资公司雇员的认沽期权（可由本集团收购的投资公司的股份及根据其股份奖励计划而发行的股份）及其他奖励
(b) 包括视同处置及处置投资公司和业务，以及我们于投资公司的购股权公允价值变动的（收益）╱亏损净额
(c) 因收购而产生的无形资产摊销，已扣除相关递延所得税
(d) 于联营公司、可供出售金融资产及收购产生的无形资产的减值拨备</p>',
'type' => 4,
'thumbnail' => '',
'deleted_at' => NULL,
'created_at' => '2016-09-03 21:51:04',
'updated_at' => '2016-09-03 21:51:04',
),
));
        
        
    }
}
