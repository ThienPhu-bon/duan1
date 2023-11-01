<?php
    function get_nguoixem() {
        $sql = "SELECT * FROM sach ORDER BY view DESC limit 3";
        return get_all($sql);
    }
    function get_sachmoi() {
        $sql = "SELECT * FROM sach where new = 1 ";
        return get_all($sql);
    }
?>