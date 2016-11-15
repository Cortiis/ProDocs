Getting Started {#getting-started .title .topictitle1}
===============

You can either start MapInfo EasyLoader from within MapInfo Pro or separately if you downloaded your MapInfo EasyLoader from the web. To launch MapInfo EasyLoader from within MapInfo Pro, see [Starting MapInfo EasyLoader from within MapInfo Pro](guide/introduction/startinginpro.html){.- .topic/xref .ajaxLink}.

To start MapInfo EasyLoader:

<span class="ph cmd">Double-click the <span class="ph filepath">MapInfoEasyLoader.exe`{.uicontrol} file in the <span class="ph filepath">EasyLoader`{.uicontrol} directory.`{.uicontrol}
When you download MapInfo EasyLoader from the web, you download a zip file. When you extract the files from this zip, it creates an <span class="ph filepath">EasyLoader`{.uicontrol} folder with all of the files necessary to run MapInfo EasyLoader including <span class="ph filepath">MapInfoEasyLoader.exe`{.uicontrol}.

MapInfo EasyLoader is a single window within which you can set everything necessary to upload data tables to a database.

<table>
<colgroup>
<col width="33%" />
<col width="33%" />
<col width="33%" />
</colgroup>
<thead>
<tr class="header">
<th>Name</th>
<th>Icon</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>`Database Connection`{.uicontrol}</td>
<td> </td>
<td>Select the connection to the database you want to upload tables to. You can use existing database connections created from the Microsoft `Start`{.uicontrol} menu or from in MapInfo Pro.</td>
</tr>
<tr class="even">
<td>`Manage Connection List and Choose a Connection`{.uicontrol}</td>
<td><img src="images/icon_openDbms.png" class="image" width="24" /></td>
<td>Create a new connection by selecting `New Connection`{.uicontrol} from the `Database Connection`{.uicontrol} list and then clicking this button.</td>
</tr>
<tr class="odd">
<td>`Output Directory`{.uicontrol}</td>
<td> </td>
<td>Select a path location to save live access files to.
<p>Unless you select not to create them, MapInfo EasyLoader saves .tab files to your machine that contain database access information. MapInfo Pro uses these files when accessing the tables that MapInfo EasyLoader uploads. If you select not to create these files, you can create them later from within MapInfo Pro. A live access file has the same name as the upload file with a <span class="ph filepath">_srv`{.uicontrol} extension, such as <span class="ph filepath">YourServerTableName_srv.tab`{.uicontrol}.</p></td>
</tr>
<tr class="even">
<td>`Browse for an Output Directory (Folder) `{.uicontrol}</td>
<td><img src="images/icon_ezloaderBrowse.png" class="image" width="24" /></td>
<td>Select a different directory from what is in the `Output Directory`{.uicontrol} list by clicking this button.</td>
</tr>
<tr class="odd">
<td>`Source Table`{.uicontrol}</td>
<td><img src="images/icon_ezloaderAdd.png" class="image" width="24" /></td>
<td>Lists the data tables to upload to the database.
<p>To add tables, click the `Browse for one or more tables to upload`{.uicontrol} <img src="images/icon_ezloaderAdd_sm.png" class="image" /> button and then select `Add Tables`{.uicontrol} or `Add Tables from Folder`{.uicontrol}.</p></td>
</tr>
<tr class="even">
<td>`Server Table`{.uicontrol}</td>
<td> </td>
<td>Shows the table name as it will appear on the database server. You can click on the name to change it.</td>
</tr>
<tr class="odd">
<td>`Operation`{.uicontrol}</td>
<td> </td>
<td>Select for each table what you would like to do in the database:
<p>`Create a New Table`{.uicontrol} ­ creates a new table in the database using the source table name.</p>
<p>`Replace Existing Table`{.uicontrol} ­ replaces an existing table in the database that has the same name as the source table.</p>
<p>`Append to Existing Table`{.uicontrol} ­ appends the contents of the source table to an existing table in the database that has the same name as the source table.</p>
<p>For more details, see <a href="guide/introduction/../uploading/tableprocessingoptions.html" class="- topic/xref ajaxLink">Table Processing Options</a>.</p></td>
</tr>
<tr class="even">
<td>`Catalog`{.uicontrol}</td>
<td> </td>
<td>By default, upload tables are added to the map catalog on the database unless you clear the check box in the `Catalog`{.uicontrol} column.
<p>MapInfo Pro uses the Map Catalog on the database for spatial indexing. Select this check box to add a new Map Catalog or clear it to unregister a table from the Map Catalog. For information about the Map Catalog and what options you can set, see <a href="guide/introduction/../uploading/usingmapcatalog.html" class="- topic/xref ajaxLink">Using the Map Catalog</a>. If you do not add the upload table data to the Map Catalog now, then you can do so later in MapInfo Pro.</p></td>
</tr>
<tr class="odd">
<td>`Upload States`{.uicontrol}</td>
<td> </td>
<td>Gives information about the upload. If there was an error with the upload, then hovering the mouse pointer over the image in this column shows more information.</td>
</tr>
<tr class="even">
<td>`Map Catalog`{.uicontrol}</td>
<td><img src="images/icon_ezloaderMapCatalog.png" class="image" width="24" /></td>
<td>This command is available when you are connected to a database connection. Selecting this command displays the Map Catalog window where you can edit data on the database. For more information about the Map Catalog, see <a href="guide/introduction/../uploading/usingmapcatalog.html" class="- topic/xref ajaxLink">Using the Map Catalog</a>.
<p>`Owner Name`{.uicontrol} - You can filter the list of tables by selecting the Owner Name.</p>
<p>`Unregister`{.uicontrol} - Unregisters a table from the database.</p>
<p>`Copy`{.uicontrol} - Copies the selected row as comma separated values (csv).</p>
<p>`Close`{.uicontrol} - Closes the `Map Catalog`{.uicontrol} window.</p></td>
</tr>
<tr class="odd">
<td>`Options`{.uicontrol}</td>
<td><img src="images/icon_ezloaderOptions.png" class="image" width="24" /></td>
<td>The drop-down list has following command options:
<p>`Options`{.uicontrol} opens the `Options`{.uicontrol} dialog box where you can access the Server Table Processing options. For details, see <a href="guide/introduction/../uploading/servertableprocessingoptions.html" class="- topic/xref ajaxLink">Server Table Processing Options</a>.</p>
<p>`View Log`{.uicontrol} opens the <span class="ph filepath">EasyLoader.log`{.uicontrol} file in a text editor. This file contains the database connection information currently in use to upload data tables with. For details, see <a href="guide/introduction/../productivity/locatinglogfile.html" class="- topic/xref ajaxLink">Locating the MapInfo EasyLoader Log File</a>.</p>
<p>`Close When Complete`{.uicontrol} is off by default. When set, MapInfo EasyLoader closes after finishing the upload.</p></td>
</tr>
<tr class="even">
<td>`Help`{.uicontrol}</td>
<td><img src="images/icon_ezloaderHelp.png" class="image" width="24" /></td>
<td><p>`Online Help`{.uicontrol} opens the product help. You need access to the internet to view this.</p>
<p>`PDF Help`{.uicontrol} opens the product help as a PDF file for printing and for viewing when you do not have access to the internet.</p>
<p>`About MapInfo EasyLoader`{.uicontrol} opens a message dialog box displaying the version of MapInfo EasyLoader.</p></td>
</tr>
<tr class="odd">
<td>`Start or Resume Uploading Tables`{.uicontrol}</td>
<td><img src="images/icon_resumeJob.png" class="image" width="24" /></td>
<td>Starts the upload process or continues the process if you put it on pause.</td>
</tr>
<tr class="even">
<td>`Pause the Upload`{.uicontrol}</td>
<td><img src="images/icon_ezloaderPause.png" class="image" width="24" /></td>
<td>Pauses the upload process, which you can resume later.</td>
</tr>
<tr class="odd">
<td>`Cancel the Rest of the Upload`{.uicontrol}</td>
<td><img src="images/icon_ezloaderStop.png" class="image" width="24" /></td>
<td>Stops and cancels the upload process.</td>
</tr>
</tbody>
</table>

