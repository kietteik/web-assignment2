<?php
include '../classes/vitri.php';
include '../classes/product.php';
include_once '../helper/format.php';

$pd = new product();
$loc = new vitri();
$fm = new Format();

if (isset($_POST['query'])) {
    $key = $_POST['query'];
    $numOfResult = 5;
    if ($list = $pd->showAllProduct($numOfResult, $key)) {
        while ($item = $list->fetch_assoc()) {
            echo '<a href="product.php?pdid=' . $item['productId'] . '" class="list-group-item list-group-item-action border-1">
                <div class="row">
                    <div class="col-8 black-text header3">' . $item['productName'] . '</div>
                    <div class="col-4 black-text header2">' . $item['vitriName'] . '</div>
                </div>
            </a>';
        }
    } else {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">
            <div class="row">
                <div class="col-8 black-text header3">No results</div>

            </div>
        </a>';
    }
}
