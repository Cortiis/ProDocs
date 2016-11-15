Introduction {#introduction .title .topictitle1}
============

EasyLoader is a utility available from EasyLoader that allows you to upload MapInfo TAB files to a remote database. The spatial information in the TAB files is maintained in a SQL Server database and is available for viewing and analyzing in MapInfo Pro. EasyLoader can also upload a text object to SQL Server if text-supported SpatialWare (4.6 or later) is on the server.

EasyLoader is installed into the <span class="ph filepath">\\Tools`{.uicontrol} directory during the MapInfo Pro installation process. EasyLoader supports the following databases:

-   Oracle
-   SQL Server
-   Microsoft Access
-   PostgreSQL / PostGIS

For spatial database support, the Database Management System (DBMS) must be able to handle spatial geometry, either by itself (as in Oracle Spatial) or through MapInfo SpatialWare (for SQL Server). If one of the above DBMS does not have spatial object type support, the table can only be uploaded as XY data: XY or XY with MapInfo Key (<span class="keyword">MICode`{.uicontrol}). Only one server connection may be open at any one time.

EasyLoader works with both 32-bit and 64-bit versions of MapInfo Pro. However, EasyLoader is a 32-bit software product that requires having 32-bit ODBC drivers installed, such as the PostgreSQL ANSI ODBC driver. Ensure you have the correct drivers when using EasyLoader with MapInfo Pro 64-bit.

To obtain the latest copy of EasyLoader, go to [www.mapinfo.com](http://www.mapinfo.com){.xref} and search for the EasyLoader download page where you can download both EasyLoader and the EasyLoader User Guide.

