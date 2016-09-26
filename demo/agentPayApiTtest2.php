<?php
/*  by wpp
 *  测试代码，提供四个接口的测试demo
 *
 * */
require      "../baofoo/BaofooSdk.php";

    $path ="../config/";
    $path = __dir__ ."/../config/";
var_dump($path);
//    $path ="/home/wpp/www/baofoo4.1.5/baofu.v4.1.2/demo/BaoFooPay-sdk/config/";
    $config = parse_ini_file($path."config.ini");

    $baofooSdk = new BaofooSdk($config['member_id'], $config['terminal_id'],'json',$path.'m_pri.pfx',
                    $path.'baofoo_pub.cer',$config['private_key_password'],false);

            $arr =[['trans_no' => '4ABCDEFG11',
                    'trans_money' => '12',
                    'to_acc_name' => 'wpp11',
                    'to_acc_no' => '653889',
                    'to_bank_name' => '中国工商银行',
                    'to_pro_name' => '安徽省',
                    'to_city_name' => '合肥市',
                    'to_acc_dept' => '三星路支行',
                    'trans_summary' => '摘要,',
                   ],
                   ['trans_no' => '4ABCDEFG12',
                    'trans_money' => '10',
                    'to_acc_name' => 'wpp12',
                    'to_acc_no' => '25554475',
                    'to_bank_name' => '中国农业银行',
                    'to_pro_name' => '上海市',
                    'to_city_name' => '上海市',
                    'to_acc_dept' => '南站11号',
                    'trans_summary' => '摘要,最多256字符',
                   ],
            ] ;

//        $rtn = $baofooSdk->agentPayApi($arr,'http://paytest.baofoo.com/baofoo-fopay/pay/BF0040001.do');
//        var_dump($rtn);
//        exit;


        //bf0002
        $arr = [
                ['trans_batchid'=>20354611,'trans_no'=>'4ABCDEFG68'],
                ['trans_batchid'=>20354631,'trans_no'=>'4ABCDEFG12'],
               ];
        $rtn = $baofooSdk->agentPayStatusQueryApi($arr,'http://paytest.baofoo.com/baofoo-fopay/pay/BF0040002.do');
        echo $rtn;
        exit;

        //bf0003
        $arr = [
             ['trans_btime'=>20160922,'trans_etime'=>'20160922']
        ];
//        $rtn = $baofooSdk->agentPayRefundQueryApi($arr,'http://paytest.baofoo.com/baofoo-fopay/pay/BF0040003.do');
//        echo $rtn;
//        exit;


        //bf0004
        $arr =[['trans_no' => '4ABCDEFG21',
            'trans_money' => '12',
            'to_acc_name' => 'wpp1',
            'to_acc_no' => '653889',
            'to_bank_name' => '中国工商银行',
            'to_pro_name' => '安徽省',
            'to_city_name' => '合肥市',
            'to_acc_dept' => '三星路支行',
            'trans_summary' => '摘要,',
            ],
            ['trans_no' => '4ABCDEFG21',
                'trans_money' => '10',
                'to_acc_name' => 'wpp2',
                'to_acc_no' => '25554475',
                'to_bank_name' => '中国农业银行',
                'to_pro_name' => '上海市',
                'to_city_name' => '上海市',
                'to_acc_dept' => '南站11号',
                'trans_summary' => '摘要,最多256字符',
            ],
        ] ;

//        $rtn =  $baofooSdk->agentPaySplitApi($arr,'http://paytest.baofoo.com/baofoo-fopay/pay/BF0040004.do');
//        echo $rtn;
        exit;