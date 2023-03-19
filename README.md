# 必做事項
- 調整.env(若沒有此檔案 從.env.example複製)
  - 調整連線設定(以下部分需根據實際情況調整)
    ```.env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    ```
- 初始化指令
  - composer install (建立依賴檔案)
  - php artisan migrate   (建立資料表)
  - php artisan db:seed   (建立基礎資料)
  - php artisan storage:link (開放儲存空間)
  - php artisan key:generate (生成網頁key)