<div class="container">
    <div class="row d-flex flex-column">
        <div class="title">
            <h1>
                PHP 型態
            </h1>
        </div>
        <div class="content">
            <ul>
                <li>字串（String）</li>
                <li>整數（Integer）</li>
                <li>浮點數（Float）</li>
                <li>布林值（Boolean）</li>
                <li>陣列（Array）</li>
                <li>物件（Object）</li>
                <li>空值（NULL）</li>
                <li>資源（Resource）</li>
            </ul>
        </div>

        <div>
            <h2>
                字串（String）
            </h2>
            <hr/>
            <pre><?= <<< string
                一個字串符是一串字符的序列，就像 "Hello world!"

                可以放在 雙引號中 也可放在單引號中
                不同的是 雙引號中可使用變數，但單引號中只會存在字串
                \$test = "Hello world!";

                echo "\$test" 會印出 Hello world!
                echo '\$test' 會印出 \$test

                變數字串相加可以使用 雙引號 也可以使用 .

                例如 \$a . ' ' . \$b
                也可以 "\$a \$b"
                string ?>
            </pre>
        </div>
        <div>
            <h2>
                整數（Integer）
            </h2>
            <hr/>
            <pre><?= <<< integer
                整數必須至少有一個數字（0-9）
                整數不能包含逗號或空格
                整數是沒有小數點的
                整數可以是正數或負數
                整型可以用三種格式來指定：十進制，十六進制（以 0x 為前綴）或八進制（前綴為 0）
                integer ?>
            </pre>
        </div>
        <div>
            <h2>
                浮點數（Float）
            </h2>
            <hr/>
            <pre><?= <<< float
                含有小數點的數字都必須使用 float 型態
                float ?>
            </pre>
        </div>
        <div>
            <h2>
                布林值（Boolean）
            </h2>
            <hr/>
            <pre><?= <<< boolean
                布林值可以為 ture 也可為 false
                通常用於條件判斷
                boolean ?>
            </pre>
        </div>
        <div>
            <h2>
                陣列（Array）
            </h2>
            <hr/>
            <pre><?= <<< array
                陣列可以在一個變數中儲存多個資料

                順序從 0 開始
                例如: \$array = ['apple', 'banana', 'cow ']

                \$array[0] 就會是 apple
                \$array[1] 就會是 banana
                \$array[2] 就會是 cow

                如果要指定key值的話必須要用箭頭表示

                例如: \$array = ['a' => 'apple', 'b' => 'banana', 'c' =>'cow']
                array ?>
            </pre>
        </div>
        <div>
            <h2>
                物件（Object）
            </h2>
            <hr/>
            <pre><?= <<< object
                基本上物件可以理解為class使用
                物件其實跟陣列差不多 一樣可以在一個變數中儲存多個資料
                但不同的是必須給予裡面資料一個 key


                例如: \$object->color = 'red';
                object ?>
            </pre>
        </div>
        <div>
            <h2>
                空值（NULL）
            </h2>
            <hr/>
            <pre><?= <<< null
                Null 出現在於當一個物件需要這筆資料的時候，但目前因各種原因未知，就可以使用 Null
                null ?>
            </pre>
        </div>
        <div>
            <h2>
                資源（Resource）
            </h2>
            <hr/>
            <pre><?= <<< resource
                基本上用不到
                resource ?>
            </pre>
        </div>
    </div>
</div>
