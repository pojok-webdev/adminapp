<?php
class Common {
    function set_menu_active($par){
        foreach($this->getmenus() as $mn){
            $menu[$mn['name']] = '';
        }
        $menu[$par] = 'active';
        return $menu;
    }
    function getmenus(){
        return array(
            array('title'=>'Dashboard','url'=>'/Admin_dashboard','name'=>'dashboard'),
            array('title'=>'Users','url'=>'/Admin_users','name'=>'users'),
            array('title'=>'Clients','url'=>'/Admin_clients//','name'=>'clients'),
            array('title'=>'Tickets','url'=>'/Admin_tickets','name'=>'tickets'),
        );
    }
}