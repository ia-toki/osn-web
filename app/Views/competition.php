<?= $this->extend('default') ?>

<?= $this->section('content') ?>
	<h2>
		<?php if (isset($prevCompetition)): ?>
			<a role="button" href="/<?= $prevCompetition['ID'] ?><?= $submenu ?>" class="bp3-button bp3-small bp3-icon-chevron-left"></a>
		<?php endif ?>
		<?= $competition['Name'] ?>
		<?php if (isset($nextCompetition)): ?>
			<a role="button" href="/<?= $nextCompetition['ID'] ?><?= $submenu ?>" class="bp3-button bp3-small bp3-icon-chevron-right"></a>
		<?php endif ?>
	</h2>

	<?php if ($isNational) : ?>
		<div class="bp3-button-group section">
			<a role="button" href="/<?= $competition['ID'] ?>" class="bp3-button <?= $submenu == '' ? 'bp3-active' : '' ?>">Informasi</a>
			<a role="button" href="/<?= $competition['ID'] ?>/peraturan" class="bp3-button <?= $submenu == '/peraturan' ? 'bp3-active' : '' ?>">Peraturan</a>
		</div>
	<?php endif; ?>
	<div class="bp3-button-group section">
		<a role="button" href="/<?= $competition['ID'] ?>/hasil" class="bp3-button <?= $submenu == '/hasil' ? 'bp3-active' : '' ?>"><?= $isFinished ? 'Hasil ' : 'Hasil Sementara '?>Peserta</a>
		<?php if ($isNational) : ?>
			<a role="button" href="/<?= $competition['ID'] ?>/provinsi" class="bp3-button <?= $submenu == '/provinsi' ? 'bp3-active' : '' ?>"><?= $isFinished ? 'Hasil ' : ''?>Provinsi</a>
		<?php endif; ?>
	</div>

	<?php if ($isNational) : ?>
		<div class="bp3-button-group section">
			<a role="button" href="/<?= $competition['ID'] ?>/open" class="bp3-button <?= $submenu == '/open' ? 'bp3-active' : '' ?>">Open Contest</a>
		</div>
	<?php endif; ?>

	<?= $this->renderSection('subcontent') ?>

<?= $this->endSection() ?>
