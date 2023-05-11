<?php namespace JosephCrowell\LeafletMap;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Leaflet Map',
            'description' => 'Leaflet Maps for Winter CMS',
            'author'      => 'Joseph Crowell',
            'icon'        => 'icon-globe'
        ];
    }

    public function registerComponents(){
        return [
                'JosephCrowell\LeafletMap\Components\LeafletMap' => 'LeafletMap',
        ];
    }

    public function registerSettings()
    {
    }
}
