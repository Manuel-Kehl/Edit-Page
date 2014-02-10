Edit Page 
==============

A very simple plugin for the GetSimple CMS which does nothing, but adding an "Edit this page" 
link below every page's content area.

I would prefer to use [Edit this Page](http://get-simple.info/extend/plugin/edit-this-page-plugin/26/), 
as it only prints the link, when the admin is logged into the backend, which makes a lot of sense
for production pages. But unfortunately this feature relies on the GSCOOKIEISSITEWIDE gsconfig setting, that
has been declared depracted since version 3.1 of the CMS, which renders the plugin unusable for websites 
with a GetSimple version of 3.1 or higher.

Potential Future Development
============================
For hiding the link from non-admin users I basically see two possibilities:
-  something like GSCOOKIEISSITEWIDE will be available for developers in a future version of GetSimple
-  one could hide it via css or JavaScript, so it is not obviously visible to a user that does not know about its existence (sort of a hack, but would do the trick)