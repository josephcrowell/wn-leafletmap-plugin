<?php
namespace JosephCrowell\LeafletMap\Components;

use Cms\Classes\ComponentBase;

class LeafletMap extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'josephcrowell.leafletmap::lang.components.leafletmap.name',
            'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.description',
        ];
    }
    public function defineProperties()
    {
        return [
            'latitude' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.latitude.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.latitude.name',
                'type' => 'string',
                'default' => '51.505',
            ],
            'longitude' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.longitude.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.longitude.name',
                'type' => 'string',
                'default' => '-0.09',
            ],
            'zoom' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.zoom.title',
                'type' => 'string',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.zoom.description',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'josephcrowell.leafletmap::lang.components.leafletmap.zoom.validationMessage',
                'default' => '12',
            ],
            'markerLatitude' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerLatitude.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerLatitude.description',
                'type' => 'string',
            ],
            'markerLongitude' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerLongitude.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerLongitude.description',
                'type' => 'string',
            ],
            'markerText' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerText.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.markerText.description',
                'default' => '',
                'type' => 'text',
            ],
            'scrollProtection' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.scrollProtection.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.scrollProtection.description',
                'default' => 'false',
                'type' => 'dropdown',
                'options' => [
                    "false" => "josephcrowell.leafletmap::lang.components.leafletmap.scrollProtection.controlson",
                    "true" => "josephcrowell.leafletmap::lang.components.leafletmap.scrollProtection.controlsoff",
                ],
            ],
            'width' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.width.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.width.description',
                'default' => '100%',
                'type' => 'text',
            ],
            'height' => [
                'title' => 'josephcrowell.leafletmap::lang.components.leafletmap.height.title',
                'description' => 'josephcrowell.leafletmap::lang.components.leafletmap.height.description',
                'default' => '500px',
                'type' => 'text',
            ],
        ];
    }

    public function onRun()
    {
        $this->addJs('https://unpkg.com/leaflet@1.9.3/dist/leaflet.js');
        $this->addCss('https://unpkg.com/leaflet@1.9.3/dist/leaflet.css');

        $this->addJs('assets/js/leaflet-component.js');
    }

}
