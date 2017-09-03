<?php
	MetaTagManager::setWindowTitle($this->request->config->get("app_display_name").": Copyright");
?>

	<div class="row">
		<div class="col-sm-12">
			<H1><?php print _t("Copyright"); ?></H1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
<p>Copyright &copy; 2008-<?php echo date("Y"); ?> Barry Hoggard and James Wagner. Some rights reserved</p>
<p>Copyright and other proprietary rights in material on this site may be held by individuals or entities other than or in addition to Barry Hoggard and James Wagner.</p>
<p>If you believe that material posted on this site is infringing, please follow the procedures set forth in our <?php print caNavLink($this->request, 'Digital Millennium Copyright Act Notice Policy', '', '', 'About', 'DMCA') ?>, which is incorporated herein by reference.</p>
		</div>
		<div class="col-sm-3 col-sm-offset-1">
		</div>
	</div>
