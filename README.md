# README #
Version 1.1.1
Works on PHP 5.6

### Business Theme Options ###
This is where you change the basic info of your site. You can find this page under Appearance -> Business Theme.  

1. The first three options: the position of the navigation bar, whether or not it is sticky, and adding google analytics.
2. The social share buttons option is for links on individual blog posts.
3. The Blog Layout and Featured Boxes Style don't yet work properly, please ignore them for now.
4. The Related Posts option put related posts on the single posts page.
5. Latest Post option is to put latest posts on the homepage (I think we're moving away from this.)
6. Extra Widgets Areas - Default is Blog Sidebar, Header, and Footer Widget Area.
    1. The usual widgets for the header is for a text widget for the phone number and a search widget.
    2. When you actually go to the Widget page, the Footer Widget Area is actually 3 areas: Left Widget, Middle Widget and Right Widget
7. Extra Post Types automatically makes you some extra post types.

* You can also Import/Export these options.
* Shortcode Guide correct but incomplete.


### Building a Page ###
Note: Images doesn't work locally yet.

How to build a page:
1. Add a New Page, set template to Parent page, publish.
2. To add a new subsection to the page, Add a New Page, set template to Subsection page, with the page in step 1 as parent.
  * There are 7 types of subsections:
    1. Visual (banner)    
    2. Services or List
    3. Validation (slider)
    4. Half ( half image and half text )
    5. Full
    6. CTA
    7. Map
  * You can change the order the subsections appear in the page attributes.


### Explaining the Subsections ###
* On the sidebar on the right, you can change the background, text color, whether or not it has a shadow to separate it from the next subsection. You can also add a class to every subsection. Select a color or a Featured Image to use as the background of a section.
* If you don't choose a background color or image, the subsection will have a slight gradient on it by default.
* The tracking doesn't work yet. ¯\\(•_•)/¯

Steps to building out the **Visual** Subsection:
1. Enter title (something like "banner" would do, to describe which part of the page it is.)
2. From the Front page subsections dropdown, pick Visual.
3. To show a title, click the Show Title checkbox to add Title.
4. To add a paragraph, use the Intro Text.
5. To add a video background, put the url of the video in the Video Url.
6. Click Show Button to add a button.
    * Add Text to the button
    * Choose the Link where the button goes to.
    * Optional: adding classes to the button.
The text should be automatically centered.

Options unique to **Services or List** Subsection:
1. Type - You can *Choose* from a list of posts (which includes pages, blog posts, media, and other custom post types) or a number of *Recent* posts from a post type.
2. If you picked Choose, you can choose up to 5 pages, posts, etc.
3. Recent would show recent posts of that particular post type. You can also change the number of posts shown.
4. Show - you can change which shows up from the posts: including Featured Image, Title, Excerpt, and Read More button. There is also a choice to round the featured image.

**Validation** Subsection:
This is similar to the Services subsection but with less options. These show up as a slider.

**Half** Subsection:
Choose an Image, Text Position, Text.

**Full** Subsection:
This is just a full width text block. Unlike the Visual subsection text is not centered.

**CTA** Subsection:
This is is similar to the Visual subsection but the button is to the side if there is a title or intro text.

**Map** Subsection:
Adding an address will also add a map. It does require a Google API Key to work though.
You can add extra phone numbers and emails as necessary.

### Extras ###

**How to add Social Media in the footer:**
* Just start adding them as custom links and make the Display Location as Social Links Menu.

**Custom Widgets:**
* Contact Info, and Headlines on Homepage  

**Featured Images**
* Pdfs can have featured images that will show up when they are added to the List subsection.
* Categories can have banners, when you edit the category there's an option to add a featured image.


### Who do I talk to? ###

* Repo owner
* yvonne.tse@brafton.com
