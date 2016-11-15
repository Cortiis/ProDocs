Loading Microsoft SQL Server Spatial Data {#loading-microsoft-sql-server-spatial-data .title .topictitle1}
=========================================

Microsoft SQL Server Spatial includes Geography and Geometry data types. Geography fields hold geometries specified in the Lat/Long coordinate system. Geometry fields hold geometries specified in all other coordinate systems.

If you choose to upload to a Geometry field type, then EasyLoader runs the SQL Server Spatial MakeValid( ) function to fix any geometry that SQL Server Spatial deems invalid. This may shift point locations for certain geometries.

In the `Options`{.uicontrol} dialog box, EasyLoader enables you to control how the geometry data in a native table is uploaded to SQL Server Spatial.

\
![](images/dialog_Options_micode_xy.png){.image .imagecenter width="260"}

\
Keep the default selection of `Always Geometry`{.uicontrol}if you want EasyLoader to always upload geometry objects to Geometry fields regardless of the coordinate system they use.

Select `Auto Select`{.uicontrol}if you want EasyLoader to automatically decide whether the geometry object is uploaded to a Geography field (in cases where the geometry object uses the Lat/Long coordinate system) or a Geometry field (in cases where the geometry object does not use the Lat/Long coordinate system).

<span class="notetitle">Note:`{.uicontrol} When the Auto Select option is selected, if for any reason a geometry object that uses the Lat/Long coordinate system cannot be uploaded to a Geography field, it will instead be uploaded to a Geometry field.

To view the Unsupported Geometries in SQL, see [Unsupported Geometries in Oracle, SQL Server, and PostGIS](contents/unsupportedgeometries.html){.- .topic/xref .ajaxLink}.

EasyLoader supports uploading MapInfo native tables into SQL Server Spatial. SQL Server Spatial allows spatial data to be stored into two data types; Geometry and Geography.

SQL Server's rules that define what a valid geometry or geography are different than MapInfo Pro's rules.

The SQL Server Spatial's Geography data type does not support:

-   polygons that contain self intersecting boundaries
-   geography instances that span more than one hemisphere
-   lines/polygon boundaries that have two successive, identical nodes

The SQL Server Spatial's Geometry type does not support:

-   polygons that contain self intersecting boundaries
-   lines/polygon boundaries that have two successive, identical nodes

Refer to SQL Server books online for complete information on the rules that define these two types at:

-   <http://www.microsoft.com/en-us/sqlserver/default.aspx>

This means that you may have geometry data that are valid in a MapInfo TAB format that cannot be loaded into SQL Server Spatial without correction/edits.

EasyLoader aborts the upload if it comes across the geometry that SQL Server rejects. It will display the primary key of the record that contains the rejected object. A "MapInfo Upload Utility Error" message displays.

You may want to try the following steps to make the geometry acceptable to SQL Server.

-   Use MapInfo Pro's `Clean`{.uicontrol} operation on the `Object`{.uicontrol} menu to correct the geometry.
-   If your upload was to Geography type and it fails, try loading it to Geometry, correct the instance using the MakeValid( ) method on the Geometry type, and uploading the instance again. You will need a working knowledge of SQL and access to a SQL Server Spatial client to use this approach.

Consider the following example. Let's suppose the Geometry update failed for the row (state = 'Florida').

-   selectively update the offending geometry, using the MakeValid( ) method

    update states\_geom set geom = geom.MakeValid( ) where state = 'Florida'

-   force an operation that does not alter the geometry, but forces a topology construction. here, we perform a union of the Geometry with its own start point

    update states\_geom set geom = geom.STUnion(geom.STStartPoint()) where state = 'Florida'

-   now this query will attempt to create a Geography instance from the reformed Geometry

    select state\_name, sw\_member, Geography::STGeomFromWKB(geom.STAsBinary(), 4269) from states\_geom, where state = 'Florida'

