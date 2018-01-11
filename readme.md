<p align="center"><img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpDp4VH8.png"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to use ?

請先clone這個專案，clone完之後復原專案 ( [參考網址](http://oomusou.io/laravel/laravel-clone-from-github/) )

復原步驟：

- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

migrate資料庫會是空的

執行seed會新增一筆後台管理員的帳號

- 帳號：admin@gmail.com

- 密碼：admin

## 後台登入方式

- 方法一 -> 127.0.0.1/admin/login

- 方法二 -> 到about裡有一個祕密通道"." ( [詳情請見commit](https://github.com/WISD-2017/Team3/commit/9a11b6f8591bea402c8d3a487d8aaba5d2376345) )

## 禁用會員功能使用方式

登入管理員後台

然後到會員管理找到要禁用的會員

把他的帳號狀態從 "active" 改成 "inactive"

## 其他功能 - 檔案上傳

請先安裝套件

- 執行 composer require "dflydev/apache-mime-types"

## 警告!! 此功能有極大的bug 慎入!!
