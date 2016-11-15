Loading Oracle Spatial Data {#loading-oracle-spatial-data .title .topictitle1}
===========================

There are things to be aware of when uploading data tables to an Oracle database, such as:
-   You cannot replace version-enabled tables in Oracle. This would make child versions of these tables obsolete.
-   Oracle has a limit on identifier names, which cannot be more than 30 bytes. For details, see <http://docs.oracle.com/database/121/SQLRF/sql_elements008.htm#SQLRF51129>. The total number of bytes for table names, columns names, primary key constraint names (table name + "\_PK") and index names (column name + "\_IX") must not exceed 30 bytes. The number of bytes that each character uses is dependent upon the character set that Oracle is using. If you see the message "Identifier is too long", then make server table names or column names shorter.

Validating Oracle Data {#validating-oracle-data .title .sectiontitle}
----------------------

There are two functions that allow you to validate data in Oracle:

1.  SDO\_GEOM.VALIDATE\_GEOMETRY( )
2.  SDO\_GEOM.VALIDATE\_LAYER( )

These functions may result in validation errors due to the tolerance level set by EasyLoader. You may get error messages such as:

> "ORA-13356 adjacent points in a geometry are redundant", or "ORA-13022 polygon crosses itself"

To resolve these errors, reset the tolerance within the USER\_SDO-GEOM\_METADATA by adjusting them downwards (by a factor of 10) and rerun the validation.

<span class="notetitle">Note:`{.uicontrol} If you adjust the tolerance, you must re-create the spatial indexes because they use the tolerance when they are created.

To view the Unsupported Geometries in Oracle See [Unsupported Geometry](guide/unsupportedgeometry.html){.- .topic/xref .ajaxLink}.

Loading for Oracle Locator {#loading-for-oracle-locator .title .sectiontitle}
--------------------------

EasyLoader loads data for the Oracle Locator, which is the same as loading data for Oracle Spatial.

Loading Long/Lat Tables to Oracle 9i {#loading-longlat-tables-to-oracle-9i .title .sectiontitle}
------------------------------------

When uploading tables that use the Longitude/Latitude coordinate system (Geodetic Data) to Oracle 9i, it is important to verify that all geometry coordinates are between (-180,180) longitude and (-90, 90) latitude. Geodetic data coordinates beyond that range are not supported in Oracle Spatial and may cause problems. You may check your data using MapInfo Pro before loading, or by using the Oracle Spatial SDO\_GEOM.VALIDATE\_LAYER( ) function on the table after loading it to Oracle Spatial.

<span class="notetitle">Note:`{.uicontrol} EasyLoader assigns the default datum World Geodetic System 1984 (WGS84) to any “datumless” Long/Lat coordinate system when loading Oracle 9i.

