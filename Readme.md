1、需要了解一定的编程知识，本代码PHP实现
2、注册微信公众号平台，进入测试（个人开发者无法发送模版消息，只能借助测试号）
https://mp.weixin.qq.com/debug/cgi-bin/sandboxinfo?action=showinfo&t=sandbox/index
3、新增模版消息配置，内容可参考下面，{{}}里面的变量需要在脚本里声明赋值
4、天气使用的高德天气API
5、一句情话使用的网上随便找的api

模版消息配置内容:

muma～小胖熊
今天是{{date.DATA}}，星期{{week.DATA}}，每天都是超级爱你的一天~

小胖熊现在在{{province.DATA}}{{city.DATA}}
今天天气{{weather.DATA}}，温度{{temperature.DATA}}摄氏度，空气湿度{{humidity.DATA}}%，{{winddirection.DATA}}风{{windpower.DATA}}级，今天也一定要好好爱护自己哦~

今天是我们在一起的第{{togetherDays.DATA}}天，这些日子里都有超级爱你哦~
距离小胖熊的生日还有{{birthDays.DATA}}天，Love You Forever~

{{hua.DATA}}


