Creating a New Map Catalog {#creating-a-new-map-catalog .title .topictitle1}
==========================

<div class="body taskbody">

<div class="section context">

The Map Catalog stores the metadata used by MapInfo Pro and other MapInfo products to open tables with geometry data. You can create the Map Catalog without uploading a table at the same time.

There are two operations you can perform:

-   If your database does not have a Map Catalog, you can use EasyLoader to create one.
-   If your database has a Map Catalog already, you can delete entries in the catalog that are no longer valid.

If the Map Catalog is present and there are no entries in it, the <span class="ph uicontrol">Map Catalog</span> check box does not enable in EasyLoader.

<div class="note note">

<span class="notetitle">Note:</span> To create a Map Catalog successfully, you must have administrator privileges to the database server or the system administrator needs to grant you permission to create the Map Catalog.

</div>

</div>

To create a new Map Catalog or delete entries from an existing Map Catalog through EasyLoader:

1.  <span class="ph cmd">In the <span class="ph uicontrol">Connection Information</span> box, identify the connection you either create the Map Catalog for or delete Map Catalog entries from.</span>
2.  <span class="ph cmd">When you click the <span class="ph uicontrol">Map Catalog</span> button, one of the following things happens:</span>
    <div class="itemgroup info">

    If there is no <span class="ph uicontrol">Map Catalog</span> available for the current database, EasyLoader creates the MapInfo Owner and then creates the Map Catalog. This concludes the Map Catalog creation process.

    If there is a Map Catalog, use the <span class="keyword wintitle">Unregister tables from Map Catalog</span> dialog box to delete obsolete tables from the list.

    </div>

3.  <span class="ph cmd">To identify the entries in the list you want to delete, select the data owner from the <span class="ph uicontrol">Owner</span> drop-down list and click the table or tables you want to unregister from the Map Catalog list.</span>
4.  <span class="ph cmd">Click the <span class="ph uicontrol">Unregister</span> button. Click <span class="ph uicontrol">Close</span> when you have completed this process.</span>

<div class="section result">

If you see an error when creating the Map Catalog (when you click the <span class="ph uicontrol">Map Catalog</span> button), then you may not have the correct permissions to create a user and a Map Catalog table. When there is no <span class="keyword parmname">mapinfo</span> user, EasyLoader tries to create one using your credentials. An error occurs when your credentials do not have the correct permissions to create a user.

Have your Database Administrator do one of the following:

-   Give you permission to create a user named <span class="keyword parmname">mapinfo</span> and create a table for the <span class="keyword parmname">mapinfo</span> schema.
-   Create a user named <span class="keyword parmname">mapinfo</span> for you and give you permission to create a table for the <span class="keyword parmname">mapinfo</span> schema.
-   Create the <span class="ph filepath">mapinfo.mapinfo\_mapcatalog</span> table for you and give you permission to write to it.

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Using the Map Catalog](guide/../guide/usingmapcatalog.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
