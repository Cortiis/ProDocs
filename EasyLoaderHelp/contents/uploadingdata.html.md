Uploading Data with EasyLoader {#uploading-data-with-easyloader .title .topictitle1}
==============================

<div class="body taskbody">

<div class="section prereq p">

You must set up your ODBC connections prior to uploading TAB files to
remote databases.

<div class="note note">

<span class="notetitle">Note:</span> You cannot replace version-enabled
tables in the Oracle database. It makes any child versions of these
tables obsolete.

</div>

</div>

To upload MapInfo TAB files using EasyLoader:

1.  <span class="ph cmd">In MapInfo Pro, on the <span
    class="ph uicontrol">HOME</span> tab, in the <span
    class="ph uicontrol">Tools</span> group, click <span
    class="ph uicontrol">Tools</span> to open the <span
    class="keyword wintitle">Tools Manager</span> window.</span>
2.  <span class="ph cmd">On the <span
    class="ph uicontrol">Running</span> tab, double click <span
    class="ph uicontrol">EasyLoader</span> to open the <span
    class="keyword wintitle">EasyLoader</span> dialog box.</span>
    <div class="itemgroup info">

    If you do not see it listed on the <span
    class="ph uicontrol">Running</span> tab, then locate it on the <span
    class="ph uicontrol">Registered</span> tab.

    To load EasyLoader into the current session of MapInfo Pro, click
    the <span class="ph uicontrol">Load Tool (Run)</span> icon
    beside it.

    To reload EasyLoader for all subsequent sessions, select the <span
    class="ph uicontrol">AutoLoad</span> check box.

    To load EasyLoader for the current session and all subsequent
    sessions, select both.

    </div>

3.  <span class="ph cmd">Under <span class="ph uicontrol">Connection
    Information</span>, click the appropriate button (<span
    class="ph uicontrol">ODBC</span> or <span
    class="ph uicontrol">Oracle Spatial</span>) to connect to
    your database. Provide the necessary connection information (for
    example, data source name or User ID, password, and server name).
    Click <span class="ph uicontrol">OK</span> to return to the
    EasyLoader dialog box.</span>
4.  <span class="ph cmd">Click <span class="ph uicontrol">Source
    Tables</span> to display a list of MapInfo tables from a
    single directory. When you have selected the tables for uploading,
    the names display in the <span class="ph uicontrol">MapInfo
    Table</span> list box.</span>
5.  <span class="ph cmd">Choose the tables you want to upload and select
    the appropriate Server Table processing task (Create new table,
    Append to existing table, Replace existing Table). </span>
    <div class="itemgroup info">

    These and additional options are explained in [Understanding the
    EasyLoader Dialog Box](contents/dialogbox.html){.- .topic/xref
    .ajaxLink}.

    <div class="note note">

    <span class="notetitle">Note:</span> The <span
    class="ph uicontrol">Upload</span> button is not available until one
    or more tables are chosen.

    </div>

    </div>

6.  <span class="ph cmd">To create local TAB files, provide a directory
    or browse to its location. By default, EasyLoader does not generate
    these files. The file naming convention for these tables is <span
    class="ph filepath">yourServerTableName\_srv.tab</span>.</span>
7.  <span class="ph cmd">To set options for the upload process, click
    <span class="ph uicontrol">Options</span>.</span>
    <div class="itemgroup info">

    \

    <div class="imagecenter">

    ![](images/dialog_Options_micode_xy.png){.image .imagecenter
    width="280"}

    </div>

    \
    <div class="note note">

    <span class="notetitle">Note:</span> See [Understanding the Options
    Dialog Box](contents/understandingoptionsdialog.html){.- .topic/xref
    .ajaxLink} for an explanation of available options.

    </div>

    </div>

8.  <span class="ph cmd">In the <span
    class="keyword wintitle">Options</span> dialog box, select the
    appropriate options and click <span
    class="ph uicontrol">OK</span>.</span>
9.  <span class="ph cmd">Click <span class="ph uicontrol">Upload</span>
    to start the upload process.</span>
10. <span class="ph cmd">Close EasyLoader after the upload process
    is finished.</span>

<div class="section postreq">

If you haven’t already created the spatial index during the upload
process, do so now by either executing a create index statement or
re-uploading the table, making sure this time to select the <span
class="ph uicontrol">Create Spatial Index</span> check box and replace
the table (see steps 1-3).

</div>

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Uploading Data with MapInfo
EasyLoader](contents/../contents/chapterintro.html){.- .topic/link
.ajaxLink}

</div>

</div>

</div>
