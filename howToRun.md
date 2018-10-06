
# laradock  

## [我的]默认配置加swoole  

## 关于容器的一些常用命令

```shell

systemctl start docker
docker-compose up -d nginx mysql phpmyadmin redis workspace 
 
 
查看容器日志
docker logs -f -t --tail 100 2eddebdc1d9d
docker logs -f -t --tail *行数 *容器id

docker-compose logs -f nginx
docker-compose exec mysql bash
docker-compose exec nginx bash

composer config repo.packagist composer https://packagist.org

```






# 开发所需
# npm run watch-poll
# vagrant provision && vagrant reload

```shell
#初次部署执行

php artisan key:generate
php artisan route:cache
php artisan migrate
#php artisan db:seed 测试数据可以不执行
#php artisan f:calculate-active-user 同上
# php artisan  horizon #需开启守护进程  有点问题用下面一句原生代替
php artisan queue:listen
export EDITOR=vim && crontab -e
# 添加定时任务
# * * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1

```


```shell
#上线
#清除缓存
php artisan route:cache
#需要确认
#php artisan migrate


```


# 优化手段

```.env

APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:6ouIfKdFXfaIGZrH9qBCKAWupg4kVwuRsRGpeQnCRh4=

# 路由缓存
php artisan route:cache
# 配置缓存
#php artisan config:cache
# 上面又是会导致composer 无法优化
#rm bootstrap/cache/config.php
# composer 
composer dump-autoload --optimize
# 命令优化
php artisan optimize

# 暂未加入清除缓存，故暂不添加此条途径
# opcacahe 
```



# other

```

php artisan key:generate

php artisan route:cache
php artisan migrate
php artisan db:seed
#刷新数据库中的测试数据 如果不执行上句，可执行这一句
# php artisan migrate:refresh --seed
#生成活跃测试数据
php artisan f:calculate-active-user

php artisan migrate && php artisan migrate:refresh --seed

# 开发所需
# npm run watch-poll
# vagrant provision && vagrant reload

php artisan  horizon

export EDITOR=vim && crontab -e
* * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1
php artisan f:sync-user-actived-at



# 生成数据工厂
# php artisan make:factory LinkFactory
# 生成填充类
# php artisan make:seeder LinksTableSeeder
# 生成中间件
# php artisan make:middleware RecordLastActivedTime
# 生成命令
# php artisan make:command SyncUserActivedAt --command=f:sync-user-actived-at
```
