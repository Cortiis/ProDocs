New in MapInfo EasyLoader 15.2 {#new-in-mapinfo-easyloader-15.2 .title .topictitle1}
==============================

<div class="body conbody">

MapInfo EasyLoader 15.2 is a 32-bit release that works with the MapInfo
Pro 15.2 64-bit release. MapInfo Pro 15.2 supports Unicode and requires
the PostgreSQL Unicode ODBC drive. MapInfo EasyLoader does not yet
support Unicode and requires the PostgreSQL ANSI ODBC drive. You must
have both drivers installed when both products are on the same machine.

This release fixes the following issue:

<div class="tablenoborder">

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
<td>Oracle: Problems with MapInfo EasyLoader and EPSG-Code 25832.
<p>When MapInfo EasyLoader uploads a table, it does not put a SRID entry in the Oracle meta data table (SDO_GEOM_METADATA) and the resulting geometry column has NULL in the SDO:SRID column. As a result, the spatial index is not generated and MapInfo Pro cannot generate geographic queries.</p></td>
</tr>
</tbody>
</table>

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [History of
Changes](guide/history/../../guide/history/chapterhistory.html){.-
.topic/link .ajaxLink}

</div>

</div>

</div>
