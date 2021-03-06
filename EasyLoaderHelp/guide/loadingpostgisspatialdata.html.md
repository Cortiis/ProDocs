Loading PostGIS Spatial Data {#loading-postgis-spatial-data .title .topictitle1}
============================

EasyLoader uploads MapInfo tables into PostGIS, which stores spatial data in a geometry column called sp\_geometry. Unsupported data types are ignored resulting in an empty record in the sp\_geometry geometry column. For a list of unsupported data types, see [Unsupported Geometry](guide/unsupportedgeometry.html){.- .topic/xref .ajaxLink}.

EasyLoader uploads a table with a Serial datatype for the primary key column. This allows the database to automatically increment the key column.

To check if a geometry object is valid in PostGIS, use the function called isvalid. The following is an example SQL statement:

``` {.pre .codeblock}
select isvalid(sp_geometry) from test
```

