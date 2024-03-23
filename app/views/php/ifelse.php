<div class="container">
    <div class="row d-flex flex-column">
        <div class="title">
            <h1>
                PHP 條件式
            </h1>
        </div>
        <div>
            <pre class="code"><?=<<< IFELSE
                <code>
                    if (true) {
                        # 這裡會被執行
                    }

                    \$a == 2;

                    if (\$a == 1) {
                        # 這裡會被跳過
                    }else {
                        # 只要不符合 if 就會都在這裡執行
                    }

                    if (\$a == 1) {
                        # 這裡會被跳過
                    }elseif (\$a == 2) {
                        # 這裡會被執行在 if 判斷式中可執行多個判斷
                    }else {
                        # 只要不符合 if 就會都在這裡執行
                    }

                    判斷式中可以使用邏輯運算符

                    例如 || &&

                    || 是或者 && 必須都為TRUE

                    例如: 今天沒下雨 && 今天沒睡過頭. 當兩者都為true 才會執行
                    例如: 今天沒下雨 || 今天沒睡過頭. 當只要一方為true 就會執行

                    在寫程式中有個基本上所有程式語言都有的三元運算式?

                    類似 \$foot = (true)? "apple": "banana";

                    當括號中為 true 的時候會賦予第一個, 為 flase 賦予後面的
                </code>
                IFELSE ?>
            </pre>
        </div>
    </div>
</div>
