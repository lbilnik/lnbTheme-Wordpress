<?php wp_list_comments();  ?>

<?php if( comments_open() ) : ?>
<?php comment_form(array (
	'comment_notes_after' => '',
				)); ?>
				
<?php else : ?>
	<p>Komentarze zosta³y wy³aczone</p>
<?php endif; ?>