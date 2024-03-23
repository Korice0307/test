<div class="container">
    <div class="row d-flex flex-column">
        <div class="title">
            <h1>
                PHP 流程控制
            </h1>
        </div>
        <div>
            <pre class="code"><?=<<< FUNCTION
                <code>
                    PHP 的檔案裡面都是寫 HTML 跟 Javascript

                    裡面需要使用到 PHP 的變數就會類似這樣

                    <pre>
                    &lt;?php if(isset(&dollar;list)) foreach(&dollar;list as &dollar;item): ?&gt;
                        &lt;li class="nav-item"&gt;
                            &lt;a class="nav-link&lt;?= (&dollar;item['menu'] == &dollar;menu) ? ' active' : '' ?&gt;" aria-current="page" href="index.php?page=&lt;?= &dollar;page ?&gt;&amp;menu=&lt;?= &dollar;item['menu'] ?&gt;"&gt;
                                &lt;?= &dollar;item['name'] ?&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                    &lt;?php endforeach ?&gt;
                    </pre>

                    PHP 中要使用 PHP 語法必須要在前方加上 &lt;?php 最後要用 ?&gt; 結尾;
                    但是因為正常的 if else 或者 echo 太醜太複雜了, 所以就有著流程控制專用的語法

                    有 &lt;?php foreach(&dollar;list as &dollar;item): ?&gt; 在最後使用 :? 來代表要做迴圈並且在每一個需要印字的地方使用 &lt;?= (&dollar;item['menu'] == &dollar;menu) ? ' active' : '' ?&gt;

                    foreach 的話最下面要加上 &lt;?php endforeach ?&gt; 代表 foreach 結束

                    &lt;?= 等同於 &lt;?php echo ?&gt;
                </code>
                FUNCTION ?>
            </pre>
        </div>
    </div>
</div>
