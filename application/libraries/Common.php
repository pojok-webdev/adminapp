<?php
class Common {
    function set_menu_active($par){
        $menu['dashboard'] = '';
        $menu['users'] = '';
        $menu['clients'] = '';
        $menu['devices'] = '';
        $menu[$par] = 'active';
        return $menu;
    }
}