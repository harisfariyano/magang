<div class="content">
	<div class="block block-rounded mx-9">
		<div class="block-content shadow-lg">
			<div class="text-center px-9 fw-bold">
				<p><?php echo $data_quest['quest'][0]->jenis_quest_title; ?></p>
			</div>
			<form method="post" action="answer/submitForm">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<?php
				$title = '';
				$no = 0;
				foreach ($data_quest['quest'] as $q) {
					if ($title != $q->sub_quest_title) {
						if ($title != '') {
							// Tutup div sebelumnya
							echo '</div></div>';
						}
						$title = $q->sub_quest_title;
						// Buka div baru untuk sub_quest_title yang berbeda
						echo '<div class="mb-5 border border-2 shadow-lg block block-rounded mx-5">';
						echo '<p class="fw-bold border block block-rounded bg-modern-dark text-gray px-5 py-3">' . $q->sub_quest_title . '</p>';
						echo '<div class="px-5 py-5 shadow-lgr" id="kuesioner-container">';
					}
					$no++;
				?>
					<div class="px-5">
						<p><?php echo $no . ' ' . $q->quesioner; ?></p>
						<div class="text-center">
							<label class="lab-up">Setuju</label>
							<input type="radio" name="<?php echo $q->id ?>" class="aggree" value="4" />
							<span style="margin:10px"></span>
							<input type="radio" name="<?php echo $q->id ?>" class="aggree" value="3" checked />
							<span style="margin:10px"></span>
							<input type="radio" name="<?php echo $q->id ?>" class="aggree" value="2" />
							<span style="margin:10px"></span>
							<input type="radio" name="<?php echo $q->id ?>" class="aggree" value="1" />
							<label class="lab-up">Tidak Setuju</label>
						</div>
					</div>
				<?php
				}
				if ($title != '') {
					// Tutup div terakhir
					echo '</div></div>';
				}
				?>
				<div class="text-center my-4">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>