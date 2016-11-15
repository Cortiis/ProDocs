Uploading Tables {#uploading-tables .title .topictitle1}
================

For instructions to start MapInfo EasyLoader, see [Getting Started with MapInfo EasyLoader](guide/uploading/../introduction/gettingstarted.html){.- .topic/xref .ajaxLink}. To start MapInfo EasyLoader from within MapInfo Pro, see [Starting MapInfo EasyLoader from within MapInfo Pro](guide/uploading/../introduction/startinginpro.html){.- .topic/xref .ajaxLink}.

To upload MapInfo TAB files using MapInfo EasyLoader:

1.  <span class="ph cmd">From the `Database Connection`{.uicontrol} list select your existing connection created previously in MapInfo EasyLoader.`{.uicontrol}
    

    To create a new connection from MapInfo EasyLoader, select `New Connection`{.uicontrol} and click the `Manage Connection List and Choose Connection`{.uicontrol} ![](images/icon_openDbms_sm.png){.image width="16"} button. Follow the instructions under [Creating an Oracle Connection](guide/uploading/creatinganoracleconnection.html){.- .topic/xref .ajaxLink} or [Creating an ODBC Connection](guide/uploading/creatinganodbcconnection.html){.- .topic/xref .ajaxLink}.

    

2.  <span class="ph cmd">From the `Output Directory`{.uicontrol} list select a directory to save live access files to or select `Do Not Create .tab Files`{.uicontrol}.`{.uicontrol}
    

    Unless you select not to create them, MapInfo EasyLoader saves .tab files to your machine that contain database access information. MapInfo Pro uses these files when accessing the tables that MapInfo EasyLoader uploads. If you select not to create these files, you can create them later from within MapInfo Pro. A live access file has the same name as the upload file with a <span class="ph filepath">\_srv`{.uicontrol} extension, such as <span class="ph filepath">YourServerTableName\_srv.tab`{.uicontrol}.

    To select a different directory from what is in the list, click the `Browse for an Output Directory (Folder)`{.uicontrol} ![](images/icon_ezloaderBrowse.png){.image width="16"} button.

    

3.  <span class="ph cmd">Click the `Browse for one or more tables to upload`{.uicontrol} ![](images/icon_ezloaderAdd_sm.png){.image width="16"} button located beside the `Source Table`{.uicontrol} column heading in MapInfo EasyLoader. Add individual tables for upload by selecting `Add Tables`{.uicontrol} or a folder of tables by selecting `Add Tables from Folder`{.uicontrol}.`{.uicontrol}
    

    In the dialog that opens, navigate to the table or folder and select it. The tables that you select display in MapInfo EasyLoader and are the tables that you will upload.

    

4.  <span class="ph cmd">The `Server Table`{.uicontrol} column shows the table name as it will appear on the database server. Click on the name if you want to change it.`{.uicontrol}
5.  <span class="ph cmd">In the `Operation`{.uicontrol} column, select how to upload each table.`{.uicontrol}
    

    -   `Create a New Table`{.uicontrol} ­ creates a new table in the database using the name in the `Server Table`{.uicontrol} column.
    -   `Replace Existing Table`{.uicontrol} ­ replaces an existing table in the database that has the same name as in the `Server Table`{.uicontrol} column.
    -   `Append to Existing Table`{.uicontrol} ­ appends the contents of the source table to an existing table in the database that has the same name as in the `Server Table`{.uicontrol} column.

    For details, see [Table Processing Options](guide/uploading/tableprocessingoptions.html){.- .topic/xref .ajaxLink}. For instructions on how to append multiple tables to a table in the database, see [Appending Multiple Tables to an Existing Table on the Server](guide/uploading/tableprocessingoptions.html#tableprocessingoptions__appendmultiple){.- .topic/xref .ajaxLink}.

    

6.  <span class="ph cmd">By default, upload tables are added to the map catalog on the database unless you clear the check box in the `Catalog`{.uicontrol} column.`{.uicontrol}
    

    MapInfo Pro uses the Map Catalog on the database for spatial indexing. Select this check box to add a new Map Catalog or clear it to unregister a table from the Map Catalog. For information about the Map Catalog and what options you can set, see [Using the Map Catalog](guide/uploading/usingmapcatalog.html){.- .topic/xref .ajaxLink}. If you do not add the upload table data to the Map Catalog now, then you can do so later in MapInfo Pro.

    

7.  <span class="ph cmd">Click `Start or Resume Uploading Tables`{.uicontrol} ![](images/icon_resumeJob_sm.png){.image width="16"} to start the upload process.`{.uicontrol}
    

    To pause the upload, click this ![](images/icon_pauseJob_sm.png){.image width="16"} button again.

    To cancel the upload, click `Cancel the rest of the upload`{.uicontrol} ![](images/icon_cancelJob_sm.png){.image width="16"}.

    

MapInfo EasyLoader provides status information for the upload and displays the message "Upload Completed" when finished.

For information about how to set the spatial object types and the server processing options for an upload, see [About Upload Options](guide/uploading/aboutuploadoptions.html){.- .topic/xref .ajaxLink}.

<span class="notetitle">Note:`{.uicontrol} On some operating systems, such as Windows 7, when you select `Add Tables`{.uicontrol} in MapInfo EasyLoader the resulting `Open`{.uicontrol} dialog has a drop-down list on the `Open`{.uicontrol} button. From this list, you can select `Show previous versions`{.uicontrol}. This is a Microsoft system feature that lets you recover deleted files, view or restore a file you saved over, and lets you compare versions of a file side by side.

