Spatial Object Type Options {#spatial-object-type-options .title .topictitle1}
===========================

<div class="body conbody">

Choose from <span class="ph uicontrol">Oracle Spatial</span> (depending on the type of connection), <span class="ph uicontrol">MICODE</span> (XY with MapInfo Key), <span class="ph uicontrol">XY</span>, <span class="ph uicontrol">PostGIS Spatial</span>, or <span class="ph uicontrol">SQL Server Spatial</span>. The default for loading spatial data is <span class="ph uicontrol">SQL Server Spatial (Auto Select)</span> if this option is available. Otherwise, MapInfo EasyLoader defaults to the <span class="ph uicontrol">MICODE</span> option.

<span class="ph uicontrol">Oracle Spatial</span>
:   Use this option if the server is Oracle Spatial.

<span class="ph uicontrol">MICODE (XY with MapInfo Key)</span>
:   This option stores the data as XY coordinates on the server and creates the server table as a point table. If the MapInfo table to be uploaded is not a point table and this option is chosen, the centroid is abstracted and stored on the server table, if you instruct it to do so. The difference between <span class="ph uicontrol">XY</span> and <span class="ph uicontrol">MICODE</span> is that the <span class="ph uicontrol">MICODE</span> provides a MapInfo key as the spatial index, making its performance superior to <span class="ph uicontrol">XY</span>.

<span class="ph uicontrol">XY</span>
:   This option is the same as the <span class="ph uicontrol">MICODE</span> option, except that this option does not create a spatial index.

<span class="ph uicontrol">PostGIS Spatial</span>
:   Use this option with a spatialized <span class="ph uicontrol">PostgreSQL</span> database.

<span class="ph uicontrol">SQL Server Spatial</span>
:   Use these options if the server is Microsoft SQL Server Spatial:
:   <span class="ph uicontrol">Auto Select</span> – MapInfo EasyLoader automatically decides whether to upload the geometry object to a Geography field (if the geometry object is using a Lat/Long coordinate system) or to a Geometry field (if the geometry object is using another coordinate system).
:   <span class="ph uicontrol">Always Geometry</span> – MapInfo EasyLoader always uploads the geometry object to a Geometry field, regardless of the coordinate system specified for the geometry object.

<div class="note note">

<span class="notetitle">Note:</span> When the <span class="ph uicontrol">Auto Select</span> option is selected, if for any reason a geometry object that uses the Lat/Long coordinate system cannot be uploaded to a Geography field, it will instead be uploaded to a Geometry field.

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [About Upload Options](guide/uploading/../../guide/uploading/aboutuploadoptions.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
