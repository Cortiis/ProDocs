Unsupported Geometry {#unsupported-geometry .title .topictitle1}
====================

<div class="body conbody">

A MapInfo Pro map may contain geometries that are unsupported by the
database that the results are stored in. EasyLoader skips unsupported
object type and inserts the attribute data. No message displays.

-   **Oracle** does not support arcs, ellipses, rectangles, and
    rounded rectangles.
-   **PostGIS** does not support arcs, ellipses, rectangles, and rounded
    rectangles
-   **SQL Server** does not support arcs, and lines that do not have
    distinct points.

    SQL Server uploads invalid geometry objects and converts them to
    valid using a SQL server command, but SQL Server does not upload
    invalid geography objects. Attempting to upload invalid geography
    objects causes EasyLoader to fail. This is a limitation of SQL
    Server and not of EasyLoader. Due to this SQL Server limitation,
    upload only as geometry.

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Understanding Your
Data](guide/../guide/understandingyourdata.html){.- .topic/link
.ajaxLink}

</div>

</div>

</div>
