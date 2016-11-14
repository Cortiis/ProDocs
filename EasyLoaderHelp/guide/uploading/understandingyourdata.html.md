Understanding Your Data {#understanding-your-data .title .topictitle1}
=======================

Before uploading MapInfo tables, you need to know how your database manages spatial data from MapInfo Pro. There are database-specific restrictions for some geometry types, text objects, and coordinate systems. There are also situations in which geometry is considered invalid by a database. Know these restrictions before uploading MapInfo Pro tables to your database.

Text objects are unsupported by MapInfo EasyLoader. For example, MapInfo EasyLoader discards text objects when uploading a TAB file to Oracle.

