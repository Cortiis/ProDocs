Using EasyLoader to Upload Tables {#using-easyloader-to-upload-tables .title .topictitle1}
=================================

For instructions to start EasyLoader, see [Getting Started with EasyLoader](guide/gettingstarted.html){.- .topic/xref .ajaxLink}. To start EasyLoader from within MapInfo Pro, see [Starting EasyLoader from within MapInfo Pro](guide/startinginpro.html){.- .topic/xref .ajaxLink}.

To upload MapInfo TAB files using EasyLoader:

1.  <span class="ph cmd">From the `Database Connection`{.uicontrol} list select your existing connection.`{.uicontrol}
    

    You can use existing database connections created from the Microsoft `Start`{.uicontrol} menu or from in MapInfo Pro.

    To create a new connection from EasyLoader, select `New Connection`{.uicontrol} and click the `Manage Connection List and Choose Connection`{.uicontrol} ![](images/icon_openDbms_sm.png){.image} button. Follow the instructions under [Creating an Oracle Connection](guide/creatinganoracleconnection.html){.- .topic/xref .ajaxLink} or [Creating an ODBC Connection](guide/creatinganodbcconnection.html){.- .topic/xref .ajaxLink}.

    

2.  <span class="ph cmd">From the `Output Directory`{.uicontrol} list select a directory to save live access files to or select `Do Not Create .tab Files`{.uicontrol}.`{.uicontrol}
    

    Unless you select not to create them, EasyLoader saves .tab files to your machine that contain database access information. MapInfo Pro uses these files when accessing the tables that EasyLoader uploads. If you select not to create these files, you can create them later from within MapInfo Pro. A live access file has the same name as the upload file with a <span class="ph filepath">\_srv`{.uicontrol} extension, such as <span class="ph filepath">YourServerTableName\_srv.tab`{.uicontrol}.

    To select a different directory from what is in the list, click the `Browse for an Output Directory (Folder)`{.uicontrol} ![](images/openFolder_sm.png){.image} button.

    

3.  <span class="ph cmd">Click the `Browse for one or more tables to upload`{.uicontrol} ![](images/icon_addLayer_sm.png){.image} button located beside the `Source Table`{.uicontrol} column heading in EasyLoader. Add individual tables for upload by selecting `Add Tables`{.uicontrol} or a folder of tables by selecting `Add Tables from Folder`{.uicontrol}.`{.uicontrol}
    

    In the dialog that opens, navigate to the table or folder and select it. The tables that you select display in EasyLoader and are the tables that you will upload.

    

4.  <span class="ph cmd">The `Server Table`{.uicontrol} column shows the table name as it will appear on the database server. Click on the name if you want to change it.`{.uicontrol}
5.  <span class="ph cmd">In the `Operation`{.uicontrol} column, select how to upload each table.`{.uicontrol}
    

    -   `Create a New Table`{.uicontrol} ­ creates a new table in the database using the source table name.
    -   `Replace Existing Table`{.uicontrol} ­ replaces an existing table in the database that has the same name as the source table.
    -   `Append to Existing Table`{.uicontrol} ­ appends the contents of the source table to an existing table in the database that has the same name as the source table.
    -   `Append All`{.uicontrol} ­ appends all tables to one server table. Select this to create one table for all map layers instead of creating a table for each map layer.

    For more details, see [Table Processing Options](guide/tableprocessingoptions.html){.- .topic/xref .ajaxLink}.

    

6.  <span class="ph cmd">By default, upload tables are added to the map catalog on the database unless you clear the check box in the `Catalog`{.uicontrol} column.`{.uicontrol}
    

    MapInfo Pro uses the Map Catalog on the database for spatial indexing. Select this check box to add a new Map Catalog or clear it to unregister a table from the Map Catalog. For information about the Map Catalog and what options you can set, see [Using the Map Catalog](guide/usingmapcatalog.html){.- .topic/xref .ajaxLink}. If you do not add the upload table data to the Map Catalog now, then you can do so later in MapInfo Pro.

    

7.  <span class="ph cmd">Click `Start or Resume Uploading Tables`{.uicontrol} ![](images/icon_resumeJob_sm.png){.image} to start the upload process.`{.uicontrol}
    

    To pause the upload, click this ![](images/icon_pauseJob_sm.png){.image} button again.

    To cancel the upload, click `Cancel the rest of the uplaod`{.uicontrol} ![](images/icon_cancelJob_sm.png){.image}.

    

EasyLoader provides status information for the upload and displays the message "Upload Completed" when finished.

For information about how to set the spatial object types and the server processing options for an upload, see [About Upload Options](guide/aboutuploadoptions.html){.- .topic/xref .ajaxLink}.

<span class="notetitle">Note:`{.uicontrol} On some operating systems, such as Windows 7, when you select `Add Tables`{.uicontrol} in EasyLoader the resulting `Open`{.uicontrol} dialog has a drop-down list on the `Open`{.uicontrol} button. From this list, you can select `Show previous versions`{.uicontrol}. This is a Microsoft system feature that lets you recover deleted files, view or restore a file you saved over, and lets you compare versions of a file side by side.

