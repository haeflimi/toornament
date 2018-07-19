<?php
namespace Concrete\Package\Toornament;

use Package,
    Core,
    Config,
    Events;

class Controller extends Package
{
    protected $pkgHandle = 'toornament';
    protected $appVersionRequired = '5.8';
    protected $pkgVersion = '0.9';

    public function getPackageName()
    {
        return t('Toornament Integration');
    }

    public function getPackageDescription()
    {
        return t('This package adds various features that allows to integrate gaming tournaments that are
        hosted on toornament.com on your concrete5 site.');
    }

    public function on_start()
    {

    }

    public function install()
    {
        $pkg = parent::install();
    }

    public function upgrade()
    {
        parent::upgrade();
    }

    public function uninstall(){

    }
}