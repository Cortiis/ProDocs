Database Options {#database-options .title .topictitle1}
================

<div class="body conbody">

This section describes the button options and input fields in the
EasyLoader for connecting to a database.

<span class="ph uicontrol">ODBC</span> button
:   Click this button to connect to a server using ODBC. This displays
    the <span class="keyword wintitle">Select Data Source</span> dialog
    box where you can select a file or machine data source. You must
    have your data connections set up before selecting the <span
    class="ph uicontrol">ODBC</span> option. For more information, see
    [Connecting to a Remote
    Database](contents/connectingtoremotedatabase.html){.- .topic/xref
    .ajaxLink}.

<span class="ph uicontrol">Oracle Spatial</span> button
:   Click this button to connect to an Oracle Spatial server. Enter your
    user name, password, and the server name to complete the connection.
    This button is only enabled if the Oracle Client software
    is installed. Oracle Client software does not come with EasyLoader.

<span class="ph uicontrol">Source Tables</span> button
:   Click this button to identify the source tables you want to upload.
    The <span class="ph uicontrol">Source Tables</span> button is
    available only after you have made a connection to a server. This
    action enables you to select one or more MapInfo tables from a
    single directory.

<span class="ph uicontrol">Server Table Name</span>
:   Type the name of the database server table to which you are
    uploading the selected tables.

<span class="ph uicontrol">Append All Tables to One Server Table</span>
:   Click this option to upload all MapInfo tables listed in the <span
    class="ph uicontrol">MapInfo Table</span> list to a single
    server table. The server table name is the one visible in <span
    class="ph uicontrol">Server Table</span> box. This feature should be
    used to upload tables with the same structure and style to
    one table.
:   Example: Instead of creating a new table for each street layer,
    check the <span class="ph uicontrol">Append All to One</span> check
    box, and only one table is created. Then all of the tables are
    appended to this table.

<span class="ph uicontrol">TAB File Directory for Server Table(s)</span>
:   Generates TAB files to access remote DBMSs when you provide the TAB
    file directory. By default, an empty directory, the loader does not
    generate .tab files. The newly generated .tab file is the Server
    Table Name plus \_srv.tab (<span
    class="ph filepath">yourServerTableName\_srv.tab</span>). Click
    <span class="ph uicontrol">Browse</span> to search for the directory
    you need.

<span class="ph uicontrol">Map Catalog</span> button
:   Click this button to add a new Map Catalog or to unregister a table
    from the Map Catalog. For more information, see [Creating a New Map
    Catalog](contents/creatingmapcatalog.html){.- .topic/xref
    .ajaxLink}.

<span class="ph uicontrol">Upload</span> button
:   Click this button when you have set all of the parameters you want
    for uploading the table(s) you have specified.

<span class="ph uicontrol">Options</span> button
:   Click this button to specify the spatial object types and the server
    processing options for the current upload. For instructions about
    using the <span class="ph uicontrol">Options</span> dialog box, see
    [Understanding the Options Dialog
    Box](contents/understandingoptionsdialog.html){.- .topic/xref
    .ajaxLink}.

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Understanding the EasyLoader Dialog
Box](contents/../contents/understandingeasyloaderdialog.html){.-
.topic/link .ajaxLink}

</div>

</div>

</div>
