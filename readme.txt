=== WP Courseware ===
Contributors: flyplugins
Plugin URI: http://wpcourseware.com
Author URI: http://flyplugins.com
Tags: WordPress LMS,WordPress eCourse,WordPress Courseware,Word Press Learning Management System
Requires at least: 4.0
Tested up to: 4.7.2
Stable tag: 4.0.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WordPress's leading Learning Management System (L.M.S.) plugin and is so simple you can create an online training course in minutes.

== Description ==

What is WP Courseware? WP Courseware is a WordPress premium plugin that allows you to create an online curriculum or “e-course” also known as a learning management system. You simply engineer your course with modules and add units within the modules depending on how you want to set up your curriculum or sequential content. You can add video, audio, textual content, quizzes or even downloadable lessons to your units. You can order the units and quizzes by simply dragging and dropping within the various modules. Finally, a learning management system WordPress plugin that will make it easy to run your online training course. With WP Courseware, the sky is the limit! WP Courseware integrates with some of the most popular membership plugins like iThemes Exchange Membership, Paid Memberships Pro, MemberPress, WishList Member, Magic Member, S2 Member and more to come. A membership integration creates a powerful, fully automated, online membership e-learning selling platform.

== Installation ==

1. Go in to your WordPress Admin Panel
2. Navigate to Plugins-->Add New and click upload
3. Browse for the wp-courseware.zip file and click upload
4. Now click activate

== Frequently Asked Questions ==

= Is WP Courseware compatible with membership plugins? =

WP Courseware is compatible with most membership plugins. However we do have integration with:

* WooCommerce
* Easy Digital Downloads
* iThemes Exchange Membership
* WishList Member
* Magic Member
* MemberPress
* Paid Memberships Pro
* Member Sonic
* Premise
* S2Member
* Memberium
* Digital Access Pass
* Ontraport

= Does WP Courseware support mobile interface? =

That all depends on your WordPress theme. If you theme supports mobile, then your online course should follow suite.

= What type of training material can I add to each unit? =

You can add anything you would normally add to a page or a post with in WordPress. You can add photos, video, audio, downloadable PDF's, hyperlinks etc...

= How do I update WP Courseware? =

When an updates is available you can update WP Courseware just like you would a plugin that is installed from the WordPress Plugin library. Keep in mind this requires you to have an active license subscription.

= Where can I find the tutorial videos? =

You can find our training videos in:

