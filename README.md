# Leaflet Maps for Winter CMS

Simple plugin for displaying map with marked location using [Leaflet.js](http://leafletjs.com) and OpenStreet Maps.

Alternative for those who don't want to or can't use Google Maps or other commercial products.

You can set map center,  zoom level,  point a marker on the screen and set marker popup text. You can also disable or enable zoom by scroll behavior, for example to have full width maps than don't disrupt page scrolling.

The functionality is limited but allows you to quickly add a map with marker to any page.
For most use cases this should be more than enough.

## Features

* Uses the latest Leaflet from CDN
* You can customize map center, zoom, marker location and marker popup text
* Only one marker possible at this time
* All js, css and img files are included in the plugin
* Zoom control, zoom by scroll can be disabled until clicked on the map

## Installation

### Install the plugin directly from Composer

Type *componser require josephcrowell/wn-leafletmap-plugin* from the Winter CMS root directory and Composer will install the plugin

### Download the plugin directly from [Github](https://github.com/josephcrowell/wn-leafletmap-plugin)

Unpack it to *plugins/josephcrowell/leafletmap* directory. Logout and login into the backend, and the plugin should be installed now.

## Configuration

LeafletMap component settings

* **Latitude and Longitude** - Coordinates for the map center separated by coma ie. 50.002, -0.09. Check Get OSM Coordinates chapter to learn how to find your coordinates.
* **Zoom** – initial map zoom level. Should be a number.
* **Marker Latitude and Longitude** – latitude and longitude in the same format like map center coordinates. If this field is left empty no marker will be shown.
* **Marker Text** –  A short description that will be displayed  in a popup (when clicked on marker). It could be ie. address.
* **Scroll Protection** – Lets you control zoom behavior. By default the zooming feature by scroll/mouse wheel is disabled until visitor clicks on the map.
* **Width and Height** - Sets the width and height of the map container element

## Usage

Add the component to your page and configure it.
Add it to your page following the code:

``` twig
{% component 'LeafletMap' %}
```

The leafletmap div needs to have height defined. This height must be valid css and is set to 500px by default.
To change this value edit the height component option.

## Getting OSM coordinates and zoom settings

To find your coordinates and desired zoom level go to [OSM page](https://www.openstreetmap.org)
find desired location on the map (using search or just moving through the map with your mouse).
Double click on the desired location on the map.
The map will center automatically on the selected location.
Mouse scroll to set desired zoom level.
When everything is set click on the Share icon on the right side of the screen.
In the Geo URI check this string:

```
geo:41.6591,-4.7287?z=15
```

Paste the selected numbers to Component settings. The *?z=15* defines the zoom level (15 in the example).
Alternatively you could just check the link bar of your browser:

```
map=15/41.6591/-4.7287
```

## Contact

If you have any questions just ask!

 You can contact us at:

* [The Computerlink Website](http://computerlink.com.au)
