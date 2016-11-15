Using the MAPINFO\_MAPCATALOG {#using-the-mapinfo_mapcatalog .title .topictitle1}
=============================

The MAPINFO\_MAPCATALOG is a registry table for databases that stores metadata about geometry tables in the database. Using the tablename and ownername as the key, the MAPINFO\_MAPCATALOG identifies the geometry column, geometry type, projection, projection bounds, and table and feature level rendition information. The MAPINFO\_MAPCATALOG is used by a number of MapInfo products, including MapInfo Pro, that access map data from databases.

If a Map Catalog does not exist, it can be created during the upload process when running EasyLoader. When using ODBC, EasyLoader will not issue public grants, which must be done by other means. If you do not have adequate permissions then creation will not succeed and the table will not be uploaded.

After the table is uploaded, an entry is made in the MAPINFO.MAPINFO\_MAPCATALOG to represent that table. A separate entry is made for every table you upload.

If the table is made up of a single type of object, then the server object type is restricted to that type, otherwise the type is ALL. Also, the symbol clause generated is based on the server type. For example: After uploading the table 'States.tab' the server type will be X.2 (polygons), where X is a number that represents either IDS, SQL Server, or Oracle Spatial, and the symbol clause will have only the information for a polygon.

<span class="notetitle">Note:`{.uicontrol} See also, [Loading Microsoft SQL Server Spatial Data](contents/loadingsqlserverspatialdata.html){.- .topic/xref .ajaxLink}.

