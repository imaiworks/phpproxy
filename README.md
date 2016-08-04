# phpproxy
apacheとphpで超カンタンフォワードプロキシーを作ってみた


httpd.conf
```
Listen 8888  
<VirtualHost *:8888>  
        DocumentRoot "/var/www/proxy/proxy.php"  
</VirtualHost>  
```
warningが出るけど無視で

ブラウザのProxy設定をこのサーバの8888にすればproxyできます

apacheに勝手SSLを入れていおけばSSL通信もできるとおもいます。

