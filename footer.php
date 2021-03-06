    <footer id="footer">
		<div id="main-footer">
			<div class="container-custom-h">
				<div class="row">
					<div id="footer-content">
						<ul class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<h6>Menu</h6>
							<li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
							<li><a href="./programas">Programas & Eventos</a></li>
							<li><a href="./mensagens">Mensagens</a></li>
							<li><a href="./contato">Contato</a></li>
						</ul>

						<ul class="col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12">
							<h6>Contato</h6>
							<li>Email: <?php echo get_theme_mod( 'email_section' ); ?></li>
							<li>Telefone: <?php echo get_theme_mod( 'telefone_section' ); ?></li>
							<li>Whatsapp: <?php echo get_theme_mod( 'whatsapp_section' ); ?></li>
						</ul>

						<iframe src="https://maps.google.com/maps?width=&amp;height=&amp;hl=en&amp;q=Jos%C3%A9%20Caetano%20Ruas%2C%201522+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" class="col-xl-4 col-lg-4 col-md-12" width="400" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<div id="bottom-footer">
			<div class="container-custom-h">
				<div class="row">
					<div id="developed-by" class="col-12">
						<div class="text-center">
							<p>Developed by: Guilherme R.</p>
							<p>guilhermerl.dev@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>

<?php wp_footer(); ?>
</body>
</html>
