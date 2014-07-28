=== crosswordsearch ===
Contributors: ccprog
Tags: game, crossword, shortcode, educational, multilingual
Requires at least: 3.6
Tested up to: 3.9.1
Stable tag: trunk
License: see LICENCE file
License URI: https://github.com/ccprog/crosswordsearch/LICENCE

Adds a wordsearch-style crossword with a shortcode. Users can develop new riddles, save them depending on specific rights, or solve stored riddles.

== Description ==

Crosswordsearch is a WordPress plugin, based on the [AngularJs](http://angularjs.org/)
Javascript framework, for designing and playing wordsearch-style crosswords. 
It is being developed for [RadiJojo.de](http://radijojo.de), the International Children's
Media Network.

* Page visitors may try to solve the published riddles.
* Registered users may develop new riddles or modify existing ones depending on their rights.
* For saving their work, they must not be logged in, but only give their user name and
  password at the time of upload.
* Each crossword may contain a freetext description of the task to complete and the name of a
  copyright owner.
* Crosswords have a difficulty level that relates to the used word directions and the
  listing of the searched words before they have been found.
* Crosswords are organised in projects that share a common set of editors.
* Users may be given a *restricted editor* status, which gives them the right to upload
  new riddles. These riddles will only become visible for other users if a *full editor*
  approves them.
* Default and maximum difficulty levels are set for projects.
* Setting up projects and editors is reserved to the blog administrators.

= Shortcode usage =

Authors can add a shortcode tag to any page or post to add a Crossword game to that page:

`[crosswordsearch mode="solve" project="MyProject"]`

will add a game area for solving riddles that belong to the project `MyProject`. All saved
and approved riddles belonging to the project can be loaded through a menu.

`[crosswordsearch mode="solve" project="MyProject" name="MyFirstCrossword"]`

will show only the crossword `MyFirstCrossword` for solving. No other crossword will be
selectable.

`[crosswordsearch mode="build" project="MyProject"]`

will add a game area for developing new and editing existing riddles that belong to the
project `MyProject`. All saved and approved riddles belonging to the project can be
loaded through a menu. Initially visible will be the riddle with the alphabetically first
name.

`[crosswordsearch mode="build" project="MyProject" name="MyFirstCrossword"]`

works as above, but will initially show the crossword saved under the name `MyFirstCrossword`.
All other riddles can still be loaded through the menu.

`[crosswordsearch mode="build" project="MyProject" name=""]`

works as above, but will initially show an empty new crossword.

`[crosswordsearch mode="build" restricted="1" project="MyProject"]`

will add a game area for developing new riddles for the project `MyProject` by restricted
editors. Restricted editors can work on a riddle as long as they stay on the page,
but it will not be visible for anyone else. No menu for selecting other riddles is
presented, and on page load an empty new crossword will be shown.

== Installation ==

1. Install from *Plugins -> Add New*
2. Or download the .zip and extract to `wp-content/plugins`
3. Activate the plugin from the *Plugins* menu
4. Go to *Settings -> Crosswordsearch* for the next steps

= User management =

The *Options* tab is used to hook up the Worpress user roles to crossword editing rights.
For each role you can choose between three categories:

* *none* means users with that role may intereract the same way as casual page visitors.
  They may solve published riddles, design a new riddle, or work on the modification of an
  existing riddle, but they are not allowed to save the result of their development.
* *restricted* means users with that role may design new riddles on pages that display
  the app in **build** mode and with the **restricted** modifier set. They can save
  the result of their development, but it will not appear on other pages unless they
  are approved by a full editor.
* *full* means users with that role may design a new riddle, or work on the modification
  of an existing riddle. If they have been added to the editors of a **project**, they
  can save their work.  
  Full editors have access to the *Review riddles in projects* tab of the
  *Settings -> Crosswordsearch* page, but they will only see riddles in projects where
  they have been added to the editors. For those projects, they can preview riddles,
  delete them or approve pending riddles by restricted editors.

= Content management =

The *Assign projects and editors* tab is used to set up projects. Each crossword belongs
to a project, so you need at least one project before you can successfully use the
shortcode.

While the role setup gave users the *potential* right to save their crosswords, they need
to be added to the project's *Full project editors* list to actually do so. Note that
this holds true for all users, even administrators.

*Restricted* users can save their riddles for approval in all projects. Every user with
an appropriate role is authorized for this action, there is no per-user permission.

== Frequently Asked Questions ==

= Which work flows for adding new riddles are possible? =

There are two possible setups for crossword development by users:

1. **Restrict development to trusted users:**  
    If you use pages with the app in **unrestricted build** mode, everyone assigned as an
    editor for the project has full control over the appearance of every crossword.
    This includes editing and deleting riddles by others.  
    A possible use for that scenario may be a classroom situation: students can work on
    riddles, but only the teacher knows the editor credentials and may approve
    anything for saving.

2. **Invite development and moderate:**  
    If you use pages with the app in **restricted build** mode, you treat new uploads as
    proposals. For example, you could confer to all subscribers or contributors the rights
    of a restricted editor. It would be the responsibility of the full editors to review and
    approve these proposals for publication.

= Is it possible to limit the restricted editing right to specific users? =

Restricted editing right is linked to a user role, and every user with that role has
the right. If you are not happy with the coupling to standard Wordpress roles, you
should consider introducing custom roles. There are plugins that deal with adding new
roles and managing their capabilities.

= Is it possible to limit the restricted editing to specific projects? =

That is quite simply done by publishing a **restricted build** page only for that project.

= Why is it impossible to edit riddles from the preview on the settings page? =

As the development of a crossword must be considered as an activity protected by copyright,
there should be no 'backdoor' for altering them. The preview page is meant for moderation.
Altering the name of crosswords from that page is considered for future versions.

= Is it possible to limit the editing of existing crosswords to their original authors? =

That possibility is considered for future versions. The user id of the uploader is already
saved to the database, albeit at this point this information is not used anywhere.

== Screenshots ==

1. The app in **solve** mode
2. The app in **build** mode
3. The *save* dialogue
4. The *Assign projects and editors* tab

== Changelog ==

= 0.3.2 =
* Some CSS tweaks
* Installation fix: explicitly install InnoDB tables
* fix revision date and version for .po files


= 0.3.1 =
* Quick bugfix

= 0.3.0 =
* First public release

== Upgrade Notice ==


