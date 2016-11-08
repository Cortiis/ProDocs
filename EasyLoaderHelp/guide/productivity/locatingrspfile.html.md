Locating the MapInfo EasyLoader Command-Line Flags RSP File {#locating-the-mapinfo-easyloader-command-line-flags-rsp-file .title .topictitle1}
===========================================================

<div class="body conbody">

Closing MapInfo EasyLoader saves a state file with the command-line
flags used on startup and set during the session. The file is called
<span class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> and is
saved under the <span class="ph filepath">AppData</span> folder (for
example, <span
class="ph filepath">C:\\Users\\&lt;UserID&gt;\\AppData\\Roaming\\MapInfoEasyLoader.Settings.rsp</span>).

The <span class="ph filepath">AppData</span> folder is in a path like
<span class="ph filepath">C:\\Users\\&lt;UserID&gt;\\AppData</span>. If
you cannot see the <span class="ph filepath">AppData</span> folder, it
is because it is hidden. To locate it, on the Microsoft <span
class="ph uicontrol">Start</span> menu in the <span
class="ph uicontrol">Search programs and files</span> field type
%AppData%.

This file contains all of the flags used to start MapInfo EasyLoader
regardless of whether you used the command-line. It includes the default
flags and their settings, such as /CommitInterval,
/TableUploadErrorThreshold, /InsertRowErrorThreshold, and
/StyleColumnName. This flag also records the settings made during the
session that affect startup flags. You can use the information in this
file to restart EasyLoader via the command-line using the same settings
as the previous session.

To customize or automate your MapInfo EasyLoader experience, you can
create your own state file by starting MapInfo EasyLoader from the
command-line with the
[/SaveCommandArgs](guide/productivity/commandlineflags.html#commandlineflags__savecommandargs){.-
.topic/xref .ajaxLink} flag. You can then use this state file to restart
EasyLoader via the command-line with the
[/CommandFile](guide/productivity/commandlineflags.html#commandlineflags__commandfile){.-
.topic/xref .ajaxLink} flag to apply the same settings as the previous
session. MapInfo EasyLoader does not create the <span
class="ph filepath">MapInfoEasyLoader.Settings.rsp</span> file when you
use the
[/SaveCommandArgs](guide/productivity/commandlineflags.html#commandlineflags__savecommandargs){.-
.topic/xref .ajaxLink} flag.

</div>

<div class="related-links" functx="http://www.functx.com">

<div class="related-links-title">

</div>

<div class="familylinks">

<div class="parentlink">

**Parent topic:** [Using Command-Line Flags to Run MapInfo
EasyLoader](guide/productivity/../../guide/productivity/usingcommandlineflags.html){.-
.topic/link .ajaxLink}

</div>

</div>

</div>
