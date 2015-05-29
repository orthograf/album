<?php

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginAlbum extends Plugin { 
        
    // Инициализация плагина
    public function Init()
    {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__) . "assets/css/style.css"); // Добавление своего CSS
        $this->Viewer_Assign('sTPAlbum', rtrim(Plugin::GetTemplatePath('album'), '/'));
        $this->Viewer_Assign('sTWAlbum', rtrim(Plugin::GetTemplateWebPath('album'), '/'));
    }
}
