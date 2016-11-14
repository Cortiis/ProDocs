Using the Map Catalog {#using-the-map-catalog .title .topictitle1}
=====================

The <span class="ph filepath">MAPINFO\_MAPCATALOG</span> is a registry table for databases that stores metadata about geometry tables in the database. Using both the table name and owner name as the key, the <span class="ph filepath">MAPINFO\_MAPCATALOG</span> identifies the geometry column, geometry type, projection, projection bounds, and table and feature level rendition information. The <span class="ph filepath">MAPINFO\_MAPCATALOG</span> is used by a number of MapInfo products, including MapInfo Pro, that access map data from databases.

If a Map Catalog does not exist, it can be created during the upload process by selecting the check box in the <span class="ph uicontrol">Catalog</span> column for the table being uploaded. The user account for the server connection must have permission to the MapInfo schema on the server to create the map catalog. If it does not have adequate permissions, then creation will not succeed and the table will not upload. If this happens, ask the database administrator to grant you permission to the MapInfo schema.

After the table is uploaded, an entry is made in the <span class="ph filepath">MAPINFO.MAPINFO\_MAPCATALOG</span> to represent that table. A separate entry is made for every table you upload.

If the table is made up of a single type of object, then the server object type is restricted to that type, otherwise the type is ALL. Also, the symbol clause generated is based on the server type. For example: After uploading the table <span class="ph filepath">states.tab</span> the server type will be x.2 (polygons), where x is a number that represents either IDS, SQL Server, or Oracle Spatial, and the symbol clause will have only the information for a polygon.

<span class="notetitle">Note:</span> See also, [Loading Microsoft SQL Server Spatial Data](guide/uploading/loadingsqlserverspatialdata.html){.- .topic/xref .ajaxLink}.

