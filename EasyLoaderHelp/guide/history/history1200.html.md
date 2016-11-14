New in MapInfo EasyLoader 12.0 {#new-in-mapinfo-easyloader-12.0 .title .topictitle1}
==============================

MapInfo EasyLoader 12.0 supports the following database versions:

-   **PostGIS 2.0** – Note that when uploading files to a PostGIS 2.0 database, spatial objects upload as a geometry spatial data type.
-   **SQL Server 2012** – MapInfo EasyLoader processes any invalid geography using the SQL Server 2012 MakeValid( ) function, so that the geography is valid.

The server table processing option <span class="ph uicontrol">Grant Public Access to Table</span> has been changed to <span class="ph uicontrol">Grant Public Full Access to Table</span>.

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
<td>When uploading a table with no geometry into MapInfo EasyLoader 11.5, an error message appears: &quot;Table cannot be Appended—It has a different table structure.&quot;</td>
</tr>
<tr class="odd">
<td>MIPRO-32642</td>
<td>MapInfo EasyLoader is unable to import to &quot;geography&quot; data type in SQL Server 2008 SP2.
<p>You will need to upgrade to SQL Server 2012. SQL Server 2012 uses the function STIsValid( ) to check if a geography data type is well formed and recognized as a valid object based on its OGC type. The MakeValid( ) function is also used that converts an invalid geography data type into a valid one. In MapInfo Pro 12.0, you can use the extended spatial methods in SQL Server 2012 to manage valid geography data types. Refer to the <a href="http://msdn.microsoft.com/en-us/library/ff929337.aspx" class="xref">SQL Server 2012 MSDN library</a> for more information.</p></td>
</tr>
</tbody>
</table>

