<?php
/**
 * 公用方法
 */

/**
 * 显示结果
 * @param $status
 * @param $message
 * @param array $data
 */
function show($status, $message, $data = array()) {
    $result = array(
        'status'   => $status,
        'message' => $message,
        'data'     => $data
    );
    exit(json_encode($result));
}