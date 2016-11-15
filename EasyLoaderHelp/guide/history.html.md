History of EasyLoader Changes {#history-of-easyloader-changes .title .topictitle1}
=============================

This section provides a history of features and enhancements that have been added to EasyLoader.

New in EasyLoader 16.0 {#new-in-easyloader-16.0 .title .sectiontitle}
----------------------

EasyLoader is now a 64-bit release that works with MapInfo Pro 15.2 and 16.0 64-bit releases. It has a new look and feel that makes it easier to use.

You can work with both native MapInfo TAB files and nativeX (extended) TAB files. This release supports Unicode, so that you can work with files in different character encodings.

The commandline flags that you use when launching EasyLoader from a command-line have been updated. They now have longer names that are more user friendly. Instead of using /O to set the oracle connection string, you can use /OracleConnectionString. Shorter flags, like /O, still work, but using the longer flags is more intuative. Also, there are new commandline flags available:

-   [Help: /?, /Help](guide/aboutcommandlineflags.html#aboutcommandlineflags__help){.- .topic/xref .ajaxLink}
-   [Set the Application Locale : /AppLocale](guide/aboutcommandlineflags.html#aboutcommandlineflags__applocale){.- .topic/xref .ajaxLink}
-   [Input Command File: /CF, /CommandFile](guide/aboutcommandlineflags.html#aboutcommandlineflags__commandfile){.- .topic/xref .ajaxLink}
-   [Table Folder: /Folder](guide/aboutcommandlineflags.html#aboutcommandlineflags__folder){.- .topic/xref .ajaxLink}
-   [Start Application Minimized: /Min](guide/aboutcommandlineflags.html#aboutcommandlineflags__minimized){.- .topic/xref .ajaxLink}
-   [Do Not Autostart the Table Load: /NoStart](guide/aboutcommandlineflags.html#aboutcommandlineflags__nostart){.- .topic/xref .ajaxLink}
-   [Run Without User Interface: /NoUi](guide/aboutcommandlineflags.html#aboutcommandlineflags__noui){.- .topic/xref .ajaxLink}
-   [Save Command Response File: /SaveCommandArgs](guide/aboutcommandlineflags.html#aboutcommandlineflags__savecommandargs){.- .topic/xref .ajaxLink}

The following commandline flags have been retired and are no longer available.

-   /R Replace the server table. You can choose to replace the server table when using the new [/Folder](guide/aboutcommandlineflags.html#aboutcommandlineflags__folder){.- .topic/xref .ajaxLink} flag, which uploads all tables from a folder.
-   /V Oracle version. Easyloader knows the Oracle version from the Oracle connection string.

This release fixes the following issues:

  Issue Number   Description and Resolution
  -------------- ----------------------------
  MIPRO-xxxxx    xxxxx

New in EasyLoader 15.2 {#new-in-easyloader-15.2 .title .sectiontitle}
----------------------

EasyLoader 15.2 is a 32-bit release that works with the MapInfo Pro 15.2 64-bit release. MapInfo Pro 15.2 supports unicode and requires the PostgreSQL Unicode ODBC drive. EasyLoader does not yet support unicode and requires the PostgreSQL ANSI ODBC drive. You must have both drivers installed when both products are on the same machine.

This release fixes the following issue:

<table>
<colgroup>
<col width="50%" />
<col width="50%" />
</colgroup>
<thead>
<tr class="header">
<th>Issue Number</th>
<th>Description and Resolution</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>MIPRO-49213</td>
<td>Oracle: Problems with Easyloader and EPSG-Code 25832.
<p>When EasyLoader uploads a table, it does not put a SRID entry in the Oracle meta data table (SDO_GEOM_METADATA) and the resulting geometry column has NULL in the SDO:SRID column. As a result, the spatial index is not generated and MapInfo Pro cannot generate geographic queries.</p></td>
</tr>
</tbody>
</table>

New in EasyLoader 15.0 {#new-in-easyloader-15.0 .title .sectiontitle}
----------------------

EasyLoader 15.0 is a 32-bit release that works with the MapInfo Pro 15.0 32-bit release. There are no new features or fixes.

New in EasyLoader 12.5.1 {#new-in-easyloader-12.5.1 .title .sectiontitle}
------------------------

EasyLoader 12.5.1 is a 32-bit release that works with the MapInfo Pro 12.5.1 64-bit release. There are no new features or fixes.

New in EasyLoader 12.5 {#new-in-easyloader-12.5 .title .sectiontitle}
----------------------

This release fixes the following issue:

  Issue Number   Description and Resolution
  -------------- ---------------------------------------------------
  MIPRO-40742    Non-English versions of EasyLoader do not launch.

New in EasyLoader 12.0 {#new-in-easyloader-12.0 .title .sectiontitle}
----------------------

EasyLoader 12.0 supports the following database versions:

-   **PostGIS 2.0** – Note that when uploading files to a PostGIS 2.0 database, spatial objects upload as a geometry spatial data type.
-   **SQL Server 2012** – EasyLoader processes any invalid geography using the SQL Server 2012 MakeValid( ) function, so that the geography is valid.

The server table processing option `Grant Public Access to Table`{.uicontrol} has been changed to `Grant Public Full Access to Table`{.uicontrol}.

This release fixes the following issues:

<table>
<colgroup>
<col width="50%" />
<col width="50%" />
</colgroup>
<thead>
<tr class="header">
<th>Issue Number</th>
<th>Description and Resolution</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>MIPRO-12309</td>
<td>A message displays when appending a native table with a MI_PRINX column in an Oracle Spatial database with an OCI connection, &quot;Table cannot be Appended—It has a different table structure.&quot;</td>
</tr>
<tr class="even">
<td>MIPRO-12320</td>
<td>When uploading a table with no geometry into EasyLoader 11.5, an error message appears: &quot;Table cannot be Appended—It has a different table structure.&quot;</td>
</tr>
<tr class="odd">
<td>MIPRO-32642</td>
<td>EasyLoader is unable to import to “geography” data type in SQL Server 2008 SP2.
<p>You will need to upgrade to SQL Server 2012. SQL Server 2012 uses the function STIsValid( ) to check if a geography data type is well formed and recognized as a valid object based on its OGC type. The MakeValid( ) function is also used that converts an invalid geography data type into a valid one. In MapInfo Pro 12.0, you can use the extended spatial methods in SQL Server 2012 to manage valid geography data types. Refer to the <a href="http://msdn.microsoft.com/en-us/library/ff929337.aspx" class="xref">SQL Server 2012 MSDN library</a> for more information.</p></td>
</tr>
</tbody>
</table>

