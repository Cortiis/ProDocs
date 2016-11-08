MAPINFO\_MAPCATALOG Table Structure {#mapinfo_mapcatalog-table-structure .title .topictitle1}
===================================

<div class="body conbody">

MAPINFO\_MAPCATALOG has the following table structure:

<div class="p">

``` {.pre}
    SPATIALTYPE FLOAT
    TABLENAME CHAR(32)
    OWNERNAME CHAR(32)
    SPATIALCOLUMN CHAR(32)
    DB_X_LL FLOAT
    DB_Y_LL FLOAT
    DB_X_UR FLOAT
    DB_Y_UR FLOAT
    VIEW_X_LL FLOAT
    VIEW_Y_LL FLOAT
    VIEW_X_UR FLOAT
    VIEW_Y_UR FLOAT
    COORDINATESYSTEM CHAR(254)
    SYMBOL CHAR(254)
    XCOLUMNNAME CHAR(32)
    YCOLUMNNAME CHAR(32)
    RENDITIONTYPE INTEGER
    RENDITIONCOLUMN CHAR(32)
    RENDITIONTABLE CHAR(32)
    NUMBER_ROWS INTEGER
```

</div>

The following script, which is shipped with EasyLoader, may be used to
modify an existing MAPINFO.MAPINFO\_MAPCATALOG to add the rendition
columns if they do not exist. Run this script as user MAPINFO.

<div class="p">

``` {.pre}
    ALTER TABLE MAPINFO.MAPINFO_MAPCATALOG ADD RENDITIONTYPE INTEGER;
    ALTER TABLE MAPINFO.MAPINFO_MAPCATALOG ADD RENDITIONCOLUMN CHAR(32);
    ALTER TABLE MAPINFO.MAPINFO_MAPCATALOG ADD RENDITIONTABLE CHAR(32);
```

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Using the
MAPINFO\_MAPCATALOG](contents/../contents/usingmapcatalog.html){.-
.topic/link .ajaxLink}

</div>

</div>

</div>
