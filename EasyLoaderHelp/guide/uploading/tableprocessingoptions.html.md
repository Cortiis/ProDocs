Table Processing Options {#table-processing-options .title .topictitle1}
========================

This section describes the table options available in MapInfo EasyLoader from the `Operation`{.uicontrol} list. All operations use the name that you specify in the `Server Table`{.uicontrol} column. By default the name in this column is the same as the source table.

`Create New Table`{.uicontrol}
:   A server table is created with the name that you specify in the `Server Table`{.uicontrol} column. If this option is chosen and a table with the same name already exists on the server, an error message displays. Use a different name or choose the option `Replace Existing Table`{.uicontrol} to upload the table.

`Replace Existing Table`{.uicontrol}
:   When this option is selected, if a server table of the same name already exists, it is dropped and a new table is created to match the MapInfo table being uploaded. This option uses the table name from the `Server Table`{.uicontrol} column. You can change this to the name of an existing table on the server.

`Append to Existing Table`{.uicontrol}
:   The MapInfo table is appended to the server table named in the `Server Table`{.uicontrol} column when the server table exists and the structure of the two tables match. Otherwise, you get an error and the table is not uploaded. For Oracle Spatial, the tables must have the same table structure and be in the same projection.
:   When there are multiple tables selected, the `Table Append`{.uicontrol} dialog box opens. For instructions, see [Appending Multiple Tables to an Existing Table on the Server](guide/uploading/tableprocessingoptions.html#tableprocessingoptions__appendmultiple){.- .topic/xref .ajaxLink}.

When there are multiple tables selected in MapInfo EasyLoader, then selecting or clearing the `Catalog`{.uicontrol} check box applies to all of the tables in the selection.

**Appending Multiple Tables to an Existing Table on the Server**

The `Table Append`{.uicontrol} dialog box opens when you select more than one table in MapInfo EasyLoader and then either enter a new name in the `Server Table`{.uicontrol} column for one of those tables or select `Append`{.uicontrol} from the list in the `Operation`{.uicontrol} column.

In the `Table Append`{.uicontrol} dialog box, select an operation from the `Operation for Collected Table`{.uicontrol} list for uploading the tables:

-   `Create New`{.uicontrol} generates a new server table to append all selected tables to.
-   `Replace`{.uicontrol} drops the existing server table and then creates a new table to append all of the selected tables to.
-   `Append`{.uicontrol} appends all of the selected tables to an existing server table.

If the dialog includes a `Server Table Name`{.uicontrol} field, then enter the name of the server table that you want to create, replace, or append to. If it does not include this field, then MapInfo EasyLoader uses the name that you entered in the `Server Table`{.uicontrol} column.

All tables must have the same table structure and be in the same projection. Tables will not append if their table structure differs.

