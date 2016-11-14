New in MapInfo EasyLoader 16.0 {#new-in-mapinfo-easyloader-16.0 .title .topictitle1}
==============================

MapInfo EasyLoader is now a 64-bit release that works with MapInfo Pro 64-bit releases 15.2 and 16.0. As a result, it uses 64 bit Oracle and ODBC drivers. Oracle Text is not supported.

MapInfo EasyLoader has a new look and feel that makes it easier to use and gives you new features. With this release you can:

-   Pause and cancel your uploads. For an overview of the new interface, see [Getting Started](guide/history/../introduction/gettingstarted.html){.- .topic/xref .ajaxLink}.
-   Work with both native MapInfo TAB files and NativeX (extended) TAB files.
-   Work with files in different character encodings, because MapInfo EasyLoader now supports Unicode.
-   Apply error threshold options for better error handling. For details, see the descriptions for <span class="ph uicontrol">Table Errors Threshold %</span> and <span class="ph uicontrol">Insert Errors Threshold %</span> settings under [Server Table Processing Options](guide/history/../uploading/servertableprocessingoptions.html){.- .topic/xref .ajaxLink}. These settings are made in the <span class="keyword wintitle">Options</span> dialog.
-   Use keyboard shortcuts as a faster way to access commands. For details, see [Shortcuts by Keystroke](guide/history/../productivity/shortcutsbykeystroke.html){.- .topic/xref .ajaxLink}.

Several files are available for tracking and logging MapInfo EasyLoader settings:

-   <span class="ph filepath">EasyLoader.log</span> contains the database connection information currently in use to upload data tables with. For details, see [Locating the MapInfo EasyLoader Log File](guide/history/../productivity/locatinglogfile.html){.- .topic/xref .ajaxLink}.
-   <span class="ph filepath">MapInfoEasyLoader.Recent.xml</span> lists the MapInfo EasyLoader settings for the last upload, such as output folder location, connection settings, and data tables uploaded. For details, see [Locating the MapInfo EasyLoader Configuration File](guide/history/../productivity/locatingcofigfile.html){.- .topic/xref .ajaxLink}.
-   <span class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> contains all of the flags used to start MapInfo EasyLoader. For details, see [Locating the MapInfo EasyLoader Command-Line Flags RSP File](guide/history/../productivity/locatingrspfile.html){.- .topic/xref .ajaxLink}.

The command-line flags that you use when launching MapInfo EasyLoader from a command-line have been updated. They now have longer names that are more user friendly. Instead of using /O to set the oracle connection string, you can use [/OracleConnectionString](guide/history/../productivity/commandlineflags.html#commandlineflags__oracleconnectionstring){.- .topic/xref .ajaxLink}. Shorter flags, like /O, still work, but using the longer flags is more intuitive. Also, there are new command-line flags available:

-   [Help: /?, /Help](guide/history/../productivity/commandlineflags.html#commandlineflags__help){.- .topic/xref .ajaxLink}
-   [Set the Application Locale : /AppLocale](guide/history/../productivity/commandlineflags.html#commandlineflags__applocale){.- .topic/xref .ajaxLink}
-   [Input Command File: /CF, /CommandFile](guide/history/../productivity/commandlineflags.html#commandlineflags__commandfile){.- .topic/xref .ajaxLink}
-   [Convert WKB on Oracle: /ConvertWKBOnOracle](guide/history/../productivity/commandlineflags.html#commandlineflags__convertwkbonoracle){.- .topic/xref .ajaxLink}
-   [Table Folder: /Folder](guide/history/../productivity/commandlineflags.html#commandlineflags__folder){.- .topic/xref .ajaxLink}
-   [Start Application Minimized: /Min](guide/history/../productivity/commandlineflags.html#commandlineflags__minimized){.- .topic/xref .ajaxLink}
-   [Do Not Auto Start the Table Load: /NoStart](guide/history/../productivity/commandlineflags.html#commandlineflags__nostart){.- .topic/xref .ajaxLink}
-   [Run Without User Interface: /NoUi](guide/history/../productivity/commandlineflags.html#commandlineflags__noui){.- .topic/xref .ajaxLink}
-   [Save Command Response File: /SaveCommandArgs](guide/history/../productivity/commandlineflags.html#commandlineflags__savecommandargs){.- .topic/xref .ajaxLink}

The following command-line flags have been retired and are no longer available.

-   **/R** Replace the server table. You can choose to replace the server table when using the new [/Folder](guide/history/../productivity/commandlineflags.html#commandlineflags__folder){.- .topic/xref .ajaxLink} flag, which uploads all tables from a folder.
-   **/V** Oracle version. MapInfo EasyLoader gets the Oracle version from the Oracle connection string.

