Table Processing Options {#table-processing-options .title .topictitle1}
========================

This section provides a comprehensive description of the table options available in EasyLoader. There are four table processing options associated with the main <span class="keyword wintitle">EasyLoader</span> dialog box.

<span class="ph uicontrol">Create New Table</span>
:   A server table is created with the name that you specify. If this option is chosen and a table with the same name already exists on the server, an error message displays, making you aware of this problem. Use a different name or choose the option <span class="ph uicontrol">Replace Existing Table to upload</span> the table.

<span class="ph uicontrol">Replace Existing Table</span>
:   When this option is selected, if a server table of the same name already exists, it is dropped and a new table is created to match the MapInfo table being uploaded.

<span class="ph uicontrol">Append to Existing Table</span>
:   The MapInfo table is appended to the server table if the server table exists and the structure of the two tables match. Otherwise, you get an error and the table is not uploaded. The tables must have the same table structure and be in the same projection for Oracle Spatial.

<span class="ph uicontrol">Append All Tables to One Server Table</span>
:   All MapInfo tables listed are uploaded to a single server table. The server table name is the one visible in the <span class="ph uicontrol">Server Table</span> box. This feature is meant to be used to upload tables with the same structure and projection to one table. For example, instead of creating a new table for each street layer, check the <span class="ph uicontrol">Append All Tables to One Server Table</span> check box, and only one table is created. All of the tables are then appended to this table.
:   

    <span class="notetitle">Note:</span> It is possible that some tables will not be appended if their table structure differs.

    

:   If you choose the <span class="ph uicontrol">Replace Existing Table</span> option and this check box is selected, the server table is dropped, a new table is created, and all tables listed are appended to that one. If you select the <span class="ph uicontrol">Create New Table</span> option and this check box is selected, the server table is created, and all tables listed are appended to that one.
:   

    <span class="notetitle">Note:</span> If this option is chosen, all tables must have the same table structure and be in the same projection.

    

