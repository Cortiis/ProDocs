Spatial Object Type Options {#spatial-object-type-options .title .topictitle1}
===========================

Choose from `Oracle Spatial`{.uicontrol} (depending on the type of connection), `MICODE`{.uicontrol} (XY with MapInfo Key), `XY`{.uicontrol}, `PostGIS Spatial`{.uicontrol}, or `SQL Server Spatial`{.uicontrol}. The default for loading spatial data is `SQL Server Spatial (Auto Select)`{.uicontrol} if this option is available. Otherwise, MapInfo EasyLoader defaults to the `MICODE`{.uicontrol} option.

`Oracle Spatial`{.uicontrol}
:   Use this option if the server is Oracle Spatial.

`MICODE (XY with MapInfo Key)`{.uicontrol}
:   This option stores the data as XY coordinates on the server and creates the server table as a point table. If the MapInfo table to be uploaded is not a point table and this option is chosen, the centroid is abstracted and stored on the server table, if you instruct it to do so. The difference between `XY`{.uicontrol} and `MICODE`{.uicontrol} is that the `MICODE`{.uicontrol} provides a MapInfo key as the spatial index, making its performance superior to `XY`{.uicontrol}.

`XY`{.uicontrol}
:   This option is the same as the `MICODE`{.uicontrol} option, except that this option does not create a spatial index.

`PostGIS Spatial`{.uicontrol}
:   Use this option with a spatialized `PostgreSQL`{.uicontrol} database.

`SQL Server Spatial`{.uicontrol}
:   Use these options if the server is Microsoft SQL Server Spatial:
:   `Auto Select`{.uicontrol} – MapInfo EasyLoader automatically decides whether to upload the geometry object to a Geography field (if the geometry object is using a Lat/Long coordinate system) or to a Geometry field (if the geometry object is using another coordinate system).
:   `Always Geometry`{.uicontrol} – MapInfo EasyLoader always uploads the geometry object to a Geometry field, regardless of the coordinate system specified for the geometry object.

<span class="notetitle">Note:`{.uicontrol} When the `Auto Select`{.uicontrol} option is selected, if for any reason a geometry object that uses the Lat/Long coordinate system cannot be uploaded to a Geography field, it will instead be uploaded to a Geometry field.

