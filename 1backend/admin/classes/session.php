<?php
 
// class session {
    
    function start()
    {
        session_start();
    }
 
    // Hàm lưu session 
    function send($user)
    {
        $_SESSION['user'] = $user;
    }
 
    // Hàm lấy dữ liệu session
    function get() 
    {
        if (isset($_SESSION['user']))
        {
            $user = $_SESSION['user'];
        }
        else
        {
            $user = '';
        }
        return $user;
    }
 
    function destroy() 
    {
        session_destroy();
    }
// }
 
?>