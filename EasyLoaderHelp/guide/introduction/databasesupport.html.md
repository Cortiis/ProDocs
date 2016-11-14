Database Support and Requirements {#database-support-and-requirements .title .topictitle1}
=================================

MapInfo EasyLoader uploads data to these databases:

-   Oracle
-   SQL Server
-   Microsoft Access
-   PostgreSQL / PostGIS

The database must be able to handle spatial geometry. If the databases does not have spatial object type support, then MapInfo EasyLoader only uploads XY data for a table: XY or XY with a MapInfo Key (<span class="keyword">MICode</span>). MapInfo EasyLoader opens only one server connection at a time.

MapInfo EasyLoader is available as a download on the web or it installs with MapInfo Pro into the <span class="ph filepath">\\Tools</span> directory.

