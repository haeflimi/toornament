<?php
namespace Concrete\Package\Toornament\Block\ToornamentWidgets;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Localization\Localization;

class Controller extends BlockController
{
    protected $btTable = 'btToornamentWidgets';
    protected $btInterfaceWidth = "1024";
    protected $btInterfaceHeight = "768";
    protected $btCacheBlockRecord = false;
    protected $btCacheBlockOutput = false;
    protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
    protected $btCacheBlockOutputOnPost = false;
    protected $btCacheBlockOutputForRegisteredUsers = false;

    protected $toornamentID;
    protected $widgetMode;
    protected $stages;
    protected $height;

    public function getBlockTypeName()
    {
        return t('Toornament Widgets');
    }

    public function getBlockTypeDescription()
    {
        return t('Easyly insert Widgets for toornament.com hosted eSports
        tournaments on your concrete 5 site.');
    }

    public function add()
    {
        $this->prepFormData();
    }

    public function edit()
    {
        $this->prepFormData();
    }


    public function save($args)
    {
        parent::save($args);
    }

    public function view()
    {
        $this->set('widgetMode', $this->widgetMode);
        $this->set('height', $this->height);
        $this->set('locale', Localization::activeLocale());
        $this->set('toornamentID', $this->toornamentID);
        $this->set('stages', $this->stages);
    }

    private function prepFormData()
    {
        $widgets = [
            'tournament' => t('Tournament Widget'),
            'schedule' => t('Schedule Widget'),
            'stage' => t('Stage Widget'),
            'tv' => t('ToornamentTV'),
        ];
        $this->set('stages', $this->stages);
        $this->set('height', $this->height);
        $this->set('toornamentID', $this->toornamentID);
        $this->set('widgetMode', $this->widgetMode);
        $this->set('widgets', $widgets);
    }
}