Table Processing Options {#table-processing-options .title .topictitle1}
========================

This section describes the table options available in MapInfo EasyLoader from the <span class="ph uicontrol">Operation</span> list. All operations use the name that you specify in the <span class="ph uicontrol">Server Table</span> column. By default the name in this column is the same as the source table.

<span class="ph uicontrol">Create New Table</span>
:   A server table is created with the name that you specify in the <span class="ph uicontrol">Server Table</span> column. If this option is chosen and a table with the same name already exists on the server, an error message displays. Use a different name or choose the option <span class="ph uicontrol">Replace Existing Table</span> to upload the table.

<span class="ph uicontrol">Replace Existing Table</span>
:   When this option is selected, if a server table of the same name already exists, it is dropped and a new table is created to match the MapInfo table being uploaded. This option uses the table name from the <span class="ph uicontrol">Server Table</span> column. You can change this to the name of an existing table on the server.

<span class="ph uicontrol">Append to Existing Table</span>
:   The MapInfo table is appended to the server table named in the <span class="ph uicontrol">Server Table</span> column when the server table exists and the structure of the two tables match. Otherwise, you get an error and the table is not uploaded. For Oracle Spatial, the tables must have the same table structure and be in the same projection.
:   When there are multiple tables selected, the <span class="keyword wintitle">Table Append</span> dialog box opens. For instructions, see [Appending Multiple Tables to an Existing Table on the Server](guide/uploading/tableprocessingoptions.html#tableprocessingoptions__appendmultiple){.- .topic/xref .ajaxLink}.

When there are multiple tables selected in MapInfo EasyLoader, then selecting or clearing the <span class="ph uicontrol">Catalog</span> check box applies to all of the tables in the selection.

**Appending Multiple Tables to an Existing Table on the Server**

The <span class="keyword wintitle">Table Append</span> dialog box opens when you select more than one table in MapInfo EasyLoader and then either enter a new name in the <span class="ph uicontrol">Server Table</span> column for one of those tables or select <span class="ph uicontrol">Append</span> from the list in the <span class="ph uicontrol">Operation</span> column.

In the <span class="keyword wintitle">Table Append</span> dialog box, select an operation from the <span class="ph uicontrol">Operation for Collected Table</span> list for uploading the tables:

-   <span class="ph uicontrol">Create New</span> generates a new server table to append all selected tables to.
-   <span class="ph uicontrol">Replace</span> drops the existing server table and then creates a new table to append all of the selected tables to.
-   <span class="ph uicontrol">Append</span> appends all of the selected tables to an existing server table.

If the dialog includes a <span class="ph uicontrol">Server Table Name</span> field, then enter the name of the server table that you want to create, replace, or append to. If it does not include this field, then MapInfo EasyLoader uses the name that you entered in the <span class="ph uicontrol">Server Table</span> column.

All tables must have the same table structure and be in the same projection. Tables will not append if their table structure differs.

