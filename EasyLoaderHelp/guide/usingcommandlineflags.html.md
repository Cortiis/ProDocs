Using Command-Line Flags to Run EasyLoader {#using-command-line-flags-to-run-easyloader .title .topictitle1}
==========================================

You can run EasyLoader from the Windows command-line to apply specific upload parameters or invoke EasyLoader with upload parameters from a custom script or application.

To open EasyLoader from the <span class="keyword wintitle">Command-Line</span> window, on the Windows <span class="ph uicontrol">Start</span> menu type cmd. Change directories (cd) into the folder that has the easyloader.exe file in it, and then type easyloader.exe. EasyLoader opens on your screen and is ready to use.

To upload a table when you open EasyLoader from the <span class="keyword wintitle">Command-Line</span> window, modify the following example. It uploads a table (/T) called <span class="ph filepath">states.tab</span> and gives it the server table name mystates, grants all rights (/G) to make mystates public, and specifies that per-row styles are being loaded with the data (/Y).

``` {.pre .codeblock}
easyloader.exe /T C:\data\states.tab;mystates /G /Y
```

<span class="notetitle">Note:</span> Do not enclose file names in quotation marks. Command line arguments are interpreted correctly without quote marks, even if the file name includes spaces. If you use quotation marks, EasyLoader cannot parse the file names correctly and displays a message.

For a list of available command-line flags, see [About Command-Line Flags](guide/aboutcommandlineflags.html){.- .topic/xref .ajaxLink}.

