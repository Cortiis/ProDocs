Server Table Processing Options {#server-table-processing-options .title .topictitle1}
===============================

`Exclusive User`{.uicontrol}
:   You can speed up load time on large tables when you are the only one attempting to update or upload the table. If you do not select this option, MapInfo EasyLoader verifies after each commit that no other updates are made to the table while it is being uploaded. Selecting this option prevents this test from occurring, which can improve runtime performance for large tables.

`Create Primary Key`{.uicontrol}
:   This creates a primary key for the `Create New Table`{.uicontrol} and `Replace Existing Table`{.uicontrol} operations. This primary key is created in the MI\_PRINX column for Oracle Spatial, SQL Server Spatial, and PostGIS, or MI\_SQL\_REC\_NUM for XY and MICODE. These columns contain sequential numbers generated by MapInfo EasyLoader. These columns are always created, but do not have to be a primary key. The **Append to Existing Table** operation does not create a primary key.

`Grant Public Full Access`{.uicontrol}
:   This grants PUBLIC read and write access to the server table.

`Create Spatial Index`{.uicontrol}
:   This creates a spatial index called &lt;tablename&gt;ind on the geometry column of tables. When building your own spatial index, for your specific requirements, clear this check box to save loading time.
:   For Oracle Spatial tables, this creates a spatial index called &lt;tablename&gt;\_SX on the geometry column. The index tiling level is based on the SDO\_TUNE.ESTIMATE\_TILING\_LEVEL function. For tables with fewer than 7500 rows, the tiling level is restricted to eight (8). After the index is built, the ANALYZE table function is run on the index table. The spatial index is R-Tree for Oracle 8.17 or later.

`Create IDENTITY Column (SQL Server only)`{.uicontrol}
:   Creates the primary key column with IDENTITY properties. When selected, SQL Server automatically generates the primary key column values for new rows, so that you do not need to add them manually.

`Create Indexes`{.uicontrol}
:   When uploading a new table or replacing an existing table, this indexes all of the columns that are indexed in the original table. By default, this option is not selected.
:   The table upload begins when you select this check box and click `OK`{.uicontrol}.
:   

    <span class="notetitle">Note:`{.uicontrol} If the column name length is too long, the index creation fails. The name length limit varies per database.

    

`Style Column`{.uicontrol}
:   Specifies whether per-row styles are loaded with the data. You can set the name of the column in the text box beside the `Style Column`{.uicontrol} check box. The default column name is MI\_STYLE.
:   

    <span class="notetitle">Note:`{.uicontrol} To load per-row styles, the MapInfo Map catalog for the database must contain the following columns: RENDITIONTYPE, RENDITIONCOLUMN, RENDITIONTABLE, and NUMBER\_ROWS. For more information, see [MAPINFO\_MAPCATALOG Table Structure](guide/uploading/mapcatalogtablestructure.html){.- .topic/xref .ajaxLink}.

    

`Commit Interval`{.uicontrol}
:   Specifies a commit interval for uploading. MapInfo EasyLoader commits the inserted records when the commit interval is reached. The default commit interval is 1000. If the commit interval is set to 0 (zero), the whole range of records is inserted as a single transaction, before a commit is issued.

`Table Errors Threshold %`{.uicontrol}
:   A value of zero (0) to 100 that is the percentage of table upload failures allowed before the upload stops. A value of 100 allows the upload to complete no matter the number of failures.

`Insert Errors Threshold %`{.uicontrol}
:   A value of zero (0) to 100 that is the percentage of insert failures allowed on a table before the table upload stops. The percentage is the number of rows that fail based on the number of rows in the table. A value of 100 allows the process to complete no matter the number of failures.
:   The Error Threshold percentages work together. An insert failure for a row in a table counts towards the Table Errors Threshold.

`Schema Name`{.uicontrol}
:   Specifies a schema name when uploading tables to SQL Server, or PostgresSQL and/or PostGIS.

`Spatial Object Type`{.uicontrol}
:   Specifies an object type, which depends on the server connection in use. For details, see [Spatial Object Type Options](guide/uploading/spatialobjectypeoptions.html){.- .topic/xref .ajaxLink}.

