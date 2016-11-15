Creating a New Map Catalog {#creating-a-new-map-catalog .title .topictitle1}
==========================

The Map Catalog stores the metadata used by MapInfo Pro and other MapInfo products to open tables with geometry data. You can create the Map Catalog without uploading a table at the same time.

There are two operations you can perform:

-   If your database does not have a Map Catalog, you can use EasyLoader to create one.
-   If your database has a Map Catalog already, you can delete entries in the catalog that are no longer valid.

If the Map Catalog is present and there are no entries in it, the `Map Catalog`{.uicontrol} check box does not enable in EasyLoader.

<span class="notetitle">Note:`{.uicontrol} To create a Map Catalog successfully, you must have administrator privileges to the database server or the system administrator needs to grant you permission to create the Map Catalog.

To create a new Map Catalog or delete entries from an existing Map Catalog through EasyLoader:

1.  <span class="ph cmd">In the `Connection Information`{.uicontrol} box, identify the connection you either create the Map Catalog for or delete Map Catalog entries from.`{.uicontrol}
2.  <span class="ph cmd">When you click the `Map Catalog`{.uicontrol} button, one of the following things happens:`{.uicontrol}
    

    If there is no `Map Catalog`{.uicontrol} available for the current database, EasyLoader creates the MapInfo Owner and then creates the Map Catalog. This concludes the Map Catalog creation process.

    If there is a Map Catalog, use the `Unregister tables from Map Catalog`{.uicontrol} dialog box to delete obsolete tables from the list.

    

3.  <span class="ph cmd">To identify the entries in the list you want to delete, select the data owner from the `Owner`{.uicontrol} drop-down list and click the table or tables you want to unregister from the Map Catalog list.`{.uicontrol}
4.  <span class="ph cmd">Click the `Unregister`{.uicontrol} button. Click `Close`{.uicontrol} when you have completed this process.`{.uicontrol}

If you see an error when creating the Map Catalog (when you click the `Map Catalog`{.uicontrol} button), then you may not have the correct permissions to create a user and a Map Catalog table. When there is no <span class="keyword parmname">mapinfo`{.uicontrol} user, EasyLoader tries to create one using your credentials. An error occurs when your credentials do not have the correct permissions to create a user.

Have your Database Administrator do one of the following:

-   Give you permission to create a user named <span class="keyword parmname">mapinfo`{.uicontrol} and create a table for the <span class="keyword parmname">mapinfo`{.uicontrol} schema.
-   Create a user named <span class="keyword parmname">mapinfo`{.uicontrol} for you and give you permission to create a table for the <span class="keyword parmname">mapinfo`{.uicontrol} schema.
-   Create the <span class="ph filepath">mapinfo.mapinfo\_mapcatalog`{.uicontrol} table for you and give you permission to write to it.

