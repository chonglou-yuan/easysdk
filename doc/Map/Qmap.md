# 腾讯地图开放平台-服务端API

#### 引用
` use Easysdk\Map\Qmap; `

#### 初始化对象
` $map = new Qmap("key"); `

#### 逆地址解析（坐标位置描述）

` $result = $map->geocoder("40.004086,116.656657"); `

请求及返回结果参考：[逆地址解析](https://lbs.qq.com/webservice_v1/guide-gcoder.html)

```
use Easysdk\Map\Qmap;
$map = new Qmap("key");
$result = $map->geocoder("40.004086,116.656657");
```
#### 地址解析（地址转换坐标）
