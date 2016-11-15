Using the Command Line Flags to Run EasyLoader {#using-the-command-line-flags-to-run-easyloader .title .topictitle1}
==============================================

You can run the EasyLoader executable from the command line. For example:

> <span class="keyword cmdname">easyloader.exe /T c:\\data\\states.tab;mystates /G /Y`{.uicontrol}

<span class="notetitle">Note:`{.uicontrol} Do not enclose file names in quotation marks. Command line arguments are interpreted correctly without quote marks, even if the filename includes spaces. If you use quotation marks, EasyLoader cannot parse the filenames correctly and errors occur.

EasyLoader supports the following flags to allow you to specify additional upload parameters from the command line:

-   **/A Append All Tables to One** – Use this flag to upload multiple tables to a single table (as long as the table structures are the same).

    Syntax: /A

-   **/B Schema Name** – Use this flag to specify a schema name when you upload tables to a SQL Server 2005 server. If you do not supply a schema name, then this flag uses the user’s default schema on the server (on SQL Server the default is usually set to **dbo** for example).

    Syntax: /B SchemaName

-   **/C Create Indices for All Locally-Indexed Columns** – Use this flag to mandate that only the columns that were indexed on the local table be automatically indexed on the server table, when you upload a new table or replace an existing table.

    This command line option does not allow you to make or reset column selections. That additional capability is supported by the EasyLoader user interface (see Create Indices on Other Columns under [Server Table Processing Options](contents/servertableprocessingoptions.html){.- .topic/xref .ajaxLink} and [Mixing Command Line Flags with the EasyLoader User Interface](contents/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}).

    Syntax: /C

-   **/D .tab File Directory for Server Table(s)** – Use this flag to generate TAB files and provide the TAB file directory to access a remote DBMS. The default is an empty directory, in which case EasyLoader does not generate .tab files. The naming convention of your newly generated .tab file is yourServerTableName\_srv.tab. The directory must be valid (empty is treated as valid) to upload a table.

    Command line option is /D PathName.

    Syntax: /D C:\\temp

    Do not enclose file names in quotation marks.

-   **/E Exclusive Use of Table** – Use this flag to improve load time on large tables significantly if you know that you are the only one attempting to update the table. Specifying this flag does not guarantee that EasyLoader can obtain exclusive use; you must guarantee that to the loader. EasyLoader checks on the current maximum value of the primary key column (MI\_PRINX) after each commit to ensure that it detects any other entries that may have been made by other processes. This flag prevents that check from occurring, which can significantly improve the upload time for large tables.

    This flag may be placed within a shortcut, allowing the interactive use of the EasyLoader interface for other functions.

    Syntax: /E

-   **/F Log File name** – Use this flag to specify the name and location of the log file. Whenever you upload a table, EasyLoader produces a log file. By default, a log file named <span class="ph filepath">EasyLoader.log`{.uicontrol} is created in the Windows TEMP directory. If you specify a file name but do not provide a path, EasyLoader creates the log in the same directory as the <span class="ph filepath">EasyLoader.EXE`{.uicontrol} file.

    Syntax: The first example shows just the name of the log file, which is written to the directory in which <span class="ph filepath">EasyLoader.exe`{.uicontrol} is located; the second example specifies the full path for the log file.

    /F myLogFile.txt

    /F c:\\temp\\myLogFile.txt

    Do not enclose file names in quotation marks.

-   **/G Grant all** – Use this flag to grant all rights to PUBLIC. This flag is turned OFF by default.

    Syntax: /G

-   **/I Do Not Create a Spatial Index** – Use this flag to prevent EasyLoader from creating a spatial index on the uploaded table. By default EasyLoader creates a spatial index. This flag is turned OFF by default, meaning a spatial index is created. For IDS/UDO tables, EasyLoader creates a spatial index, and then issues the 'update statistics medium' statement. See the /U flag description, which controls the unique index. For Oracle Spatial tables, the spatial index is created on the geometry column and is called table\_name\_SX; for SpatialWare tables, the index is created on the column geometry column and is called hg table\_name ind.

    Syntax: /I

-   **/K Create Automated Key Column for SQL Server** – Use this flag to generate the unique key column values automatically in SQL Server. You do not need to fill the key manually when you insert a new row. The key column (SW\_MEMBER) can be created with the IDENTITY property as an option.

    For SQL Server 2005, the key column is SW\_MEMBER, because it needs SpatialWare. It also can be MI\_SQL\_REC\_NUM depending on the spatial object type that is selected. If no SpatialWare is used (as with SQL Server versions 2008 or later), then the key column is MI\_PRINX or MI\_SQL\_REC\_NUM: MI\_PRINX or SW\_MEMBER is used for spatial types and MI\_SQL\_REC\_NUM is used for XY types.

    The key column (SW\_MEMBER) is created with the IDENTITY property by default. Therefore, omitting the K option in the command line has the same action as specifying /K, (that is, it creates the key column with IDENTITY property). If you want to turn off the property, you must provide a keyword NO\_IDENTITY following /K. See [Mixing Command Line Flags with the EasyLoader User Interface](contents/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}.

    Syntax: /K

    Example: /K NO\_IDENTITY

-   **/L List of MapInfo tables** – Use this flag to specify a text file that contains a list of tables you want to upload. The format of each line is the same as the /T flag.

    Syntax: /L ListOfTables.txt

    Do not enclose file names in quotation marks.

-   **/M MICODE/XY** – Use this flag to specify the object type to be used if it is SpatialWare. If the /M flag is used, provide MICODE (for XY with MapInfo key) or XY (for XY only) after /M. Any words other than MICODE or XY after /M are treated as errors, and EasyLoader does not run (the main EasyLoader dialog box does not appear). If you do not use the /M flag, EasyLoader uses SpatialWare as the default if the selected database has SpatialWare installed.

    Syntax: /M MICODE

    Example: /M X

-   **/O Connection String** – Use this flag to set a connection string for Oracle Spatial to be passed to the program. See the /S flag for ODBC connections.

    Syntax: /O user\_name/password@server\_name

-   **/P A | C | R** – Use this flag to specify what to do with the table(s) being loaded to the server.

    Use A to append to an existing server table.

    Use C to create a new server table. If you specify the C option and the table you are uploading has the same name as a table on the server, upload operation fails.

    Use R to replace an existing table.

    Syntax: /P A

-   **/Q Quit** – Use this flag to exit EasyLoader when the upload is complete.

    Syntax: /Q

-   **/R Replace the server table** – Use this flag to drop the server table and create and upload the new table. EasyLoader creates a table on the server even if the table did not exist previously.

    Syntax: /R

-   **/S Connection String** – Use this flag to pass an ODBC connection string to the program. If enough information to connect is supplied, the ODBC connection dialog box does not appear. See the /O flag for Oracle Spatial connections. The following examples illustrate the syntax of this flag. The first example uses a data source (<span class="keyword cmdname">DSN`{.uicontrol}), the second supplies the full connection string.

    /S DSN=MyDataSource

    /S UID=MyId;DATABASE=MyDB;HOST=MyServer;SERVER=MyServer\_tli;SERVICE=sqlexec;PROTOCOL=onsoctcp

    The following example shows the syntax using a data source (<span class="keyword cmdname">FileDSN`{.uicontrol}) with a user ID (<span class="keyword cmdname">UID`{.uicontrol}) and password (<span class="keyword cmdname">PWD`{.uicontrol}).

    /S FILEDSN=C:\\Tenop\\MyDataSource.dsn;UID=MyUserID;PWD=MyPassword

-   **/T MapInfo Table Name;Server Table Name;Range** – Use this flag to pass a single table name to the program. Use a semicolon symbol as the separator between the MapInfo table name, the server name, and the range. The range is in the format starting number (COMMA) ending number. The server table name and the range are optional.

    Syntax: /T c:\\data\\states.tab;mystates;1,500

    

    <span class="notetitle">Note:`{.uicontrol} Do not enclose file names in quotation marks.

    

-   **/U Do Not Create a Primary Index** – Use this flag to add a primary key constraint by default. This flag prevents a primary key from being created on the table. This flag is turned OFF by default, which means that a primary key is created by default. See /I which controls the spatial index. For Oracle Spatial tables, the primary key is created on the column MI\_PRINX and is called table\_name\_PK. For SpatialWare tables, the primary key is created on the column SW\_MEMBER and is called table\_name\_PK.

    Syntax: /U

-   **/V Oracle Version** – Use this flag to load tables on an Oracle 8.1.6 server with the 8.1.5 format. This not generally recommended, but it is available if you have a special need to do this. If you want to accomplish this using the graphical interface, see [Mixing Command Line Flags with the EasyLoader User Interface](contents/mixingcommandlineflags.html){.- .topic/xref .ajaxLink}.

    Syntax: /V

-   **/X Commit interval** – Use this flag to specify a commit interval. EasyLoader commits the inserted records when it reaches the commit interval you specify. The default commit interval is 1000. This same interval applies to the creation of the spatial index for Oracle Spatial. If the commit interval is set to 0 (zero), the whole range of records is inserted as a single transaction, before a commit is issued.

    Syntax: /X 500

-   **/Y Style Column Name** – Use this flag to specify whether per-row styles are being loaded with the data. You can also specify the name of the column to be used. If you do not provide a name, the default MI\_STYLE column name is created. If you specify the NO\_STYLE keyword after the /Y flag, EasyLoader does not create a style column on the server table.

    Syntax: /Y \[StyleColumnName | NO\_STYLE\]

-   **/Z Always Geometry** – Use this flag to specify that the table is to be uploaded as a Geometry data type in Microsoft SQL Server Spatial, regardless of the coordinate system specified in the native table. For more information, see [Loading Microsoft SQL Server Spatial Data](contents/loadingsqlserverspatialdata.html){.- .topic/xref .ajaxLink}.

    Syntax: /Z

