<nav class="nav-primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<ul id="menu-main-nav" class="menu genesis-nav-menu menu-primary">
		<?php if ( ! $user_is_logged_in ) : ?>
		<li class="menu-item menu__join">
			<a href="<?php echo home_url( 'join-the-wordpress-developers-club' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-code" aria-hidden="true"></i> Join</span></a>
		</li>
		<?php endif; ?>
		<li class="menu-item menu__library<?php if ( is_page( 'members-goodies-directory' ) ) { echo ' current-menu-item'; } ?>">
			<a href="<?php echo home_url( 'members-goodies-directory' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-list-ul" aria-hidden="true"></i> Goodies Directory</span></a>
		</li>
		<?php if ( $user_is_logged_in ) : ?>
		<li class="menu-item menu__slack">
			<a href="https://wpdevelopersclub.slack.com" itemprop="url"><span itemprop="name"><i class="fa fa-slack" aria-hidden="true"></i> Slack</span></a>
		</li>
		<li class="menu-item menu__signin">
			<a href="<?php echo wp_logout_url( home_url() ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</span></a>
		</li>
		<?php else : ?>
			<li class="menu-item menu__signin">
				<a href="<?php echo wp_login_url( get_permalink() ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</span></a>
			</li>
		<?php endif; ?>
	</ul>
</nav>