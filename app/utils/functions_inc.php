<?php
declare(strict_types=1);

/**
 * 讀取 template
 *
 * @param string $path 檔案名稱
 * @param array  $data 引入的變數
 * @param string $menu 第二層
 *
 * @return string
 */
function get_template(string $path, array $data = [], string $menu = ""): string
{
    $path = (empty($menu))
        ? __DIR__ . '\\..\\views\\' . $path . '.php'
        : __DIR__ . '\\..\\views\\' . $path . '\\'. $menu . '.php'
    ;

    extract($data, EXTR_OVERWRITE);

    if (file_exists($path)) {
        ob_start();
        require $path;
        $ouput = ob_get_clean();
        return $ouput;
    }

    return "";
}

/**
 * 輸出 template
 *
 * @param string $path 檔案名稱
 * @param array  $data 引入的變數
 * @return void
 */
function render(string $path, array $data = []): void
{
    $path = __DIR__ . '\\..\\views\\' . $path . '.php';
    extract($data, EXTR_OVERWRITE);
    require $path;
    exit;
}

/**
 * 載入 Controller
 *
 * @param string $path 檔案名稱
 *
 * @return void
 */
function load_controller(string $path): void
{
    $path = __DIR__ . '\\..\\controllers\\' . $path . '_controller.php';
    if (file_exists($path)) {
        require $path;
    }
}

/**
 * 讀取第二層資料
 *
 * @param string
 *
 * @return array
 */
function get_menu(string $page = "home"): array
{
    $raw  = file_get_contents(__DIR__ . '\\..\\resource\\menu.json');
    $data = json_decode($raw, true);

    if (isset($data[$page])) {
        return $data[$page];
    }else {
        return [];
    }
}
