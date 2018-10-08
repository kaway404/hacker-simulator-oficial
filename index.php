<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Hacker Simulator</title>
  
  
  
      <link rel="stylesheet" href="res/css/style.css">

<script type="text/javascript" src="res/js/jquery.js"></script>
<script type="text/javascript" src="res/js/jqueryui.js"></script>
<script type="text/javascript" src="res/js/moderno.js"></script>
<script type="text/javascript" src="res/js/functions.js"></script>
  
</head>

<body>
<!-- FAIL -->
<div id="fail">
	<div class="fail-browser-logo">
    	<img src="res/img/apple-logo-login.png" alt="Mac OS X" />
    </div>
    <div class="fail-browser">
        <p><strong>I'm sorry to inform you that your browser don't support CSS3 Animations!</strong></p> 
        <p>This site uses features that <em>require</em> a modern browser - why not try <a href="https://www.mozilla.org/en-US/firefox/fx/" target="_blank" title="Download Firefox">Firefox</a> ?</p>
    </div>
</div>

<?php
if(empty($_COOKIE['iduser'])){?>

<script type="text/javascript" src="res/js/login.js"></script>

<!-- BOOT -->
<div id="pageLoading">
	<div class="loading">
		<div class="apple-logo"></div>
        <div class="spinner"></div>
	</div>
</div>

<!-- LOGIN -->
<div id="pageLogin">
	<header id="headlogin">
		<nav id="menu-dx-login">
    	<ul>
   			<li class="wireless"></li>
    		<li class="time">
    		<ul>
				<li class="hours"> </li>
    			<li class="point">:</li>
    			<li class="min"> </li>
        	</ul>
    		</li>
		</ul>
    	</nav>
    </header>
	<div class="new-apple-logo"></div>
    
    <div class="user-avatar">
        <div id="avatar">
        <a href="#hide" class="hide" id="hide"></a>
        <a href="#show" class="show" id="show"></a>
        <div id="cover"></div>
        <div class="ava-css">
        <img src="res/img/avatar.jpg" />
        </div>
        <div class="logName">
        <p>Alexandre Silva</p>
        </div>
        <div id="switch">
        <div class="validate">
        <form action="#page">
        	<input type="password" id="password" placeholder="Password" />
            <input type="submit" class="submit" />
            <div class="tooltip-pass">
            <p>Password: admin</p>
            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </div>
<?php } else{ ?>

<!-- DESKTOP -->
<div id="page">
<header id="head">
	<nav id="menu">
    	<ul>
        <li class="apple">
        	<a href="#all">Apple</a>
            <ul class="sublist">
            <li><a href="#about-this-mac" data-rel="show">About This Mac</a></li>
            <li>Software Updates...</li>
            <li>App Store...</li>
            <li class="divider"></li>
            <li>System Preferences...</li>
            <li>Dock
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Turn Hiding Off</li>
                <li>Turn Magnification Off</li>
                <li class="divider"></li>
                <li>Position on Left</li>
                <li>Position on Bottom</li>
                <li>Position on Right</li>
                <li class="divider"></li>
                <li>Dock Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Recent Items
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">Applications</li>
                <li class="divider"></li>
                <li class="disable">Documents</li>
                <li class="divider"></li>
                <li class="disable">Servers</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Force Quit...</li>
            <li class="divider"></li>
            <li>Sleep</li>
            <li>Restart...</li>
            <li>Shut Down...</li>
            <li class="divider"></li>
            <li>Log Out...</li>
            </ul>
        </li>
        <li class="here">
        	<a href="#all">Finder</a>
        	<ul class="sublist">
            <li><a href="#finder" data-rel="show">About Finder</a></li>
            <li class="divider"></li>
            <li>Preferences...</li>
            <li class="divider"></li>
            <li>Secure Empty Trash...</li>
            <li class="divider"></li>
            <li>Services
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">No Services Apply</li>
                <li>Services Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Hide Finder</li>
            <li>Hide Others</li>
            <li class="disable">Show All</li>
            </ul>
        </li>
        <li>
        	<a href="#all">File</a>   
            <ul class="sublist">
            <li>New Finder Window</li>
            <li>New Folder</li>
            <li class="disable">New Folder with Selection</li>
            <li>New Smart Folder</li>
            <li>New Burn Folder</li>
            <li class="disable">Open</li>
            <li class="disable">Open With
            	<span class="arrow"></span>
            </li>
            <li class="disable">Print</li>
            <li class="disable">Close Window</li>
            <li class="divider"></li>
            <li>Get Info</li>
            <li class="divider"></li>
            <li class="disable">Compress</li>
            <li class="divider"></li>
            <li class="disable">Duplicate</li>
            <li class="disable">Make Alias</li>
            <li class="disable">Quick Look</li>
            <li class="disable">Show Original</li>
            <li class="disable">Add to Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Move to Trash</li>
            <li class="disable">Eject</li>
            <li>Burn "Desktop" to Disc...</li>
            <li class="divider"></li>
            <li>Find</li>
            <li class="divider"></li>
            <li class="disable">Label:</li>
            </ul> 
        </li>
        <li>
        	<a href="#all">Edit</a>
        	<ul class="sublist">
            <li class="disable">Undo</li>
            <li class="disable">Redo</li>
            <li class="divider"></li>
            <li class="disable">Cut</li>
            <li class="disable">Copy</li>
            <li class="disable">Paste</li>
            <li>Select All</li>
            <li class="divider"></li>
            <li>Show Clipboard</li>
            <li class="divider"></li>
            <li>Special Characters...</li>
            </ul>
        </li>
        <li>
        	<a href="#all">View</a>
        	<ul class="sublist">
            <li class="disable">as Icons</li>
            <li class="disable">as List</li>
            <li class="disable">as Columns</li>
            <li class="disable">as Cover Flow</li>
            <li class="divider"></li>
            <li>Clean Up</li>
            <li>Clean Up By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Name</li>
                <li>Kind</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li>Sort By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>None</li>
                <li class="divider"></li>
                <li>Snap to Grid</li>
                <li class="divider"></li>
                <li>Name</li>
                <li>Kind</li>
                <li>Date Last Opened</li>
                <li>Date Added</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="disable">Hide Path Bar</li>
            <li class="disable">Hide Status Bar</li>
            <li class="disable">Hide Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Toolbar</li>
            <li class="disable">Customize Toolbar...</li>
            <li class="divider"></li>
            <li>Show View Options...</li>
            </ul>    
        </li>
        <li>
        	<a href="#all">Go</a>
        	<ul class="sublist">
            <li class="disable">Back</li>
            <li class="disable">Forward</li>
            <li>Enclosing Folder</li>
            <li class="divider"></li>
            <li>All My Files</li>
            <li>Documents</li>
            <li>Desktop</li>
            <li>Downloads</li>
            <li>Home</li>
            <li>Computer</li>
            <li>AirDrop</li>
            <li>Network</li>
            <li>Applications</li>
            <li>Utilities</li>
            <li class="divider"></li>
            <li>Recent Folders
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>2012-01-10</li>
                <li>Archieves</li>
                <li>buildFiles</li>
                <li>MyProjects</li>
                <li>XCode_iPhone</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Go to Folder...</li>
            <li>Connect to Server...</li>
            </ul>    
        </li>
        <li>
        	<a href="#all">Window</a>
         	<ul class="sublist">
            <li class="disable">Minimize</li>
            <li class="disable">Zoom</li>
            <li class="disable">Cycle Through Windows</li>
            <li class="divider"></li>
            <li>Bring All to Front</li>
            </ul>   
        </li>
        <li><a href="#all">Help</a></li>
        </ul>
	</nav>
    <nav id="menu-dx">
    	<ul>
        <li class="wireless">
        	<a href="#all">Wireless</a>
        </li>
        <li class="time">
        	<ul>
            <li id="DateAbbr"> </li>
            <li class="hour"> </li>
    		<li class="point">:</li>
    		<li class="mins"> </li>
            </ul>
        </li>
        <li class="username">
        	<a href="#all">Alexandre Silva</a>
        </li>
		</ul>
    </nav>
</header>


<div id="finder" class="window finder">
	<nav class="control-window">
    <a href="#finder" class="close" data-rel="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">About Finder</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="res/img/FinderIcon.png" alt="Finder"/>
        <div class="about-this">
        <h2>Finder</h2>
        <p>The Macintosh Desktop Experience</p>
        <p class="small">Finder version 10.7.1</p>
        </div>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
    </div>
</div>

<div id="about-this-mac" class="window mac">
	<nav class="control-window">
    <a href="#about-this-mac" class="close" data-rel="close">close</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="title-mac">About This Mac</h1>
    <div class="container">
    	<div class="container-inside">
    	<img src="res/img/MacOSX.png" alt="Mac OS X"/>
    	<div class="about-this">
    	<p>Version 10.7.2</p>
        <p><a class="button about" href="#">Software Update...</a></p>
        <ul class="hardware">
        <li><strong>Processor</strong> 2 Ghz Intel Core 2 Duo</li>
        <li><strong>Memory</strong> 4 GB 1067 Mhz DDR3</li>
        <li><strong>Startup Disk</strong> Macintosh HD</li>
        </ul>
        <p><a class="button about" href="#">More Info...</a></p>
    	<div class="copyright">
    	<p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
    	</div>
    	</div>
    	</div>
    </div>
</div> 

<div id="warning" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/Alert.png" alt="alert"/>
        <div class="about-alert">
        <h2>Alert</h2>
        <p>This application cannot be used in this version</p>
        <a href="#warning" class="button blink" data-rel="close">Close</a>
        </div>
        </div>
    </div>
</div>

<div id="trash" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/FinderIcon.png" width="48px" height="48px" alt="alert"/>
        <div class="about-alert">
        <h2>Secure Empty Trash permanently erases the items in the Trash. Are you sure you want to permanently erase them?</h2>
        <p>If you choose Secure Empty Trash, you can't recover the items unless you've backed them up using Time Machine or another backup program.</p>
        <a href="#warning" class="button blink" data-rel="">Secure Empty Trash</a>
        <a href="#trash" class="button simple" data-rel="close">Cancel</a>
        </div>
        </div>
    </div>
</div>

<!-- DOCK -->
<div class="dock">
	<ul>
    	<li id="finderr">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Finder</span></em>
                <img src="res/img/FinderIcon.png" alt="Finder"/>
            </a>
        </li>
        <li id="launchPad">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Launchpad</span></em>
                <img src="res/img/launchPad.png" alt="Launchpad"/>
            </a>
        </li>
        <li id="expose">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Mission Control</span></em>
                <img src="res/img/expose.png" alt="Mission Control"/>
            </a>
        </li>
        <li id="appStore">
        	<a href="#warning" data-rel="showOp">
            	<em><span>App Store</span></em>
                <img src="res/img/appstore.png" alt="App Store"/>
            </a>
        </li>
        <li id="safari">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Safari</span></em>
                <img src="res/img/Safari.png" alt="Safari"/>
            </a>
        </li>
        <li id="iChat">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iChat</span></em>
                <img src="res/img/ichat.png" alt="iChat"/>
            </a>
        </li>
        <li id="facetime">
        	<a href="#warning" data-rel="showOp">
            	<em><span>FaceTime</span></em>
                <img src="res/img/facetime.png" alt="Facetime"/>
            </a>
        </li>
        <li id="addressBook">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Address Book</span></em>
                <img src="res/img/address.png" alt="Address Book"/>
            </a>
        </li>
        <li id="preview">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Preview</span></em>
                <img src="res/img/preview.png" alt="Preview"/>
            </a>
        </li>
        <li id="iTunes">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iTunes</span></em>
                <img src="res/img/iTunes.png" alt="iTunes"/>
            </a>
        </li>
        <li id="preferences">
        	<a href="#warning" data-rel="showOp">
            	<em><span>System Preferences</span></em>
                <img src="res/img/preferences.png" alt="System Preferences"/>
            </a>
        </li>
        <li id="trash">
        	<a href="#trash" data-rel="showOpTrash">
            	<em><span>Trash</span></em>
                <img src="res/img/trash.png" alt="Trash"/>
            </a>
        </li>
    </ul>
</div>

</div>


<script type="text/javascript">
        $('#pageLogin').addClass('initLog').delay(1900).queue(function() { $(this).removeClass('initLog').addClass('initLogExit'); $(this).dequeue(); });;
        $('#page, #head').delay(2500).queue(function() { $(this).addClass('vis'); $(this).dequeue(); });
        $('.window').delay(3000).queue(function() { $(this).addClass('windows-vis'); $(this).dequeue(); });
</script>

<?php } ?>



</body>
  

</html>
