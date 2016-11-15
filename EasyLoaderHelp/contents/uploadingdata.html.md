Uploading Data with EasyLoader {#uploading-data-with-easyloader .title .topictitle1}
==============================

You must set up your ODBC connections prior to uploading TAB files to remote databases.

<span class="notetitle">Note:`{.uicontrol} You cannot replace version-enabled tables in the Oracle database. It makes any child versions of these tables obsolete.

To upload MapInfo TAB files using EasyLoader:

1.  <span class="ph cmd">In MapInfo Pro, on the `HOME`{.uicontrol} tab, in the `Tools`{.uicontrol} group, click `Tools`{.uicontrol} to open the `Tools Manager`{.uicontrol} window.`{.uicontrol}
2.  <span class="ph cmd">On the `Running`{.uicontrol} tab, double click `EasyLoader`{.uicontrol} to open the `EasyLoader`{.uicontrol} dialog box.`{.uicontrol}
    

    If you do not see it listed on the `Running`{.uicontrol} tab, then locate it on the `Registered`{.uicontrol} tab.

    To load EasyLoader into the current session of MapInfo Pro, click the `Load Tool (Run)`{.uicontrol} icon beside it.

    To reload EasyLoader for all subsequent sessions, select the `AutoLoad`{.uicontrol} check box.

    To load EasyLoader for the current session and all subsequent sessions, select both.

    

3.  <span class="ph cmd">Under `Connection Information`{.uicontrol}, click the appropriate button (`ODBC`{.uicontrol} or `Oracle Spatial`{.uicontrol}) to connect to your database. Provide the necessary connection information (for example, data source name or User ID, password, and server name). Click `OK`{.uicontrol} to return to the EasyLoader dialog box.`{.uicontrol}
4.  <span class="ph cmd">Click `Source Tables`{.uicontrol} to display a list of MapInfo tables from a single directory. When you have selected the tables for uploading, the names display in the `MapInfo Table`{.uicontrol} list box.`{.uicontrol}
5.  <span class="ph cmd">Choose the tables you want to upload and select the appropriate Server Table processing task (Create new table, Append to existing table, Replace existing Table). `{.uicontrol}
    

    These and additional options are explained in [Understanding the EasyLoader Dialog Box](contents/dialogbox.html){.- .topic/xref .ajaxLink}.

    

    <span class="notetitle">Note:`{.uicontrol} The `Upload`{.uicontrol} button is not available until one or more tables are chosen.

    

    

6.  <span class="ph cmd">To create local TAB files, provide a directory or browse to its location. By default, EasyLoader does not generate these files. The file naming convention for these tables is <span class="ph filepath">yourServerTableName\_srv.tab`{.uicontrol}.`{.uicontrol}
7.  <span class="ph cmd">To set options for the upload process, click `Options`{.uicontrol}.`{.uicontrol}
    

    \

    

    ![](images/dialog_Options_micode_xy.png){.image .imagecenter width="280"}

    

    \
    

    <span class="notetitle">Note:`{.uicontrol} See [Understanding the Options Dialog Box](contents/understandingoptionsdialog.html){.- .topic/xref .ajaxLink} for an explanation of available options.

    

    

8.  <span class="ph cmd">In the `Options`{.uicontrol} dialog box, select the appropriate options and click `OK`{.uicontrol}.`{.uicontrol}
9.  <span class="ph cmd">Click `Upload`{.uicontrol} to start the upload process.`{.uicontrol}
10. <span class="ph cmd">Close EasyLoader after the upload process is finished.`{.uicontrol}

If you haven’t already created the spatial index during the upload process, do so now by either executing a create index statement or re-uploading the table, making sure this time to select the `Create Spatial Index`{.uicontrol} check box and replace the table (see steps 1-3).

