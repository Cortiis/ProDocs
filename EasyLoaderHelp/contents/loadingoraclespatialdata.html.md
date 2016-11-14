Loading Oracle Spatial Data {#loading-oracle-spatial-data .title .topictitle1}
===========================

<div class="body conbody">

You can upload Oracle Spatial data using EasyLoader.

<div id="loadingoraclespatialdata__loadingfororaclelocator" class="section">

Loading for Oracle Locator {#loading-for-oracle-locator .title .sectiontitle}
--------------------------

EasyLoader loads data for the Oracle Locator. Loading data for the Oracle Locator is the same as loading data for Oracle Spatial.

</div>

<div id="loadingoraclespatialdata__loadinglatlongintooracle9i" class="section">

Loading Long/Lat Tables into Oracle 9i {#loading-longlat-tables-into-oracle-9i .title .sectiontitle}
--------------------------------------

When uploading tables that use the Longitude/Latitude coordinate system (Geodetic Data) to Oracle 9i, it is important to verify that all geometry coordinates are between (-180,180) longitude and (-90, 90) latitude. Geodetic data coordinates beyond that range are not supported in Oracle Spatial and may cause problems. You may check your data using MapInfo Pro before loading, or by using the Oracle Spatial SDO\_GEOM.VALIDATE\_LAYER( ) function on the table after loading it to Oracle Spatial.

<div class="note note">

<span class="notetitle">Note:</span> EasyLoader assigns the default datum World Geodetic System 1984 (WGS84) to any “datumless” Long/Lat coordinate system when loading Oracle 9i.

</div>

</div>

<div id="loadingoraclespatialdata__loadingnativetablesthatcontaintextobjectsintooracle11g" class="section">

Loading Native Tables that Contain Text Objects into Oracle 11g {#loading-native-tables-that-contain-text-objects-into-oracle-11g .title .sectiontitle}
---------------------------------------------------------------

If you are using Oracle 11g or later, you can use EasyLoader to upload a native table (TAB file) that contains text objects to an Oracle Spatial database table. (Previous versions of EasyLoader discarded any text objects when uploading a TAB file to Oracle.) When you upload the TAB file, EasyLoader uploads the text objects to Oracle as annotation text fields.

Oracle 11g stores MapInfo geometry objects (such as points, polylines, and polygons) as SDO\_GEOMETRY types and stores MapInfo text objects as ANNOTATION\_TEXT types. A TAB file may contain both geometry and text objects. MapInfo Pro, however, only supports database tables that have one object column. Because of this limitation, if the TAB file you are uploading contains both types of objects, EasyLoader will prompt you to select which object type you want to upload: <span class="ph uicontrol">Text Objects</span> or <span class="ph uicontrol">Geometry</span>.

When you upload a TAB file that contains text objects to Oracle 11g, you are prompted to specify a numeric value representing the map scale to be used along with the text attributes. Enter a value in the <span class="ph uicontrol">Default Map Base Scale</span> field or keep the value shown.

You can define map base scale as a value at which the text will be drawn on the map at the size specified in the attributes.

</div>

<div id="loadingoraclespatialdata__validatingoracledata" class="section">

Validating Oracle Data {#validating-oracle-data .title .sectiontitle}
----------------------

There are two functions that allow you to validate data on Oracle:

1.  SDO\_GEOM.VALIDATE\_GEOMETRY( )
2.  SDO\_GEOM.VALIDATE\_LAYER( )

These functions may result in validation errors due to the tolerance level set by EasyLoader. You may get error messages such as:

> "ORA-13356 adjacent points in a geometry are redundant", or "ORA-13022 polygon crosses itself"

To resolve these errors, reset the tolerance within the USER\_SDO-GEOM\_METADATA by adjusting them downwards (by a factor of 10) and rerun the validation.

<div class="note note">

<span class="notetitle">Note:</span> If you adjust the tolerance, you must re-create the spatial indexes because they use the tolerance when they are created.

</div>

To view the Unsupported Geometries in Oracle See [Unsupported Geometries in Oracle, SQL Server, and PostGIS](contents/unsupportedgeometries.html){.- .topic/xref .ajaxLink}.

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Uploading Data with MapInfo EasyLoader](contents/../contents/chapterintro.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
