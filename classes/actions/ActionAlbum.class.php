<?php

/**
 * Экшен обработки URL'ов вида /album/
 *
 * @package actions
 * @since   1.0
 */
 
class PluginAlbum_ActionAlbum extends ActionPlugin {
    
    protected $sMenuHeadItemSelect = 'album';
    
	protected function RegisterEvent() {
	    $this->AddEvent('show_foto', 'EventShowFoto');
	    $this->AddEvent('all_foto', 'EventAllFoto');
	    $this->AddEventPreg('/^[\w\-\_]+$/i', '/^(page([1-9]\d{0,5}))?$/i', array('EventAlbum', 'album'));
    }
    
    protected function EventAlbum() {
        
        // Устанавливаем шаблон вывода
        $this->SetTemplateAction('index');
    }
    
    protected function EventAllFoto() {
        
        // Устанавливаем шаблон вывода
        $this->SetTemplateAction('all_foto');
    }
	
	protected function EventShowFoto() { 
        
	    // Устанавливаем шаблон вывода
        $this->SetTemplateAction('show_foto');
	}

	public function EventShutdown() {
		$this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);
		$this->Viewer_Assign('sMenuItemSelect',$this->sMenuItemSelect);
		$this->Viewer_Assign('sMenuSubItemSelect',$this->sMenuSubItemSelect);
	
	}
}

// EOF