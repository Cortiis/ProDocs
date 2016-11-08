Unsupported Geometries in Oracle, SQL Server, and PostGIS {#unsupported-geometries-in-oracle-sql-server-and-postgis .title .topictitle1}
=========================================================

<div class="body conbody">

Some times when you are creating a Map in MapInfo Pro and you are
storing the results in Oracle, SQL Server Spatialware, SQL Server
Spatial, or PostGIS, you create maps which use geometries that are not
supported by these DBMS engines.

-   **Oracle** does not support arcs, ellipses, rectangles, and
    rounded rectangles.
-   **SQL Server Spatial** does not support arcs, and lines that do not
    have distinct points
-   **SQL Server SpatialWare** does not support arcs, ellipses, and
    rounded rectangles.
-   **PostGIS** does not support arcs, ellipses, rectangles, and rounded
    rectangles

EasyLoader will skip the unsupported object type and insert the
attribute data, it will not dislay a message.

> SQL Server Restriction on Geography Objects

SQL Server uploads invalid Geometry objects and converts them to valid
using a SQL server command, but SQL Server does not upload invalid
Geography objects. Attempting to upload invalid Geography objects causes
EasyLoader to fail. This is a limitation of SQL Server and not of
EasyLoader.

Due to this SQL Server limitation, our recommendation is to upload only
as Geometry.

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Uploading Data with MapInfo
EasyLoader](contents/../contents/chapterintro.html){.- .topic/link
.ajaxLink}

</div>

</div>

</div>
