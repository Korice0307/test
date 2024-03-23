<div class="container">
    <div class="row d-flex flex-column">
        <div class="title">
            <h1>
                PHP 迴圈
            </h1>
        </div>
        <div class="content">
            <ul>
                <li>while</li>
                <li>do...while</li>
                <li>for</li>
                <li>foreach</li>
            </ul>
        </div>
        <div>
            <h2>
                While
            </h2>
            <pre class="code"><?=<<< While
                # 會先判斷才開始迴圈
                # 需要注意迴圈中是否會停止判斷
                <code>
                    while(\$i < 10){
                        if(\$i == 7){
                            break; //執行到這邊結束while迴圈
                        }
                        echo \$i++; //輸出\$i，並且每次+1
                    }
                </code>
                While ?>
            </pre>
        </div>
        <div>
            <h2>
                do...while
            </h2>
            <pre class="code"><?=
                <<< DoWhile
                # 先執行一次才會判斷是否繼續迴圈
                # 需要注意迴圈中是否會停止判斷
                <code>
                    \$i = 1;

                    do{
                        if(\$i == 7){
                            break; //執行到這邊結束do...while
                        }
                        echo \$i++; //輸出\$i，並且每次+1
                    }
                    while(\$i < 10);

                    //output:123456
                </code>
                DoWhile ?>
            </pre>
        </div>
        <div>
            <h2>
                for
            </h2>
            <pre class="code"><?=
                <<< For
                # 最基本也最常使用的迴圈
                # 要注意的是i++ 以及 ++i 不同之處
                <code>
                    for(\$i=1;\$i<10;\$i++){
                        if(\$i == 7){
                            break;//執行到這邊結束for迴圈
                        }
                        echo \$i;
                    }
                </code>
                For ?>
            </pre>
        </div>
        <div>
            <h2>
                foreach
            </h2>
            <pre class="code"><?=
                <<< Foreach
                # PHP 後續新增的非常好用迴圈
                <code>
                    \$array = ['a' => 'apple','b' => 'banana', 'c' => 'cow'];

                    foreach(\$array as \$key => \$value){
                        if(\$key == 'c'){
                            break;
                        }
                        echo 'key:'.\$key.',value:'.\$value;
                    }

                    /*output:
                    key:A,value:apple
                    key:B,value:banana
                </code>

                # 也可以不使用 key
                <code>
                    foreach(\$array as \$value){
                        echo 'value'.\$value;
                    }
                    /*output:
                    key:A,value:apple
                    key:B,value:banana
                    key:C,value:Cow
                </code>
                Foreach ?>
            </pre>
        </div>
        <div>
            <p>
                中斷迴圈(break)
            </p>
            <p>
                跳過這次，繼續執行下一次迴圈(continue)
            </p>
        </div>
    </div>
</div>
