History of EasyLoader Changes {#history-of-easyloader-changes .title .topictitle1}
=============================

<div class="body conbody">

This section provides a history of features and enhancements that have
been added to EasyLoader since version 11.0.

<div id="history__history1520" class="section">

New in EasyLoader 15.2 {#new-in-easyloader-15.2 .title .sectiontitle}
----------------------

EasyLoader 15.2 is a 32-bit release that works with the MapInfo Pro 15.2
64-bit release. There are no new features or fixes.

MapInfo Pro 15.2 supports unicode and requires the PostgreSQL Unicode
ODBC drive. EasyLoader does not yet support unicode and requires the
PostgreSQL ANSI ODBC drive. You must have both drivers installed when
both products are on the same machine.

</div>

<div id="history__history1500" class="section">

New in EasyLoader 15.0 {#new-in-easyloader-15.0 .title .sectiontitle}
----------------------

EasyLoader 15.0 is a 32-bit release that works with the MapInfo Pro 15.0
32-bit release. There are no new features or fixes.

</div>

<div id="history__history1251" class="section">

New in EasyLoader 12.5.1 {#new-in-easyloader-12.5.1 .title .sectiontitle}
------------------------

EasyLoader 12.5.1 is a 32-bit release that works with the MapInfo Pro
12.5.1 64-bit release. There are no new features or fixes.

</div>

<div id="history__history1250" class="section">

New in EasyLoader 12.5 {#new-in-easyloader-12.5 .title .sectiontitle}
----------------------

There are no new features or fixes.

</div>

<div id="history__history1200" class="section">

New in EasyLoader 12.0 {#new-in-easyloader-12.0 .title .sectiontitle}
----------------------

EasyLoader 12.0 supports the following database versions:

-   **PostGIS 2.0** – Note that when uploading files to a PostGIS 2.0
    database, spatial objects upload as a geometry spatial data type.
-   **SQL Server 2012** – EasyLoader processes any invalid geography
    using the SQL Server 2012 MakeValid( ) function, so that the
    geography is valid.

The server table processing option <span class="ph uicontrol">Grant
Public Access to Table</span> has been changed to <span
class="ph uicontrol">Grant Public Full Access to Table</span>.

This release fixes the following issues:

-   **MIPRO-12309**: A message displays when appending a native table
    with a MI\_PRINX column in an Oracle Spatial database with an OCI
    connection, "Table cannot be Appended—It has a different table
    structure."
-   **MIPRO-12320**: When uploading a table with no geometry into
    EasyLoader 11.5, an error message appears: "Table cannot be
    Appended—It has a different table structure."
-   **MIPRO-32642**: EasyLoader is unable to import to “geography” data
    type in SQL Server 2008 SP2.

    You will need to upgrade to SQL Server 2012. SQL Server 2012 uses
    the function STIsValid( ) to check if a geography data type is well
    formed and recognized as a valid object based on its OGC type. The
    MakeValid( ) function is also used that converts an invalid
    geography data type into a valid one. In MapInfo Pro 12.0, you can
    use the extended spatial methods in SQL Server 2012 to manage valid
    geography data types. Refer to the [SQL Server 2012 MSDN
    library](http://msdn.microsoft.com/en-us/library/ff929337.aspx){.xref}
    for more information.

</div>

<div id="history__history1151" class="section">

New in EasyLoader 11.5.1 {#new-in-easyloader-11.5.1 .title .sectiontitle}
------------------------

EasyLoader 11.5.1 lets you connect to Oracle using your Operating System
(OS) authentication (Windows credentials). The <span
class="keyword wintitle">MapInfo Oracle Connect</span> dialog box has a
new <span class="ph uicontrol">Use Operating System
Authentication</span> check box to set this option.

When running EasyLoader from the command line with the <span
class="keyword option">Connection</span> parameter and connecting with
OS authentication, the parameter should contain only the server name
(@ServerName) and not a user ID or password. For the database
authentication, provide the user ID, password, and server name
(UserName/Password@ServerName).

The **/Z** parameter changed in EasyLoader to set the <span
class="ph uicontrol">Auto Select</span> option instead of <span
class="ph uicontrol">Always Geometry</span>.

This release fixes the following issues:

-   **MIPRO-19759**: In EasyLoader, a connection string created in a tab
    file does not seem to work every time.

-   **MIPRO-21235**: EasyLoader cannot upload geography from the command
    line in SQL Server 2008.

-   **MIPRO-24515**: Uploading a table with a boolean field to PostGIS
    does not put the correct TYPE\_NAME on the server side. There is an
    inconsistency between EasyLoader and MapInfo Professional on how
    they save data on PostGIS. EasyLoader uploads a logical field as
    smallint, whereas, MapInfo Professional uploads a logical field
    as boolean. When you open a first table, uploaded by EasyLoader, in
    MapInfo Professional the field shows up as smallint. When you open a
    second table, uploaded by MapInfo Professional, in MapInfo
    Professional the field shows up as char\[5\].

</div>

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
