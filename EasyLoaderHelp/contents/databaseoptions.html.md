Database Options {#database-options .title .topictitle1}
================

This section describes the button options and input fields in the EasyLoader for connecting to a database.

`ODBC`{.uicontrol} button
:   Click this button to connect to a server using ODBC. This displays the `Select Data Source`{.uicontrol} dialog box where you can select a file or machine data source. You must have your data connections set up before selecting the `ODBC`{.uicontrol} option. For more information, see [Connecting to a Remote Database](contents/connectingtoremotedatabase.html){.- .topic/xref .ajaxLink}.

`Oracle Spatial`{.uicontrol} button
:   Click this button to connect to an Oracle Spatial server. Enter your user name, password, and the server name to complete the connection. This button is only enabled if the Oracle Client software is installed. Oracle Client software does not come with EasyLoader.

`Source Tables`{.uicontrol} button
:   Click this button to identify the source tables you want to upload. The `Source Tables`{.uicontrol} button is available only after you have made a connection to a server. This action enables you to select one or more MapInfo tables from a single directory.

`Server Table Name`{.uicontrol}
:   Type the name of the database server table to which you are uploading the selected tables.

`Append All Tables to One Server Table`{.uicontrol}
:   Click this option to upload all MapInfo tables listed in the `MapInfo Table`{.uicontrol} list to a single server table. The server table name is the one visible in `Server Table`{.uicontrol} box. This feature should be used to upload tables with the same structure and style to one table.
:   Example: Instead of creating a new table for each street layer, check the `Append All to One`{.uicontrol} check box, and only one table is created. Then all of the tables are appended to this table.

`TAB File Directory for Server Table(s)`{.uicontrol}
:   Generates TAB files to access remote DBMSs when you provide the TAB file directory. By default, an empty directory, the loader does not generate .tab files. The newly generated .tab file is the Server Table Name plus \_srv.tab (<span class="ph filepath">yourServerTableName\_srv.tab`{.uicontrol}). Click `Browse`{.uicontrol} to search for the directory you need.

`Map Catalog`{.uicontrol} button
:   Click this button to add a new Map Catalog or to unregister a table from the Map Catalog. For more information, see [Creating a New Map Catalog](contents/creatingmapcatalog.html){.- .topic/xref .ajaxLink}.

`Upload`{.uicontrol} button
:   Click this button when you have set all of the parameters you want for uploading the table(s) you have specified.

`Options`{.uicontrol} button
:   Click this button to specify the spatial object types and the server processing options for the current upload. For instructions about using the `Options`{.uicontrol} dialog box, see [Understanding the Options Dialog Box](contents/understandingoptionsdialog.html){.- .topic/xref .ajaxLink}.

