<div class="container">
    <div class="row d-flex flex-column">
        <div class="content">
            <div>
                <h2>
                    基礎規則
                </h2>
                <p>
                    <?=
                    <<<basic
                    <hr/>
                    使用 TABS 來分出層次<br/>
                    在 PHP 程式碼前後要以 &lt;?php ?&gt; 這樣來撰寫<br/>
                    basic ?>
                </p>
            </div>
            <div>
                <h2>
                    命名規則
                </h2>
                <p>
                    <?=
                    <<<name
                    <hr/>
                    檔案名稱小寫使用Snake Case<br/>
                    Class 使用Upper Camel Case<br/>
                    Variables與Function 使用Lower Camel Case<br/>
                    name ?>
                </p>
            </div>
            <div>
                <h2>
                    變數規則
                </h2>
                <p>
                    <?=
                    <<< variables
                    <hr/>
                    計算性的變數應以被計算的變數名稱後面接 _count 的格式來命名, 例如. \$bug_count<br/>
                    全域性的變數前面應該加上 g_<br/>
                    存放 session 的變數前面應該加上 sess_<br/>
                    存放 cookie 的變數前面應該加上 cookie_<br/>
                    臨時(temp)的變數前面應該加上 t_<br/>
                    非公開 private 變數or函式前方應該_開頭<br/>
                    <br/>
                    PHP變數與代數類似，可以給予PHP變數某個值（x=5）或者表達式（z=x+y）。<br/>
                    <br/>
                    變數可以是很短的名稱（如 x 和 y）或者更具描述性的名稱（如 age、carname、totalvolume）。<br/>
                    <br/>
                    變數以 $ 符號開始，後面跟著變數的名稱。<br/>
                    變數名必須以字母或者下劃線字符開始。<br/>
                    變數名只能包含字母、數字以及下劃線（A-z、0-9 和 _ ）。<br/>
                    變數名不能包含空格。<br/>
                    變數名是區分大小寫的（\$y 和 \$Y 是兩個不同的變數）。<br/>
                    PHP語句和PHP變數都是區分大小寫的。<br/>

                    private 的變數通常會使用_為開頭;
                    variables ?>
                </p>
            </div>
            <div>
                <h2>
                    常數
                </h2>
                <p>
                    <?=
                    <<< constant
                    <hr/>
                    常數名稱完全採用大寫英文字母.<br/>
                    字與字之間使用 _ 來連接, 例如. ROOT_PATH<br/>
                    全域性的常數前面應該加上 G_<br/>
                    private 的變數通常會使用_為開頭;<br/>
                    constant ?>
                </p>
            </div>
            <div>
                <h2>
                    函式
                </h2>
                <p>
                    <?=
                    <<< function
                    <hr/>
                    函式名稱完全採用小寫英文字母.<br/>
                    字與字之間使用 _ 來連接, 例如. setup_page_breaks()<br/>
                    要儘量將功能有相關的函式加上相同的前置文字(可容易看出是相同群組的函式) 例如. email_, news_, … 等等.<br/>
                    function ?>
                </p>
            </div>
            <div>
                <h2>
                  SQL 格式
                </h2>
                <p>
                    <?=
                    <<< sql
                    <hr/>
                    所有 SQL 的關鍵字必須採用大寫英文字母<br/>
                    範例： \$query = "SELECT * FROM \$name_table WHERE id='1'";
                    sql ?>
                </p>
            </div>
        </div>
    </div>
</div>
