<?php

return [

    'plugin' => [
        'name' => 'Carte Leaflet',
        'description' => 'Affiche OpenstreetMap et vous permet de marquer un emplacement',
    ],

    'components' => [
        'leafletmap' => [
            'name' => 'Carte Leaflet',
            'description' => 'Affiche OpenstreetMap et vous permet de marquer un emplacement',
            'latitude' => [
                'title' => 'Latitude de la carte',
                'name' => 'Map center latitude',
            ],
            'longitude' => [
                'title' => 'Longitude de la carte',
                'name' => 'Map center longitude',
            ],
            'zoom' => [
                'title' => 'Zoom',
                'description' => 'Valeur du zoom value de 0-18',
                'validationMessage' => 'The Zoom property can contain only numeric symbols',
            ],
            'markerLatitude' => [
                'title' => 'Latitude du marqueur',
                'description' => 'Latitude du marqueur. Si vide, pas de marqueur affiché',
            ],
            'markerLongitude' => [
                'title' => 'Longitude du marqueur',
                'description' => 'Longitude du marqueur. Si vide, pas de marqueur affiché',
            ],
            'markerText' => [
                'title' => 'Texte du Marqueur',
                'description' => 'Affiche le texte pré-défini sur le marqueur',
            ],
            'scrollProtection' => [
                'title' => 'Désactivé le Zoom',
                'description' => 'Désactivé les contrôles de la carte comme le zoom, jusqu\'à ce que l\'utilisateur click sur la carte.',
                'controlson' => 'Controls Enabled',
                'controlsoff' => 'Controls Disabled',
            ],
            'width' => [
                'title' => 'Largeur',
                'description' => 'Largeur de la carte.',
            ],
            'height' => [
                'title' => 'Hauteur',
                'description' => 'Hauteur de la carte.',
            ],
        ],
    ],

];
