<?php

/**
 * Plugin Name: My First Plugin 
 * Plugin URI:  
 * Description: Đây là plugin demo của Hiếu.
 * Version: 1.0
 * Author: Admin Hiếu 
 * Author URI: 
 * License: GPLv2 or later
 */

if (!class_exists('my_first_plugin')) // Kiểm tra xem Class đã tồn tại hay chưa?
{
    class my_first_plugin
    {         // Tạo 1 class trùng tên với tên Plugin
        function __construct()
        {
            if (!function_exists('add_shortcode')) {
                return;
            }
            add_shortcode('hello', array(&$this, 'hello_func')); // Tạo shortcode với tên hello
        }
        function hello_func($atts = array(), $content = null)
        {  //Hàm hello_func dùng cho shortcode hello
            extract(shortcode_atts(array('name' => 'World'), $atts)); //Bổ sung các biến tùy chọn của shortcode
            return '<div><p> Hello ' . $name . ' !!!</p></div>'; // Kết quả trả về của shortcode
        }
    }
}
function vzndp_load()
{ // Hàm gọi shortcode
    global $vzndp;
    $vzndp = new my_first_plugin(); // Khởi tạo một biết với giá trị là một Vzn_Demo_Plugin
}
add_action('plugins_loaded', 'vzndp_load'); //Dùng Action để chạy hàm khởi tạo biến $vzndp khi plugin được tải