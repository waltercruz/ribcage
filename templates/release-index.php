<?php
global $releases, $release;
?>
<?php get_header() ?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=320,height=140,left = 560,top = 410');");
}
// End -->
</script>
	<div id="container">
		<div id="content">
			<div id="post-17" class="hentry p1 page publish author-alex category-uncategorized tag- y2007 m07 d19 h23">
				<h2 class="entry-title">Releases</h2>
				<div class="entry-content">
					<?php while ( have_releases () ) : the_release() ; ?>
					<img src="<?php release_cover_tiny ();?>" align="right" style="margin-left: 20px; border" />
					<h3><?php echo get_artistname_by_id($release['release_artist']); ?> - <?php release_title(); ?></h3>
					<p><?php release_blurb_short(); ?></p>
					<p><a>More Information</a> - <a href="javascript:popUp('<?php release_player_link (); ?>')">Listen Now</a> - Free Download</p>
					<?php endwhile; ?>
				</div>
			</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- #container -->
<?php get_sidebar() ?>
<?php get_footer() ?>