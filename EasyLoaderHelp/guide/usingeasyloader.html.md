Using EasyLoader to Upload Tables {#using-easyloader-to-upload-tables .title .topictitle1}
=================================

<div class="body taskbody">

<div class="section context">

For instructions to start EasyLoader, see [Getting Started with
EasyLoader](guide/gettingstarted.html){.- .topic/xref .ajaxLink}. To
start EasyLoader from within MapInfo Pro, see [Starting EasyLoader from
within MapInfo Pro](guide/startinginpro.html){.- .topic/xref .ajaxLink}.

</div>

To upload MapInfo TAB files using EasyLoader:

1.  <span class="ph cmd">From the <span class="ph uicontrol">Database
    Connection</span> list select your existing connection.</span>
    <div class="itemgroup info">

    You can use existing database connections created from the Microsoft
    <span class="ph uicontrol">Start</span> menu or from in MapInfo Pro.

    To create a new connection from EasyLoader, select <span
    class="ph uicontrol">New Connection</span> and click the <span
    class="ph uicontrol">Manage Connection List and Choose
    Connection</span> ![](images/icon_openDbms_sm.png){.image} button.
    Follow the instructions under [Creating an Oracle
    Connection](guide/creatinganoracleconnection.html){.- .topic/xref
    .ajaxLink} or [Creating an ODBC
    Connection](guide/creatinganodbcconnection.html){.- .topic/xref
    .ajaxLink}.

    </div>

2.  <span class="ph cmd">From the <span class="ph uicontrol">Output
    Directory</span> list select a directory to save live access files
    to or select <span class="ph uicontrol">Do Not Create .tab
    Files</span>.</span>
    <div class="itemgroup info">

    Unless you select not to create them, EasyLoader saves .tab files to
    your machine that contain database access information. MapInfo Pro
    uses these files when accessing the tables that EasyLoader uploads.
    If you select not to create these files, you can create them later
    from within MapInfo Pro. A live access file has the same name as the
    upload file with a <span class="ph filepath">\_srv</span> extension,
    such as <span
    class="ph filepath">YourServerTableName\_srv.tab</span>.

    To select a different directory from what is in the list, click the
    <span class="ph uicontrol">Browse for an Output
    Directory (Folder)</span>
    ![](images/openFolder_sm.png){.image} button.

    </div>

3.  <span class="ph cmd">Click the <span class="ph uicontrol">Browse for
    one or more tables to upload</span>
    ![](images/icon_addLayer_sm.png){.image} button located beside the
    <span class="ph uicontrol">Source Table</span> column heading
    in EasyLoader. Add individual tables for upload by selecting <span
    class="ph uicontrol">Add Tables</span> or a folder of tables by
    selecting <span class="ph uicontrol">Add Tables from
    Folder</span>.</span>
    <div class="itemgroup info">

    In the dialog that opens, navigate to the table or folder and
    select it. The tables that you select display in EasyLoader and are
    the tables that you will upload.

    </div>

4.  <span class="ph cmd">The <span class="ph uicontrol">Server
    Table</span> column shows the table name as it will appear on the
    database server. Click on the name if you want to change it.</span>
5.  <span class="ph cmd">In the <span
    class="ph uicontrol">Operation</span> column, select how to upload
    each table.</span>
    <div class="itemgroup info">

    -   <span class="ph uicontrol">Create a New Table</span> ­ creates a
        new table in the database using the source table name.
    -   <span class="ph uicontrol">Replace Existing Table</span> ­
        replaces an existing table in the database that has the same
        name as the source table.
    -   <span class="ph uicontrol">Append to Existing Table</span> ­
        appends the contents of the source table to an existing table in
        the database that has the same name as the source table.
    -   <span class="ph uicontrol">Append All</span> ­ appends all
        tables to one server table. Select this to create one table for
        all map layers instead of creating a table for each map layer.

    For more details, see [Table Processing
    Options](guide/tableprocessingoptions.html){.- .topic/xref
    .ajaxLink}.

    </div>

6.  <span class="ph cmd">By default, upload tables are added to the map
    catalog on the database unless you clear the check box in the <span
    class="ph uicontrol">Catalog</span> column.</span>
    <div class="itemgroup info">

    MapInfo Pro uses the Map Catalog on the database for
    spatial indexing. Select this check box to add a new Map Catalog or
    clear it to unregister a table from the Map Catalog. For information
    about the Map Catalog and what options you can set, see [Using the
    Map Catalog](guide/usingmapcatalog.html){.- .topic/xref .ajaxLink}.
    If you do not add the upload table data to the Map Catalog now, then
    you can do so later in MapInfo Pro.

    </div>

7.  <span class="ph cmd">Click <span class="ph uicontrol">Start or
    Resume Uploading Tables</span>
    ![](images/icon_resumeJob_sm.png){.image} to start the
    upload process.</span>
    <div class="itemgroup info">

    To pause the upload, click this
    ![](images/icon_pauseJob_sm.png){.image} button again.

    To cancel the upload, click <span class="ph uicontrol">Cancel the
    rest of the uplaod</span> ![](images/icon_cancelJob_sm.png){.image}.

    </div>

<div class="section result">

EasyLoader provides status information for the upload and displays the
message "Upload Completed" when finished.

For information about how to set the spatial object types and the server
processing options for an upload, see [About Upload
Options](guide/aboutuploadoptions.html){.- .topic/xref .ajaxLink}.

<div class="note note">

<span class="notetitle">Note:</span> On some operating systems, such as
Windows 7, when you select <span class="ph uicontrol">Add Tables</span>
in EasyLoader the resulting <span class="keyword wintitle">Open</span>
dialog has a drop-down list on the <span
class="ph uicontrol">Open</span> button. From this list, you can select
<span class="ph uicontrol">Show previous versions</span>. This is a
Microsoft system feature that lets you recover deleted files, view or
restore a file you saved over, and lets you compare versions of a file
side by side.

</div>

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

-   **[Creating an Oracle
    Connection](guide/../guide/creatinganoracleconnection.html){.-
    .topic/link .ajaxLink}**\
-   **[Creating an ODBC
    Connection](guide/../guide/creatinganodbcconnection.html){.-
    .topic/link .ajaxLink}**\
-   **[Table Processing
    Options](guide/../guide/tableprocessingoptions.html){.- .topic/link
    .ajaxLink}**\
-   **[Uploading Tables with Time and DateTime
    Columns](guide/../guide/uploadingtableswithtimeanddatetimecolumns.html){.-
    .topic/link .ajaxLink}**\

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Uploading Data with
EasyLoader](guide/../guide/chapterintro.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
