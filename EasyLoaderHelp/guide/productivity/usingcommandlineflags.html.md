Using Command-Line Flags to Run MapInfo EasyLoader {#using-command-line-flags-to-run-mapinfo-easyloader .title .topictitle1}
==================================================

<div class="body conbody">

You can run MapInfo EasyLoader from the Windows command-line to apply specific upload parameters or invoke MapInfo EasyLoader with upload parameters from a custom script or application.

To open MapInfo EasyLoader from the <span class="keyword wintitle">Command-Line</span> window, on the Windows <span class="ph uicontrol">Start</span> menu type cmd. Change directories (cd) into the folder that has the MapInfoEasyLoader.exe file in it, and then type MapInfoEasyLoader.exe. MapInfo EasyLoader opens on your screen and is ready to use.

To upload a table when you open MapInfo EasyLoader from the <span class="keyword wintitle">Command-Line</span> window, modify the following example. It uploads a table (/T) called <span class="ph filepath">states.tab</span> and gives it the server table name mystates, grants all rights (/G) to make mystates public, and specifies that per-row styles are being loaded with the data (/Y).

``` {.pre .codeblock}
MapInfoEasyLoader.exe /T C:\data\states usa.tab;mystates /G /Y
```

If a path contains spaces, use quotation marks around it, for example:

``` {.pre .codeblock}
MapInfoEasyLoader.exe /T "C:\data\states usa.tab;mystates" /G /Y
```

``` {.pre .codeblock}
MapInfoEasyLoader.exe /g /P R /s "DRIVER={PostGreSQL UNICODE(x64)};DATABASE=QADB;Server=MiProPostGIS;UID=pro;PWD=pro;Port=5432"
```

For a list of available command-line flags, see [Command-Line Flags Descriptions](guide/productivity/commandlineflags.html){.- .topic/xref .ajaxLink}.

For instructions on how to locate the MapInfo EasyLoader state file, which stores command-line flag settings for the session, see [Locating the MapInfo EasyLoader Command-Line Flags RSP File](guide/productivity/locatingrspfile.html){.- .topic/xref .ajaxLink}.

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

-   **[Mixing Command-Line Flags and MapInfo EasyLoader Window Options](guide/productivity/../../guide/productivity/mixingcommandlineflags.html){.- .topic/link .ajaxLink}**\
-   **[Locating the MapInfo EasyLoader Command-Line Flags RSP File](guide/productivity/../../guide/productivity/locatingrspfile.html){.- .topic/link .ajaxLink}**\

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Productivity Aids](guide/productivity/../../guide/productivity/chapterproductivityaids.html){.- .topic/link .ajaxLink}

</div>

</div>

</div>
