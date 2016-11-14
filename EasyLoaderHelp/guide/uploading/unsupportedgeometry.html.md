Unsupported Geometry {#unsupported-geometry .title .topictitle1}
====================

A MapInfo Pro map may contain geometries that are unsupported by the database that the results are stored in. MapInfo EasyLoader skips unsupported object type and inserts the attribute data. No message displays.

-   **Oracle** does not support arcs, ellipses, rectangles, and rounded rectangles.
-   **PostGIS** does not support arcs, ellipses, rectangles, and rounded rectangles
-   **SQL Server** does not support arcs, and lines that do not have distinct points.

    SQL Server uploads invalid geometry objects and converts them to valid using a SQL server command, but SQL Server does not upload invalid geography objects. Attempting to upload invalid geography objects causes MapInfo EasyLoader to fail. This is a limitation of SQL Server and not of MapInfo EasyLoader. Due to this SQL Server limitation, upload only as geometry.

