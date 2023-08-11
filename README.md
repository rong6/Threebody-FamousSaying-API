# Threebody-FamousSaying-API
一个三体名言的一言API，由PHP编写。      
              
[Demo](https://rong6.woan.link/api/threebody) • [完善语录](1)              

## 部署
首先，请确保你有**PHP环境**，接着，将此项目的文件直接放入文件夹中，访问你的域名/IP即可。   
我部署了一个[Demo](https://rong6.woan.link/api/threebody)，你可以打开看看效果，但最好不要把它用在生产环境中，因为我无法保证此服务不会中断。
   
## 请求方式
请求方式：```Get```（仅支持Get）
返回格式：```Txt```（仅支持纯文本）

请求示例：
``` curl
curl --request GET \
--url https://rong6.woan.link/api/threebody/ \
```

返回示例：
``` 
这是人类的落日。
```

## 完善语录 
<a name="1"></a>
目前，所有的语录均为我自己收集、整理，而三体中的名言实在是太多了，难免会有漏下的，所以希望你能积极PR，共同完善语录！

## License
本仓库基于[MIT License](https://github.com/rong6/Threebody-Saying-API/blob/main/LICENSE)开源。
