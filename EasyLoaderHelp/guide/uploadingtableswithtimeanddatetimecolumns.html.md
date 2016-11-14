Uploading Tables with Time and DateTime Columns {#uploading-tables-with-time-and-datetime-columns .title .topictitle1}
===============================================

<div class="body conbody">

Time and DateTime data types sometimes require conversion because of variations from server to server, and between the server and MapInfo data types. The following table shows how the data types are converted from MapInfo Pro to each server.

<div class="tablenoborder">

  From MapInfo Pro   To Oracle        To MS Access   To MS SQL Server
  ------------------ ---------------- -------------- ------------------
  DATE               DATE             DATETIME\*     DATETIME\*
  TIME               TIMESTAMP(3)\*   DATETIME\*     DATETIME\*
  DATETIME           TIMESTAMP(3)     DATETIME       DATETIME

</div>

\* The MapInfo data type will be extended on the servers. When the same data comes back to MapInfo Pro, the data type will be as is indicated on the server. This conversion is consistent with MapInfo Pro behavior when a MapInfo table is saved to a server using MapInfo Pro.

On servers that do not support DATE or TIME data types, the data is converted to a DATETIME type. In this conversion, part of the data will be missing because the MapInfo types contain either the date or the time, but not both. The server default values for the date or the time are used to fill in the missing data. Conversions to DATETIME are made for SQL Server versions earlier than version 10 (prior to SQL Server Spatial).

For example, if the server does not support the MapInfo DATE type, the upload process converts the DATE type to a DATETIME type. The date value comes from the MapInfo table, but the time value is filled in with the server default value for time. The following table shows how the MapInfo data types are converted when they are not supported on the server and what default value are used to fill in the missing data:

<div class="tablenoborder">

  MapInfo Data Type   To Server Data Type       Server Default Values                 Databases
  ------------------- ------------------------- ------------------------------------- ----------------------------
  MapInfo DATE type   DATETIME/TIMESTAMP type   midnight: 12:00.00.000 AM             All databases
  MapInfo TIME type   DATETIME/STAMP type       current date                          MS Access, MS SQL Server\*
  MapInfo TIME type   DATETIME/STAMP type       first day of current month and year   Oracle

</div>

\* SQL Server versions earlier than version 10 (prior to SQL Server Spatial).

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Using EasyLoader to Upload Tables](guide/../guide/usingeasyloader.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
