Loading Microsoft SQL Server Spatial Data {#loading-microsoft-sql-server-spatial-data .title .topictitle1}
=========================================

Microsoft SQL Server Spatial includes Geography and Geometry data types. Geography fields hold geometries specified in the Lat/Long coordinate system. Geometry fields hold geometries specified in all other coordinate systems. If you choose to upload to a Geometry field type, then MapInfo EasyLoader runs the SQL Server Spatial **MakeValid( )** function to fix any geometry that SQL Server Spatial deems invalid. This may shift point locations for certain geometries.

In the `Options`{.uicontrol} dialog box, MapInfo EasyLoader enables you to control how the geometry data in a native table is uploaded to SQL Server Spatial.

Keep the default selection of `Always Geometry`{.uicontrol} to have MapInfo EasyLoader upload geometry objects to Geometry fields regardless of the coordinate system they use.

Select `Auto Select`{.uicontrol} to have MapInfo EasyLoader automatically decide whether the geometry object is uploaded to a Geography field (in cases where the geometry object uses the Lat/Long coordinate system) or a Geometry field (in cases where the geometry object does not use the Lat/Long coordinate system).

<span class="notetitle">Note:`{.uicontrol} When the Auto Select option is selected, if for any reason a geometry object that uses the Lat/Long coordinate system cannot be uploaded to a Geography field, it will instead be uploaded to a Geometry field.

To view the Unsupported Geometries in SQL, see [Unsupported Geometry](guide/uploading/unsupportedgeometry.html){.- .topic/xref .ajaxLink}.

MapInfo EasyLoader supports uploading MapInfo native tables into SQL Server Spatial. SQL Server Spatial allows spatial data to be stored into two data types; Geometry and Geography. SQL Server's rules that define what a valid geometry or geography are different than MapInfo Pro's rules. The SQL Server Spatial's Geography data type does not support:

-   polygons that contain self-intersecting boundaries
-   geography instances that span more than one hemisphere
-   lines/polygon boundaries that have two successive, identical nodes

The SQL Server Spatial's Geometry type does not support:

-   polygons that contain self-intersecting boundaries
-   lines/polygon boundaries that have two successive, identical nodes

Refer to SQL Server books online for complete information on the rules that define these two types at:

-   <http://www.microsoft.com/en-us/sqlserver/default.aspx>

This means that you may have geometry data that are valid in a MapInfo TAB format that cannot be loaded into SQL Server Spatial without correction/edits. MapInfo EasyLoader aborts the upload if it comes across the geometry that SQL Server rejects. It will display the primary key of the record that contains the rejected object. A "MapInfo Upload Utility Error" message displays.

You may want to try the following steps to make the geometry acceptable to SQL Server.

-   Use MapInfo Pro's `Clean`{.uicontrol} operation on the `Object`{.uicontrol} menu to correct the geometry.
-   If your upload was to Geography type and it fails, try loading it to Geometry, correct the instance using the MakeValid( ) method on the Geometry type, and uploading the instance again. You will need a working knowledge of SQL and access to a SQL Server Spatial client to use this approach.

Consider the following example. Let us suppose the Geometry update failed for the row (state = 'Florida').

-   Selectively update the offending geometry, using the MakeValid( ) method.

    ``` {.pre .codeblock}
    update states_geom set geom = geom.MakeValid( ) where state = 'Florida'
    ```

-   Force an operation that does not alter the geometry, but forces a topology construction. Here, we perform a union of the Geometry with its own start point.

    ``` {.pre .codeblock}
    update states_geom set geom = geom.STUnion(geom.STStartPoint()) where state = 'Florida'
    ```

-   Now this query will attempt to create a Geography instance from the reformed Geometry.

    ``` {.pre .codeblock}
    select state_name, Geography::STGeomFromWKB(geom.STAsBinary(), 4269) from states_geom, where state = 'Florida'
    ```

