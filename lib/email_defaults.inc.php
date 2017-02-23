<?php
/**
 * Email Defaults
 *
 * @since    4.0.3
 * @package  WP_Courseware
 */

/**
 * Get Email Template Message
 *
 * @since 4.0.3
 *
 * @param string $template_name The name of the template.
 *
 * @return string $template_text The template text.
 */
function wpcw_get_email_template_text( $template_name ) {
	/* Template text holder */
	$template_text = '';

	/* Quick check */
	if ( ! $template_name ) {
		return $template_text;
	}

	/* Get the template text by template name */
	switch ( $template_name ) {
		case 'EMAIL_TEMPLATE_COMPLETE_MODULE_SUBJECT':
			$template_text = __( 'Module {MODULE_TITLE} - Complete.', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_COMPLETE_MODULE_BODY' :
			$template_text = __( 'Hi {USER_NAME}

Great work for completing the "{MODULE_TITLE}" module!

{SITE_NAME}
{SITE_URL}', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_COMPLETE_COURSE_SUBJECT' :
			$template_text = __( 'Course {COURSE_TITLE} - Complete', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_COMPLETE_COURSE_BODY' :
			$template_text = __( 'Hi {USER_NAME}

Great work for completing the "{COURSE_TITLE}" training course! Fantastic!

{SITE_NAME}
{SITE_URL}', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_QUIZ_GRADE_SUBJECT' :
			$template_text = __( '{COURSE_TITLE} - Your Quiz Grade - For "{QUIZ_TITLE}"', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_QUIZ_GRADE_BODY' :
			$template_text = __( 'Hi {USER_NAME}

Your grade for the "{QUIZ_TITLE}" quiz is:
{QUIZ_GRADE}

This was for the quiz at the end of this unit:
{UNIT_URL}

{QUIZ_RESULT_DETAIL}

{SITE_NAME}
{SITE_URL}', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_COURSE_SUMMARY_WITH_GRADE_SUBJECT' :
			$template_text = __( 'Your final grade summary for "{COURSE_TITLE}"', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_COURSE_SUMMARY_WITH_GRADE_BODY' :
			$template_text = __( 'Hi {USER_NAME}

Congratulations on completing the "{COURSE_TITLE}" training course! Fantastic!

Your final grade is: {CUMULATIVE_GRADE}

Here is a summary of your quiz results:
{QUIZ_SUMMARY}

You can download your certificate here:
{CERTIFICATE_LINK}

I hope you enjoyed the course!

{SITE_NAME}
{SITE_URL}', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_UNIT_UNLOCKED_SUBJECT' :
			$template_text = __( 'Your next unit ({UNIT_TITLE}) is now available!', 'wp-courseware' );
			break;
		case 'EMAIL_TEMPLATE_UNIT_UNLOCKED_BODY' :
			$template_text = __( 'Hi {USER_NAME}

Good news! You can now access the next unit!

The unit called "{UNIT_TITLE}" from "{COURSE_TITLE}" is now available for you to access.

To access the unit, just click on this link:
{UNIT_URL}

Thanks!

{SITE_NAME}
{SITE_URL}', 'wp-courseware' );
			break;
		default :
			break;
	}

	return $template_text;
}
