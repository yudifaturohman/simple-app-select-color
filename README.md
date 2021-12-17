# TALL Stack (Tailwind, Alpins.js, Laravel, Livewire)
## Simple App Select Color
<ol>
    <li>
        Clone Repository
        <p><code>git clone https://github.com/yudifaturohman/simple-app-select-color.git</code></p>
    </li>
    <li>
        Run Command
        <p><code>composer update</code></p>
    </li>
    <li>
        Set .env
        <p>
            <code>
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=your_databases
                DB_USERNAME=your_username
                DB_PASSWORD=your_password
          </code>
        </p>
    </li>
    <li>
        Key Generate
        <p><code>php artisan key:generate</code></p>
    </li>
    <li>
        Clear and cache config .env
        <p><code>php artisan config:cache</code></p>
    </li>
    <li>
       Run Migration
        <p><code>php artisan migrate</code></p>
    </li>
</ol>
