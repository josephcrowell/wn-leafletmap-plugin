<?php

    return [

        'plugin' => [
            'name'              => 'Leaflet Map',
            'description'       => 'Show Location Map using LeafLet and OpenStreetMaps'
        ],

        'components' => [
            'leafletmap' => [
                'name'        => 'Leaflet Map',
                'description' => 'Displays OpenStreetMap and lets you mark one location',
                'latitude' => [
                    'title'     => 'Map Latitude',
                    'name'      => 'Map center latitude'
                ],
                'longitude' => [
                    'title'     => 'Map Longitude',
                    'name'      => 'Map center longitude'
                ],
                'zoom' => [
                    'title'             => 'Zoom',
                    'description'       => 'Zoom value from 0-18',
                    'validationMessage' => 'The Zoom property can contain only numeric symbols'
                ],
                'markerLatitude' => [
                    'title'       => 'Marker Latitude',
                    'description' => 'Marker latitude. If left empty no marker will be shown',
                ],
                'markerLongitude' => [
                    'title'       => 'Marker Longitude',
                    'description' => 'Marker longitude. If left empty no marker will be shown',
                ],
                'markerText' => [
                    'title'       => 'Marker text',
                    'description' => 'Show defined text on the marker',
                ],
                'scrollProtection' => [
                    'title'         => 'Map Controls',
                    'description'   => 'Lets you control zoom behavior. You can disable map zoom by scroll with touchpad, mouse wheel etc. The zoom will be activated after clicking on the map',
                    'controlson' => 'Zoom Enabled',
                    'controlsoff' => 'Zoom Disabled'
                ],
                'width' => [
                    'title'         => 'Width',
                    'description'   => 'The map width.'
                ],
                'height' => [
                    'title'         => 'Height',
                    'description'   => 'The map height.'
                ]
            ]
        ]

    ];

?>