* The documentation section of the WP Courseware plugin 
* Check out our [You Tube channel](http://www.youtube.com/flyplugins)

== Changelog ==

= 4.0.6 =
* Fix: Bug where text domain was missing and adjusted several text strings
* Fix: Bug where the option to display "all possible answers" was not including the "correct answer" in the list when listing them on the quiz results page
* Fix: Bug where time difference was not displaying properly on the user's quiz details page
* Fix: Bug where the answer later button wouldn't display on the first quetion of a quiz retake
* Fix: Bug where the answer later button was not redirecting to the correct question
* Fix: Bug where a missing parameter in function call was causing notices to display in error log
* Fix: Bug where the random answers function was not functioning properly when using a random question selection
* Tweak: Updated the EDD Software Licensing Plugin Updater Class 

= 4.0.5 =
* Fix: Bug where adding a new answer would not save correctly
* Fix: Bug where randomized answers on multiple choice questions didn't render consistently when using a paging quiz
* Fix: Bug when adding an individual to question pool was not error checking correctly
* Fix: Bug where the open ended survey question didn't have option for text box size
* Fix: Fixed a few text domain strings that didn't get changed with version 4.0.3
* Fix: Fixed issue where units and quiz data was not updated correctly when a module was reassigned to another courses

* Tweak: Course unit templates are included in export/import

= 4.0.4 =
* New: Support added for WP Courseware Note addon plugin by WisdmLabs 
* Fix: Fixed bug when adding an answer to a multiple choice question would automatically select it as the correct answer

* Tweak: Added checking for duplicate answers in multiple choice questions


= 4.0.3 =
* New: Built in MathJax support for quiz questions
* New: Shortcodes are now supported in quiz questions, however, shortcodes must NOT be loaded via JavaScript
* Fix: Bug where unassigned unit was showing an error on the front end due to not being assigned
* Fix: If using a non-blocking quiz, the grade was not displaying correct data on the "Detailed User Quiz/Survey Results" page
* Fix: Fixed bug that prevented email templates from being localized

* Tweak: Changed text domain from wp_courseware to wp-courseware. There is backward compatibility for the legacy wp_courseware text domain. Language files can be kept in "wp-content/languages/wp_courseware/" or "wp-content/languages/plugins/wp-courseware/"

= 4.0.2 =
* Fix: Fixed issue where the option for quiz attempts would not show up when configuring a blocking quiz
* Fix: Fixed a minor issue with enrollment that would trigger database errors if no course data was passed into the query

= 4.0.1 =
* Fix: Fixed bug where grade book CSV was not downloadable
* Fix: Fixed bug where some quiz questions couldn't be deleted out of a quiz
* Fix: Fixed bug where plugin was not communicating with our license server and displaying an "Exceeded license limit" error

= 4.0 =
* New: Added instructor role
* New: Instructor role create/edit/delete course capability
* New: Instructor role create/edit/delete module capability
* New: Instructor role create/edit/delete unit capability
* New: Instructor role create/edit/delete quiz/survey capability
* New: Instructor role create/edit/delete quiz questions capability
* New: Instructor role create/edit/delete quiz question tags capability
* New: Instructor role create new user
* New: Instructor role can enroll/de-enroll user from course and update course progress
* New: Certificates can now be configured per course

* Tweak: Units support post password protected content
* Tweak: Updated the data_quiz column in the wpcw_user_progress_quizzes table to use LONGTEXT
* Tweak: Restructured certificates to be executed by function opposed to called directly by file

* Fix: Fixed issue when deleting modules containging units/quizzes would place units in an unassigned state with the quiz still attached
* Fix: Download Certificate button opens certificate in new window
* Fix: Fixed issue where download results setting was not working correctly
* Fix: File upload question type does not require a lower case file extension
* Fix: Fixed issue where not all user messages were being exported correctly

= 3.9 =
* New: Course prerequisites
* New: Bulk question import
* New: Single question input option directly to question pool
* New: Added filter to course units screen to filter by course

* Tweak: Download Results PDF in new tab

* Fix: Fixed a bug where unit would get marked as completed unexpectedly
* Fix: Updated a call to construct that was causing an error on admin screens that contained tables


= 3.8.5 =
* New: Multiple choice question now has multiple answer option
* New: Added CSS ’active’ element status to course progress widget for better styling ability

* Fix: Fixed a bug where quiz question answers were not randomizing correcly

* Tweak: Added function that will check for a completed quiz sitting on top of an uncompleted unit
* Tweak: Updated constructors to be compliant with PHP7
* Tweak: Added screen options to Course Dashboard Page

= 3.8.4 =
* New: Added two new email template tags for {FIRST_NAME} and {LAST_NAME}
* New: Added new filter wpcw_front_completion_box to filter content between the course unit loop content and the navigation buttons
* New: Added an option to hide the Dowload Results button
* New: Added an option to enable/disable the ability to turn on comments for course units
* New: Added a new shortcode for course enrollment buttons
* New: Added a search and paging function to the course dashboard

* Tweak: Changed certificate button to open certificate in new window

* Fix: Fixed minor bug with question tag maintenance routine
* Fix: Fixed a minor bug with AJAX call over HTTPS that would not allow course units to be completed
* Fix: Fixed minor issue where certain text strings with a particular keyword were not being included into the language file

= 3.8.3 =
* New: Added shortcode parameter "user_quiz_grade" to the [wpcourse_progress] and [wpcourse] shortcodes to display quiz grades
* New: Added shortcode parameter "certificate" to the [wpcourse_progress] to display certificate
* New: Made certificate button available on the user progress page
* New: Added course completion date column to the grade book
* New: Added course completion date to the grade book export CSV

* Fix: Issue where duplicate notifications were sent out upon course completion when the last unit contained a quiz that required manual grading
* Fix: Bulk user progress reset was not working

* Tweak: Changed the priority output of the column/row elements displaying on the users page
* Tweak: Changed the color of the "Delete Course" and "Delete Module" buttons

= 3.8.2 =
* Fix: Fixed issue where progress percentage was being completely reset upon resetting students progress to an earlier module/unit

= 3.8.1 =
* Fix: Fixed issue with "All units visible" not displaying the "next button" on course units
* Fix: Fixed issue with non-blocking quizzes in which the quiz results message and custom feedback messages would remain persistant upon retaking a quiz
* Fix: Fixed issue with blocking quiz custom feedback messages in which "failed" messages would not to appear

= 3.8 =
* New: Drip feed functionality. Drip feed based on interval from course enrollment date or drip feed based on calendar date
* New: Customizable drip feed email notification
* New: Custom enrollment date configuration option
* New: Tag query has been improved to be much more efficient. Thanks to Andy Adams @andyonsoftware http://www.certainlysoftware.com/

* Tweak: Next/Previous button code improved to be more efficient
* Tweak: When sending a unit in to the trash, the quiz will disassociate frmo the unit

* Fix: When a unit is sent to trash, the course order will be saved at that point to prevent a 404 from occuring in the course
* Fix: Adjusted widget code to be compliant with WordPress 4.3
* Fix: When a users progress is reset, the certificate is removed and the final grade notification sent flag is removed
* Fix: Module Number email tag is now working on respective email notifications

= 3.7 =
* Fix: Fixed bug where quiz timer wouldn't start if max attempts were reached for quiz and an additional retake was allowed

= 3.6 =
* Fix: Fixed bug where deleting question from pool would not delete associated tag
* New: Added function to clean up orphaned tags upon plugin activation

= 3.5 =
* Fix: Fixed bug with user email notification posting incorrect grade after quiz was manually graded
* Fix: Fixed bug where duplicate email notifications were sent out if a manually graded quiz was placed on the last unit of the course

= 3.4 =
* Fix: Fixed bug with quiz messaging
* Fix: Fixed bug where the unit of non blocking quiz was not being being flagged as completed upon submitting quiz causing course not to complete
* Fix: Fixed issue where student’s answers for open ended quiz questions were not showing line breaks (carriage returns) on post

= 3.3 =
* Fix: Fixed bug with filter when adding a quiz questions from pool into quiz
* Fix: Fixed bug where a quiz could be dragged/dropped onto an unassigned unit

* Tweak: Certificate to be UTF-8 removing the options for specific encoding

* New: Added 2 more fonts for certificates and quiz results and removed Helvetica which didn’t work well with other languages
* New: Added support for line breaks (by using carriage return) with in quiz questions while leaving ability to have html tags as part of a question


= 3.2 = 

* Fix: Fixed issue where clicking "mark as completed" was displaying even if unit was complete
* Fix: Fixed issue with multiple choice question answer randomization
* Fix: Fixed issue with adding an image to a quiz question answer while working directly in the question pool
* Fix: Fixed issue with adding/removing answer from a multiple-choice question while working directly in the question pool

= 3.1 = 

* New: Added option to provide a recommended guideline score for non-blocking quizzes
* New: Added support for timed quizzes when in non-blocking quiz mode
* New: Added support for setting a retake limit for non-blocking quiz mode
* New: Added a new option in the quiz results settings which allows for the display of all possible answers in addition to the user's answer and the correct answer

* Tweak: Added email address support for new TLDs

* Fix: Database issue with adding quiz questions
* Fix: Issue with handling user course deletion

= 3.0 =

* New: Quiz question pool to allow for recycling of questions in multiple quizzes
* New: Support for randomizing quiz questions or manually adding specific questions from question pool
* New: Support for randomized answers within multiple choice questions
* New: Option for timed quizzes
* New: Support for quiz attempt limits with manual override capabilities for instructors
* New: Custom feedback messages which provide feedback by quiz topical sections
* New: Option to tag quiz questions for use in randomizing questions by topical section and providing automated feedback messages
* New: Option for students to download quiz results as a PDF
* New: Multiple options for paginating quiz questions
* New: Redesigned and enhanced quiz/survey creation UI
* New: Improved question addition UI for quizzes
* New: Several new email template tags for sending quiz result details to students

= 2.9 =

* New: Leave survey responses available for later
* New: Delete the entire course and its contents or retain units and quizzes
* Tweak: Support for quizzes when exporting and importing courses

= 2.8 =

* New: Encoding support for the certificate
* New: Export survey results
* New: Added new hooks/filters
* Fix: Addressed various strings that were missing a text domain 
* Fix: Several bugs in relation to the database

= 2.7 =

* New: Custom templates capability 
* New: Sort courses by ID
* New: Sort courses title
* New: Sort quizzes by ID
* New: Sort quizzes by title
* New: Duplicate course units

* Tweak: No Answers" quiz option to not indicate which answers were correct/incorrect

= 2.62 =

* Fix: Quiz calculation bug

= 2.61 =

* Fix: Quiz database bug error

= 2.6 =

* New: Ability to show correct answer in quiz 
* New: Ability to show users answer in quiz
* New: Show explanation in quiz
* New: Mark answers correct/incorrect in quiz
* New: Leave quiz results available for later viewing
* Fix: Quotes in quiz question issue 
* Fix: True false question with regard to accessibility in clicking the label to select an answer 
* Fix: Grade book export file name to a more appropriate name 
* Fix: Shortcode for the progress ID greater than “9” 
* Fix: Ability to expand/contract all modules when adding a WPCW Course Progress widget with a specific class to any page or post

= 2.51 =

* New: Modified video documentation

= 2.5 =

* New: Global and individual student course reset functions
* New: Global enrollment button for new courses (including admins)
* New: Ability to add images to all quiz questions and answers
* New: Shortcode function for dynamic course outline complete with user progress bar and cumulative grade

= 2.4 =

* New: Grade book function
* New: Open ended question (with short, medium and large boxes for answers and hints)
* New: Upload question (with file filters)
* New: New email notifications for grade book
* New: Organized course settings page
* New: Various notifications for instructor to input manual grades for open ended questions and upload submission
* New: Exportable grade book
 
* Fix: Dynamic sidebar widget issue that would cause the sidebars in the WordPress admin panel to disappear

= 2.32 =

* New: Dynamic sidebar widget
* Fix: Allow an imported course to be registered by an enrolled user
* Fix: Delete a multiple choice quiz question if the answer was set to "0"

= 2.31 =

* New: Additional localization areas
* Fix: "Force Table Upgrade" bug that didn't properly update all tables
* Fix: Certificate availability if last unit contained quiz or survey
* Fix: Module list bug on the student progress page to list correct module number
* Fix: Import users bug which added additional mime types for Microsoft Office(TM) users

= 2.3 =

* New: Bulk user import function with template (CSV) file included
* New: Certificate feature allowing a user to download a custom certificate upon course completion
* New: Localization enhancements with default template (POT) file included
* New: Functions added to support add-on integration with multiple membership plugins
* Fix: Apostrophe bug that created backslashes in a quiz questions
* Fix: FireFox bug that didn't allow you to add questions in a quiz
* Fix: Unassigned units and unassigned quizzes overflow
* Fix: Search for plugin bug showing empty details area in lightbox
* Fix: MySQL strict mode bug that would cause MySQL errors if MySQL was run in strict mode

= 2.2 =

* Fix: Bug that prevented WP Courseware from receiving future updates

= 2.1 =

* Fix: Bug that stopped you being able to add a question if your WordPress database table prefix was something other than wp_

= 2.0 =

* New: Quiz/Survey functionality
* New: "Powered by WP Courseware" link which utilizes ClickBank for affiliate type commissions
* Fix: 404 error bug  Added Next/Previous navigational buttons to course units

= 1.1 =

* New: additional documentation

= 1.0 =

* Base Plugin Release
