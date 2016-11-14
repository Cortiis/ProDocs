Command-Line Flag Descriptions {#command-line-flag-descriptions .title .topictitle1}
==============================

The following flags specify upload parameters when launching MapInfo EasyLoader from a command-line. Many of the arguments have a long form and a legacy short form, such as the command to set a schema name when you upload a table: [/SchemaName](guide/productivity/commandlineflags.html#commandlineflags__schemaname){.- .topic/xref .ajaxLink} and [/B](guide/productivity/commandlineflags.html#commandlineflags__schemaname){.- .topic/xref .ajaxLink}.

Use a space or an equal sign (=) to separate a command argument and its value. This example sets a target schema name, /SchemaName=schema\_name or /B schema\_name.

Help: /?, /Help {#help-help .title .sectiontitle}
---------------

This flag shows the list of available command-line options.

Syntax: /?

Syntax: /Help

Append All Tables to One: /A, /AppendAll {#append-all-tables-to-one-a-appendall .title .sectiontitle}
----------------------------------------

This flag uploads multiple tables to a single table, when the table structures are the same.

Syntax: /A

Syntax: /AppendAll \[ =server\_table\_name \]

server\_table\_name is optional for specifying a server table to append to.

Set the Application Locale: /AppLocale {#set-the-application-locale-applocale .title .sectiontitle}
--------------------------------------

This flag sets the locale at runtime. It requires an ISO language code in the four character form as outlined by Microsoft's Language Culture Names list <https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx>.

Supported languages are:

<table>
<colgroup>
<col width="100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><table>
<tbody>
<tr class="odd">
<td>Cs–CZ</td>
<td>Czech – Czech Republic</td>
</tr>
<tr class="even">
<td>da–DA</td>
<td>Danish – Denmark</td>
</tr>
<tr class="odd">
<td>de–DE</td>
<td>German – Germany</td>
</tr>
<tr class="even">
<td>en–US</td>
<td>English – United States</td>
</tr>
<tr class="odd">
<td>es–ES</td>
<td>Spanish – Spain</td>
</tr>
<tr class="even">
<td>fi–FI</td>
<td>Finnish – Finland</td>
</tr>
<tr class="odd">
<td>fr–FR</td>
<td>French – France</td>
</tr>
<tr class="even">
<td>he–IL</td>
<td>Hebrew – Israel</td>
</tr>
<tr class="odd">
<td>it–IT</td>
<td>Italian – Italy</td>
</tr>
<tr class="even">
<td>ja–JP</td>
<td>Japanese – Japan</td>
</tr>
<tr class="odd">
<td>nl–NL</td>
<td>Dutch – Netherlands</td>
</tr>
<tr class="even">
<td>pl–PL</td>
<td>Polish – Poland</td>
</tr>
<tr class="odd">
<td>pt–PT</td>
<td>Portuguese – Portugal</td>
</tr>
<tr class="even">
<td>ru–RU</td>
<td>Russian – Russian Federation</td>
</tr>
<tr class="odd">
<td>sv–SE</td>
<td>Swedish – Sweden</td>
</tr>
<tr class="even">
<td>tr–TR</td>
<td>Turkish – Turkey</td>
</tr>
<tr class="odd">
<td>zh–CN</td>
<td>Chinese (Simplified) – China</td>
</tr>
</tbody>
</table></td>
</tr>
</tbody>
</table>

Syntax: /AppLocale=languagecode

``` {.pre .codeblock}
/AppLocale=fr-FR
```

Schema Name: /B, /SchemaName {#schema-name-b-schemaname .title .sectiontitle}
----------------------------

This flag specifies a schema name when uploading tables to SQL Server. If you do not supply a schema name, then this flag uses the user's default schema on the server. On SQL Server, the default is usually set to dbo.

Syntax: /B string\_value

Syntax: /SchemaName=string\_value

``` {.pre .codeblock}
/SchemaName=MIPROUSER
```

Create Indices for all Locally-Indexed Columns: /C, /CreateIndexes {#create-indices-for-all-locally-indexed-columns-c-createindexes .title .sectiontitle}
------------------------------------------------------------------

When uploading a new table or replacing an existing table, this flag tells MapInfo EasyLoader to automatically index columns on the server table when they are indexed on the local table.

This flag does not make or reset column selections. Instead, use the MapInfo EasyLoader user interface. For details, see Create Indexes under [Server Table Processing Options](guide/productivity/../uploading/servertableprocessingoptions.html){.- .topic/xref .ajaxLink} and [Mixing Command-Line flags and MapInfo EasyLoader Window Options](guide/productivity/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}.

Syntax: /C

Syntax: /CreateIndexes

Input Command File: /CF, /CommandFile {#input-command-file-cf-commandfile .title .sectiontitle}
-------------------------------------

This flag loads command-line arguments from an input file. Each line in the file must contain only one command. MapInfo EasyLoader skips blank lines and comments that begin with a hash tag (\#). You must specify the path to the input file with this flag.

You can use the state file that MapInfo EasyLoader automatically creates under the <span class="ph filepath">AppData</span> folder with the name <span class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> as input. For details, see [Locating the MapInfo EasyLoader Command-Line Flags RSP File](guide/productivity/locatingrspfile.html){.- .topic/xref .ajaxLink}. You can also generate a state file using the [/SaveCommandArgs](#commandlineflags__savecommandargs){.- .topic/xref .ajaxLink} flag.

Syntax: /CF CommandFilePath

Syntax: /CommandFile=CommandFilePath

``` {.pre .codeblock}
/CommandFile=C:\MyFiles\EasyLoader\Commands\myCommandFile.txt
```

Convert WKB on Oracle: /ConvertWKBOnOracle {#convert-wkb-on-oracle-convertwkbonoracle .title .sectiontitle}
------------------------------------------

This flag passes geometries as WKB (Well-Known Binaries) to an Oracle server for conversion to the SDO\_GEOMETRY type. Only use this flag with OCI connections. By default, MapInfo EasyLoader does this conversion before passing geometries to the Oracle server to improve performance. You would only use this flag to work around WKB to SDO\_GEOMETRY conversion problems.

Syntax: /ConvertWKBOnOracle

File Directory for Server Table(s): /D, /OutputFolder {#file-directory-for-server-tables-d-outputfolder .title .sectiontitle}
-----------------------------------------------------

This flag generates a TAB file in a specific directory location to access a remote database with. The new .tab file name appends <span class="ph filepath">\_srv.tab</span> to your server table name, <span class="ph filepath">yourServerTableName\_srv.tab</span>. The directory must be valid to upload a table to it. An empty directory is considered valid.

Syntax: /D string\_value

Syntax: /OutputFolder=string\_value

If the path contains spaces, use quotation marks around it.

``` {.pre .codeblock}
/OutputFolder="C:\my work folder\Tables\My Upload Tables"
```

Exclusive Use of Table: /E, /ExclusiveUse {#exclusive-use-of-table-e-exclusiveuse .title .sectiontitle}
-----------------------------------------

This flag improves load time on large tables when you are the only person updating the table. This flag does not guarantee that MapInfo EasyLoader can obtain exclusive use of a table. After each commit, MapInfo EasyLoader checks the maximum value of the primary key column (called MI\_PRINX) to detect if entries were been made by other processes. This flag prevents this check, which improve the upload time for large tables.

Syntax: /E

Syntax: /ExclusiveUse

You can use this flag in a MapInfo EasyLoader shortcut, see [Mixing Command-Line flags and MapInfo EasyLoader Window Options](guide/productivity/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}.

Log File name: /F, /LogFileName {#log-file-name-f-logfilename .title .sectiontitle}
-------------------------------

This flag specifies the name and location of the log file created when MapInfo EasyLoader uploads a table. By default, a log file named <span class="ph filepath">EasyLoader.log</span> is created in the <span class="ph filepath">TEMP</span> directory. If you specify a file name but do not provide a path, then MapInfo EasyLoader saves the log file to the same directory as the <span class="ph filepath">EasyLoader.exe</span> file.

Syntax: /F string\_value

Syntax: /LogFileName=string\_value

This example shows only the name of the log file, which saves to the same directory as <span class="ph filepath">MapInfoEasyLoader.exe</span>.

``` {.pre .codeblock}
/F myLogFile.txt
```

``` {.pre .codeblock}
/LogFileName=myLogFile.txt
```

This example specifies the full path for the log file. If the path contains spaces, use quotation marks around it.

``` {.pre .codeblock}
/F "C:\my work folder\myLogFile.txt"
```

``` {.pre .codeblock}
/LogFileName="C:\my work folder\myLogFile.txt"
```

Table Folder: /Folder {#table-folder-folder .title .sectiontitle}
---------------------

This flag loads all tables from a folder. Use a semicolon (;) to separate each element.

Syntax: /Folder=FolderName;ServerOperation;AddToMapCatalog;IncludeSubFolders

Where:

-   FolderName is the name of the root folder.
-   ServerOperation is the default server operation for the folder, use Append, CreateNew, or Replace. The default is Append.
-   AddToMapCatalog creates an entry for the folder tables in the Map Catalog. This is set to true by default, so set to false to not add an entry in the Map Catalog.
-   IncludeSubFolders includes subfolders when querying for the folder's tables. This is set to true by default, so set to false to not include subfolders in the query.

The following example does not include the optional AddToMapCatalog and IncludeSubFolders elements, both of which are set to true by default.

``` {.pre .codeblock}
/Folder=C:/MyData;CreateNew
```

The following example does not include tables in subfolders under <span class="ph filepath">MyData</span>. The third AddToMapCatalog element is blank, because it is set to true by default.

``` {.pre .codeblock}
/Folder=C:/MyData;CreateNew;;false
```

Grant All: /G, /GrantAll {#grant-all-g-grantall .title .sectiontitle}
------------------------

This flag grants all rights as Public. By default, this is not set and tables are private.

Syntax: /G

Syntax: /GrantAll

Do Not Create a Spatial Index: /I, /NoCreateSpatialIndex {#do-not-create-a-spatial-index-i-nocreatespatialindex .title .sectiontitle}
--------------------------------------------------------

This flag prevents MapInfo EasyLoader from creating a spatial index on the uploaded table. By default, this flag is turned off and MapInfo EasyLoader creates a spatial index.

For Informix Dynamic Server (IDS) and User Defined Object (UDO) tables, MapInfo EasyLoader creates a spatial index and then issues the "update statistics medium" statement.

Syntax: /I

Syntax: /NoCreateSpatialIndex

For more information, see [/NoCreatePrimaryKey](#commandlineflags__nocreateprimarykey){.- .topic/xref .ajaxLink}, which controls the unique index.

Create Automated Key Column for SQL Server: /K, /AutomatedKey {#create-automated-key-column-for-sql-server-k-automatedkey .title .sectiontitle}
-------------------------------------------------------------

This flag automatically generates unique key column values in SQL Server, so that you do not need to fill the key manually when you insert a new row. The key column is called MI\_PRINX or MI\_SQL\_REC\_NUM depending on the spatial object type that is selected: MI\_PRINX is for spatial types and MI\_SQL\_REC\_NUM is for XY types.

Syntax: /K \[ IDENTITY | NO\_IDENTITY \]

Syntax: /AutomatedKey \[ IDENTITY | NO\_IDENTITY \]

The key column is created with the IDENTITY property by default, so you do not need to include the IDENTITY property. If you want to turn this off, use the NO\_IDENTITY property.

``` {.pre .codeblock}
/AutomatedKey
```

``` {.pre .codeblock}
/AutomatedKey=NO_IDENTITY
```

You can use this flag in an MapInfo EasyLoader shortcut, see [Mixing Command-Line flags and MapInfo EasyLoader Window Options](guide/productivity/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}.

List of MapInfo Tables: /L, /TableList {#list-of-mapinfo-tables-l-tablelist .title .sectiontitle}
--------------------------------------

This flag specifies a text file that lists the tables to upload. The format of each line in the text file is the same as for [Table Specification: /T\[able\]](#commandlineflags__table){.- .topic/xref .ajaxLink}.

Syntax: /L \[ TextFile | Path \]

Syntax: /TableList=\[ TextFile | Path \]

Where:
-   TextFile is the name of the text file that lists the tables to upload.
-   Path is the full path location to the text file.

This example shows only the name of the file, which is located the same directory as <span class="ph filepath">MapInfoEasyLoader.exe</span>.

``` {.pre .codeblock}
/L ListOfTables.txt
```

This example shows the path to the file. If the path contains spaces, use quotation marks around it.

``` {.pre .codeblock}
/TableList="C:\my work folder\Tables\ListOfTables.txt"
```

Spatial Object Type: /M, /SpatialObjectType {#spatial-object-type-m-spatialobjecttype .title .sectiontitle}
-------------------------------------------

This flag specifies the object type to use: either MICODE for XY with MapInfo key or XY for XY only. MapInfo EasyLoader does not display for any value other than MICODE and XY.

Syntax: /M \[ XY | MICODE \]

Syntax: /SpatialeObjectType=\[ XY | MICODE \]

Examples:

``` {.pre .codeblock}
/M XY
```

``` {.pre .codeblock}
/SpatialObjectType=MICODE
```

Start Application Minimized: /Min, /Minimized {#start-application-minimized-min-minimized .title .sectiontitle}
---------------------------------------------

This flag starts MapInfo Easyloader in a minimized state. This does not alter the behavior of the [/NoStart](#commandlineflags__nostart){.- .topic/xref .ajaxLink} flag. By default, this is set to false.

Syntax: /Min

Syntax: /Minimized

Do Not Auto Start the Table Load: /NoStart {#do-not-auto-start-the-table-load-nostart .title .sectiontitle}
------------------------------------------

This flag disables the auto start behavior, so that MapInfo EasyLoader does not automatically connect and begin to upload tables, even if the connection and tables are specified. By default, this is set to false.

Syntax: /NoStart

Run Without User Interface: /NoUi {#run-without-user-interface-noui .title .sectiontitle}
---------------------------------

This flag runs MapInfo EasyLoader without a user interface. This is useful when running MapInfo EasyLoader from a batch file for auto loading tables.

This flag requires a connection and a list of tables to upload. At minimum, you would include a server connection string flag /ConnectionString or the Oracle connection string flag /OracleConnectionString, and a list of MapInfo tables /TableList or a folder of tables /Folder. You do not need to include the /QuitWhenDone flag with /NoUi.

Syntax: /NoUi connection tables

Where:

-   connection is either [/ConnectionString](#commandlineflags__connectionstring){.- .topic/xref .ajaxLink} or [/OracleConnectionString](#commandlineflags__oracleconnectionstring){.- .topic/xref .ajaxLink}.
-   tables is either [/TableList](#commandlineflags__tablelist){.- .topic/xref .ajaxLink} or [/Folder](#commandlineflags__folder){.- .topic/xref .ajaxLink}.

Connection String: /O, /OracleConnectionString {#connection-string-o-oracleconnectionstring .title .sectiontitle}
----------------------------------------------

This flag sets a connection string for Oracle Spatial.

Syntax: /O \[friendly\_name\]user\_name/password@server\_name

Where:
-   friendly\_name is optional for setting a specific name for the connection identifier.
-   user\_name is the Oracle user name to connect with.
-   password is the password for the Oracle user name.
-   server\_name is the name of the server you are connecting to.

This example sets a connection string without defining a name for the connection identifier.

``` {.pre .codeblock}
/OracleConnectionString=myUid/myPwd@oraserver11gr2
```

This example sets the same connection and names the connection Oracle1. If the connection name has spaces, use quotation marks around it.

``` {.pre .codeblock}
/OracleConnectionString=[Oracle1]myUid/myPwd@oraserver11gr2
```

For ODBC connections, see [Server Connection String: /S, /ConnectionString](#commandlineflags__connectionstring){.- .topic/xref .ajaxLink}.

Default Server Operation: /P, /ServerOperation {#default-server-operation-p-serveroperation .title .sectiontitle}
----------------------------------------------

Use this flag to specify what to do with the upload tables in the server.

-   A appends to an existing server table.
-   C creates a new server table. If the table you are uploading has the same name as a table on the server, the upload fails.
-   R replaces an existing server table.

Syntax: /P \[ A | C | R \]

Syntax: /ServerOperation=\[ A | C | R \]

``` {.pre .codeblock}
/P A
```

``` {.pre .codeblock}
/SpatialObjectType=C
```

Exit after Upload: /Q {#exit-after-upload-q .title .sectiontitle}
---------------------

This flag closes MapInfo EasyLoader after completing the upload.

Syntax: /Q

Syntax: /QuitWhenDone

Server Connection String: /S, /ConnectionString {#server-connection-string-s-connectionstring .title .sectiontitle}
-----------------------------------------------

This flag passes an ODBC connection string to the program. The <span class="keyword wintitle">ODBC Connection</span> dialog box does not display when you supply enough information to connect.

Syntax: /ConnectionString=\[ (friendly\_name)connection\_string | user\_name/connection\_string \]

Where:
-   friendly\_name is optional for setting a specific name for the connection identifier.
-   user\_name is the Oracle user name to connect with.
-   connection\_string is the ODBC connection string.

This example uses a data source (DSN).

``` {.pre .codeblock}
/ConnectionString=DSN=MyDataSource
```

This example sets a connection name to MyDBConnection. It then uses the full connection string to the database, where items in all capitals are connection string parameters.

``` {.pre .codeblock}
/ConnectionString=[MyDBConnection]UID=MyId;DATABASE=MyDB;
            HOST=MyServer;SERVER=MyServer_tli;SERVICE=sqlexec;PROTOCOL=onsoctcp
```

This example sets a connection name to My Data Source. It uses a data source (FileDSN=C:\\Tenop\\MyDataSource.dsn) with a user ID (UID=MyUserID) and password (PWD=MyPassword). If the connection name has spaces, use quotation marks around the entire connection string.

``` {.pre .codeblock}
/ConnectionString="[My Data Source]FILEDSN=C:\Tenop\MyDataSource.dsn;UID=MyUserID;PWD=MyPassword"
```

For ODBC connections, see [Connection String: /O, /OracleConnectionString](#commandlineflags__oracleconnectionstring){.- .topic/xref .ajaxLink}.

Save Command Response File: /Save, /SaveCommandArgs {#save-command-response-file-save-savecommandargs .title .sectiontitle}
---------------------------------------------------

This flag creates a state file when MapInfo EasyLoader shuts down that contains the command-line arguments used to start MapInfo EasyLoader and that were set during the session. You can use this state file to restart EasyLoader on the command-line with the [/CommandFile](#commandlineflags__commandfile){.- .topic/xref .ajaxLink} flag to apply the same settings as the previous session.

MapInfo EasyLoader automatically creates a state file that you can also use with the [/CommandFile](#commandlineflags__commandfile){.- .topic/xref .ajaxLink} flag. It is located under the <span class="ph filepath">AppData</span> folder with the name <span class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> (for example, <span class="ph filepath">C:\\Users\\&lt;UserID&gt;\\AppData\\Roaming\\MapInfoEasyLoader.Settings.rsp</span>). MapInfo EasyLoader does not create the <span class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> file when you use the /SaveCommandArgs flag.

<span class="notetitle">Note:</span> The <span class="ph filepath">AppData</span> folder is in a path like <span class="ph filepath">C:\\Users\\&lt;UserID&gt;\\AppData</span>. If you cannot see the <span class="ph filepath">AppData</span> folder, it is because it is hidden. To locate it, on the Microsoft <span class="ph uicontrol">Start</span> menu in the <span class="ph uicontrol">Search programs and files</span> field type %AppData%.

Syntax: /SaveCommandArgs=StateFilePath

Where, StateFilePath is a TXT file and any valid path location.

Example:

``` {.pre .codeblock}
/SaveCommandArgs=C:\MyFiles\EasyLoader\Commands\myCommandFile.txt
```

Table Specification: /T /Table {#table-specification-t-table .title .sectiontitle}
------------------------------

This flag passes a single table name to MapInfo EasyLoader.

Syntax: /Table=TableName(;ServerTableName;UploadRange;ServerOperation;AddToMapCatalog)

Where:
-   TableName is the .tab file name to upload.
-   ServerTableName (optional) is the server table name. If left empty, MapInfo EasyLoader uses TableName.
-   UploadRange (optional) is the range of table rows to upload. The range is a starting number and ending number with a comma (,) separator. A range of three to six would be 3,6.
-   ServerOperation (optional) is the server operation for the table. Use Append, CreateNew, or Replace.
-   AddToMapCatalog creates an entry for the table in the Map Catalog when set to true. By default, this is set to true, so you do not need to specify it in the command-line.

This example includes all parameters.

``` {.pre .codeblock}
/T C:\data\states.tab;mystates;1,500;CreateNew;true
```

This example leaves the upload range value empty, so that it uploads all of the rows in the table. It excludes the Map Catalog entry, so an entry is not created for this table in the Map Catalog.

``` {.pre .codeblock}
/Table=C:\data\states.tab;MyOtherStates;;Replace
```

This example includes only the path to the table to upload.

``` {.pre .codeblock}
/Table=C:\data\aTable.tab
```

If the path of the upload file contains spaces, use quotation marks around it.

``` {.pre .codeblock}
/Table="C:\My Documents\tables\aTable.tab";MyTable;;Replace;true
```

Do Not Create a Primary Index: /U, /NoCreatePrimaryKey {#do-not-create-a-primary-index-u-nocreateprimarykey .title .sectiontitle}
------------------------------------------------------

This flag prevents MapInfo EasyLoader from creating a primary key when uploading a table. It is turned off by default. When uploading to Oracle Spatial, MapInfo EasyLoader creates a primary key on the MI\_PRINX column and names the key table\_name\_PK.

Syntax: /U

Syntax: /NoCreatePrimaryKey

Also see [Do Not Create a Spatial Index: /I, /NoCreateSpatialIndex](#commandlineflags__nocreatespatialindex){.- .topic/xref .ajaxLink}, which controls the spatial index.

Commit Interval: /X, /CommitInterval {#commit-interval-x-commitinterval .title .sectiontitle}
------------------------------------

This flag sets a commit interval. MapInfo EasyLoader inserts records to the database and then commits them when it reaches the commit interval. The same interval value applies when creating the spatial index for Oracle Spatial. If the commit interval is set to zero (0), MapInfo EasyLoader inserts the entire range of records as a single transaction before issuing a commit.
Syntax: /X integer\_value

Syntax: /CommitInterval=integer\_value

Where, integer\_value is an integer value. The default value is 1000.

This example sets the commit interval to 500, so that MapInfo EasyLoader commits all of the records to the database every 500th record.

``` {.pre .codeblock}
/CommitInterval=500
```

Style Column Name: /Y, /StyleColumnName {#style-column-name-y-stylecolumnname .title .sectiontitle}
---------------------------------------

This flag loads per-row styles with the upload data. If you do not provide a name for the column to use, MapInfo EasyLoader uses the default MI\_STYLE column name. If you do not want to create a style column on the server table, include the NO\_STYLE parameter.

Syntax: /Y ( string\_value ) ( NO\_STYLE )

Syntax: /keyword=( string\_value ) ( NO\_STYLE )

This example uses the column called TableStyleCol to load per-row styles.

``` {.pre .codeblock}
/Y TableStyleCol
```

``` {.pre .codeblock}
/StyleColumnName=TableStyleCol
```

This example uses the default column called MI\_STYLE to load per-row styles.

``` {.pre .codeblock}
/Y
```

``` {.pre .codeblock}
/StyleColumnName
```

This example does not create a style column on the server table.

``` {.pre .codeblock}
/Y NO_STYLE
```

``` {.pre .codeblock}
/StyleColumnName=NO_STYLE
```

SQL Server Auto Select Geometry: /Z, /AutoSelectSqlServerSpatial {#sql-server-auto-select-geometry-z-autoselectsqlserverspatial .title .sectiontitle}
----------------------------------------------------------------

Use this flag to upload the table as a Geometry data type in Microsoft SQL Server Spatial regardless of the coordinate system in the native table.

Syntax: /Z

Syntax: /AutoSelectSqlServerSpatial

For more information, see [Loading Microsoft SQL Server Spatial Data](guide/productivity/../uploading/loadingsqlserverspatialdata.html){.- .topic/xref .ajaxLink}.

