
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
php artisan  horizon #需开启守护进程
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