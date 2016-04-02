<?php
header('Content-type: text/plain');
if (isset($_GET["cat"])) {
    if (!empty($_GET["cat"])) {
        $cat = $_GET["cat"];
        if ($cat === "cat_1" || $cat === "cat_2" || $cat === "cat_3" || $cat === "cat_4"
            || $cat === "cat_5" || $cat === "cat_6" || $cat === "cat_7" || $cat === "cat_8"
            || $cat === "cat_9" || $cat === "cat_10") {
            foreach (glob("themes/" . $cat . "/sub_*.csv") as $filename) {
                $handle = fopen($filename, "r");
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {
                        echo $line;
                    }
                    fclose($handle);
                }
            }
        }
    }
}
