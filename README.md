
# 完全免费的IP解析工具

## ip-addr
无需注册, 完全免费IP归属地查询API,快速查询IP地址的地理位置、运营商等信息,不限量，随便用


## 官网
<a href="https://ip.zhengbingdong.com" target="_blank">免费IP解析</a>

## 更多分享信息内容请关注我的公众号：程序猿的栖息地
![程序猿的栖息地](https://pic.zhengbingdong.com/topic/20231102/09ca8dff1123c9e96badb5500604b86c.jpg)

## 安装

```shell
$ composer require zhengbingdong/ip-addr
```

## 用法

```php
<?php

use Zhengbingdong\IpAddr\IpAddrClient;

/**
 * IP解析工具类
 * Class DateTools
 */

class Client{

    /**
     * [get 解析IP]
     * @since  2025-10-23
     * @author Dai哥
     * @param  [type]     $ip [IP地址]
     * @return [type]         [description]
     */
    public function index()
    {
        $ip = '127.0.0.1';

        $info = IpAddrClient:get($ip);
    }
}
```

## 返回值

```json
{
  "ret": 200,               // 200为正常
  "data": {
    "ip": "58.30.0.0",     // 查询的IP地址
    "country": "中国",      // 国家/地区
    "country_code": "cn",   // 国家/地区简码
    "prov": "北京",         // 省份
    "city": "北京",         // 城市
    "city_code": "beijing", // 城市简码
    "city_short_code": "bj", // 城市简码
    "area": "东城",         // 区县
    "post_code": "100000", //邮政编码
    "area_code": "010",    // 电话区号
    "isp": "中国移动",      // 运营商
    "lng": "116.41005",    // 城市中心-经度
    "lat": "39.93157",     // 城市中心-纬度
    "long_ip": 975044608,  // longip
    "big_area": "华北",     // 国内大区划分
  },
  "qt": 0.001              // 查询时间-秒
}
