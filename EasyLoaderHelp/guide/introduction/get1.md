Getting Started
===============

You can either start MapInfo EasyLoader from within MapInfo Pro or separately if you downloaded your MapInfo EasyLoader from the web. To launch MapInfo EasyLoader from within MapInfo Pro, see <a href="guide/introduction/startinginpro.html" class="- topic/xref ajaxLink">Starting MapInfo EasyLoader from within MapInfo Pro</a>.

To start MapInfo EasyLoader:

<span class="ph cmd">Double-click the <span class="ph filepath">MapInfoEasyLoader.exe</span> file in the <span class="ph filepath">EasyLoader</span> directory.</span>
When you download MapInfo EasyLoader from the web, you download a zip file. When you extract the files from this zip, it creates an <span class="ph filepath">EasyLoader</span> folder with all of the files necessary to run MapInfo EasyLoader including <span class="ph filepath">MapInfoEasyLoader.exe</span>.

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
<td><span class="ph uicontrol">Database Connection</span></td>
<td> </td>
<td>Select the connection to the database you want to upload tables to. You can use existing database connections created from the Microsoft <span class="ph uicontrol">Start</span> menu or from in MapInfo Pro.</td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Manage Connection List and Choose a Connection</span></td>
<td><img src="images/icon_openDbms.png" class="image" width="24" /></td>
<td>Create a new connection by selecting <span class="ph uicontrol">New Connection</span> from the <span class="ph uicontrol">Database Connection</span> list and then clicking this button.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Output Directory</span></td>
<td> </td>
<td>Select a path location to save live access files to.
<p>Unless you select not to create them, MapInfo EasyLoader saves .tab files to your machine that contain database access information. MapInfo Pro uses these files when accessing the tables that MapInfo EasyLoader uploads. If you select not to create these files, you can create them later from within MapInfo Pro. A live access file has the same name as the upload file with a <span class="ph filepath">_srv</span> extension, such as <span class="ph filepath">YourServerTableName_srv.tab</span>.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Browse for an Output Directory (Folder) </span></td>
<td><img src="images/icon_ezloaderBrowse.png" class="image" width="24" /></td>
<td>Select a different directory from what is in the <span class="ph uicontrol">Output Directory</span> list by clicking this button.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Source Table</span></td>
<td><img src="images/icon_ezloaderAdd.png" class="image" width="24" /></td>
<td>Lists the data tables to upload to the database.
<p>To add tables, click the <span class="ph uicontrol">Browse for one or more tables to upload</span> <img src="images/icon_ezloaderAdd_sm.png" class="image" /> button and then select <span class="ph uicontrol">Add Tables</span> or <span class="ph uicontrol">Add Tables from Folder</span>.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Server Table</span></td>
<td> </td>
<td>Shows the table name as it will appear on the database server. You can click on the name to change it.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Operation</span></td>
<td> </td>
<td>Select for each table what you would like to do in the database:
<p><span class="ph uicontrol">Create a New Table</span> ­ creates a new table in the database using the source table name.</p>
<p><span class="ph uicontrol">Replace Existing Table</span> ­ replaces an existing table in the database that has the same name as the source table.</p>
<p><span class="ph uicontrol">Append to Existing Table</span> ­ appends the contents of the source table to an existing table in the database that has the same name as the source table.</p>
<p>For more details, see <a href="guide/introduction/../uploading/tableprocessingoptions.html" class="- topic/xref ajaxLink">Table Processing Options</a>.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Catalog</span></td>
<td> </td>
<td>By default, upload tables are added to the map catalog on the database unless you clear the check box in the <span class="ph uicontrol">Catalog</span> column.
<p>MapInfo Pro uses the Map Catalog on the database for spatial indexing. Select this check box to add a new Map Catalog or clear it to unregister a table from the Map Catalog. For information about the Map Catalog and what options you can set, see <a href="guide/introduction/../uploading/usingmapcatalog.html" class="- topic/xref ajaxLink">Using the Map Catalog</a>. If you do not add the upload table data to the Map Catalog now, then you can do so later in MapInfo Pro.</p></td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Upload States</span></td>
<td> </td>
<td>Gives information about the upload. If there was an error with the upload, then hovering the mouse pointer over the image in this column shows more information.</td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Map Catalog</span></td>
<td><img src="images/icon_ezloaderMapCatalog.png" class="image" width="24" /></td>
<td>This command is available when you are connected to a database connection. Selecting this command displays the Map Catalog window where you can edit data on the database. For more information about the Map Catalog, see <a href="guide/introduction/../uploading/usingmapcatalog.html" class="- topic/xref ajaxLink">Using the Map Catalog</a>.
<p><span class="ph uicontrol">Owner Name</span> - You can filter the list of tables by selecting the Owner Name.</p>
<p><span class="ph uicontrol">Unregister</span> - Unregisters a table from the database.</p>
<p><span class="ph uicontrol">Copy</span> - Copies the selected row as comma separated values (csv).</p>
<p><span class="ph uicontrol">Close</span> - Closes the <span class="keyword wintitle">Map Catalog</span> window.</p></td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Options</span></td>
<td><img src="images/icon_ezloaderOptions.png" class="image" width="24" /></td>
<td>The drop-down list has following command options:
<p><span class="ph uicontrol">Options</span> opens the <span class="keyword wintitle">Options</span> dialog box where you can access the Server Table Processing options. For details, see <a href="guide/introduction/../uploading/servertableprocessingoptions.html" class="- topic/xref ajaxLink">Server Table Processing Options</a>.</p>
<p><span class="ph uicontrol">View Log</span> opens the <span class="ph filepath">EasyLoader.log</span> file in a text editor. This file contains the database connection information currently in use to upload data tables with. For details, see <a href="guide/introduction/../productivity/locatinglogfile.html" class="- topic/xref ajaxLink">Locating the MapInfo EasyLoader Log File</a>.</p>
<p><span class="ph uicontrol">Close When Complete</span> is off by default. When set, MapInfo EasyLoader closes after finishing the upload.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Help</span></td>
<td><img src="images/icon_ezloaderHelp.png" class="image" width="24" /></td>
<td><p><span class="ph uicontrol">Online Help</span> opens the product help. You need access to the internet to view this.</p>
<p><span class="ph uicontrol">PDF Help</span> opens the product help as a PDF file for printing and for viewing when you do not have access to the internet.</p>
<p><span class="ph uicontrol">About MapInfo EasyLoader</span> opens a message dialog box displaying the version of MapInfo EasyLoader.</p></td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Start or Resume Uploading Tables</span></td>
<td><img src="images/icon_resumeJob.png" class="image" width="24" /></td>
<td>Starts the upload process or continues the process if you put it on pause.</td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Pause the Upload</span></td>
<td><img src="images/icon_ezloaderPause.png" class="image" width="24" /></td>
<td>Pauses the upload process, which you can resume later.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Cancel the Rest of the Upload</span></td>
<td><img src="images/icon_ezloaderStop.png" class="image" width="24" /></td>
<td>Stops and cancels the upload process.</td>
</tr>
</tbody>
</table>

-   **<a href="guide/introduction/../../guide/introduction/startinginpro.html" class="- topic/link ajaxLink">Starting MapInfo EasyLoader from within MapInfo Pro</a>**

**Parent topic:** <a href="guide/introduction/../../guide/introduction/chapterintro.html" class="- topic/link ajaxLink">Introduction</a>


