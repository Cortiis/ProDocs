Getting Started with EasyLoader {#getting-started-with-easyloader .title .topictitle1}
===============================

<div class="body taskbody">

<div class="section prereq p">

You can either start EasyLoader from within MapInfo Pro or separately if
you downloaded your EasyLoader from the web. To launch EasyLoader from
within MapInfo Pro, see [Starting EasyLoader from within MapInfo
Pro](guide/startinginpro.html){.- .topic/xref .ajaxLink}.

</div>

To start EasyLoader:

<div class="li step p">

<span class="ph cmd">Double-click the <span
class="ph filepath">EasyLoader.exe</span> file in the EasyLoader
directory.</span>
<div class="itemgroup info">

When you download EasyLoader from the web, you download a zip file. When
you extract the files from this zip, it creates an EasyLoader folder
with all of the files necessary to run EasyLoader including <span
class="ph filepath">EasyLoader.exe</span>.

</div>

</div>

<div class="section postreq">

EasyLoader is a single window within which you can set everything
necessary to upload data tables to a database.

<div class="tablenoborder">

<table>
<colgroup>
<col width="50%" />
<col width="50%" />
</colgroup>
<thead>
<tr class="header">
<th>Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><span class="ph uicontrol">Database Connection</span></td>
<td>Select the connection to the database you want to upload tables to.
<p>You can use existing database connections created from the Microsoft <span class="ph uicontrol">Start</span> menu or from in MapInfo Pro. You can also create a new connection by selecting <span class="ph uicontrol">New Connection</span> and then clicking the <span class="ph uicontrol">Manage Connection List and Choose Connection</span> <img src="images/icon_openDbms_sm.png" class="image" /> button.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Output Directory</span></td>
<td>Select a path location to save live access files to.
<p>Unless you select not to create them, EasyLoader saves .tab files to your machine that contain database access information. MapInfo Pro uses these files when accessing the tables that EasyLoader uploads. If you select not to create these files, you can create them later from within MapInfo Pro. A live access file has the same name as the upload file with a <span class="ph filepath">_srv</span> extension, such as <span class="ph filepath">YourServerTableName_srv.tab</span>.</p>
<p>To select a different directory from what is in the list, click the <span class="ph uicontrol">Browse for an Output Directory (Folder)</span> <img src="images/openFolder_sm.png" class="image" /> button.</p></td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Source Table</span></td>
<td>Lists the data tables to upload to the database.
<p>To add tables, click the <span class="ph uicontrol">Browse for one or more tables to upload</span> <img src="images/icon_addLayer_sm.png" class="image" /> button. You can select <span class="ph uicontrol">Add Tables</span> or <span class="ph uicontrol">Add Tables from Folder</span>.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Server Table</span></td>
<td>Shows the table name as it will appear on the database server. You can click on the name to change it.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Operation</span></td>
<td>Lets you select for each table what you would like to to in the database:
<ul>
<li><span class="ph uicontrol">Create a New Table</span> ­ creates a new table in the database using the source table name.</li>
<li><span class="ph uicontrol">Replace Existing Table</span> ­ replaces an existing table in the database that has the same name as the source table.</li>
<li><span class="ph uicontrol">Append to Existing Table</span> ­ appends the contents of the source table to an existing table in the database that has the same name as the source table.</li>
<li><span class="ph uicontrol">Append All</span> ­ appends all tables to one server table. Select this to create one table for all map layers instead of creating a table for each map layer.</li>
</ul>
<p>For more details, see <a href="guide/tableprocessingoptions.html" class="- topic/xref ajaxLink">Table Processing Options</a>.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Catalog</span></td>
<td>By default, upload tables are added to the map catalog on the database unless you clear the check box in the <span class="ph uicontrol">Catalog</span> column.
<p>MapInfo Pro uses the Map Catalog on the database for spatial indexing. Select this check box to add a new Map Catalog or clear it to unregister a table from the Map Catalog. For information about the Map Catalog and what options you can set, see <a href="guide/usingmapcatalog.html" class="- topic/xref ajaxLink">Using the Map Catalog</a>. If you do not add the upload table data to the Map Catalog now, then you can do so later in MapInfo Pro.</p></td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Upload States</span></td>
<td>Gives information about the upload. If there was an error with the upload, then clicking on the image in this column shows more information.</td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Map Catalog</span></td>
<td>xxx</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Options</span></td>
<td>xxx
<p><span class="ph uicontrol">View Log</span> opens the <span class="ph filepath">EasyLoader.log</span> file in a text editor. This file contains the database connection information currently in use to upload data tables with.</p>
<p><span class="ph uicontrol">Close When Complete</span> is off by default. When set, EasyLoader closes after finishing the upload.</p></td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Help</span></td>
<td>Links you to the online help for this product and to the PDF User Guide.</td>
</tr>
<tr class="odd">
<td><span class="ph uicontrol">Start or Resume Uploading Tables</span> <img src="images/icon_resumeJob_sm.png" class="image" /></td>
<td>Click to start the upload process. To pause the upload, click this <img src="images/icon_pauseJob_sm.png" class="image" /> button again.</td>
</tr>
<tr class="even">
<td><span class="ph uicontrol">Cancel the Rest of the Upload</span> <img src="images/icon_cancelJob_sm.png" class="image" /></td>
<td>Click to start the upload process.</td>
</tr>
</tbody>
</table>

</div>

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

-   **[Starting EasyLoader from within MapInfo
    Pro](guide/../guide/startinginpro.html){.- .topic/link .ajaxLink}**\

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Uploading Data with
EasyLoader](guide/../guide/chapterintro.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
