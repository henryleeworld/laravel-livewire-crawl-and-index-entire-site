# Laravel 10 Livewire 爬取和檢索整個網站

引入 spatie 的 laravel-site-search 套件來擴增爬取和檢索整個網站，可以將其視為私密 Google 搜索，被爬取和索引的內容可以高度客製化，搜尋背後是採用 MeiliSearch 搜索引擎來加快查詢速度。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 執行 __Artisan__ 指令的 __site-search:create-index__ 來執行定義需要編入檢索的網站。
```sh
$ php artisan site-search:create-index
```
- 執行 __Artisan__ 指令的 __site-search:crawl__ 來執行啟動一個爬取網站的隊列任務，並將內容放入搜索檢索中。
```sh
$ php artisan site-search:crawl
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/Mj0LJsz.gif)
> 讓使用者輕鬆取得相關資訊