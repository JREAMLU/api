<?php

class Cms {

    const MAX_PAGESIZE = 30;

    public function getSlide() {
        $list = [
            [
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2017/01/video.jpeg',
                'link' => '/pages/video/main',
            ],
            [
                'pic' => 'http=>//img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg',
                'link' => '',
            ],
        ];

        return [
            'count' => count($list),
            'list' => $list,
        ];
    }

    public function getNews($params) {
        $list = [
            [
                'id' => 0,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/12/4-300x250.jpg',
                'title' => '“创新发展 再创辉煌”盛世华安2016年度圣诞主题年会圆满落幕',
                'intro' => '2016年，对于盛世华安而言是一个机遇与挑战并存的一年，更是收获的一年。这一年在公司领导层的正确领导和支持下，全体员工齐心协力，顽强进取，各方面的工作都取得了一定的成绩。',
            ],
            [
                'id' => 1,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/12/2-1-300x250.jpg',
                'title' => 'CCIA第七届中国物联网产业与新型智慧城市年会圆满落幕，江苏盛世华安智能科技股份有限公司',
                'intro' => '2016年12月16日，由工业和信息化部指导，中国通信工业协会主办，中国通信工业协会物联网应用分会承办的“第七届中国物联网产业与新型智慧城市年会”在北京万寿宾馆隆重召开。',
            ],
            [
                'id' => 2,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/11/572057806235746054-300x250.jpg',
                'title' => '热烈祝贺东方金汇通成功申报软件企业',
                'intro' => '苏州东方金汇通智能科技有限公司是江苏盛世华安智能科技股份有限公司旗下一家专业从事智能化系统、计算机软硬件、电子产品研发的全资子公司',
            ],
            [
                'id' => 10,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/1-300x250.jpg',
                'title' => '2016首届新型智慧城市发展高峰论坛在京召开 盛世华安受邀出席',
                'intro' => '10月20日，由中国信息协会主办，中国信息界杂志社、中国信息协会信息惠民分会承办的“2016首届新型智慧城市发展高峰',
            ],
            [
                'id' => 11,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/1-300x250.png',
                'title' => '盛世华安成为我市首届 “港城合伙人”',
                'intro' => '10月18日，“港城合伙人”峰会首期开幕式在张家港暨阳湖大酒店隆重召开。现场有上市企业、新三板挂牌企业、创新创业企业代表，全国多家',
            ],
            [
                'id' => 12,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/DSC_4148-300x250.jpg',
                'title' => '张家港市市长黄戟一行莅临盛世华安调研指导',
                'intro' => '9月22日，张家港市市长黄戟一行来到江苏盛世华安智能科技股份有限公司调研指导工作，盛世华安董事长孙浩元、常务副总郭晓桦等公司领导进',
            ],
            [
                'id' => 13,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/%E9%9D%92%E9%93%9C%E5%B3%A1-300x250.jpg',
                'title' => '盛世华安与宁夏青铜峡市达成战略合作',
                'intro' => '近日，在张家港市工商联的牵头下，江苏盛世华安智能科技股份有限公司董事长孙浩元等一行来到宁夏青铜峡市进行参观及项目路演，与青铜峡市人',
            ],
            [
                'id' => 14,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/%E6%83%A0%E6%B0%91%E9%80%9A%E6%9C%8D%E5%8A%A1%E7%AB%99-300x250.jpg',
                'title' => '港城首家“盛世惠民通社区便民服务中心”盛大开业',
                'intro' => '按2016年张家港市编制的“十三五”规划内容，为持续推进国家级物联网重大应用示范，加快惠民通信息服务平台建设，实现互联网+生活的集',
            ],
            [
                'id' => 15,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/09/20130604083316_39766-300x250.jpg',
                'title' => '热烈欢迎副市长赵金龙等领导一行莅临盛世华安',
                'intro' => '2016年9月2号，张家港市副市长兼公安局局长赵金龙、财政局局长周兵一行到江苏盛世华安智能科技股份有限公司调研指导工作，盛世华安董',
            ],
            [
                'id' => 100,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/07/%E7%89%A9%E8%81%94%E7%BD%91.jpg',
                'title' => '应用简介',
                'intro' => '惠民通，您身边的贴身助手，随时随地处理您身边事—便民利民惠民是我们的服务理念',
            ],
            [
                'id' => 1000,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/07/%E7%89%A9%E8%81%94%E7%BD%91.jpg',
                'title' => '安防改造升级——利民',
                'intro' => '随着科技不断发展、流动人口增加和城市人口集聚，给社会治安带来巨大的挑战，传统的犯罪打击手段已不足以应对。基于大数',
            ],
            [
                'id' => 1001,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/07/201609230617002103-300x250.jpg',
                'title' => '特色政务服务——便民',
                'intro' => '为加速推进“智慧城市”的建设步伐，建立智慧型城市管理格局，有效整合信息资源，推动跨部门、跨条线、跨行业的信息连通，集成惠民通平台',
            ],
            [
                'id' => 1002,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/10/%E6%9C%8D%E5%8A%A1%E7%AB%99%E6%AD%A3%E9%9D%A2%E5%9B%BE1-300x250.jpg',
                'title' => '社区民生服务——惠民',
                'intro' => '随着全国各地新型智慧城市建设的快速发展，特别是进入大数据时代，智慧社区实为本地生活服务的互联网化，更加快捷方便地满足社区住户的生活',
            ],
            [
                'id' => 1003,
                'pic' => 'http=>//www.jsssha.com/wp-content/uploads/2016/07/%E6%83%A0%E6%B0%91%E4%B8%80%E5%8D%A1%E9%80%9A-300x250.jpg',
                'title' => '智慧一卡通',
                'intro' => '公司与苏州市民卡公司、张家港社保局应用市民卡B卡深度合作，在“惠民一卡通”IC芯片中写入业主基本信息，并与NFC',
            ],
        ];

        if ($params['pagesize'] > self::MAX_PAGESIZE) {
            $params['pagesize'] = self::MAX_PAGESIZE;
        }

        $news = array_slice($list, $params['pageindex'], $params['pagesize']);

        return [
            'count' => count($list),
            'list' => $news,
        ];
    }

    public function getContact() {
        $content = <<<TXT
股票：838280 <br/>电话：0512-58161723 <br/>传真：0512-58161711 <br/>地址：江苏省苏州市张家港市滨河路2号 <br/>华东国际大厦5F
TXT;

        return [
            'title' => '联系我们',
            'latitude' => 31.838403,
            'longitude' => 120.528958,
            'scale' => 16,
            'markers' => [
                [
                    'latitude' => 31.838403,
                    'longitude' => 120.528958,
                    'name' => '华东国际大厦5F',
                ],
            ],
            'content' => $content,
        ];
    }
}