<?php

class PluginAlbum_HookAlbum extends Hook
{

     public function RegisterHook() {
        $this->AddHook('template_main_menu_item', 'MenuMain', __CLASS__);
    }


    public function MenuMain() {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath('album') . 'tpls/menus/menu.main_menu.tpl');
    }

}

?>