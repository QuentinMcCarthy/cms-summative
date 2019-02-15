		<?php if ( is_active_sidebar( 'main-footer' ) ): ?>
			<div class="row mx-0">
				<div class="col">
					<div class="row">
						<div class="col px-0">
							<div id="main-footer" class="d-flex justify-content-center p-1 border-top border-dark">
								<?php dynamic_sidebar( 'main-footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php wp_footer(); ?>
	</body>
</html>
